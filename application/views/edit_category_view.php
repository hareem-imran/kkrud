<!DOCTYPE html>
<html>
<head>
    <title>Edit Recipe</title>
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
</head>
<body>
<div class="container">

    <div class="row justify-content-md-center">
        <div class="col col-lg-12">
            <h3>Edit Category:</h3>
            <a href="<?php echo site_url('recipe');?>" class ="btn btn-success btn-sm"><i class="fa fa-chevron-left"></i> Back</a><hr/>
            <form action="<?php echo site_url('category/update_category');?>" method="post">

                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control" name="category_name" placeholder="Category Name" required value="">
                </div>



                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="category_image" required>
                </div>




                <input type="hidden" name="category_id" value="<?php echo $category_id?>" required>
                <button class="btn btn-success" type="submit">Update Category</button>
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

        });

        //load data for edit
        function get_data_edit(){
            var category_id = $('[name="category_id"]').val();
            $.ajax({
                url : "<?php echo site_url('category/get_data_edit');?>",
                method : "POST",
                data :{category_id :category_id},
                async : true,
                dataType : 'json',
                success : function(data){
                    $.each(data, function(i, item){
                        $('[name="category_name"]').val(data[i].category_name).trigger('change');
                        $('[name="category_image"]').val(data[i].category_image).trigger('change');
                }

            });
        }

    });
</script>
<!--<script>-->
<!---->
<!--    CKEDITOR.replace('recipe_ing');-->
<!--    var field = CKEDITOR.instances.recipe_ing.getData();-->
<!---->
<!---->
<!--    //   ,{-->
<!--    //         width:"1110px",-->
<!--    //         height:"200px"-->
<!--    //          });-->
<!---->
<!--</script>-->
<!--<script>-->
<!--    CKEDITOR.replace('recipe_method',{-->
<!--        width:"1110px",-->
<!--        height:"200px"-->
<!--    });-->
<!--</script>-->


</body>
</html>