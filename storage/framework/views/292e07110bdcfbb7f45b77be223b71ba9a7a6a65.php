<?php $__env->startSection('content'); ?>
<div class="wrap-table100">
<h2>EDIT KATEGORI</h2>

<form method="POST" action="<?php echo e(url('/post/' . $rows->post_id )); ?>">
	<input name="_method" type="hidden" value="patch">
	<?php echo csrf_field(); ?>
	<table>
		<tr>
			<th>Category</th>
			<td>
			<select name="post_cat_id" class="form-control" style="background-color: salmon; color: white">
				<?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($row->cat_id); ?>"
				<?php if($row->post_id ==$rows->cat_id): ?>
				selected
				<?php endif; ?>
				><?php echo e($row->cat_name); ?> - <?php echo e($row->cat_text); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select></td>
		</tr>

		<tr>
			<th>Tanggal</th>
			<td><input type="date" name="post_date" value="<?php echo e($rows->post_date); ?>" required=""></td>
		</tr>
		<tr>
			<th>Slug</th>
			<td><input type="text" name="post_slug" value="<?php echo e($rows->post_slug); ?>" required=""></td>
		</tr>
		<tr>
			<th>Judul</th>
			<td><input type="text" name="post_title" value="<?php echo e($rows->post_title); ?>" required=""></td>
		</tr>
		<tr>
			<th>Keterangan</th>
			<td><input type="text" name="post_text" value="<?php echo e($rows->post_text); ?>" required=""></td>
		</tr>
		<tr>
			<td></td>
			<td><input class="btn btn-success" type="submit" name="btn-update" value="UPDATE"></td>
		</tr>
	</table>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_satria_uas\resources\views/post/edit.blade.php ENDPATH**/ ?>