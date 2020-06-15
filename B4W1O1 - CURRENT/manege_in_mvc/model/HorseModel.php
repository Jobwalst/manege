<?php

function getAllHorses(){
  // Met het try statement kunnen we code proberen uit te voeren. Wanneer deze
  // mislukt kunnen we de foutmelding afvangen en eventueel de gebruiker een
  // nette foutmelding laten zien. In het catch statement wordt de fout afgevangen
   try {
       // Open de verbinding met de database
       $conn=openDatabaseConnection();
   
       // Zet de query klaar door middel van de prepare method
       $stmt = $conn->prepare("SELECT * FROM paarden");

       // Voer de query uit
       $stmt->execute();

       // Haal alle resultaten op en maak deze op in een array
       // In dit geval is het mogelijk dat we meedere medewerkers ophalen, daarom gebruiken we
       // hier de fetchAll functie.
       $result = $stmt->fetchAll();

   }
   // Vang de foutmelding af
   catch(PDOException $e){
       // Zet de foutmelding op het scherm
       echo "Connection failed: " . $e->getMessage();
   }

   // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
   // van de server opgeschoond blijft
   $conn = null;

   // Geef het resultaat terug aan de controller
   return $result;
}

function getHorse($id){
    try {
        // Open de verbinding met de database
        $conn=openDatabaseConnection();
 
        // Zet de query klaar door midel van de prepare method. Voeg hierbij een
        // WHERE clause toe (WHERE id = :id. Deze vullen we later in de code
        $stmt = $conn->prepare("SELECT * FROM paarden WHERE id = :id");
        // Met bindParam kunnen we een parameter binden. Dit vult de waarde op de plaats in
        // We vervangen :id in de query voor het id wat de functie binnen is gekomen.
        $stmt->bindParam(":id", $id);

        // Voer de query uit
        $stmt->execute();

        // Haal alle resultaten op en maak deze op in een array
        // In dit geval weten we zeker dat we maar 1 medewerker op halen (de where clause), 
        //daarom gebruiken we hier de fetch functie.
        $result = $stmt->fetch();
 
    }
    catch(PDOException $e){

        echo "Connection failed: " . $e->getMessage();
    }
    // Maak de database verbinding leeg. Dit zorgt ervoor dat het geheugen
    // van de server opgeschoond blijft
    $conn = null;
 
    // Geef het resultaat terug aan de controller
    return $result;
 }

function createHorse($race, $age, $withersh, $type, $jumps, $description){
    // Maak hier de code om een medewerker toe te voegen
  $conn = openDatabaseConnection();
  $stmt = $conn->prepare("INSERT INTO paarden (ras, leeftijd, schofth, soort, springsp, beschrijving) VALUES (:ras, :leeftijd, :schofth, :soort, :springsp, :beschrijving)");
  $stmt->bindParam(":ras", $race);
  $stmt->bindParam(":leeftijd", $age);
  $stmt->bindParam(":schofth", $withersh);
  $stmt->bindParam(":soort", $type);
  $stmt->bindParam(":springsp", $jumps);
  $stmt->bindParam(":beschrijving", $description);
  $stmt->execute();
 }


 function updateHorse($id, $race, $age, $withersh, $type, $jumps, $description){
    // Maak hier de code om een medewerker te bewerken
  $conn = openDatabaseConnection();
  $stmt = $conn->prepare("UPDATE paarden SET ras = :ras, leeftijd = :leeftijd, schofth = :schofth, soort = :soort, springsp = :springsp, beschrijving = :beschrijving WHERE id = :id");
  $stmt->bindParam(":id", $id);
  $stmt->bindParam(":ras", $race);
  $stmt->bindParam(":leeftijd", $age);
  $stmt->bindParam(":schofth", $withersh);
  $stmt->bindParam(":soort", $type);
  $stmt->bindParam(":springsp", $jumps);
  $stmt->bindParam(":beschrijving", $description);
  $stmt->execute();
 }

 function deleteHorse($id){
    // Maak hier de code om een medewerker te verwijderen
  $conn = openDatabaseConnection();
  $stmt = $conn->prepare("DELETE FROM paarden WHERE id = :id");
  $stmt->bindParam(":id", $id);

  $stmt->execute();
 }


?>