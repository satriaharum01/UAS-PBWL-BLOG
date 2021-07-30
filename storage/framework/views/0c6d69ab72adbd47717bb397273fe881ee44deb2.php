<?php $__env->startSection('content'); ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Capriola&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">

	<style type="text/css">
		h2 {
			margin-bottom: 20px;
			margin-top: 15px;
			color: salmon;
			font-family: 'Capriola', sans-serif;
			font-size: 30px;
		}
		
		.btn {
			color: dimgray;
		}

		label {
			font-family: 'Handlee', cursive; 
			color: dimgray;
		}
	</style>
</head>
<body>
	<div class="container">
	<div class="col-md-10">
	<h2>Input Data Played</h2>
			<form method="post" action="<?php echo e(url('/played')); ?>">
			<?php echo csrf_field(); ?>
				<table>					
					<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label" style="font-size: 20px">Pilih track</label>:
					<div class="col-sm-5">
							<select name="track_id" class="form-control" style="background-color: salmon; color: white">
							<option value="" holder>-- Pilih --</option>
							<?php $__currentLoopData = $track; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($row->track_id); ?>"><?php echo e($row->track_name); ?> - <?php echo e($row->album->artist->artist_name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
					</div>
					</div>
				</table>

				<div class="form-group row">
					<div>
						<div class="col-sm-10">
						<button type="submit" class="btn" style="background-color: #D7BDE2 " >Simpan</button></div>
					</div>
			</form>

	</div>
</div>
</body>
</html>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_satria_uts\resources\views/played/add.blade.php ENDPATH**/ ?>