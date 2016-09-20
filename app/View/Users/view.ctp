<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($user['User']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($user['User']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('Username'); ?></dt>
        <dd>
            <?php echo h($user['User']['username']); ?>
            &nbsp;
        </dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Time'); ?></dt>
		<dd>
			<?php echo h($user['User']['created_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Time'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookinglists'), array('controller' => 'bookinglists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bookinglist'), array('controller' => 'bookinglists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Borrowinglists'), array('controller' => 'borrowinglists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrowinglist'), array('controller' => 'borrowinglists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bookinglists'); ?></h3>
	<?php if (!empty($user['Bookinglist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Booking Start Time'); ?></th>
		<th><?php echo __('Booking Expire Time'); ?></th>
		<th><?php echo __('Created Time'); ?></th>
		<th><?php echo __('Modified Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Bookinglist'] as $bookinglist): ?>
		<tr>
			<td><?php echo $bookinglist['id']; ?></td>
			<td><?php echo $bookinglist['book_id']; ?></td>
			<td><?php echo $bookinglist['user_id']; ?></td>
			<td><?php echo $bookinglist['booking_start_time']; ?></td>
			<td><?php echo $bookinglist['booking_expire_time']; ?></td>
			<td><?php echo $bookinglist['created_time']; ?></td>
			<td><?php echo $bookinglist['modified_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bookinglists', 'action' => 'view', $bookinglist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bookinglists', 'action' => 'edit', $bookinglist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bookinglists', 'action' => 'delete', $bookinglist['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bookinglist['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bookinglist'), array('controller' => 'bookinglists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Borrowinglists'); ?></h3>
	<?php if (!empty($user['Borrowinglist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Borrowed Time'); ?></th>
		<th><?php echo __('Return Time'); ?></th>
		<th><?php echo __('Created Time'); ?></th>
		<th><?php echo __('Modified Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Borrowinglist'] as $borrowinglist): ?>
		<tr>
			<td><?php echo $borrowinglist['id']; ?></td>
			<td><?php echo $borrowinglist['book_id']; ?></td>
			<td><?php echo $borrowinglist['user_id']; ?></td>
			<td><?php echo $borrowinglist['borrowed_time']; ?></td>
			<td><?php echo $borrowinglist['return_time']; ?></td>
			<td><?php echo $borrowinglist['created_time']; ?></td>
			<td><?php echo $borrowinglist['modified_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'borrowinglists', 'action' => 'view', $borrowinglist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'borrowinglists', 'action' => 'edit', $borrowinglist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'borrowinglists', 'action' => 'delete', $borrowinglist['id']), array('confirm' => __('Are you sure you want to delete # %s?', $borrowinglist['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Borrowinglist'), array('controller' => 'borrowinglists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
