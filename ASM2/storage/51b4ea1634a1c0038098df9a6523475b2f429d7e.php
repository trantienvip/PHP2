
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <main class="admin-create-product-page">
            <div class="container mt-4">
                <div class="box-form-create">
                        <div class="form-group">
                            <label for="nameProduct">Avatar: <img width="50px" src="<?php if(!empty($user->avatar)): ?><?php echo e(PUBLIC_PATH.$user->avatar); ?> <?php else: ?> <?php echo e(PUBLIC_PATH); ?>assets\images\users\user-1.jpg <?php endif; ?>" alt=""></label>
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Họ tên: <?php echo e($user->name); ?></label>
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Email: <?php echo e($user->email); ?></label>
                        </div>
                        <div class="form-group text-center">
                            <a  href="<?php echo e(BASE_URL.'cpanel/information/update/'.$user->id); ?>" class="btn btn-success capnhatthongtin">Cập nhật thông tin</a>
                            <a href="<?php echo e(BASE_URL.'cpanel/information/changepass/'.$user->id); ?>" class="btn btn-primary thaydoimatkhau">Thay đổi mật khẩu</a>
                        </div>
                </div>
            </div>
        </main>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin-layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TAIXAM\htdocs\PHP2\ASM2\app\views/admin/information/cpanel-information.blade.php ENDPATH**/ ?>