
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RE:event</title>
    <!-- jQuery JS 3.1.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Bootstrap CDN start-->

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    
    <!--fontawsome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/src/img/fevicon.png" />
    <link rel="stylesheet" href="/src/css/navig.css">
</head>


<body>


    <nav class="nav nav-pills nav-justified-center">
        <a class="nav-link text-white active" href="/src/html/upload.html">upload ppt file</a>
        <a class="nav-link" href="#home">home</a>
        <a class="nav-link" href="#register">register</a>
        <a class="nav-link" href="#result">result</a>
        <a class="nav-link" href="#contact">Contact us</a>
        <a class="nav-link text-white active btn-warning" href="/admin/login.php">Login</a>

    </nav>
    <a href="/" class="navlink"><img src="/src/img/fevicon.png"  id="icon" class="img-responsive" alt="logo"></a>

    <section id="home" class="sector  align-content-center">

        <div id="typediv" class=" shadow-lg">
            <span id="typed"></span>
        </div>
        <!--
        <div id="notice" class="card-deck">
        <div class="card text-white bg-primary mb-3 shadow-lg" style="max-width: 18rem;">
  <div class="card-header">notice:1</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<div class="card text-white bg-success mb-3 shadow-lg" style="max-width: 18rem;">
  <div class="card-header">Notice:2</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<div class="card text-white bg-info mb-3 shadow-lg" style="max-width: 18rem;">
  <div class="card-header">Notice:3</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-dark mb-3 shadow-lg" style="max-width: 18rem;">
  <div class="card-header">Notice:4</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>-->

<!-- bouncy down arrow button -->
<div class="downArrow bounce">
    <a href="#register">
        <h3>click to register</h3>
        <i class="fa fa-angle-down" id="arrow"></i>	
    </a>


</div>
<!-- redgistration -->
    </section>
    <section id="register" class="sector align-middle">
        <center>
            <form action="/src/php/candidate-registration.php" method="get">

                <legend class="h1">Registration</legend>
                <label for="" class="text-muted" id="date-label"></label>
                <div class="alert alert-success" role="alert">
                    To view presenter List Table click <u><a href="/src/php/candidateTable.php" class="alert-link">Here</a></u>
                </div>
                <div class="form-group  mb-3 dv shadow-lg">

                    <div class="input-group mb-3 p-3 shadow-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Topic:</span>
                        </div>
                        <input type="text" class="form-control" value="" placeholder="topic name goes here"
                            id="topic" name="topic" aria-describedby="basic-addon1" readonly>
                    </div>
                    <input type="text" class="form-control w-75 p-3" id="roll" name="roll" placeholder="Enter roll number">

                    <button type="submit" class="btn btn-primary" id="proceed" <?php //data-toggle="modal" data-target="#exampleModalCenter"
?>>proceed</button>
                </div>

            </form>

</center>

<!-- result section -->
    </section>

<section class="sector" id="result">
    <div class="blured shadow-lg">
        <div id="text">

        <label for="#mail" class="col h1">You will recieve result via email </label>

        <p id="resultDate"></p>
        <img src="/src/img/email.svg" id="mail" class="img-responsive" alt="Image">

        <footer class="text-muted">
            Haven't recieve email? click <a href="#">here</a>
        </footer>
</div>
    </div>
</section>


    <script src="/src/js/main.js"></script>

</body>

</html>
