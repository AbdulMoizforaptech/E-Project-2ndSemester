<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assests/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assests/css/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/jquery-ui.css">
    <link rel="stylesheet" href="assests/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assests/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assests/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assests/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="assests/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="assests/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="assests/fonts/flaticon-covid/font/flaticon.css">

    <link rel="stylesheet" href="assests/css/aos.css">

    <link rel="stylesheet" href="assests/css/style.css">

</head>
<body style="background-color: rgba(111, 66, 193, 0.1);">


    <form action="logincode.php" method="POST">
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>    


</body>
</html>