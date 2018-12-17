<!--main content start-->
<div class="content-wrapper" style="min-height: 916px;">
    <div class="box-body pad table-responsive">
        <h3>Trang thông tin: <span style="color:red;"><?php echo $user->company; ?></span></h3>
    </div>
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?php echo site_url('assets/public/img/client.jpg'); ?>" alt="User profile picture">

                        <h3 class="profile-username text-center"><?php echo $user->last_name . ' ' . $user->first_name; ?></h3>

                        <p class="text-muted text-center"><?php echo $user->position; ?></p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item" style="height: 80px !important;">
                                <b style="height: 80px !important;"><i class="fa fa-building-o margin-r-5"></i> Doanh nghiệp</b> <a class="pull-right"><?php echo $user->company; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b><i class="fa fa-envelope margin-r-5"></i> Email</b> <a class="pull-right"><?php echo $user->email; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b><i class="fa fa-phone margin-r-5"></i> Điện thoại</b> <a class="pull-right"><?php echo $user->phone; ?></a>
                            </li>
                            <li class="list-group-item" style="height: 80px !important;">
                                <b style="height: 80px !important;"><i class="fa fa-map-marker margin-r-5"></i> Địa chỉ</b> <a class="pull-right"><?php echo $user->address; ?></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin khác</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-clock-o margin-r-5"></i> Thời gian tạo tài khoản</strong>

                        <p class="text-muted">
                            <?php
                                echo date("d-m-Y H:i", $user->created_on);
                            ?>
                        </p>

                        <hr>

                        <strong><i class="fa fa-sign-in margin-r-5"></i> Đăng nhập lần cuối</strong>

                        <p class="text-muted">
                            <?php
                            echo date("d-m-Y H:i", $user->last_login);
                            ?>
                        </p>

                        <hr>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <div class="post">
                            <h4 style="font-weight: bold">Thông tin đăng ký</h4>
                            <?php if($reg_status['is_final'] == 0): ?>
                                <?php if(!$submitted): ?>
                                    <p style="color:red;">Doanh nghiệp cần điền đầy đủ thông tin đăng ký</p>
                                    <span>
                                        <a data-target="#myModal" data-toggle="modal" id="MainNavHelp"
                                           href="#myModal" class="btn btn-warning btn-block">Nhập thông tin</a>
<!--                                        <a href="--><?php //echo base_url('client/information/create_extra') ?><!--" class="btn btn-warning btn-block" onclick=""><b>Nhập thông tin</b></a>-->
                                    </span>
                                <?php else: ?>
                                    <a href="<?php echo base_url('client/information/extra') ?>" class="btn btn-success btn-block"><b>Xem thông tin đã đăng ký</b></a>
                                    <a href="<?php echo base_url('client/information/edit_extra'); ?>" class="btn btn-primary btn-block"><b>Sửa thông tin</b></a>
    <!--                                <p style="color:green;">Doanh nghiệp đã gửi thông tin đăng ký</p>-->
    <!--                                <span>-->
    <!--                                    <a href="--><?php //echo base_url('client/information/extra') ?><!--" class="btn btn-success btn-block"><b>Xem thông tin đã đăng ký</b></a>-->
    <!--                                </span>-->
                                <?php endif; ?>
                            <?php else: ?>
                                <a href="<?php echo base_url('client/information/extra') ?>" class="btn btn-success btn-block"><b>Xem thông tin đã đăng ký</b></a>
                            <?php endif; ?>
                        </div>
                        <div class="post">
                            <h4 style="font-weight: bold">Thông tin doanh nghiệp theo từng năm</h4>
                            <?php if($user_identity != ''){ ?>
                                <?php if($reg_status['is_final'] == 0): ?>
                                    <?php if(!$company_submitted): ?>
                                        <p style="color:red;">Doanh nghiệp cần điền đầy đủ thông tin đăng ký</p>
                                        <span>
                                            <a data-target="#myModal1" data-toggle="modal" id="MainNavHelp1"
                                               href="#myModal1" class="btn btn-warning btn-block">Chọn năm</a>
                                        </span>
                                    <?php else: ?>
                                        <p style="color:red;">Doanh nghiệp cần điền đầy đủ thông tin đăng ký</p>
                                        <span>
                                            <a data-target="#myModal1" data-toggle="modal" id="MainNavHelp1"
                                               href="#myModal1" class="btn btn-warning btn-block">Chọn năm</a>
                                        </span>
                                        <br>
                                        <br>
                                        <?php foreach ($company_submitted as $value){ ?>
                                            <div>
                                                <a style="display: inline;" href="<?php echo base_url('client/information/company?year=' . $value['year']) ?>" class="btn btn-success btn-block"><b>Xem thông tin đã đăng ký <?php echo $value['year']; ?></b></a>
                                                <?php if(date('Y') <= $value['year']){ ?>
                                                    <a style="display: inline;" href="<?php echo base_url('client/information/edit_company?year=' . $value['year']); ?>" class="btn btn-primary btn-block"><b>Sửa thông tin <?php echo $value['year']; ?></b></a>
                                                <?php } ?>
                                            </div>
                                            <hr style="width: 70%;">
                                        <?php } ?>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <br>
                                    <?php foreach ($company_submitted as $value){ ?>
                                        <div>
                                            <a style="display: inline;" href="<?php echo base_url('client/information/company?year=' . $value['year']) ?>" class="btn btn-success btn-block"><b>Xem thông tin đã đăng ký <?php echo $value['year']; ?></b></a>
                                        </div>
                                        <hr>
                                    <?php } ?>
                                <?php endif; ?>
                            <?php }else{
                                echo '<p style="color:red;">Doanh nghiệp cần điền đầy đủ thông tin đăng ký phía trên</p>';
                            } ?>
                        </div>
                        <div class="post">
                            <h4 style="font-weight: bold">Thông tin sản phẩm/dịch vụ đề cử</h4>
                            <?php if($user_identity != ''){ ?>
                                <?php if(!$count_product || $count_product < 1): ?>
                                    <p style="color:red;">Doanh nghiệp cần điền đầy đủ thông tin về sản phẩm / dịch vụ</p>
                                    <span>
                                        <a href="<?php echo base_url('client/information/create_product') ?>" class="btn btn-primary btn-block"><b>Nhập thông tin</b></a>
                                    </span>
                                <?php else: ?>
                                    <p style="color:green;">Doanh nghiệp đã đăng ký <?php echo $count_product; ?> sản phẩm / giải pháp / dịch vụ.</p>
                                    <span>
                                        <a href="<?php echo base_url('client/information/products') ?>" class="btn btn-success btn-block"><b>Xem thông tin sản phẩm đã đăng ký</b></a>
                                    </span>
                                <?php endif; ?>
                            <?php }else{
                                echo '<p style="color:red;">Doanh nghiệp cần điền đầy đủ thông tin đăng ký phía trên</p>';
                            } ?>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <?php if($complete == 1): ?>
                    <?php if($user_identity != ''){ ?>
                        <?php if($reg_status['is_final'] == 0): ?>
                        <br>
                        <br>
                        <a onclick="return confirm('Bạn vẫn muốn gửi?')" href="<?php echo base_url('client/information/set_final') ?>" class="btn btn-warning btn-block"><b>Gửi Ban tổ chức</b></a>
                        <p style="color:red">Chú ý xác nhận lại thông tin, sau khi gửi đăng ký sẽ không thể chỉnh sửa</p>
                        <?php else: ?>
                        <h4 style="color:red">Thông tin đã được gửi</h4>
                        <?php endif; ?>
                    <?php } ?>
                <?php else: ?>
                    <?php if($user_identity != ''){ ?>
                        <?php if($reg_status['is_final'] == 0): ?>
                            <br>
                            <br>
                            <a disabled="disabled" class="btn btn-warning btn-block"><b>Cần nhập đủ thông tin Đăng ký / Doanh nghiệp / Sản phẩm</b></a>
                        <?php else: ?>
                            <h4 style="color:red">Thông tin đã được gửi</h4>
                        <?php endif; ?>
                    <?php } ?>
                <?php endif; ?>
                
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Nhập mã số thuế</h4>
                <p>Chú ý: Mã số thuế không thể thay đổi sau khi bấm Đồng ý</p>
            </div>
            <div class="modal-body">
                <input id="identity" type="text" name="identity" class="form-control"/>
            </div>
            <div class="modal-footer">
                <a onclick="confirmation();" class="btn btn-warning btn-block"><b>Đồng ý</b></a>
            </div>
        </div>

    </div>
</div>
<div id="myModal1" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Chọn năm</h4>
            </div>
            <div class="modal-body">
                <select class="form-control" id="selected_year">
                    <?php for(($i = date('Y') - 3); ($i <= date('Y') + 1); $i++){ ?>
                        <option value="<?php echo $i; ?>" <?php echo ($i == date('Y')) ? 'selected="selected"' : ''; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="modal-footer">
                <a onclick="this.href='<?php echo base_url("client/information/create_company") ?>?year='+document.getElementById('selected_year').value" class="btn btn-warning btn-block"><b>Nhập thông tin</b></a>
            </div>
        </div>

    </div>
</div>
<script>
    function confirmation() {
        if(document.getElementById('identity').value === null || document.getElementById('identity').value === ''){
            alert("Yêu cầu nhập mã số thuế");
        }else{
            if(confirm("CHẮC CHẮN MÃ SỐ THUẾ: " + document.getElementById('identity').value + " ?")){
                window.location.href = '<?php echo base_url("client/information/create_extra") ?>?identity='+document.getElementById('identity').value;
            } else{

            }
        }
    }
</script>

