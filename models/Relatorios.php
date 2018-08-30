<?php
class Relatorios extends Model{
    
        
    public function CriarNovoRelatorio(){
        $sql = "INSERT INTO `relatorios`(`data`) VALUES (NOW())";
        $this->db->query($sql);
        //$id = $this->db->lastInsertId();    
    }
    
    
    /*retorna o ultimo id inserido na tabela */
    public function idRelatorio(){
        $sql= "SELECT max(id) FROM relatorios";
        $sql = $this->db->query($sql);
        $id = $sql->fetch();
        $id = intval($id[0]);
        return $id;
    }
    
    /*busca os ultimos dez relatorios*/
    public function Ultimos(){
        $sql = "SELECT * FROM relatorios ORDER by id DESC LIMIT 30";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0){
            $info = $sql->fetchAll();
        }else{$info = 0;}
        
        return $info;
    }
}