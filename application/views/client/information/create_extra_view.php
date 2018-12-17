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
                    <h1 style="text-align:center;">THÔNG TIN ĐĂNG KÝ</h1>
                </div>
                <?php
                echo form_open_multipart('', array('class' => 'form-horizontal', 'id' => 'extra-form'));
                echo form_hidden('identity', set_value('identity', (isset($exist) ? $exist['identity'] : $identity)));
                ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tên đơn vị', 'website');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('website');
                            echo form_input('website', set_value('website', (isset($exist) ? $exist['website'] : '')), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
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
                            echo form_input('legal_representative', set_value('legal_representative', (isset($exist) ? $exist['website'] : '')), 'class="form-control"');
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
                            echo form_input('lp_position', set_value('lp_position', (isset($exist) ? $exist['website'] : '')), 'class="form-control"');
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
                            echo form_input('lp_email', set_value('lp_email', (isset($exist) ? $exist['website'] : '')), 'class="form-control"');
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
                            echo form_input('lp_phone', set_value('lp_phone', (isset($exist) ? $exist['lp_phone'] : '')), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tên người liên hệ với BTC', 'connector');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('connector');
                            echo form_input('connector', set_value('connector', (isset($exist) ? $exist['connector'] : '')), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Chức danh', 'c_position');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('c_position');
                            echo form_input('c_position', set_value('c_position', (isset($exist) ? $exist['c_position'] : '')), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Email', 'c_email');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('c_email');
                            echo form_input('c_email', set_value('c_email', (isset($exist) ? $exist['c_email'] : '')), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Di động', 'c_phone');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('c_phone');
                            echo form_input('c_phone', set_value('c_phone', (isset($exist) ? $exist['c_phone'] : '')), 'class="form-control"');
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
                            echo form_input('link', set_value('link', (isset($exist) ? $exist['link'] : '')), 'class="form-control"');
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
                        <?php
                        echo form_submit('submit', 'Hoàn thành', 'class="btn btn-primary pull-left" style="width:40%"');
                        echo form_close();
                        ?>
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