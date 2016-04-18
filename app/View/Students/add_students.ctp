<div class="new_exam_bg">
    <div class="container-fluid">
        <div class="row">
            <h1>Quiz Management Panel</h1>
            <div id="quiz_create_tab">
                <?php echo $this->element('quiz_tab'); ?>
                <div class="set_quiz_section col-sm-12">
                    <form class="form-horizontal col-sm-10 quiz_form" method="post" action="<?php echo $this->webroot;?>students/add" role="form" id="add_student_form">
                        <input type="hidden" name="data[Student][exam_id]" value="">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Email:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Student][email]" class="form-control" id="q_name" placeholder="Quiz Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Roll:</label>
                            <div class="col-sm-9">
                                <input type="text" name="data[Student][roll]" class="form-control" id="s_name" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="name">Mobile No.:</label>

                            <div class="col-sm-9">
                                <input type="text" name="data[Student][roll]" data-format="+880 dddd-dddddd" class="form-control bfh-phone" id="s_name" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="user_section">
                                <a href="#stu_list" class="pull-left" data-toggle="modal" data-hover="View All Added Student"><span>View All Added Student</span></a>
                            </div>
                            <button type="submit" class="btn btn_user  btn_signup pull-right">ADD</button>
                        </div>
                    </form>

                    <!--=========Modal of Students List==============-->
                    <div class="modal fade" id="stu_list" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4>Students List</h4>
                                </div>
                                <div class="modal-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="col-sm-6">
                                                    Student's Email
                                                </div>
                                                <div class="col-sm-3">
                                                    Student's Roll
                                                </div>
                                                <div class="col-sm-3">
                                                    Student's Mobile No.
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="col-sm-6">
                                                    students@gmail.com
                                                </div>
                                                <div class="col-sm-3">
                                                    123456
                                                </div>
                                                <div class="col-sm-3">
                                                    01711112233
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