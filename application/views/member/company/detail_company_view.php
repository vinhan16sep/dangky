<!--main content start-->
<div class="content-wrapper" style="min-height: 916px;">
    <div class="box-body pad table-responsive">
        <h3>Thông tin doanh nghiệp: <span style="color:red;"><?php echo $company['company']; ?></span></h3>
    </div>
    <section class="content">

        <div class="row">
            <!-- /.col -->
            <div class="col-md-6">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <div class="post">
                            <h4>Thông tin khác</h4>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <a><i class="fa fa-globe margin-r-5"></i> Website</a> <p class="pull-right"><?php echo $company['website'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-user margin-r-5"></i> Tên người đại diện pháp luật</a> <p class="pull-right"><?php echo $company['legal_representative'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-star margin-r-5"></i> Chức danh</a> <p class="pull-right"><?php echo $company['position'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-envelope margin-r-5"></i> Email</a> <p class="pull-right"><?php echo $company['lp_email'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-mobile margin-r-5"></i> Di động</a> <p class="pull-right"><?php echo $company['lp_phone'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-user margin-r-5"></i> Tên người liên hệ với BTC</a> <p class="pull-right"><?php echo $company['connector'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-star margin-r-5"></i> Chức danh</a> <p class="pull-right"><?php echo $company['c_position'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-envelope margin-r-5"></i> Email</a> <p class="pull-right"><?php echo $company['c_email'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-mobile margin-r-5"></i> Di động</a> <p class="pull-right"><?php echo $company['c_phone'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-link margin-r-5"></i> Link download PĐK của DN</a> <p class="pull-right"><?php echo $company['link'] ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <div class="col-md-6">
                <div class="nav-tabs-custom">
                    <div class="tab-content">
                        <div class="post">
                            <h4>Thông tin doanh nghiệp</h4>
                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn điều lệ năm 2015 (triệu VND)</a> <p class="pull-right"><?php echo $company['equity_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn điều lệ năm 2016 (triệu VND)</a> <p class="pull-right"><?php echo $company['equity_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn điều lệ năm 2017 (triệu VND)</a> <p class="pull-right"><?php echo $company['equity_2017'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn chủ sở hữu 2015 (triệu VND)</a> <p class="pull-right"><?php echo $company['owner_equity_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn chủ sở hữu 2016 (triệu VND)</a> <p class="pull-right"><?php echo $company['owner_equity_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Vốn chủ sở hữu 2017 (triệu VND)</a> <p class="pull-right"><?php echo $company['owner_equity_2017'] ?></p>
                                </li>

                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu DN 2015</a> <p class="pull-right"><?php echo $company['total_income_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu DN 2016</a> <p class="pull-right"><?php echo $company['total_income_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu DN 2017</a> <p class="pull-right"><?php echo $company['total_income_2017'] ?></p>
                                </li>

                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT lĩnh vực sx phần mềm 2015 (Triệu VND)</a> <p class="pull-right"><?php echo $company['software_income_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT lĩnh vực sx phần mềm 2016 (Triệu VND)</a> <p class="pull-right"><?php echo $company['software_income_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT lĩnh vực sx phần mềm 2017 (Triệu VND)</a> <p class="pull-right"><?php echo $company['software_income_2017'] ?></p>
                                </li>

                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu dịch vụ CNTT 2015 (triệu VND)</a> <p class="pull-right"><?php echo $company['it_income_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu dịch vụ CNTT 2016 (triệu VND)</a> <p class="pull-right"><?php echo $company['it_income_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng doanh thu dịch vụ CNTT 2017 (triệu VND)</a> <p class="pull-right"><?php echo $company['it_income_2017'] ?></p>
                                </li>

                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT xuất khẩu (USD) 2015</a> <p class="pull-right"><?php echo $company['export_income_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT xuất khẩu (USD) 2016</a> <p class="pull-right"><?php echo $company['export_income_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-money margin-r-5"></i> Tổng DT xuất khẩu (USD) 2017</a> <p class="pull-right"><?php echo $company['export_income_2017'] ?></p>
                                </li>

                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số lao động của DN 2015</a> <p class="pull-right"><?php echo $company['total_labor_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số lao động của DN 2016</a> <p class="pull-right"><?php echo $company['total_labor_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số lao động của DN 2017</a> <p class="pull-right"><?php echo $company['total_labor_2017'] ?></p>
                                </li>

                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số LTV 2015</a> <p class="pull-right"><?php echo $company['total_ltv_2015'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số LTV 2016</a> <p class="pull-right"><?php echo $company['total_ltv_2016'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-users margin-r-5"></i> Tổng số LTV 2017</a> <p class="pull-right"><?php echo $company['total_ltv_2017'] ?></p>
                                </li>

                                <li class="list-group-item" style="min-height:200px;">
                                    <a><i class="fa fa-file margin-r-5"></i> Giới thiệu chung</a> <p class="" style="padding-left:20px;"><?php echo $company['description'] ?></p>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-circle margin-r-5"></i> SP dịch vụ chính của DN</a>
                                    <?php if(!empty($company['main_service'])): ?>
                                    <?php $main_service = json_decode($company['main_service']) ?>
                                    <?php foreach ($main_service as $key => $value): ?>
                                        <p class="" style="padding-left:20px;"><?php echo $value ?></p>
                                    <?php endforeach ?>
                                    <?php endif; ?>
                                </li>
                                <li class="list-group-item">
                                    <a><i class="fa fa-globe margin-r-5"></i> Thị trường chính</a>
                                    <?php if(!empty($company['main_market'])): ?>
                                    <?php $main_market = json_decode($company['main_market']) ?>
                                    <?php foreach ($main_market as $key => $value): ?>
                                        <p class="" style="padding-left:20px;"><?php echo $value ?></p>
                                    <?php endforeach ?>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
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

