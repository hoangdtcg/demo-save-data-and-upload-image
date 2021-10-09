<?php
function saveData($data){
    $dataJson = json_encode($data);
    file_put_contents("data.json",$dataJson);
}

function loadData(){
    $dataJson = file_get_contents("data.json");
    return json_decode($dataJson,true);
}

function addNewCustomer($customer){
    $customers = loadData();
    array_push($customers, $customer);
    saveData($customers);
}