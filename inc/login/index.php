<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlentities(strip_tags($_POST["username"]));
    $gender = htmlentities(strip_tags($_POST["gender"]));

    if (strlen($username) > 3) {
        if ($username !== "admin" && $username !== "Admin" && $username !== "ADMIN") {
            if ($gender === "male" || $gender === "female" || $gender === "") {
                $_SESSION["username"] = $username;
                $_SESSION["gender"] = $gender;
                $_SESSION["started"] = time();
                $rsp = array(
                    "status" => True,
                    "url" => "./room"
                );
            } else {
                $rsp = array(
                    "status" => False,
                    "type" => "gender",
                    "msg" => "unknown gender"
                ); 
            }
        } else {
            $rsp = array(
                "status" => False,
                "type" => "username",
                "msg" => "this username is not available"
            );
        }
    } else {
        $rsp = array(
            "status" => False,
            "type" => "username",
            "msg" => "username must be longer than 3 characters"
        );
    }

    echo json_encode($rsp);
}