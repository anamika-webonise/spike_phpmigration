<div class="schemaMigrations view">
<h2><?php  echo __('Schema Migration');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($schemaMigration['SchemaMigration']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class'); ?></dt>
		<dd>
			<?php echo h($schemaMigration['SchemaMigration']['class']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($schemaMigration['SchemaMigration']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($schemaMigration['SchemaMigration']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Schema Migration'), array('action' => 'edit', $schemaMigration['SchemaMigration']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Schema Migration'), array('action' => 'delete', $schemaMigration['SchemaMigration']['id']), null, __('Are you sure you want to delete # %s?', $schemaMigration['SchemaMigration']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schema Migrations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schema Migration'), array('action' => 'add')); ?> </li>
	</ul>
</div>
