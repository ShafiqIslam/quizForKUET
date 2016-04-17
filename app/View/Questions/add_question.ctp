<div id="add_question_tab">
    <form method="post" action="" role="form" id="add_ques_form">
        <input type="hidden" name="data[Question][exam_id]" value="">
        <div class="form-group">
            <label class="control-label" for="name">Question:</label>
            <textarea class="form-control" name="data[Question][question]" id="" cols="30" rows="10"></textarea>
            <!--<input type="text" name="data[Question][question]" class="form-control" id="q_name" placeholder="">-->
        </div>
        <div class="form-group">
            <label class="control-label" for="name">Ans A:</label>
            <input type="text" name="data[Question][ans_a]" class="form-control" id="s_name" placeholder="Option A">
        </div>
        <div class="form-group">
            <label class="control-label" for="name">Ans B:</label>
            <input type="text" name="data[Question][ans_b]" class="form-control" id="s_code" placeholder="Option B">
        </div>
        <div class="form-group">
            <label class="control-label" for="name">Ans C:</label>
            <input type="text" name="data[Question][ans_c]" class="form-control" id="starting_at" placeholder="Option C">
        </div>
        <div class="form-group">
            <label class="control-label" for="name">Ans D:</label>
            <input type="text" name="data[Question][ans_d]" class="form-control" id="time" placeholder="Option D">
        </div>
        <div class="form-group">
            <label class="control-label" for="name">Correct Answer:</label>
            <select class="form-control" name="data[Question][cor_ans]">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </div>
        <div class="form-group">
            <button type="button" class="btn-info pull-left">View All Added Question</button>
            <button type="submit" class="btn btn_user  btn_signup pull-right">ADD</button>
        </div>
    </form>
</div>