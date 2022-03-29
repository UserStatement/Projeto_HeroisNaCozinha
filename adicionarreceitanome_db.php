<?php
include ("liga.php");
$_SESSION["nomeReceita"]=$_POST["nomereceita"];
$_SESSION["nomeImagem"]=$_POST['nomeImagem'];
//filter_var($_POST["nomereceita"], FILTER_SANITIZE_STRING); 
// check if a file was submitted
if(!isset($_FILES['chosefile']))
{
    echo '<p>Please select a file</p>';
}
else
{
    try {
    $msg= upload();  //this will upload your image
    echo $msg;  //Message showing success or failure.
    }
    catch(Exception $e) {
    echo $e->getMessage();
    echo 'Sorry, could not upload file';
    }
}

// the upload function

function upload() {
    //include "liga.php";
    $maxsize = 10000000; //set to approx 10 MB

    //check associated error code
    if($_FILES['chosefile']['error']==UPLOAD_ERR_OK) {

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['chosefile']['tmp_name'])) {    

            //checks size of uploaded image on server side
            if( $_FILES['chosefile']['size'] < $maxsize) {  
  
               //checks whether uploaded file is of image type
              //if(strpos(mime_content_type($_FILES['chosefile']['tmp_name']),"image")===0) {
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['chosefile']['tmp_name']),"image")===0) {    

                    // prepare the image for insertion
                    $imgData =addslashes (file_get_contents($_FILES['chosefile']['tmp_name']));

                    // put the image in the db...
                    // database connection
                    //include "liga.php";

                    // select the db
                    //mysql_select_db ($db) OR DIE ("Unable to select db".mysql_error());

                    // our sql query
                    $sql = "INSERT INTO imagens
                    (idImagem , idUtilizador, valorImagem, nomeImagem)
                    VALUES
                    (null, null,'{$imgData}', '{$_FILES['chosefile']['name']}');";
                    
                    // insert the image
                    mysql_query($sql) or die("Error in Query: " . mysql_error());
                    $msg='<p>Image successfully saved in database with id ='. mysql_insert_id().' </p>';

                    //moving image to server folder
                    $filename = $_FILES["choosefile"]["name"];

                    $tempname = $_FILES["choosefile"]["tmp_name"];  

                    $folder = "./imagens/".$filename;
                    move_uploaded_file($tempname, $folder);
                    //guardar a variavel na sessão
                    $_SESSION["nomeImagem"]=$filename;
                }
                else
                    $msg="<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['chosefile']['name'].' is '.$_FILES['chosefile']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['chosefile']['error']);
    }
    return $msg;
}

// Function to return error message based on error code

function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}

//$result = mysqli_query($con, "SELECT * FROM imagens");

header('location: adicionarreceita.php');

?>