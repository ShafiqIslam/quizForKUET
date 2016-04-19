<div class="new_exam_bg">
    <div class="container-fluid">
        <div class="row">
            <h1>Quiz List</h1>
			<div id="quiz_create_tab">
			<div class="set_quiz_section col-sm-12">
				<div class="col-sm-10">
					<div class="my_quiz_section quiz_form">
						<ul class="my_quiz_list">
							<?php foreach($teacher['Exam'] as $key => $item) { ?>
							<li>
								<a href="<?php echo $this->webroot;?>exams/update_exam/<?php echo $item['id'];?>">
									<div class="col-sm-6"><b><?php echo $item['name'];?></b></div>
									<div class="col-sm-3"><b><?php echo $item['subject'];?></b></div>
									<div class="col-sm-3"><b><?php echo $item['starting_at'];?></b></div>
								</a>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
            </div>
        </div>
    </div>
</div>
