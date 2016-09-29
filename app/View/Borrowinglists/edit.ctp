<div class="borrowinglists form">
<?php echo $this->Form->create('Borrowinglist'); ?>
	<fieldset>
		<legend><?php echo __('「' . $borrowings['Book']['name'].'」の貸出情報を修正する'); ?></legend>
	<?php
		echo $this->Form->input('id', array(
            'label'=> 'タイトル'));
		echo $this->Form->input('book_id', array(
            'label'=> 'タイトル'));
		echo $this->Form->input('user_id', array(
            'label'=> 'ユーザー'));
		echo $this->Form->input('borrowed_time', array(
            'label'=> '貸出日'));
		echo $this->Form->input('return_time', array(
            'label'=> '返却期限'));
		echo $this->Form->input('created_time', array(
            'label'=> '作成日時'));
		echo $this->Form->input('modified_time', array(
            'label'=> '変更日時'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('修正を反映')); ?>
</div>
<div class="actions">
    <h3><?php echo __('メニュー'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('本を探す'), array('controller' => 'books', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('著者一覧'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('予約リスト'), array('controller' => 'bookinglists', 'action' => 'index')); ?> </li>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
            <li><?php echo $this->Html->link(__('出版社一覧'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('図書種別一覧'), array('controller' => 'fields', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('ユーザー一覧'), array('controller' => 'users', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('権限グループ一覧'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
            <hr style="clear:both; margin:20px 0 20px 0">
            <li><?php echo $this->Html->link(__('貸出中リストに追加する'), array('controller' => 'borrowinglists', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('貸出中リストに戻る'), array('controller' => 'borrowinglists', 'action' => 'index')); ?> </li>
        <?php endif; ?>
    </ul>
</div>