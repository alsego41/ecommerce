<?php 
    function head($pageTitle, $styleFile){
        echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>$pageTitle</title>
            <link rel='stylesheet' href='../views/styles/admin.css'>
            <link rel='stylesheet' href='../views/styles/publications.css'>
            <link rel='stylesheet' href='$styleFile'>
        </head>";
    }
?>