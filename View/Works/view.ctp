<div class="works view">
<h2><?php echo __('Work'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($work['Work']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($work['Work']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($work['Work']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img1'); ?></dt>
		<dd>
			<?php echo h($work['Work']['img1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img2'); ?></dt>
		<dd>
			<?php echo h($work['Work']['img2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img3'); ?></dt>
		<dd>
			<?php echo h($work['Work']['img3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Img4'); ?></dt>
		<dd>
			<?php echo h($work['Work']['img4']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Work'), array('action' => 'edit', $work['Work']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Work'), array('action' => 'delete', $work['Work']['id']), array(), __('Are you sure you want to delete # %s?', $work['Work']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Works'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Work'), array('action' => 'add')); ?> </li>
	</ul>
</div>
