<?php
    $i=1;
    foreach($record as $records): 
?>
<li>
    <img src="/img/greencirc.png">
    <p class="linea"><?php echo $records["User"]["username"]; ?></p>
    <p class="linea2"><?php echo $records["Dificult"]["nombre"]; ?></p>
    <p class="pun"><?php echo number_format($records["Record"]["puntaje"], 0, '', '.')." puntos"; ?></p>
    <div class="showtr" id="show<?php echo $i; ?>">Mostrar Logros</div>
    <div class="trophys" id="troph<?php echo $i; ?>">
        <img src="/img/triangulo.png">
        <img src="/img/barra.png">
        <img src="/img/sobrepos.png" class="sobreps">
        <p class="tlt">Habilidades</p>
        <p class="tlt">Logros</p>
        <ul>
            <li class="list">
                <img src="/img/showhab.png">
                <span><?php echo $ab1[0]["abilities"]["nombre"]; ?></span>
            </li>
            <li class="list">
                <img src="/img/showhab.png">
                <span><?php echo $ab2[0]["abilities"]["nombre"]; ?></span>
            </li>
            <li class="list">
                <img src="/img/showhab.png">
                <span><?php echo $ab3[0]["abilities"]["nombre"]; ?></span>
            </li>
        </ul>
        <ul>
        <?php foreach($records["UserTrophy"] as $tro): ?>
            <li class="list">
                <img src="/img/showcirc.png">
                <span><?php echo $tro["Trophy"]["nombre"] ?></span>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
</li>
<?php 
    $i++;
    endforeach; 
?>