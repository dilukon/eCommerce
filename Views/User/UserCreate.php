<html lang="en">

    <?php
    
    include 'user_head.php';
    
    ?>

  <body class="login">
      
<!--    <div>-->
<!--       <a class="hiddenanchor" id="signup"></a> -->

      <div class="login_wrapper">
        

        <div class="animate form login_form">
          <section class="login_content">
              <form action="../../User/setUser" method="post">
              <h1>Create User</h1>
              
              <div>
                  <select class="form-control" name="userlevel" id="user_level"  required="">
                      <option value="" >User Type</option>
                      <option value="MGR">Manager</option>
                      <option value="OPR">Operator</option>
                  </select>

              </div>

              <div>
                  <input type="text" name="userfname" class="form-control" placeholder="First name" required="" />
              </div>
              <div>
                  <input type="text" name="userlname" class="form-control" placeholder="Last name" required="" />
              </div>
              <div>

                  <input type="email"  name="useremail" class="form-control" placeholder="Email" required="" />
              </div>

              <div>
                  <input type="password" name="userpassword" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                  <input class="btn btn-default submit" type="submit" name="usersubmit" placeholder="Submit"/>
              </div>

<!--              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />-->

                
         
            </form>
          </section>
        </div>
<!--      </div>-->
   </body>
</html>