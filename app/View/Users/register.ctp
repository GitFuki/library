<div class="users form">
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('新規登録'); ?></legend>
        <?php
        echo $this->Form->input('last_name');
        echo $this->Form->input('first_name');
        echo $this->Form->input('tel');
        echo $this->Form->input('birthday');
        echo $this->Form->input('email');
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('group_id');
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
