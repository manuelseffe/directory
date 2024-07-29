<?php

function dirHeader()
{
    $header = "<!DOCTYPE html>";
    $header .= "<html lang='en'>";
    $header .= "<head>";
    $header .= meta();
    // $header .= dirTitle();
    $header .= "</head>";
    $header .= "<body>";

    return $header;
}

function dirFooter()
{
    $footer = "<footer class='footer'>";
    $footer .= "Etsako Club 81 Business Directory";
    $footer .= "</footer>";
    $footer .= "</body>";
    $footer .= "</html>";

    return $footer;
}

function dirSidebar()
{

}

function meta()
{  
    return '<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>';

}


