<div class="borrowinglists view">
<h2><?php echo __('Borrowinglist'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($borrowinglist['Borrowinglist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($borrowinglist['Book']['name'], array('controller' => 'books', 'action' => 'view', $borrowinglist['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($borrowinglist['User']['id'], array('controller' => 'users', 'action' => 'view', $borrowinglist['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Borrowed Time'); ?></dt>
		<dd>
			<?php echo h($borrowinglist['Borrowinglist']['borrowed_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Return Time'); ?></dt>
		<dd>
			<?php echo h($borrowinglist['Borrowinglist']['return_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Time'); ?></dt>
		<dd>
			<?php echo h($borrowinglist['Borrowinglist']['created_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Time'); ?></dt>
		<dd>
			<?php echo h($borrowinglist['Borrowinglist']['modified_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Borrowinglist'), array('action' => 'edit', $borrowinglist['Borrowinglist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Borrowinglist'), array('action' => 'delete', $borrowinglist['Borrowinglist']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $borrowinglist['Borrowinglist']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Borrowinglists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrowinglist'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
