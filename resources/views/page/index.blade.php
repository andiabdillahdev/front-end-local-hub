@extends('page.layouts.headfoot')
@section('page')
<div class="wrapper-content">

    <section class="hero-image">
        <div class="hero-content">
            <div class="hero-content-inner text-center">
                <h1>From Local <br> to Global</h1>
                <span>The digital transformation of tourism</span>
                <div class="search-box-hero">
                    <div class="d-flex justify-content-center">
                        <input type="text" class="form-control search-box first-box" placeholder="Daerah ?">
                        <input type="text" class="form-control search-box second-box" placeholder="Destinasi ?">
                        <button class="btn button_hero button-primary">Cari</button>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <section class="section">
            <div class="title_section text-center">Layanan</div>
            <div class="row content-section">
                <div class="col-lg-3">
                    <div class="card_go height-md">
                        <div class="icon_service text-center">
                            <img src="{{ asset('page/custom/assets/img/service/wisata.png') }}" class="rounded_icon"
                                alt="" srcset="">
                        </div>
                        <h1>Wisata Lokal</h1>
                        <p>Fitur Penginapan akan
                            memberikan layanan informasi
                            mengenai penginapanbaik itu
                            hotel, homestay.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card_go height-md">
                        <div class="icon_service text-center">
                            <img src="{{ asset('page/custom/assets/img/service/penginapan.png') }}" class="rounded_icon"
                                alt="" srcset="">
                        </div>
                        <h1>Penginapan Lokal</h1>
                        <p>Fitur wisata akan memberikan
                            pengguna untuk bisa mencari
                            informasi terkait wisata lokal </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card_go height-md">
                        <div class="icon_service text-center">
                            <img src="{{ asset('page/custom/assets/img/service/transport.png') }}" class="rounded_icon"
                                alt="" srcset="">
                        </div>
                        <h1>Transportasi Lokal</h1>
                        <p>Fitur Transport akan memberikan
                            layanan informasi mengenai
                            estimasi waktu perjalanan,
                            jarak tempuh, biaya transportasi</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card_go height-md">
                        <div class="icon_service text-center">
                            <img src="{{ asset('page/custom/assets/img/service/pasar.png') }}" class="rounded_icon"
                                alt="" srcset="">
                        </div>
                        <h1>Pasar Lokal</h1>
                        <p>Fitur Pasar akan memberikan
                            layanan informasi dan juga
                            transaksi pembelian
                            oleh-oleh atau buah tangan </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="title_section text-center">Destinasi Wisata</div>
            <div class="row content-section">
                <div class="col-lg-4">
                    <div class="card_go">
                        <img src="{{ asset('page/custom/assets/img/wisata/bislap.png') }}" class="destinasi-img" alt=""
                            srcset="">
                        <div class="content-destinasi">
                            <div class="d-flex justify-content-between">
                                <div class="first-destinasi-item">
                                    <h1>Wisata Air Terjun</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                                <div class="second-destinasi-item">

                                    <img src="{{ asset('page/custom/assets/img/marker.png') }}" class="marker_destinasi"
                                        alt="" srcset="">
                                    <span>Maros</span>
                                    <p>Sulawesi Selatan</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card_go">
                        <img src="{{ asset('page/custom/assets/img/wisata/bantimurung.png') }}" class="destinasi-img"
                            alt="" srcset="">
                        <div class="content-destinasi">
                            <div class="d-flex justify-content-between">
                                <div class="first-destinasi-item">
                                    <h1>Wisata Gunung</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                                <div class="second-destinasi-item">

                                    <img src="{{ asset('page/custom/assets/img/marker.png') }}" class="marker_destinasi"
                                        alt="" srcset="">
                                    <span>Maros</span>
                                    <p>Sulawesi Selatan</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card_go">
                        <img src="{{ asset('page/custom/assets/img/wisata/bislap.png') }}" class="destinasi-img" alt=""
                            srcset="">
                        <div class="content-destinasi">
                            <div class="d-flex justify-content-between">
                                <div class="first-destinasi-item">
                                    <h1>Wisata Pantai</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                                <div class="second-destinasi-item">

                                    <img src="{{ asset('page/custom/assets/img/marker.png') }}" class="marker_destinasi"
                                        alt="" srcset="">
                                    <span>Maros</span>
                                    <p>Sulawesi Selatan</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="section">
            <div class="title_section text-center">Wisata Favorit</div>
            <div class="row content-section">
                <div class="col-lg-4">
                    <div class="card_go">
                        <img src="{{ asset('page/custom/assets/img/wisata/monyet.png') }}" class="destinasi-img" alt=""
                            srcset="">
                        <div class="content-destinasi">
                            <div class="d-flex justify-content-between">
                                <div class="first-destinasi-item">
                                    <h1>Bantimurung</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                                <div class="second-destinasi-item">

                                    <img src="{{ asset('page/custom/assets/img/marker.png') }}" class="marker_destinasi"
                                        alt="" srcset="">
                                    <span>Maros</span>
                                    <p>Sulawesi Selatan</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card_go">
                        <img src="{{ asset('page/custom/assets/img/wisata/kars.png') }}" class="destinasi-img" alt=""
                            srcset="">
                        <div class="content-destinasi">
                            <div class="d-flex justify-content-between">
                                <div class="first-destinasi-item">
                                    <h1>Rammang</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                                <div class="second-destinasi-item">

                                    <img src="{{ asset('page/custom/assets/img/marker.png') }}" class="marker_destinasi"
                                        alt="" srcset="">
                                    <span>Maros</span>
                                    <p>Sulawesi Selatan</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card_go">
                        <img src="{{ asset('page/custom/assets/img/wisata/goa.png') }}" class="destinasi-img" alt=""
                            srcset="">
                        <div class="content-destinasi">
                            <div class="d-flex justify-content-between">
                                <div class="first-destinasi-item">
                                    <h1>Goa Leang-Leang</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                                <div class="second-destinasi-item">

                                    <img src="{{ asset('page/custom/assets/img/marker.png') }}" class="marker_destinasi"
                                        alt="" srcset="">
                                    <span>Maros</span>
                                    <p>Sulawesi Selatan</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="section-other">
            <div class="title_section text-center">Pasar Lokal</div>
            <div class="row content-section">
                <div class="col-lg-6">
                    <div class="img-pasar-area">
                    <img src="{{ asset('page/custom/assets/img/pasars.png') }}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card_go height-sm">
                                <h6 class="mt-2">Kuliner</h6>
                             
                                <div class="img-pasar">
                                    <img src="{{ asset('page/custom/assets/img/service/pasar/icon_pasar1.png') }}" class="img-pasar-item" alt="" srcset="">
                                </div>
                                <div class="desc_pasar">
                                    <p style="font-size:12px;line-height:16px;">Fitur Penginapan akan
                                        memberikan layanan informasi
                                        mengenai penginapanbaik itu
                                        hotel, homestay.</p>
                                </div>
                            
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card_go height-sm">
                                <h6 class="mt-2">Oleh Oleh</h6>
                             
                                <div class="img-pasar">
                                    <img src="{{ asset('page/custom/assets/img/service/pasar/icon_pasar2.png') }}" class="img-pasar-item" alt="" srcset="">
                                </div>
                                <div class="desc_pasar">
                                    <p style="font-size:12px;line-height:16px;">Fitur Penginapan akan
                                        memberikan layanan informasi
                                        mengenai penginapanbaik itu
                                        hotel, homestay.</p>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <div class="card_go height-sm">
                                <h6 class="mt-2">Aksesoris</h6>
                             
                                <div class="img-pasar">
                                    <img src="{{ asset('page/custom/assets/img/service/pasar/icon_pasar3.png') }}" class="img-pasar-item" alt="" srcset="">
                                </div>
                                <div class="desc_pasar">
                                    <p style="font-size:12px;line-height:16px;">Fitur Penginapan akan
                                        memberikan layanan informasi
                                        mengenai penginapanbaik itu
                                        hotel, homestay.</p>
                                </div>
                            
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card_go height-sm">
                                <h6 class="mt-2">Hasil Bumi</h6>
                             
                                <div class="img-pasar">
                                    <img src="{{ asset('page/custom/assets/img/service/pasar/icon_pasar4.png') }}" class="img-pasar-item" alt="" srcset="">
                                </div>
                                <div class="desc_pasar">
                                    <p style="font-size:12px;line-height:16px;">Fitur Penginapan akan
                                        memberikan layanan informasi
                                        mengenai penginapanbaik itu
                                        hotel, homestay.</p>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

@endsection