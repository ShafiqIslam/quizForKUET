<div class="new_exam_bg">
    <div class="container-fluid">
        <div class="row">
            <h1>Quiz List</h1>
			<div id="quiz_create_tab">
			<div class="col-sm-12">
				<div class="col-sm-10 col-sm-offset-1">
					<table class="my_quiz_list custom_body table table-responsive table-hover">
						<caption class="text-center"><h3>My Quiz List</h3></caption>
						<th>Quiz Name</th>
						<th>Subject</th>
						<th>Start Time</th>
						<th>Action</th>
						<?php foreach($teacher['Exam'] as $key => $item) { ?>
						<tr>
							<td style="width: 37%">
								<a href="<?php echo $this->webroot;?>exams/update_exam/<?php echo $item['id'];?>">
									<b><?php echo $item['name'];?></b>
								</a>
							</td>
							<td style="width: 15%;">
								<a href="<?php echo $this->webroot;?>exams/update_exam/<?php echo $item['id'];?>">
									<b><?php echo $item['subject'];?></b>
								</a>
							</td>
							<td style="width: 15%;">
								<a href="<?php echo $this->webroot;?>exams/update_exam/<?php echo $item['id'];?>">
									<b><?php echo date_format(date_create($item['starting_at']),'d M Y, h:i A');?></b>
								</a>
							</td>
							<td class="add_question_action" style="width: 17%;">
                               <?php echo $this->Html->link(__('Edit'), array('controller' => 'exams', 'action' => 'update_exam', $item['id']), array( 'class' => 'btn btn-warning')); ?>
                               <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'exams', 'action' => 'delete_exam', $item['id']), array( 'class' => 'btn btn-warning'), __('Are you sure you want to delete # %s? Deleting quiz will delete all the students and questions assigned to it.', $item['id'])); ?>
                           </td>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
            </div>
        </div>
    </div>
</div>
