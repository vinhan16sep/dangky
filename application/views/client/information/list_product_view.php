<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content">
        <div class="row">
            <!--<div class="col-md-6">-->
            <!--    <div class="nav-tabs-custom">-->
            <!--        <div class="tab-content">-->
            <!--            <div class="post">-->
            <!--                <h4>Tài khoản</h4>-->
            <!--                <ul class="list-group list-group-unbordered">-->
            <!--                    <li class="list-group-item" style="height: 80px !important;">-->
            <!--                        <a><i class="fa fa-building-o margin-r-5"></i> Doanh nghiệp</a> <p class="pull-right"><?php echo $user->company; ?></p>-->
            <!--                    </li>-->
            <!--                    <li class="list-group-item">-->
            <!--                        <a><i class="fa fa-envelope margin-r-5"></i> Email</a> <p class="pull-right"><?php echo $user->email; ?></p>-->
            <!--                    </li>-->
            <!--                    <li class="list-group-item">-->
            <!--                        <a><i class="fa fa-phone margin-r-5"></i> Điện thoại</a> <p class="pull-right"><?php echo $user->phone; ?></p>-->
            <!--                    </li>-->
            <!--                    <li class="list-group-item" style="height: 80px !important;">-->
            <!--                        <a><i class="fa fa-map-marker margin-r-5"></i> Địa chỉ</a> <p class="pull-right"><?php echo $user->address; ?></p>-->
            <!--                    </li>-->
            <!--                </ul>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="col-md-10 col-md-offset-1">
                <div class="nav-tabs-custom box-body box-profile" style="box-shadow: 2px 2px 1px grey;">
                    <div class="tab-content">
                        <div class="post">
                            <h4 style="text-align: center;"><?php echo empty($products) ? 'THÔNG TIN SẢN PHẨM / GIẢI PHÁP / DỊCH VỤ' : 'Danh sách sản phẩm/dịch vụ  đã đăng ký' ?></h4>
                            <?php if (!empty($products)): ?>
                                <div class="row">
                                    <div class="col-lg-12" style="margin-top: 10px;">
                                        <?php
                                        echo '<table class="table table-hover table-bordered table-condensed">';
                                        echo '<tr>';
                                        echo '<td><b>STT</b></td>';
                                        echo '<td><b>Tên sản phẩm/dịch vụ</b></td>';
                                        echo '<td><b style="text-align: center !important;">Kết quả đánh giá</b></td>';
                                        if($reg_status['is_final'] == 0){
                                            echo '<td><b style="text-align: center !important;">Thao tác</b></td>';
                                        }
                                        echo '</tr>';
                                        if (!empty($products)) {
                                            foreach ($products as $key => $product):
                                                echo '<tr>';
                                                echo '<td>' . ($key + 1) . '</td>';
                                                echo '<td><a href="' . base_url('client/information/detail_product/' . $product['id']) . '">' . $product['name'] . '</a></td>';
                                        ?>
                                                <?php if($product['rating'] == 0): ?>
                                                <td style="text-align: center;width:110px;"><a style="width:132px;" href="<?php echo base_url('client/information/detail_product/' . $product['id']) ?>" class="btn btn-default">Chưa đánh giá</a></td>
                                                <?php else: ?>
                                                    <?php if($product['rating'] == 1): ?>
                                                        <td style="text-align: center;width:110px;"><a style="width:132px;" href="<?php echo base_url('client/information/detail_product/' . $product['id']) ?>" class="btn btn-success">Đồng ý</a></td>
                                                    <?php elseif($product['rating'] == 2): ?>
                                                        <td style="text-align: center;width:110px;"><a style="width:132px;" href="<?php echo base_url('client/information/detail_product/' . $product['id']) ?>" class="btn btn-warning">Đề nghị xem xét</a></td>
                                                    <?php elseif($product['rating'] == 3): ?>
                                                        <td style="text-align: center;width:110px;"><a style="width:132px;" href="<?php echo base_url('client/information/detail_product/' . $product['id']) ?>" class="btn btn-danger">Không đồng ý</a></td>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <?php if($reg_status['is_final'] == 0): ?>
                                                    <td style="text-align: center;width:110px;"><a style="width:132px;" href="<?php echo base_url('client/information/edit_product/' . $product['id']) ?>" class="btn btn-success">Chỉnh sửa</a></td>
                                                <?php endif; ?>
                                        <?php
                                                echo '</tr>';
                                            endforeach;
                                        }else {
                                            echo '<tr class="odd"><td colspan="9">Chưa đăng ký sản phẩm nào</td></tr>';
                                        }
                                        echo '</table>';
                                        ?>
                                        <div class="col-md-6 col-md-offset-5">
                                            <?php echo $page_links; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>
                            <?php if($reg_status['is_final'] == 0): ?>
                            <a href="<?php echo base_url('client/information/create_product') ?>" class="btn btn-primary btn-block"><b>Thêm sản phẩm</b></a>
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

