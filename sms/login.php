<?php include('header.php')?>
<!--------Account Page--------------->
<div class = "account-page">
            <div class = "">
                <div class = "row">
                    <div class = "col-2">
                        <img src = "./assets/images/login.png" width = "100%">
                    </div>

                    <div class = "col-2">
                       <div class = "form-container">
                        <div class = "form-btn">
                            <span onclick = "login()">Login</span>
                            <span onclick = "register()">Register</span>
                            <hr id = "indicator">
                        </div>

                        <form id = "loginForm" action="actions/login.php" method="POST">
                            <input type = "email" placeholder = "Email" name="email">
                            <input type = "password" placeholder = "Password" name="password">
                            <button type = "submit" class = "btn btn-lg btn-primary" name="login">Login</button>
                            <a href = "#">Forgot Password</a>
                        </form>

                        <form id = "registerForm" action="" method="">
                            <input type = "text" placeholder = "Username">
                            <input type = "email" placeholder = "Email">
                            <input type = "password" placeholder = "Password">
                            <button type = "submit" class = "btn btn-lg btn-primary">Register</button>
                        </form>

                       </div>
                    </div>

                </div>
            </div>
         </div>

                 <!--------JS For Toggole Menu---------------> 
        <script>
          var MenuItems = document.getElementById("menuItems");
          MenuItems.style.maxHeight = "0px";

          function menuToggle(){
            if(MenuItems.style.maxHeight == "0px"){
              MenuItems.style.maxHeight = "200px";
            }else{
              MenuItems.style.maxHeight = "0px";
            }
          }
        </script>

        <!--------JS For Toggole Form---------------> 
        <script>
            var LoginForm = document.getElementById("loginForm");
            var RegForm = document.getElementById("registerForm");

            var Indicator = document.getElementById("indicator");

            function register(){
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)";

            }

            function login(){
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)";

            }

          </script>

<?php include('footer.php')?>