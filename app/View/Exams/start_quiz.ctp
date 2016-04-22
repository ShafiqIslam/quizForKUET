    <!-- About -->
<?php
$now = new DateTime();
$starting_at = new DateTime($exam['starting_at']);
$ending_at = new DateTime($exam['ending_at']);
?>

<?php if($now >= $starting_at && $now <= $ending_at) { ?>
    <section id="quiz_wrapper">
        <div class="container quiz_inner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="quiz_head text-center">
                        <h1>Total Questions : <span id="current_question_showing">1</span> of <span><?php echo count($questions);?></span>.</h1>
                        <h2>Estimate Time : <?php echo $exam['time'];?> mins.</h2>
                        <hr>
                    </div>

                    <form class="ac-custom ac-radio ac-fill" id="quiz_main_form" action="<?php echo $this->webroot?>exams/evaluate/<?php echo $exam['id']?>" method="post" autocomplete="off">
                        <?php foreach($questions as $key => $item) { ?>
                        <div id="question_<?php echo $key;?>" <?php if($key) echo 'style="display:none;"';?>>
                            <h2><?php echo $item['question'];?></h2>
                            <input type="hidden" value="<?php echo $item['cor_ans'];?>" name="cor_<?php echo $key;?>">
                            <ul>
                                <li>
                                    <input id="q_<?php echo $key;?>_1" name="q_<?php echo $key;?>" type="radio" value="A">
                                    <label for="q_<?php echo $key;?>_1">
                                        <?php echo $item['ans_a'];?>
                                    </label>
                                </li>
                                <li>
                                    <input id="q_<?php echo $key;?>_1" name="q_<?php echo $key;?>" type="radio" value="B">
                                    <label for="q_<?php echo $key;?>_1">
                                        <?php echo $item['ans_b'];?>
                                    </label>
                                </li>
                                <li>
                                    <input id="q_<?php echo $key;?>_1" name="q_<?php echo $key;?>" type="radio" value="C">
                                    <label for="q_<?php echo $key;?>_1">
                                        <?php echo $item['ans_c'];?>
                                    </label>
                                </li>
                                <li>
                                    <input id="q_<?php echo $key;?>_1" name="q_<?php echo $key;?>" type="radio" value="D">
                                    <label for="q_<?php echo $key;?>_1">
                                        <?php echo $item['ans_d'];?>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <?php } ?>
                        <input type="hidden" value="" name="student_id" id="student_id">
                        <input type="hidden" name="total_question" value="<?php echo (count($questions) - 1);?>">
                        <input type="hidden" name="per_ques" value="<?php echo $exam['marks_per_ques'];?>">
                        <input type="hidden" name="negate" value="<?php echo $exam['negate'];?>">
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

    <div class="container flash_message" style="display: none">
        <div id="flashMessage" class=""></div>
        <button class="flash_close_btn"><span><i class="fa fa-times fa-2x"></i></span></button>
    </div>

    <div class="quiz_overlay quiz_start_overlay" style="">
        <form class="form-horizontal col-sm-4" id="authenticate_student" role="form" method="post" action="<?php echo $this->webroot?>exams/authenticate_student/<?php echo $exam['id'];?>" autocomplete="off">
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
                    <button type="button" class="btn btn-2 btn-2a btn_user btn_signup pull-right" id="authenticate_submit_btn">SUBMIT</button>
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

    <div class="quiz_overlay quiz_submitted_overlay" style="display: none">
        <div class="quiz_star_notify">
            <h1>You have achieved</h1>
            <h2 id="obtained_marks"></h2> out of <h2 id=""><?php echo $exam['marks_per_ques'] * count($questions);?></h2>
            <h3 id="performance_msg"></h3>
        </div>
    </div>

    <?php echo $this->Html->script(array('svgcheckbx')); ?>

<?php } else if($now < $starting_at) { ?>
    <?php echo $this->Html->script(array('TimeCircles'));?>
    <?php echo $this->Html->css(array('TimeCircles'));?>

    <div class="quiz_overlay quiz_not_started_overlay">
        <div class="quiz_star_notify quiz_not_start">
            <h1>Quiz has not started yet.</h1>
            <h2>Come Back Again in or, you can just wait :P</h2>
            <div id="DateCountdown" data-date="<?php echo $exam['starting_at']?>" style="width: 500px; height: 125px; padding: 0px; box-sizing: border-box;"></div>
        </div>
    </div>

    <script>
        $("#DateCountdown").TimeCircles();
    </script>

<?php } else if ($now > $ending_at) { ?>

    <div class="quiz_overlay quiz_not_started_overlay">
        <div class="quiz_star_notify">
            <h1>Sorry Buddy.</h1>
            <h2 class="finished_exam_h2">Exam Finished. You are late.</h2>
        </div>
    </div>

<?php } ?>