<?php 
require_once "../modelos/Listacategorias.php";
$categorias = new ModeloCategorias();
	switch ($_GET["op"]) {
        case 'listar':
                $rspta=$categorias->ListaCategorias();
                $data=Array();
                while ($reg=$rspta->fetch_object()){
                    $data[]=array(
                        "cat_id" 	 =>$reg->cat_id,
                        "cat_nombre" =>$reg->cat_nombre,
                    );
                }
                echo json_encode($data);
        break;

        case 'listarTendencia':
            $rspta=$categorias->ListarTendencia();
            $data=Array();
            while ($reg=$rspta->fetch_object()){
                $data[]=array(
                    "id" 	 =>$reg->pro_id,
                    "nombre" =>$reg->pro_nombre,
                    "imagen" =>$reg->pro_imagen,
                );
            }
            echo json_encode($data);
        break;

        case 'ImgTendencia':
            $rspta=$categorias->ImgTendencia();
            $data=Array();
            while ($reg=$rspta->fetch_object()){
                $data[]=array(
                    "tendencia" =>$reg->cat_imagen,
                );
            }
            echo json_encode($data);
        break;
        
    }