<?php

/*
$exibir = $conteudo[0][0];
$retirar = array('mais moedas','atas Copom','mais detalhes','ORES-->','<!--');
$exibir = str_replace($retirar, '', $exibir);

*/
$dados=$_GET['dados'];
$url = file_get_contents("https://www.yt-download.org/api/widget/mp3/$dados");


//

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title></title>
</head>
<body>
    
<?php echo $url; ?>



<script>
  location.href=  document.querySelector('a').href
    
    </script>
   
</body>
</html>