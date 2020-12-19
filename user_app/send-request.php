<?php

require_once 'config.php';

include 'session.php';
if (isset($_POST['team_id'])) {
    $team_id = $_POST['team_id'];
    $user_id = $_SESSION['loggin_data'];
    $sql = $link->prepare("SELECT user_id,status from team_members where user_id=? and team_id=?");
    $sql->bind_param('ii', $user_id, $team_id);
    $sql->execute();
    $result = $sql->get_result();
    $row = $result->fetch_array(MYSQLI_ASSOC);

    if (($row['user_id'] == $user_id) && ($row['status'] == 1)) {
        $response['msg'] = 'User has already joined the team ';
    } else if (($row['user_id'] == $user_id) && ($row['status'] == 0)) {
        $response['msg'] = 'User request is pending';
    } else {
        $type = 0;
        $status = 0;
        $stmt = $link->prepare("INSERT INTO team_members(team_id,firstname,lastname,type,user_id,status) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param('issiii', $team_id, $firstname, $lastname, $type, $user_id, $status);
        if ($stmt->execute()) {
            $response['msg'] = 'ok';

            $sql = $link->prepare("SELECT user_id from teams where id=?");
            $sql->bind_param('i', $team_id);
            $sql->execute();
            $result = $sql->get_result();
            $row = $result->fetch_array(MYSQLI_ASSOC);
            $msg = " wants to join your team ";
            $admin_id = $row['user_id'];
            $notification_type = 1;
            $stmt = $link->prepare("INSERT INTO notification(page_link,msg,user_id,n_type,team_id) VALUES (?,?,?,?,?)");
            $stmt->bind_param('isiii', $user_id, $msg, $admin_id, $notification_type, $team_id);
            $stmt->execute();
        } else {
            $response['msg'] = 'something went wrong';
        }
    }
    echo json_encode($response);
}
