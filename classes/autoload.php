<?php
    //megfelleő hivatkozást készít elő, illetve a hivatkozott .php filet include-oli.
    spl_autoload_register(
        function ($class){
            $class = strtolower($class);
            $class = str_replace("\\","/",$class);
            include_once $class . ".php";
        }
    );

