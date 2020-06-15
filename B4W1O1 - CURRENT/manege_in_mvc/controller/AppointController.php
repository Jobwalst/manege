<?php
require(ROOT . "model/AppointModel.php");


function index()
{
    //1. Haal alle medewerkers op uit de database (via de model) en sla deze op in een variable
    $appoints = getAllAppoints();
    //2. Geef een view weer en geef de variable met medewerkers hieraan mee
    render('appoint/index', ["appoints" => $appoints]);
}

function riderIndex(){
    $riders = getAllRiders();

    render('appoint/create', ["riders" => $riders]);
}

function create(){
    //1. Geef een view weer waarin een formulier staat voor het aanmaken van een medewerker
    render('appoint/create');

}

function store(){
    //1. Maak een nieuwe medewerker aan met de data uit het formulier en sla deze op in de database
    $race = $_POST['race'];
    $age = $_POST['age'];
    $withersh = $_POST['withersh'];
    $type = $_POST['type'];
    $jumps = $_POST['jumps'];
    $description = $_POST['description'];

    createHorse($race, $age, $withersh, $type, $jumps, $description);
    //2. Bouw een url op en redirect hierheen
    $riders = getAllAppoints();
    header('location: ' . URL . 'horse/index');
}

function edit($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable
    //echo $id;
    $horse = getHorse($id);
    //2. Geef een view weer voor het updaten en geef de variable met medewerker hieraan mee
    render('horse/update', ["horse" => $horse]);
}

function update($id){
    //1. Update een bestaand persoon met de data uit het formulier en sla deze op in de database

    updateHorse($id, $_POST['race'], $_POST['age'], $_POST['withersh'], $_POST['type'], $_POST['jumps'], $_POST['description']);
    //2. Bouw een url en redirect hierheen
    header('location: ' . URL . 'horse/index');
}

function delete($id){
    //1. Haal een medewerker op met een specifiek id en sla deze op in een variable

    //2. Geef een view weer voor het verwijderen en geef de variable met medewerker hieraan mee

}

function destroy($id){
    //1. Delete een medewerker uit de database
    deleteHorse($id);
	//2. Bouw een url en redirect hierheen
    header('location: ' . URL . 'horse/index');
}
?>