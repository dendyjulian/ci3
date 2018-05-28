<?php echo form_open('user/register', array('class' => 'needs-validation', 'novalidate' => '')); ?> 
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-85 p-b-20">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-70">
                       Daftar User
                    </span>
                    <div class="wrap-input100 validate-input m-b-50" data-validate="Masukan Nama Lengkap">
                        <input class="input100" type="text" name="nama" required>
                        <span class="focus-input100" data-placeholder="Nama Lengkap"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-50" data-validate="Masukan Kodepos">
                        <input class="input100" type="text" name="kodepos" required>
                        <span class="focus-input100" data-placeholder="Kodepos"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Masukan Email">
                        <input class="input100" type="email" name="email" required>
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Masukan Username">
                        <input class="input100" type="text" name="username" required autofocus>
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Masukan Password">
                        <input class="input100" type="password" name="password" required>
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Masukan Password">
                        <input class="input100" type="password" name="password2" required>
                        <span class="focus-input100" data-placeholder="Confirm Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                           Submit
                        </button>
                    </div>
                    <?php echo form_close(); ?>
                </form>
            </div>
        </div>
    </div>
    
    




