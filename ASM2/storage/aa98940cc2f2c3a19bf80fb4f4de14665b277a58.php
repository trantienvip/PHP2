
<?php $__env->startSection('content'); ?>
<style>
  main{
    text-align: center;
    margin: 60px 0;
  }
  .form-lg-si{
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    grid-row-gap: 1rem;
  }
</style>
<main>
    <h2>Đăng ký</h2>
    <div class="row">
      <div class="col-md-3"></div>
        <form class="form-lg-si col-md-6" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Đăng ký</button>
          </form>
          <div class="col-md-3"></div>
    </div>

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TAIXAM\htdocs\PHP2\ASM2\app\views/home/signin.blade.php ENDPATH**/ ?>