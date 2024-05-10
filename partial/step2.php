<?php

$error = false;
$twitter=false;
$facebook=false;
$gplus=false;

if(isset($_SESSION['step-2-error'])){
    $error = $_SESSION['step-2-error'];
    unset($_SESSION['step-2-error']);
}
if(isset($_SESSION['step-2-data']['twitter'])){
    $twitter=$_SESSION['step-2-data']['twitter'];
   }
if(isset($_SESSION['step-2-data']['facebook'])){
    $facebook=$_SESSION['step-2-data']['facebook'];
    
}
if(isset($_SESSION['step-2-data']['gplus'])){
    $gplus=$_SESSION['step-2-data']['gplus'];
}





?>
<fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter"  value='<?php echo $twitter?>'/>
    <?php if(isset($error['twitter']) && !empty($error['twitter'])){ ?>
        <div class='alert alert-danger'>
            <p><?php echo $error['twitter'];?></p>
        </div>
        <?php }?>

    <input type="text" name="facebook" placeholder="Facebook" value='<?php echo $facebook?>' />
    <?php if(isset($error['facebook']) && !empty($error['facebook'])){ ?>
        <div class='alert alert-danger'>
            <p><?php echo $error['facebook'];?></p>
        </div>
        <?php }?>


    <input type="text" name="gplus" placeholder="Google Plus"  value='<?php echo $gplus?>'/>
    <?php if(isset($error['gplus']) && !empty($error['gplus'])){ ?>
        <div class='alert alert-danger'>
            <p><?php echo $error['gplus'];?></p>
        </div>
        <?php }?>


    <a type="button" href="http://localhost/app_multistep/register.php?step=1" name="previous" class="previous action-button">Previous</a>
    
    <input type="submit" name="next" class="next action-button" value="Next" />
    <input type="hidden" name="step"  value="2" />
  </fieldset>
