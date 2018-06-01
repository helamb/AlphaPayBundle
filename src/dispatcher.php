<?php
function getRequestedUrl()
{

}
function parseRequestedUrl($requestedUrl)
{

}
function getControllerFile($parsedRequestedUrl)
{
    if (array_key_exists($parsedRequestedUrl, $routes)) {
        return $routes[$parsedRequestedUrl];
    }
        else {
            return "404.php" ;
        }
}
?>