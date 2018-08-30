<?php
class Usuarios extends Model{
    public function VerificarLogin($usuario, $senha){
        $sql = $this -> db -> prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha");
        $sql -> bindValue(":usuario", $usuario);
        $sql -> bindValue(":senha", $senha);
        $sql -> execute();
        
        if($sql->rowCount() > 0){
            $user = $sql -> fetch();
            
            $_SESSION['id'] = $user['id'];
            return $user;
        }else{return false;}
        
    }
}