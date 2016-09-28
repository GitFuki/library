<div class="bookinglists form">
<?php echo $this->Form->create('Bookinglist'); ?>
	<fieldset>
		<legend><?php echo __('ご予約フォーム'); ?></legend>
	<?php
		echo $this->Form->input('book_id', array(
			'label'=> '本を選択'));
		echo $this->Form->input('user_id', array(
			'label'=> 'ユーザーIDを選択'));
		echo $this->Form->input('booking_start_time', array(
			'label'=> 'ご予約開始'));
		echo $this->Form->input('booking_expire_time', array(
			'label'=> 'ご返却予定日時'));
		echo $this->Form->input('created_time');
		echo $this->Form->input('modified_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bookinglists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
