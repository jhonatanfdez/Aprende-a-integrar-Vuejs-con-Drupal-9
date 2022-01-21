<?php 

namespace Drupal\modulo1\Controller;

use Drupal\Core\Controller\ControllerBase;

class Modulo1Controller extends ControllerBase {

    public function content() {

        \Drupal::service('page_cache_kill_switch')->trigger(); 

        return [
           
            '#markup' => '<h2>Prueba 6</h2>'
        ];

    }

}