<div class="new_exam_bg">
    <div class="container-fluid">
        <div class="row">
            <h1>Quiz Management Panel</h1>
            <div id="quiz_create_tab">
                <?php echo $this->element('quiz_tab'); ?>
                <div class="set_quiz_section col-sm-12">
                    <form class="form-horizontal col-sm-10 quiz_form" method="post" action="" role="form" id="add_student_form">
                        <input type="hidden" name="data[Student][exam_id]" value="">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Email:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Student][email]" class="form-control" id="q_name" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Roll:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Student][roll]" class="form-control" id="s_name" placeholder="Roll" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Mobile No.:</label>

                            <div class="col-sm-9">
                                <input type="text" name="data[Student][mobile]" data-format="+880 dddd-dddddd" class="form-control bfh-phone" id="s_name" placeholder="Subject" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="user_section add_stu_btn">
                                <a href="#stu_list" class="pull-left" data-toggle="modal" data-hover="View All Added Student" id="open_modal"><span>View All Added Student</span></a>
                                <button type="submit" class="btn btn-2 btn-2a btn_user btn_signup pull-right">ADD</button>
                            </div>
                        </div>
                    </form>

                    <!--=========Modal of Students List==============-->
                    <div class="modal fade" id="stu_list" role="dialog">
                        <div class="modal-dialog custom_dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header custom_header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h2 class="text-center">Students List</h2>
                                </div>
                                <div class="modal-body custom_body">

                                    <table class="table table-responsive table-hover">
                                        <th>Student's Email</th>
                                        <th>Student's Roll</th>
                                        <th>Student's Mobile</th>
                                        <th>Action</th>
                                        <?php if(!empty($exam_details['Student'])) { ?>
                                            <?php foreach($exam_details['Student'] as $key => $item) {?>
                                            <tr>
                                                <td> <?php echo $item['email'];?></td>
                                                <td><?php echo $item['roll'];?></td>
                                                <td><?php echo $item['mobile'];?></td>
                                                <td>
                                                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete_student', $item['id']), array( 'class' => 'btn btn-warning'), __('Are you sure you want to delete # %s?', $item['roll'])); ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <tr>
                                                <td colspan="4" class="exam_unfinish">No Students assigned yet.</td>
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