<?php 
	
	$this->layout('master', [
			'title'=>'Our Products',
			'desc'=>'Check out our range of goodies'
		]); 

?>

<h1>Products</h1>

<?= $totalProducts ?>

<?php foreach($products as $item): ?>

<h1> <?= $this->escape($item['title']) ?> </h1>
<p> <?= $this->escape($item['description']) ?></p>

<?php endforeach; ?>