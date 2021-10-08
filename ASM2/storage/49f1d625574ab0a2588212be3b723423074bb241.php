
<?php $__env->startSection('content'); ?>
<main>
    <h2>login</h2>
    <span style="color:red;"><?php if(isset($msg)): ?> <?php echo e($msg); ?> <?php endif; ?></span>
    <div class="row">
        <form class="col-md-5" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
          </form>
    </div>

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TAIXAM\htdocs\PHP2\ASM2\app\views/home/login.blade.php ENDPATH**/ ?>