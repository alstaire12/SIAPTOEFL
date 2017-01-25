    <div class="container">
        <div class="row" style="float:left">
            <div class="col-md-8  col-xs-12">
                    <div class="line"></div>
                        <div class="tile">
                            <h3>Selamat Datang di SIAP TOEFL</h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Gapura UB adalah portal untuk mengakses layanan teknologi informasi yang ada di lingkungan Universitas Brawijaya. Selain itu aplikasi ini juga merupakan pintu masuk untuk aplikasi Google Apps. Gapura UB bisa digunakan oleh mahasiswa, dosen, dan karyawan UB sesuai dengan lingkup hak aksesnya.
                        </div>                    
            </div>
            <div class="col-md-4  col-xs-12">
                
                        <div class="line"></div>
                            <div class="tile">
                                    <h3 class="text-center">Login Mahasiswa</h3>
                                    <?php
                                    echo form_open('main/loginProcess'); ?>
                                     <?php if ($this->session->flashdata('message')): ?>
                                    <div class="alert alert-danger">
                                          <?php echo $this->session->flashdata('message'); ?>
                                    </div>
                                    <?php endif ?>
                                      <div class="form-group">
                                        <label for="nim">NIM</label>
                                        <input type="text" class="form-control" id="nim" name="nim" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" required >
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                   
                                <?php echo form_close(); ?>
                            </div>
                            </div></div>
                    <div class="row">
                        <div class="col-md-4 col-xs-12" style="float:right; clear:both">
                            <div class="line"></div>
                            <div class="tile">
                                <h3 class="text-center">Need Help ?</h3>
                                Unit Pengembangan Bahasa<br>
                                Brawijaya Language Center<br>
                                Gedung Inbis Lt. 2 Universitas Brawijaya, Malang<br>
                                Telp. (0341) 551611 ext. 134 langsung +62 341 575878<br>
                                Email helpdesk[at]ub.ac.id<br>
                                YM : 
                            </div>
                        </div>
                        <div class="col-md-8 col-xs-12"  style="float:right; clear:booth">
                            <div class="media">
                                <h4 class="grey-text"><i>Supported by</i></h4>
                                <hr>
                                <a href="#">
                                    <img class="img-responsive portfolio-item" src="<?php echo base_url(); ?>assets/images/toefl.png" width="70%"alt="">
                                </a>
                            </div>
                        </div></div>
                <!-- /.row -->


