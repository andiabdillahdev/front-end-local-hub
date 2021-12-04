@extends('partials.headfoot')
@section('konten')

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Kategori Transport</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Beranda</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Master Data</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Kategori Transport</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <!-- Basic table card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Tabel Kategori Transport</h5>
                        </div>

                        <div class="row pl-5 mt-3">
                        <button onclick="overlayForm('master-data/kategori-transport/create','Tambah Kategori Transport')" class="btn btn-primary btn-sm waves-effect waves-light">Tambah Kategori Transport</button>
                        </div>

                        <!-- master-data/kategori/create -->
                        

                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table" id="tb_kategori">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Kabupaten</th>
                                            <th>Kelurahan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Basic table card end -->
                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body end -->

        <div id="styleSelector">

        </div>
    </div>

</div>
@endsection
@push('script')
<script>
    $(function () {

        datatableInit();
        
    })
</script>
@endpush