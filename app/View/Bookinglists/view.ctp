<div class="bookinglists view">
<h2><?php echo __('Bookinglist'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bookinglist['Bookinglist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bookinglist['Book']['name'], array('controller' => 'books', 'action' => 'view', $bookinglist['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bookinglist['User']['id'], array('controller' => 'users', 'action' => 'view', $bookinglist['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Booking Start Time'); ?></dt>
		<dd>
			<?php echo h($bookinglist['Bookinglist']['booking_start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Booking Expire Time'); ?></dt>
		<dd>
			<?php echo h($bookinglist['Bookinglist']['booking_expire_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Time'); ?></dt>
		<dd>
			<?php echo h($bookinglist['Bookinglist']['created_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Time'); ?></dt>
		<dd>
			<?php echo h($bookinglist['Bookinglist']['modified_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bookinglist'), array('action' => 'edit', $bookinglist['Bookinglist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bookinglist'), array('action' => 'delete', $bookinglist['Bookinglist']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bookinglist['Bookinglist']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookinglists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bookinglist'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
