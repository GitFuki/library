<div class="books form">
<?php echo $this->Form->create('Book', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('本を修正する'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('author_id');
    echo $this->Form->input('photo', array('type' => 'file'));
    echo $this->Form->input('photo_dir', array('type' => 'hidden'));

		echo $this->Form->input('publisher_id');
		echo $this->Form->input('published');
		echo $this->Form->input('field_id');
		echo $this->Form->input('bestseller');
		echo $this->Form->input('price');
		echo $this->Form->input('page');
		echo $this->Form->input('isbn');
		echo $this->Form->input('summary');
		echo $this->Form->input('created_time');
		echo $this->Form->input('modified_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('メニュー'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('著者一覧'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('貸出中リスト'), array('controller' => 'borrowinglists', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('予約リスト'), array('controller' => 'bookinglists', 'action' => 'index')); ?> </li>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
            <li><?php echo $this->Html->link(__('出版社一覧'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('図書種別一覧'), array('controller' => 'fields', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('ユーザー一覧'), array('controller' => 'users', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('権限グループ一覧'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
            <hr style="clear:both; margin:20px 0 20px 0">
            <li><?php echo $this->Html->link(__('本を追加する'), array('controller' => 'books', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('本を探すに戻る'), array('controller' => 'books', 'action' => 'index')); ?> </li>
        <?php endif; ?>
    </ul>
</div>