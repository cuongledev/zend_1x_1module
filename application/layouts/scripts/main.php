<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="icon" href="../../favicon.ico">

    <?php echo $this->headTitle();?>
    <?php echo $this->headMeta();?>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo PUBLIC_URL; ?>/css/bootstrap.min.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!--HEADER-->
<?php
echo $this->render('header.phtml');
?>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">



        <div class="col-md-4 left-content">

            <div class="list-group">
                <a href="#" class="list-group-item active">
                    Category
                </a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>

        </div>

        <div class="col-md-8 right-contennt">


            <div class="row">



                <!-- Content list products-->
                <?php echo $this->layout()->content;?>

                <!--End content list products -->



            </div>


        </div>













    </div>

<!--Footer-->
    <?php
    echo $this->render('footer.phtml');
    ?>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="<?php echo PUBLIC_URL; ?>/js/bootstrap.min.js"></script>
</body>
</html>
