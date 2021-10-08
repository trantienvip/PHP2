<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{$title}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @include('admin.admin-layout.style')
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">
            @include('admin.admin-layout.topbar')
            @include('admin.admin-layout.left-menu')
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">{{$title}}</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">{{$title}}</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        @yield('content')
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

        @include('admin.admin-layout.js')
    </body>
</html>