<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>
                <div class="card-body">
                    <?php if($all->count() && $postes->count()): ?>
                <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $postes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if($posts->user_id === $post->user_id or $posts->privacy == "False"): ?>
                        <li>
                        <a href='/posts/<?php echo e($post->id); ?>'> <?php echo e($post->title); ?></a>
                    
                        </li>
                        
                                 <?php endif; ?>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                     <?php elseif(): ?>
                     <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($posts->privacy === "False"): ?>
                        <li>
                        <a href="/posts/<?php echo e($post->id); ?>"> <?php echo e($posts->title); ?>

                    </a>
                    
                    
                        </li>
                        <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                    <?php endif; ?>
                </div>
            </div>
            <ul>
        <a href="/home">Home</a>
    </ul>
        </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\social\resources\views/postes/index.blade.php ENDPATH**/ ?>