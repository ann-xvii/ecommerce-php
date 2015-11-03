<div class="row row-offcanvas row-offcanvas-right">
	<div class="col-xs-12 col-sm-9">
		<div class="row">
			<?php echo validation_errors(); ?>
			<?php echo form_open('/shop/user_details'); ?>
			<?php echo form_input($first_name); ?>
			<?php echo form_input($last_name); ?>
			<?php echo form_input($email); ?>
			<?php echo form_input($email_confirm); ?>
			<?php echo form_textarea($payment_address); ?>
			<?php echo form_textarea($delivery_address); ?>
			<?php echo form_submit('', $this->lang->line('common_form_elements_go'), 'class="btn btn-success"'); ?>
			<br/>
			<?php echo form_close(); ?>
		</div> <!-- /.row -->
	</div> <!-- /.col-xs-12 -->
</div> <!-- /.row -->