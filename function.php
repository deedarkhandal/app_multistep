<?php
include('./constants.php');

function midleWare($step){
    $is_access_allowed=true;
    $last_step=1;
    if($step>1)
    {
        for($i = 1; $i < $step; $i++)
        {
            if (!isset($_SESSION['step-'.$i.'-value'])){
                $is_access_allowed=false;
                $last_step=$i;

            }
        }
    }
    if(!$is_access_allowed)
    {
        header('location:http://localhost/app_multistep/register.php?step='.$last_step);
        exit();
    }
}
    











?>