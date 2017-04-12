<?php

require(ROOT . "model/BirthdayModel.php");

function index(){

$birthdays = getAllBirthdays();

render('birthdays/overview', array('birthdays' => $birthdays));

}


function update($id){

render("birthdays/update", array('birthdays' => getBirthday($id)));

}

function updateSave(){

	if (!updateBirthday()){
	    header("Location:" . URL . "error/index");
	    exit();
    }

	header("Location:" . URL . "birthdays/overview");
}

function create(){

render("birthdays/create");

}

function createSave(){

    if (!createBirthday()){
	    header("Location:" . URL . "error/index");
	    exit();
    }

    header("Location:" . URL . "birthdays/overview");
}

function delete($id){

    if (!deleteBirthday($id)){
	    header("Location:" . URL . "error/index");
	    exit();
    }

    header("Location:" . URL . "birthdays/overview");


}