<?php
$now = new DateTime();
$starting_at = new DateTime($exam_details['Exam']['starting_at']);
$ending_at = new DateTime($exam_details['Exam']['ending_at']);
?>

<?php usort($exam_details['Student'], 'sortByRoll'); ?>

<div class="new_exam_bg no_print">
	<div class="container-fluid">
		<div class="row">
			<h1>Quiz Management Panel</h1>
			<div id="quiz_create_tab">
				<?php echo $this->element('quiz_tab'); ?>
				<div class="set_quiz_section col-sm-12">
					<form class="form-horizontal col-sm-10 quiz_form" method="post" action="" role="form" id="create_quiz_form">
						<?php if($now<=$ending_at) { ?>
						<h2 class="exam_unfinish">Exam has not finished yet.</h2>
						<?php } else { ?>
						<h2 class="exam_unfinish" style="text-align: center">Exam has been completed.</h2>
						<div class="user_section add_stu_btn">
							<a class="pull-left" onClick="window.print()" data-hover="Print"><span>Print Result</span></a>
							<a href="#stu_list" class="pull-right" data-toggle="modal" data-hover="View" id="open_modal"><span>View Full Result</span></a>
						</div>

						<!--=========Modal of Students List==============-->
						<div class="modal fade" id="stu_list" role="dialog">
							<div class="modal-dialog custom_dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header custom_header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h2 class="text-center">Students Marks</h2>
									</div>
									<div class="modal-body custom_body">
										<table class="table table-responsive table-hover">
											<th>Roll</th>
											<th>Mark</th>
											<?php if(!empty($exam_details['Student'])) { ?>
												<?php foreach($exam_details['Student'] as $key => $item) {?>
													<tr>
														<td><?php echo $item['roll'];?></td>
														<td><?php echo (!is_null($item['marks'])) ? $item['marks'] : "Absent";?></td>
													</tr>
												<?php } ?>
											<?php } else { ?>
												<tr>
													<td colspan="4" class="exam_unfinish">No Students was assigned.</td>
												</tr>
											<?php } ?>
										</table>
									</div>
								</div>
							</div>
						</div><!--modal colse-->
						<?php } ?>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	function sortByRoll($a, $b) {
		return $a['roll'] - $b['roll'];
	}
?>

<style>
	.print_this {
		//display: none;
	}
	.print_this table tr td, .print_this table tr th {
		padding: 10px;
	}
</style>

<div class="print_this">
	<table width="50%" align="left" border="1px" cellpadding="5px" cellspacing="5px">
		<thead>
			<tr>
				<th>Roll</th>
				<th>Mark</th>
			</tr>
		</thead>
		<tbody>
			<?php if(!empty($exam_details['Student'])) { ?>
				<?php foreach($exam_details['Student'] as $key => $item) {?>
					<tr>
						<td><?php echo $item['roll'];?></td>
						<td><?php echo (!is_null($item['marks'])) ? $item['marks'] : "Absent";?></td>
					</tr>
				<?php } ?>
			<?php } else { ?>
				<tr>
					<td colspan="4" class="exam_unfinish">No Students were assigned.</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
