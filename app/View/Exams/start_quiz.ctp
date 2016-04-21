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
    Quiz hasn't started yet. please wait for <span>00:00</span>.
</div>

<div class="quiz_overlay quiz_start_overlay">
    <form id="authenticate_student" action="<?php echo $this->webroot?>exams/authenticate_student/1" method="post" autocomplete="off">
        <input type="text" name="roll" placeholder="Put Your Roll Here">
        <input type="password" name="password" value="">
        <input type="submit">
    </form>
</div>

<div class="quiz_overlay quiz_finish_overlay" style="display: none;">
    <button>Submit</button>
    <button>Review</button>
</div>

<?php echo $this->Html->script(array('svgcheckbx')); ?>