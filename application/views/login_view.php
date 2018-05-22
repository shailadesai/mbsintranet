
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
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

    <!-- <script type="text/javascript" src="<?php echo base_url();?>assets2/https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="<?php echo base_url();?>assets2/index.html">
                        <img class="align-content" src="<?php echo base_url();?>assets2/images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="<?php echo base_url();?>index.php/login/login_form" method="post" name="User">
                        <div class="form-group">
                            <label></label>
                            <input type="text" size="40" name="userName" class="form-control" placeholder="UserName" value="<?php echo set_value('userName');?>" class="inputan" <?php echo form_error('userName');?>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input type="password" size="40" name="password" placeholder="Password" class="form-control" value="<?php echo set_value('password');?>" <?php echo form_error('password');?>
                        </div>
                    
<div class="form-group">
  <label></label>
<select name="position" class="form-control">


<option value="1">Admin</option>

<option value="2">Sales</option>

<option value ='3'>Creative</option>
<option value='4'> Traffic</option>
<option value='5'> Production </option>
<option value = '6'> Announcer</option>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="<?php echo base_url();?>assets2/#">Forgotten Password?</a>
                            </label>

                        </div>
                        <input type="submit" name="login" vaue="Login" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in
                        <div class="social-login-content">
                            <div class="social-button">
                               
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="<?php echo site_url('Registration/index');?>" > Sign Up Here</a></p>
                        </div>
                   
                </div>
            </div>
        </div>
         </form>
    </div>


    <script src="<?php echo base_url();?>assets2/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>assets2/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets2/assets/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assets2/assets/js/main.js"></script>


</body>
</html>
