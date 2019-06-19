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
<body class="login-main">
    <div>
        <div class="form-container">
            <h3 class="text-center text-white mb-2">Login</h3>
            <form method="POST" action="auth/login.php">
                <div class="input-design mb-3">
                    <input type="email" placeholder="Email">
                </div>
                
                <div class="input-design mb-3">
                    <input type="password" placeholder="Password">
                </div>
                
                <button id="login-button" type="submit" name="submit">
                    Login <i class="fas fa-sign-in-alt"></i>
                </button>
            </form>
        </div>
    </div>
    
    
</body>
</html>