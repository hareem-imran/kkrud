<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
</head>
<body>
<div class="container">

    <div class="row justify-content-md-center">
        <div class="col col-lg-12">
            <h3>Edit Product:</h3>
            <a href="<?php echo site_url('product');?>" class ="btn btn-success btn-sm"><i class="fa fa-chevron-left"></i> Back</a><hr/>
            <form action="<?php echo site_url('product/update_product');?>" method="post">

                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Product Name" required>
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control category" name="category" id="category" required>
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




                <button class="btn btn-success" type="submit">Update Product</button>
                <a href="<?php echo site_url('recipe');?>" class ="btn btn-success">Cancel</a>
                <hr/>

            </form>
        </div>
    </div>

</div>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        //call function get data edit
        get_data_edit();

        $('.category').change(function(){
            var id=$(this).val();
            var category_id = "<?php echo $category_id;?>";
            $.ajax({
                url : "<?php echo site_url('product/get_category');?>",
                method : "POST",
                data : {id: id},
                async : true,
                dataType : 'json',
                success: function(data){

                    $('select[name="category"]').empty();

                    $.each(data, function(key, value) {
                        if(category_id==value.category_id){
                            $('select[name="category"]').append('<option value="'+ value.category_id +'" selected>'+ value.category +'</option>').trigger('change');
                        }else{
                            $('select[name="category"]').append('<option value="'+ value.category_id +'">'+ value.category +'</option>');
                        }
                    });

                }
            });
            return false;
        });

        //load data for edit
        function get_data_edit(){
            var product_id = $('[name="product_id"]').val();
            $.ajax({
                url : "<?php echo site_url('product/get_data_edit');?>",
                method : "POST",
                data :{product_id :product_id},
                async : true,
                dataType : 'json',
                success : function(data){
                    $.each(data, function(i, item){
                        $('[name="product_name"]').val(data[i].product_name).trigger('change');
                        $('[name="category"]').val(data[i].product_category_id).trigger('change');
                        $('[name="product_image"]').val(data[i].product_image).trigger('change');
                    });
                }

            });
        }

    });
</script>

</body>
</html>