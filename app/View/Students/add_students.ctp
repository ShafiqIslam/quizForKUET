<div id="add_student_tab">
    <form method="post" action="<?php echo $this->webroot;?>students/add" role="form" id="add_student_form">
        <input type="hidden" name="data[Student][exam_id]" value="">
        <div class="form-group">
            <label class="control-label" for="name">Email:</label>
            <input type="text" name="data[Student][email]" class="form-control" id="q_name" placeholder="Quiz Name">
        </div>
        <div class="form-group">
            <label class="control-label" for="name">Roll:</label>
            <input type="text" name="data[Student][roll]" class="form-control" id="s_name" placeholder="Subject">
        </div>
        <div class="form-group">
            <button type="button" class="btn-info pull-left">View All Added Student</button>
            <button type="submit" class="btn btn_user  btn_signup pull-right">ADD</button>
        </div>
    </form>
    <!--<form method="post" action="<?php /*echo $this->webroot;*/?>students/add_csv" role="form" id="add_ques_form">
        <input type="hidden" name="data[Student][exam_id]" value="">
        <div class="form-group">
            <label class="control-label" for="name">Email:</label>
            <input type="text" name="data[Student][email]" class="form-control" id="q_name" placeholder="Quiz Name">
        </div>
        <div class="form-group">
            <label class="control-label" for="name">Roll:</label>
            <input type="text" name="data[Student][roll]" class="form-control" id="s_name" placeholder="Subject">
        </div>
        <div class="form-group">
            <button type="button" class="btn-info pull-left">View All Added Student</button>
            <button type="submit" class="btn btn_user  btn_signup pull-right">ADD</button>
        </div>
    </form>-->
</div>