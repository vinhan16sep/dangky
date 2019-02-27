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
                            <div class="panel panel-info">
                                <div class="panel-heading"><h4>Nhóm: <span style="color: red"><?php echo $value['name']; ?></span></h4></div>
                                <div class="panel-body">
                                    <!--main content start-->
                                    <div class="row">
                                        <!-- /.col -->
                                        <div class="col-md-12">
                                                <div class="tab-content">
                                                    <?php if ( isset($value['product_list'])): ?>
                                                    <div class="post box-body">
                                                        <table class="table table-striped table-bordered table-condensed">
                                                            <tr>
                                                                <td class="col-md-1">STT</td>
                                                                <td class="col-md-9">Tên sản phẩm</td>
                                                                <td class="col-md-2" style="text-align: center;">Thao Tác</td>
                                                            </tr>
                                                            <?php foreach ($value['product_list'] as $key => $value): ?>
                                                                <tr>
                                                                    <td><?php echo $key + 1 ?></td>
                                                                    <td><?php echo $value['name']; ?></td>
                                                                    <td style="text-align: center; width: 40%">
                                                                        <a href="<?php echo base_url('member/product/detail/' . $value['id']) ?>" class="btn btn-info">Thông tin sản phẩm</a>
                                                                        <a href="<?php echo base_url('member/new_rating/index/' . $value['id']) ?>" class="btn btn-success">Chấm điểm</a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach ?>
                                                            
                                                        </table>
                                                    </div>
                                                    <?php else: ?>
                                                        <div class="post">Không có sản phẩm được chỉ định!</div>
                                                    <?php endif ?>
                                                </div>
                                                <!-- /.tab-content -->
                                            <!-- /.nav-tabs-custom -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </div>
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

