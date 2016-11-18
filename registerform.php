<?php include 'header.php'; ?>
<!--Register Form-->
<?php include_once 'dbconnect.php'; include_once 'register.php'; ?>
<!-- This includes the header section to the top of the webpage -->
<?php?>

<div class="container">
  <h1>Sign Up</h1>
    <div class="row">
      <div class = "col-sm-4"></div>
    
      <div class = "col-sm-4">
        <section class="login-register">
          
          <!-- form start -->
          <form id="" method="post">
           
                <!--<label for="firstname">First name:</label><br/>-->
                <input type="text" class="form-control" name="firstname" required="" placeholder="First name" />
                </p>
              
                <!--<label for="lastname">Last Name:</label><br/>-->
                <input type="text" class="form-control" name="lastname" required="" placeholder="Last name" />
                </p>
        
                <!--<label for="email">Email:</label><br/>-->
                <input type="email" class="form-control"  name="email" required="" placeholder="Email Address" />
               </p>
                
               <!-- <label for="username">Username:</label><br/> -->
                <input type="text "class="form-control" name="username" required="" placeholder="Confirm Email Address" />
              </p>
      
               <!-- <label for="password">Password:</label><br/> -->
                <input type="password" class="form-control"  name="password" required="" placeholder="Password" />
                </p>
  
               <!-- <label for="confirmpassword">Confirm Password:</label><br/> -->
               <!-- <input type="password" class="form-control"  name="confirmpassword" required="" placeholder="Confirm password" /> -->
            <!--  </p> -->
            
              <button class="btn btn-success" name="btn-signup" type="submit">Sign Up</button>
            </form><!-- ./Registration form end -->
          </section><!-- ./section end -->
        </div>
      
      <div class = "col-sm-4"></div>
        
    </div><!-- ./ column end -->
</div>
  
<?php include 'footer.php'; ?>
