<?php

namespace phpunittestproject;

require 'Calculator.php';

class Api
{
    public function processRequest()
    {
        $request = json_decode(file_get_contents('php://input'), true);
        if (!isset($request['firstNumber']) || !isset($request['secondNumber'])) {
            return json_encode([
                "message" => "Plese provide the numbers",
                "status" => "400",
                "success" => false
            ]);
        }
        $cal = new Calculator();
        $sum = $cal->additional($request['firstNumber'], $request['secondNumber']);
        return json_encode([
            "message" => "Calculated successfully",
            "status" => "200",
            "success" => true,
            "data" => [
                "sum" => $sum
            ]
        ]);
    }
}
$api = new Api();
echo $api->processRequest();
