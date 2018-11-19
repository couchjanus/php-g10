<?php
require_once VIEWS.'shared/head.php';
require_once VIEWS.'shared/navigation.php';
?>
<!-- product Start -->

<h1><?=$title?></h1>        


<h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>



<?php if (count($posts) > 0) :?>

<?php foreach ($posts as $post) :?>
    <article class="">
        <h2><?php echo $post->title ?></h2>
        <div><?php echo $post->content?></div>
    </article>
<?php endforeach; ?>

<?php else : echo "<h2>Not Posts Yet...</h2>"?>
<?php endif;?>

<!-- Our product End -->
<div class="cf"></div>

<?php
require_once VIEWS.'shared/aside.php';
require_once VIEWS.'shared/footer.php';
