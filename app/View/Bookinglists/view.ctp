<div class="bookinglists view">
<h2><?php echo __('「' . $bookinglist['Book']['name'] . '」の予約情報'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bookinglist['Bookinglist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('タイトル'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bookinglist['Book']['name'], array('controller' => 'books', 'action' => 'view', $bookinglist['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ユーザー'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bookinglist['User']['id'], array('controller' => 'users', 'action' => 'view', $bookinglist['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('予約日'); ?></dt>
		<dd>
			<?php echo h($bookinglist['Bookinglist']['booking_start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('予約期限'); ?></dt>
		<dd>
			<?php echo h($bookinglist['Bookinglist']['booking_expire_time']); ?>
			&nbsp;
		</dd>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
		<dt><?php echo __('作成日時'); ?></dt>
		<dd>
			<?php echo h($bookinglist['Bookinglist']['created_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('修正日時'); ?></dt>
		<dd>
			<?php echo h($bookinglist['Bookinglist']['modified_time']); ?>
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
