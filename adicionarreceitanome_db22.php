<?php


$msg = ""; 

// check if the user has clicked the button "UPLOAD" 
include("liga.php");

if (NULL!=($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];  

        $folder = "./imagens/".$filename;   

    // connect with the database
   // include("liga.php");
    //$db = mysqli_connect("localhost", "root", "", "Image_Upload"); 

        // query to insert the submitted data

        $sql = "INSERT INTO imagens (nomeImagem) VALUES ('$filename')";

        // function to execute above query

        mysqli_query($con, $sql);       

        // Add the image to the "image" folder"

        if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }

}

$result = mysqli_query($con, "SELECT * FROM imagens");

header('location: adicionarreceita.php');

?>


	
	
	
	
?>