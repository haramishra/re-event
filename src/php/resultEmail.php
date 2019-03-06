

<?php

// PPHMail path
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP();

/*
 * Server Configuration
 */

$mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
$mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
$mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
$mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
$mail->Username = "re.event.mail@gmail.com"; // Your Gmail address.
$mail->Password = "hpmail1234"; // Your Gmail login password or App Specific Password.

$mail->setFrom('re@event.com', 'xyz'); // Set the sender of the message.
$mail->addAddress('haraprasad45@gmail.com', 'John Doe'); // Set the recipient of the message.
$mail->Subject = 'PHPMailer GMail SMTP test'; // The subject of the message.
$mail-> IsHTML(true);


require_once "databaseLinker.php";

$sql = "SELECT r.roll, s.name, s.email, s.year, s.class, r.cat1, r.cat2, r.cat3, r.cat4, r.cat5, r.total, r.remarks  FROM result AS r INNER JOIN student_info AS s ON s.roll=r.roll";

$data = mysqli_query($conn, $sql);
$i = 0;
while ($row = mysqli_fetch_assoc($data)) {
// the message
    $msg = "
<h2>result</h2>
<p> this result is basis on 5 catagories </p>
<table class=\"table\" style = \"border:1px solid black; padding:5px\">
    <th style = \"border:1px solid black; padding:5px\">catagories</th>
    <th style = \"border:1px solid black; padding:5px\">marks</th>
    <tr style = \"border:1px solid black; padding:5px\">
        <td>roll number</td>
        <td>" . $row["roll"] . "</td>
    </tr >
    <tr style = \"border:1px solid black; padding:5px\">
        <td>name</td>
        <td>" . $row["name"] . "</td>
    </tr>
    <tr style = \"border:1px solid black; padding:5px\">
        <td>cat1</td>
        <td>" . $row["cat1"] . "</td>
    </tr>
    <tr style = \"border:1px solid black; padding:5px\">
        <td>cat2</td>
        <td>" . $row["cat3"] . "</td>
    </tr>
    <tr style = \"border:1px solid black; padding:5px\">
        <td>cat4</td>
        <td>" . $row["cat4"] . "</td>
    </tr>
    <tr>
        <td>cat5</td>
        <td>" . $row["cat5"] . "</td>
    </tr>
    <tr style = \"border:1px solid black; padding:5px\">
        <td>total</td>
        <td>" . $row["total"] . "</td>
    </tr>

</table>
";

$mail->MsgHTML($msg);

if ($mail->send()) {
    $i++;
    
} else {
    echo ("Mailer Error For: " . $row['roll']);
}

}

echo $i." mails has been sent \n";
echo "You may exit";
// send email

mysqli_close($conn);





/*
 * Message Configuration
 */
/*
$mail->setFrom('from@example.com', 'Awesome Website'); // Set the sender of the message.
$mail->addAddress('haraprasad45@gmail.com', 'John Doe'); // Set the recipient of the message.
$mail->Subject = 'PHPMailer GMail SMTP test'; // The subject of the message.

/*
 * Message Content - Choose simple text or HTML email
 */

// Choose to send either a simple text email...
/*
$mail->Body = ; // Set a plain text body.

// ... or send an email with HTML.
//$mail->msgHTML(file_get_contents('contents.html'));
// Optional when using HTML: Set an alternative plain text message for email clients who prefer that.
//$mail->AltBody = 'This is a plain-text message body'; 

// Optional: attach a file
//$mail->addAttachment('images/phpmailer_mini.png');

if ($mail->send()) {
    echo "Your message was sent successfully!";
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}*/