<?php

$error = false;

$email = false;
$pass = false;
$cpass = false;

if(isset($_SESSION['step-1-error'])){
    $error = $_SESSION['step-1-error'];
    unset($_SESSION['step-1-error']);
}
if(isset($_SESSION['step-1-data']['email'])){
    $email=$_SESSION['step-1-data']['email'];
    
}
if(isset($_SESSION['step-1-data']['pass'])){
    $pass=$_SESSION['step-1-data']['pass'];
    
}
if(isset($_SESSION['step-1-data']['cpass'])){
    $cpass=$_SESSION['step-1-data']['cpass'];
    
}

?>
<fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
   
    <input type="text" name="email" placeholder="Email"  value='<?php echo $email;?>'/>
    <?php if(isset($error['email']) && !empty($error['email'])){ ?>
        <div class='alert alert-danger'>
            <p><?php echo $error['email'];?></p>
        </div>
        <?php }?>
    <input type="password" name="pass" placeholder="Password"  value= '<?php echo $pass;?>'/>
    <?php if(isset($error['pass']) && !empty($error['pass'])){ ?>
        <div class='alert alert-danger'>
            <p><?php echo $error['pass'];?></p>
        </div>
        <?php }?>
    <input type="password" name="cpass" placeholder="Confirm Password"  value='<?php echo $cpass;?>'/>
    <?php if(isset($error['cpass']) && !empty($error['cpass'])){ ?>
        <div class='alert alert-danger'>
            <p><?php echo $error['cpass'];?></p>
        </div>
        <?php }?>

    <input type="submit" name="next" class="next action-button" value="Next"  />

    <input type="hidden" name="step"  value="1"  />

    
  </fieldset>
