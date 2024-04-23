<?php
//Creating a connection
$con = mysqli_connect("localhost", "root", "","mydb");
//Query to retrieve all the rows of employee tablemysqli_query($con, "SELECT * FORM employee");
//Error
$error = mysqli_error($con);
print("Error Occurred: ".$error);
//Closing the connection
mysqli_close($con);
?>