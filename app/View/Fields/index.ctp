<div class="fields index">
	<h2><?php echo __('図書種別一覧'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name','種別'); ?></th>
            <?php if ($user['Group']['name'] == 'administrators'): ?>
			<th><?php echo $this->Paginator->sort('created_time','作成日時'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_time','更新日時'); ?></th>
			<th class="actions"><?php echo __('権限操作'); ?></th>
        <?php endif; ?>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($fields as $field): ?>
	<tr>
		<td><?php echo h($field['Field']['id']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['name']); ?>&nbsp;</td>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
		<td><?php echo h($field['Field']['created_time']); ?>&nbsp;</td>
		<td><?php echo h($field['Field']['modified_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('詳細'), array('action' => 'view', $field['Field']['id'])); ?>
			<?php echo $this->Html->link(__('修正'), array('action' => 'edit', $field['Field']['id'])); ?>
			<?php echo $this->Form->postLink(__('削除'), array('action' => 'delete', $field['Field']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $field['Field']['id']))); ?>
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
        <li><?php echo $this->Html->link(__('予約リスト'), array('controller' => 'bookinglists', 'action' => 'index')); ?> </li>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
            <li><?php echo $this->Html->link(__('出版社一覧'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('ユーザー一覧'), array('controller' => 'users', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('権限グループ一覧'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
            <hr style="clear:both; margin:20px 0 20px 0">
            <li><?php echo $this->Html->link(__('図書種別一覧に追加する'), array('controller' => 'fields', 'action' => 'add')); ?> </li>
        <?php endif; ?>
    </ul>
</div>
