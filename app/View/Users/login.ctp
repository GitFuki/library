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
