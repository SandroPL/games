<h2>dfsfsd</h2>
<div style="padding-bottom: 30%">

<table>
	<tr>
		<td>Nombre</td>
	</tr>
	<?php foreach ($trofeo as $trofeos):?>
	<tr>
		<td><?php echo $trofeos['trophies']['nombre']?></td>
		<td><?php echo '<img src=../webroot/img/Trophy/'.$trofeos['trophies']['id'].' height="50" width="50">'; ?></td>
		<td><?php echo $this->Html->link('Editar', array('controller'=>'Trophies','action'=>'edit',$trofeos['trophies']['id']));?></td>
		<td><?php echo $this->Form->postLink('Eliminar', array('action'=>'delete', $trofeos['trophies']['id']), array('confirm'=> 'Esta seguro de eliminar el logro  '.$trofeos['trophies']['nombre'].'?')); ?></td>

	</tr>
	<?php endforeach;?>

</table>

</div>
