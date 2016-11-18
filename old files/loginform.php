<?php include_once 'dbconnect.php'; include_once 'login.php'; ?>

<div class="container">
    <h1>User Login</h1>
    <div class="row">
        <div class="col-sm-4"></div>

        <div class="col-sm-4 light">

            <!-- Login Section -->
            <!--<h1>User Login</h1>
            <hr/>-->

            <!-- login form start -->
            <p></p>
            <form id="loginform" action="" method="post">
              <!-- row 1 -->
              <label for="username">Username:</label><br/>
              <input type="text" name="username" placeholder="Email Address"/></p>

              <!-- row 2 -->
              <label for="password">Password:</label><br/>
              <input type="password" name="password" placeholder="Password" /></br></br>

              <!-- row 3 -->
              <button type="submit" name="btn-login">Login</button></br></br>

              <label for="remember" class="">
                  <input type="checkbox" value="remember" id="remember" class="">
                  <span class="">Stay logged-in</span>
              </label></p>
             <!-- <p><a href="forget.php" onclick="forget.php" id="forget">Forgot Password?</a></p>-->
            </form><!-- ./login form end -->
        </div><!-- column end -->

        <div class="col-sm-4"></div>

    </div>
</div>

<?php include 'footer.php'; ?>