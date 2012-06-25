<div class="schemaMigrations form">
<?php echo $this->Form->create('SchemaMigration');?>
	<fieldset>
		<legend><?php echo __('Add Schema Migration'); ?></legend>
	<?php
		echo $this->Form->input('class');
		echo $this->Form->input('type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Schema Migrations'), array('action' => 'index'));?></li>
	</ul>
</div>
