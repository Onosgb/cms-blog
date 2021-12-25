<?php 
// this function is use to insert category to the  category table in the database.

function createCategory() {
    if(isset($_POST['submit'])) {
        global $connection;
        $cat_title = $_POST['cat_title'];

        if($cat_title == '' || empty($cat_title) ) {
        echo "<p class='text-danger'>This field should not be empty!</p>";
        } else {
        
            $query = "INSERT INTO categories(cat_title)";
            $query .= " VALUES('{$cat_title}')";
            $create_category_query = mysqli_query($connection, $query);

                if(!$create_category_query) {
                    die("QUERY FAILED". mysqli_error($connection));
                }
            }  
    }
}

    // this function is use to update the category table in the database.                       
function updateCategory() {
    if(isset($_POST['update_category']) && isset($_GET['edit'])){

        global $connection;
        $cat_title = $_POST['cat_title'];
        $cat_id = $_GET['edit'];
        $query = "UPDATE categories set cat_title = '{$cat_title}' WHERE cat_id = {$cat_id}";
        $update_category_query = mysqli_query($connection, $query);
        header("location: categories.php");
        if(!$update_category_query) {
            die("QUERY FAILED". mysqli_error($connection));
        }
    }
}

// this function is use to de category
function deleteCategory() {
    global $connection;
    if(isset($_GET['delete'])) {
        $get_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = $get_cat_id";
        $delete_query = mysqli_query($connection, $query);
        header("location: categories.php");
    }
}

// this function is use to find all categories

function findAllCategories() {
    global $connection;

     // find all categories query
     $query = "SELECT * FROM categories";

     $selected_all_categories = mysqli_query($connection, $query);
     while($row = mysqli_fetch_assoc($selected_all_categories)) {
     $cat_title =  $row['cat_title'];
     $cat_id =  $row['cat_id'];
     ?>

     <tr>
         <td><?php echo $cat_id; ?></td>
         <td><?php echo $cat_title; ?></td>
         <td>
             <a href="<?php echo $_SERVER['PHP_SELF'].'?delete=' . $cat_id?>"><i class="fa fa-trash text-danger"></i></a>
         </td>
         <td>
             <a href="<?php echo $_SERVER['PHP_SELF'].'?edit=' . $cat_id?>"><i class="fa fa-edit text-info"></i></a>
         </td>
     </tr>
     <?php
     }
}
?>