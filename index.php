<?php
    require "header.php"
?>

<main>
    <div class="wrapper-min">
        <section class="section-default">
            <?php
                if (isset($_SESSION['userID'])){
                    echo '<p>You are logged in!</p>';
                } else {
                    echo '<p>You are logged out!</p>';
                }
            ?>
        </section>
    </div>
</main>

<?php
    require "footer.php"
?>