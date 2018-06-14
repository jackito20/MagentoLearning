<?php
    class Colcomercio_Holamundo_IndexController extends Mage_Core_Controller_Front_Action {
        public function indexAction() {
            echo "‘Hola Mundo Colcomercio!’";
        }

        public function saludarAction() {
            $input = $this->getRequest()->getParam("nombre");
            $name = $input ? $input : "Desconocido";
            //echo "‘Hola ".$name." Colcomercio te esta saludando...!’";
            $saludador = Mage::getSingleton("colcomercio_holamundo/saludador");
            $saludo = $saludador->construirSaludo($name);
            echo($saludo);
        }
    }