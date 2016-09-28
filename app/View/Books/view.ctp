<?php echo "<pre>";
print_r($result);
print_r($book);
/*print_r($result['Borrowinglist']['book_id']);*/
        if(!empty($book['Borrowinglist'] && $result['Borrowinglist']['book_id']) == $book['Book']['id']){
            echo'hogehoge';
        } else {
            echo'残念';
        }
        echo "</pre>";
echo "</pre>";
?>
<div class="books view">
<h2><?php echo __('「'.$book['Book']['name'].'」の詳細情報'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($book['Book']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Author'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Author']['name'], array('controller' => 'authors', 'action' => 'view', $book['Author']['id'])); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('Book cover'); ?></dt>
        <dd>
<?php $base = $this->Html->url( '/../files/book/photo/');
        echo $this->Html->image($base.$book['Book']['photo_dir'].'/' . $book['Book']['photo'], array('class' => 'book-icon', 'alt' => $book['Book']['name']));
?>
        </dd>
		<dt><?php echo __('Publisher'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Publisher']['name'], array('controller' => 'publishers', 'action' => 'view', $book['Publisher']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published'); ?></dt>
		<dd>
			<?php echo h(date('Y-m', strtotime($book['Book']['published']))); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Field'); ?></dt>
		<dd>
			<?php echo $this->Html->link($book['Field']['name'], array('controller' => 'fields', 'action' => 'view', $book['Field']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bestseller'); ?></dt>
		<dd>
			<?php echo h($book['Book']['bestseller']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($book['Book']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Page'); ?></dt>
		<dd>
			<?php echo h($book['Book']['page']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Isbn'); ?></dt>
		<dd>
			<?php echo h($book['Book']['isbn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Summary'); ?></dt>
		<dd>
			<?php echo h($book['Book']['summary']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Time'); ?></dt>
		<dd>
			<?php echo h($book['Book']['created_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified Time'); ?></dt>
		<dd>
			<?php echo h($book['Book']['modified_time']); ?>
			&nbsp;
		</dd>
	</dl>
	<div class="booking-outerbox">
		<div class="booking-innerbox">
		<h3><?php echo __('この図書の貸し出し状況'); ?></h3>
			<?php
			if((!empty($book['Borrowinglist'])) && (($result['Borrowinglist']['book_id']) == $book['Book']['id'])){
			echo  __('「'.$book['Book']['name'] . '」は現在、貸出中です。<br>');
			echo  __('返却予定は、'.$result['Borrowinglist']['return_time'].'ですので、それ以降、貸し出し可能です。');
			} else {
			echo __('「'.$book['Book']['name'].'」は現在、貸し出し可能です。');
			} ?>
			</div>
	</div>

</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book'), array('action' => 'edit', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book'), array('action' => 'delete', $book['Book']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $book['Book']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Bookinglists'); ?></h3>
	<?php if (!empty($book['Bookinglist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Booking Start Time'); ?></th>
		<th><?php echo __('Booking Expire Time'); ?></th>
		<th><?php echo __('Created Time'); ?></th>
		<th><?php echo __('Modified Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($book['Bookinglist'] as $bookinglist): ?>
		<tr>
			<td><?php echo $bookinglist['id']; ?></td>
			<td><?php echo $bookinglist['book_id']; ?></td>
			<td><?php echo $bookinglist['user_id']; ?></td>
			<td><?php echo $bookinglist['booking_start_time']; ?></td>
			<td><?php echo $bookinglist['booking_expire_time']; ?></td>
			<td><?php echo $bookinglist['created_time']; ?></td>
			<td><?php echo $bookinglist['modified_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bookinglists', 'action' => 'view', $bookinglist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bookinglists', 'action' => 'edit', $bookinglist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bookinglists', 'action' => 'delete', $bookinglist['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bookinglist['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bookinglist'), array('controller' => 'bookinglists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Borrowinglists'); ?></h3>
	<?php if (!empty($book['Borrowinglist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Borrowed Time'); ?></th>
		<th><?php echo __('Return Time'); ?></th>
		<th><?php echo __('Created Time'); ?></th>
		<th><?php echo __('Modified Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($book['Borrowinglist'] as $borrowinglist): ?>
		<tr>
			<td><?php echo $borrowinglist['id']; ?></td>
			<td><?php echo $borrowinglist['book_id']; ?></td>
			<td><?php echo $borrowinglist['user_id']; ?></td>
			<td><?php echo $borrowinglist['borrowed_time']; ?></td>
			<td><?php echo $borrowinglist['return_time']; ?></td>
			<td><?php echo $borrowinglist['created_time']; ?></td>
			<td><?php echo $borrowinglist['modified_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'borrowinglists', 'action' => 'view', $borrowinglist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'borrowinglists', 'action' => 'edit', $borrowinglist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'borrowinglists', 'action' => 'delete', $borrowinglist['id']), array('confirm' => __('Are you sure you want to delete # %s?', $borrowinglist['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Borrowinglist'), array('controller' => 'borrowinglists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
