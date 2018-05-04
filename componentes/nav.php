

<nav>
    <ul>
    
        <?php 
        foreach($secciones as $llave => $valor){
            $activo='';
            $destino="?seccion=$llave";

            if(!isset($_GET['seccion'])and $llave ==='p1'){
                $activo='class="activo';
            }
            if(isset($_GET['seccion'])and$_GET['seccion']===$llave){
                $activo='class="activo"';
            }

            if($llave==='p1'){
                $destino='';
            }
            
            echo "<li>
            <a $activo href=\"./$destino\">$valor[titulo]</a>
            </li>";
        }
            ?>
    </ul>
</nav>





