        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index-2.html">
                <img src="<?php echo base_url();?>assets/images/logo.png" width="20%" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <!-- <form class="login-form" action="" method="post"> -->
            <?php if ($this->session->flashdata('warn')): ?>
                <div class="alert alert-danger">Username or password you inserted is wrong.</div>
            <?php endif ?>
            <!-- BEGIN LOGIN FORM -->
            <?php $attributes = array('class' => "login-form"); echo form_open('admin/main/login_process',$attributes); ?>
                <h3 class="form-title font-green">Sign In</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input name="login_id" class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" required="" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input name="password" class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" required="" /> </div>
                <div class="create-account">
                    <button type="submit" class="btn green uppercase">Login</button>
                </div>
            <?php echo form_close(); ?>
            <!-- END LOGIN FORM -->
            </div>
            <!-- END LOGIN FORM -->
            <!-- END LOGIN -->
        
</script>
</body>
</html>
