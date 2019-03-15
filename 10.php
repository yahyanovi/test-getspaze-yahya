<?php 
  declare(strict_types=1);
  error_reporting(-1);
  ini_set('display_errors', 'true');

  $title = 'Rotate Text 10 degrees';

?><!DOCTYPE HTML>
<html lang="en">
<head>
<title> <?= $title ?> </title>
<style type="text/css">
    b,
    .rot10 {
        -ms-transform: rotate(10deg); /* IE 9 */
      -webkit-transform: rotate(10deg); /* Chrome, Safari, Opera */
      transform: rotate(10deg);
    }  
 
    .svgBox {
        margin: 2em auto;
        border:dotted 4px red;
        font-size:42px;
    }
</style>
</head>
<body>
    <h1> <?= $title ?>
    <hr>
    
    <?php
      # SVG TEXT
            $no = '54321';
            $xx = '';
            $xPos = 1;
            $yPos = 30;
            for($i2=0; $i2<5; $i2++):
                # echo '<b>' .$no[$i2] .', </b>';
                $xPos += 30; 
                $yPos -= 5; 
                $tmp   = '<text 
                                        x="' .$xPos .'" 
                                        y="' .$yPos .'" 
                                        class="rot10">' .$no[$i2] .'</text>';
                $xx   .= $tmp;
            endfor;
          # echo '<br>'. htmlspecialchars($xx);
    
        echo '<svg class="svgBox" width="6em" height="1em">';
          echo $xx;
        echo '</svg>';
        
    ?>    

   

</body>
</html>