<?php
    
    WINREQUEST_URI("/winteressopack");
   
    switch ($requesturi) {
        case $location.'/' :
            require "views/views.php";
            break;
        case $location.'/home' :
            require "views/views2.php";
            break;

        // ====== add route here ======    
        
        default:
            http_response_code(404);
            echo "DIR NOT FOUND";
            break;

    }





 
