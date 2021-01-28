<?php
function getCurURL()
{
    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
        $pageURL = "https://";
    } else {
        $pageURL = 'http://';
    }
    if (isset($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"]
            . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}
function checkActiveMenu($menuName){
    $url = getCurURL();

    return strpos($url,$menuName) >0 ? "active" : "";
}
?>

