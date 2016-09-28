<div class="books index">
	<h2><?php echo __('本を探す'); ?></h2>

	<!--add the search box-->

	<?php
      echo $this->Form->create('Book', array(
			  'url'   => array(
				  'controller' => 'books','action' => 'search'
			  ),
			  'id'    => 'web-form',
			  'class' =>'panel-body wrapper-lg form-left'
		  )
	  );

 	/*<?php echo $this->Form->create('Book', array('action' =>'search'));*/

	if(!isset($searchQuery)){
		$searchQuery ='';
	}

    $searchByTitle ='';
    $searchByAuthor ='';
    $searchByIsbn ='';

    if(isset($searchType) && ($searchType == 't')){
        $searchByTitle = $searchQuery;
    }

    if(isset($searchType) && ($searchType == 'a')){
        $searchByAuthor = $searchQuery;
    }

    if(isset($searchType) && ($searchType == 'i')){
        $searchByIsbn = $searchQuery;
    }


	echo $this->Form->input('searchByTitle', array('value'=>h($searchByTitle), 'label'=>'タイトルで探す'));
	echo $this->Form->end(__('検索'));
	?>

    <?php
    echo $this->Form->create('Book', array(
            'url'   => array(
                'controller' => 'books','action' => 'search'
            ),
            'id'    => 'web-author',
            'class' =>'panel-body wrapper-lg form-left'
        )
    );

    /*<?php echo $this->Form->create('Book', array('action' =>'search'));*/



    echo $this->Form->input('searchByAuthor', array('value'=>h($searchByAuthor), 'label'=>'筆者名で探す'));
    echo $this->Form->end(__('検索'));
    ?>

    <?php
    echo $this->Form->create('Book', array(
            'url'   => array(
                'controller' => 'books','action' => 'search'
            ),
            'id'    => 'web-isbn',
            'class' =>'panel-body wrapper-lg form-left'
        )
    );

    /*<?php echo $this->Form->create('Book', array('action' =>'search'));*/


    echo $this->Form->input('searchByIsbn', array('value'=>h($searchByIsbn), 'label'=>'ISBNで探す'));
    echo $this->Form->end(__('検索'));
    ?>
    <hr style="clear:both; margin:200px 0 20px 0">
    <h3><?php
        if((isset($searchQuery)) && !empty($searchQuery)){
            echo __('「' . $searchQuery . '」の検索結果');
        } else {
            echo __('書籍一覧');
        }?></h3>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('author_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Book cover'); ?></th>
			<th><?php echo $this->Paginator->sort('publisher_id'); ?></th>
			<th><?php echo $this->Paginator->sort('published'); ?></th>
			<th><?php echo $this->Paginator->sort('field_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bestseller'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('page'); ?></th>
			<th><?php echo $this->Paginator->sort('isbn'); ?></th>
			<th><?php echo $this->Paginator->sort('summary'); ?></th>
			<th><?php echo $this->Paginator->sort('created_time'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_time'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($books as $book): ?>
	<tr>
		<td><?php echo h($book['Book']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($book['Book']['name'], array('controller' => 'books', 'action' => 'view', $book['Book']['id'])); ?></td>
		<td>
			<?php echo $this->Html->link($book['Author']['name'], array('controller' => 'authors', 'action' => 'view', $book['Author']['id'])); ?>
		</td>
		<td><?php $base = $this->Html->url( '/../files/book/photo/');
			echo $this->Html->image($base.$book['Book']['photo_dir'].'/' . $book['Book']['photo'], array('class' => 'book-icon', 'alt' => $book['Book']['name'], 'width' => '100px'));
			?></td>
		<td>
			<?php echo $this->Html->link($book['Publisher']['name'], array('controller' => 'publishers', 'action' => 'view', $book['Publisher']['id'])); ?>
		</td>
		<td><?php echo h(date('Y-m', strtotime($book['Book']['published']))); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($book['Field']['name'], array('controller' => 'fields', 'action' => 'view', $book['Field']['id'])); ?>
		</td>
		<td><?php echo h($book['Book']['bestseller']); ?></td>
		<td><?php echo h($book['Book']['price']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['page']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['isbn']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['summary']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['created_time']); ?>&nbsp;</td>
		<td><?php echo h($book['Book']['modified_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $book['Book']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $book['Book']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $book['Book']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $book['Book']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => 'range'
/*		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')*/
	));
	?>	</p>
	<div class="paging">
	<?php

	echo $this->Paginator->prev('< ' . __('Previous Page'), array(),
		null, array('class' => 'prev disabled'));
	echo $this->Paginator->next(__('Next Page') . ' >', array(),
		null, array('class' => 'next disabled'));
	/*
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));*/
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?></li>
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
