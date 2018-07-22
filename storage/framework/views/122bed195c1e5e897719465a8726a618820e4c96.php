<?php $__env->startSection('content'); ?>
	<br/>
	<br/>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
              <center>  <h2>BookMark Saving System</h2> </center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('links.create')); ?>"> Add New BookMark</a>
            </div>
        </div>
    </div>


    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>URL</th>
			<th>Description</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($link->title); ?></td>
            <td><?php echo e($link->url); ?></td>
			 <td><?php echo e($link->description); ?></td>
            <td>
                <form action="<?php echo e(route('links.destroy',$link->id)); ?>" method="POST">


                    <a class="btn btn-info" href="<?php echo e(route('links.show',$link->id)); ?>">Show</a>

 
                    <a class="btn btn-primary" href="<?php echo e(route('links.edit',$link->id)); ?>">Edit</a>


                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

   
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>


    <?php echo $links->links(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('links.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>