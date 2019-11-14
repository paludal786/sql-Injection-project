<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <form method="post" action="./getDetails.php">
            <div class="row">
                <div class="col-md-6">
                    <label>Enter Name To Search Details About User</label>
                    <input type="text" name="search" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary" name="subBtn">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>