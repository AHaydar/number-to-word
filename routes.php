<?php

$router->get('','ConverterController@home');

$router->post('', 'ConverterController@convert');