

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="K&amp;N&#39;s Pakistan">
    <meta name="msvalidate.01" content="7DE4861C1DB433BFBBC05D4B6AA06E17" />
    <meta property="og:title" content="K&amp;N&#39;s&#174; - Safe and Healthy Chicken"/>
    <meta property="og:url" content="//kandns.pk/index.html"/>
    <meta property="og:site_name" content="K&amp;N&#39;s Pakistan"/>
    <meta property="og:image" content="//kandns.pk/images/profile.png" />
    <title>


        <?php echo $url_slug['recipe_title']; ?>







        | SmartCooking with K&amp;N&#39;s&#174;</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/recipe_template/css/main.css'?>">
    <link href="<?php echo base_url().'assets/recipe_template/css/style.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/recipe_template/css/navbar-static-top.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/recipe_template/css/demo-page.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/recipe_template/css/hover.css'?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url().'assets/recipe_template/css/animate.min.css'?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/recipe_template/css/icomoon.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/recipe_template/css/simple-line-icons.css'?>">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'assets/recipe_template/css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'assets/recipe_template/css/navbar-static-top.css'?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/recipe_template/css/slick/slick.css'?>">



    <script src="<?php echo base_url().'assets/recipe_template/js/ie-emulation-modes-warning.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/recipe_template/js/popup.js'?>"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url().'assets/recipe_template/images/favicon.ico'?>">



    <style>.navbar-default {
            background-color:#ffffff;
            border-color: #ffffff;
        }
        .knlogo {
            height: 70px;
            padding-left: 0px;
            margin-right: 25px;
            text-align: left;
            margin-top: 0 !important;
            margin-left: 0%;
        }
        .method{
            margin: auto;
            text-align: left;
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 14px;
            line-height: 150%;
            padding-top: 12px;
            color: #555!important;
        }
        .ingredients{
            max-width: 100%;
            margin: auto;
            text-align: left;
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 14px;
            line-height: 170%;
            padding-top: 8px;
            color: #555555;
        }
        .ingredientstitle{
            margin:0;
        }
    </style>
</head>
<body style="-moz-user-select: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none;  user-select: none;">


        <!--Header-->
        <?php
        $this->load->view('recipe_template/layouts/header');
        ?>
        <!--/Header-->



<!--Content-->
<div class="container" style="
    text-align: right !important;">
    <div class="icons"><img src="<?php echo base_url().'assets/recipe_template/images/iconserves.jpg'?>" alt="Serves">
        <div>SERVES</div>
        <div style="line-height:150%;font-size:140%; font-family: 'Open Sans', sans-serif; font-weight:400; font-style:normal">
            {{<?php echo $url_slug['recipe_title']; ?>}}
        </div>
    </div>
    <div class="icons"><img src="<?php echo base_url().'assets/recipe_template/images/iconpreperation.jpg'?>" alt="Preparation">
        <div>PREPARATION</div>
        <div style="line-height:150%;font-size:140%; font-family: 'Open Sans', sans-serif; font-weight:400; font-style:normal">
            {{<?php echo $url_slug['recipe_title']; ?>}}
        </div>
    </div>
    <div class="icons"><img src="<?php echo base_url().'assets/recipe_template/images/iconcooking.jpg'?>" alt="Cooking">
        <div>COOKING</div>
        <div style="line-height:150%;font-size:140%; font-family: 'Open Sans', sans-serif; font-weight:400; font-style:normal">
            {{<?php echo $url_slug['recipe_title']; ?>}}
        </div>
    </div>
</div>

<!--ingredients-->
<div class="container">
    <div class="ingredientstitle2">Ingredients</div><br>
    <div class="ingredients" style="padding:0px">
        <ul class="bullet">{{}}</ul>
    </div>

    <div class="ingredientstitle2">Method</div>
    <div class="method">
        {{}}
    </div>


    <div class="ingredientstitle"></div>


           <div class="method"><b>Yield: 300-500 g&nbsp; | &nbsp;Preparation: 20 min&nbsp; | &nbsp;Cooking: 30-40 min</b></div>
         <div class="ingredientstitle2">Ingredients</div><br>
           <div class="ingredients" style="padding:0px">
              <ul class="bullet"></ul>
               </div>
           <div class="ingredientstitle2">Method</div>
          <div class="method"></div><br><br>

    <div class="container">
        <div class="method1" style="display:inline-block">
            <font style="font-size:90%;">SmartCooking with K&amp;N's&nbsp;&gt;&nbsp;</font>
        </div>
        <div class="method1" style="display:inline-block">
            <font style="font-size:100%; font-family: 'Open Sans', sans-serif; font-weight:600; font-style:italic">
                <a href="https://kandns.pk/app">
                    Download the FREE App
                    <img src="<?php echo base_url().'assets/recipe_template/images/downarrow.png'?>" style="width:16px; height:16px">
                </a>
            </font>
        </div>
        <br>
        <div class="method1" style="display:inline-block">
            <font style="font-size:100%; font-family: 'Open Sans', sans-serif; font-weight:400; font-style:italic">
                &nbsp;
                <a style="text-decoration:none; color: #df2029;" href="https://kandns.pk/homedelivery/index.html">
                    <u>Free Home Delivery</u>
                </a>
            </font>
        </div>
    </div>
</div>






<!-- Youtube -->




<div style="width:100%; background-color:#f7f7f7">
    <div class="ifr">

        <iframe width="100%" height="100%" src='{{<?php echo get_recipe_by_url($url_slug)->recipe_youtube;?>}}' frameborder="0"></iframe>

    </div>
    <div style="margin:auto; text-align:center; padding:10px"><font style="margin:10px; font-size:14px; font-family: 'Myriad W01 Lt','Open Sans',arial,sans-serif;">For more recipe videos, subscribe</font>
        <div id="___ytsubscribe_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 115px; height: 24px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 115px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 24px;" tabindex="0" vspace="0" width="100%" id="I0_1555140890137" name="I0_1555140890137" src="https://www.youtube.com/subscribe_embed?usegapi=1&amp;channelid=UCLXSR92aevYRhEzAqtNmNfA&amp;layout=default&amp;count=default&amp;origin=https%3A%2F%2Fkandns.pk&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.Bm-4jPK_K_Y.O%2Fam%3DwQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCMMXwUGT-ibBQiFZc_81sj2-0GxtQ%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1555140890137&amp;_gfid=I0_1555140890137&amp;parent=https%3A%2F%2Fkandns.pk&amp;pfname=&amp;rpctoken=11427117" data-gapiattached="true"></iframe></div><br><br>
    </div>
    <script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.en.Bm-4jPK_K_Y.O/m=gapi_iframes_style_bubble/exm=auth,ytsubscribe/rt=j/sv=1/d=1/ed=1/am=wQ/rs=AGLTcCMMXwUGT-ibBQiFZc_81sj2-0GxtQ/cb=gapi.loaded_2" async=""></script><script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.en.Bm-4jPK_K_Y.O/m=auth/exm=ytsubscribe/rt=j/sv=1/d=1/ed=1/am=wQ/rs=AGLTcCMMXwUGT-ibBQiFZc_81sj2-0GxtQ/cb=gapi.loaded_1" async=""></script>

    <script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.en.Bm-4jPK_K_Y.O/m=ytsubscribe/rt=j/sv=1/d=1/ed=1/am=wQ/rs=AGLTcCMMXwUGT-ibBQiFZc_81sj2-0GxtQ/cb=gapi.loaded_0" async=""></script><script src="https://apis.google.com/js/platform.js" gapi_processed="true"></script>
</div>

















        <!--footer-->
        <?php
        $this->load->view('recipe_template/layouts/footer');
        ?>
        <!--/footer-->






<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>



<script src="<?php echo base_url().'assets/recipe_template/js/main.js'?>"></script>
<script src="<?php echo base_url().'assets/recipe_template/js/bootstrap.min.js'?>"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/recipe_template/css/slick/slick.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/recipe_template/css/slick/slick.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/recipe_template/js/wow.min.js'?>"></script>

<script>
    $(document).ready(function(){
        $('.slidercontainer').slick({

        });
    });
</script>
<script>
    $('.autoplay').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        fade: true,
        dots: false,
        autoplaySpeed: 5500,
    });

    $('.autoplay').slick({
        dots: true,
        infinite: true,
        speed: 2500,
        fade: true,
        cssEase: 'linear'
    });
</script>
<script>
    function showDescription(show,hide1,hide2)
    {
        //alert(!$('#'+show).is(':visible'));
        if(!$('#'+show).is(':visible'))
        {
            $('#'+show).show(50,'swing');
            $('#'+hide1).hide(50,'swing');
            $('#'+hide2).hide(50,'swing');
        }else
        {
            $('#'+show).hide(50,'swing');
            $('#'+hide1).hide(50,'swing');
            $('#'+hide2).hide(50,'swing');
        }
    }

    // Y axis scroll speed
    var velocity = 0.5;

    function update(){
        var pos = $(window).scrollTop();
        $('.containerscroll').each(function() {
            var $element = $(this);
            // subtract some from the height b/c of the padding
            var height = $element.height()-18;
            $(this).css('backgroundPosition', '50% ' + Math.round((height - pos) * velocity) + 'px');
        });
    };

    $(window).bind('scroll', update);
</script>



</body>
</html>
