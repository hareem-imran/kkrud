<!DOCTYPE html>
<html>
<head>
    <title>Add New</title>
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
</head>
<body>
<div class="container">

    <div class="row justify-content-md-center">
        <div class="col col-lg-12">
            <h3>Add New Category:</h3>
            <a href="<?php echo site_url('category');?>" class ="btn btn-success btn-sm"><i class="fa fa-chevron-left"></i> Back</a><hr/>
            <form action="<?php echo site_url('category/save_category');?>" method="post">

                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control" name="category_name" placeholder="Category Name" required>
                </div>



                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="category_image" required>
                </div>



                <br>







                <button class="btn btn-success" type="submit">Save Category</button>
                <a href="<?php echo site_url('category');?>" class ="btn btn-success">Cancel</a>
                <hr/>

            </form>
        </div>
    </div>

</div>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>

</body>
</html>