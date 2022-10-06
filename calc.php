<?php
    $tPnum = (float)$_GET['txtPnum'];
    $tSnum = (float)$_GET['txtSnum'];
  
    $resultado = fmod($tPnum , $tSnum);
    
    echo "o total é : " , + $resultado;
    
        
    
    
        

?>
