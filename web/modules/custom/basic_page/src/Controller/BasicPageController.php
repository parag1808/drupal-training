<?php

namespace Drupal\basic_page\Controller;
use Drupal\Core\Controller\ControllerBase;

class BasicPageController extends ControllerBase{
    public function basicPage(){
        return[
            '#title' => 'Title Override',
            '#markup' => '<h2>This is h2 tag</h2>'
        ];
    }
    public function information(){

        $data = array(
            'name' => 'Parag Tawde',
            'email' => 'parag@gmail.com'
        );
           
        

        return [
            '#title' => 'Information Page Title',
            '#theme' => 'infomation_page',
            '#items' => $data
        ];
    }
}

?>