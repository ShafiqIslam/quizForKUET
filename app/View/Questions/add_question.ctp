<div class="new_exam_bg">
    <div class="container-fluid">
        <div class="row">
            <h1>Quiz Management Panel</h1>
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
                                <a href="#add_question_list" class="pull-left" data-toggle="modal" data-hover="View All Added Question"><span>View All Added Question</span></a>
                            </div>
                            <button type="submit" class="btn btn_user  btn_signup pull-right">ADD</button>
                        </div>
                    </form>
                    <!--==============Question List Modal===============-->
                    <div class="modal fade" id="add_question_list" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4>Add Question List</h4>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="col-sm-3">
                                                    SQuestion Name
                                                </div>
                                                <div class="col-sm-2">
                                                    Option-A
                                                </div>
                                                <div class="col-sm-2">
                                                    Option-B
                                                </div>
                                                <div class="col-sm-2">
                                                    Option-C
                                                </div>
                                                <div class="col-sm-2">
                                                    Option-D
                                                </div>
                                                <div class="col-sm-1">
                                                    Correct Answer
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col-sm-3">
                                                    What are the parts of a computer?
                                                </div>
                                                <div class="col-sm-2">
                                                    3 Parts
                                                </div>
                                                <div class="col-sm-2">
                                                    2 Parts
                                                </div>
                                                <div class="col-sm-2">
                                                    4 Parts
                                                </div>
                                                <div class="col-sm-2">
                                                    None of them
                                                </div>
                                                <div class="col-sm-1">
                                                    Option-A
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--modal colse-->
                </div>
            </div>  
        </div>
    </div>
</div>