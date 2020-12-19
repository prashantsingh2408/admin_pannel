<?php
   require_once 'header.php';
require 'config.php';

$t_id=$_GET['token'];
$stmt=$link->prepare("SELECT * FROM ngos WHERE id=?" );
        $stmt->bind_param('i',$t_id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_array(MYSQLI_ASSOC);

   ?>
<div class="page-content header-clear-medium">
   <div class="content">
      <div class='container container-fluid text-center'>
      <h1 class="mb-4">Thank You <?= $firstname; ?></h1>

          <!-- <div class="row">
        <div class="col-4">
            <h1>100</h1>
            <p>Steps</p>
        </div>
        <div class="col-4">
            <h1>Rs 100</h1>
            <p>Impact</p>
        </div>
        <div class="col-4">
            <h1>10 Km</h1>
            <p>Distance</p>
       </div>
    </div>-->
          
      <img src="<?=$row['img']?>" class="w-100">
      <div class="d-inline fixed-bottom p-2 text-center">
        <a href="#" class="mr-3 mb-3 icon rounded-l icon-xl bg-white text-dark shadow-xl">
            <i class="fa fa-lg fa-thumbs-up"></i>
         </a>
         <a href="#" class="mr-3 mb-3 icon rounded-l icon-xl bg-highlight text-white shadow-xl">
            <i class="fa fa-lg fa-share-alt"></i>
         </a>
         <a href="index" class="mr-3 mb-3 icon rounded-l icon-xl bg-white text-dark shadow-xl">
            <i class="fa fa-lg fa-chevron-right"></i>
         </a>
      </div>
      </div>
   </div>
</div>
</div>
<?php
   require_once 'js-links.php';
   ?>