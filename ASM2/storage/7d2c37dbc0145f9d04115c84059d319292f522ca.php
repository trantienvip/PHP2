<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo e($title); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <?php echo $__env->make('admin.admin-layout.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">
            <?php echo $__env->make('admin.admin-layout.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin.admin-layout.left-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Start Page Content here -->
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Cpanel</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo e($title); ?></a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title"><?php echo e($title); ?></h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <?php echo $__env->yieldContent('content'); ?>
                        <!-- end row -->


                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                &copy; Copyright 2021 <a href="">CR88 News</a> 
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Thong bao -->
        <div id="deleteProduct" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Bạn có chắc chắn muốn xóa? Không thể khôi phục hành động này!
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                  <button type="button" class="btn btn-danger" id="delete_ok" >Xóa</button>
                </div>
              </div>
            </div>
          </div>
        <!-- Thông báo -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <?php echo $__env->make('admin.admin-layout.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH D:\TAIXAM\htdocs\PHP2\ASM2\app\views/admin/admin-layout/main.blade.php ENDPATH**/ ?>