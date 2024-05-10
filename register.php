<?php
$step = 1;
session_start();
$success=false;
if (isset($_SESSION['success']))
{
    $success=$_SESSION['success'];
    unset($_SESSION['success']);
}
if (isset($_GET['step'])){
$step=$_GET['step'];

}
$_SESSION['step']=$step;
include('./function.php'); 
midleWare($step);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<?php  include('./partial/register_head.php');?>
</head>
<body>

<div class="container">
  <h2>sign up</h2>
<?php
if($success!=false){
    if(is_array($success)){
        foreach($success as $key => $value)
        {
            echo $value;
        }
    }

else{
    echo $success;
}
}
?>

<!-- multistep form -->
<form id="msform" action='./server/register_server.php' method="POST">
  <!-- progressbar -->
  <?php include('./partial/progress_bar.php')?>
  <!-- fieldsets -->
  <?php switch($step){
    case 1:
    {
     include('./partial/step1.php');
     break;   
    }
    case 2:
    {
        include('./partial/step2.php'); 
        break;  
   }
   case 3:{
    include('./partial/step3.php');   
    break;
   }
   default :{
    include('./partial/step1.php');
    break;
   }

  }
  ?>  
</form>
</div>
</body>
</html>
