
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">
        <main class="admin-create-product-page">
            <div class="container mt-4">
                <div class="box-form-create">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nameProduct">Tiêu đề:</label>
                            <input type="text" class="form-control" name="title"
                                placeholder="Tiêu đề . . ." required>
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Topic:</label>
                            <select name="topic_id" class="form-control">
                                <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tp->id); ?>"><?php echo e($tp->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="priceProduct">Ảnh: </label>
                            <input type="file" class="form-control" name="image" accept=".jpg, .jpeg, .png">
                        </div>
                        <div class="form-group">
                            <label for="informationProduct">Nội dung</label>
                            <textarea type="text" class="form-control" name="content"
                                placeholder="Nội dung . . ."></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </form>
                    <a type="submit" href="<?php echo e(BASE_URL . 'cpanel'); ?>" class="btn btn-primary">Xem danh
                        sách</a>
                </div>
                </div>
            </div>
            <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
            <script src="./assets/js/add.js"></script>
        </main>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin-layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TAIXAM\htdocs\PHP2\ASM2\app\views/admin/addPost.blade.php ENDPATH**/ ?>