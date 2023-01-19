<?php
header('content-type: application/json; charset=utf-8');
class Controller
{
    public function login()
    {
        $body = json_decode(file_get_contents("php://input"), true);
        $email = "german@milenium.group";
        $pass = "12345";
        if ($email == $body["correo"] || $pass == $body["contra"]) {
            echo json_encode(array("status" => 200, "message" => "Inicio de sesión exitoso"));
        } else {
            echo json_encode(array("status" => 400, "message" => "Inicio de sesión fallido"));
        }
    }
}
