
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/db.css">
        <title>Generate | Database</title>
    </head>

    <body>
        <center>

            <div class="form">

                <label for="form"><br>
                    <h2>Admin Database Generate</h2>
                    <br>
                </label>

                <form action="formAdmin.php" method="post" name="form">
                    <div class="inputt">
                        <input type="text" placeholder="Choose a Database mame" id="log" name="db" /><br />
                        <input type="text" placeholder="Fuffil a UserName " id="log" name="user" /><br />
                        <input type="password " placeholder="password (default is empty) " id="pass"
                            name="pass" /><br />
                    </div>
                    <div class="btn">
                        <input type="submit" value="Next " id=submitt">
                        <br />
                    </div>
                </form>
        </center>
    </body>

</html>
