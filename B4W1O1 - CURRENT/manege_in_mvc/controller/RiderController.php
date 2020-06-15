<?php
require(ROOT . "model/RiderModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $riders = getAllRiders();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('rider/index', ["riders" => $riders]);
}

function create(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
    render('rider/create');

}

function store(){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    $name = $_POST['name'];
    $adress = $_POST['adress'];
    $tel = $_POST['tel'];
    $horse = $_POST['horse'];

    createRider($name, $adress, $tel, $horse);
    //2. Bouw een url op en redirect hierheen
    $riders = getAllRiders();
    header('location: ' . URL);
}

function edit($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    //echo $id;
    $rider = getRider($id);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render('rider/update', ["rider" => $rider]);
}

function update($id){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database

    updateRider($id, $_POST['name'], $_POST['adress'], $_POST['tel'], $_POST['horse']);
    //2. Bouw een url en redirect hierheen
    header('location: ' . URL);
}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable

    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee

}

function destroy($id){
    //1. Delete een medewerker uit de database
    deleteRider($id);
	//2. Bouw een url en redirect hierheen
    header('location: ' . URL);
}
?>