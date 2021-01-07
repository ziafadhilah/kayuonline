<section class="wrapper">

    <div class="container">


        <div class="row" style="margin-left:0;margin-right:0;">
            <div class="col-md-7">
                <form action="<?= base_url('home/update_profil/') . $this->dataencryption->enc_dec("encrypt", $this->session->userdata('idUser')); ?>" method="post">

                    <?php
                    if (!empty($this->session->flashdata('msg'))) {
                        $message = $this->session->flashdata('msg');
                    ?>
                        <div class="alert alert-<?php echo $message['class'] ?>" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <center><?php echo $message['message'] ?></center>
                        </div>
                    <?php } ?>
                    <div class="header">
                        <h3>PROFIL</h3>
                    </div>
                    <hr style="border:1px solid black">
                    <form method="post" action="<?= base_url(); ?>home/update_profil">
                        <?php if ($this->session->userdata('provider') == 'app') {
                            foreach ($users as $user) { ?>
                                <?php ?>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" value="<?= $user->username ?>" class="form-control" placeholder="Username" required disabled>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama Lengkap <span title="required" style="color:red">*</span></label>
                                    <input type="text" name="nama" value="<?= $user->nama ?>" class="form-control" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label>Email <span title="required" style="color:red">*</span></label>
                                    <input for="email" type="email" name="email" value="<?= $user->email ?>" class="form-control" placeholder="Contoh@Email.com" required>
                                </div>
                                <div class="form-group">
                                    <label>No HP <span title="required" style="color:red">*</span></label>
                                    <input onkeypress="return hanyaAngka(event)" for="no_hp" type="no_hp" name="no_hp" value="<?= $user->no_hp ?>" class="form-control" required>
                                </div>
                                <!-- <div class="form-group">
                                    <label>Password <span title="required" style="color:red">*</span></label>
                                    <div class="input-group mb-3">

                                        <input type="password" id="current" name="password" class="form-control" value="<?= $this->dataencryption->enc_dec("decrypt", $user->password) ?> " required>
                                        <div class="input-group-append">

                                            <div class="input-group-append">
                                                <button onclick="show('current');" class="btn btn-outline-secondary" type="button"><i id="cp-current" class="fa fa-eye" id="display"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Ulangi Password <span title="required" style="color:red">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="password" id="repass" class="form-control" value="" name="repassword" required>
                                        <div class="input-group-append">
                                            <div class="input-group-append">
                                                <button onclick="show('repass');" class="btn btn-outline-secondary" type="button"><i id="cp-repass" class="fa fa-eye" id="display"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <button type="submit" class="btn btn-success">Update</button>
                                <!-- <input style="background-color: green; color: white" type="submit" name="order" class="btn btn-block" value="Update"> -->

                            <?php }
                        } else if ($this->session->userdata('provider') == 'facebook') { ?>

                            <div class="form-group">
                                <img src="<?= base_url() ?>assets/img/loginwithfacebook.png">
                            </div>
                            <div class="form-group">
                                <label for="name">Nama Lengkap <span title="required" style="color:red">*</span></label>
                                <input type="text" name="nama" value="<?= $this->session->userdata('namaUser') ?>" class="form-control" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <label>Email <span title="required" style="color:red">*</span></label>
                                <input for="exampleInputEmail1" type="email" name="email" value="<?= $this->session->userdata('email') ?>" class="form-control" placeholder="Contoh@Email.com" required>
                            </div>
                        <?php } else if ($this->session->userdata('provider') == 'google') { ?>
                            <div class="form-group">
                                <img src="<?= base_url() ?>assets/img/loginwithgoogle.jpg" width="70%">
                            </div>
                            <div class="form-group">
                                <label for="name">Nama Lengkap <span title="required" style="color:red">*</span></label>
                                <input type="text" name="nama" value="<?= $this->session->userdata('namaUser') ?>" class="form-control" placeholder="Nama Lengkap" required>
                            </div>
                            <div class="form-group">
                                <label>Email <span title="required" style="color:red">*</span></label>
                                <input for="exampleInputEmail1" type="email" name="email" value="<?= $this->session->userdata('email') ?>" class="form-control" placeholder="Contoh@Email.com" required>
                            </div>
                        <?php } ?>

                    </form>
            </div>
        </div>
    </div>

    <script>
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }

        // function show(e) {
        //     if ($('#' + e).attr('type') == 'password') {
        //         $('#cp-' + e).removeClass('fa fa-eye');
        //         $('#cp-' + e).addClass('fa fa-eye-slash');
        //         $('#' + e).attr('type', 'text');
        //     } else {
        //         $('#cp-' + e).removeClass('fa fa-eye-slash');
        //         $('#cp-' + e).addClass('fa fa-eye');
        //         $('#' + e).attr('type', 'password');
        //     }
        // }
    </script>


</section>