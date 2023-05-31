<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="Login.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <div class="container">
            <div class="card">
                <div class="inner-box" id="card">
                    <div class="card-front">
                        <h2>Login</h2>
                        <form>
                            <input type="email" class="input-box" placeholder="Enter Your Email" required>
                            <input type="password" class="input-box" placeholder="Enter Your Password" required>
                            <button type="submit" class="submit-button">Submit</button>
                            <input type="checkbox"><span>Remember Me?</span>
                            
                            
                        </form>
                        <button type="button" class="btn" onclick="openRegister()">Sign up Here !</button>
                    </div>
                       
                        <div class="card-back">
                          
                           
                        <h2>Sign Up</h2>
                        <form>
                            <input type="text"  class="input-box" placeholder="Enter Your Name" required>
                            <input type="email" class="input-box" placeholder="Enter Your Email" required>
                            <input type="password" class="input-box" placeholder="Enter Your Password" required>
                            <button type="submit" class="submit-button">Submit</button>
                            <input type="checkbox"><span>Remember Me?</span>  
                        </form>

                        <button type="button" class="btn" onclick="openLogin()">I Have An Account</button>
                        </div>    
                            
                        </div>
                    </div>
                </div>
   
        <script>
            
            var card=document.getElementById("card");
            function openRegister(){
                card.style.transform="rotatey(-180deg)";
            }
             function openLogin(){
                card.style.transform="rotatey(0deg)";
            }
        </script>
              
    </body>
</html>
