@extends('layouts.master')
@section('content')
    <?php
    $hour = date('G');
    $minute = date('i');
    $second = date('s');
    $msg = ' Today is ' . date('l, M. d, Y.');
    
    if ($hour >= 0 && $hour <= 11 && $minute <= 59 && $second <= 59) {
        $greet = 'Selamat Pagi,';
    } elseif ($hour >= 12 && $hour <= 15 && $minute <= 59 && $second <= 59) {
        $greet = 'Selamat Siang,';
    } elseif ($hour >= 16 && $hour <= 17 && $minute <= 59 && $second <= 59) {
        $greet = 'Selamat Sore,';
    } elseif ($hour >= 18 && $hour <= 23 && $minute <= 59 && $second <= 59) {
        $greet = 'Selamat Malam,';
    }
    
    ?>
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">{{ $greet }} {{ Session::get('name') }} &#128522;</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard <b>{{ Session::get('role_name') }}</b></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="container">
                <div class="action-buttons">
                    <button onclick="slideContent('left')" id="moveLeftButton" class="action-button action-button-primary"><span class="arrow-kiri"></span></button>
                    <button onclick="slideContent('right')" id="moveRightButton" class="action-button action-button-primary"><span class="arrow-kanan"></span></button>
                </div>
                <div id="slide-card-atas">
                    <a href="#" class="slide-card-atass">
                        <span class="dash-widget-icon"><i class="fa fa-users"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataPegawai }}</h2><br>
                            <div class="currency">
                                Jumlah Seluruh Pegawai
                            </div>
                        </div>
                        </a>
                    
                    <a href="#" class="slide-card-atass">
                    <span class="dash-widget-icon"><i class="fa fa-user-circle"></i></span>
                    <div>
                        <h2 role="presentation">{{ $dataPNS }}</h2><br>
                        <div class="currency">
                            Pegawai PNS
                        </div>
                    </div>
                    </a>

                    <a href="#" class="slide-card-atass">
                    <span class="dash-widget-icon"><i class="fa fa-user-circle-o"></i></span>
                    <div>
                        <h2 role="presentation">{{ $dataCPNS }}</h2><br>
                        <div class="currency">
                            Pegawai CPNS
                        </div>
                    </div>
                    </a>

                    <a href="#" class="slide-card-atass">
                    <span class="dash-widget-icon"><i class="fa fa-user-o"></i></span>
                    <div>
                        <h2 role="presentation">{{ $dataPPPK }}</h2><br>
                        <div class="currency">
                            Pegawai PPPK
                        </div>
                    </div>
                    </a>

                    <a href="#" class="slide-card-atass">
                    <span class="dash-widget-icon"><i class="fa fa-user"></i></span>
                    <div>
                        <h2 role="presentation">{{ $datanonASN }}</h2><br>
                        <div class="currency">
                            Pegawai Non-ASN
                        </div>
                    </div>
                    </a>
                </div>
            </div><br>

            <div class="col-md-12">
                <div class="card dash-widget">
                    <div class="card-body2">
                        <div class="dash-widget-info">
                            <center><span style="font-size: 20px; font-weight: 600; font-family: Poppins;"></span></center>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="action-buttons2">
                    <button onclick="slideContent2('left')" id="moveLeftButton2" class="action-button2 action-button2-primary"><span class="arrow-kiri2"></span></button>
                    <button onclick="slideContent2('right')" id="moveRightButton2" class="action-button2 action-button2-primary"><span class="arrow-kanan2"></span></button>
                </div>
                <div id="slide-card-bawah">
                    <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidur }}</h2><br>
                            <div class="currency">
                                Jumlah Tempat Tidur
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurIGD }}</h2><br>
                            <div class="currency">
                                Tempat Tidur IGD Terpadu
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurBedah }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Bedah Center
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRR }}</h2><br>
                            <div class="currency">
                                Tempat Tidur RR
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurPoliJantung }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Poli Jantung
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurPoliKelamindanKulit }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Poli Kelamin dan Kulit
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPoliSaraf }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Poli Saraf
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPoliGigi }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Poli Gigi
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPoliDalam }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Poli Dalam
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPoliMata }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Poli Mata
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPoliTHT }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Poli THT
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPoliParu }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Poli Paru
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPoliUmum }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Poli Umum
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPoliAnak }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Poli Anak
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPoliKandungan }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Poli Kandungan
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPoliJiwa }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Poli Jiwa
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPoliOrthopedi }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Poli Orthopedi
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPoliDots }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Poli Dots
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangHemodialisis }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Hemodialisis
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangKebidanan }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Kebidanan
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPinang }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Ruang Pinang
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangKebidanan }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Perinatologi
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangCemara }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Ruang Cemara
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangHCUBougenvill }}</h2><br>
                            <div class="currency">
                                Tempat Tidur HCU Bougenvill
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangICU }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Ruang ICU
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangICCU }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Ruang ICCU
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangAsoka }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Ruang Asoka
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPinus }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Ruang Pinus
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangWijayaKusuma }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Ruang Wijaya Kusuma
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPavilliun }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Ruang Pavilliun
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangPalem }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Ruang Palem
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangBidara }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Ruang Bidara
                            </div>
                        </div>
                        </a>
                    
                        <a href="#" class="slide-card-bawahs">
                        <span class="dash-widget-icon"><i class="fa fa-bed"></i></span>
                        <div>
                            <h2 role="presentation">{{ $dataTempatTidurRuangNonPerawatan }}</h2><br>
                            <div class="currency">
                                Tempat Tidur Ruang Non Perawatan
                            </div>
                        </div>
                        </a>
                </div>
            </div><br>
            
            <div class="col-md-12">
                <div class="card dash-widget">
                    <div class="card-body">
                        <div class="dash-widget-info">
                            <center><span style="font-size: 20px; font-weight: 600; font-family: Poppins;">Informasi
                                    Grafik</span></center>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title"><b>Riwayat Pendidikan</b></h3>
                                    <div class="container px-4 mx-auto">
                                        {!! $chart->container() !!}
                                    </div>
                                    <script src="{{ $chart->cdn() }}"></script>
                                    {{ $chart->script() }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title"><b>Grafik Pegawai Berdasarkan Agama</b></h3>
                                    <div class="container px-4 mx-auto">
                                        {!! $grafikAgama->container() !!}
                                    </div>
                                    <script src="{{ $grafikAgama->cdn() }}"></script>
                                    {{ $grafikAgama->script() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title"><b>Grafik Pegawai Berdasarkan Jenis Kelamin</b></h3>
                                    <div class="container px-4 mx-auto">
                                        {!! $grafikJenisKelamin->container() !!}
                                    </div>
                                    <script src="{{ $grafikJenisKelamin->cdn() }}"></script>
                                    {{ $grafikJenisKelamin->script() }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title"><b>Jumlah Pegawai Berdasarkan Pangkat</b></h3>
                                    <div class="container px-4 mx-auto">
                                        {!! $grafikPangkat->container() !!}
                                    </div>
                                    <script src="{{ $grafikPangkat->cdn() }}"></script>
                                    {{ $grafikPangkat->script() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- message --}}
            {!! Toastr::message() !!}
        </div>
    </div>
    <!-- /Page Content -->
    </div>
    @section('script')
        <script src="{{ asset('assets/js/dashboard.js') }}"></script>
        <script src="{{ asset('assets/js/slide-card.js') }}"></script>
    @endsection
@endsection