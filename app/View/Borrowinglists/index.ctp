<div class="borrowinglists index">
	<h2><?php echo __('Borrowinglists'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('book_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('borrowed_time'); ?></th>
			<th><?php echo $this->Paginator->sort('return_time'); ?></th>
			<th><?php echo $this->Paginator->sort('created_time'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($borrowinglists as $borrowinglist): ?>
	<tr>
		<td><?php echo h($borrowinglist['Borrowinglist']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($borrowinglist['Book']['name'], array('controller' => 'books', 'action' => 'view', $borrowinglist['Book']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($borrowinglist['User']['id'], array('controller' => 'users', 'action' => 'view', $borrowinglist['User']['id'])); ?>
		</td>
		<td><?php echo h($borrowinglist['Borrowinglist']['borrowed_time']); ?>&nbsp;</td>
		<td><?php echo h($borrowinglist['Borrowinglist']['return_time']); ?>&nbsp;</td>
		<td><?php echo h($borrowinglist['Borrowinglist']['created_time']); ?>&nbsp;</td>
		<td><?php echo h($borrowinglist['Borrowinglist']['modified_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $borrowinglist['Borrowinglist']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $borrowinglist['Borrowinglist']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $borrowinglist['Borrowinglist']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $borrowinglist['Borrowinglist']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Borrowinglist'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
