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
<!--                                    <a><i class="fa fa-building-o margin-r-5"></i> Doanh nghiệp</a> <p class="pull-right">--><?php //echo $user->company; ?><!--</p>-->
<!--                                </li>-->
<!--                                <li class="list-group-item">-->
<!--                                    <a><i class="fa fa-envelope margin-r-5"></i> Email</a> <p class="pull-right">--><?php //echo $user->email; ?><!--</p>-->
<!--                                </li>-->
<!--                                <li class="list-group-item">-->
<!--                                    <a><i class="fa fa-phone margin-r-5"></i> Điện thoại</a> <p class="pull-right">--><?php //echo $user->phone; ?><!--</p>-->
<!--                                </li>-->
<!--                                <li class="list-group-item" style="height: 80px !important;">-->
<!--                                    <a><i class="fa fa-map-marker margin-r-5"></i> Địa chỉ</a> <p class="pull-right">--><?php //echo $user->address; ?><!--</p>-->
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
                            <h4>Thông tin khác</h4>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <a><i class="fa fa-globe margin-r-5"></i> Tên đơn vị</a> <p class="pull-right"><?php echo $submitted['website']; ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-user margin-r-5"></i> Tên người đại diện pháp luật</a> <p class="pull-right"><?php echo $submitted['legal_representative']; ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-star margin-r-5"></i> Chức danh</a> <p class="pull-right"><?php echo $submitted['lp_position']; ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-envelope margin-r-5"></i> Email</a> <p class="pull-right"><?php echo $submitted['lp_email']; ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-mobile margin-r-5"></i> Di động</a> <p class="pull-right"><?php echo $submitted['lp_phone']; ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-user margin-r-5"></i> Tên người liên hệ với BTC</a> <p class="pull-right"><?php echo $submitted['connector']; ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-star margin-r-5"></i> Chức danh</a> <p class="pull-right"><?php echo $submitted['c_position']; ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-envelope margin-r-5"></i> Email</a> <p class="pull-right"><?php echo $submitted['c_email']; ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-mobile margin-r-5"></i> Di động</a> <p class="pull-right"><?php echo $submitted['c_phone']; ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-link margin-r-5"></i> Link download PĐK của DN</a> <p class="pull-right"><?php echo $submitted['link']; ?></p>
                                </li>
                            </ul>
                            <?php if($reg_status['is_final'] == 0): ?>
                                <?php if(!$submitted): ?>
                                <a href="<?php echo base_url('client/information/create_extra'); ?>" class="btn btn-primary btn-block"><b>Nhập thông tin</b></a>
                                <?php else: ?>
                                <a href="<?php echo base_url('client/information/edit_extra'); ?>" class="btn btn-primary btn-block"><b>Sửa thông tin</b></a>
                                <?php endif; ?>
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

