<div class="bookinglists form">
<?php echo $this->Form->create('Bookinglist'); ?>
	<fieldset>
		<legend><?php echo __('予約を修正する'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('book_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('booking_start_time');
		echo $this->Form->input('booking_expire_time');
		echo $this->Form->input('created_time');
		echo $this->Form->input('modified_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
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
            <li><?php echo $this->Html->link(__('予約リストに戻る'), array('controller' => 'bookinglists', 'action' => 'index')); ?> </li>
        <?php endif; ?>
    </ul>
</div>