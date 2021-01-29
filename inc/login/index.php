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

                // user database connection
                include "../../php/autoload.php";
                $db = new DataController([
                    "server" => $_MainDB["server"],
                    "database" => $_MainDB["database"],
                    "table" => $_MainDB["table"],
                    "username" => $_MainDB["username"],
                    "password" => $_MainDB["password"],
                ]);

                // user database insertion
                $clbck = $db->insert(["username", "session_start", "last_activity", "current_activity", "present", "gender"],
                                    [$username, $_SESSION["started"], $_SESSION["started"], $_SESSION["started"], 1, $_SESSION["gender"]]);

                $_SESSION["userId"] = $clbck["insertId"];
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