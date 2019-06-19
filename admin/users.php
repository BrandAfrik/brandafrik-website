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
                <h4 style="float:left">Users</h4>

                <?php include_once 'admin_includes/right_user_details.php' ?>
            </header>
            <div class="container-fluid mt-3">
                <button class="btn btn-success"> Add New User</button>
                <table class="table table-striped mt-3">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>User 1</td>
                        <td>email@email.com</td>
                        <td>Administrator</td>
                    </tr>
                </table>
            </div>
            
        </div>
    </div>
    
</body>
</html>