<?php

require_once VIEWS.'shared/head.php';
require_once VIEWS.'shared/navigation.php';
?>
<!-- product Start -->

<h1>Our <b>Cat Members</b></h1>        


<h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>

<?php for ($i=0; $i<count($posts); $i++) :?>
    <article class="">
        <h2><?php echo $posts[$i]['title'] ?></h2>
        <div><?php echo $posts[$i]['content'] ?></div>
    </article>
<?php endfor; ?>

<!-- Our product End -->
<div class="cf"></div>

<?php
require_once VIEWS.'shared/aside.php';
require_once VIEWS.'shared/footer.php';
