<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "../html/cdn.html"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error!</title>
    <link rel="stylesheet" href="/src/css/failed.css">
</head>
<body>
    
    <img src="/src/img/error.svg" class=""alt="Image">
    <h3>oops!</h3>
    <h3>error: <?php echo $status ?></h3>
    
    <a href="/">
     <button type="button" class="btn btn-large w-50 p-3 btn-primary">Go home</button>
    </a>    
    
</body>
</html>
