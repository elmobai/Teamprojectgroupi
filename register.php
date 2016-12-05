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
          
            <!--<label for="firstname">First name:</label> -->
            <input type="text" name="firstname" class="required mdl-textfield__input form-control" required="" placeholder="First name" autofocus=""/></p>
          
            <!-- <label for="lastname">Last Name:</label>-->
            <input type="text" name="lastname" class="required mdl-textfield__input form-control" required="" placeholder="Last name" /></p>
              
            <!--<label for="email">Email:</label> -->
            <input type="email" name="email" class="required mdl-textfield__input form-control" required="" placeholder="Email" /></p>

            <!-- <label for="username">Username:</label> -->
            <input type="text" name="username" class="required mdl-textfield__input form-control" required="" placeholder="Confirm Email" /></p>
          
            <!-- <label for="password">Password:</label> -->
            <input type="password" name="password" class="required mdl-textfield__input form-control" required="" placeholder="Enter password" /></p>
         
            <!-- <label for="confirmpassword">Confirm Password:</label> -->
            <input type="password" name="confirmpassword" class="required mdl-textfield__input form-control" required="" placeholder="Confirm password" /></br></br>
       
            <button type="submit" name="btn-signup" class="btn btn-lg btn-primary btn-block mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Sign Up</button></br>
          </form>
          <!-- <?php include 'extras.php'; ?> -->
        </section>
      </div>
      
     <div class="col-sm-4"></div>

    </div>
  </div>
  
  <!--Can be deleted
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--3-col"></div>
    <div class="mdl-cell mdl-cell--6-col mdl-shadow--2dp">
      <section class="login-register">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col">
              <a href="registeradmin.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light">Register as Admin</a>
            </div>
            <div class="mdl-cell mdl-cell--6-col">
              <a href="login.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light">Login</a>
            </div>
          </div>
        </form><!-- ./Registration form end -->
   <!--   </section><!-- ./section end -->
    <!-- </div><!-- ./ column end -->
    <!--<div class="mdl-cell mdl-cell--3-col"></div>
  </div>-->
  
  <?php include 'footer.php';?>