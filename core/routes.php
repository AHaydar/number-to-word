<?php
/**
 * Created by PhpStorm.
 * User: ahaydar
 * Date: 7/27/18
 * Time: 4:51 AM
 */



$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('contact','PagesController@contact');
$router->get('users', 'UsersController@index');

$router->post('users', 'UsersController@store');