<?php

	//backgrounder chnager
	//This page allows the background of certain pages to change

	/************************************************************
	*** variables are declared; arrays of different questions ***
	************************************************************/
	//a variable that is an array. array is the middle part of the path
	$backArray = array("One", "Two", "Three", "Five", "Six", "Seven", "Eight", "Ten");

	/********************************
	*** string function (shuffle) ***
	********************************/
	shuffle($backArray);//randomly reorganizes the array and thus the first element will usually change
	$path = "images/back".$backArray[0].".jpg";//path uses the first element to finish path; path used in 'quiz.php' and 'results.php'