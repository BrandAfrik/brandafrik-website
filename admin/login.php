<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once '../includes/head_items.php'?>
    <link rel="stylesheet" type="text/css" href="styles/admin-style.css"/>
    <title>Admin</title>
</head>
<body>
    <div class="form-container">
        <form method="POST" action="auth/login.php">
            <input type="email" placeholder="Email">

            <input type="password" placeholder="Password">

            <input type="submit" name="submit" value="Login">
        </form>
    </div>
    
</body>
</html>