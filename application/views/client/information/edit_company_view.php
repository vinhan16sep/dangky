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
                    <h1 style="text-align:center;">THÔNG TIN DOANH NGHIỆP</h1>
                    <h3 style="color:red; text-align:center;">NĂM <?php echo $company['year']; ?></h3>
                </div>
                <?php
                echo form_open_multipart('', array('class' => 'form-horizontal', 'id' => 'company-form'));
                echo form_hidden('information_id', set_value('information_id', $company['information_id']));
                echo form_hidden('year', set_value('year', $company['year']));
                ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Vốn điều lệ ( triệu VND)', 'equity');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <div class="row">
                                <?php
                                echo form_error('equity');
                                echo form_input('equity', set_value('equity', $company['equity']), 'class="form-control"');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Vốn chủ sở hữu (triệu VND)', 'owner_equity');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <div class="row">
                                <?php
                                echo form_error('owner_equity');
                                echo form_input('owner_equity', set_value('owner_equity', $company['owner_equity']), 'class="form-control"');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tổng doanh thu DN', 'total_income');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <div class="row">
                                <?php
                                echo form_error('total_income');
                                echo form_input('total_income', set_value('total_income', $company['total_income']), 'class="form-control"');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tổng DT lĩnh vực sx phần mềm (Triệu VND)', 'software_income');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <div class="row">
                                <?php
                                echo form_error('software_income');
                                echo form_input('software_income', set_value('software_income', $company['software_income']), 'class="form-control"');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tổng doanh thu dịch vụ CNTT (triệu VND)', 'it_income');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <div class="row">
                                <?php
                                echo form_error('it_income');
                                echo form_input('it_income', set_value('it_income', $company['it_income']), 'class="form-control"');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tổng DT xuất khẩu (USD)', 'export_income');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <div class="row">
                                <?php
                                echo form_error('export_income');
                                echo form_input('export_income', set_value('export_income', $company['export_income']), 'class="form-control"');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tổng số lao động của DN', 'total_labor');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <div class="row">
                                <?php
                                echo form_error('total_labor');
                                echo form_input('total_labor', set_value('total_labor', $company['total_labor']), 'class="form-control"');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Tổng số LTV', 'total_ltv');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <div class="row">
                                <?php
                                echo form_error('total_ltv');
                                echo form_input('total_ltv', set_value('total_ltv', $company['total_ltv']), 'class="form-control"');
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('Giới thiệu chung về DN (nêu thông tin về lịch sử hình thành, đội ngũ lãnh đạo DN, định hướng phát triển/chiến lược của DN, thế mạnh của DN...)', 'description');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            echo form_error('description');
                            echo form_textarea('description', set_value('description', $company['description']), 'class="form-control"');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            echo form_label('SP dịch vụ chính của DN', 'main_service');
                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12">
                            <?php
                            $main_service = json_decode($company['main_service']);
                            $options = array(
                                'Chính phủ điện tử' => 'Chính phủ điện tử',
                                'Ngành y tế' => 'Ngành y tế',
                                'Ngành giáo dục' => 'Ngành giáo dục',
                                'Giao thông' => 'Giao thông',
                                'Xây dựng' => 'Xây dựng',
                                'Các lĩnh vực sản xuất/dịch vụ cho DN' => 'Các lĩnh vực sản xuất/dịch vụ cho DN',
                                'Nội dung số và giải trí điện tử' => 'Nội dung số và giải trí điện tử',
                                'Viễn thông' => 'Viễn thông',
                                'Bảo mật an toàn thông tin' => 'Bảo mật an toàn thông tin',
                                'Tư vấn' => 'Tư vấn'
                            );
                            foreach ($options as $key => $value) {
                                if(!is_null($main_service) && $main_service != null){
                                    echo form_checkbox('main_service[]', $value, (in_array($value, $main_service, '')? true : false), 'class="btn-checkbox"');
                                    echo $key.'<br>';
                                }else{
                                    echo form_checkbox('main_service[]', $value, false, 'class="btn-checkbox"');
                                    echo $key.'<br>';
                                }

                            }
                            // echo form_dropdown('main_service', $options, '', 'class="form-control"');

                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 col-sx-12">
                            <?php
                            $main_market = json_decode($company['main_market']);
                            echo form_label('Thị trường chính', 'main_market');
                            $domestic = array(
                                'Thị trường Chính phủ' => 'Thị trường Chính phủ',
                                'Thị trường doanh nghiệp' => 'Thị trường doanh nghiệp',
                                'Thị trường người tiêu dùng (TT mass)' => 'Thị trường người tiêu dùng (TT mass)'
                            );
                            $target = array(
                                'Mỹ và các nước Bắc Mỹ' => 'Mỹ và các nước Bắc Mỹ',
                                'Châu Âu' => 'Châu Âu',
                                'Nhật Bản' => 'Nhật Bản',
                                'Các nước trong khu vực' => 'Các nước trong khu vực'
                            );
                            $root = array(
                                'Thị trường Chính phủ' => 'Thị trường Chính phủ',
                                'Thị trường doanh nghiệp' => 'Thị trường doanh nghiệp',
                                'Thị trường người tiêu dùng (TT mass)' => 'Thị trường người tiêu dùng (TT mass)',
                                'Mỹ và các nước Bắc Mỹ' => 'Mỹ và các nước Bắc Mỹ',
                                'Châu Âu' => 'Châu Âu',
                                'Nhật Bản' => 'Nhật Bản',
                                'Các nước trong khu vực' => 'Các nước trong khu vực',
                                'Gia công xuất khẩu' => 'Gia công xuất khẩu',
                                'Xuất khẩu SP/Giải pháp' => 'Xuất khẩu SP/Giải pháp',
                                'Xuất khẩu nhân lực CNTT' => 'Xuất khẩu nhân lực CNTT'
                            );
                            $check = false;
                            if(!is_null($main_market) && $main_market != null){

                                $check = array_diff($main_market, $root);
                                if($check){
                                    foreach ($check as $key => $value) {
                                        $new_check[] = $value;
                                    }

                                }
                            }

                            ?>
                        </div>
                        <div class="col-sm-9 col-md-9 col-sx-12" style="padding-left: 30px;">
                            <strong style="margin-left: -15px">Trong nước</strong>
                            <div class="row" style="margin-left: 20px">
                                <?php
                                foreach ($domestic as $key => $value) {
                                    if(!is_null($main_market) && $main_market != null){
                                        echo form_checkbox('main_market[]', $value, (in_array($value, $main_market, '')? true : false), 'class="btn-checkbox"');
                                        echo $key.'<br>';
                                    }else{
                                        echo form_checkbox('main_market[]', $value, false, 'class="btn-checkbox"');
                                        echo $key.'<br>';
                                    }
                                }
                                ?>
                            </div>
                            <br>
                            <strong style="margin-left: -15px">Quốc tế</strong>
                            <div class="row" style="margin-left: 20px">
                                <?php
                                if(!is_null($main_market) && $main_market != null){
                                    echo form_checkbox('main_market[]', 'Gia công xuất khẩu', (in_array('Gia công xuất khẩu', $main_market, '')? true : false), 'class="btn-checkbox"');
                                    echo 'Gia công xuất khẩu';
                                }else{
                                    echo form_checkbox('main_market[]', 'Gia công xuất khẩu', false, 'class="btn-checkbox"');
                                    echo 'Gia công xuất khẩu';
                                }
                                ?>
                                &nbsp;&nbsp;&nbsp;
                                <?php
                                if(!is_null($main_market) && $main_market != null){
                                    echo form_checkbox('main_market[]', 'Xuất khẩu SP/Giải pháp', (in_array('Xuất khẩu SP/Giải pháp', $main_market, '')? true : false), 'class="btn-checkbox"');
                                    echo 'Xuất khẩu SP/Giải pháp';
                                }else{
                                    echo form_checkbox('main_market[]', 'Xuất khẩu SP/Giải pháp', false, 'class="btn-checkbox"');
                                    echo 'Xuất khẩu SP/Giải pháp';
                                }
                                ?>
                                &nbsp;&nbsp;&nbsp;
                                <?php
                                if(!is_null($main_market) && $main_market != null){
                                    echo form_checkbox('main_market[]', 'Xuất khẩu nhân lực CNTT', (in_array('Xuất khẩu nhân lực CNTT', $main_market, '')? true : false), 'class="btn-checkbox"');
                                    echo 'Xuất khẩu nhân lực CNTT';
                                }else{
                                    echo form_checkbox('main_market[]', 'Xuất khẩu nhân lực CNTT', false, 'class="btn-checkbox"');
                                    echo 'Xuất khẩu nhân lực CNTT';
                                }
                                ?>
                            </div>
                            <div class="row" style="margin-left: 20px">
                                <strong>Xuất khẩu mục tiêu</strong><br>
                                <?php
                                foreach ($target as $key => $value) {
                                    if(!is_null($main_market) && $main_market != null){
                                        echo form_checkbox('main_market[]', $value, (in_array($value, $main_market, '')? true : false), 'class="btn-checkbox"');
                                        echo $key.'<br>';
                                    }else{
                                        echo form_checkbox('main_market[]', $value, false, 'class="btn-checkbox"');
                                        echo $key.'<br>';
                                    }
                                }
                                if($check){
                                    if($new_check[0] != ''){
                                        echo form_checkbox('main_market[]', '', true, 'class="btn-checkbox" id="anonymous"');
                                        echo 'Xuất khẩu mục tiêu - Khác (nêu rõ)<br>';
                                    }else{
                                        echo form_checkbox('main_market[]', '', false, 'class="btn-checkbox" id="anonymous"');
                                        echo 'Xuất khẩu mục tiêu - Khác (nêu rõ)<br>';
                                    }
                                }

                                ?>
                                <?php if($check){ ?>
                                    <?php if ($new_check[0] != ''): ?>
                                        <input type="text" name="anonymous" class="input-anonymous form-control" style="display: block;" value="<?php echo $new_check[0] ?>">
                                    <?php else: ?>
                                        <input type="text" name="anonymous" class="input-anonymous form-control" style="display: none;">
                                    <?php endif ?>
                                <?php } ?>

                            </div>
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
                //                            echo form_label(form_checkbox('is_submit', '', FALSE, $js.'class="is_submit"') . ' Tôi đã chắc chắn về thông tin bên trên.');
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
    var base_url = location.protocol + "//" + location.host + (location.port ? ':' + location.port : '')+'/working';
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

    $('#company-form').validate({
        rules: {
            equity: {
                required: true
            },
            owner_equity: {
                required: true
            },
            total_income: {
                required: true
            },
            software_income: {
                required: true
            },
            it_income: {
                required: true
            },
            export_income: {
                required: true
            },
            total_labor: {
                required: true
            },
            total_ltv: {
                required: true
            },
            // description: {
            //     required: true
            // },
            // main_market: {
            //     required: true
            // },
            // main_service: {
            //     required: true
            // }
        },
        messages :{
            equity: {
                required : 'Cần nhập Vốn điều lệ 2015'
            },
            owner_equity: {
                required: 'Cần nhập Vốn chủ sở hữu'
            },
            total_income: {
                required: 'Cần nhập Tổng doanh thu DN'
            },
            software_income: {
                required: 'Cần nhập Tổng DT lĩnh vực sx phần mềm'
            },
            it_income: {
                required: 'Cần nhập Tổng doanh thu dịch vụ CNTT'
            },
            export_income: {
                required: 'Cần nhập Tổng DT xuất khẩu'
            },
            total_labor: {
                required: 'Cần nhập Tổng số lao động của DN'
            },
            total_ltv: {
                required: 'Cần nhập Tổng số LTV'
            },
            // description: {
            //     required: 'Cần nhập Giới thiệu chung'
            // },
            // main_market: {
            //     required: 'Cần nhập Thị trường chính'
            // },
            // main_service: {
            //     required: 'Cần nhập SP dịch vụ chính của DN'
            // }
        }
    });

    $('#anonymous').click(function(){
        if($(this).prop("checked") == true){
            $('.input-anonymous').slideDown();
        }else{
            $('.input-anonymous').slideUp();
        }
    })

    $('.input-anonymous').change(function(){
        var anonymous = $(this).val();
        $('#anonymous').attr('value', anonymous);
    })

</script>