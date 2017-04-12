<?php

require(ROOT . "model/PatientModel.php");

function index(){

$patients = getAllPatients();

render('patients/front', array('patients' => $patients));

}


function edit($id){

	render("patients/edit", array('patients' => getPatient($id)));

}

function updateSave(){

	if (!updatePatient()){
	    header("Location:" . URL . "error/index");
	    exit();
    } 
    else {
    	header("Location:" . URL . "patient/index");
    }
}

function create(){

render("patients/create");

}

function createSave(){

    if (!createPatient()){
	    header("Location:" . URL . "error/index");
	    exit();
    }
    else {
    	header("Location:" . URL . "patient/index");

    }
}

function delete($id){

    if (!deletePatient($id)){
	    header("Location:" . URL . "error/index");
	    exit();
    }
    else {
        header("Location:" . URL . "patient/index");

    }
}