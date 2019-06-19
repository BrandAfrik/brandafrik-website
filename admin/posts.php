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
                <h4 style="float:left">Posts</h4>

                <?php include_once 'admin_includes/right_user_details.php' ?>
            </header>
            <div class="container-fluid mt-3">
                <button class="btn btn-success"> Create Post</button>
                <table class="table table-striped mt-3">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Title of Post</td>
                        <td>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger ml-3" data-toggle="modal" data-target="#delete-post">Delete</button>
                            <button class="btn btn-info ml-3">View Post</button>
                        </td>
                    </tr>
                </table>
            </div>
            
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="delete-post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Are you sure you want to delete post?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success">Yes</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </div>
        </div>
    </div>
    </div>
    
</body>
</html>