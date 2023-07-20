<?php
include_once 'app/Auth.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Auth system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-sm-6 pt-4">
                <h2>User Dashboard</h2>
                Wellcome Mr/Mrs
                <?php echo $_SESSION['user_name']; ?>
                <br>
                <br>
                <a href="logout.php" class="btn btn-dark btn-sm">Logout</a>

            </div>
        </div>


    </div>

</body>

</html>