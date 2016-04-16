<!-- Header -->
    <header id="top" class="header">
        <?php if(empty($is_logged)) { ?>
        <div>
            <div class="text-vertical-center user_btn">
                <button type="button" class="btn btn_user  btn_signup" data-toggle="modal" data-target="#signup">SIGNUP</button>
                <button type="button" class="btn btn_user btn_login" data-toggle="modal" data-target="#login">LOGIN</button>
            </div>

            <!-- Modal -->
            <div id="signup" class="modal fade" role="dialog">
                <div class="modal-dialog">

                <!-- Modal content Signup-->
                <div class="modal-content">
                	<div class="modal-header">
                        <button type="button" class="close" style="font-size: 50px;" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title text-center">SIGNUP</h2>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo $this->webroot;?>teachers/signup" role="form">
                            <div class="form-group">
                                <label class="control-label" for="name">Name:</label>
                                <input type="text" name="data[Teacher][name]" class="form-control" id="f_name" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="department">Department:</label>
                                <select name="data[Teacher][department]" class="form-control">
                                    <option value="">Select Department</option>
                                    <option value="CSE">CSE</option>
                                    <option value="EEE">EEE</option>
                                    <option value="ECE">ECE</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="designation">Designation:</label>
                                <select name="data[Teacher][designation]" class="form-control">
                                    <option value="">Select Designation</option>
                                    <option value="Lecturer">Lecturer</option>
                                    <option value="Assistant Professor">Assistant Professor</option>
                                    <option value="Associated Professor">Associated Professor</option>
                                    <option value="Professor">Professor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email">Email:</label>
                                <input type="email" name="data[Teacher][email]" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password:</label>
                                <input type="password" name="data[Teacher][password]" class="form-control" id="pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="confirm password">Confirm Password:</label>
                                <input type="password" name="data[Teacher][confirm_password]" class="form-control" id="con_pass" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn_user  btn_signup pull-right">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div> 
                </div>

                </div>
            </div>

            <!-- Modal Login -->
            <div id="login" class="modal fade" role="dialog">
                <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" style="font-size: 50px;" data-dismiss="modal">&times;</button>
                        <h2 class="modal-title text-center">LOGIN</h2>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo $this->webroot;?>teachers/login" role="form">
                            <div class="form-group">
                                <label class="control-label" for="email">Email:</label>
                                <input type="email" name="data[Teacher][email]" class="form-control" id="email" placeholder="Email Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password:</label>
                                <input type="password" name="data[Teacher][password]" class="form-control" id="pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn_user btn_signup pull-right">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>

                </div>
            </div>
        </div>
        <?php } else { ?>
            <h1>Welcome, <br><?php echo $name_with_des;?></h1>
            <a class="btn btn_user" href="<?php echo $this->webroot;?>quiz_page">CREATE A QUIZ NOW</a>
        <?php } ?>
        <div class="text-vertical-center quiz_switch_btn">
            <a class="btn btn_user"  href="<?php echo $this->webroot;?>quiz_page">START QUIZ</a>
        </div>
    </header>
