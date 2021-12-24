<div class="col-md-4">

<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <!---- Form begins here ----->
    <form acton="index.php" method="post">
    <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Search post">
        <span class="input-group-btn">
            <button class="btn btn-default" type="submit" name="submit">
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
    </div>
    </form>
    <!-- search form end here -->
    <!-- /.input-group -->
</div>

<!-- Blog Categories Well -->
<div class="well">

        <?php 
        
        
        ?>

    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-unstyled">
                <?php 
                include('./includes/list_categories.php');
                ?>
            </ul>
        </div>
        <!-- /.col-lg-12 -->
       
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<?php 

include ('./includes/widget.php')
?>

</div>