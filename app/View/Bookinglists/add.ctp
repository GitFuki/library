<div class="bookinglists form">
<?php echo $this->Form->create('Bookinglist'); ?>
	<fieldset>
		<legend><?php echo __('予約を追加する'); ?></legend>
	<?php
		echo $this->Form->input('book_id', array(
			'label'=> '本を選択'));
		echo $this->Form->input('user_id', array(
			'label'=> 'ユーザーIDを選択'));
		echo $this->Form->input('booking_start_time', array(
			'label'=> 'ご予約開始'));
		echo $this->Form->input('booking_expire_time', array(
			'label'=> 'ご返却予定日時'));
		echo $this->Form->input('created_time', array(
            'label'=> '作成日時'));
		echo $this->Form->input('modified_time', array(
            'label'=> '変更日時'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('追加する')); ?>
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
            <li><?php echo $this->Html->link(__('予約リストに戻る'), array('controller' => 'bookinglists', 'action' => 'index')); ?> </li>
        <?php endif; ?>
    </ul>
</div>