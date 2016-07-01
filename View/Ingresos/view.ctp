<div class="ingresos view">
<h2><?php echo __('Ingreso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ingreso['Ingreso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Concepto'); ?></dt>
		<dd>
			<?php echo h($ingreso['Ingreso']['concepto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monto'); ?></dt>
		<dd>
			<?php echo h($ingreso['Ingreso']['monto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ing Date'); ?></dt>
		<dd>
			<?php echo h($ingreso['Ingreso']['ing_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ingreso'), array('action' => 'edit', $ingreso['Ingreso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ingreso'), array('action' => 'delete', $ingreso['Ingreso']['id']), array(), __('Are you sure you want to delete # %s?', $ingreso['Ingreso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingresos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingreso'), array('action' => 'add')); ?> </li>
	</ul>
</div>
