<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Prop+Single:wght@100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="Login-page">
        <form action="login.php" method="post">
            <div class="Logo">
                <img src="logo.png">
                <h1>Welcome!</h1>
            </div>
            <div class="username">
                <label for="username"><p>username/email</p></label>
                <input type="text" id="username" name="username" placeholder="login@gmail.com">
            </div>
            <div class="password">
                <label for="password"><p>password</p></label>
                <input type="password" id="password" name="password" placeholder="password">
            </div>
        </form>
        <div class="Sign-in">
            <button type="submit">Sign In</button>
        </div>
        <div class="Icon">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-google"></i></a>
            <a href="#"><i class="fa-brands fa-github"></i></a>
        </div>
        <div class="forgot-password">
            <a href="#">Forgot password?</a>
        </div>
        <div class="New-user">
            <a href="#">New user? Sign Up Here!</a>
        </div>
    </div>
</body>
</html>


