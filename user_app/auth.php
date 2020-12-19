
<?php

//session_start();



function auth()
{
    if(isset($_SESSION['loggin_data']))
    {
        return true;
    }
    else
    {
        return false;
    }
}

?>