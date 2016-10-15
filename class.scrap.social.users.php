<?php

Class ScrapSocialUsers {

    public $url     = '';
    public $users   = array();
    public $sites   = array(
        array('name'=>'Facebook',       'pattern'=>'/[www\.]?facebook.com\/([^<"\/]*)/'),
        array('name'=>'Twitter',        'pattern'=>'/[www\.]?twitter.com\/([^<"\/]*)/'),
        array('name'=>'YouTube',        'pattern'=>'/[www\.]?youtube.com\/user\/([^<"\/]*)/'),
        array('name'=>'Instagram',      'pattern'=>'/[www\.]?instagram.com\/([^<"\/]*)/'),
        array('name'=>'Pinterest',      'pattern'=>'/[www\.]?pinterest.com\/([^<"\/]*)/'),
        array('name'=>'Flickr',         'pattern'=>'/[www\.]?flickr.com\/photos\/([^<"\/]*)/')
    );

    function __construct($url){
        $this->url = $url;
    }

    function getUsers() {
        $html = file_get_contents($this->url);
        foreach($this->sites as $site){
            preg_match($site['pattern'], $html, $matches);

            if(isset($matches[1])){
                $users[] = array('site'=>$site['name'], 'user'=>$matches[1]);
            }
        }
        return $users;
    }
}

?>