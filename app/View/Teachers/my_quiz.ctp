<div class="new_exam_bg">
    <div class="container-fluid">
        <div class="row">
            <h1>Quiz List</h1>
			<div id="quiz_create_tab">
			<div class="col-sm-12">
				<div class="col-sm-10 col-sm-offset-1">
					<table class="my_quiz_list custom_body table table-responsive table-hover">
						<caption class="text-center"><h3>My Quiz List</h3></caption>
						<th>Question Name</th>
						<th>Subject</th>
						<th>Start Time</th>
						<th>Action</th>
						<?php foreach($teacher['Exam'] as $key => $item) { ?>
						<tr>
							<td>
								<a href="<?php echo $this->webroot;?>exams/update_exam/<?php echo $item['id'];?>">
									<b><?php echo $item['name'];?></b>
								</a>
							</td>
							<td>
								<a href="<?php echo $this->webroot;?>exams/update_exam/<?php echo $item['id'];?>">
									<b><?php echo $item['subject'];?></b>
								</a>
							</td>
							<td>
								<a href="<?php echo $this->webroot;?>exams/update_exam/<?php echo $item['id'];?>">
									<b><?php echo $item['starting_at'];?></b>
								</a>
							</td>
							<td class="add_question_action">
                               <?php echo $this->Html->link(__('Edit'), array('action' => 'edit_question', $item['id']), array( 'class' => 'btn btn-warning')); ?>
                               <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete_question', $item['id']), array( 'class' => 'btn btn-warning'), __('Are you sure you want to delete # %s?', $item['id'])); ?>
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
