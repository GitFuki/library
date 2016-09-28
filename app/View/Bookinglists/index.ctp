<div class="bookinglists index">
	<h2><?php echo __('予約リスト'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('book_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('booking_start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('booking_expire_time'); ?></th>
            <?php if ($user['Group']['name'] == 'administrators'): ?>
			<th><?php echo $this->Paginator->sort('created_time'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
            <?php endif; ?>
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
        <?php if ($user['Group']['name'] == 'administrators'): ?>
		<td><?php echo h($bookinglist['Bookinglist']['created_time']); ?>&nbsp;</td>
		<td><?php echo h($bookinglist['Bookinglist']['modified_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bookinglist['Bookinglist']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bookinglist['Bookinglist']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bookinglist['Bookinglist']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bookinglist['Bookinglist']['id']))); ?>
		</td>
        <?php endif; ?>
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
    <h3><?php echo __('メニュー'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('本を探す'), array('controller' => 'books', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('著者一覧'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('貸出中リスト'), array('controller' => 'borrowinglists', 'action' => 'index')); ?> </li>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
            <li><?php echo $this->Html->link(__('出版社一覧'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('図書種別一覧'), array('controller' => 'fields', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('ユーザー一覧'), array('controller' => 'users', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('権限グループ一覧'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
            <hr style="clear:both; margin:20px 0 20px 0">
            <li><?php echo $this->Html->link(__('予約を追加する'), array('controller' => 'bookinglists', 'action' => 'add')); ?> </li>
        <?php endif; ?>
    </ul>
</div>