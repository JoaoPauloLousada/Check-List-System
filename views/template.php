<!DOCTYPE html>
<html lang="pt">
<head>
    <!--META TAGS-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--FIM META TAGS-->
    <!--CSS-->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>assets/css/style.css">
    <!--FIM CSS-->
    <!--jQuery-->
    <script type="text/javascript" src="<?php echo BASE_URL?>assets/js/jquery-3.1.1.min.js"></script>
    <title>Título do Site</title>
</head>
<body> 
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    
    <!--SCRIPTS-->
    
    <script type="text/javascript" src="<?php echo BASE_URL?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL?>assets/js/script.js"></script>
    <!--FIM SCRIPTS-->
</body>
</html>