<?php
require_once('../../../private/initialize.php');
$errors = array();

if(!isset($_GET['id'])) {
  if(is_post_request()) {

    // Confirm that values are present before accessing them.
    if(isset($_POST['name'])) { $state['name'] = $_POST['name']; }
    if(isset($_POST['id'])) { $state['id'] = $_POST['id']; }
    if(isset($_POST['code'])) { $state['code'] = $_POST['code']; }
    if(isset($_POST['country_id'])) { $state['country_id'] = $_POST['country_id']; }

    $result = update_state($state);
    if($result === true) {
      redirect_to('show.php?id=' . $state['id']);
    } else {
      $errors = $result;
    }
  } else {
    redirect_to('index.php');
  }
} else {
  $states_result = find_state_by_id(u($_GET['id']));
  if ($states_result->num_rows == 0) {
    redirect_to('index.php');
  }
  // No loop, only one result
  $state = db_fetch_assoc($states_result);
}

?>
<?php $page_title = 'Staff: Edit State ' . h($state['name']); ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="index.php">Back to States List</a><br />

  <h1>Edit State: <?php echo h($state['name']); ?></h1>

  <?php echo display_errors($errors); ?>

  <form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo h($state['id']);?>" />
    Name:<br />
    <input type="text" name="name" value="<?php echo h($state['name']); ?>" /><br />
    Code:<br />
    <input type="text" name="code" value="<?php echo h($state['code']); ?>" /><br />
    Country:<br />
    <input type="text" name="country_id" value="<?php echo h($state['country_id']); ?>" /><br />
    <br />
    <input type="submit" name="submit" value="Update"  />
  </form><br>
  <a href="show.php?id=<?php echo h($state['id']);?>">Cancel</a><br />

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
