<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>
<div class="gallery-container">
    <?php foreach($imageTitles AS $key => $imageTitle): ?>
        <a href="image.php?<?php echo http_build_query(['image' => $key]); ?>" class="gallery-item">
            <h3><?php echo e($imageTitle); ?></h3>
            <img src="./images/<?php echo rawurldecode($key); ?>" alt="<?php echo e($imageTitle); ?>" />
        </a>
    <?php endforeach; ?>
</div>
<?php include './views/footer.php'; ?>
