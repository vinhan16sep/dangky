<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
    .error{
        color: red;
    }
</style>
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content">
        <?php if ($this->session->flashdata('need_input_information_first')): ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Thông báo!</strong> <?php echo $this->session->flashdata('need_input_information_first'); ?>
            </div>
        <?php endif ?>
        <div class="row modified-mode">
            <div class="col-lg-10 col-lg-offset-0">
                <div class="form-group">
                    <h2 style="text-align:center;">THÔNG TIN CƠ BẢN CỦA DOANH NGHIỆP</h2>
                </div>
                <div class="form-group">
                    <h3 style="text-align:center;">Tên công ty: <span style="color:#3c8dbc;"><?php echo $user->company; ?></span></h3>
                    <h3 style="text-align:center;">Mã số thuế: <span style="color:#3c8dbc;"><?php echo $user->username; ?></span></h3>
                </div>
                <hr>
                <?php
                echo form_open_multipart('', array('class' => 'form-horizontal', 'id' => 'extra-form'));
                ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Ảnh đại diện', 'avatar');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('avatar');
                            echo form_upload('avatar', set_value('avatar'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tên người đại diện pháp luật <span style="color: red">(*)</span>', 'legal_representative');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('legal_representative');
                            echo form_input('legal_representative', set_value('legal_representative'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Chức danh <span style="color: red">(*)</span>', 'lp_position');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('lp_position');
                            echo form_input('lp_position', set_value('lp_position'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Email <span style="color: red">(*)</span>', 'lp_email');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('lp_email');
                            echo form_input('lp_email', set_value('lp_email'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Di động <span style="color: red">(*)</span>', 'lp_phone');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('lp_phone');
                            echo form_input('lp_phone', set_value('lp_phone'), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-sx-12"><strong>Lưu ý:</strong> <span style="color: red">(*)</span> là các trường cần nhập thông tin</div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Link download PĐK của DN', 'link');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <p>Doanh nghiệp tải mẫu phiếu đăng ký ở đây, khai đầy đủ thông tin, ký, đóng dấu và gửi lại bản cứng cho ban tổ chức.</p>
                            <a class="btn btn-warning" href="<?php echo site_url('Phieu-dang-ky.docx') ?>" target="_blank">Tải mẫu Phiếu đăng ký</a>
                            <br>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group col-sm-12 text-right submit-extra-form">
                    <div class="col-sm-3 col-md-3 col-sx-12">
                    </div>
                    <div class="col-sm-9 col-md-9 col-sx-12">
                        <?php
                        echo form_submit('submit', 'Hoàn thành', 'class="btn btn-primary pull-left" style="width:40%;"');
                        echo form_close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>

    $('#extra-form').validate({
        rules: {
            legal_representative: {
                required: true
            },
            lp_position: {
                required: true
            },
            lp_email: {
                required: true,
                email: true
            },
            lp_phone: {
                required: true,
                digits: true
            },
            connector: {
                required: true
            },
            c_position: {
                required: true
            },
            c_email: {
                required: true,
                email: true
            },
            c_phone: {
                required: true,
                digits: true
            },
            link: {
                required: true
            }
        },
        messages :{
            legal_representative: {
                required: 'Cần nhập Tên người đại diện pháp luật'
            },
            lp_position: {
                required: 'Cần nhập Chức danh'
            },
            lp_email: {
                required: 'Cần nhập Email',
                email: 'Email không hợp lệ'
            },
            lp_phone: {
                required: 'Cần nhập số điện thoại di động',
                digits: 'Số điện thoại di động chỉ chứa ký tự số'
            },
            connector: {
                required: 'Cần nhập Tên người liên hệ với BTC'
            },
            c_position: {
                required: 'Cần nhập Chức danh'
            },
            c_email: {
                required: 'Cần nhập Email',
                email: 'Email không hợp lệ'
            },
            c_phone: {
                required: 'Cần nhập số điện thoại di động',
                digits: 'Số điện thoại di động chỉ chứa ký tự số'
            },
            link: {
                required: 'Link download PĐK của DN'
            }
        }
    });
</script>