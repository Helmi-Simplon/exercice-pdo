<?php

foreach ($tab as $row) { ?>

    <h2 style="text-align: center;"><a href="?article=<?php echo $row["ID"] ?>" style="text-decoration: none;color:brown"><?php echo $row["post_title"] ?></a></h2>
    <p style="text-align: center;"><?php echo $row["content"] ?>...</p>
    <p style="text-align: center;">Rédigé par <?php echo $row["display_name"] ?> Date : <?php echo $row["post_date"] ?></p>

<?php }
?>