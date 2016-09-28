<div class="borrowinglists index">
	<h2><?php echo __('貸出中リスト'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('book_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('borrowed_time'); ?></th>
			<th><?php echo $this->Paginator->sort('return_time'); ?></th>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
            <th><?php echo $this->Paginator->sort('created_time'); ?></th>
            <th><?php echo $this->Paginator->sort('modified_time'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        <?php endif; ?>
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
        <?php if ($user['Group']['name'] == 'administrators'): ?>
		<td><?php echo h($borrowinglist['Borrowinglist']['created_time']); ?>&nbsp;</td>
		<td><?php echo h($borrowinglist['Borrowinglist']['modified_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $borrowinglist['Borrowinglist']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $borrowinglist['Borrowinglist']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $borrowinglist['Borrowinglist']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $borrowinglist['Borrowinglist']['id']))); ?>
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
        <li><?php echo $this->Html->link(__('予約リスト'), array('controller' => 'bookinglists', 'action' => 'index')); ?> </li>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
            <li><?php echo $this->Html->link(__('出版社一覧'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('図書種別一覧'), array('controller' => 'fields', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('ユーザー一覧'), array('controller' => 'users', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('権限グループ一覧'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
            <hr style="clear:both; margin:20px 0 20px 0">
            <li><?php echo $this->Html->link(__('貸出中リストに追加する'), array('controller' => 'borrowinglists', 'action' => 'add')); ?> </li>
        <?php endif; ?>
    </ul>
</div>
