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
                            <?php if ($this->session->flashdata('message_error')): ?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Thông báo!</strong> <?php echo $this->session->flashdata('message_error'); ?>
                                </div>
                            <?php endif ?>
                            <h4 style="text-align: center;"><?php echo empty($products) ? 'THÔNG TIN SẢN PHẨM <i class="fa fa-arrow-right" aria-hidden="true"></i> THÔNG TIN SẢN PHẨM/ DỊCH VỤ ĐỀ CỬ' : 'Danh sách sản phẩm/dịch vụ  đã đăng ký' ?></h4>
                            <?php if (!empty($products)): ?>
                                <?php foreach($allYear as $index => $year): ?>
                                <hr>
                                <h3 style="color:red; padding-left:5px;"><?= $year['year'] ?></h3>
                                <div class="row">
                                    <div class="col-lg-12" style="margin-top: 10px;">
                                        <?php
                                        echo '<table class="table table-hover table-bordered table-condensed">';
                                        echo '<tr>';
                                        echo '<td><b>STT</b></td>';
                                        echo '<td><b>Tên sản phẩm/dịch vụ</b></td>';
                                        echo '<td><b style="text-align: center !important;">Thông tin</b></td>';
                                        if($reg_status['is_final'] == 0){
                                            echo '<td><b style="text-align: center !important;">Thao tác</b></td>';
                                        }
                                        echo '</tr>';
                                        if (!empty($products)) {
                                            foreach ($products as $key => $product):
                                                if($product['year'] == $year['year']):
                                                    echo '<tr>';
                                                    echo '<td>' . ($key + 1) . '</td>';
                                                    echo '<td><a href="' . base_url('client/information/detail_product/' . $product['id']) . '">' . $product['name'] . '</a></td>';
                                        ?>
                                                    <td style="text-align: center;width:110px;"><a style="width:132px;" href="<?php echo base_url('client/information/detail_product/' . $product['id']) ?>" class="btn btn-primary">Xem chi tiết</a></td>
                                                    <?php if($reg_status['is_final'] == 0 && $product['year'] == $eventYear): ?>
                                                        <td style="text-align: center;width:110px;"><a style="width:132px;" href="<?php echo base_url('client/information/edit_product/' . $product['id']) ?>" class="btn btn-primary">Chỉnh sửa</a></td>
                                                        <td style="text-align: center;width:110px;"><a style="width:132px;" href="<?php echo base_url('client/information/remove_product/' . $product['id']) ?>" class="btn btn-danger" onclick="return confirm('Chắc chắn xóa sản phẩm?')">Xóa sản phẩm</a></td>
                                                    <?php else: ?>
                                                        <td style="text-align: center;width:110px;"><a style="width:132px;" href="javascript:void(0);" disabled="disabled" class="btn btn-primary">Chỉnh sửa</a></td>
                                                        <td style="text-align: center;width:110px;"><a style="width:132px;" href="javascript:void(0);" disabled="disabled" class="btn btn-danger">Xóa sản phẩm</a></td>
                                                    <?php endif; ?>
                                        <?php
                                                    echo '</tr>';
                                                endif;
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
                                <?php endforeach; ?>
                            <?php endif ?>
                            <br>
                            <br>
                            <?php if($reg_status['is_final'] == 0): ?>
                                <div>
                                    <a style="display: inline;margin-right:10px !important;"  href="<?php echo base_url('client/information/create_product') ?>" class="btn btn-primary pull-left"><b>Thêm sản phẩm</b></a>
                                    <a id="complete" onclick="return complete();" <?php echo ($status['is_product'] == 0) ? 'disabled="disabled"' : '';?> style="display: inline;" href="#" class="btn btn-warning pull-left"><b>Hoàn thành đăng ký</b></a>
                                </div>

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
<script>
    function complete(){
        if(confirm('Mời quay lại trang Tổng quan để xem lại hồ sơ/nộp cho Ban tổ chức')){
            window.location.href = '<?php echo base_url('client/dashboard') ?>';
        }
    }
</script>

