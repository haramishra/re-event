<?php
require_once 'databaseLinker.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download presenter List</title>
<?php
include_once "../html/cdn.html";
?>

<body>

    <?php
//json call
$jsonfile = file_get_contents("../../newJSON.json", true);
$file = json_decode($jsonfile, true);

//mysql query
$sql = "SELECT c.roll, s.name, s.class, s.year, c.topic FROM student_info AS s INNER JOIN " . $file["tableName"] . " AS c ON s.roll = c.roll";
$get_data = mysqli_query($conn, $sql);

?>

   <div class="container mt-5 ">
    <!-- table to display data -->
    <table class="table table-striped table-hover" id="content">
        <thead>
            <tr>
                <th>roll no.</th>
                <th>name</th>
                <th>class</th>
                <th>year</th>
                <th>topic</th>
            </tr>
        </thead>
        <tbody>

        <?php
if (mysqli_num_rows($get_data) > 0) {
    while ($row = mysqli_fetch_assoc($get_data)) {
        //displaying data in table
        echo "<tr><td>" . $row['roll'] . "</td><td>" . $row['name'] . "</td><td>" . $row['class'] . "</td><td>"
            . $row['year'] . "</td><td>" . $row['topic'] . "</td></tr>";

    }
}

?>
        </tbody>
    </table>



 <button type="button" id="btn" class="btn btn-large btn-block btn-info">Download As PDF</button>
 </div>
 </div>
   <?php mysqli_close($conn)?>
   <!-- pdf downloading using pdfmake jquery library -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btn", function () {
            html2canvas($('#content')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("CandidateList.pdf");
                }
            });
        });
    </script>

</body>
</html>
