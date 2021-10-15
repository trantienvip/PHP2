
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Images</th>
                    <th scope="col">topics</th>
                    <th scope="col">Author</th>
                    <th scope="col" colspan="2">Chức năng</th>
                </tr>
                </thead>
                <tbody id="show">
                    <?php $__currentLoopData = $topic->post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="row"><?php echo e($p->id); ?></td>
                            <td scope="row"><?php echo e($p->title); ?></td>
                            <td scope="row"><img src="<?php if($p->image): ?> <?php echo e(PUBLIC_PATH.$p->image); ?> <?php else: ?> <?php echo e(PUBLIC_PATH .'uploads/no-image.jpg'); ?> <?php endif; ?>" width ="80px" height ="55px"></td>
                            <td scope="row"><?php echo e($p->topic->name); ?></td>
                            <td scope="row"><?php echo e($p->user->name); ?></td>
                            <td><a class="btn btn-primary" href="<?php echo e(BASE_URL . 'cpanel/edit/' . $p->id); ?>">Sửa</a></td>
                            <td><a class="btn btn-danger" href="<?php echo e(BASE_URL . 'cpanel/softdel/' . $p->id); ?>">Xóa</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin-layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TAIXAM\htdocs\PHP2\ASM2\app\views/admin/topic/listpost.blade.php ENDPATH**/ ?>