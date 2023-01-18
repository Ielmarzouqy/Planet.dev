<?php
// include('signup.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CODE WITH HOSSEIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./asset/main.css">
</head>

<body class="gap-4 row">

    <div class="login ">

        <h1 class="text-center">Hello Again!</h1>
        
        <form class="needs-validation">
            <div class="form-group was-validated">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" type="email" id="email" required>
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password">Password</label>
                <input class="form-control rounded-bottom-1" type="password" id="password" required>
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            </div>
            
            <span> if you are have not account<a href="view/signup.php">signup</a></span>
            <input class="btn  rounded-pill w-100" type="submit" value="SIGN IN">
        </form>

    </div>

    

</body>

</html>