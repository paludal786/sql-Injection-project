<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <form method="post" action="./checkuser.php">
            <div class="row">
                <div class="col-md-4">
                    <label>Enter Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="col-md-4">
                    <label>Enter Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>