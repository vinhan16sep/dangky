<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
    .error{
        color: red;
    }
</style>
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content">
        <div class="row modified-mode">
            <div class="col-lg-10 col-lg-offset-0">
                <div class="form-group">
                    <h2 style="text-align:center;">THÔNG TIN CƠ BẢN DOANH NGHIỆP</h2>
                </div>
                <div class="form-group">
                    <h3 style="text-align:center;">Tên công ty: <span style="color:#3c8dbc;"><?php echo $user->company; ?></span></h3>
                    <h3 style="text-align:center;">Mã số thuế: <span style="color:#3c8dbc;"><?php echo $user->username; ?></span></h3>
                </div>
                <?php
                echo form_open_multipart('', array('class' => 'form-horizontal', 'id' => 'extra-form'));
                ?>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tên người đại diện pháp luật', 'legal_representative');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('legal_representative');
                            echo form_input('legal_representative', set_value('legal_representative', $extra['legal_representative']), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Chức danh', 'lp_position');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('lp_position');
                            echo form_input('lp_position', set_value('lp_position', $extra['lp_position']), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Email', 'lp_email');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('lp_email');
                            echo form_input('lp_email', set_value('lp_email', $extra['lp_email']), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Di động', 'lp_phone');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('lp_phone');
                            echo form_input('lp_phone', set_value('lp_phone', $extra['lp_phone']), 'class="form-control"');
                            ?>
                        </div>
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
                            <p>Doanh nghiệp download mẫu phiếu đăng ký ở đây, khai đầy đủ thông tin, ký, đóng dấu, scan, upload và chèn link dưới đây.</p>
                            <a class="btn btn-warning" href="<?php echo site_url('Phieu-dang-ky.docx') ?>" target="_blank">Download mẫu PĐK</a>
                            <br>
                            <br>
                            <?php
                            echo form_error('link');
                            echo form_input('link', set_value('link', $extra['link']), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <br>
<!--                <div class="form-group make-sure">-->
<!--                    <div class="row">-->
<!--                        <div class="col-sm-3 col-md-3 col-sx-12">-->
<!--                        </div>-->
<!--                        <div class="col-sm-9 col-md-9 col-sx-12">-->
<!--                            <p style="color:red;">Chú ý: thông tin đã nhập ở trên sẽ không thể thay đổi sau khi gửi đi.-->
<!--                                <a class="btn btn-default cancel pull-right" href="javascript:window.history.go(-1);">Quay lại</a></p>-->
<!--                            --><?php
//                            echo form_error('link');
//                            $js = 'onClick="make_sure()"';
//                            echo form_label(form_checkbox('is_submit', '', FALSE, $js) . ' Tôi đã chắc chắn về thông tin bên trên.');
//                            ?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="form-group col-sm-12 text-right submit-extra-form">
                    <div class="col-sm-3 col-md-3 col-sx-12">
                    </div>
                    <div class="col-sm-9 col-md-9 col-sx-12">
                        <div>
                            <a style="display: inline;" href="<?php echo base_url('client/information/extra'); ?>" class="btn btn-default pull-left"><b>Quay lại</b></a>
                            <?php echo form_submit('submit', 'Hoàn thành', 'class="btn btn-primary pull-right" style="width:40%;display: inline;"'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
//    if($('input[name="is_submit"]').is(':checked') === true){
//        $('.submit-extra-form').show();
//    }else{
//        $('.submit-extra-form').hide();
//    };
//
//    function make_sure(){
//        if($('input[name="is_submit"]').is(':checked') === true){
//            $('.submit-extra-form').show();
//        }else{
//            $('.submit-extra-form').hide();
//        }
//    }

    $('#extra-form').validate({
        rules: {
            website: {
                required: true
            },
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
            link: {
                required: true
            }
        },
        messages :{
            website: {
                required : 'Cần nhập Tên đơn vị'
            },
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
            link: {
                required: 'Link download PĐK của DN'
            }
        }
    });
</script>