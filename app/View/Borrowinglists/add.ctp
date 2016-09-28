<div class="borrowinglists form">
<?php echo $this->Form->create('Borrowinglist'); ?>
	<fieldset>
		<legend><?php echo __('図書貸し出しフォーム'); ?></legend>
	<?php
		echo $this->Form->input('book_id',array(
		'label'=> '貸出本のタイトル'));
		echo $this->Form->input('user_id',array(
			'label'=> '貸出ユーザー'));
		echo $this->Form->input('borrowed_time', array(
			'label'=> '貸出日時',
			'type'=>'datetime',
			'dateFormat'=> 'YMD',
			'monthNames' => false,
			'maxYear' => date('Y') + 1,
			'minYear' => date('Y') - 1,
			'default' => time()
		));
		//set the return_time as for 7days later from the borrowed_time
		echo $this->Form->input('return_time', array(
			'label'=> '返却期限',
			'type'=>'datetime',
			'dateFormat'=> 'YMD',
			'monthNames' => false,
			'maxYear' => date('Y') + 1,
			'minYear' => date('Y') - 1,
			'default' => time()
		));
	echo $this->Form->input('created_time', array(
		'label'=> '作成日時',
		'type'=>'datetime',
		'dateFormat'=> 'YMD',
		'monthNames' => false,
		'maxYear' => date('Y') + 1,
		'minYear' => date('Y') - 1,
		'default' => time()
	));
	echo $this->Form->input('modified_time', array(
		'label'=> '変更日時',
		'type'=>'datetime',
		'dateFormat'=> 'YMD',
		'monthNames' => false,
		'maxYear' => date('Y') + 1,
		'minYear' => date('Y') - 1,
		'default' => time()
	));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Borrowinglists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
