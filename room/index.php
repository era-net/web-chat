<?php
session_start();

if (isset($_SESSION["username"]) && $_SESSION["started"]) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat room</title>
</head>
<body>
    <a href="../quit/">quit session</a>
    <h2>Welcome to the chatting room :)</h2>
</body>
</html>
<?php
} else {
    header("Location: ../");
}
?>