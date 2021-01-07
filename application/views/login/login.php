	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<?php
				if (!empty($this->session->flashdata('msg'))) {
					$message = $this->session->flashdata('msg');
				?>
					<div class="alert alert-<?php echo $message['class'] ?>" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<center><?php echo $message['message'] ?></center>
					</div>
				<?php } ?>
				<form action="<?php echo base_url('home/aksi_login'); ?>" method="POST" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						login
					</span>

					<span class="txt1 p-b-11">
						Nama Pengguna
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate="Nama Harus Di Isi">
						<input class="input100" type="text" name="userInput" value="<?php echo set_value('userInput'); ?>">
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Kata Sandi
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate="Password Harus Di Isi">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" value="<?php echo set_value('password'); ?>">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-48">
						<div>
							<a href="<?php echo base_url('forgot') ?>" class="txt3">
								Lupa Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Masuk
						</button>
					</div>

					<div class="w-full text-center mx-auto pt-4">
						Masuk Dengan :
					</div>
					<div class="flex-c-m text-center mx-auto">
						<a href="<?= base_url(); ?>home/fblogin" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="<?= base_url(); ?>home/glogin" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>
					<div class="w-full text-center mx-auto pt-4">
						Atau Daftar <a href="<?php echo base_url('user-registration') ?>" style="color: blue;">
							<i>disini !</i>

						</a>
						<hr>
						<p><a href="<?php echo base_url() ?>" style="color: blue;">
								<i>kembali </i>
							</a></p>
					</div>

					<!-- <div class="row">
						<div class="txt1 text-center p-l-110 p-t-54" >
							<span>
								Masuk Dengan :
							</span>
						</div>
					</div> -->
					<!-- <div class="row mx-auto">
						<div class="flex-c-m text-center" >
							<a href="<?= base_url(); ?>home/fblogin" class="login100-social-item bg1">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="<?= base_url(); ?>home/glogin" class="login100-social-item bg3">
								<i class="fa fa-google"></i>
							</a>
						</div>
					</div> -->
					<!-- <div class="row">
						<div class="txt1 text-center p-l-110 p-t-54">
							<span>
								Atau Daftar <a href="<?php echo base_url('user-registration') ?>" style="color: blue;">
									<i>disini !</i>
								</a>
							</span>
							<hr>
							<p><a href="<?php echo base_url() ?>" style="color: blue;">
									<i>kembali </i>
								</a></p>
						</div>
					</div> -->


				</form>
			</div>
		</div>
	</div>