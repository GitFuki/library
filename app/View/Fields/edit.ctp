<div class="fields form">
<?php echo $this->Form->create('Field'); ?>
	<fieldset>
		<legend><?php echo __('Edit Field'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('created_time');
		echo $this->Form->input('modified_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Field.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Field.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Fields'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
