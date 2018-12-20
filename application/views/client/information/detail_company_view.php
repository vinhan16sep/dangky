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
                            <h2 style="text-align:center;">Thông tin doanh nghiệp</h2>
                            <h3 style="color:red; text-align:center;">NĂM <?php echo $company['year']; ?></h3>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn điều lệ (triệu VND) <?php echo $rule3Year[0]; ?></a> <p class="pull-right"><?php echo $company['equity_1'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn điều lệ (triệu VND) <?php echo $rule3Year[1]; ?></a> <p class="pull-right"><?php echo $company['equity_2'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn điều lệ (triệu VND) <?php echo $rule3Year[2]; ?></a> <p class="pull-right"><?php echo $company['equity_3'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn chủ sở hữu (triệu VND) <?php echo $rule3Year[0]; ?></a> <p class="pull-right"><?php echo $company['owner_equity_1'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn chủ sở hữu (triệu VND) <?php echo $rule3Year[1]; ?></a> <p class="pull-right"><?php echo $company['owner_equity_2'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn chủ sở hữu (triệu VND) <?php echo $rule3Year[2]; ?></a> <p class="pull-right"><?php echo $company['owner_equity_3'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu DN <?php echo $rule3Year[0]; ?></a> <p class="pull-right"><?php echo $company['total_income_1'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu DN <?php echo $rule3Year[1]; ?></a> <p class="pull-right"><?php echo $company['total_income_2'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu DN <?php echo $rule3Year[2]; ?></a> <p class="pull-right"><?php echo $company['total_income_3'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT lĩnh vực sx phần mềm (Triệu VND) <?php echo $rule3Year[0]; ?></a> <p class="pull-right"><?php echo $company['software_income_1'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT lĩnh vực sx phần mềm (Triệu VND) <?php echo $rule3Year[1]; ?></a> <p class="pull-right"><?php echo $company['software_income_2'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT lĩnh vực sx phần mềm (Triệu VND) <?php echo $rule3Year[2]; ?></a> <p class="pull-right"><?php echo $company['software_income_3'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu dịch vụ CNTT triệu VND) <?php echo $rule3Year[0]; ?></a> <p class="pull-right"><?php echo $company['it_income_1'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu dịch vụ CNTT triệu VND) <?php echo $rule3Year[1]; ?></a> <p class="pull-right"><?php echo $company['it_income_2'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu dịch vụ CNTT triệu VND) <?php echo $rule3Year[2]; ?></a> <p class="pull-right"><?php echo $company['it_income_3'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT xuất khẩu (USD) <?php echo $rule3Year[0]; ?></a> <p class="pull-right"><?php echo $company['export_income_1'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT xuất khẩu (USD) <?php echo $rule3Year[1]; ?></a> <p class="pull-right"><?php echo $company['export_income_2'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT xuất khẩu (USD) <?php echo $rule3Year[2]; ?></a> <p class="pull-right"><?php echo $company['export_income_3'] ?> VNĐ</p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số lao động của DN <?php echo $rule3Year[0]; ?></a> <p class="pull-right"><?php echo $company['total_labor_1'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số lao động của DN <?php echo $rule3Year[1]; ?></a> <p class="pull-right"><?php echo $company['total_labor_2'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số lao động của DN <?php echo $rule3Year[2]; ?></a> <p class="pull-right"><?php echo $company['total_labor_3'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số LTV <?php echo $rule3Year[0]; ?></a> <p class="pull-right"><?php echo $company['total_ltv_1'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số LTV <?php echo $rule3Year[1]; ?></a> <p class="pull-right"><?php echo $company['total_ltv_2'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số LTV <?php echo $rule3Year[2]; ?></a> <p class="pull-right"><?php echo $company['total_ltv_3'] ?></p>
                                </li>
                                <li class="list-group-item" style="min-height:200px;">
                                    <a><i class="fa fa-file margin-r-5"></i> Giới thiệu chung</a> <p class="" style="padding-left:20px;"><?php echo $company['description'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-circle margin-r-5"></i> SP dịch vụ chính của DN</a>
                                    <?php if(!empty($company['main_service'])): ?>
                                        <?php $main_service = json_decode($company['main_service']) ?>
                                        <?php if($main_service): ?>
                                            <?php foreach ($main_service as $key => $value): ?>
                                                <p class="" style="padding-left:20px;"><?php echo $value ?></p>
                                            <?php endforeach ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-globe margin-r-5"></i> Thị trường chính</a>
                                    <?php if(!empty($company['main_market'])): ?>
                                        <?php $main_market = json_decode($company['main_market']) ?>
                                        <?php if($main_market): ?>
                                            <?php foreach ($main_market as $key => $value): ?>
                                                <p class="" style="padding-left:20px;"><?php echo $value ?></p>
                                            <?php endforeach ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </li>
                            </ul>
                            <div class="row">
                            <?php if($reg_status['is_final'] == 0): ?>
                                    <div class="col-xs-12 col-md-2 pull-left">
                                        <a href="<?php echo base_url('client/information/company'); ?>" class="btn btn-default btn-block"><b>Quay lại</b></a>
                                    </div>
                                    <?php if($eventYear == $company['year']){ ?>
                                    <div class="col-xs-12 col-md-4 pull-left">
                                        <a href="<?php echo base_url('client/information/edit_company?year=' . $eventYear); ?>" class="btn btn-primary btn-block"><b>Sửa thông tin năm sự kiện hiện tại</b></a>
                                    </div>
                                    <?php } ?>
                                    <div class="col-xs-12 col-md-4 pull-right">
                                        <a href="<?php echo base_url('client/information/products'); ?>" style="width:100%" class="btn btn-warning btn-block"><b>Nhập thông tin cho sản phẩm / dịch vụ <i style="margin-left: 5px" class="fa fa-arrow-circle-right" aria-hidden="true"></i></b></a>
                                    </div>
                            <?php else: ?>
                            <h4 style="color:red">Thông tin đã được gửi</h4>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
        </div>
    </section>
</div>

