<?php if (!empty($pre_object)) print render($pre_object) ?>

<div class='<?php print $classes ?> clearfix' <?php print ($attributes) ?>>
  <?php if (!empty($title_prefix)) print render($title_prefix); ?>

  <?php if (!$page && !empty($title)): ?>
    <h2 <?php if (!empty($title_attributes)) print $title_attributes ?>>
      <?php if (!empty($new)): ?><span class='new'><?php print $new ?></span><?php endif; ?>
      <a href="<?php print $node_url ?>"><?php //print $title ?></a>
    </h2>
  <?php endif; ?>

  <?php if (!empty($title_suffix)) print render($title_suffix); ?>

  <?php if (!empty($submitted)): ?>
    <div class=''><?php print $submitted ?></div>
  <?php endif; ?>
<?php /********* Left block ********/ ?>
<div class="client-cards-block">
  <?php if (!empty($content['body'])): ?>
       <?php print render($content['body']) ?>
  <?php endif; ?>
  <?php if (!empty($content['field_challenges_current_situati'])): ?>
      <?php print render($content['field_challenges_current_situati']) ?>
  <?php endif; ?>
  
  <?php if (!empty($content['field_client_serving_history'])): ?>
        <?php print render($content['field_client_serving_history']) ?>
  <?php endif; ?>

</div>
<?php /********* Middle block ********/ ?>
<div class="client-cards-block">
  <?php if (!empty($content['field_yearly_action_plans'])): ?>
      <?php 
      $field_yearly_action_plans = field_get_items('node', $node, 'field_yearly_action_plans');
      print render($content['field_yearly_action_plans']) ?>
  <?php endif; ?>
</div>

<?php /********* Right block ********/ ?>
<div class="client-cards-block">
  <?php if (!empty($content['field_action_plan'])): ?>
        <?php print render($content['field_action_plan']) ?>
  <?php endif; ?>
</div>

  <?php if (!empty($links)): ?>
  <?php
  hide($content['links']['comment']);
  ?>
    <div class=''>
      <?php print render($links) ?>
    </div>
  <?php endif; ?>
</div>
<!-- Start div of comment section-->
<div id ="client_cards_comments">
    <?php print render($content['comments']); ?>
</div>
<!-- End div of comment section -->
<?php if (!empty($post_object)) print render($post_object) ?>
