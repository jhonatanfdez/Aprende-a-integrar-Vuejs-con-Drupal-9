<?php 

namespace Drupal\modulo1\Controller;

use Drupal\Core\Controller\ControllerBase;

class Modulo1Controller extends ControllerBase {

    public function content() {
        
        \Drupal::service('page_cache_kill_switch')->trigger(); 

        $contenido =[];

        $contenido[]= [
           '#markup' => '
                <h2>Prueba 7</h2> 
                notificaciones: <span class="badge bg-success colorrojo">7</span>
           
           '
        ];

        $contenido['#attached']['library'][] = 'modulo1/global';
        return $contenido;

    }
}