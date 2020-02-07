<?php 
$page_title = "Create Page";

require_once("../../../private/initialize.php");
include(SHARED_PATH . '/staff_header.php');


?>

<div class="content">

<a class="back-link" href = "<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

<div class="page new">

	<form action="<?php echo url_for('/staff/pages/create.php'); ?>" method="post">
		<dl>
			<dt>Page title</dt>
			<dd><input type="" name="">
		</dl>

	</form>

	</div>

</div>

<?php
include(SHARED_PATH . '/staff_footer.php');
?>