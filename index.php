<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./bootstrap-4.5.3/css/bootstrap.min.css">

    <title>web-chat landing page</title>
</head>
<body>
<div class="container">
    <div class="jumbotron mt-4">
        <h1 class="display-4">Web-Chat</h1>
        <p class="lead">Join Web-Chat and spread your wings !</p>
        <small class="text-danger"><b>NOTICE</b>: Do not publish any personal data while chatting!</small>
        <hr class="my-4">
        <ul class="list-group">
            <li class="list-group-item">chat with other users about anything</li>
            <li class="list-group-item">invite users to have a private conversation</li>
            <li class="list-group-item">see whos active and most likely to respond faster</li>
            <li class="list-group-item">provide your gender <i><small>(optional)</small></i></li>
        </ul>

        <form id="join-form" class="form-inline mt-4 justify-content-center">
            <label class="sr-only" for="username">username</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="username" placeholder="username" autocomplete="off">

            <label class="sr-only" for="gender">gender</label>
            <select class="custom-select mb-2 mr-sm-2" id="gender">
                <option selected value="">gender (optional)</option>
                <option value="male">male</option>
                <option value="female">female</option>
            </select>

            <button id="join-submit-btn" type="submit" class="btn btn-primary mb-2">JOIN NOW !</button>
        </form>
        <div>
            <button id="generate-user-btn" class="btn btn-secondary btn-sm">generate username</button>
        </div>
        <div id="errors" class="text-center mt-4 text-danger font-weight-bold"></div>
    </div>
</div>

    <script type="text/javascript" src="./jquery-3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./bootstrap-4.5.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/xhr/xhr.min.js"></script>
    <script type="text/javascript" src="./main.js"></script>
</body>
</html>