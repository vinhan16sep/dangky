<html>
<body>
	<strong>Kính gửi quý công ty!</strong>
	<p>Công ty đã sử dụng mail: <?php echo $identity ?> để đăng ký tài khoản tham gia chương trình Danh hiệu Sao Khuê 2019.</p>
	<p>Vui lòng click đường link <?php echo sprintf(lang('email_activate_subheading'), anchor('client/user/activate/'. $id .'/'. $activation, lang('email_activate_link')));?> và khai hồ sơ.</p>
	<p>Trường hợp không đăng nhập được vui lòng liên hệ: <strong>Anh Mạc Công Minh</strong>, mobile: 0936 136 696, email: minhmc@vinasa.org.vn để được hỗ trợ</p>
	<br>
	<br>
	<br>
	<p>Trân trọng!</p>
</body>
</html>