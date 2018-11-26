<?php
require_once VIEWS.'shared/head.php';
require_once VIEWS.'shared/navigation.php';
?>
<!-- product Start -->
<div class="cf"></div>
    <article class="">
        <h1><?php echo $post['title'];?></h1>
        <div>
            Published At <?php echo $post['created_at'];?>
            <hr>
            <?php echo $post['content'];?>
        </div>
        <a href="/blog">All posts</a>
    </article>
<!-- Our product End -->
<div class="cf"></div>

<?php
require_once VIEWS.'shared/aside.php';
require_once VIEWS.'shared/footer.php';
