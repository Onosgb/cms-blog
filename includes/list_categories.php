<?php 

$query = "SELECT * FROM categories";

$selected_all_categories = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($selected_all_categories)) {
   $cat_title =  $row['cat_title'];
   echo "<li><a href=''>{$cat_title}</a></li>";
}
?>