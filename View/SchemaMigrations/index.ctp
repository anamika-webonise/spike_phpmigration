<div class="schemaMigrations index">
	<h2><?php echo __('Schema Migrations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('class');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($schemaMigrations as $schemaMigration): ?>
	<tr>
		<td><?php echo h($schemaMigration['SchemaMigration']['id']); ?>&nbsp;</td>
		<td><?php echo h($schemaMigration['SchemaMigration']['class']); ?>&nbsp;</td>
		<td><?php echo h($schemaMigration['SchemaMigration']['type']); ?>&nbsp;</td>
		<td><?php echo h($schemaMigration['SchemaMigration']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $schemaMigration['SchemaMigration']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $schemaMigration['SchemaMigration']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $schemaMigration['SchemaMigration']['id']), null, __('Are you sure you want to delete # %s?', $schemaMigration['SchemaMigration']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Schema Migration'), array('action' => 'add')); ?></li>
	</ul>
</div>
