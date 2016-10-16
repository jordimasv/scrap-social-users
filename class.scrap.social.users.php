<?php

Class ScrapSocialUsers {

    public $url     = '';
    public $users   = array();
    public $sites   = array(
        array('name'=>'facebook',       'pattern'=>'/[www\.]?facebook.com\/([^<"\/]*)/'),
        array('name'=>'twitter',        'pattern'=>'/[www\.]?twitter.com\/([^<"\/]*)/'),
        array('name'=>'youtube',        'pattern'=>'/[www\.]?youtube.com\/user\/([^<"\/]*)/'),
        array('name'=>'instagram',      'pattern'=>'/[www\.]?instagram.com\/([^<"\/]*)/'),
        array('name'=>'pinterest',      'pattern'=>'/[www\.]?pinterest.com\/([^<"\/]*)/'),
        array('name'=>'flickr',         'pattern'=>'/[www\.]?flickr.com\/photos\/([^<"\/]*)/'),
        array('name'=>'google+',        'pattern'=>'/plus\.google\.com\/[^+]*(\+[^<"\/]*)/'),
        array('name'=>'linkedin',       'pattern'=>'/[www\.]?linkedin.com\/[^\/]*\/([^<"\/]*)/')
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