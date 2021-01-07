
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
				<form action="<?php echo base_url('home/prossesChangePassword'); ?>" method="POST" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						<h4>ganti Password Untuk Email</h4>
						<h6><i><?php echo $this->session->userdata('reset_email'); ?></i></h6>
					</span>
					<span class="txt1 p-b-11">
						Kata Sandi
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Kata Sandi Tidak Boleh Kosong">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="sandi" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Ulangi Kata Sandi
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Kata Sandi Tidak Boleh Kosong">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="sandi-2" >
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Ganti Password
						</button>
					</div>
				</form>
			</div>
		</div><
	</div>
	

