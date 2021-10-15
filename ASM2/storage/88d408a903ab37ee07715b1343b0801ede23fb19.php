
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
                        
                        <td><div class="toggle-one"><input class="statusChecked" type="checkbox" value="<?php echo e($p->id); ?>" <?php echo e($p->StatusBnt()); ?> data-toggle="toggle"></div></td>
                        
                        <td><a class="btn btn-info" href="<?php echo e(BASE_URL . 'cpanel-topic/info/' . $p->id); ?>">Danh sách bài viết</a></td>
                        
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<script>
        const qSelectAll = document.querySelectorAll.bind(document);
        const qSelect = document.querySelector.bind(document);

        if (document.querySelectorAll('.toggle-one')) {
            if (qSelectAll('.toggle-one')) {
                qSelectAll('.toggle-one').forEach((element,index) => {
                    element.addEventListener('click', e => {
                        console.log('bandau',qSelectAll('.statusChecked')[index].value);

                        console.log(qSelectAll('.statusChecked')[index].checked ? 2 : 1);
                        $.ajax({
                            type: "post",
                            url: "http://localhost:8080/php2/asm2/cpanel-topic/saveStatus",
                            data: {
                                id: qSelectAll('.statusChecked')[index].value,
                                status: qSelectAll('.statusChecked')[index].checked ? 2 : 1,
                            },
                            success: function (response) {
                                console.log('Thành công')
                            }
                        });
                    });
                });
            };
        };
    
  </script>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin-layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TAIXAM\htdocs\PHP2\ASM2\app\views/admin/cpanel-topic.blade.php ENDPATH**/ ?>