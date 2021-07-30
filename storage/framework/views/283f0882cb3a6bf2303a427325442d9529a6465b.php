<?php $__env->startSection('content'); ?>
<div class="wrap-table100">
<h2>Tambah Data Post</h2>
<form method="POST" action="<?php echo e(url('/post')); ?>">
	<?php echo csrf_field(); ?>
	<table>
		<tr>
			<th>Category</th>
			<td>
			<select name="post_cat_id" class="form-control" style="background-color: salmon; color: white">
				<?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($row->cat_id); ?>"><?php echo e($row->cat_name); ?> - <?php echo e($row->cat_text); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select></td>
		</tr>

		<tr>
			<th>Tanggal</th>
			<td><input type="date" name="post_date" value="" required=""></td>
		</tr>
		<tr>
			<th>Slug</th>
			<td><input type="text" name="post_slug" value="" required=""></td>
		</tr>
		<tr>
			<th>Judul</th>
			<td><input type="text" name="post_title" value="" required=""></td>
		</tr>
		<tr>
			<th>Keterangan</th>
			<td><input type="text" name="post_text" value="" required=""></td>
		</tr>
		<tr>
			<td></td>
			<td><input class="btn btn-primary" type="submit" name="simpan" value="SIMPAN"></td>
		</tr>
	</table>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_satria_uas\resources\views/post/add.blade.php ENDPATH**/ ?>