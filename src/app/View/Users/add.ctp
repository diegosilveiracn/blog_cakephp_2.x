<h1>Add User</h1>

<?php echo $this->Form->create('User');

echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('role', array('options' => array('admin' => 'Admin', 'author' => 'Author')));

echo $this->Form->end(__('Submit'));

?>
