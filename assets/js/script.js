/*
    função para renderizar e esconder radio-buttons da opção 'rusted' na view bobinas.php
*/
function verificarRusted(){
    var rusted = $('#rusted');
    
    if(rusted.is(':checked')){
        $('.checklist-page #rusted-radio').css("display", "block");
        $('.checklist-page #rusted-radio input').prop('required', true);
    }else{
        $('.checklist-page #rusted-radio').css("display", "none");
        $('.checklist-page #rusted-radio input').prop("required", false);
    }
    
    
}

function confirmarEncerramento(){
    $('#confirmar-encerramento').css("display", "block");
}
function naoConfirmarEncerramento(){
    $('#confirmar-encerramento').css("display", "none");
}


function abrirOpcoes(){
    $('#opcoes-relatorios').css("display", "block");
}