
@include('admin.head')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12"> 
                    <div class="page-title-box">
                        <h4 class="page-title float-left">Thêm loại cảm âm</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Adminox</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard 1</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            
                <div class="row">
                    <div class="row col-12">
                        <div class="col-12">

                            <!-- Form row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-box">
                                        <!-- <h4 class="m-t-0 header-title">Form row</h4>
                                        <p class="text-muted m-b-30 font-13">
                                            You may also swap <code class="highlighter-rouge">.row</code> for <code class="highlighter-rouge">.form-row</code>, a variation of our standard grid row that overrides the default column gutters for tighter and more compact layouts.
                                        </p> -->


                                        <form action="{{ url('/add_casi/create') }}">
                                            <input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}" />
                                            <div class="form-group">
                                                <label for="inputAddress" class="col-form-label">Tên ca sĩ:</label>
                                                <input name="tencasi" type="text" class="form-control" id="inputAddress" placeholder="Trịnh đình quang...">
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input value="1" name="sudung" class="form-check-input" type="checkbox"> Sử dụng
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Lưu</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>

            </div>
            <!--- end row -->

        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer text-right">
        2017 - 2018 © Adminox. - Coderthemes.com
    </footer>

</div>
@include('admin.footer')
