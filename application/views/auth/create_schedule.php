
<div class="container">
	<h2><?php echo lang('create_schedule_heading');?></h2>
	<h3><?php echo lang('create_schedule_subheading');?></h3>

	<div id="infoMessage"><?php echo $message;?></div>

	<?php echo form_open("auth/create_user");?>
		<div class="form-group">
			<?php echo lang('start_time', 'start_time');?>
			<?php echo form_input($start_time);?>
		</div>

		<div class="form-group">
			<?php echo lang('end_time', 'end_time');?>
			<?php echo form_input($end_time);?>
		</div>

		<button type="submit" class="btn btn-default">Submit</button>
	<?php echo form_close();?>
</div>

