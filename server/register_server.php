<?php
session_start();
include('../connection.php');
    $step1_required_fields = ['email','pass','cpass'];
    $step2_required_fields = ['twitter','facebook','gplus'];
    $step3_required_fields = ['fname','lname','phone', 'address'];
    
    $step=$_POST['step'];

    $_SESSION['step-'.$step.'-data'] = $_POST;
     $next_step = $step;
    $total_step = 3;

    $error=[];
    switch($step){
        case 1: {
            $required_field=$step1_required_fields ;
            break;
        }
        case 2: {
            $required_field=$step2_required_fields ;
            break;
        }
        case 3: {
            $required_field=$step3_required_fields ;
            break;
        }
        default : {
            $required_field=$step1_required_fields ;
            break;
        }
      
         
  
    }

    foreach($required_field as $key => $value){

        {

            if (!isset($_POST[$value]) || empty($_POST[$value]))
            {
                $error[$value]=$value."is required";
            }
        }
    }
    if(count($error) > 0){   

        $_SESSION['step-'.$step.'-error'] = $error;
        unset ($_SESSION['step-'.$step.'-value']) ;
        
    } else {
        $_SESSION['step-'.$step.'-value'] = $_POST;
               $next_step = $step + 1;
    }
    if ($next_step> $total_step)
    {
        $email=$_SESSION['step-1-data']['email'];
        $pass=$_SESSION['step-1-data']['pass'];
        $twitter=$_SESSION['step-2-data']['twitter'];
        $facebook=$_SESSION['step-2-data']['facebook'];
        $gplus=$_SESSION['step-2-data']['gplus'];
        $fname=$_SESSION['step-3-data']['fname'];
        $lname=$_SESSION['step-3-data']['lname'];
        $phone=$_SESSION['step-3-data']['phone'];
        $address=$_SESSION['step-3-data']['address'];
        $table='multi_step';
        $query="INSERT INTO $table (`email`,`pass`,`twitter`,`facebook`,`gplus`,`fname`,`lname`,`phone`,`address`) VALUES ('$email','$pass','$twitter','$facebook','$gplus','$fname','$lname','$phone','$address')";
        $result = mysqli_query($connection,$query);
    

    }
    if($result){
        session_destroy();
        session_start();
        $_SESSION['success'] = 'Successfully Registered!';
    }
    //print_r($error);
    header('Location:http://localhost/app_multistep/register.php?step='.$next_step);
    exit;

    

?>