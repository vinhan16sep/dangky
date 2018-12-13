<div class="content-wrapper" style="min-height: 916px;">
    <h1><?php echo lang('change_password_heading');?></h1>
    <section class="content">
        <div class="col-lg-10 col-lg-offset-0">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Thay đổi mật khẩu</h1>
                <?php echo $this->session->flashdata('message'); ?>
                <?php echo form_open('client/auth/change_password', array('class' => 'form-horizontal')); ?>
                <div class="form-group">
                    <?php echo form_label('Mật khẩu hiện tại', 'old'); ?>
                    <?php echo form_error('old'); ?>
                    <?php echo form_input($old_password);?>
                </div>
                <div class="form-group">
                    <?php echo form_label('Mật khẩu mới', 'new'); ?>
                    <?php echo form_error('new'); ?>
                    <?php echo form_input($new_password);?>
                </div>
                <div class="form-group">
                    <?php echo form_label('Xác nhận mật khẩu mới', 'new_confirm'); ?>
                    <?php echo form_error('new_confirm'); ?>
                    <?php echo form_input($new_password_confirm);?>
                </div>
                <?php echo form_input($user_id);?>
                <?php echo form_submit('submit', 'Thay đổi', 'class="btn btn-primary btn-lg btn-block"'); ?>
                <?php echo form_close(); ?>
            </div>
        </div>
    </section>
</div>