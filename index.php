<!--
Desenvolvido Por: mLabs
-->
<?php
$url = "http://m-l-a-b-s.com/";
$title = "Qual personagem iconico de óculos combina com você?";

$var = array(
        "1" => array(
                  "titulo" => "Harry Potter",
                  "image" => "http://gph.is/VwQcMG"
                  ),
        "2" => array(
                  "titulo" => "JOHN LENNON",
                  "image" => "http://gph.is/2c2SAqz"
                  ),
        "3" => array(
                  "titulo" => "ELTON JOHN",
                  "image" => "http://gph.is/2n22kaK"
                  ),
         "4" => array(
                  "titulo" => "Ken",
                  "image" => "http://gph.is/1qAEKwA"
                  ),
        "5" => array(
                  "titulo" => "Squirtle",
                  "image" => "http://gph.is/28L5rgu"
                  ),
        );

$section = array_rand($var);

?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="<?php echo $var[$section]['titulo']; ?>" />
<meta property="og:url" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<meta property="og:image" content="<?php echo $var[$section]['image']; ?>" />
<meta property="og:type" content="video.other">

<script>
  setTimeout(function(){
    window.location='https://www.mlabs.com.br/';
  },100);
</script>
