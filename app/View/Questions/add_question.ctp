
<div class="new_exam_bg">
    <div class="container-fluid">
        <div class="row">
            <h1>Create A Question</h1>
            <div id="quiz_create_tab">
                <?php echo $this->element('quiz_tab'); ?>
                <div class="set_quiz_section col-sm-12">
                    <form class="form-horizontal col-sm-10 quiz_form" method="post" action="" role="form" id="add_ques_form">
                        <input type="hidden" name="data[Question][exam_id]" value="">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Question:</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="data[Question][question]" id="" cols="30" rows="10"></textarea>
                            </div>
                            <!--<input type="text" name="data[Question][question]" class="form-control" id="q_name" placeholder="">-->
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Ans A:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Question][ans_a]" class="form-control" id="s_name" placeholder="Option A">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Ans B:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Question][ans_b]" class="form-control" id="s_code" placeholder="Option B">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Ans C:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Question][ans_c]" class="form-control" id="starting_at" placeholder="Option C">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Ans D:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Question][ans_d]" class="form-control" id="time" placeholder="Option D">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Correct Answer:</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="data[Question][cor_ans]">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="user_section">
                                <a href="#" class="pull-left" data-hover="View All Added Question"><span>View All Added Question</span></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
</div>