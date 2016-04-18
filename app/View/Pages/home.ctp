<!-- Header -->
    <header id="top" class="header">
        <div class="container-fluid">
            <div class="row main_content">
                 <div class="col-sm-6">
                     <?php if(empty($is_logged)) { ?>
                            <div class="welcome_section">
                                <h1>Say goodbye to old days...</h1>
                                <h2>And join the IOT</h2>
                                <div class="login_signup">
                                    <div class="user_section">
                                        <a href="#signup" data-toggle="modal" data-hover="SIGNUP"><span>SIGNUP</span></a>
                                        <a href="#login" data-toggle="modal" data-hover="LOGIN"><span>LOGIN</span></a>
                                    </div>
                                </div>
                            </div>
                            
                     <?php } else { ?>
                            <div class="welcome_quiz_page">
                                <h1><span class="greet">Welcome,</span> <br><sapn class="greet_to"><?php echo $name_with_des;?></sapn></h1>
                                <div class="user_section qz_crt_btn">
                                    <a data-hover="CREATE A QUIZ NOW" href="<?php echo $this->webroot;?>new_quiz"><span>CREATE A QUIZ NOW</span></a>
                                </div>
                            </div>
                     <?php } ?>
                 </div>
                <div class="col-sm-6 pull right">
                    <ul id="slideshow" class="slides">
                        <li data-duration="5000" class="active">
                            <div class="slide-content">
                                <h3 class="text-center">Slide Content 1</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </li>
                        <li data-duration="3000">
                            <div class="slide-content">
                                <h3 class="text-center">Slide Content 2</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </li>
                        <li data-duration="1000">
                            <div class="slide-content">
                                <h3 class="text-center">Slide Content 3</h3>
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </li>
                    </ul>
                </div>
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
    </header>
