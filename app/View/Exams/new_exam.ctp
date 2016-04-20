<div class="new_exam_bg">
    <div class="container-fluid">
        <div class="row">
            <h1>Quiz Management Panel</h1>
            <div id="quiz_create_tab">
                <?php echo $this->element('quiz_tab'); ?>
                <div class="set_quiz_section col-sm-12">
                    <form class="form-horizontal col-sm-10 quiz_form" method="post" action="" role="form" id="create_quiz_form">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Quiz Name:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Exam][name]" class="form-control" id="q_name" placeholder="Quiz Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Subject:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Exam][subject]" class="form-control" id="s_name" placeholder="Subject">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Subject Code:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Exam][subject_code]" class="form-control" id="s_code" placeholder="Subject Code">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Starting At:</label>
                            <div class="col-sm-9">
                                <input type="datetime-local" name="data[Exam][starting_at]" class="form-control" id="starting_at" placeholder="Begins In">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Total time:</label>
                            <div class="col-sm-9">
                                <input type="number" name="data[Exam][time]" class="form-control" id="time" placeholder="Minutes">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Marks Per Question:</label>
                            <div class="col-sm-9">
                                <input type="number" name="data[Exam][marks_per_ques]" class="form-control" id="marks_per_ques" placeholder="Marks Per Question">
                            </div>

                        </div>
                        <div class="form-group custom_checkbox">
                            <div class="col-sm-9 col-sm-offset-3">
                                <input type="checkbox" name="data[Exam][negate]" value="1" id="cb2" class="pull-left checkbox-custom"><label for="cb2" class="control-label checkbox-custom-label">Negative Marking</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="user_section">
                                <button type="submit" class="btn btn-2 btn-2a btn_user btn_signup pull-right">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </div>
</div>