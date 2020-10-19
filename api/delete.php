<?php


require('../config.php');


$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'delete'){


    parse_str(file_get_contents('php://input'), $input);

    // $id = (!empty($input['id'])) ? $input['id'] : null;  || PHP 5

    $id = filter_var($input['id'] ?? null); // PHP 7.4
    

    if($id){


        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){

            $sql = $pdo->prepare("DELETE FROM notes WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            $array['result'] = [
                'delete' => 'true'
            ];

        }else{
            $array['error'] = "ID Inexistente";
        }


    }else{
        $array['error'] = "ID não enviado";
    }


}else{
    $array['error'] = "Método não permitido (apenas DELETE)";
}

require('../return.php');