<!-- fixed navbar -->


<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-job-board">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="<?php echo base_url(); ?>" class="navbar-brand"><?php echo $this->lang->line('system_system_name'); ?></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-job-board">
			<ul class="nav navbar-nav">
				<li class="active"><?php echo anchor('shop', $this->lang->line('nav_home')); ?></li>
				<li><?php echo anchor('shop/display_cart', ($items > 0) ? $this->lang->line('nav_cart_count') . '(' . $items . ')' : $this->lang->line('nav_cart_count') . '(0)'); ?></li>
			</ul>
		</div> <!-- navbar-collapse -->
	</div>
</nav>

<div class="container theme-showcase" role="main">

<?php if ($this->session->flashdata('flash_message')): ?>
	<div class="alert alert-info" role="alert">
		<?php echo $this->session->flashdata('flash_message'); ?>
	</div> <!-- alert -->
<?php endif; ?>