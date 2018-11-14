<?php
require_once VIEWS.'shared/head.php';
require_once VIEWS.'shared/navigation.php';
?>

<!-- Page Start -->
<?php
    printf("<h1 style='color: #%x%x%x'>%s</h1>", 165, 27, 45, $title);
    printf("<h2>В Guest Book находится %d Comments</h2>", $count); 

    echo "<pre>"; 
    print_r($comments);
    echo "</pre>"; 

?>

<!-- Page End -->
<div class="cf"></div>

<?php if ($count>0) : ?> 
    <h2>
        <?php printf("В Guest Book находится %d Comments", $count); ?> 
    </h2>
   
    <?php foreach ($comments as $row) :?>
        <div class='top'>
            <b>
                User <?=$row["username"];?>
            </b> 
            <a href="mailto:<?=$row['email'];?>"><?=$row["email"];?></a> Added this 
        </div> 
        <div class='comment'>
            <?=strip_tags($row["comment"]);?>
        </div> 
        <div class='added_at'> At: 
            <?=strip_tags($row["created_at"]);?>
        </div> 
    <?php endforeach;?>
    <?php else : echo "No comments.... "; ?>
        
<?php endif;?>

<div class="cf"></div>

<div class="grid-layout">
        <form class="cf" method = "POST">
            <div class="half left cf">
                <input  name="username" type="text" id="input-name" placeholder="Name">
                <input  name="email" type="email" id="input-email" placeholder="Email address">
            </div>
            <div class="half right cf">
              <textarea name="comment" type="text" id="input-message" placeholder="Message"></textarea>
            </div>  
            <input type="submit" value="Submit" id="input-submit">
        </form>
</div>
<div class="cf"></div>
<?php require_once VIEWS.'shared/footer.php';
