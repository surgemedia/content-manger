<?php
include ('vars-acf-fields.php'); ?>
<?php
$args = array('post_parent' => get_the_id(), 'post_type' => 'page', 'posts_per_page' => - 1, 'post_status' => 'any',);
?>
<?php
$childs = get_children($args, $output); ?>
<div  id="approval_overlay">

<ul class="">
<li><span class="btn pull-right label-default ">Review</span></li>
  <li>
  <a class="btn pull-right label-default " data-toggle="collapse" href="#content-childern">
    <i class="glyphicon glyphicon-text-color"></i><span>Content</span>
  </a>
  <div id="content-childern" class="childern collapse">
    <a class="btn pull-right label-default " >
    <i class="glyphicon glyphicon-text-color"></i><span>View Text</span>
    </a>
    <a class="btn pull-right label-default " >
    <i class="glyphicon glyphicon-text-color"></i><span>Edit Text</span>
     </a>
  </div>
  </li>

  <li>
  <a class="btn pull-right label-default "  data-toggle="collapse" href="#design-childern" >
    <i class="fa-picture-o fa"></i>   <span>Design</span>
  </a>
  <div id="design-childern" class="childern collapse">
<?php $wf_list = get_field('wireframe',18); ?>
<?php for ($i=0; $i < count($wf_list); $i++) { ?>
  <a class="btn pull-right label-default " href="<?php echo $wf_list[$i]['link'] ?>" >
    <i class="verison-number "><?php echo $i+1 ?></i><span>Wireframe</span>
    </a>
<?php } ?>
<?php $gd_list = get_field('wireframe',18); ?>

<?php for ($i=0; $i < count($gd_list); $i++) { ?>
  <a class="btn pull-right label-default " href="<?php echo get_site_url()."/content-manager/"."?v=".$i ?>">
    <i class="verison-number "><?php echo $i+1 ?></i><span>Design</span>
    </a>
<?php } ?>


  </div>

  </li>

  <li> 
  <a class="btn pull-right label-default pull-left" data-toggle="collapse" href="#collapseExample">
    <i class="glyphicon glyphicon-lock"></i>   <span>Final Signoff</span>
  </a>
  </li>

  <li>
    <a href="http://signaturepromotions.surgehost.com.au/content-manager/" class="btn pull-right label-default ">
      <i class="glyphicon glyphicon-link"></i> <span>All Pages</span>
    </a>
  </li>
</ul>
  <?php
include ('part-content-modal.php'); ?>
  <?php
include ('part-design-modal.php'); ?>
  <?php
include ('part-signoff-modal.php'); ?>



</div>
