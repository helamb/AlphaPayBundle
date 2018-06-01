<?php

    $routes = [
        "home" => "home.php",
        "about" => "about.php",
        "contact" => "contact.php",
        "payment/visa" => "payment.php",
        "payment/mastercad" => "payment.php",
        "payment/express" => "payment.php"
    ];

    /**
     * Original request (Example : localhost/AlphaPayBundle/payment/visa:8080?lang=fr)
     * useful resources:
     * https://www.thoughtco.com/using-server-in-php-2693940
     */
    $requestedUrl = getRequestedUrl();
    
    /**
     * Parsed request (Example : payment/visa) 
     * [localhost/AlphaPayBundle/, ?lang=fr] <- removed
     * useful resources :
     * https://www.scriptol.fr/comment/parser-url.php (first section only)
     * 
     */
    $parsedRequestedUrl = parseRequestedUrl($requestedUrl);

    /**
     * Controller file to call based on request ($routes[request] = response)
     * Note : handle unmatched requests (404 not Found)
     * useful resources :
     *  not needed.
     */
    $controllerFile = getControllerFile($parsedRequestedUrl);


    /**
     * Perform redirection
     */
    redirect($controllerFile);