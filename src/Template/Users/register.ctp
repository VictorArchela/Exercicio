<h1>Register</h1>
<?= $this->Form->create(); ?>
<?= $this->Form->input('name'); ?>
<?= $this->Form->input('email'); ?>
<?= $this->Form->input('password'); ?>
<?= $this->Form->button('Register'); ?>
<?= $this->Form->button('Login'); ?>
<?= $this->Form->end(); ?>
