<?php
/**
 * Point your web-browser to URL http://www.example.com/hellorouter. As a result, web browser displays the text 'Hello World!'.
 * URL http://www.example.com/hellorouter/John/Smith displays the text 'Hello John Smith!'.
 */
$routes['hellorouter{/firstName,lastName}'] = function ($firstName = '', $lastName = '') {


    if ($firstName != '') {
        $output = 'Hello ' . esc($firstName);

        if ($lastName != '') {
            $output .= ' ' . esc($lastName);
        }

        $output .= '!';

    } else {
        $output = "Hello World!";
    }

    return $output;
};

