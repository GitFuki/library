<div class="users form">
    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('ユーザーIDとパスワードを入力してください。'); ?>
        </legend>
        <?php echo $this->Form->input('username', array('label'=>'ユーザーID'));
        echo $this->Form->input('password', array('label'=>'パスワード'));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('ログイン')); ?>
    <hr style="clear:both; margin:200px 0 20px 0">
    <?php echo '新規登録は' . $this->Html->link(__('こちらから'), array('action' => 'register')); ?></p>
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