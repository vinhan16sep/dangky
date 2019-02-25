<!--main content start-->
<div class="content-wrapper" style="min-height: 916px;">
    <!-- <div class="box-body pad table-responsive">
        <h3>Trang thông tin: <span style="color:red;"><?php echo $user->company; ?></span></h3>
    </div> -->
    <section class="content">

        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        
                        <?php foreach ($team as $key => $value): ?>
                            <div class="post">
                                <h4>Nhóm: <span style="color: red"><?php echo $value['name']; ?></span></h4>
                                    <p style="color:green;">Danh sách sản phẩm của nhóm: <span style="color: red"><?php echo $value['name']; ?></span></p>
                                    <span>
                                        <a href="<?php echo base_url('member/company/index/'.$user_id); ?>" class="btn btn-success btn-block"><b>Xem danh sách các doanh nghiệp đã đăng ký</b></a>
                                    </span>
                            </div>
                        <?php endforeach ?>
                        
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
</div>

