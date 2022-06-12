<?php session_start() ?>
<?php 
$_SESSION['dbname'] = $_POST['db'];
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin | Sign</title>
        <link rel="stylesheet" href="../css/form.css" />
    </head>

    <body>
        <center>
            <div class="container">
                <div class="diviser"></div>
                <div class="logo">
                    <div class="title">
                        <label for="form"><br>Next Step > Registration <br> </label>
                    </div>
                    <div class="image">
                        <img src="../../public/image/admin.svg" alt="Admin logo" class="imglogo" />
                    </div>
                </div>
                <div class="form">
                    <form action="../php/userSave.php" method="post" name="form">
                        <div class="inputt">
                            <input type="text " placeholder="Choose a login" id="log" name="login" required /><br />
                            <input type="password " placeholder="enter a password" id="pass" name="pass"
                                required /><br />
                        </div>
                        <div class="btn">
                            <input type="submit" value="Sign in" id=submitt">
                            <br />
                        </div>
                    </form>
                    <div id="abstractA">
                        <span>already have account ?
                            <button onclick="document.location.href='./connect.html'">
                                log in
                            </button></span>
                    </div>
                </div>
            </div>
        </center>
    </body>

</html>
