<?php

// get the content of form data and print it to this page when the form is submitted
print_r($_POST);


// to get the content of form data and store the data in an array format by assigning the array_key to the variable names e.g $name 
extract($_REQUEST);

// open file location and append data 
$file = fopen("./userdata.csv", "a");


// if the file path is true or correct write the form data into it
if($file){
    fwrite($file, "Name :$name"."\n");
    fwrite($file, "Email :$email"."\n");
    fwrite($file, "Date :". $date. "\n");
    fwrite($file, "Gender :". $gender. "\n");
    fwrite($file, "Country :". $country. "\n");

    exit;
}

fclose($file);

?>