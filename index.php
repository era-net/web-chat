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
        <hr class="my-4">
        <ul class="list-group">
            <li class="list-group-item">chat with other users about anything</li>
            <li class="list-group-item">invite users to have a private conversation</li>
            <li class="list-group-item">see whos active and most likely to respond fast</li>
            <li class="list-group-item">provide your gender <i><small>(optional)</small></i></li>
        </ul>

        <form class="form-inline mt-4 justify-content-center">
            <label class="sr-only" for="username">username</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="username" placeholder="username">

            <label class="sr-only" for="gender">gender</label>
            <select class="custom-select mb-2 mr-sm-2" id="gender">
                <option selected>gender (optional)</option>
                <option value="male">male</option>
                <option value="female">female</option>
            </select>

            <button type="submit" class="btn btn-primary mb-2">JOIN Web-Chat !</button>
        </form>
    </div>
</div>

    <script src="./jquery-3.5.1/jquery.min.js"></script>
    <script src="./bootstrap-4.5.3/js/bootstrap.min.js"></script>
</body>
</html>