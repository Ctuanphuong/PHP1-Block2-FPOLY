<link rel="stylesheet" href="./css/style.css">
<div class="container-add">
  <h1>Register</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div>
          <p>User name:</p> 
          <input type="text" name="username" placeholder="Enter your user name...">
         <p class="err">
            <?php
            $username = $_POST['username'];
            if(empty($username) || strlen($username) < 3) { 
                echo "Error: Name requires a minimum of 3 characters";
            }
             ?>
            </p> 
      </div>
      <div>
          <p>Email:</p> 
          <input type="email" name="txtEmail"  placeholder="Enter your email...">
          <p class="err">
            <?php
            $txtEmail = $_POST['txtEmail'];
            if(empty($txtEmail) || strlen($txtEmail) < 3) { 
                echo "Error: You haven't entered your email ";
            }
             ?>
            </p> 
      </div>
      <div>
          <p>Password:</p>
          <input type="password" name="pdPass"  placeholder="Enter your password...">
      </div>
      <div>
          <p>Comfirm Password:</p>
          <input type="password" name="pdRepass"  placeholder="Confirm password...">
      </div>
      <div>
          <button type="submit">Register</button>
      </div>
  </form>
  </div>
  
  
 <style>
    .err{ 
    color: yellow;
    font-size: 13px;
    font-family: tahoma;
    font-weight: 300;
  }
 </style>