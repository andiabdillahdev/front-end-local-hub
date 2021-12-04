@extends('partials.headfoot')
@section('konten')

<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                     <h5 class="m-b-10">Wisata</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Beranda</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Service / Layanan</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Wisata</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Tambah Wisata</a>
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
                            <h5>Form Tambah Wisata</h5>
                        </div>

                        <div class="container">
                            <div class="row justify-content-center mt-4 mb-4"> 
                                <div class="col-lg-8">
                                <form>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama">
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama">Kategori</label>
                                                <select name="" class="form-control" id=""></select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama">Sub Kategori</label>
                                                <select name="" class="form-control" id=""></select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama">Provinsi</label>
                                                <select name="" class="form-control" id=""></select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama">Kabupaten</label>
                                                <select name="" class="form-control" id=""></select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama">Kecamatan</label>
                                                <select name="" class="form-control" id=""></select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama">Kelurahan</label>
                                                <select name="" class="form-control" id=""></select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Gambar</label>
                                        <input type="file" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama">
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama">Short Deskripsi</label>
                                                  <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Short Deskripsi">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama">Long Deskripsi</label>
                                                  <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Long Deskripsi">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama">Mitra</label>
                                                <select name="" class="form-control" id=""></select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama">Status</label>
                                                <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">Aktif</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">Tidak Aktif</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center mt-2">
                                    <button class="btn btn-primary btn-sm waves-effect waves-light">Simpan</button>
                                    <button class="btn btn-danger btn-sm waves-effect waves-light ml-2">Batal</button>
                                    </div>

                                </form>   
                                </div>
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

        
    })
</script>
@endpush