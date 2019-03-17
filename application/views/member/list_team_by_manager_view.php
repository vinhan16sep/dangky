<!--main content start-->
<div class="content-wrapper" style="min-height: 916px;">
    <!-- <div class="box-body pad table-responsive">
        <h3>Trang thông tin: <span style="color:red;"><?php echo $user->company; ?></span></h3>
    </div> -->
    <section class="content">
        <h3>Tên nhóm: <?php echo $team['name'] ?></h3>
        <?php if ($this->session->flashdata('main_service_message')): ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Thông báo!</strong> <?php echo $this->session->flashdata('main_service_message'); ?>
            </div>
        <?php endif ?>
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        
                        <table class="table table-striped table-bordered table-condensed">
                            <tr>
                                <td class="col-sm-1" style="font-weight:bold;color: #31708f;">STT</td>
                                <td class="col-sm-5" style="font-weight:bold;color: #31708f;">Tên tài khoản</td>
                                <td class="col-sm-5" style="font-weight:bold;color: #31708f;">Trạng thái</td>
                                <td class="col-sm-1" style="text-align: center;font-weight:bold;color: #31708f;">Thao Tác</td>
                            </tr>
                            <?php if ($list_team): ?>
                                <?php foreach ($list_team as $key => $value): ?>
                                    <tr>
                                        <td><?php echo $key + 1 ?></td>
                                        <td><?php echo $value['username'] ?></td>
                                        <td>
                                            <?php echo ($value['is_rating'] == 1) ? '<span class="label label-success">Đã đánh giá</span>' : '<span class="label label-warning">Chưa đánh giá</span>' ?>
                                        </td>
                                        <td>
                                            <?php if ($value['is_rating'] == 1): ?>
                                                <a href="<?php echo base_url('member/new_rating/index?id=' . $product_id . '&main_service=' . $main_service . '&member_id=' . $value['id']); ?>">
                                                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                                </a>    
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            <?php endif ?>
                        </table>
                        
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

