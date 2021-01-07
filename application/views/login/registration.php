
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form action="<?php echo base_url('home/proses_add_user'); ?>" method="POST" class="login100-form validate-form flex-sb flex-w">
					<?php
					if (!empty($this->session->flashdata('msg'))) {
						$message = $this->session->flashdata('msg');
						?>
						<div class="alert alert-<?php echo $message['class']?>" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<center><?php echo $message['message'] ?></center>
						</div>
					<?php } ?>
					<span class="login100-form-title p-b-32">
						Registrasi
					</span>

					<span class="txt1 p-b-2">
						Nama Lengkap
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Nama Tidak Boleh Kosong">
						<input class="input100" type="text" name="nama" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-2">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Email Tidak Boleh Kosong">
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-2">
						Nama Pengguna
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Nama Pengguna Tidak Boleh Kosong is required">
						<input class="input100" type="text" name="nama-pengguna" >
						<span class="focus-input100"></span>
					</div>
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
					<span class="txt1 p-b-11">
						Nomor HP
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Nama Pengguna Tidak Boleh Kosong is required">
						<input class="input100" onkeypress="return hanyaAngka(event)" name="hp" placeholder="0898989897" type="text">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Daftar
						</button>
					</div>
					<!-- <div class="row">
						<div class="txt1 text-center p-l-110 p-t-54" >
							<span>
								Daftar Dengan :
							</span>
						</div>
					</div>
					<div  style="margin-left: 100px" class="row">
						<div class="flex-c-m">
							<a href="#" class="login100-social-item bg1">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="#" class="login100-social-item bg3">
								<i class="fa fa-google"></i>
							</a>
						</div>
					</div> -->
					<div class="row">
						<div class="txt1 text-center p-l-110 p-t-54" >
							<span>
								Punya Akun?<a href="<?php echo base_url('user-login') ?>" style="color: blue;">
								<i>Masuk</i>
							</a>
							</span>
							<hr>
							<p><a href="<?php echo base_url() ?>" style="color: blue;">
								<i>kembali</i>
							</a></p>
						</div>
					</div>
					

				</form>
			</div>
		</div>
	</div>
	
	<script >
		function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
 
            return false;
          return true;
        }
    
        $(document).ready(function(){       
            $('.form-checkbox').click(function(){
                if($(this).is(':checked')){
                    $('.form-password').attr('type','text');
                }else{
                    $('.form-password').attr('type','password');
                }
            });
        });
	</script>

