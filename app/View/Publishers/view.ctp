<div class="publishers view">
<h2><?php echo __('出版社の詳細'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($publisher['Publisher']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($publisher['Publisher']['name']); ?>
			&nbsp;
		</dd>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
        <dt><?php echo __('Created Time'); ?></dt>
        <dd>
            <?php echo h($publisher['Publisher']['created_time']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified Time'); ?></dt>
        <dd>
            <?php echo h($publisher['Publisher']['modified_time']); ?>
            &nbsp;
        </dd>
        <?php endif; ?>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('メニュー'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('本を探す'), array('controller' => 'books', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('著者一覧'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('貸出中リスト'), array('controller' => 'borrowinglists', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('予約リスト'), array('controller' => 'bookinglists', 'action' => 'index')); ?> </li>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
            <li><?php echo $this->Html->link(__('図書種別一覧'), array('controller' => 'fields', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('ユーザー一覧'), array('controller' => 'users', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('権限グループ一覧'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
            <hr style="clear:both; margin:20px 0 20px 0">
            <li><?php echo $this->Html->link(__('出版社を追加する'), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('出版社一覧に戻る'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
        <?php endif; ?>
    </ul>
</div>
<div class="related">
	<h3><?php echo __('この出版社の刊行物'); ?></h3>
	<?php if (!empty($publisher['Book'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Author Id'); ?></th>
		<th><?php echo __('Publisher Id'); ?></th>
		<th><?php echo __('Published'); ?></th>
		<th><?php echo __('Field Id'); ?></th>
		<th><?php echo __('Bestseller'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Page'); ?></th>
		<th><?php echo __('Isbn'); ?></th>
		<th><?php echo __('Summary'); ?></th>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
		<th><?php echo __('Created Time'); ?></th>
		<th><?php echo __('Modified Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
        <?php endif; ?>
	</tr>
	<?php foreach ($publisher['Book'] as $book): ?>
		<tr>
			<td><?php echo $book['id']; ?></td>
			<td><?php echo $book['name']; ?></td>
			<td><?php echo $book['author_id']; ?></td>
			<td><?php echo $book['publisher_id']; ?></td>
			<td><?php echo $book['published']; ?></td>
			<td><?php echo $book['field_id']; ?></td>
			<td><?php echo $book['bestseller']; ?></td>
			<td><?php echo $book['price']; ?></td>
			<td><?php echo $book['page']; ?></td>
			<td><?php echo $book['isbn']; ?></td>
			<td><?php echo $book['summary']; ?></td>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
			<td><?php echo $book['created_time']; ?></td>
			<td><?php echo $book['modified_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'books', 'action' => 'view', $book['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'books', 'action' => 'edit', $book['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'books', 'action' => 'delete', $book['id']), array('confirm' => __('Are you sure you want to delete # %s?', $book['id']))); ?>
			</td>
        <?php endif; ?>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
    <?php if ($user['Group']['name'] == 'administrators'): ?>
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		</ul>
	</div>
    <?php endif; ?>
</div>
