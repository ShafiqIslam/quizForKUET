<?php
$controller = $this->params['controller'];
$action = $this->params['action'];
$active = 0;
$update_exam = 1;
$update_question = 0;
$update_student = 0;

if($controller == 'exams' && ( $action == 'new_exam' || $action == 'update_exam' ) ) {
    $active = 1;
    if($action == 'new_exam') $update_exam = 0;
} else if ($controller == 'questions' && ( $action == 'add_question' || $action == 'edit_question' ) ) {
    $active = 2;
    if($action == 'edit_question') $update_question = 1;
} else if ($controller == 'students' && ( $action == 'add_students' || $action == 'edit_student' ) ) {
    $active = 3;
    if($action == 'edit_student') $update_student = 1;
} else if ($controller == 'exams' && $action == 'results' ) {
    $active = 4;
}

$id = (!empty($this->params['pass'][0])) ? $this->params['pass'][0] : null;
?>

<div class="tab_section col-sm-12">
    <div class="col-sm-10">
        <ul class="nav nav-justified nav-tabs" role="tablist">
            <?php if(!$update_exam) { ?>
                <li <?php echo ($active==1) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>exams/new_exam">Create Quiz</a></li>
            <?php } else { ?>
                <li <?php echo ($active==1) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>exams/update_exam/<?php echo $id;?>">Update Quiz</a></li>
            <?php } ?>

            <?php if($update_question) { ?>
                <li <?php echo ($active==2) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>questions/edit_question/<?php echo $id;?>" <?php echo (!$id) ? 'class="disabled_link"': '';?>>Edit Question</a></li>
            <?php } else { ?>
                <li <?php echo ($active==2) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>questions/add_question/<?php echo $id;?>" <?php echo (!$id) ? 'class="disabled_link"': '';?>>Add Question</a></li>
            <?php } ?>

            <?php if($update_student) { ?>
                <li <?php echo ($active==3) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>students/edit_student/<?php echo $id;?>" <?php echo (!$id) ? 'class="disabled_link"': '';?>>Edit Student</a></li>
            <?php } else { ?>
                <li <?php echo ($active==3) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>students/add_students/<?php echo $id;?>" <?php echo (!$id) ? 'class="disabled_link"': '';?>>Add Student</a></li>
            <?php } ?>

            <li <?php echo ($active==4) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>exams/results/<?php echo $id;?>" <?php echo (!$id) ? 'class="disabled_link"': '';?>>Result</a></li>
        </ul>
    </div>
</div>