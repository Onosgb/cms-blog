<?php include('./includes/admin_header.php') ?>
    <div id="wrapper">

        <!-- Navigation -->
       <?php include('./includes/admin_navigation.php')?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Category
                        </h1>
                        <div class="col-xs-6">

                        <?php
                        include('./includes/admin_category_form.php')
                        ?>

                     
                    <!----- End of add category --->
                        <div class="col-xs-6">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category Title</th>
                                        <th>Delete</th>
                                        <th>Edit</th>

                                    </tr>
                                </thead>
                                <tbody>

                                <?php deleteCategory()?>

                                <?php findAllCategories()?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                   
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php 
include('./includes/admin_footer.php')
?>