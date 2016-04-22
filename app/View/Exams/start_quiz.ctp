    <!-- About -->
<section id="quiz_wrapper">
    <div class="container quiz_inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="quiz_head text-center">
                    <h1>Total Questions : <span id="current_question_showing">1</span> of <span><?php echo count($questions);?></span>.</h1>
                    <h2>Estimate Time : <?php echo $exam['time'];?> mins.</h2>
                    <hr>
                </div>

                <form class="ac-custom ac-radio ac-fill" autocomplete="off">
                    <?php foreach($questions as $key => $item) { ?>
                    <div id="question_<?php echo $key;?>" <?php if($key) echo 'style="display:none;"';?>>
                        <h2><?php echo $item['question'];?></h2>
                        <ul>
                            <li>
                                <input id="q_<?php echo $key;?>_1" name="q_<?php echo $item['id'];?>" type="radio">
                                <label for="q_<?php echo $key;?>_1">
                                    <?php echo $item['ans_a'];?>
                                </label>
                            </li>
                            <li>
                                <input id="q_<?php echo $key;?>_1" name="q_<?php echo $item['id'];?>" type="radio">
                                <label for="q_<?php echo $key;?>_1">
                                    <?php echo $item['ans_a'];?>
                                </label>
                            </li>
                            <li>
                                <input id="q_<?php echo $key;?>_1" name="q_<?php echo $item['id'];?>" type="radio">
                                <label for="q_<?php echo $key;?>_1">
                                    <?php echo $item['ans_a'];?>
                                </label>
                            </li>
                            <li>
                                <input id="q_<?php echo $key;?>_1" name="q_<?php echo $item['id'];?>" type="radio">
                                <label for="q_<?php echo $key;?>_1">
                                    <?php echo $item['ans_a'];?>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <?php } ?>
                </form>


                <div class="quiz_direction user_section">
                    <div class="col-sm-2">
                        <!--<button type="reset" class="btn btn_user btn-2 btn-2a pull-left">RESTART</button>-->
                    </div>
                    <div class="col-sm-2 col-sm-offset-2">
                        <span class="text-center">
                            <h3 class="time_counter">
                                <span id="remaining_time_min"><?php echo $exam['time'];?></span>
                                :
                                <span id="remaining_time_sec">00</span>
                            </h3>
                        </span>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2">
                        <span class="pull-right">
                            <input type="hidden" name="current_question" value="0">
                            <input type="hidden" name="total_question" value="<?php echo (count($questions) - 1);?>">
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

<div class="quiz_overlay quiz_start_overlay" style="display: none">
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

<div class="quiz_overlay quiz_finish_overlay" style="display: none">
    <div class="col-sm-3">
        <div class="user_section stu_rewiew">
        <button type="button" class="btn btn-2 btn-2a btn_user btn_signup col-sm-12" id="submit_btn">SUBMIT</button>
        <button type="button" class="btn btn-2 btn-2a btn_user btn_signup col-sm-12" id="review_btn">REVIEW</button>
    </div>
    </div>
</div>

<?php echo $this->Html->script(array('svgcheckbx')); ?>