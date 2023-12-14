<?php
// Contoh data lantai
$floors = array(
  array('Lantai 1', 'img/lantai1.jpg'),
  array('Lantai 2', 'img/lantai2.jpg'),
  array('Lantai 3', 'img/lantai3.jpg'),
);
?>

<div class="carousel">
  <?php foreach ($floors as $floor): ?>
    <div class="carousel-item">
      <h2><?php echo $floor[0]; ?></h2>
      <img src="<?php echo $floor[1]; ?>" alt="<?php echo $floor[0]; ?>">
    </div>
  <?php endforeach; ?>
</div>
