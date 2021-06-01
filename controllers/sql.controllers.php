<?php
if($_GET == null){
try {
    require 'dbConfig/dbconnect.php';
    $query = 'SELECT wp_posts.ID,post_title, Left(post_content, 100) as content, display_name, post_date 
    FROM wp_posts, wp_users
    where
    wp_posts.ID in (43,79,86,95,109,112,414)
    And wp_posts.post_author = wp_users.ID';

    $req = $dbh->query($query);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $tab = $req->fetchAll();
    $req->closeCursor();
    return $tab;

}catch (PDOException $e) {
    print "Erreur de requete!:" . $e->getMessage() . '<br>';
    die;
}
}else{
try {
    require 'dbConfig/dbconnect.php';
    $query = 'SELECT distinct wp_posts.ID,post_title,post_content, display_name, post_date 
    FROM wp_posts, wp_users
    where
    --  post_type = "post" 
    -- AND 
        wp_posts.ID =' . $_GET["article"] . '
    And wp_posts.post_author = wp_users.ID group by wp_posts.ID' ;

            $req = $dbh->query($query);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $tab = $req->fetch();
            $req->closeCursor(); 
    return $tab;

}catch (PDOException $e) {
    print "Erreur de requete!:" . $e->getMessage() . '<br>';
    die;
}
}
