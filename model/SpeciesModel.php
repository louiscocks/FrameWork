<?php

function getAllPatients(){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;
	
	return $query->fetchAll();
}

function getPatient($id){

	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(":id" => $id));

	$db = null;

	return $query->fetch();
}

function createPatient(){
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;

	if (strlen($name) == 0 && strlen($name) == 0 && strlen($name) == 0) {
		return false;
    }

	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients (name, species, status) VALUES (:name, :species, :status)";
	$query = $db->prepare($sql);
	$query->execute(array( ':name' => $name, ':species' => $species, ':status' => $status));

	$db = null;

	return true;
}

function updatePatient(){
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	$status = isset($_POST['status']) ? $_POST['status'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;

	if (strlen($name) == 0 && strlen($name) == 0 && strlen($name) == 0) {
		return false;
    }

	$db = openDatabaseConnection();
	$sql = "UPDATE patients SET name = :name, species = :species, status = :status WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(':name' => $name,':species' => $species,':status' => $status, ':id' => $id));

	$db = null;
	
	return true;
}

function deletePatient($id){
	
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();
	$sql = "DELETE FROM patients WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(':id' => $id));

	$db = null;
	
	return true;
}