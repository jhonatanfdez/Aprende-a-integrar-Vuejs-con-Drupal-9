<?php 

namespace Drupal\modulo1\Controller;

use Drupal\Core\Controller\ControllerBase;

class Modulo1Controller extends ControllerBase {

    public function content() {
        
        \Drupal::service('page_cache_kill_switch')->trigger(); 

        $contenido =[];

        /*$contenido[]= [
           '#markup' => '
                <h2>Mostrar datos en vue</h2> 
                <div id="counter">

                <input type="text" name="mensaje" id="mensaje" class="form-control" 
                v-model="counter"
                >
                <br>
                <input type="button" value="Mostrar Mensaje" class="btn btn-primary"
                v-on:click="mostrarMensaje()"
                >
                <br>
                Counter: {{ counter }} 
    
            </div>
           
           '
        ];*/


        $contenido[]= [
            '#markup' => '
                 <h2>Mostrar datos en vue</h2> 
                 <div id="counter">                                           
            '
        ];


        


        $contenido['nombre'] = array(
            '#type' => 'textfield',
            '#name' => 'nombre',
            '#id' => 'nombre',
            '#title' => $this->t('Digite el nombre'),
            //'#default_value' => $node->title,
            '#size' => 60,
            '#maxlength' => 128,
            //'#pattern' => 'some-prefix-[a-z]+',
            //'#required' => TRUE,
            '#attributes' => array(                
                'v-model' => array('counter')
            ),
          );

        $contenido['actions']['preview'] = array(
            '#type' => 'button',
            '#attributes' => array(
                'class' => array('btn btn-primary'),
                'v-on:click' => array('mostrarMensaje()')
            ),

            '#value' => $this
              ->t('Mostrar Mensaje'),
        );


        $contenido[]= [
            '#markup' => '                            
                 Counter: {{ counter }}      
             </div>            
            '
        ]; 

        $contenido['#attached']['library'][] = 'modulo1/vue_controller';
        //$contenido['#attached']['library'][] = 'modulo1/global';
        return $contenido;

    }
}