<?php

include_once 'carrito.php';

if(isset($_GET['action'])){
    $accion = $_GET['action'];
    $carrito = new Carrito();

    switch($accion){ //Mostrar, a;adir y borrar
        case 'show':
        show($carrito);
        break;

        case 'add':
        add($carrito);
        break;

        case 'remove':
        remove($carrito);
        break;
        
        default:
    }

}else{
    echo json_encode(['statuscode' => 404, 'response' => 'No se pudo procesar la solicitud.']);
}

function show($carrito){
    //cargar arreglo en la sesion
    //consultar db y actualizar valores de los productos 

    $itemsCarrito = json_decode($carrito->load(), 1);
    $fullItems = [];
    $total = 0;
    $totalItems = 0;

    foreach($itemsCarrito as $itemCarrito){
        $httpRequest = file_get_contents('http://localhost/weeeeeb/examen/api/productos/api-productos.php?get-item=' . $itemCarrito['id']);
        $itemProducto = json_decode($httpRequest, 1)['item'];
        $itemProducto['cantidad'] = $itemCarrito['cantidad'];
        $itemProducto['subtotal'] = $itemProducto['cantidad'] * $itemProducto['precio']; 
        $total += $itemProducto['subtotal'];
        $totalItems += $itemProducto['cantidad'];
        array_push($fullItems, $itemProducto);
    }   
    $resArray = array('info' => ['count' => $totalItems, 'total' => $total], 'items' => $fullItems);
    echo json_encode($resArray);
}

function add($carrito){
    if(isset($_GET['id'])){
        $res = $carrito->add($_GET['id']);
        echo $res;
    }else{
        echo json_encode(['statuscode' => 404, 'response' => 'Error, el id se encuentra vacio al agregar']);
    }
}

function remove($carrito){
    if(isset($_GET['id'])){
        $res = $carrito->remove($_GET['id']);

        if($res){
            echo json_encode(['statuscode' => 200]);
        }else{
            echo json_encode(['statuscode' => 400]);
        }

    }else{
        echo json_encode(['statuscode' => 404, 'response' => 'Error, el id se encuentra vacio']);
    }
}


?>