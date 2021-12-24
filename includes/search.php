<?php include('./includes/db.php') ?>

<?php

$search_query = array();
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    if(isset($_POST['search'])) {
    $search = $_POST['search'];

    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
    $search_query = mysqli_query($connection, $query);
    $count = mysqli_num_rows($search_query);
    
    if(!$search_query) {
        die("query failed" . mysqli_error($connection));
    }

    }
}

?>
