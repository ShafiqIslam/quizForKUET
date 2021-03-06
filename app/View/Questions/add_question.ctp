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
                                <textarea class="form-control" name="data[Question][question]" id="" cols="30" rows="10" required=""></textarea>
                            </div>
                            <!--<input type="text" name="data[Question][question]" class="form-control" id="q_name" placeholder="">-->
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Ans A:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Question][ans_a]" class="form-control" id="s_name" placeholder="Option A" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Ans B:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Question][ans_b]" class="form-control" id="s_code" placeholder="Option B" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Ans C:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Question][ans_c]" class="form-control" id="starting_at" placeholder="Option C" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Ans D:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Question][ans_d]" class="form-control" id="time" placeholder="Option D" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Correct Answer:</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="data[Question][cor_ans]" required="">
                                    <option selected="true" disabled="disabled">Select an Answer</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                </select>
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="user_section add_question_btn">
                                <a href="#add_question_list" class="pull-left" data-toggle="modal" data-hover="View All Added Question"><span>View All Added Question</span></a>
                                <button type="submit" class="btn btn-2 btn-2a btn_user btn_signup pull-right">ADD</button>
                            </div>
                        </div>
                    </form>
                    <!--==============Question List Modal===============-->
                    <div class="modal fade" id="add_question_list" role="dialog">
                        <div class="modal-dialog custom_dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header custom_header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h2 class="text-center">Add Question List</h2>
                                </div>
                                <div class="modal-body custom_body"> 
                                    <h2 class="text-center">My Quiz List</h2> 
                                   <table class="question_list_table table table-responsive table-hover">
                                        <th class="text-center">Question Name</th>
                                        <th class="text-center">Action</th>
                                        <?php if(!empty($exam_details['Question'])) { ?>
                                            <?php foreach($exam_details['Question'] as $key => $item) {?>
                                               <tr>
                                                   <td style="width: 75%;"><?php echo $item['question'];?></td>
                                                   <td class="add_question_action">
                                                       <?php echo $this->Html->link(__('Edit'), array('action' => 'edit_question', $item['id']), array( 'class' => 'btn btn-warning')); ?>
                                                       <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete_question', $item['id']), array( 'class' => 'btn btn-warning'), __('Are you sure you want to delete # %s?', $item['id'])); ?>
                                                   </td>
                                               </tr>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <tr>
                                                <td colspan="4" class="exam_unfinish">No Questions in this quiz yet.</td>
                                            </tr>
                                        <?php } ?>
                                   </table>
                                </div>
                            </div>
                        </div>
                    </div><!--modal colse-->
                </div>
            </div>  
        </div>
    </div>
</div>