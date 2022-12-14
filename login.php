<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Alpha - Log in</title>
    <link rel="stylesheet" type="text/css" href="./s6css.css">
    <link rel="stylesheet" type="text/css" href="./main.css">
</head>

<body class="s6-center s6-margin-top s6-displaycontainer">
    <div class=" s6-cyan s6-center s6-display-middle main s6-round-large">
        <p class="s6-xlarge">Login </p>
        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div>
                <input type="text" required class="input" name="username" id="username" autocomplete="off"
                    placeholder="username">
            </div>
            <div>
                <input type="password" required class="input" name="password" id="password" autocomplete="off"
                    placeholder="password">
            </div><br>
            <div>
                <button type="submit" id="submit" class="btn" name="login_user">submit</button>
            </div>
            <p>
                Not yet a member? <a href="register.php" class="">Sign up</a>
            </p>
        </form>
    </div>
</body>

</html>