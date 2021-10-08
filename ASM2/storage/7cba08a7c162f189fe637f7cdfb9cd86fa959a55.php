
<?php $__env->startSection('content'); ?>
<main>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="#">Tin tức</a></li>
            <li class="breadcrumb-item active" id="title_product" aria-current="page"><?php echo e($post->title); ?></li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-8" style="text-align: justify;">
            <h4><?php echo e($post->title); ?></h4>
            <img src="<?php if($post->image): ?> <?php echo e(PUBLIC_PATH.$post->image); ?> <?php else: ?> <?php echo e(PUBLIC_PATH .'uploads/no-image.jpg'); ?> <?php endif; ?>" style="object-fit: contain;" width="100%" height="300px" alt="">
            <p><?php echo $post->content; ?></p>
        </div>
        <div class="col-md-4">
            <script src="https://widgets.coingecko.com/coingecko-coin-market-ticker-list-widget.js"></script>
            <coingecko-coin-market-ticker-list-widget  coin-id="bitcoin" currency="usd" locale="vi"></coingecko-coin-market-ticker-list-widget>
        </div>
    </div>

</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TAIXAM\htdocs\PHP2\ASM2\app\views/home/detail.blade.php ENDPATH**/ ?>