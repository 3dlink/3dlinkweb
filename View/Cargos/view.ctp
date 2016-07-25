<div class="cargos view">
<h2><?php echo __('Cargo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cargo['Cargo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cargo['Cargo']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salary'); ?></dt>
		<dd>
			<?php echo h($cargo['Cargo']['salary']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cargo'), array('action' => 'edit', $cargo['Cargo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cargo'), array('action' => 'delete', $cargo['Cargo']['id']), array(), __('Are you sure you want to delete # %s?', $cargo['Cargo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Personals'); ?></h3>
	<?php if (!empty($cargo['Personal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Ci'); ?></th>
		<th><?php echo __('Cargo Id'); ?></th>
		<th><?php echo __('Account Number'); ?></th>
		<th><?php echo __('Account Type'); ?></th>
		<th><?php echo __('Bank'); ?></th>
		<th><?php echo __('Observations'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email Personal'); ?></th>
		<th><?php echo __('Email Company'); ?></th>
		<th><?php echo __('Rif'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cargo['Personal'] as $personal): ?>
		<tr>
			<td><?php echo $personal['id']; ?></td>
			<td><?php echo $personal['name']; ?></td>
			<td><?php echo $personal['ci']; ?></td>
			<td><?php echo $personal['cargo_id']; ?></td>
			<td><?php echo $personal['account_number']; ?></td>
			<td><?php echo $personal['account_type']; ?></td>
			<td><?php echo $personal['bank']; ?></td>
			<td><?php echo $personal['observations']; ?></td>
			<td><?php echo $personal['phone']; ?></td>
			<td><?php echo $personal['email_personal']; ?></td>
			<td><?php echo $personal['email_company']; ?></td>
			<td><?php echo $personal['rif']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personals', 'action' => 'view', $personal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personals', 'action' => 'edit', $personal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personals', 'action' => 'delete', $personal['id']), array(), __('Are you sure you want to delete # %s?', $personal['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
