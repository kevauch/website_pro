<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="2; ../">
<link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">

</head>

<style>
body{

background-color: white;
color: #1e3799;
font-size: 20px;
font-family: Gugi;
position: relative;
float: left;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}

</style>


<body>

</body>

</html>

<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['email'])) {
    $email= $_POST['email'];
}

if (isset($_POST['subject'])) {
    $message = $_POST['subject'];
}

if (isset($_POST['message'])) {
    $message = $_POST['message'];
}

    $to ="kevin.auchoybur@gmail.com";
    $subject ="Message WS";

    mail($to, $subject, $message, "From: " . $email);
    echo '<i class="fa fa-check" aria-hidden="true"></i>','&nbsp;', "Message sent succesfully !";
?>