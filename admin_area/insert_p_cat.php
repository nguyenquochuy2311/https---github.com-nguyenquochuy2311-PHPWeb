<?php

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Bảng điều khiển / Thêm danh mục sản phẩm
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-money fa-fw"></i> Thêm danh mục sản phẩm
                </h3>
            </div>

            <div class="panel-body">
                <form action="" class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Chủ đề danh mục sản phẩm </label>

                        <div class="col-md-6">
                            <input name="p_cat_title" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-md-3"> Mô tả danh mục sản phẩm </label>
                        <div class="col-md-6">
                            <textarea type='text' name="p_cat_desc" id="" cols="30" rows="10"
                                class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="control-label col-md-3"></label>
                        <div class="col-md-6">
                            <input type="submit" value="Thêm" name="submit" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

    if (isset($_POST['submit'])) {

        $p_cat_title = $_POST['p_cat_title'];

        $p_cat_desc = $_POST['p_cat_desc'];

        $insert_p_cat = "insert into product_categories (p_cat_title,p_cat_desc) values ('$p_cat_title','$p_cat_desc')";

        $run_p_cat = mysqli_query($conn, $insert_p_cat);

        if ($run_p_cat) {

            echo "<script>alert('Thêm mới danh mục sản phẩm thành công')</script>";

            echo "<script>window.open('index.php?view_p_cats','_self')</script>";
        }
    }

    ?>

<?php } ?>