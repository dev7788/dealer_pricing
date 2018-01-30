<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php $setting = setting_all();?>

    <link rel="icon" href="<?php echo base_url((setting_all('favicon'))?'assets/images/'.setting_all('favicon'):'assets/images/favicon.ico');?>">

    <title><?php echo (setting_all('website'))?setting_all('website'):'Home';?></title>

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css');?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/skin-black-light.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/skin-black-light.css');?>">
    <!--  <link rel="stylesheet" href="<?php echo base_url('assets/css/blue.css');?>">-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css');?>">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <div class="my-header"></div>
        <form class="form" role="form">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="project-name" class="control-label">Project Name/Address</label>
                        <input type="text" name="project-name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="height" class="control-label">Height(Inches)</label>
                        <input type="text" name="height" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="width" class="control-label">Width(Inches)</label>
                        <input type="text" name="width" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="panel-number" class="control-label">Pannel Number</label>
                        <input type="text" name="panel-number" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="panel-width" class="control-label">Panel Width</label>
                        <input type="text" name="panel-width" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="single-monolithic">Single Monolithic</label>
                        <input type="text" name="single-monolithic" class="form-control" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" class="control-label">
                        <label for="single-laminated">Single Laminated</label>
                        <input type="text" name="single-laminated" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="double-glazed">Double Glazed</label>
                        <input type="text" name="double-glazed" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="double-366">Double 366</label>
                        <input type="text" name="double-366" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="triple-366">Triple 366</label>
                        <input type="text" name="triple-366" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="opening-inwards">Opening inwards</label>
                        <input type="text" name="opening-inwards" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="opening-outwards">Opening outwards</label>
                        <input type="text" name="opening-outwards" class="form-control" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" class="control-label">
                        <label for="opening-right">Opening right</label>
                        <input type="text" name="opening-right" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="opening-left">Opening left</label>
                        <input type="text" name="opening-left" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="opening-both">Opening both sides</label>
                        <input type="text" name="opening-both" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="straight">Straight</label>
                        <input type="text" name="straight" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="curved">Curved</label>
                        <input type="text" name="curved" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="corner">Corner</label>
                        <input type="text" name="corner" class="form-control" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" class="control-label">
                        <label for="fully-recessed">Fully Recessed</label>
                        <input type="text" name="fully-recessed" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="partial-recess">Partial Recess</label>
                        <input type="text" name="partial-recess" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="top-amount">Top amount</label>
                        <input type="text" name="top-amount" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="black-powdercoat">Black powdercoat</label>
                        <input type="text" name="black-powdercoat" class="form-control" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="bronze-anodized">Bronze Anodized</label>
                        <input type="text" name="bronze-anodized" class="form-control" />
                    </div>
                </div>
        </form>
    </div>
</body>
</html>