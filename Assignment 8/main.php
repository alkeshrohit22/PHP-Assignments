<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSS Fetching Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="shadow p-4">
            <h1>Reading RSS Feeds using PHP</h1>
            <form action="output.php" method="post">
                <input type="text" name="urlname" placeholder="Enter url here" size="50" style="height:38px">
                <button type="submit" class="btn btn-outline-warning">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>