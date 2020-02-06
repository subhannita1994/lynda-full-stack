<?php
require_once('../../../private/initialize.php');
$page_title = "Staff Pages";
include(SHARED_PATH . '/staff_header.php');

$pages = [
			['id'=>1, 'title'=>'Globe Bank', 'link'=>url_for('/index.php')],
			['id'=>2, 'title'=>'Staff Menu', 'link'=>url_for('/staff/index.php')],
			['id'=>3, 'title'=>'Subjects', 'link'=>url_for('/staff/subjects/index.php')],
			['id'=>4, 'title'=>'Pages', 'link'=>url_for('/staff/pages/index.php')]];

?>


<div id="content">
	<div id = "pages listing">
		<h1>Pages</h1>
		<div class="actions">
			<a class = "action" href ="<?php url_for('/staff/pages/new.php'); ?>">Create New Page</a>
		</div> 
	</div>

	<table class="list">

		<tr>
			<th>ID</th>
			<th>Page Title</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>

		<tr>
			<?php foreach ($pages as $item) { ?>
				<td> <?php echo $item['id']; ?> </td>
				<td> <?php echo $item['title']; ?></td>
				<td> <a href = "<?php echo $item['link']; ?>">View</a></td>
				<td> <a href = "<?php echo url_for('/staff/pages/edit.php?id=' . h(u($item['id']))); ?>">Edit</a></td>
			</tr>
			<?php } ?>

	</table>
</div>

<?php
include(SHARED_PATH . '/staff_footer.php');
?>
