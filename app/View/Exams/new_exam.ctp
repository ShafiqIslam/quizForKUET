<div class="new_exam_bg">
    <div class="container">
        <div class="row">
            <div id="quiz_create_tab">
                <form class="form-horizontal col-sm-4 col-sm-offset-4" method="post" action="<?php echo $this->webroot;?>exams/new_exam" role="form" id="create_quiz_form">
                    <div class="form-group">
                        <label class="control-label" for="name">Quiz Name:</label>
                        <input type="text" name="data[Exam][name]" class="form-control" id="q_name" placeholder="Quiz Name">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name">Subject:</label>
                        <input type="text" name="data[Exam][subject]" class="form-control" id="s_name" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name">Subject Code:</label>
                        <input type="text" name="data[Exam][subject_code]" class="form-control" id="s_code" placeholder="Subject Code">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name">Starting At:</label>
                        <input type="datetime-local" name="data[Exam][starting_at]" class="form-control" id="starting_at" placeholder="Begins In">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name">Total time:</label>
                        <input type="number" name="data[Exam][time]" class="form-control" id="time" placeholder="Minutes">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="name">Marks Per Question:</label>
                        <input type="number" name="data[Exam][marks_per_ques]" class="form-control" id="marks_per_ques" placeholder="Marks Per Question">
                    </div>
                    <div class="form-group custom_checkbox">
                        <input type="checkbox" name="data[Exam][neagte]" id="cb2" class="pull-left checkbox-custom"><label for="cb2" class="checkbox-custom-label">Negative Marking</label>
                    </div>
                    <div class="form-group">
                       <!-- <button type="submit" class="btn btn_user  btn_signup pull-right">SUBMIT</button>-->
                        <div class="user_section">
                                <a href="#" data-hover="SUBMIT"><span>SIGNUP</span></a>
                        </div>
                    </div>
                </form>
            </div>  
        </div>
    </div>
</div>