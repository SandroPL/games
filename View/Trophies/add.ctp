 <h2>oijpoijhṕkoj</h2>
<div style="padding-bottom: 34%">
 <?php 
 	echo $this->Form->create('Trophy',array('type'=>'file'));
 	echo $this->Form->input('nombre');
 	echo $this->Form->input('descript');
 	echo $this->Form->input('archivo',array('type'=>'file'));
 	echo $this->Form->end('Crear logro');
 ?>
 </div>


