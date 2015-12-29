<title>Profile | Oxus</title>
<div class="container4">
    <h1>Mi Perfil</h1>
    <div class="infpro">
        <p><?php echo $user[0]["User"]["username"]; ?><br><?php echo $user[0]["User"]["nom"]." ".$user[0]["User"]["ap"]; ?></p>
        <p>Mayor Puntaje<br><?php echo number_format($user[0]["Record"][0]["puntaje"], 0, '', '.')." puntos - ".$user[0]["Record"][0]["Dificult"]["nombre"]; ?></p>
        <p>Dificultad Preferida<br>
            <?php 
                while ($n = current($diff)) {
                    if ($n == max($diff)) 
                        echo key($diff);
                    next($diff);
                } 
            ?>
        </p>
        <p>Coins: <?php echo $user[0]["User"]["coin"]; ?><br>Points: <?php echo $user[0]["User"]["point"]; ?></p>
    </div>
    <p>Logros Obtenidos</p>
    <ul class="ilust">
        <?php 
            $vali = 0;
            foreach($trophies as $btrophy): 
                foreach($user[0]["UserTrophy"] as $trophy): 
                    $vali = 1;
                    if($btrophy["trophies"]["nombre"]==$trophy["Trophy"]["nombre"]):
        ?>
            <li>
                <img src="/img/greencirc.png">
                <span><?php echo $trophy["Trophy"]["nombre"]; ?></span>
            </li>
        <?php 
                    else:
        ?>
            <li>
                <img src="/img/blackcirc.png">
                <span><?php echo $btrophy["trophies"]["nombre"]; ?></span>
            </li>
        <?php 
                    endif;
                endforeach;
            endforeach; 
            if($vali==0)
                foreach($trophies as $btrophy):
        ?> 
            <li>
                <img src="/img/blackcirc.png">
                <span><?php echo $btrophy["trophies"]["nombre"]; ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
    

    <p>Habilidades</p>
    <ul class="ilusthab">
    <?php foreach($user[0]["UserAbility"] as $ability): ?>
        <li>
            <img src="/img/hab.png">
            <span><?php echo $ability["Ability"]["nombre"]; ?></span>
        </li>
    <?php endforeach;  ?>
    </ul>
</div>