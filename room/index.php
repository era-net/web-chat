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
    <link rel="stylesheet" href="./style.css">

    <title>Chat room</title>
</head>
<body>
    <a href="../quit/">quit session</a>
    <h2>Welcome to the chatting room :)</h2>

    <div class="container border-top mt-5">
        <div class="row justify-content-md-center">
            <div class="col col-lg-2 px-3 py-3">
                <div class="pt-2">hehe</div>
                <div class="pt-2">haha</div>
                <div class="pt-2">hoho</div>
            </div>
            <div class="col border-left pl-5 py-3">
                <div class="chat-section mb-2">
                    <div class="message-container">
                        <div class="message-title">Marc</div>
                        <div class="message-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis, eum. Cumque dolor consequatur sequi similique provident quibusdam veritatis explicabo doloremque, inventore, placeat aliquam veniam, natus ut error vero quod tempore?</div>
                        <div class="message-info">14:22</div>
                    </div>
                    <div class="message-container">
                        <div class="message-title">Flora</div>
                        <div class="message-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates fugiat, accusantium placeat nemo reprehenderit quae illo fugit autem aliquam sint doloribus ipsum alias amet nam deserunt error reiciendis. Deleniti, ut!</div>
                        <div class="message-info">14:33</div>
                    </div>
                    <div class="message-container">
                        <div class="message-title">Jane</div>
                        <div class="message-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos voluptas velit totam dolorem voluptates vel, odio rerum sequi magnam nesciunt natus deleniti pariatur culpa, odit incidunt quibusdam autem laborum. Fugiat?</div>
                        <div class="message-info">14:45</div>
                    </div>
                    <div class="message-container">
                        <div class="message-title">John</div>
                        <div class="message-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quaerat odio recusandae temporibus aut asperiores optio atque consequuntur, dignissimos sint cumque omnis ab quam! Amet atque modi maxime veritatis cupiditate!</div>
                        <div class="message-info">15:01</div>
                    </div>
                    <div class="message-container">
                        <div class="message-title">John</div>
                        <div class="message-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quaerat odio recusandae temporibus aut asperiores optio atque consequuntur, dignissimos sint cumque omnis ab quam! Amet atque modi maxime veritatis cupiditate!</div>
                        <div class="message-info">15:01</div>
                    </div>
                    <div class="message-container">
                        <div class="message-title">John</div>
                        <div class="message-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quaerat odio recusandae temporibus aut asperiores optio atque consequuntur, dignissimos sint cumque omnis ab quam! Amet atque modi maxime veritatis cupiditate!</div>
                        <div class="message-info">15:01</div>
                    </div>
                    <div class="message-container">
                        <div class="message-title">John</div>
                        <div class="message-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quaerat odio recusandae temporibus aut asperiores optio atque consequuntur, dignissimos sint cumque omnis ab quam! Amet atque modi maxime veritatis cupiditate!</div>
                        <div class="message-info">15:01</div>
                    </div>
                </div>
                <div>
                    <input type="text">
                </div>
            </div>
        </div>
    </div>

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