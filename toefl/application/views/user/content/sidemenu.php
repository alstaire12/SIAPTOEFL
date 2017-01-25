    <div class="container">
        <div class="row">
            <div class="col-md-3">
            <ul id="sidebar" class="nav nav-pills nav-stacked">
                <li <?php echo ($this->uri->segment(1) === 'dashboard') ? 'class="active"' : ''?>>
                    <a href="<?php echo base_url().'dashboard'?>">  Dashboard</a></li>
                <hr>
                <li <?php echo ($this->uri->segment(1) === 'registration_test') ? 'class="active"' : ''?>>
                    <a href="<?php echo base_url().'registration_test'?>"><span class="glyphicon glyphicon-user"></span>  Pendaftaran Tes</a></li>
                <li <?php echo ($this->uri->segment(1) === 'schedule_test') ? 'class="active"' : ''?>>
                    <a href="<?php echo base_url().'schedule_test'?>"><span class="glyphicon glyphicon-list-alt"></span>  Lihat Jadwal Tes</a></li>
                <li  <?php echo ($this->uri->segment(1) === 'score_test') ? 'class="active"' : ''?>> 
                    <a href="<?php echo base_url().'score_test'?>"><span class="glyphicon glyphicon-signal"></span>  Skor TOEFL</a></li>
                <hr>
                <li >   
                    <a href="#"><span class="glyphicon glyphicon-question-sign"></span>  Bantuan</a></li>
                <li>
                    <a href="<?php echo base_url().'main/logout'?>"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
            </ul>
            </div>