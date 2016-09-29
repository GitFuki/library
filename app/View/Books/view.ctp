<?php /*echo "<pre>";
print_r($result);
print_r($book);
print_r($result['Borrowinglist']['book_id']);
        echo "</pre>";
echo print_r(date_parse("2006-12-12 10:00:00.5"));

echo "</pre>";
*/?>
<div class="books view">
<h2><?php echo __('「'.$book['Book']['name'].'」の詳細情報'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('タイトル'); ?></dt>
		<dd>
			<?php echo h($book['Book']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('著者名'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Author']['name'], array('controller' => 'authors', 'action' => 'view', $book['Author']['id'])); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('表紙カバー'); ?></dt>
        <dd>
<?php $base = $this->Html->url( '/../files/book/photo/');
        echo $this->Html->image($base.$book['Book']['photo_dir'].'/' . $book['Book']['photo'], array('class' => 'book-icon', 'alt' => $book['Book']['name']));
?>
        </dd>
		<dt><?php echo __('出版社'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Publisher']['name'], array('controller' => 'publishers', 'action' => 'view', $book['Publisher']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('出版年月'); ?></dt>
		<dd>
			<?php echo h(date('Y-m', strtotime($book['Book']['published']))); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('種別'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Field']['name'], array('controller' => 'fields', 'action' => 'view', $book['Field']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ベストセラー'); ?></dt>
		<dd>
			<?php echo h($book['Book']['bestseller']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('価格'); ?></dt>
		<dd>
			<?php echo h($book['Book']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ページ'); ?></dt>
		<dd>
			<?php echo h($book['Book']['page']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Isbn'); ?></dt>
		<dd>
			<?php echo h($book['Book']['isbn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('サマリー'); ?></dt>
		<dd>
			<?php echo h($book['Book']['summary']); ?>
			&nbsp;
		</dd>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
		<dt><?php echo __('作成日時'); ?></dt>
		<dd>
			<?php echo h($book['Book']['created_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('更新日時'); ?></dt>
		<dd>
			<?php echo h($book['Book']['modified_time']); ?>
			&nbsp;
		</dd>
        <?php endif; ?>
	</dl>
	<div class="booking-outerbox">
		<div class="booking-innerbox">
			<h3><?php echo __('「' . $book['Book']['name'] . '」の貸出・予約状況'); ?></h3>
			<?php
			if (empty($book['Borrowinglist']) && empty($book['Bookinglist'])) {
				echo __('現在、「' . $book['Book']['name'] . '」は、<strong>貸し出し可能</strong>です。');
				echo __('<p>ご予約は' . $this->Html->link(__('こちらから'), array('controller' => 'bookinglists', 'action' => 'add')). '</p>');
			} else {
				echo __('現在、「' .  $book['Book']['name'] . '」は、<strong>貸出: ' . count($book['Borrowinglist']) . '件、予約: ' . count($book['Bookinglist']) . '件</strong> 入っています。');
			}

/*				echo __('「' . $book['Book']['name'] . '」は現在、貸出中です。<br>');
				echo __('返却予定は、' . $result['Borrowinglist']['return_time']
					. 'ですので、それ以降、貸し出し可能です。');
			} else {
				echo __('「' . $book['Book']['name'] . '」は現在、貸し出し可能です。');
			} */?><!--

			--><?php
/*			if ((!empty($book['Borrowinglist'])) && (($result['Borrowinglist']['book_id']) == $book['Book']['id'])) {
				echo __('「' . $book['Book']['name'] . '」は現在、貸出中です。<br>');
				echo __('返却予定は、' . $result['Borrowinglist']['return_time']
					. 'ですので、それ以降、貸し出し可能です。');
			} else {
				echo __('「' . $book['Book']['name'] . '」は現在、貸し出し可能です。');
			} */?>
<!--		</div>
		<div class="booking-innerbox">
			<h3><?php /*echo __('「' . $book['Book']['name'] . '」の予約状況'); */?></h3>
			--><?php
/*			if ((!empty($book['Bookinglist'])) && (($result_booking['Bookinglist']['book_id']) == $book['Book']['id'])) {
				echo __('「' . $book['Book']['name'] . '」は他のユーザーにより予約が入っています。<br>');
				echo __('予約期限は、' . $result_booking['Bookinglist']['booking_expire_time']
					. 'ですので、それ以降、下記のボタンで予約可能です。');
			} else {
				echo __('「' . $book['Book']['name'] . '」は現在、貸し出し可能です。');
			} */?>
		</div>
		<!--<div class="booking-innerbox">
			<p>この本を予約したい場合は、下記の予約ボタンから予約フォームに入力し予約できます。"</p>
			<button onclick="location.href='<?php /*echo $this->html->url('/bookinglists/add/' . $customer_id); */?>';">
				予約する
			</button>
		</div>-->
	</div>
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
            <li><?php echo $this->Html->link(__('本を探すに戻る'), array('controller' => 'books', 'action' => 'index')); ?> </li>
        <?php endif; ?>
    </ul>
</div>
<div class="related">
	<h3><?php echo __('「' . $book['Book']['name'] . '」の予約リスト一覧'); ?></h3>
	<?php if (!empty($book['Bookinglist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('予約日'); ?></th>
		<th><?php echo __('予約期限'); ?></th>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
		<th><?php echo __('作成日時'); ?></th>
		<th><?php echo __('更新日時'); ?></th>
		<th class="actions"><?php echo __('権限操作'); ?></th>
        <?php endif; ?>
	</tr>
	<?php foreach ($book['Bookinglist'] as $bookinglist): ?>
		<tr>
			<td><?php echo $bookinglist['user_id']; ?></td>
			<td><?php echo $bookinglist['booking_start_time']; ?></td>
			<td><?php echo $bookinglist['booking_expire_time']; ?></td>
            <?php if ($user['Group']['name'] == 'administrators'): ?>
			<td><?php echo $bookinglist['created_time']; ?></td>
			<td><?php echo $bookinglist['modified_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('詳細'), array('controller' => 'bookinglists', 'action' => 'view', $bookinglist['id'])); ?>
				<?php echo $this->Html->link(__('修正'), array('controller' => 'bookinglists', 'action' => 'edit', $bookinglist['id'])); ?>
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'bookinglists', 'action' => 'delete', $bookinglist['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bookinglist['id']))); ?>
                <?php endif; ?>
            </td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('予約の追加'), array('controller' => 'bookinglists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('「' . $book['Book']['name'] . '」の貸出リスト一覧'); ?></h3>
	<?php if (!empty($book['Borrowinglist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('貸出日'); ?></th>
		<th><?php echo __('返却期限'); ?></th>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
		<th><?php echo __('作成日時'); ?></th>
		<th><?php echo __('更新日時'); ?></th>
		<th class="actions"><?php echo __('権限操作'); ?></th>
        <?php endif; ?>
	</tr>
	<?php foreach ($book['Borrowinglist'] as $borrowinglist): ?>
		<tr>
			<td><?php echo $borrowinglist['user_id']; ?></td>
			<td><?php echo $borrowinglist['borrowed_time']; ?></td>
			<td><?php echo $borrowinglist['return_time']; ?></td>
        <?php if ($user['Group']['name'] == 'administrators'): ?>
			<td><?php echo $borrowinglist['created_time']; ?></td>
			<td><?php echo $borrowinglist['modified_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('詳細'), array('controller' => 'borrowinglists', 'action' => 'view', $borrowinglist['id'])); ?>
				<?php echo $this->Html->link(__('修正'), array('controller' => 'borrowinglists', 'action' => 'edit', $borrowinglist['id'])); ?>
				<?php echo $this->Form->postLink(__('削除'), array('controller' => 'borrowinglists', 'action' => 'delete', $borrowinglist['id']), array('confirm' => __('Are you sure you want to delete # %s?', $borrowinglist['id']))); ?>
			</td>
        <?php endif; ?>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('貸し出しの追加'), array('controller' => 'borrowinglists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
