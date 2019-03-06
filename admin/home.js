$(document).ready(function() {
  $("#result").click(function(e) {
    e.preventDefault();
    window.open("../src/html/result-entry.html", "_blank");
  });

  $("#mail").click(function(e) {
    e.preventDefault();
    window.open("../src/html/email-page.html", "_black");
  });

  $("#table").click(function(e) {
    e.preventDefault();
    window.open("/src/php/candidateTable.php", "_blank");
  });

  $("#session").click(function(e) {
      window.open("../reset/reset.html")//do write name of new session php
  });

  $.getJSON("/newJSON.json", function(data){
    $("#info").text("(Seminar is on "+data.date+")");
    $("#download").click(function(e) {
      $.get("/src/php/goodziparchive.php");
      window.location.href = "/uploads/" + data.dir + "/pptfiles.zip";    
      return false;
    });
  } 
  );

  $("#logout").click(function () {     
    window.location.href = "logout.php";
  });

  $("#adduser").click(function (e) { 
    e.preventDefault();
    window.location.href = "register.php";
    
  });
  
});
