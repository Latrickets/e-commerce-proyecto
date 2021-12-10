<?php
include_once '../../lib/session.php';

class Carrito extends Session{

    function __construct(){
        parent::__construct('carrito');
    }

    public function load(){
        if($this->getValue() == NULL){
            return [];
        }
        return $this->getValue();
    }

    public function add($id){
        if($this->getValue() == NULL){ //Validamos que si el carrito esta nulo creamos un arreglo
            $items = [];
        }else{
            $items = json_decode($this->getValue(), 1);
            //ciclamos si el id ya existe y si existe le agregamos 1+, codificamos de nuevo y regresamos.
            for($i=0; $i<sizeof($items); $i++){
                if($items[$i]['id'] == $id){
                    $items[$i]['cantidad']++;
                    $this->setValue(json_encode($items));
                    return $this->getValue();
                }
            }
        }
        //Si el carro esta vacio o hay un nuevo elemento
        //creamos el elemento y lo arreglamos
        $item = ['id' => (int)$id, 'cantidad' => 1];
        
        array_push($items, $item);
        //codificamos de nuevo y regresamos
        $this->setValue(json_encode($items));
        return $this->getValue();
    }

    public function remove($id){
        if($this->getValue() == NULL){
            $items = [];
        }else{
            $items = json_decode($this->getValue(), 1);

            for($i = 0; $i < sizeof($items); $i++){

                if($items[$i]['id'] == $id){
                    $items[$i]['cantidad']--;

                    if($items[$i]['cantidad'] == 0){
                        unset($items[$i]);
                        $items = array_values($items);
                    }

                    $this->setValue(json_encode($items));
                    return true;
                }
            }
        }
    }
}
?>