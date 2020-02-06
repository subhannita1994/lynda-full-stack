<?php $page_title = 'Create Subject'; 
require_once("../../../private/initialize.php");

if(!isset($_GET['id']))
	redirect_to('/staff/subjects/index.php');
$id = $_GET['id'];

$menu_name = '';
$position = '';
$visible = '';

if(is_post_request()){
	include(SHARED_PATH . '/staff_header.php');

	$menu_name = isset($_POST['menu_name']) ? $_POST['menu_name'] : '';
	$position = isset($_POST['position']) ? $_POST['position'] : '';
	$visible = isset($_POST['visible']) ? $_POST['visible'] : '';

	echo "Form Parameters : </br> Menu name : " . $menu_name . "</br>Position : " . $position . "</br>Visible : " . $visible;  


	include(SHARED_PATH . '/staff_footer.php');
}

?>
<div id="content">
<a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Subject</h1>

    <form action="<?php echo url_for('/staff/subjects/edit.php?id='.h(u($id))); ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo $menu_name; ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" name = "submit" value="Edit Subject" />
      </div>
    </form>

  </div>

</div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
