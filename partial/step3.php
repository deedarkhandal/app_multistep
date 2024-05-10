<?php

$error = false;
$fname=false;
$lname=false;
$phone=false;
$address=false;

if(isset($_SESSION['step-3-error'])){
    $error = $_SESSION['step-3-error'];
    unset($_SESSION['step-3-error']);
} 
//echo $_SESSION['step-3-data'];
if(isset($_SESSION['step-3-data'])){
    $fname=$_SESSION['step-3-data']['fname'];
}
if(isset($_SESSION['step-3-data'])){
    $lname=$_SESSION['step-3-data']['lname'];
}
if(isset($_SESSION['step-3-data'])){
    $phone=$_SESSION['step-3-data']['phone'];
}
if(isset($_SESSION['step-3-data'])){
    $address=$_SESSION['step-3-data']['address']; 
}

?>




<fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" value='<?php echo $fname; ?>' />
    <?php if(isset($error['fname']) && !empty($error['fname'])){ ?>
        <div class='alert alert-danger'>
            <p><?php echo $error['fname'];?></p>
        </div>
        <?php }?>
    <input type="text" name="lname" placeholder="Last Name" value='<?php echo $lname;?>' />
    <?php if(isset($error['lname']) && !empty($error['lname'])){ ?>
        <div class='alert alert-danger'>
            <p><?php echo $error['lname'];?></p>
        </div>
        <?php }?>
    <input type="text" name="phone" placeholder="Phone" value='<?php echo $phone;?>' />
    <?php if(isset($error['phone']) && !empty($error['phone'])){ ?>
        <div class='alert alert-danger'>
            <p><?php echo $error['phone'];?></p>
        </div>
        <?php }?>
    <textarea name="address" placeholder="Address" value='<?php echo $address;?>'><?php echo $address;?></textarea>
    <?php if(isset($error['address']) && !empty($error['address'])){ ?>
        <div class='alert alert-danger'>
            <p><?php echo $error['address'];?></p>
        </div>
        <?php }?>
    <a type="button" href="http://localhost/app_multistep/register.php?step=2" name="previous" class="previous action-button">Previous</a>
    <input type="submit" name="next" class="next action-button" value="Submit"  />
    <input type="hidden" name="step"  value="3" />
  </fieldset>
