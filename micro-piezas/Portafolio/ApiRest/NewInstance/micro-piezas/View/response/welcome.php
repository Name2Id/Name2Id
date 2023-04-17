<div class="container">
    <?php
        require_once "../../../Classes/Conexion/Conexion.php";
        $conexion = new Conexion;
        $query = "SELECT * FROM kftable_topics";
        echo "<pre style='padding-left:50px;font-size:12px;color:#000;background-color:transparent;'>";
        print_r($conexion->getData($query));
        echo "</pre>";
    ?>
</div>