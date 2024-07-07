<?php

namespace phpunittestproject;

require 'Calculator.php';

class Api
{
    public function processRequest()
    {
        $request = json_decode(file_get_contents('php://input'), true);
        if (!isset($request['firstNumber']) || !isset($request['secondNumber'])) {
            return $this->sendResponse(400, "Please provide the numbers", false);
        }
        if (!is_numeric($request['firstNumber']) || !is_numeric($request['secondNumber'])) {
            return $this->sendResponse(400, "Inputs must be numbers", false);
        }
        $cal = new Calculator();
        $sum = $cal->additional($request['firstNumber'], $request['secondNumber']);
        return $this->sendResponse(200, "Calculated successfully", true, ['sum' => $sum]);
    }
    private function sendResponse($status, $message, $success, $data = [])
    {
        header('Content-Type: application/json');
        return json_encode([
            "message" => $message,
            "status" => $status,
            "success" => $success,
            "data" => $data
        ]);
    }
}
$api = new Api();
echo $api->processRequest();
