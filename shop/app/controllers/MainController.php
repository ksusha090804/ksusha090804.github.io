<?php

namespace app\controllers;
use ishop\Cache;

class MainController extends AppController
{
    
    public function indexAction(){
    
      $hits=\R::find('product', "hit = '1' AND status = '1' LIMIT 4");
      $this->setMeta('Главная страница', 'Описание', 'Ключевики');
      $this->set(compact('hits'));
      
    }
}