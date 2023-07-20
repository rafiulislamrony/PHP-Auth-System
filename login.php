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
                <h2>Login Form</h2>
                <form action="/action_page.php">
                    <div class="mb-3 mt-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="register.php" class="btn btn-dark">Register</a>
                </form>

            </div>
        </div>


    </div>

</body>

</html>