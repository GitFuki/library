<div class="borrowinglists view">
<h2><?php echo __('「' . $borrowinglist['Book']['name'] . '」の貸出情報'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($borrowinglist['Borrowinglist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('タイトル'); ?></dt>
		<dd>
			<?php echo $this->Html->link($borrowinglist['Book']['name'], array('controller' => 'books', 'action' => 'view', $borrowinglist['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ユーザー'); ?></dt>
		<dd>
			<?php echo $this->Html->link($borrowinglist['User']['id'], array('controller' => 'users', 'action' => 'view', $borrowinglist['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('貸出日'); ?></dt>
		<dd>
			<?php echo h($borrowinglist['Borrowinglist']['borrowed_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('返却日時'); ?></dt>
		<dd>
			<?php echo h($borrowinglist['Borrowinglist']['return_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('作成日時'); ?></dt>
		<dd>
			<?php echo h($borrowinglist['Borrowinglist']['created_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('変更日時'); ?></dt>
		<dd>
			<?php echo h($borrowinglist['Borrowinglist']['modified_time']); ?>
			&nbsp;
		</dd>
	</dl>
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
        <?php endif; ?>
    </ul>
</div>
