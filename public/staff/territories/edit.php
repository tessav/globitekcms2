<?php
require_once('../../../private/initialize.php');
$errors = array();

if(!isset($_GET['id'])) {
  if(is_post_request()) {

    // Confirm that values are present before accessing them.
    if(isset($_POST['name'])) { $territory['name'] = $_POST['name']; }
    if(isset($_POST['position'])) { $territory['position'] = $_POST['position']; }
    if(isset($_POST['state_id'])) { $territory['state_id'] = $_POST['state_id']; }
    if(isset($_POST['id'])) { $territory['id'] = $_POST['id']; }

    $result = update_territory($territory);
    if($result === true) {
      redirect_to('show.php?id=' . $territory['id']);
    } else {
      $errors = $result;
    }
  } else {
    redirect_to('index.php');
  }
}
$territories_result = find_territory_by_id($_GET['id']);
// No loop, only one result
$territory = db_fetch_assoc($territories_result);

?>
<?php $page_title = 'Staff: Edit Territory ' . $territory['name']; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="../states/show.php?id=<?php echo $territory['state_id']; ?>">Back to State Details</a><br />

  <h1>Edit Territory: <?php echo $territory['name']; ?></h1>

  <?php echo display_errors($errors); ?>

  <form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $territory['id'];?>" />
    <input type="hidden" name="state_id" value="<?php echo $territory['state_id'];?>" />
    Name:<br />
    <input type="text" name="name" value="<?php echo $territory['name']; ?>" /><br />
    Position:<br />
    <input type="text" name="position" value="<?php echo $territory['position']; ?>" /><br />
    <br />
    <input type="submit" name="submit" value="Update"  />
  </form><br>
  <a href="show.php?id=<?php echo $territory['id'];?>">Cancel</a><br />

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
