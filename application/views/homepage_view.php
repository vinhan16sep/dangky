<!--
<div class="content-wrapper">
    <section class="content row">
        <a href="<?php echo base_url('admin/dashboard') ?>">Admin page</a>
        <a href="<?php echo base_url('client/dashboard') ?>">Client page</a>
        <a href="<?php echo base_url('client/user/login') ?>">Login as client</a>
    </section>
</div>
-->

<link rel="stylesheet" href="<?php echo site_url('assets/public/css/homepage.css'); ?>">

<section class="main_content container-fluid">
    <div class="megatron">
        <div class="container">
            <img src="<?php echo site_url('assets/public/img/vinasaBanner.png') ?>">
            <h1>Cổng đăng ký danh hiệu Sao Khuê</h1>
            <p></p>
            <ul class="nav nav-pills nav-justified">
<!--                <li style="border-right:1px solid orange;">-->
<!--                    <a href="--><?php //echo base_url('admin/user/login') ?><!--"><h4>Admin</h4></a>-->
<!--                </li>-->
                <li>
                    <a href="<?php echo base_url('member/user/login') ?>"><h4>Hội đồng đánh giá</h4></a>
                </li>
                <li style="border-left:1px solid orange;">
                    <a href="<?php echo base_url('client/user/login') ?>"><h4>Doanh nghiệp</h4></a>
                </li>
            </ul>
        </div>
    </div>
</section>