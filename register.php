<!--Register Form-->
<?php include_once 'classes/dbconnect.php'; include_once 'classes/register.php'; ?>
<!-- This includes the header section to the top of the webpage -->
<?php include 'header.php' ?>

  <div class="container"></br></br>
    <div class="row">

      <div class="col-sm-4"></div>
      
      <!-- Registration section -->
      <div class="col-sm-4">
        <section class="login-register">
          
          <!-- form start -->
          <form id="" method="post">
          
          <h1>Sign Up</h1></br></br>
          <!-- <hr/> -->
          
            <!-- First name -->
            <input type="text" name="firstname" class="required mdl-textfield__input form-control" required="" placeholder="First name" autofocus=""/></p>
          
            <!-- Last Name -->
            <input type="text" name="lastname" class="required mdl-textfield__input form-control" required="" placeholder="Last name" /></p>
              
            <!-- Email -->
            <input type="email" name="email" class="required mdl-textfield__input form-control" required="" placeholder="Email" /></p>

            <!-- Username -->
            <input type="text" name="username" class="required mdl-textfield__input form-control" required="" placeholder="Confirm Email" /></p>
          
            <!-- Password -->
            <input type="password" name="password" class="required mdl-textfield__input form-control" required="" placeholder="Create password" /></p>
         
            <!-- Confirm Password -->
            <input type="password" name="confirmpassword" class="required mdl-textfield__input form-control" required="" placeholder="Confirm password" /></br></br>
       
           <!-- Sign Up Button -->
            <button type="submit" name="btn-signup" class="btn btn-lg btn-primary btn-block mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Sign Up</button></br>
          </form>
        </section>
      </div>
      
     <div class="col-sm-4"></div>

    </div>
  </div>
  
  <?php include 'footer.php';?>