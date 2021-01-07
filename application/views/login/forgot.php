
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<?php
				if (!empty($this->session->flashdata('msg'))) {
					$message = $this->session->flashdata('msg');
					?>
					<div class="alert alert-<?php echo $message['class']?>" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<center><?php echo $message['message'] ?></center>
					</div>
				<?php } ?>
				<form action="<?php echo base_url('home/forgotPassword'); ?>" method="POST" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Lupa Password
					</span>

					<span class="txt1 p-b-11">
						Masukkan Alamat Email Akun Anda
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
						<input class="input100" type="text" name="email" >
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Kirim
						</button>
						<hr style="padding-top: 50px">
						<p><a href="<?php echo base_url('user-login') ?>" style="color: blue;">
							<i>batal </i>
						</a></p>
					</div>

				</form>
			</div>
		</div><
	</div>
	

