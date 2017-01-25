                    <div class="col-md-9">
                        <div class="content">
                            <div class="title">
                                <h4>Pendaftaran Tes TOEFL ITP</h4>
                            </div>
                            <div class="text-right notif">Total pendaftar saat ini : <b>2000</b>
                            </div>
                            <div class="form-horizontal" role="form">
                            <?php echo form_open('dashboard/setPendaftaran'); ?>
                               
                                <div class="form-group">
                                    <label for="nim" class="col-sm-3 control-label">NIM</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="nim" placeholder="Nomor Induk Mahasiswa" class="form-control" disabled maxlength="15" value="<?php echo $this->session->userdata('nim') ?>">
                                        <input type="text" id="nim" name="nim" class="form-control hidden" maxlength="15" value="<?php echo $this->session->userdata('nim') ?>">
                                        <input type="text" id="nim" name="id_mahasiswa" class="form-control hidden" maxlength="15" value="<?php echo $this->session->userdata('id_mahasiswa') ?>">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="firstName" class="col-sm-3 control-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="firstName" name="nama" title="Masukkan Nama Lengkap" placeholder="Masukkan Nama Lengkap" class="form-control" value=" <?php foreach ($this->session->userdata('nama') as $name) { echo $name->nama;} ?> " >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country" class="col-sm-3 control-label">Fakultas</label>
                                    <div class="col-sm-9">
                                        <select id="fakultas" class="form-control" name="fakultas" disabled >
                                            <option value="0">
                                            <?php foreach ($akademik as $fak): ?>
                                                <?php echo $fak->fakultas ?>
                                            <?php endforeach ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan" class="col-sm-3 control-label">Jurusan</label>
                                    <div class="col-sm-9">
                                        <select id="jurusan" class="form-control" name="jurusan" disabled >
                                            <option value="0">
                                            <?php foreach ($akademik as $fak): ?>
                                                <?php echo $fak->jurusan ?>
                                            <?php endforeach ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="country" class="col-sm-3 control-label">Program Studi</label>
                                    <div class="col-sm-9">
                                        <select id="prodi" class="form-control" name="prodi" disabled >
                                            <option value="0">
                                            <?php foreach ($akademik as $fak): ?>
                                                <?php echo $fak->program_studi ?>
                                            <?php endforeach ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Jenis Kelamin</label>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="radio-inline">
                                                    <input type="radio" id="femaleRadio" value="Female" name="gender">Perempuan
                                                    <input type="radio" id="femaleRadio" value="Male" name="gender">Laki-Laki
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div> <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="birthDate" class="col-sm-3 control-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="date" id="birthDate" class="form-control" name="birthdate">
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">No. Telpon</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="name"  placeholder="Masukkan Nomor Telpon" class="form-control" name="no_telpon" required>
                                        <span class="help-block">contoh : +6285739463366</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" id="email" placeholder="Masukkan Email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" required >Saya menyetujui <a href="#">ketentuan dan persyaratan</a> yang telah ditentukan 
                                            </label>
                                        </div>
                                    </div>
                                </div> <!-- /.form-group -->
                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                    </div>
                                </div>
                            <?php form_close(); ?>
                            </div> <!-- /form -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->


