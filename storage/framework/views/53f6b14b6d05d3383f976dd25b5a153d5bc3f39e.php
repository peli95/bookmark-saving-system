<?php $__env->startSection('content'); ?>
<head>
 <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
	</head>
    <div class="container">
        <div class="row">
            <h1>Submit a link</h1><br/>
            <form action="/submit" method="post">
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                <?php endif; ?>

                <?php echo csrf_field(); ?>

                <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo e(old('title')); ?>">
                    <?php if($errors->has('title')): ?>
                        <span class="help-block"><?php echo e($errors->first('title')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('url') ? ' has-error' : ''); ?>">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="<?php echo e(old('url')); ?>">
                    <?php if($errors->has('url')): ?>
                        <span class="help-block"><?php echo e($errors->first('url')); ?></span>
                    <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description"><?php echo e(old('description')); ?></textarea>
                    <?php if($errors->has('description')): ?>
                        <span class="help-block"><?php echo e($errors->first('description')); ?></span>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>