<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin | Login</title>
        <link rel="stylesheet" href="../css/form.css" />
    </head>

    <body>
        <center>
            <div class="container">
                <div class="diviser"></div>
                <div class="logo">
                    <div class="title">
                        <label for="form"><br> Get Connect and start building </label>
                    </div>
                    <div class="image">
                        <img src="../../public/image/login-svgrepo-com.svg" alt="Admin logo" class="imglogo" />
                    </div>
                </div>
                <div class="form">
                    <form action="../../src/php/checkUser.php
          " method="post" name="form">
                        <div class="inputt">
                            <input type="text " placeholder="Enter your personnal login" id="log" name="login"
                                required /><br />
                            <input type="password " placeholder="enter your password" id="pass" name="pass"
                                required /><br />
                        </div>
                        <div class="btn">
                            <input type="submit" value="Log in" id=validate">
                            <br />
                        </div>
                    </form>
                    <div id="abstract">
                        <span>Not account yet ?
                            <button onclick="document.location.href='./formAdmin.html'">
                                sign in
                            </button></span>
                    </div>
                </div>
            </div>
        </center>
    </body>

</html>
