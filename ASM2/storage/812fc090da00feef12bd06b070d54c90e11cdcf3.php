
<?php $__env->startSection('content'); ?>
<main>
    <div class="news-auto row">
        <div class="title">
            <h5 class="title_allsp"> Có <b><?php echo e(count($posts)); ?></b> Kết quả tìm kiếm cho từ khóa "<b><?php echo e($keySearch); ?></b>" </h5>
        </div>
        <div class="row" style="text-align:center; width: 100%; margin: 20px 0">
            <div class="col-12">
                <?php if(count($posts) > 0): ?>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(BASE_URL.'detail/'.$post->id); ?>" class="content article">
                            <img src="<?php if($post->image): ?> <?php echo e(PUBLIC_PATH.$post->image); ?> <?php else: ?> <?php echo e(PUBLIC_PATH .'uploads/no-image.jpg'); ?> <?php endif; ?>" alt="">
                            <div class="article-right">
                                <h4 class="title-article"><?php echo e($post->title); ?></h4>
                                <span class="user"><i class="ti-user"></i> <?php echo e($post->user->name); ?> - <i class="ti-timer"></i> 13 Aug, 2021</span>
                                <p class="desc">Tròn 1 tháng hard fork London và bản nâng cấp EIP-1559 được triển khai thành công,
                                    blockchain Ethereum hiện đang phát triển như thế nào? Giá ETH đã tăng trưởng ra sao? Hãy cùng
                                    Coin68
                                    tìm hiểu chi tiết trong bài viết dưới đây nhé!Từ trước đến nay, đồng tiền mã hoá ETH vẫn luôn bị
                                    đánh giá thấp cũng như chỉ trích là “lạm phát” bởi nguồn cung vô hạn. Và rồi, đến ngày 05/08,
                                    nâng cấp EIP-1559 đã được triển khai thành công cũng như chính thức đưa vấn đề “ETH lạm phát”
                                    trở thành câu chuyện của quá khứ. Theo thống kê thì Ethereum đã từng “đốt tiền” với tốc độ lên
                                    đến 10.000 USD mỗi phút chỉ sau ngày đầu tiên thực hiện nâng cấp EIP-1559.</p>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <h3 style="text-align: center; width: 100%">Không tìm thấy kết quả !</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TAIXAM\htdocs\PHP2\ASM2\app\views/home/search.blade.php ENDPATH**/ ?>