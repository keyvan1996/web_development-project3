<!DOCTYPE html>
    <html>
        <head>
        </head>
        <body>
            <div style='background-color:pink;border:red solid 1px;width:75%;margin:auto;text-align:center;'>
                <div>
                    <h1>Welcome to the ITEC4450 Online Banking System</h1>
                </div>
                
                <div>
                    <?php include('errors.php'); ?>
                </div>

                <br>

                <form method="POST" action="index-inc.php">
                    <div>
                        <label for='username'>Username:</label>
                        <input type="text" name="username" value=<?php if (isset($_GET['username'])) { echo $_GET['username']; }; ?>>
                    </div>

                    <br/>
                    
                    <div>
                        <label for='password'>Password:</label>
                        <input type="text" name="password">
                    </div>

                    <br>
                    
                    <div>
                        <input type="submit" value="Login" name="login">
                    </div>

                    <br>
                </form>
            </div>
        </body>
    </html>