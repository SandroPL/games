<title>Game | Oxus</title>
<script type="text/javascript">
    $(document).ready(function(){
        $('.conthab').submit(function() {
            var caca = <?php echo json_encode($current_user); ?>;
            var asd = $(this).serializeArray();
            var Record = {user_id:caca["id"]};
            var c=0;
            for(var i in asd){
                if(asd[i]["value"]){
                    c++;
                    if(c==2)
                        Record["ability1"]=asd[i]["value"];
                    else
                        if(c==3)
                            Record["ability2"]=asd[i]["value"];
                        else
                            if(c==4)
                                Record["ability3"]=asd[i]["value"];    
                }
            }
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: {Record},
                success: function(data) {
                    console.log(data);
                    $('.selecthab1').css("display", "none");
                    $('.selecthab2').css("display", "none");
                    $('.selecthab3').css("display", "none");
                    $('.dific').fadeIn();
                }
            });        
            return false;   
        }); 
        $("#beasy").click(function(){
            var caca = <?php echo json_encode($current_user); ?>;
            var Record = {dificult_id:$(this).val(),user_id:caca["id"]}
            $.ajax({
                type: 'POST',
                url: "/records/dif",
                data: {Record},
                success: function(data) {
                    console.log(data);
                }
            }); 
        });
        $("#bmedium").click(function(){
           var Record = {dificult_id:$(this).val()} 
            $.ajax({
                type: 'POST',
                url: "/records/dif",
                data: {Record},
                success: function(data) {
                    console.log(data);
                }
            }); 
        });
        $("#bhard").click(function(){
            var Record = {dificult_id:$(this).val()} 
            $.ajax({
                type: 'POST',
                url: "/records/dif",
                data: {Record},
                success: function(data) {
                    console.log(data);
                }
            }); 
        });
        $("#bveryhard").click(function(){
            var Record = {dificult_id:$(this).val()}
            $.ajax({
                type: 'POST',
                url: "/records/dif",
                data: {Record},
                success: function(data) {
                    console.log(data);
                }
            }); 
        });
    });
</script>
<div class="containerb">
    <button class="gamestart">START</button>
    <div class="selecthab1">
        <div class="selectnav">
            <ul>
                <li class="activesanta">Santa</li>
                <li class="activerudolf">Rudolf</li>
                <li class="activegnome">Gnome</li>
            </ul>
        </div>
        <?php echo $this->Form->create("Record",array("action"=>"register","class"=>"conthab")); ?>
            <div class="radio">
            <h2>Habilidad 1</h2>
                <?php
                    foreach($ab as $abs):
                        if($abs["Ability"]["id"]=="h1l1" || $abs["Ability"]["id"]=="h1l2" || $abs["Ability"]["id"]=="h1l3")
                        echo $this->Form->radio("ability1",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false,));
                    endforeach;
                ?>
            </div>
            <hr>
            <div class="radio">
                <h2>Habilidad 2</h2>
                <?php 
                    foreach($ab as $abs):
                    if($abs["Ability"]["id"]=="h2l1" || $abs["Ability"]["id"]=="h2l2" || $abs["Ability"]["id"]=="h2l3")
                        echo $this->Form->radio("ability2",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false,));
                    endforeach;
                ?>
            </div>
            <hr>
            <div class="radio">
                <h2>Habilidad 3</h2>
                <?php 
                    foreach($ab as $abs):
                        if($abs["Ability"]["id"]=="h3l1" || $abs["Ability"]["id"]=="h3l2" || $abs["Ability"]["id"]=="h3l3")
                        echo $this->Form->radio("ability3",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false,));
                    endforeach; ?>
            </div>
                <?php echo $this->Form->submit("A dificultades",array("class"=>"dificpass"));?>
                <?php echo $this->Form->end(); ?>
            <img src="/img/flecha2.jpg">
    </div>
    
    <div class="selecthab2">
        <div class="selectnav">
            <ul>
                <li class="activesanta">Santa</li>
                <li class="activerudolf">Rudolf</li>
                <li class="activegnome">Gnome</li>
            </ul>
        </div>
        <?php echo $this->Form->create("Record",array("action"=>"register","class"=>"conthab")); ?>
            <div class="radio">
            <h2>Habilidad 1</h2>
                <?php
                    foreach($ab as $abs):
                        if($abs["Ability"]["id"]=="h4l1" || $abs["Ability"]["id"]=="h4l2" || $abs["Ability"]["id"]=="h4l3")
                        echo $this->Form->radio("ability1",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false));
                    endforeach;
                ?>
            </div>
            <hr>
            <div class="radio">
                <h2>Habilidad 2</h2>
                <?php 
                    foreach($ab as $abs):
                    if($abs["Ability"]["id"]=="h5l1" || $abs["Ability"]["id"]=="h5l2" || $abs["Ability"]["id"]=="h5l3")
                        echo $this->Form->radio("ability2",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false));
                    endforeach;
                ?>
            </div>
            <hr>
            <div class="radio">
                <h2>Habilidad 3</h2>
                <?php 
                    foreach($ab as $abs):
                        if($abs["Ability"]["id"]=="h6l1" || $abs["Ability"]["id"]=="h6l2" || $abs["Ability"]["id"]=="h6l3")
                        echo $this->Form->radio("ability3",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false,));
                    endforeach; ?>
            </div>
                <?php echo $this->Form->submit("A dificultades",array("class"=>"dificpass"));?>
                <?php echo $this->Form->end(); ?>
                <img src="/img/flecha2.jpg">
    </div>

    <div class="selecthab3">
        <div class="selectnav">
            <ul>
                <li class="activesanta">Santa</li>
                <li class="activerudolf">Rudolf</li>
                <li class="activegnome">Gnome</li>
            </ul>
        </div>
        <?php echo $this->Form->create("Record",array("action"=>"register","class"=>"conthab")); ?>
            <div class="radio">
            <h2>Habilidad 1</h2>
                <?php
                    foreach($ab as $abs):
                        if($abs["Ability"]["id"]=="h7l1" || $abs["Ability"]["id"]=="h7l2" || $abs["Ability"]["id"]=="h7l3")
                        echo $this->Form->radio("ability1",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false));
                    endforeach;
                ?>
            </div>
            <hr>
            <div class="radio">
                <h2>Habilidad 2</h2>
                <?php 
                    foreach($ab as $abs):
                    if($abs["Ability"]["id"]=="h8l1" || $abs["Ability"]["id"]=="h8l2" || $abs["Ability"]["id"]=="h8l3")
                        echo $this->Form->radio("ability2",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false));
                    endforeach;
                ?>
            </div>
            <hr>
            <div class="radio">
                <h2>Habilidad 3</h2>
                <?php 
                    foreach($ab as $abs):
                        if($abs["Ability"]["id"]=="h9l1" || $abs["Ability"]["id"]=="h9l2" || $abs["Ability"]["id"]=="h9l3")
                        echo $this->Form->radio("ability3",array($abs["Ability"]["id"]=>$abs["Ability"]["nombre"]),array("required"=>false));
                    endforeach; ?>
            </div>
                <?php echo $this->Form->submit("A dificultades",array("class"=>"dificpass"));?>
                <?php echo $this->Form->end(); ?>
                <img src="/img/flecha2.jpg">
    </div>

    <div class="dific">
        <button class="dificulty" id="beasy" value="1">Easy</button>
        <button class="dificulty" id="bmedium" value="2">Medium</button>
        <button class="dificulty" id="bhard" value="3">Hard</button>
        <button class="dificulty" id="bveryhard" value="4">Very Hard</button>
    </div>
</div>
<div class="container">
        <ul class="bar">
            <li><h1><?php $abc[0]["dificults"]["nombre"] ?></h1></li>
            <li>
                <div class="ptj">
                    <img src="/img/part3.png" class="part3">
                    <ul class="regist">
                        <li>
                            <img src="/img/circ.png">
                            <img src="/img/circ.png">
                            <img src="/img/circ.png">
                        </li>
                    </ul>
                    <div class="pts">
                        0 pts
                    </div>
                    <img src="/img/part4.png" class="part4">
                </div>
            </li>
            <li><p><?php $abc[0]["dificults"]["time"] ?></p><br>tiempo restante</li>
        </ul>
        <ul class="game" id="easy">
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
        </ul>
        <ul class="game" id="medium">
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
        </ul>
        <ul class="game" id="hard">
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
        </ul>
        <ul class="game" id="veryhard">
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
            <li>
                <div class="front">
                </div>
                <div class="back">
                </div>
            </li>
        </ul>
</div> 