<?php
$controller = $this->params['controller'];
$action = $this->params['action'];
$active = 0;
$update = 1;
if($controller == 'exams' && ( $action == 'new_exam' || $action == 'update_exam' ) ) {
    $active = 1;
    if($action == 'new_exam') $update = 0;
} else if ($controller == 'questions' && $action == 'add_question' ) {
    $active = 2;
} else if ($controller == 'students' && $action == 'add_students' ) {
    $active = 3;
} else if ($controller == 'exams' && $action == 'results' ) {
    $active = 4;
}

$exam_id = (!empty($this->params['pass'][0])) ? $this->params['pass'][0] : null;
?>

<div class="tab_section col-sm-12">
    <div class="col-sm-10">
        <ul class="nav nav-justified nav-tabs" role="tablist">
            <?php if(!$update) { ?>
                <li <?php echo ($active==1) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>exams/new_exam">Create Quiz</a></li>
            <?php } else { ?>
                <li <?php echo ($active==1) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>exams/update_exam/<?php echo $exam_id;?>">Update Quiz</a></li>
            <?php } ?>
            <li <?php echo ($active==2) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>questions/add_question/<?php echo $exam_id;?>" <?php echo (!$exam_id) ? 'class="disabled_link"': '';?>>Add Question</a></li>
            <li <?php echo ($active==3) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>students/add_students/<?php echo $exam_id;?>" <?php echo (!$exam_id) ? 'class="disabled_link"': '';?>>Add Student</a></li>
            <li <?php echo ($active==4) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>exams/results/<?php echo $exam_id;?>" <?php echo (!$exam_id) ? 'class="disabled_link"': '';?>>Result</a></li>
        </ul>
    </div>
</div>