<title>Login</title>
<embed src="sound/soundback.mp3" hidden="true" loop="99" id="backmusic">
<div class="container6">
        <h1>REGISTRO</h1>
        <div class="regis">
        <?php echo $this->Form->create('User',array("action"=>"register","class"=>"outreg")); ?>
            <table>
            <tr><td>Nickname : </td><td><?php echo $this->Form->input("username",array("label"=>false)); ?></td></tr>
            <tr><td>Nombre : </td><td><?php echo $this->Form->input("nom",array("label"=>false)); ?></td></tr>
            <tr><td>Apellido : </td><td><?php echo $this->Form->input("ap",array("label"=>false)); ?></td></tr>
            <tr><td>Contrase&ntilde;a : </td><td><?php echo $this->Form->input("password",array("label"=>false)); ?></td></tr>
            <tr><td>Repetir Contrase&ntilde;a : </td><td><?php echo $this->Form->input("password2",array("type"=>"password","label"=>false)); //ver validacion de password?></td></tr>
            <tr><td>Email : </td><td><?php echo $this->Form->input("email",array("label"=>false)); ?></td></tr>
            </table>
            <?php echo $this->Form->submit("Registrarse"); ?>
        <?php echo $this->Form->End(); ?>
        </div>
</div>
<div class="container5">
    <div class="pause"><img src="img/sound.png"></div>
    <?php echo $this->Session->flash('auth'); ?>
    <div class="login">
    <h1>LOG IN</h1>
    <?php echo $this->Form->create('User',array("class"=>"log"));?>
    <table>
        
        <tr><td>Usuario: </td><td><?php echo $this->Form->input("username",array("label"=>false)); ?></td></tr>
        <tr><td>Password: </td><td><?php echo $this->Form->input("password",array("label"=>false)); ?></td></tr>        
    </table>
    <?php echo $this->Form->submit(__('Log in')); 
        echo $this->Html->link("¿Aun no estas registrado?","javascript:void(0)",array("class"=>"showreg")); ?>
    <?php echo $this->Form->End();?>
    </div>
    <div class="desc">
        <div>
            <div class="vuel">
                <div class="frontlog">
                    <img src="img/backcard.jpg">
                </div>
                <div class="backlog">
                    <img src="img/backcard.jpg">
                </div>
            </div>
            <p>Information</p>
            <div class="vuel">
                <div class="frontlog">
                    <img src="img/backcard.jpg">
                </div>
                <div class="backlog">
                    <img src="img/backcard.jpg">
                </div>

            </div>
        </div>
        <div class="descrip">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut tortor tincidunt massa fringilla ullamcorper a ut lorem. Sed dignissim convallis nunc, quis                 facilisis lectus condimentum ac. Maecenas pellentesque leo in tellus euismod aliquet. Fusce consectetur odio fringilla, scelerisque arcu vitae, blandit                       justo. Curabitur eu mollis nisi, et vehicula orci. Suspendisse potenti. Aliquam hendrerit ut nisl consequat lobortis. Pellentesque fringilla neque odio, a                   congue sapien scelerisque at. Ut est erat, fringilla sed ante in, sodales porta turpis.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut tortor               tincidunt massa fringilla ullamcorper a ut lorem. Sed dignissim convallis nunc, quis facilisis lectus condimentum ac. Maecenas pellentesque leoin tellus euismod             aliquet. Fusce consectetur odio fringilla, scelerisque arcu vitae, blandit justo. Curabitur eu mollis nisi, et vehicula orci. Suspendisse potenti. Aliquam                   hendrerit ut nisl consequat lobortis. Pellentesque fringilla neque odio, acongue sapien scelerisque at. Utest erat, fringilla sed ante in, sodales porta turpis
        </div>
    </div>
</div>
