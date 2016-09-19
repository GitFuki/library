<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>蔵書検索｜ぽろろ図書館</title>
</head>
<body>
<h1>蔵書検索</h1>
<h2>① キーワードで検索</h2>

<form method="POST" action="<?php $this->html->url(array('controller'=>'Books', 'action'=>'search_form'));?><ul>
    <li>タイトル：<input type="text" name="title"></li>
    <li>キーワード：<input type="text" name="keyword"></li>
    <li>著者名：<input type="text" name="author"></li>
</ul>
<h2>② ISBNで検索</h2>
<ul>
    <li>ISBN：<input type="text" name="title"></li>
</ul>





<div class="books form">
    <?php /*echo $this->Form->create('Book'); */ ?><!--
	<fieldset>
		<legend><?php /*echo __('Add Book'); */ ?></legend>
	<?php
    /*		echo $this->Form->input('name');
            echo $this->Form->input('author_id');
            echo $this->Form->input('publisher_id');
            echo $this->Form->input('published');
            echo $this->Form->input('price');
            echo $this->Form->input('page');
            echo $this->Form->input('isbn');
            echo $this->Form->input('summary');
        */ ?>
	</fieldset>
<?php /*echo $this->Form->end(__('Submit')); */ ?>
</div>
<div class="actions">
	<h3><?php /*echo __('Actions'); */ ?></h3>
	<ul>

		<li><?php /*echo $this->Html->link(__('List Books'), array('action' => 'index')); */ ?></li>
		<li><?php /*echo $this->Html->link(__('List Authors'), array('controller' => 'authors', 'action' => 'index')); */ ?> </li>
		<li><?php /*echo $this->Html->link(__('New Author'), array('controller' => 'authors', 'action' => 'add')); */ ?> </li>
		<li><?php /*echo $this->Html->link(__('List Publishers'), array('controller' => 'publishers', 'action' => 'index')); */ ?> </li>
		<li><?php /*echo $this->Html->link(__('New Publisher'), array('controller' => 'publishers', 'action' => 'add')); */ ?> </li>
	</ul>-->
    test
</div>

</body>
</html>
