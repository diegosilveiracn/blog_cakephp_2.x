<h1>Users Control</h1>

<?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add'));?>

<table>
    <tr>
        <th>Username</th>
        <th>Role</th>
		<th>Actions</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($user['User']['username'],
array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
        <td><?php echo $user['User']['role']; ?></td>
	<td>
            <?php echo $this->Form->postLink(
            'Delete',
            array('action' => 'delete', $user['User']['id']),
            array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id']));?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
