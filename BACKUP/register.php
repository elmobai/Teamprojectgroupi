<!--Register Form-->
<?php include_once 'classes/dbconnect.php'; include_once 'classes/register.php'; ?>
<!-- This includes the header section to the top of the webpage -->
<?php include 'header.php' ?>

  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--3-col"></div>
    <!-- Registration section -->
    <div class="mdl-cell mdl-cell--6-col mdl-shadow--2dp">
      <section class="login-register">
        <h3>Register as User</h3>
        <hr/>
        <!-- form start -->
        <form id="" method="post">
          <!-- row 1 -->
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col">
              <label for="firstname">First name:</label><br/>
              <input type="text" name="firstname" required="" placeholder="First name" />
            </div>
            <div class="mdl-cell mdl-cell--6-col">
              <label for="lastname">Last Name:</label><br/>
              <input type="text" name="lastname" required="" placeholder="Last name" />
            </div>
          </div>
          <!-- row 2 -->
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col">
              <label for="email">Email:</label><br/>
              <input type="email" name="email" required="" placeholder="Enter your email" /><br/>
             
              </div>
            
            <div class="mdl-cell mdl-cell--6-col">
              <label for="username">Username:</label><br/>
              <input type="text" name="username" required="" placeholder="Confirm email" /><br/>
            
            </div>
          </div>
          <!-- row 3 -->
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col">
              <label for="password">Password:</label><br/>
              <input type="password" name="password" required="" placeholder="Enter password" /><br/>
            </div>
            <div class="mdl-cell mdl-cell--6-col">
              <label for="confirmpassword">Confirm Password:</label><br/>
              <input type="password" name="confirmpassword" required="" placeholder="Repeat password" /><br/>
            </div>
          </div>
          <!-- row 4 -->
          <br/><br/><button name="btn-signup" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">submit</button>


</br></br>
        </form><!-- ./Registration form end -->
        <?php include 'extras.php'; ?>
      </section><!-- ./section end -->
    </div><!-- ./ column end -->
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
<?php include 'footer.php'; ?>