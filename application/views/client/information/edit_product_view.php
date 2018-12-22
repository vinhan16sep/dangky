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
                    <h1 style="text-align:center;">THÔNG TIN SẢN PHẨM</h1>
                </div>
                <?php
                echo form_open_multipart('', array('class' => 'form-horizontal', 'id' => 'product-form'));
                ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tên SP/dịch vụ/giải pháp/ứng dụng', 'name');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('name');
                            echo form_input('name', set_value('name', $product['name']), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Đăng ký tham gia lĩnh vực', 'service');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            $service = json_decode($product['service']);
                            // print_r($series);die;
                            $options_1 = array(
                                'Chính phủ điện tử' => 'Chính phủ điện tử',
                                'Quản lý doanh nghiệp' => 'Quản lý doanh nghiệp',
                                'Kế toán, tài chính, ngân hàng' => 'Kế toán, tài chính, ngân hàng',
                                'Quản lý bán hàng và chuỗi cung ứng' => 'Quản lý bán hàng và chuỗi cung ứng',
                                'Giáo dục, đào tạo' => 'Giáo dục, đào tạo',
                                'Giao thông vận tải' => 'Giao thông vận tải',
                                'Y tế, chăm sóc sức khỏe và làm đẹp' => 'Y tế, chăm sóc sức khỏe và làm đẹp',
                                'Nông nghiệp và chế biến thực phẩm' => 'Nông nghiệp và chế biến thực phẩm',
                                'Du lịch, quản lý nhà hàng/khách sạn' => 'Du lịch, quản lý nhà hàng/khách sạn',
                                'Công tác nhân sự, văn phòng' => 'Công tác nhân sự, văn phòng',
                                'Viễn thông' => 'Viễn thông',
                                'Nền tảng và Công cụ ứng dụng' => 'Nền tảng và Công cụ ứng dụng',
                                'Thanh toán điện tử' => 'Thanh toán điện tử ',
                                'Thương mại điện tử' => 'Thương mại điện tử',
                                'Giải trí điện tử' => 'Giải trí điện tử',
                                'Bảo mật và an toàn thông tin' => 'Bảo mật và an toàn thông tin',
                                'Bảo vệ môi trường và phát triển bền vững' => 'Bảo vệ môi trường và phát triển bền vững',
                                'Các lĩnh vực khác' => 'Các lĩnh vực khác'
                            );
                            $options_4 = array(
                                'Gia công xuất khẩu phần mềm' => 'Gia công xuất khẩu phần mềm',
                                'BPO' => 'BPO',
                                'Data Center' => 'Data Center',
                                'Đào tạo CNTT' => 'Đào tạo CNTT',
                                'Nội dung số' => 'Nội dung số',
                                'Điện toán đám mây và Big Data' => 'Điện toán đám mây và Big Data',
                                'An toàn thông tin' => 'An toàn thông tin',
                                'Các lĩnh vực khác' => 'Các lĩnh vực khác'
                            );
                            echo form_checkbox('group_1', '', '', 'class="btn-group-1"');
                            echo '<span style="color:blue">Các sản phẩm, giải pháp phần mềm tiêu biểu, được bình xét theo 18 lĩnh vực ứng dụng chuyên ngành</span><br>';
                            echo "<div class='row group-1' style='display:none; margin-left: 20px'>";
                            foreach ($options_1 as $key => $value) {
                                if(!is_null($service) && $service != null){
                                    echo form_checkbox('service[]', $value, (in_array($value, $service, '')? true : false), 'class="btn-checkbox-group-1"');
                                    echo $key.'<br>';
                                }else{
                                    echo form_checkbox('service[]', $value, false, 'class="btn-checkbox-group-1"');
                                    echo $key.'<br>';
                                }
                            }
                            echo "</div>";
                            echo form_checkbox('service[]', 'Các sản phẩm, giải pháp ứng dụng công nghệ 4.0', ($service && in_array('Các sản phẩm, giải pháp ứng dụng công nghệ 4.0', $service, '') ? true : false), 'class="btn-checkbox"');
                            echo '<span style="color:blue">Các sản phẩm, giải pháp ứng dụng công nghệ 4.0</span><br>';
                            echo form_checkbox('service[]', 'Các sản phẩm, giải pháp phần mềm mới', ($service && in_array('Các sản phẩm, giải pháp phần mềm mới', $service, '')? true : false), 'class="btn-checkbox"');
                            echo '<span style="color:blue">Các sản phẩm, giải pháp phần mềm mới</span><br>';
                            echo form_checkbox('group_4', '', false, 'class="btn-group-4"');
                            echo '<span style="color:blue">Các dịch vụ CNTT</span><br>';
                            echo "<div class='row group-4' style='display:none; margin-left: 20px'>";
                            foreach ($options_4 as $key => $value) {
                                if(!is_null($service) && $service != null){
                                    echo form_checkbox('service[]', $value, (in_array($value, $service, '')? true : false), 'class="btn-checkbox-group-4"');
                                    echo $key.'<br>';
                                }else{
                                    echo form_checkbox('service[]', $value, false, 'class="btn-checkbox-group-4"');
                                    echo $key.'<br>';
                                }
                            }
                            echo "</div>";
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Mô tả các công năng của sản phẩm', 'functional');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('functional');
                            echo form_textarea(array(
                                'name' => 'functional',
                                'id' => 'functional',
                                'value' => set_value('functional', $product['functional']),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Các công nghệ và quy trình chất lượng sử dụng để phát triển sản phẩm', 'process');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('process');
                            echo form_textarea(array(
                                'name' => 'process',
                                'id' => 'process',
                                'value' => set_value('process', $product['process']),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Bảo mật của sản phẩm', 'security');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('security');
                            echo form_textarea(array(
                                'name' => 'security',
                                'id' => 'security',
                                'value' => set_value('security', $product['security']),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Các ưu điểm nổi trội của SP/GP/DV', 'positive');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('positive');
                            echo form_textarea(array(
                                'name' => 'positive',
                                'id' => 'positive',
                                'value' => set_value('positive', $product['positive']),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('So sánh với các SP/GP/DV khác', 'compare');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('compare');
                            echo form_textarea(array(
                                'name' => 'compare',
                                'id' => 'compare',
                                'value' => set_value('compare', $product['compare']),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Doanh thu của SP/GP/DV năm 2016', 'income_2016');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('income_2016');
                            echo form_input('income_2016', set_value('income_2016', $product['income_2016']), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Doanh thu của SP/GP/DV năm 2017', 'income_2017');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('income_2017');
                            echo form_input('income_2017', set_value('income_2017', $product['income_2017']), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Thị phần của SP/giải pháp/DV', 'area');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('area');
                            echo form_textarea(array(
                                'name' => 'area',
                                'id' => 'area',
                                'value' => set_value('area', $product['area']),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Ngày thương mại hoá/ra mắt dịch vụ', 'open_date');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('open_date');
                            echo form_input('open_date', set_value('open_date', $product['open_date']), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Giá SP/GP/DV', 'price');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('price');
                            echo form_input('price', set_value('price', $product['price']), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('1 số khách hàng tiêu biểu', 'customer');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('customer');
                            echo form_textarea(array(
                                'name' => 'customer',
                                'id' => 'customer',
                                'value' => set_value('customer', $product['customer']),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Dịch vụ sau bán hàng', 'after_sale');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('after_sale');
                            echo form_textarea(array(
                                'name' => 'after_sale',
                                'id' => 'after_sale',
                                'value' => set_value('after_sale', $product['after_sale']),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Đội ngũ phát triển sp/gp (bao nhiêu người, trình độ, trong bao lâu...)', 'team');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('team');
                            echo form_textarea(array(
                                'name' => 'team',
                                'id' => 'team',
                                'value' => set_value('team', $product['team']),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Các giải thưởng/DH đã nhận được', 'award');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('award');
                            echo form_textarea(array(
                                'name' => 'award',
                                'id' => 'award',
                                'value' => set_value('award', $product['award']),
                                'rows' => '3',
                                'class' => "form-control"
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Giấy chứng nhận bản quyền/cam kết bản quyền', 'certificate');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <p style="color:red;">Ghi chú: Nếu chưa có giấy chứng nhận bản quyền, thì tải mẫu Cam kết bản quyền tại đây, khai thông tin, ký, đóng dấu và gửi lại bản cứng cho ban tổ chức.</p>
                            <a class="btn btn-warning" href="<?php echo site_url('Phieu-dang-ky.docx') ?>" target="_blank">Tải mẫu Cam kết bản quyền</a>
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
    // if($('input[name="is_submit"]').is(':checked') === true){
    //     $('.submit-extra-form').show();
    // }else{
    //     $('.submit-extra-form').hide();
    // };
    $('.btn-checkbox-group-1').each(function(){
        if($('.btn-checkbox-group-1').is(':checked') === true){
            $('.btn-group-1').attr('checked', true);
            $('.group-1').slideDown();
        }else{
            $('.btn-group-1').attr('checked', false);
        }
    });
    $('.btn-checkbox-group-4').each(function(){
        if($('.btn-checkbox-group-4').is(':checked') === true){
            $('.btn-group-4').attr('checked', true);
            $('.group-4').slideDown();
        }else{
            $('.btn-group-4').attr('checked', false);
        }
    });
    $('.btn-group-1').click(function(){
        if($(this).prop("checked") == true){
            $('.group-1').slideDown();
        }else{
            $('.group-1').slideUp();
            $('.btn-checkbox-group-1').attr('checked', false);
        }
        
    })
    $('.btn-group-4').click(function(){
        if($(this).prop("checked") == true){
            $('.group-4').slideDown();
        }else{
            $('.group-4').slideUp();
        }
        
    })
    
    // function make_sure(){
    //     if($('input[name="is_submit"]').is(':checked') === true){
    //         $('.submit-extra-form').show();
    //     }else{
    //         $('.submit-extra-form').hide();
    //     }
    // }
    $.validator.addMethod(
        "dateFormat",
        function ( value, element ) {
            var bits = value.match( /([0-9]+)/gi ), str;
            if ( ! bits )
                return this.optional(element) || false;
            str = bits[ 1 ] + '/' + bits[ 0 ] + '/' + bits[ 2 ];
            return this.optional(element) || !/Invalid|NaN/.test(new Date( str ));
        },
        "Nhập định dạng ngày tháng dd/mm/yyyy"
    );
    $('#product-form').validate({
        rules: {
            name: {
                required: true
            },
            service: {
                required: true
            },
            functional: {
                required: true
            },
            process: {
                required: true
            },
            security: {
                required: true
            },
            positive: {
                required: true
            },
            compare: {
                required: true
            },
            income_2016: {
                required: true,
                number: true,
                maxlength: 8,
            },
            income_2017: {
                required: true,
                number: true,
                maxlength: 8,
            },
            area: {
                required: true
            },
            open_date: {
                required: true,
                dateFormat : true
            },
            price: {
                required: true
            },
            customer: {
                required: true
            },
            after_sale: {
                required: true
            },
            team: {
                required: true
            },
            award: {
                required: true
            },
            certificate: {
                required: true
            }
        },
        messages :{
            name: {
                required : 'Cần nhập Tên SP/dịch vụ/giải pháp/ứng dụng'
            },
            service: {
                required: 'Cần nhập lĩnh vực'
            },
            functional: {
                required: 'Cần nhập Mô tả các công năng của sản phẩm'
            },
            certificate: {
                required: 'Cần nhập công năng của sản phẩm'
            },
            process: {
                required: 'Cần nhập công nghệ và quy trình chất lượng'
            },
            security: {
                required: 'Cần nhập Bảo mật của sản phẩm'
            },
            positive: {
                required: 'Cần nhập Các ưu điểm nổi trội'
            },
            compare: {
                required: 'Cần nhập phần So sánh'
            },
            income_2016: {
                required: 'Cần nhập Doanh thu của SP/GP/DV năm 2016',
                number: 'Doanh thu của SP/GP/DV năm 2016 phải là số',
                maxlength: 'Doanh thu của SP/GP/DV năm 2017 chỉ tối đa 8 số',
            },
            income_2017: {
                required: 'Cần nhập Doanh thu của SP/GP/DV năm 2017',
                number: 'Doanh thu của SP/GP/DV năm 2017 phải là số',
                maxlength: 'Doanh thu của SP/GP/DV năm 2017 chỉ tối đa 8 số',
            },
            area: {
                required: 'Thị phần của SP/giải pháp/DV'
            },
            open_date: {
                required: 'Ngày thương mại hoá/ra mắt dịch vụ',
            },
            price: {
                required: 'Cần nhập Giá SP/GP/DV'
            },
            customer: {
                required: 'Cần nhập 1 số khách hàng tiêu biểu'
            },
            after_sale: {
                required: 'Cần nhập Dịch vụ sau bán hàng'
            },
            team: {
                required : 'Cần nhập Đội ngũ phát triển'
            },
            award: {
                required: 'Cần nhập Các giải thưởng/DH đã nhận được'
            },
            certificate: {
                required: 'Cần nhập Giấy chứng nhận bản quyền/cam kết bản quyền'
            }
        }
    });
</script>