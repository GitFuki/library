<div class="books form">
<?php echo $this->Form->create('Book', array('type' => 'file'));?>
	<fieldset>
		<legend><?php echo __('蔵書の追加'); ?></legend>
	<?php
		echo $this->Form->input('name', array(
			'label'=> 'タイトル'));
		echo $this->Form->input('author_id', array(
			'label'=> '著者'));
        echo $this->Form->input('photo', array(
        	'type' => 'file',
			'label'=> '表紙画像'));
        echo $this->Form->input('photo_dir', array('type' => 'hidden'));
		echo $this->Form->input('publisher_id', array(
			'label'=> '出版社'));
		echo $this->Form->input('published', array(
			'label'=> '出版年月'));
		echo $this->Form->input('field_id', array(
			'label'=> '種別'));
		echo $this->Form->input('bestseller', array(
			'label'=> 'ベストセラー'));
		echo $this->Form->input('price', array(
			'label'=> '価格'));
		echo $this->Form->input('page', array(
			'label'=> 'ページ数'));
		echo $this->Form->input('isbn');
		echo $this->Form->input('summary', array(
			'label'=> 'サマリー'));
		echo $this->Form->input('created_time', array(
			'label'=> '作成日時',
			'type'=>'datetime',
			'dateFormat'=> 'YMD',
			'monthNames' => false,
			'maxYear' => date('Y') + 10,
			'minYear' => date('Y') - 10,
			'default' => time()
		));
		echo $this->Form->input('modified_time', array(
			'label'=> '作成日時',
			'type'=>'datetime',
			'dateFormat'=> 'YMD',
			'monthNames' => false,
			'maxYear' => date('Y') + 10,
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

		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Authors'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('controller' => 'authors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publishers'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publisher'), array('controller' => 'publishers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fields'), array('controller' => 'fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field'), array('controller' => 'fields', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookinglists'), array('controller' => 'bookinglists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bookinglist'), array('controller' => 'bookinglists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Borrowinglists'), array('controller' => 'borrowinglists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Borrowinglist'), array('controller' => 'borrowinglists', 'action' => 'add')); ?> </li>
	</ul>
</div>
