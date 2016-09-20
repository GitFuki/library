<div class="borrowinglists form">
<?php echo $this->Form->create('Borrowinglist'); ?>
	<fieldset>
		<legend><?php echo __('Edit Borrowinglist'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('book_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('borrowed_time');
		echo $this->Form->input('return_time');
		echo $this->Form->input('created_time');
		echo $this->Form->input('modified_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Borrowinglist.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Borrowinglist.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Borrowinglists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
