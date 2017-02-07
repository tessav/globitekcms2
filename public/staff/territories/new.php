<?php
require_once('../../../private/initialize.php');
if(!isset($_GET['id'])) {
  redirect_to('index.php');
}
$id = $_GET['id'];
?>
<?php $page_title = 'Staff: New Territory'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>



<div id="main-content">
  <a href="../states/show.php?id=<?php echo $id;?>">Back to State Details</a><br />

  <h1>New Territory</h1>

  <!-- TODO add form -->

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
