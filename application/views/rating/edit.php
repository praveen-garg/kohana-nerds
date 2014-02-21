<?php defined('SYSPATH') or die('No direct script access.'); ?>

<strong>Try to rate yourself on Programming Language(s) [Be fair, add as n/10 where n&lt;10, no validation yet ;) ]</strong>

<?php echo Form::open('rating/post/'.$rating->id); ?>
    <?php echo Form::label("programming_language", "Programming Language"); ?>
    <br />
    <?php echo Form::input("programming_language", $rating->programming_language,  array("required")); ?>
    <br />
    <br />
    <?php echo Form::label("val", "Rating"); ?>
    <br />
    <?php echo Form::input("val", $rating->val, array("required")); ?>
    <br />
    <br />
    <?php echo Form::submit("submit", "Submit"); ?>
<?php echo Form::close(); ?>