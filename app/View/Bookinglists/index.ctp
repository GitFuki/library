<div class="bookinglists index">
	<h2><?php echo __('予約一覧'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('book_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('booking_start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('booking_expire_time'); ?></th>
			<th><?php echo $this->Paginator->sort('created_time'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($bookinglists as $bookinglist): ?>
	<tr>
		<td><?php echo h($bookinglist['Bookinglist']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bookinglist['Book']['name'], array('controller' => 'books', 'action' => 'view', $bookinglist['Book']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bookinglist['User']['id'], array('controller' => 'users', 'action' => 'view', $bookinglist['User']['id'])); ?>
		</td>
		<td><?php echo h($bookinglist['Bookinglist']['booking_start_time']); ?>&nbsp;</td>
		<td><?php echo h($bookinglist['Bookinglist']['booking_expire_time']); ?>&nbsp;</td>
		<td><?php echo h($bookinglist['Bookinglist']['created_time']); ?>&nbsp;</td>
		<td><?php echo h($bookinglist['Bookinglist']['modified_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bookinglist['Bookinglist']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bookinglist['Bookinglist']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bookinglist['Bookinglist']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bookinglist['Bookinglist']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Bookinglist'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
