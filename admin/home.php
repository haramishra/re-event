<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>dashboard</title>
    <link rel="shortcut icon" type="image/png" href="/src/img/fevicon.png" />

    <!-- Bootstrap CDN start-->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>

    <!-- jquery CDN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="home.css" />
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1>Dashboard</h1>
        <p class="h4 text-muted" id="info">(Seminar is on date: )</p>
        <div id="sess" class="shadow w-75 mb-2 p-2 ">
          <div id="session">
            <img
              src="/src/img/start-up.svg"
              alt="startup.svg"
              class="rounded "
            />
            <p class="h3">start new seminar</p>
          </div>
        </div>
        <br />

        <div id="result" class="shadow box">
          <img
            src="/src/img/evaluation.svg"
            alt="evaluation.svg"
            class="rounded"
          />
          <p class="text-md">Evaluate mark</p>
        </div>

        <div class="shadow box" id="mail">
          <img src="/src/img/email.svg" alt="mail.svg" class=" rounded" />
          <p class="text-md">Send Emails</p>
        </div>

        <div id="download" class="shadow box">
          <img src="/src/img/ppt.svg" alt="download.svg" class="rounded" />
          <p class="text-md">Download Files</p>
        </div>
        <br />

        <div id="adduser" class="shadow box">
          <img src="/src/img/employee.svg" alt="employee.svg" class="rounded" />
          <p class="text-md">Add A Teacher</p>
        </div>

        <div id="table" class="shadow box">
          <img src="/src/img/debate.svg" alt="debate.svg" class="rounded" />
          <p class="text-md">View Candidate</p>
        </div>

        <div id="logout" class="shadow box">
          <img src="/src/img/logout.svg" alt="debate.svg" class="rounded" />
          <p class="text-md">Log Out</p>
        </div>
      </div>
    </div>


    <script src="home.js"></script>
  </body>
</html>
