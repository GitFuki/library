<?php
/*echo '<pre>';
 print_r($book);
echo '</pre>'*/?>
<div class="users view">
<h2><?php echo __('ユーザー詳細情報'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('氏'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('名'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($user['User']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('誕生日'); ?></dt>
		<dd>
			<?php echo h($user['User']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('ユーザー名'); ?></dt>
        <dd>
            <?php echo h($user['User']['username']); ?>
            &nbsp;
        </dd>
		<dt><?php echo __('パスワード'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('作成日時'); ?></dt>
		<dd>
			<?php echo h($user['User']['created_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('修正日時'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified_time']); ?>
			&nbsp;
		</dd>
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
            <li><?php echo $this->Html->link(__('出版社一覧'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('図書種別一覧'), array('controller' => 'fields', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('権限グループ一覧'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
            <hr style="clear:both; margin:20px 0 20px 0">
            <li><?php echo $this->Html->link(__('ユーザーを追加する'), array('controller' => 'users', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('ユーザー一覧に戻る'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <?php endif; ?>
    </ul>
</div>
<hr style="clear:both; margin:20px 0 20px 0">
<div class="related">
	<h3><?php echo __($user['User']['username'].'さんが予約している本'); ?></h3>
	<?php if (!empty($user['Bookinglist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
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
			<li><?php echo $this->Html->link(__('予約リストを追加する'), array('controller' => 'bookinglists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __($user['User']['username'].'さんが借りている本'); ?></h3>
	<?php if (!empty($user['Borrowinglist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
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
			<li><?php echo $this->Html->link(__('貸出中リストを追加する'), array('controller' => 'borrowinglists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
