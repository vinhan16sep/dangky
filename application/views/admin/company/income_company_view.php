<style>
    .table thead > tr:first-child th{
        padding-bottom: 15px;
        padding-top: auto;
    }
    .Tableorter-noSort{
        background-image: initial!important;
    }
</style>
    <script src="<?php echo site_url('assets/admin/js/admin/jquery.tablesorter.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo site_url('assets/admin/css/tablesorter.css'); ?>">
<!--main content start-->
<div class="content-wrapper" style="min-height: 916px;">
    <div class="box-body pad table-responsive">
        <h3>Danh sách doanh nghiệp</h3><a type="button" href="<?php echo site_url('admin/company/export/' . $requestYear); ?>" class="btn btn-success">EXPORT DATA DOANH NGHIỆP</a>
        <a type="button" href="<?php echo site_url('admin/company/export_product/' . $requestYear); ?>" class="btn btn-success">EXPORT DATA SẢN PHẨM</a>
    </div>

    <section class="content">

        <div class="row">
            <form action="<?php echo base_url('admin/company/income/' . $requestYear) ?>" class="form-horizontal col-md-12 col-sm-12 col-xs-12" method="get" style="margin-bottom: 30px;">
                
                <input type="text" name="search" value="<?php echo ($keywords != '')? $keywords : '' ?>" placeholder="Tìm Kiếm Doanh Nghiệp..." class="form-control" style=" width: 40%; float: left;margin-right: 5px;">
                <input type="submit" name="btn-search" value="Tìm Kiếm" class="btn btn-primary" style="float: left">
            </form>
            <!-- /.col -->
            <div class="col-md-12">
                <div class="tab-content" style="margin-bottom: 40px;">
                    <?php if ($companies): ?>
                        <div class="post box-body">
                            <table class="tablesorter tablesorter-default table table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th rowspan="2" class="Tableorter-noSort">STT</th>
                                        <th rowspan="2" class="Tableorter-noSort">Tên Doanh Nghiệp</th>
                                        <th rowspan="2" class="Tableorter-noSort">Logo</th>
                                        <th colspan="3" class="Tableorter-noSort" style="padding-bottom: 0px;">Doanh thu</th>
                                        <th colspan="3" class="Tableorter-noSort" style="padding-bottom: 0px;">Nhân sự</th>
                                        <th rowspan="2" class="Tableorter-noSort">Trạng thái</th>
                                        <th rowspan="2" class="Tableorter-noSort" style="text-align: center;">Thao Tác</th>
                                    </tr>
                                    <tr>
                                        <th>2019</th>
                                        <th>2018</th>
                                        <th>2017</th>
                                        <th class="Tableorter-noSort">2019</th>
                                        <th class="Tableorter-noSort">2018</th>
                                        <th class="Tableorter-noSort">2017</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($companies as $key => $value): ?>
                                        <tr>
                                            <td><?php echo $number-- ?></td>
                                            <td style="width: 20%;"><?php echo $value['company'] ?></td>
                                            <td style="width: 10%;">
                                                <?php if ( isset($value['avatar']) && file_exists('assets/upload/avatar/' . $value['avatar']) ): ?>
                                                    <img style="width: 50% !important;" width="100" height="100" class="profile-user-img img-responsive" src="<?php echo base_url('assets/upload/avatar/') . $value['avatar']; ?>" alt="User profile picture">
                                                <?php else: ?>
                                                    <img style="width: 50% !important;" width="100" height="100" class="profile-user-img img-responsive" src="<?php echo site_url('assets/public/img/logo.png'); ?>" alt="User profile picture">
                                                <?php endif ?>
                                            </td>
                                            <td style="<?php echo ($value['total_income_2'] > $value['total_income_3']) ? 'color:red' : '' ?>"><?php echo $value['total_income_3'] ?></td>
                                            <td style="<?php echo ($value['total_income_1'] > $value['total_income_2']) ? 'color:red' : '' ?>"><?php echo $value['total_income_2'] ?></td>
                                            <td><?php echo $value['total_income_1'] ?></td>
                                            <td><?php echo $value['total_labor_3'] ?></td>
                                            <td><?php echo $value['total_labor_2'] ?></td>
                                            <td><?php echo $value['total_labor_1'] ?></td>

                                            <?php if($this->ion_auth->user()->row()->email == 'admin@admin.com'){ ?>
                                                <td><?php echo ($value['final'] == 0) ? '<i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i>' : '<a id="openStatus" onclick="openStatus(' . $value['client_id'] . ');" href="javascript:void(0);"><i style="color:green;" class="fa fa-check-circle" aria-hidden="true"></i></a>'; ?></td>
                                            <?php }else{ ?>
                                                <td><?php echo ($value['final'] == 0) ? '<i style="color:red;" class="fa fa-times-circle" aria-hidden="true"></i>' : '<i style="color:green;" class="fa fa-check-circle" aria-hidden="true"></i>'; ?></td>
                                            <?php } ?>
                                            <td style="text-align: center;">
                                                <a href="<?php echo base_url('admin/company/detail/' . $value['id'] . '/' . $requestYear) ?>" class="btn btn-info">Thông tin DN</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <div class="post">Chưa có doanh nghiệp đăng ký!</div>
                    <?php endif ?>
                </div>
                <!-- /.tab-content -->
                <div class="col-md-6 col-md-offset-5 page">
                    <?php echo $page_links ?>
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
</div>
<script src="<?php echo site_url('assets/admin/'); ?>bower_components/select2/dist/js/select2.full.js"></script>
<script type="text/javascript">
    var url = location.protocol + "//" + location.host + (location.port ? ':' + location.port : '');
    $('.change-member').click(function(){
        var change_member = $(this);
        var member_id = $(this).data('memberid');
        var client_id = $(this).parents('td').data('client');
        var company_id = $(this).parents('td').data('company');
        if(confirm('Chắc chắn xoá thành viên hội đồng?')){
            jQuery.ajax({
                method: "get",
                url: url + '/admin/company/change_member',
                data: {member_id : member_id, client_id : client_id, company_id : company_id},
                success: function(result){
                    if(JSON.parse(result).isExitsts == true){
                        $(change_member).parents('li').fadeOut();
                    }
                }
            });
        };
    });
</script>
<script>
    function openStatus(userId){
        if(confirm("Chắc chắn mở lại cho doanh nghiệp đã chọn nhập lại thông tin?")){
            $.ajax({
                url: "<?php echo base_url('admin/users/open_final/'); ?>" + userId,
                success: function(result){
                    if(JSON.parse(result).message == 'done'){
                        if(!alert('Doanh nghiệp cần xác nhận lại toàn bộ thông tin, nếu muốn gửi lại Ban tổ chức')){window.location.reload();}
                    }
                }
            });
        }

    }
</script>
<script>
    $(function(){
        $('table').tablesorter({
            widgets        : ['zebra', 'columns'],
            usNumberFormat : false,
            sortReset      : true,
            sortRestart    : true,
            cssNoSort    : 'Tableorter-noSort',
        });
    });
    </script>