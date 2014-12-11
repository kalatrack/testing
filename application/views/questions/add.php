<?php echo var_dump($this->ion_auth->user()->row()->id); ?>
<h2> Add a New Question?</h2>

<?php echo form_open(); ?>
<b>Subject : </b><?php echo form_input('subject') ?>
<?php echo form_hidden('user_id',$this->ion_auth->user()->row()->id); ?>
<?php echo "<hr>"; ?> 
<b>Question : </b><?php echo form_textarea('text'); ?>
<?php echo form_submit('submit', 'Add Question' ); ?>
<?php echo form_close(); ?>
<?php echo anchor('questions/listing','Cancel','class="btn"'); ?>