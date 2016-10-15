<?php
require 'class.scrap.social.users.php';

$urls = array(
    'http://www.hotelesglobales.com',
    'http://www.riu.com',
    'http://www.iberostar.com'
);

#Colum Sizes
define('URL_SIZE', 40);
define('SITE_SIZE', 20);
define('USER_SIZE', 25);

#Table header
echo str_pad('Url', URL_SIZE).str_pad('Social Site', SITE_SIZE).str_pad('User', USER_SIZE)."\n";
echo str_pad('', URL_SIZE+SITE_SIZE+USER_SIZE, '=')."\n";

foreach($urls as $url){
    $ssu = new ScrapSocialUsers($url);
    $users = $ssu->getUsers();

    foreach($users as $user){
        #Table line
        echo str_pad($url, URL_SIZE).str_pad($user['site'], SITE_SIZE).str_pad($user['user'], USER_SIZE)."\n";
    }
}