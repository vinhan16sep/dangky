<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
    table td{
        vertical-align: middle !important;
    }
    table.table-bordered{
        border:1px solid black;
        margin-top:20px;
    }
    table.table-bordered > thead > tr > th{
        border:1px solid black;
    }
    table.table-bordered > tbody > tr > td{
        border:1px solid black;
    }
</style>
<div class="content-wrapper" style="min-height: 916px;padding-bottom: 200px;">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <div class="post">
                            <table class="table table-bordered" style="width: 100%">
                                <tr>
                                    <td  style="width: 20%"><h3>Sản phẩm: </h3></td>
                                    <td><h3><?php echo $detail['name']; ?></h3></td>
                                </tr>
                                <tr>
                                    <td><h4>Doanh nghiệp: </h4></td>
                                    <td><h4><?php echo $company['company']; ?></h4></td>
                                </tr>
                                <tr>
                                    <?php
                                        $main_services = array(
                                            1 => 'Các sản phẩm, giải pháp phần mềm tiêu biểu, được bình xét theo 24 lĩnh vực ứng dụng chuyên ngành',
                                            2 => 'Các sản phẩm, giải pháp ứng dụng công nghệ 4.0',
                                            3 => 'Các sản phẩm, giải pháp của doanh nghiệp khởi nghiệp',
                                            4 => 'Các sản phẩm, giải pháp phần mềm mới',
                                            5 => 'Các dịch vụ CNTT'
                                        );
                                    ?>
                                    <td><h4>Nhóm sản phẩm </h4></td>
                                    <td><h4><?php echo $main_services[$main_service]; ?></h4></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <h3>Phần chấm điểm</h3>
                        <?php
                            echo form_open_multipart('member/new_rating/rating', array('class' => 'form-horizontal', 'id' => 'rating1Form'));
                            echo form_hidden('member_id', $this->ion_auth->user()->row()->id);
                            echo form_hidden('product_id', $detail['id']);
                        ?>
                        <table class="table table-bordered rating-table" style="border: 1px solid black;">
                            <thead>
                                <tr>
                                    <th class="col-sm-1">STT</th>
                                    <th class="col-sm-2">Tiêu chí</th>
                                    <th class="col-sm-1">Trọng số (%)</th>
                                    <th class="col-sm-1">Điểm chính</th>
                                    <th class="col-sm-2">Tiêu chí chi tiết</th>
                                    <th class="col-sm-1">Trọng số (%)</th>
                                    <th class="col-sm-1">Điểm phụ</th>
                                    <th class="col-sm-1">Ghi chú</th>
                                </tr>
                            </thead>

                            <!------------------------------------------ 1 ------------------------------------------>
                            <tbody>
                                <?php
                                    $rating = ($rating) ? explode(',', $rating['rating']) : array();
                                ?>
                                <tr>
                                    <td rowspan="2">1</td>
                                    <td rowspan="2">Tính độc đáo</td>
                                    <td rowspan="2">15</td>
                                    <td rowspan="2">
                                        <?php
                                        echo form_error('main_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('main_1', set_value('main_1', $rating[0]), 'class="form-control" id="main_1"');
                                        }else{
                                            echo form_input('main_1', set_value('main_1'), 'class="form-control" id="main_1"');
                                        }
                                        ?>
                                    </td>
                                    <td>Công nghệ sáng tạo</td>
                                    <td>60</td>
                                    <td>
                                        <?php
                                        echo form_error('sub1_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('sub1_1', set_value('sub1_1', $rating[0]), 'class="form-control" id="sub1_1"');
                                        }else{
                                            echo form_input('sub1_1', set_value('sub1_1'), 'class="form-control" id="sub1_1"');
                                        }
                                        ?>
                                    </td>
                                    <td rowspan="2">
                                        <?php
                                        echo form_error('note_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_textarea('note_1', set_value('note_1', $rating[0]), 'class="form-control" id="note_1"');
                                        }else{
                                            echo form_textarea('note_1', set_value('note_1'), 'class="form-control" id="note_1"');
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Định hình/phù hợp xu hướng</td>
                                    <td>40</td>
                                    <td>
                                        <?php
                                        echo form_error('sub2_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('sub2_1', set_value('sub2_1', $rating[0]), 'class="form-control" id="sub2_1"');
                                        }else{
                                            echo form_input('sub2_1', set_value('sub2_1'), 'class="form-control" id="sub2_1"');
                                        }
                                        ?>
                                    </td>
                                </tr>

                                <!------------------------------------------ 2 ------------------------------------------>

                                <tr>
                                    <td rowspan="3">2</td>
                                    <td rowspan="3">Tính hiệu quả</td>
                                    <td rowspan="3">15</td>
                                    <td rowspan="3">
                                        <?php
                                        echo form_error('main_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('main_1', set_value('main_1', $rating[0]), 'class="form-control" id="main_1"');
                                        }else{
                                            echo form_input('main_1', set_value('main_1'), 'class="form-control" id="main_1"');
                                        }
                                        ?>
                                    </td>
                                    <td>Tối ưu quy trình, quản lý</td>
                                    <td>40</td>
                                    <td>
                                        <?php
                                        echo form_error('2', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('2', set_value('1', $rating[1]), 'class="form-control" id="1"');
                                        }else{
                                            echo form_input('2', set_value('2'), 'class="form-control" id="2"');
                                        }
                                        ?>
                                    </td>
                                    <td rowspan="3">
                                        <?php
                                        echo form_error('note_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_textarea('note_1', set_value('note_1', $rating[0]), 'class="form-control" id="note_1"');
                                        }else{
                                            echo form_textarea('note_1', set_value('note_1'), 'class="form-control" id="note_1"');
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tăng năng suất</td>
                                    <td>30</td>
                                    <td>
                                        <?php
                                        echo form_error('2', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('2', set_value('1', $rating[1]), 'class="form-control" id="1"');
                                        }else{
                                            echo form_input('2', set_value('2'), 'class="form-control" id="2"');
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tiết kiệm chi phí sản xuất</td>
                                    <td>30</td>
                                    <td>
                                        <?php
                                        echo form_error('2', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('2', set_value('1', $rating[1]), 'class="form-control" id="1"');
                                        }else{
                                            echo form_input('2', set_value('2'), 'class="form-control" id="2"');
                                        }
                                        ?>
                                    </td>
                                </tr>

                                <!------------------------------------------ 3 ------------------------------------------>

                                <tr>
                                    <td rowspan="2">3</td>
                                    <td rowspan="2">Tiềm năng thị trường</td>
                                    <td rowspan="2">15</td>
                                    <td rowspan="2">
                                        <?php
                                        echo form_error('main_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('main_1', set_value('main_1', $rating[0]), 'class="form-control" id="main_1"');
                                        }else{
                                            echo form_input('main_1', set_value('main_1'), 'class="form-control" id="main_1"');
                                        }
                                        ?>
                                    </td>
                                    <td>Thị phần và tiềm năng thị trường</td>
                                    <td>60</td>
                                    <td>
                                        <?php
                                        echo form_error('3', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('3', set_value('3', $rating[2]), 'class="form-control" id="3"');
                                        }else{
                                            echo form_input('3', set_value('3'), 'class="form-control" id="3"');
                                        }
                                        ?>
                                    </td>
                                    <td rowspan="2">
                                        <?php
                                        echo form_error('note_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_textarea('note_1', set_value('note_1', $rating[0]), 'class="form-control" id="note_1"');
                                        }else{
                                            echo form_textarea('note_1', set_value('note_1'), 'class="form-control" id="note_1"');
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mô hình, chiến lược kinh doanh</td>
                                    <td>40</td>
                                    <td>
                                        <?php
                                        echo form_error('sub2_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('sub2_1', set_value('sub2_1', $rating[0]), 'class="form-control" id="sub2_1"');
                                        }else{
                                            echo form_input('sub2_1', set_value('sub2_1'), 'class="form-control" id="sub2_1"');
                                        }
                                        ?>
                                    </td>
                                </tr>

                                <!------------------------------------------ 4 ------------------------------------------>

                                <tr>
                                    <td rowspan="3">4</td>
                                    <td rowspan="3">Tính năng</td>
                                    <td rowspan="3">10</td>
                                    <td rowspan="3">
                                        <?php
                                        echo form_error('main_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('main_1', set_value('main_1', $rating[0]), 'class="form-control" id="main_1"');
                                        }else{
                                            echo form_input('main_1', set_value('main_1'), 'class="form-control" id="main_1"');
                                        }
                                        ?>
                                    </td>
                                    <td>Khả năng đáp ứng nhu cầu người dùng</td>
                                    <td>50</td>
                                    <td>
                                        <?php
                                        echo form_error('4', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('4', set_value('4', $rating[3]), 'class="form-control" id="4"');
                                        }else{
                                            echo form_input('4', set_value('4'), 'class="form-control" id="4"');
                                        }
                                        ?>
                                    </td>
                                    <td rowspan="3">
                                        <?php
                                        echo form_error('note_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_textarea('note_1', set_value('note_1', $rating[0]), 'class="form-control" id="note_1"');
                                        }else{
                                            echo form_textarea('note_1', set_value('note_1'), 'class="form-control" id="note_1"');
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Khả năng tương thích và phát triển tùy biến</td>
                                    <td>25</td>
                                    <td>
                                        <?php
                                        echo form_error('2', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('2', set_value('1', $rating[1]), 'class="form-control" id="1"');
                                        }else{
                                            echo form_input('2', set_value('2'), 'class="form-control" id="2"');
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tính năng bảo mật</td>
                                    <td>25</td>
                                    <td>
                                        <?php
                                        echo form_error('2', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('2', set_value('1', $rating[1]), 'class="form-control" id="1"');
                                        }else{
                                            echo form_input('2', set_value('2'), 'class="form-control" id="2"');
                                        }
                                        ?>
                                    </td>
                                </tr>

                                <!------------------------------------------ 5 ------------------------------------------>

                                <tr>
                                    <td rowspan="3">5</td>
                                    <td rowspan="3">Công nghệ,  chất lượng sản phẩm</td>
                                    <td rowspan="3">15</td>
                                    <td rowspan="3">
                                        <?php
                                        echo form_error('main_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('main_1', set_value('main_1', $rating[0]), 'class="form-control" id="main_1"');
                                        }else{
                                            echo form_input('main_1', set_value('main_1'), 'class="form-control" id="main_1"');
                                        }
                                        ?>
                                    </td>
                                    <td>Công nghệ tiên tiến</td>
                                    <td>40</td>
                                    <td>
                                        <?php
                                        echo form_error('5', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('5', set_value('5', $rating[4]), 'class="form-control" id="5"');
                                        }else{
                                            echo form_input('5', set_value('5'), 'class="form-control" id="5"');
                                        }
                                        ?>
                                    </td>
                                    <td rowspan="3">
                                        <?php
                                        echo form_error('note_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_textarea('note_1', set_value('note_1', $rating[0]), 'class="form-control" id="note_1"');
                                        }else{
                                            echo form_textarea('note_1', set_value('note_1'), 'class="form-control" id="note_1"');
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Các tiêu chuẩn/quy trình áp dụng</td>
                                    <td>30</td>
                                    <td>
                                        <?php
                                        echo form_error('2', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('2', set_value('1', $rating[1]), 'class="form-control" id="1"');
                                        }else{
                                            echo form_input('2', set_value('2'), 'class="form-control" id="2"');
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sự ổn định và độ tin cậy/sự hài lòng của khách hàng</td>
                                    <td>30</td>
                                    <td>
                                        <?php
                                        echo form_error('2', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('2', set_value('1', $rating[1]), 'class="form-control" id="1"');
                                        }else{
                                            echo form_input('2', set_value('2'), 'class="form-control" id="2"');
                                        }
                                        ?>
                                    </td>
                                </tr>

                                <!------------------------------------------ 6 ------------------------------------------>

                                <tr>
                                    <td rowspan="3">6</td>
                                    <td rowspan="3">Tài chính/doanh thu/ tác động kinh tế, xã hội/số lượng người sử dụng</td>
                                    <td rowspan="3">20</td>
                                    <td rowspan="3">
                                        <?php
                                        echo form_error('main_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('main_1', set_value('main_1', $rating[0]), 'class="form-control" id="main_1"');
                                        }else{
                                            echo form_input('main_1', set_value('main_1'), 'class="form-control" id="main_1"');
                                        }
                                        ?>
                                    </td>
                                    <td>Doanh thu sản phẩm</td>
                                    <td>40</td>
                                    <td>
                                        <?php
                                        echo form_error('6', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('6', set_value('6', $rating[5]), 'class="form-control" id="6"');
                                        }else{
                                            echo form_input('6', set_value('6'), 'class="form-control" id="6"');
                                        }
                                        ?>
                                    </td>
                                    <td rowspan="3">
                                        <?php
                                        echo form_error('note_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_textarea('note_1', set_value('note_1', $rating[0]), 'class="form-control" id="note_1"');
                                        }else{
                                            echo form_textarea('note_1', set_value('note_1'), 'class="form-control" id="note_1"');
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Số lượng người/DN/tổ chức sử dụng</td>
                                    <td>30</td>
                                    <td>
                                        <?php
                                        echo form_error('2', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('2', set_value('1', $rating[1]), 'class="form-control" id="1"');
                                        }else{
                                            echo form_input('2', set_value('2'), 'class="form-control" id="2"');
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tác động kinh tế, xã hội</td>
                                    <td>30</td>
                                    <td>
                                        <?php
                                        echo form_error('2', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('2', set_value('1', $rating[1]), 'class="form-control" id="1"');
                                        }else{
                                            echo form_input('2', set_value('2'), 'class="form-control" id="2"');
                                        }
                                        ?>
                                    </td>
                                </tr>

                                <!------------------------------------------ 7 ------------------------------------------>

                                <tr>
                                    <td rowspan="3">7</td>
                                    <td rowspan="3">Chất lượng hồ sơ, năng lực trình bày</td>
                                    <td rowspan="3">10</td>
                                    <td rowspan="3">
                                        <?php
                                        echo form_error('main_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('main_1', set_value('main_1', $rating[0]), 'class="form-control" id="main_1"');
                                        }else{
                                            echo form_input('main_1', set_value('main_1'), 'class="form-control" id="main_1"');
                                        }
                                        ?>
                                    </td>
                                    <td>Chuẩn bị hồ sơ hoàn chỉnh</td>
                                    <td>30</td>
                                    <td>
                                        <?php
                                        echo form_error('7', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('7', set_value('7', $rating[6]), 'class="form-control" id="7"');
                                        }else{
                                            echo form_input('7', set_value('7'), 'class="form-control" id="7"');
                                        }

                                        ?>
                                    </td>
                                    <td rowspan="3">
                                        <?php
                                        echo form_error('note_1', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_textarea('note_1', set_value('note_1', $rating[0]), 'class="form-control" id="note_1"');
                                        }else{
                                            echo form_textarea('note_1', set_value('note_1'), 'class="form-control" id="note_1"');
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trình bày rõ ràng, thông tin chính xác</td>
                                    <td>40</td>
                                    <td>
                                        <?php
                                        echo form_error('2', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('2', set_value('1', $rating[1]), 'class="form-control" id="1"');
                                        }else{
                                            echo form_input('2', set_value('2'), 'class="form-control" id="2"');
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Trả lời tốt các câu hỏi</td>
                                    <td>30</td>
                                    <td>
                                        <?php
                                        echo form_error('2', '<div class="error">', '</div>');
                                        if($rating){
                                            echo form_input('2', set_value('1', $rating[1]), 'class="form-control" id="1"');
                                        }else{
                                            echo form_input('2', set_value('2'), 'class="form-control" id="2"');
                                        }
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <div class="right">
                    <?php
                    if(!$rating){
                        echo form_submit('submit', 'Gửi điểm', 'class="btn btn-primary pull-right" style="width:40%;"');
                    }
                    echo form_close();
                    ?>
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
        </div>
    </section>
</div>
<script>
    $('#rating1Form').submit(function(e){
        var form = $(this);
        var url = form.attr('action');

        for(let i = 1; i <= 7; i++){
            if($('#' + i).val() == ''){
                alert('Chưa chấm hết tất cả các mục');
                return false;
            }
        }

        $.ajax({
            type: "POST",
            url: url,
            data: form.serialize(), // serializes the form's elements.
            success: function(result){
                let data = JSON.parse(result);
                if(data.name != undefined){
                    alert('Đã gửi điểm thành công');
                    window.location.reload();
                }else{
                    alert(data.message)
                }
            }
        });
        // $('rating1Form').unbind('submit').submit();
        e.preventDefault();
    });
    $('#extra-form').validate({
        rules: {
            criteria_1: {
                required: true,
                digits: true
            },
            criteria_2: {
                required: true,
                digits: true
            },
            criteria_3: {
                required: true,
                digits: true
            },
            criteria_4: {
                required: true,
                digits: true
            },
            criteria_5: {
                required: true,
                digits: true
            },
            criteria_6: {
                required: true,
                digits: true
            },
            criteria_7: {
                required: true,
                digits: true
            }
        },
        messages :{
            criteria_1: {
                required: 'Không được trống',
                digits: 'Điểm chỉ chứa ký tự số'
            },
            criteria_2: {
                required: 'Không được trống',
                digits: 'Điểm chỉ chứa ký tự số'
            },
            criteria_3: {
                required: 'Không được trống',
                digits: 'Điểm chỉ chứa ký tự số'
            },
            criteria_4: {
                required: 'Không được trống',
                digits: 'Điểm chỉ chứa ký tự số'
            },
            criteria_5: {
                required: 'Không được trống',
                digits: 'Điểm chỉ chứa ký tự số'
            },
            criteria_6: {
                required: 'Không được trống',
                digits: 'Điểm chỉ chứa ký tự số'
            },
            criteria_7: {
                required: 'Không được trống',
                digits: 'Điểm chỉ chứa ký tự số'
            }
        }
    });
</script>

