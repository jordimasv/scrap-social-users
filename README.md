# scrap-social-users
PHP class for scrapping social users from a url

##Installation
Include the class in your php script
```php
require 'class.scrap.social.users.php';
```
##Usage
```php
$url   = 'http://www.hotelesglobales.com';
$ssu   = new ScrapSocialUsers($url);
$users = $ssu->getUsers();
```
##Example
```bash
jmas@fractal:~/Code/scrap-social-users$ php example.php    
Url                                     Social Site         User 
=====================================================================================
http://www.hotelesglobales.com          Facebook            HotelesGlobales
http://www.hotelesglobales.com          Twitter             HotelesGlobales
http://www.hotelesglobales.com          YouTube             hotelesglobales 
http://www.hotelesglobales.com          Flickr              hotelesglobales  
http://www.riu.com                      Facebook            Riuhoteles  
http://www.riu.com                      Twitter             RiuHoteles 
http://www.riu.com                      YouTube             RiuHotelesyResorts 
http://www.riu.com                      Instagram           riuhotels 
http://www.riu.com                      Pinterest           riuhotels 
http://www.riu.com                      Flickr              riuhotels 
http://www.iberostar.com                Facebook            IberostarHotelsEnglish 
http://www.iberostar.com                Twitter             iberostar_eng 
http://www.iberostar.com                YouTube             iberostar 
http://www.iberostar.com                Instagram           iberostar   
http://www.iberostar.com                Pinterest           iberostarsm    
```
