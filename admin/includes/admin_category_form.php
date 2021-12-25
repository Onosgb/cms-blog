

<?php include('./includes/admin_functions.php') ?>


<?php 
// find the category to Edit
if(isset($_GET['edit'])) {
    updateCategory();
    $cat_id = $_GET['edit'];
    $query = "SELECT * FROM categories WHERE cat_id = $cat_id";

    $get_by_cat_id = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($get_by_cat_id)) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];

?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="form-group">
        <label for="cat_title"> Update Category</label>
        <input type="text" class="form-control" value="<?php echo $cat_title?>" placeholder="Category Title" name="cat_title" />
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary float-right" style="float: right" name="update_category" value="Update Category">
    </div>
</form>
        <!---- create category form ends here -->
<?php 
    }
} else {
    createCategory();

    // display the create for if not in edit mood
    ?>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="form-group">
        <label for="cat_title">Add Category</label>
        <input type="text" class="form-control" placeholder="Category Title"name="cat_title" />
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary float-right" style="float: right" name="submit" value="Add Category">
    </div>
</form>
<?php }?>
</div>