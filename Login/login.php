<?php
/*

This is just for testing purposes


*/
if ( $_POST["uname"] == "testuser" && $_POST["upass"] == "testuser" ) {
	//go to page

	header("Location: ../Start");
}else{
	//go back to login
	header("Location: ../Login");
}

?>