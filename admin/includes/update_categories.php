<form action="" method="post">
    <div class="form-group">
        <label for="cat_title">Edit Category</label>
        <?php

        if (isset($_GET['edit'])) {
            $cat_id_edit = $_GET['edit'];

            $query = "SELECT * FROM categories WHERE cat_id = {$cat_id_edit} ";
            $select_categories_edit_id = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select_categories_edit_id)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
            }

        ?>
            <input value="<?php if (isset($cat_title)) {
                                echo $cat_title;
                            } ?>" type="text" name="cat_title" class="form-control">
        <?php }


        ?>

        <?php //UPDATE QUERY
        if (isset($_POST['update_category'])) {
            $the_cat_title_update = $_POST['cat_title'];

            $query = "UPDATE categories SET cat_title ='{$the_cat_title_update}' WHERE cat_id = {$cat_id_edit} ";
            $update_query = mysqli_query($connection, $query);

            if (!$update_query) {
                die("QUERY FAILED" . mysqli_error($connection));
            }
        }
        ?>




    </div>
    <div class="form-group">
        <input type="submit" name="update_category" value="Update Category" class="btn btn-primary">
    </div>
</form>