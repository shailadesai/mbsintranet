<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url();?>assets2/apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets2/favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url();?>assets2/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets2/assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="<?php echo base_url();?>assets/https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="<?php echo base_url();?>assets2/index.html">
                        <!--<img class="align-content" src="<?php echo base_url();?>assets/images/capture.png" alt="">-->
                    </a>
                </div>
                <div class="login-form">
                    <form action="<?php echo site_url('Registration/registration_form'); ?>" method="post">
                        <div class="form-group">
                            <input type="text" name="userName" class="form-control" <?php echo form_input(array('id'=>'userName', 'name'=>'userName', 'placeholder' => 'User Name', 'size'=>25));?>
                        </div>
                        <div class="form-group">
                        
                            <input type="text" name="password" class="form-control" <?php echo form_input(array('id'=>'password', 'name'=>'password', 'placeholder' => 'Password', 'size'=>25));?>
                           
                        </div>
                        <div class="form-group">
                            <input type="text" name="contactNumber" class="form-control" <?php echo form_input(array('id'=>'contactNumber', 'name'=>'contactNumber', 'placeholder' => 'Contact Number with Ext.', 'size'=>25));?>
                           
                        </div>
                       <!-- <div class="form-group">
                            <input type="text" name="last_name" class="form-control" <?php echo form_input(array('id'=>'last_name', 'name'=>'last_name', 'placeholder' => 'last_name', 'size'=>25));?>
                           
                        </div>-->
  
                        <div class ="form-group">
                            <select name="position" class="form-control">

                            <option value="1">admin</option>

                            <option value="2">Sales</option>

                            <option value ='3'>Creative</option>
                            <option value='4'> Traffic</option>
                            <option value='5'> Production </option>
                            <option value = '6'> Announcer</option>
                        </select>
                        </div>
                        

                        <div class ="form-group">
                            <select name="market" class="form-control">

                            <option value="1">Charletown</option>

                            <option value="2">Halifax</option>

                            <option value ='3'>PEI</option>
                            <option value='4'> Kentville</option>
                            <option value='5'> stjohn </option>
                            <option value = '6'> NB</option>
                        </select>
                        </div>
                       
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        <div class="social-login-content">
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="<?php echo base_url();?>assets2/#"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url();?>assets/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/assets/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assets/assets/js/main.js"></script>


</body>
</html>
