<html lang="en">

    <?php
    
    include 'user_head.php';
    
    ?>

  <body class="login">
      
<!--    <div>
      <a class="hiddenanchor" id="signup"></a>-->

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <form action="/eCommerce/User/doLoginUser" method="post">
              <h1>Login Form x</h1>
              <div>
                  <input name= useremail type="email" class="form-control" placeholder="Username" required="" value="d@g.com"/>
              </div>
              <div>
                <input name= userpassword type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                  <input class="btn btn-default" type="submit" placeholder="Submit" />
              <?php
              
              if(isset($msg)){
              echo '<p class="bg-danger">'.$msg.'</p>';
                  
              }
                  ?>
              </div>

<!--              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                
              </div>-->
            </form>
          </section>
        </div>

       
      </div>
    <!--</div>-->
  </body>
</html>