<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content">
        <div class="row">
<!--            <div class="col-md-6">-->
<!--                <div class="nav-tabs-custom">-->
<!--                    <div class="tab-content">-->
<!--                        <div class="post">-->
<!--                            <h4>Tài khoản</h4>-->
<!--                            <ul class="list-group list-group-unbordered">-->
<!--                                <li class="list-group-item" style="height: 80px !important;">-->
<!--                                    <b style="height: 80px !important;"><i class="fa fa-building-o margin-r-5"></i> Doanh nghiệp</b> <a class="pull-right">--><?php //echo $user->company; ?><!--</a>-->
<!--                                </li>-->
<!--                                <li class="list-group-item">-->
<!--                                    <b><i class="fa fa-envelope margin-r-5"></i> Email</b> <a class="pull-right">--><?php //echo $user->email; ?><!--</a>-->
<!--                                </li>-->
<!--                                <li class="list-group-item">-->
<!--                                    <b><i class="fa fa-phone margin-r-5"></i> Điện thoại</b> <a class="pull-right">--><?php //echo $user->phone; ?><!--</a>-->
<!--                                </li>-->
<!--                                <li class="list-group-item" style="height: 80px !important;">-->
<!--                                    <b style="height: 80px !important;"><i class="fa fa-map-marker margin-r-5"></i> Địa chỉ</b> <a class="pull-right">--><?php //echo $user->address; ?><!--</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="col-md-10 col-md-offset-1">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <div class="post">
                            <h4>Thông tin doanh nghiệp</h4>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn điều lệ năm 2015 (triệu VND)</a> <p class="pull-right"><?php echo $submitted['equity_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn điều lệ năm 2016 (triệu VND)</a> <p class="pull-right"><?php echo $submitted['equity_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn điều lệ năm 2017 (triệu VND)</a> <p class="pull-right"><?php echo $submitted['equity_2017'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn chủ sở hữu 2015 (triệu VND)</a> <p class="pull-right"><?php echo $submitted['owner_equity_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn chủ sở hữu 2016 (triệu VND)</a> <p class="pull-right"><?php echo $submitted['owner_equity_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn chủ sở hữu 2017 (triệu VND)</a> <p class="pull-right"><?php echo $submitted['owner_equity_2017'] ?></p>
                                </li>

                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu DN 2015</a> <p class="pull-right"><?php echo $submitted['total_income_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu DN 2016</a> <p class="pull-right"><?php echo $submitted['total_income_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu DN 2017</a> <p class="pull-right"><?php echo $submitted['total_income_2017'] ?></p>
                                </li>

                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT lĩnh vực sx phần mềm 2015 (Triệu VND)</a> <p class="pull-right"><?php echo $submitted['software_income_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT lĩnh vực sx phần mềm 2016 (Triệu VND)</a> <p class="pull-right"><?php echo $submitted['software_income_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT lĩnh vực sx phần mềm 2017 (Triệu VND)</a> <p class="pull-right"><?php echo $submitted['software_income_2017'] ?></p>
                                </li>

                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu dịch vụ CNTT 2015 (triệu VND)</a> <p class="pull-right"><?php echo $submitted['it_income_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu dịch vụ CNTT 2016 (triệu VND)</a> <p class="pull-right"><?php echo $submitted['it_income_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu dịch vụ CNTT 2017 (triệu VND)</a> <p class="pull-right"><?php echo $submitted['it_income_2017'] ?></p>
                                </li>

                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT xuất khẩu (USD) 2015</a> <p class="pull-right"><?php echo $submitted['export_income_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT xuất khẩu (USD) 2016</a> <p class="pull-right"><?php echo $submitted['export_income_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT xuất khẩu (USD) 2017</a> <p class="pull-right"><?php echo $submitted['export_income_2017'] ?></p>
                                </li>

                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số lao động của DN 2015</a> <p class="pull-right"><?php echo $submitted['total_labor_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số lao động của DN 2016</a> <p class="pull-right"><?php echo $submitted['total_labor_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số lao động của DN 2017</a> <p class="pull-right"><?php echo $submitted['total_labor_2017'] ?></p>
                                </li>

                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số LTV 2015</a> <p class="pull-right"><?php echo $submitted['total_ltv_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số LTV 2016</a> <p class="pull-right"><?php echo $submitted['total_ltv_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số LTV 2017</a> <p class="pull-right"><?php echo $submitted['total_ltv_2017'] ?></p>
                                </li>

                                <li class="list-group-item" style="min-height:200px;">
                                    <a><i class="fa fa-file margin-r-5"></i> Giới thiệu chung</a> <p class="" style="padding-left:20px;"><?php echo $submitted['description'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-circle margin-r-5"></i> SP dịch vụ chính của DN</a>
                                    <?php if(!empty($submitted['main_service'])): ?>
                                        <?php $main_service = json_decode($submitted['main_service']) ?>
                                        <?php if($main_service): ?>
                                            <?php foreach ($main_service as $key => $value): ?>
                                                <p class="" style="padding-left:20px;"><?php echo $value ?></p>
                                            <?php endforeach ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-globe margin-r-5"></i> Thị trường chính</a>
                                    <?php if(!empty($submitted['main_market'])): ?>
                                        <?php $main_market = json_decode($submitted['main_market']) ?>
                                        <?php if($main_market): ?>
                                            <?php foreach ($main_market as $key => $value): ?>
                                                <p class="" style="padding-left:20px;"><?php echo $value ?></p>
                                            <?php endforeach ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </li>
                            </ul>
                            <?php if($reg_status['is_final'] == 0): ?>
    <!--                            <?php if(!$submitted || $submitted['is_submit'] != 1): ?>-->
    <!--                                <a href="<?php echo base_url('client/information/create_company'); ?>" class="btn btn-primary btn-block"><b>Chỉnh sửa thông tin</b></a>-->
    <!--                            <?php else: ?>-->
    <!--                                <a href="<?php echo base_url('client/information/edit_company'); ?>" class="btn btn-primary btn-block"><b>Sửa thông tin</b></a>-->
    <!--                                <a href="javascript:void(0);" class="btn btn-danger btn-block" disabled><b>Thông tin đã đăng ký</b></a>-->
    <!--                            <?php endif; ?>-->
                                <a href="<?php echo base_url('client/information/edit_company'); ?>" class="btn btn-primary btn-block"><b>Sửa thông tin</b></a>
                            <?php else: ?>
                            <h4 style="color:red">Thông tin đã được gửi</h4>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
        </div>
    </section>
</div>

