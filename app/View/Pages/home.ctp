<!-- Header -->
    <header id="top" class="header">
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
                                <label class="control-label" for="first anme">First Name:</label>
                                <input type="text" name="f_name" class="form-control" id="f_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="Last Nmae">Last Name:</label>
                                <input type="text" name="l_name" class="form-control" id="l_name" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="status">Status:</label>
                                <select name="status" class="form-control">
                                    <option>Select Status</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="student">Student</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email">Email:</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password:</label>
                                <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="confirm password">Confirm Password:</label>
                                <input type="password" name="con_pass" class="form-control" id="con_pass" placeholder="Confirm Password">
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
                        <form method="post" action="#" role="form">
                            <div class="form-group">
                                <label class="control-label" for="email">Email:</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email Name">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password:</label>
                                <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
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
        <div class="text-vertical-center quiz_switch_btn">
            <a class="btn btn_user"  href="<?php echo $this->webroot;?>quiz_page">START QUIZ</a>
        </div>
    </header>
