<?php include "includes/admin_header.php" ?>

<div id="wrapper">

    <?php include "includes/admin_navigation.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Blank Page
                        <small>Subheading</small>
                    </h1>
                    <!--FORM LEFT-->
                    <div class="col-xs-6">

                        <?php insert_categories(); ?>

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat_title">Add Category</label>
                                <input type="text" name="cat_title" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                            </div>
                        </form>
                        <?php
                        if (isset($_GET['edit'])) {
                            $cat_id = $_GET['edit'];
                            include "includes/update_categories.php";
                        }
                        ?>

                    </div>
                    <!--FORM LEFT END-->

                    <!--FORM RIGHT-->
                    <div class="col-xs-6">
                        <form action="">
                            <div class="form-group">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Catergory Title</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php findAllCategories(); ?>

                                        <?php deleteCategory(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <!--FORM RIGHT END-->

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
    <?php include "includes/admin_footer.php" ?>