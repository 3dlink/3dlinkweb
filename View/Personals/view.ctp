<div class="personals view">
<h2><?php echo __('Personal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ci'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['ci']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Number'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['account_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Type'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['account_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['bank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observations'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['observations']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personal'), array('action' => 'edit', $personal['Personal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personal'), array('action' => 'delete', $personal['Personal']['id']), array(), __('Are you sure you want to delete # %s?', $personal['Personal']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($personal['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Init Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Asana Url'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Personal Id'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($personal['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['name']; ?></td>
			<td><?php echo $project['description']; ?></td>
			<td><?php echo $project['init_date']; ?></td>
			<td><?php echo $project['end_date']; ?></td>
			<td><?php echo $project['asana_url']; ?></td>
			<td><?php echo $project['price']; ?></td>
			<td><?php echo $project['status']; ?></td>
			<td><?php echo $project['personal_id']; ?></td>
			<td><?php echo $project['client_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), array(), __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
