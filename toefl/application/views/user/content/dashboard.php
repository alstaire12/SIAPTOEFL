                   <div class="col-md-9">
                   <?php if ($this->session->userdata('nama') == ''){ ?>
                        <div class="content">
                            <div class="title">
                                <h4>Lengkapi Data Anda</h4>
                            </div>
                            <br>
                            <div class="form-horizontal" role="form">
                        <?php echo form_open('dashboard/setDataMahasiswa'); ?>
                              <div class="form-group">
                                    <label for="nim" class="col-sm-3 control-label">NIM</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="nim" placeholder="Nomor Induk Mahasiswa" class="form-control" disabled maxlength="15" value="<?php echo $this->session->userdata('nim') ?>">
                                        <input type="text" id="nim" name="nim" class="form-control hidden" maxlength="15" value="<?php echo $this->session->userdata('nim') ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="name" name="nama" placeholder="Masukkan Nama Lengkap" class="form-control" autofocus>
                                    </div>
                                </div>
                              
                               <div class="form-group">
                                    <label for="country" class="col-sm-3 control-label">Fakultas</label>
                                    <div class="col-sm-9">
                                        <select id="fakultas" class="form-control" name="fakultas" required>
                                            <option value="0">Pilih Fakultas</option>
                                            <?php foreach ($fakultas as $fak): ?>
                                                <option value="<?php echo $fak->id_fakultas ?>"><?php echo $fak->fakultas ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan" class="col-sm-3 control-label">Jurusan</label>
                                    <div class="col-sm-9">
                                        <select id="jurusan" class="form-control" name="jurusan" required>
                                            <option>Pilih Jurusan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country" class="col-sm-3 control-label">Program Studi</label>
                                    <div class="col-sm-9">
                                        <select id="prodi" class="form-control" name="prodi" required>
                                            <option>Pilih Program Studi</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    </div>
                                </div>
                            <!-- </form> --> <!-- /form -->
                            <?php form_close(); ?>
                        </div></div>
                        
                    </div>
                <?php } else { ?>
                    <div class="content">
                             <h4>Selamat Datang, <?php foreach ($this->session->userdata('nama') as $name) { echo $name->nama;} ?></h4>
                             <p>Sistem Informasi Manajemen Data Tes TOEFL ITP ini
                             merupakan sebuah media komunikasi yang dibangun guna memberikan kemudahan akses kepada
                             calon peserta tes TOEFL ITP di Unit Pengembangan Bahasa Universitas Brawijaya secara online.</p>
                  <p>Disini calon peserta tes bahasa bisa melakukan pendaftaran secara online dengan autentikasi akun Mahasiswa Universitas Brawijaya 
                  Setiap riwayat pendaftaran tes dan hasil tes akan diinformasikan langsung melalui akun member masing-masing peserta.
                  <p>Silahkan klik Menu Pendaftaran Tes untuk mulai mendaftar Test TOEFL ITP</p>
                       </div>
                                  <?php } ?>
                </div>

                <!-- /.row -->
