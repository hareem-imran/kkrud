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
            <h3>Add New Product:</h3>
            <a href="<?php echo site_url('recipe');?>" class ="btn btn-success btn-sm"><i class="fa fa-chevron-left"></i> Back</a><hr/>
            <form action="<?php echo site_url('product/save_product');?>" method="post">

                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Product Name" required>
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="category" id="category" required>
                        <option value="">No Selected</option>
                        <?php foreach($category as $row):?>
                            <option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
                        <?php endforeach;?>
                    </select>
                </div>


                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="product_image" required>
                </div>


<!--     -->
                <br>







                <button class="btn btn-success" type="submit">Save Product</button>
                <a href="<?php echo site_url('recipe');?>" class ="btn btn-success">Cancel</a><hr/>

            </form>
        </div>
    </div>

</div>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('#category').change(function(){
            var id=$(this).val();

            return false;
        });

    });
</script>

</body>
</html>