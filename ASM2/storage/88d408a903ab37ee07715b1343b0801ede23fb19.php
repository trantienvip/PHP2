
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Owner_by</th>
                <th scope="col">Status</th>
                <th scope="col" colspan="1">Chức năng</th>
            </tr>
            </thead>
            <tbody id="show">
                <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td scope="row"><?php echo e($p->id); ?></td>
                        <td scope="row"><?php echo e($p->name); ?></td>
                        <td scope="row"><?php echo e($p->user->name); ?></td>
                        <td scope="row">
                            <?php if($p->status == 1): ?>
                            <span style="color:green">Active</span>
                            <?php else: ?>
                            <span style="color:red">Closed</span>
                            <?php endif; ?>
                        </td>
                        
                        <td><a class="btn btn-primary" href="<?php echo e(BASE_URL . 'cpanel-topic/edit/' . $p->id); ?>">Sửa</a></td>
                        
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    window.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.toggle-one').forEach(e => {
            e.addEventListener("click", function() {
            console.log('xxxx');
            });
        });
    });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin-layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TAIXAM\htdocs\PHP2\ASM2\app\views/admin/cpanel-topic.blade.php ENDPATH**/ ?>