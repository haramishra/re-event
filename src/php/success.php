<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "../html/cdn.html" ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>success</title>
    <link rel="stylesheet" href="/src/css/success.css">

</head>
<body>
    
    <img src="/src/img/checked.svg" class="img-responsive" alt="success-img">
    <h2>success!</h2>
    <h3>file : <?php echo $fileName; ?> uploaded</h3>
    <a href="/">
     <button type="button" class="btn btn-large w-50 p-3 btn-warning">Go home</button>
    </a>
    
</body>
</html>
