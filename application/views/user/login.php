<?php echo form_open('user/login'); ?>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-85 p-b-20">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-70">
                        Hello EveryBody!
                    </span>
                    <span class="login100-form-avatar">
                        <img src="<?php echo base_url().'assets/images/images.jpg'?>" alt="AVATAR">
                    </span>
                    <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
                        <input class="input100" type="text" name="username" required autofocus>
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                        <input class="input100" type="password" name="password" required>
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    <?php echo form_close(); ?>
                    <ul class="login-more p-t-190">
                        <li>
                            <span class="txt1">
                                Don’t have an account?
                            </span>

                            <a href="" class="txt2">
                                Sign up
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    


