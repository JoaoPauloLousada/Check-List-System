<?php
class Bobinas extends Model{
    private
        $id_relatorio,
        $letra,
        $numero,
        $edge_dented,
        $friction_marks,
        $wetted,
        $rusted,
        $oval_shaped,
        $telescope_effect,
        $oil_stained,
        $hold_nr,
        $remark;
    
    /*
        Função que insere os dados da bobina no BD
        - Os valores de 'id', 'id_relatorio', 'data' e 'letra' não vêm da PAGE checklist.
        - a variável 'letra' vêm dos dados do Relatório
    */
    public function inserirBobina($id_r,$l, $n, $e, $f, $w, $r, $o, $t, $oi, $h, $re){
        $sql = "INSERT INTO `info_bobinas` (`id_relatorio`, `data`, `letra`, `numero`, `edge_dented`, `friction_marks`, `wetted`, `rusted`, `oval_shaped`, `telescope_effect`, `oil_stained`, `hold_nr`, `remark`) VALUES ('$id_r', NOW(), '$l', '$n', '$e', '$f', '$w', '$r', '$o', '$t', '$oi','$h','$re') ";

        
        $this->db->query($sql);
       
        return "ok";
    }
    
    /*
        função que pega as informações das bobinas de determinado relatório, recebendo como parâmetro o 'id_relatorio'
    */
    public function GetInfoBobinas($id_relatorio){
        $sql = "SElECT * FROM `info_bobinas` WHERE `id_relatorio` = '$id_relatorio'";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $info = $sql -> fetchAll();
            return $info;
        }else{ return false;}
        
        
    }
}