<?php

    // Include autoloader
    require_once 'dompdf/autoload.inc.php';

    // Reference the Dompdf namespace
    use Dompdf\Dompdf;

function heytest(){
    file_put_contents('Brochure.txt', 'Hello world im a test!');
}


function printtest(){



    // Instantiate and use the dompdf class
    $dompdf = new Dompdf();


    //this will be something like: http://www.yourapp.com/templates/log.php
    $fileUrl = "assets/VXM-formats-in-html/VXM-003.html";

    //get file content after the script is server-side interpreted
    $fileContent = file_get_contents( $fileUrl ) ;

    // Load HTML content
    $dompdf->loadHtml($fileContent);

    // (Optional) Setup the paper size and orientation
    // $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    $output = $dompdf->output();

    // $dompdf->stream("AAAA",array("Attachment"=>0));
    file_put_contents('assets/PDF-Formats/VXM-003.pdf', $output);

}




function put_to_database(){


    echo '<h1>Hello world! This is a .csv test</h1>';

    $file = fopen('LIBROVXM.csv', 'r');
    while (($line = fgetcsv($file)) !== FALSE) {
    //$line is an array of the csv elements
    // print_r($line);
    foreach ($line as &$value) {
        echo '<h5>'.$value.'</h5>';
        // $value = $value * 2;
    }
    break;
    }
    fclose($file);

}


// put_to_database()

?>