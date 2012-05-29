<div class="row">
	<div class="span6">
		<h2>New Todo</h2>
		<?php echo form_open(current_url(), array('class' => 'well form-vertical')); ?>

			<div class="controls">
				<?php echo form_label('Create A Todo', 'todo'); ?>
				<?php echo form_input('todo[name]', '', 'class="span4" placeholder="Take out the trash"'); ?>
				<?php echo form_error('todo[name]'); ?>
			</div>

			<?php echo form_submit('create_todo', 'Create Todo', 'class="btn btn-success"'); ?>

		<?php echo form_close(); ?>
	</div>
	<div class="span6">
		<h2>Outstanding Todos</h2>

		<?php if ($todos->num_rows() > 0): ?>
			<ul>
				<?php foreach ($todos->result() as $todo): ?>
					<li>
						<?php echo $todo->name; ?> :: <a href="<?php echo site_url("todos/complete/$todo->id") ?>" class="btn btn-primary btn-mini">Complete</a> <a href="<?php echo site_url("todos/delete/$todo->id") ?>" class="btn btn-danger btn-mini">Delete</a>
					</li>
				<?php endforeach ?>
			</ul>
		<?php else: ?>
			<p>You don't have any todos yet...</p>
		<?php endif; ?>

		<h2>Past Todos</h2>

		<?php if ($completed_todos->num_rows() > 0): ?>
			<ul>
				<?php foreach ($completed_todos->result() as $todo): ?>
				<li style="text-decoration: line-through;"><?php echo $todo->name; ?></li>
				<?php endforeach; ?>
			</ul>
		<?php else: ?>
			<p>You haven't completed any todos yet... Get to work!</p>
		<?php endif; ?>
	</div>
</div>