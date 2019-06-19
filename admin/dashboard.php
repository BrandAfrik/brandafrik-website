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
    <div class="main-container">
        <?php include_once 'admin_includes/sidebar.php' ?>

        <div class="admin-content-area">
            <header class="admin-header" class="pl-3">
                <h4 style="float:left">Dashboard</h4>

                <?php include_once 'admin_includes/right_user_details.php' ?>
            </header>
            <div class="container-fluid mt-4">
                <h3>Overview</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="p-2" style="width:90%; height:100px; background-color:#f1f1f1">
                            <h1>Users</h1>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-2" style="width:90%; height:100px; background-color:#f1f1f1">
                            <h1>Posts</h1>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div style="width:90%; height:100px; background-color:#f1f1f1">
                            <h1>...</h1>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>