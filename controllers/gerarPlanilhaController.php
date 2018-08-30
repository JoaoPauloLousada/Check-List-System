<?php
class gerarPlanilhaController extends Controller{
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relatório</title>
</head>
<body>
    <?php
        $arquivo = "relatorio.xls";
    
        $html = '';
        $html .= '<table border="1">';
        $html .= '<tr>';
        $html .= '<td colspan="10"> Relatório</td>';
        $html .= '</tr>';
    
        $html .= '<tr>';
        $html .= '<td><b>Identification</b></td>';
        $html .= '<td><b>Edge Dented</b></td>';
        $html .= '<td><b>Friction Marks</b></td>';
        $html .= '<td><b>Wetted</b></td>';
        $html .= '<td><b>Rusted</b></td>';
        $html .= '<td><b>Oval Shaped</b></td>';
        $html .= '<td><b>Telescope Effect</b></td>';
        $html .= '<td><b>Oil Stained</b></td>';
        $html .= '<td><b>Hold nr</b></td>';
        $html .= '<td><b>Remark</b></td>';
        $html .= '</tr>';
        
        for($i=0; $i < count($dados); $i++ ){
            $html .= '<tr>';
            $html .= '<td>'.$dados["$i"]['letra'].$dados["$i"]['numero'].'</td>';
            $html .= '<td>'.$dados["$i"]['edge_dented'].'</td>';
            $html .= '<td>'.$dados["$i"]['friction_marks'].'</td>';
            $html .= '<td>'.$dados["$i"]['wetted'].'</td>';
            $html .= '<td>'.$dados["$i"]['rusted'].'</td>';
            $html .= '<td>'.$dados["$i"]['oval_shaped'].'</td>';
            $html .= '<td>'.$dados["$i"]['telescope_effect'].'</td>';
            $html .= '<td>'.$dados["$i"]['oil_stained'].'</td>';
            $html .= '<td>'.$dados["$i"]['hold_nr'].'</td>';
            $html .= '<td>'.utf8_encode($dados["$i"]['remark']).'</td>';
            $html .= '</tr>';
        }
    
        
    
    // Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
    // Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
    ?>
</body>
</html>