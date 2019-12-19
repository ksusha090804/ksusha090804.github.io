<?php
namespace app\controllers;
use ishop\base\Controller;
use app\models\AppModel;
use ishop\Cache;
use ishop\App;

class AppController extends Controller{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
        App::$app->setProperty('cats', self::cacheCategory());
       
    }

    public static function cacheCategory(){
     $cache = Cache::instance();
     $cats = $cache->get('cats');
     if(!$cats){
         $cats = \R::getAssoc("SELECT * FROM category");
         $cache->set('cats', $cats);
     }   
     return $cats;
    }
}