<?php

class App{
    public function_construct()
    {
        $url=$this->parseURL();
        var_dump($url);
    }
    public function parseURL()
{
 if(isset($_GET['url'])) {
     // menghilangkan garis miring(/) di akhir url
     $url= rtrim($_GET['url'],'/');
     // menghilangkan karakter atau karakter yang memungkinkan kita di hack
     $url= filter_var($url, FILTER_SANITIZE_URL);
     //menghilangkan tanda garing miring(/) dan mengambil stringnya
     $url=explode('/',$url);
     return $url;
   }
 }


 
}