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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css');?>">
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

    <script src="<?php echo base_url('assets/js/home.js')?>"></script>
</head>
<body>
    <div class="container">
        <form class="form" role="form">
            <div class="row" style="margin-top: 30px;">
                <div class="form-group col-md-3">
                    <label for="project-name" class="control-label ">Project Name/Address</label>
                    <input type="text" name="project-name" class="form-control project_attr" />
                </div>
                <div class="form-group col-md-3">
                    <label for="base-price" class="control-label">Base Price</label>
                    <input type="number" name="base-price" id="base_price" class="form-control project_attr" />
                </div>
            </div>
            <div class="row input-box">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="height" class="control-label">Height(Inches)</label>
                        <input type="number" name="height" id="height" class="form-control project_attr" />
                    </div>
                    <div class="form-group">
                        <label for="width" class="control-label">Width(Inches)</label>
                        <input type="number" name="width" id="width" class="form-control project_attr" />
                    </div>
                    <div class="form-group">
                        <label for="panel-number" class="control-label">Pannel Number</label>
                        <input type="number" name="panel-number" id="panel_number" class="form-control project_attr" />
                    </div>
                    <div class="form-group">
                        <label for="panel-width" class="control-label">Panel Width</label>
                        <input type="number" name="panel-width" id="panel_width" class="form-control project_attr" disabled/>
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="single-monolithic">Single Monolithic</label>
                        <input type="number" name="single-monolithic" id="single_monolithic" class="form-control project_attr" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="single-laminated">Single Laminated</label>
                        <input type="number" name="single-laminated" id="single_laminated" class="form-control project_attr" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" class="control-label">
                        <label for="double-glazed">Double Glazed</label>
                        <input type="number" name="double-glazed" id="double_glazed" class="form-control project_attr" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="double-txx">Double 366</label>
                        <input type="number" name="double-txx" id="double_txx" class="form-control project_attr" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="triple-glazed">Triple glazed</label>
                        <input type="number" name="triple-glazed" id="triple_glazed" class="form-control project_attr" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="opening-inwards">Opening inwards</label>
                        <input type="number" name="opening-inwards" id="opening_inwards" class="form-control project_attr" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="opening-outwards">Opening outwards</label>
                        <input type="number" name="opening-outwards" id="opening_outwards" class="form-control project_attr" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="opening-right">Opening right</label>
                        <input type="number" name="opening-right" id="opening_right" class="form-control project_attr" />
                    </div>
                </div>
                <div class="col-md-3">

                    <div class="form-group" class="control-label">
                        <label for="opening-left">Opening left</label>
                        <input type="number" name="opening-left" id="opening_left" class="form-control project_attr" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="opening-both">Opening both sides</label>
                        <input type="number" name="opening-both" id="opening_both" class="form-control project_attr" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="straight">Straight</label>
                        <input type="number" name="straight" id="straight" class="form-control project_attr" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="curved">Curved</label>
                        <input type="number" name="curved" id="curved" class="form-control project_attr" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="corner">Corner</label>
                        <input type="number" name="corner" id="corner" class="form-control project_attr" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="fully-recessed">Fully Recessed</label>
                        <input type="number" name="fully-recessed" id="fully_recessed" class="form-control project_attr" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" class="control-label">
                        <label for="partial-recess">Partial Recess</label>
                        <input type="number" name="partial-recess" id="partial_recess" class="form-control project_attr" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="top-amount">Top amount</label>
                        <input type="number" name="top-amount" id="top_amount" class="form-control project_attr" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="black-powdercoat">Black powdercoat</label>
                        <input type="number" name="black-powdercoat" id="black_powdercoat" class="form-control project_attr" />
                    </div>
                    <div class="form-group" class="control-label">
                        <label for="bronze-anodized">Bronze Anodized</label>
                        <input type="text" name="bronze-anodized" id="bronze_anodized" class="form-control project_attr" />
                    </div>
                </div>
            </div>

            <div class="row output-box">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <p><label>Total job cost:</label> <span id="total_job_cost"></span></p>
                    <p><label>Per lineal ft:</label> <span id="per_lineal_ft"></span></p>
                    <br>
                    <p><label>Display Price:</label> <span id="display_price"></span></p>
                </div>
                <div class="col-md-4">
                    <p><label>Dealeer Margin:</label> <input id="dealer_margin" class="project_attr form-control" type="number" name="dealer_margin"/> </p>
                    <p><label>Retail Price:</label> <span id="retail_price"></span></p>
                    <br>
                    <p><label>Dealer Profit:</label> <span id="dealer_profit"></span></p>
                </div>
            </div>

        </form>
    </div>
</body>
</html>