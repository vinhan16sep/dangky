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
                                            <?php
                                                $is_rating = false;
                                                if($value['is_rating'] == 1){
                                                    $rating_status = '<span class="label label-success">Đã đánh giá</span>';
                                                }elseif($value['is_rating'] == 2){
                                                    $rating_status = '<span class="label label-warning">Đang chờ sửa</span>';
                                                }else{
                                                    $rating_status = '<span class="label label-danger">Chưa đánh giá</span>';
                                                }
                                            ?>
                                            <?php echo $rating_status; ?>
                                        </td>
                                        <td align="center">
                                            <?php if ($value['is_rating'] == 1): ?>
                                                <a href="<?php echo base_url('member/new_rating/index?id=' . $product_id . '&main_service=' . $main_service . '&member_id=' . $value['id']); ?>">
                                                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                                </a>
                                                <a id="openRating" data-product="<?php echo $product_id; ?>" data-member="<?php echo $value['id']; ?>" href="javascript:void(0);">
                                                    <i class="fa fa-undo" aria-hidden="true"></i>
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
<script>
    $('#openRating').click(function(){

        $.ajax({
            type: "GET",
            url: "<?php echo base_url('member/new_rating/open_rating'); ?>",
            data: {
                product: $(this).data('product'),
                member: $(this).data('member')
            },
            success: function(result){
                let data = JSON.parse(result);
                if(data.name != undefined){
                    alert('Đã mở phần chấm điểm thành công');
                    window.location.reload();
                }else{
                    alert(data.message)
                }
            }
        });
    });
</script>
