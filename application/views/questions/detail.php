<?php 
	// var_dump($question);
	// var_dump($answers);
echo var_dump($this->uri->segment(3));

 ?>
 <section class="question">
 	<h2><?php echo $question->subject; ?></h2>
 	<p class="name">
 		<?php echo $question->user->first_name; ?>
 		<?php echo $question->user->last_name; ?>

 		-<?php echo $question->created; ?>
 	</p>
 	<p><?php echo $question->text; ?></p>
 </section>
 <?php if(!empty($answers)): ?>
 <section class="answers">
 <h3 class="highlight"> Answer: </h3>
 <?php foreach($answers as $answer): ?>
	<article>
		 	<h2><?php echo $answer->text; ?></h2>
		 	<p class="name">
		 		<?php echo $answer->user->first_name; ?>
 				<?php echo $answer->user->last_name; ?>
		 		-<?php echo $answer->created; ?>
		 	</p>
		 	<p><?php echo $answer->text; ?></p>
	 </article>
 <?php endforeach; ?>
 </section>
<?php endif; ?>
<b>Question :: <p class='s'><?php  echo $question->text; ?></p></b>
<section class="comment">
<h2> Answers this Questions !</h2>
<?php echo form_open(); ?>
<?php echo form_hidden('user_id',$this->ion_auth->user()->row()->id); ?>
<?php echo form_hidden('question_id',(int) $this->uri->segment(3)); ?>
<?php echo form_textarea('text'); ?>
<?php echo form_submit('submit', 'submit your Answer' ); ?>
<?php echo form_close(); ?>
	
</section>