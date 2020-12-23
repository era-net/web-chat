<?php
session_start();

if (isset($_SESSION["username"]) && $_SESSION["started"]) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../bootstrap-4.5.3/css/bootstrap.min.css">

    <title>Chat room</title>
</head>
<body>
    <a href="../quit/">quit session</a>
    <h2>Welcome to the chatting room :)</h2>

    <script type="text/javascript" src="../jquery-3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap-4.5.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/xhr/xhr.min.js"></script>
    <script type="text/javascript" src="./main.js"></script>
</body>
</html>
<?php
} else {
    header("Location: ../");
}
?>