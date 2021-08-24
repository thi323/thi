<?php
define('HOST', 'sql101.epizy.com');
define('USUARIO', 'epiz_28310716');
define('SENHA', 'FRQTqdTa9ZQuRq');
define('DB', 'epiz_28310716_thiago');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');