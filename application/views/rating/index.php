<?php defined('SYSPATH') or die('No direct script access.'); ?>

<strong>Expertise rating in Programming Languages</strong>
&nbsp; &nbsp;  &nbsp;
<?php echo HTML::anchor("rating/new", "Add Rating "); ?>
<br/><br/>
<div class="table-responsive col-sm-6"">
	<table class="table table-striped">
	<?php foreach ($ratings as $rating) : ?>
		<tr>
    	<td><?php echo $rating->programming_language; ?></td>
    	<td><?php echo $rating->val; ?></td>
    	<td><?php echo HTML::anchor("rating/edit/".$rating->id, "Edit"); ?>  |
    	<?php echo HTML::anchor("rating/delete/".$rating->id, "Delete"); ?> </td>
    	</tr>
    <?php endforeach; ?>
	</table>
</div>
