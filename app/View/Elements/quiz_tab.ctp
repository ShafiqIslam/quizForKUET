<?php
$controller = $this->params['controller'];
$action = $this->params['action'];
$active = 0;
if($controller == 'exams' && $action == 'new_exam' ) {
    $active = 1;
} else if ($controller == 'questions' && $action == 'add_question' ) {
    $active = 2;
} else if ($controller == 'students' && $action == 'add_students' ) {
    $active = 3;
} else if ($controller == 'exams' && $action == 'results' ) {
    $active = 4;
}
?>

<div class="tab_section col-sm-12">
    <div class="col-sm-10">
        <ul class="nav nav-justified nav-tabs" role="tablist">
            <li <?php echo ($active==1) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>exams/new_exam">Create Quiz</a></li>
            <li <?php echo ($active==2) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>questions/add_question">Add Question</a></li>
            <li <?php echo ($active==3) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>students/add_students">Add Student</a></li>
            <li <?php echo ($active==4) ? 'class="active"': '';?>><a href="<?php echo $this->webroot;?>exams/results">Result</a></li>
        </ul>
    </div>
</div>