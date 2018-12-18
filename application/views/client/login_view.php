<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo site_url('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/public/css/homepage.css'); ?>">
    <title>Document</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="content-wrapper main_content" style="min-height: 916px; margin-left: 0px !important;">
            <section class="content row">
                <div class="col-sm-6 col-md-6 col-xs-12">
                    <div class="col-lg-8 col-lg-offset-2">
                        <?php echo $this->session->flashdata('login_message'); ?>
                        <?php echo form_open('client/user/login', array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <h1>Đăng nhập</h1>
                            <h5>Dành cho doanh nghiệp</h5>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Tài khoản', 'identity'); ?>
                            <?php echo form_error('identity'); ?>
                            <?php echo form_input('identity', '', 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Mật khẩu', 'password'); ?>
                            <?php echo form_error('password'); ?>
                            <?php echo form_password('password', '', 'class="form-control"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_submit('login', 'Đăng nhập', 'class="btn btn-primary btn-lg btn-block"'); ?>
                            <a href="<?= base_url('client/user/forgot_password') ?>">Quên mật khẩu</a>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-xs-12">
                    <h4 style="color:red;"><?php echo $this->session->flashdata('register_success'); ?></h4>
                    <div class="col-lg-8 col-lg-offset-2">
                        <?php echo $this->session->flashdata('message'); ?>
                        <?php echo form_open('client/user/register', array('class' => 'form-horizontal')); ?>
                        <div class="form-group">
                            <h4>Doanh nghiệp chưa có tài khoản?</h4>
                            <h1>Đăng ký mới</h1>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Công ty: ', 'companyname'); ?>
                            <?php echo form_error('companyname'); ?>
                            <?php echo form_input('companyname', '', 'class="form-control" style="border: orange 1px solid;"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Mã số thuế: ', 'username'); ?>
                            <?php echo form_error('username'); ?>
                            <?php echo form_input('username', '', 'class="form-control" style="border: orange 1px solid;"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Email: ', 'email'); ?>
                            <?php echo form_error('email'); ?>
                            <?php echo form_input('email', '', 'class="form-control" style="border: orange 1px solid;"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Mật khẩu: ', 'register_password'); ?>
                            <?php echo form_error('register_password'); ?>
                            <?php echo form_password('register_password', '', 'class="form-control" style="border: orange 1px solid;"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Xác nhận mật khẩu: ', 'password_confirm'); ?>
                            <?php echo form_error('password_confirm'); ?>
                            <?php echo form_password('password_confirm', '', 'class="form-control" style="border: orange 1px solid;"'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo form_submit('register', 'Đăng ký', 'class="btn btn-danger btn-lg btn-block"'); ?>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </section>
        </div>
    </section>
</section>
<script src="http://localhost/dangky/assets/admin/js/admin/main.js"></script>

</body>
</html>
