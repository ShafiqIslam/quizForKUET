    <!-- About -->
<section id="quiz_wrapper">
    <div class="container quiz_inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="quiz_head text-center">
                    <h1>Total Questions : 10 of 10.</h1>
                    <h2>Estimate Time : 10 mins.</h2>
                    <hr>
                </div>

                <form class="ac-custom ac-radio ac-fill" autocomplete="off">
                    <div id="question_1">
                        <h2>Where do you proactively envision multimedia based expertise and cross-media growth strategies?</h2>
                        <ul>
                            <li><input id="r1" name="r1" type="radio"><label for="r1">Seamlessly visualize quality intellectual capital</label></li>
                            <li><input id="r2" name="r1" type="radio"><label for="r2">Collaboratively administrate turnkey channels</label></li>
                            <li><input id="r3" name="r1" type="radio"><label for="r3">Objectively seize scalable metrics</label></li>
                            <li><input id="r4" name="r1" type="radio"><label for="r4">Energistically scale future-proof core competencies</label></li>
                        </ul>
                    </div>

                    <div id="question_2" style="display: none">
                        <h2>Where do you proactively envision multimedia based expertise and cross-media growth strategies222222222?</h2>
                        <ul>
                            <li><input id="r1" name="r2" type="radio"><label for="r1">Seamlessly visualize quality intellectual capital</label></li>
                            <li><input id="r2" name="r2" type="radio"><label for="r2">Collaboratively administrate turnkey channels</label></li>
                            <li><input id="r3" name="r2" type="radio"><label for="r3">Objectively seize scalable metrics</label></li>
                            <li><input id="r4" name="r2" type="radio"><label for="r4">Energistically scale future-proof core competencies</label></li>
                        </ul>
                    </div>
                </form>


                <div class="quiz_direction user_section">
                    <div class="col-sm-2">
                        <button type="reset" class="btn btn_user btn-2 btn-2a pull-left">RESTART</button>
                    </div>
                    <div class="col-sm-2 col-sm-offset-2">
                        <span class="text-center"><h3 class="time_counter">TIME LEFT</h3></span>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2">
                        <span class="pull-right">
                            <input type="hidden" name="current_question" value="1">
                            <input type="hidden" name="total_question" value="2">
                            <button type="button" class="btn btn_user btn-2 btn-2a prev_btn">PREVIOUS</button>
                            <button type="button" class="btn btn_user btn-2 btn-2a next_btn">NEXT</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<div class="quiz_overlay quiz_not_started_overlay" style="display: none;">
    <div class="quiz_star_notify">
        <h1>Quiz hasn't started yet.</h1>
        <h2>Please wait for <span>00:00</span>.</h2>
    </div>
</div>

<div class="quiz_overlay quiz_start_overlay" style="">
    <form class="form-horizontal col-sm-4" id="authenticate_student" role="form" method="post" action="<?php echo $this->webroot?>exam/authenticate_student" autocomplete="off">
        <h1>STUDENT'S LOGIN</h1>
        <hr>
        <div class="form-group">
            <label class="control-label col-sm-3" for="email">Roll</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="roll" placeholder="Enter Your Roll No." required="">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="email">Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" name="password" placeholder="Password" required="">
            </div>
        </div>
        <div class="form-group">
            <div class="user_section stu_login">
                <button type="submit" class="btn btn-2 btn-2a btn_user btn_signup pull-right">SUBMIT</button>
            </div>
        </div>
    </form>
</div>

<div class="quiz_overlay quiz_finish_overlay" style="display: none;">
    <button>Submit</button>
    <button>Review</button>
</div>

<?php echo $this->Html->script(array('svgcheckbx')); ?>