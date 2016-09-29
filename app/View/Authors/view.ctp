<div class="authors view">
<h2><?php echo __('「'.$author['Author']['name'].'」の紹介'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($author['Author']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('著者名'); ?></dt>
		<dd>
			<?php echo h($author['Author']['name']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('プロフィール画像'); ?></dt>
        <dd>
            <?php $base = $this->Html->url( '/../files/author/photo/');
            echo $this->Html->image($base.$author['Author']['photo_dir'].'/' . $author['Author']['photo'], array('class' => 'author-icon', 'alt' => $author['Author']['name']));
            ?>
        </dd>
		<dt><?php echo __('著者紹介'); ?></dt>
		<dd>
			<?php echo h($author['Author']['detail']); ?>
			&nbsp;
		</dd>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
		<dt><?php echo __('作成日時'); ?></dt>
		<dd>
			<?php echo h($author['Author']['created_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('更新日時'); ?></dt>
		<dd>
			<?php echo h($author['Author']['modified_time']); ?>
			&nbsp;
		</dd>
        <?php endif; ?>
	</dl>
</div>
<div class="actions">
    <h3><?php echo __('メニュー'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('本を探す'), array('controller' => 'books', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('貸出中リスト'), array('controller' => 'borrowinglists', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('予約リスト'), array('controller' => 'bookinglists', 'action' => 'index')); ?> </li>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
            <li><?php echo $this->Html->link(__('出版社一覧'), array('controller' => 'publishers', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('図書種別一覧'), array('controller' => 'fields', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('ユーザー一覧'), array('controller' => 'users', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('権限グループ一覧'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
            <hr style="clear:both; margin:20px 0 20px 0">
            <li><?php echo $this->Html->link(__('著者を追加する'), array('controller' => 'authors', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('著者一覧に戻る'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
        <?php endif; ?>
    </ul>
</div>

<div class="related">
	<h3><?php echo __('著書一覧'); ?></h3>
	<?php if (!empty($author['Book'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('著者名'); ?></th>
		<th><?php echo __('表紙'); ?></th>
		<th><?php echo __('出版社'); ?></th>
		<th><?php echo __('出版年月'); ?></th>
		<th><?php echo __('種別'); ?></th>
		<th><?php echo __('ベストセラー'); ?></th>
		<th><?php echo __('価格'); ?></th>
		<th><?php echo __('ページ数'); ?></th>
		<th><?php echo __('Isbn'); ?></th>
		<th><?php echo __('サマリー'); ?></th>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
		<th><?php echo __('作成日時'); ?></th>
		<th><?php echo __('変更日時'); ?></th>
		<th class="actions"><?php echo __('権限操作'); ?></th>
        <?php endif; ?>
	</tr>
	<?php foreach ($author['Book'] as $book): ?>
		<tr>
			<td><?php echo $book['id']; ?></td>
            <td><?php echo $this->Html->link($book['name'], array('controller' => 'books', 'action' => 'view', $book['id'])); ?></td>
            <!--<td><?php /*echo $book['name']; */?></td>-->
			<td><?php $base = $this->Html->url( '/../files/book/photo/');
				echo $this->Html->image($base.$book['photo_dir'].'/' . $book['photo'], array('class' => 'book-icon', 'alt' => $book['name'], 'width' => '100px'));
				?></td>
			<td><?php echo $book['publisher_id']; ?></td>
			<td><?php echo $book['published']; ?></td>
			<td><?php echo $book['field_id']; ?></td>
			<td><?php echo $book['bestseller']; ?></td>
			<td><?php echo $book['price']; ?></td>
			<td><?php echo $book['page']; ?></td>
			<td><?php echo $book['isbn']; ?></td>
			<td><?php echo $book['summary']; ?></td>
            <?php if ($user['Group']['name'] == 'administrators'): ?>
			<td><?php echo $book['created_time']; ?></td>
			<td><?php echo $book['modified_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('詳細'), array('controller' => 'books', 'action' => 'view', $book['id'])); ?>
				<?php echo $this->Html->link(__('修正'), array('controller' => 'books', 'action' => 'edit', $book['id'])); ?>
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'books', 'action' => 'delete', $book['id']), array('confirm' => __('Are you sure you want to delete # %s?', $book['id']))); ?>
			</td>
            <?php endif; ?>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
