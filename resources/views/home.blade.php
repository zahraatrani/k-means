@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><strong>{{ __('ANUGRAH GROUP') }}</strong></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <ul class="list-unstyled timeline">
                        <li>
                            <div class="block">
                                <div class="tags">
                                    <a href="" class="tag">
                                        <span></span>
                                    </a>
                                </div>
                                <div class="block_content">
                                    <h2 class="title">
                                        <a>ANUGRAH GROUP Berawal Dari Perusahaan Spunbond Jaya Yang Didirikan Sejak Tahun 2000, Dengan Berkonsentrasi Dibidang Kebutuhan Semua Spunbond Dari Tas, Sepatu, Springbed. Seiring Dengan Perkembangan Waktu, Kemudian Perusahaan Kami Berekspansi Dibidang Food Packaging Yang Sangat Lengkap Memenuhi Kebutuhan Pasar Seperti Perhotelan, Restoran, Kafe.</a>
                                    </h2>
                                    <div class="byline">
                                        <span></span> <a></a>
                                    </div>
                                    <p class="excerpt"></a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <div class="tags">
                                    <a href="" class="tag">
                                        <span></span>
                                    </a>
                                </div>
                                <div class="block_content">
                                    <h2 class="title">
                                        <a>Anugrah Group Bergerak Di Bidang Food Packaging Untuk Memberi Anda Solusi Pengemasan Mulai Dari Makanan, Minuman Serta Alat Makan Dan Perlengkapannya. Kami Melakukan Kerja Sama Dengan Customer Untuk Menyuplai Kemasan Yang Hemat Biaya Namun Menarik Dan Fungsional.</a>
                                    </h2>
                                    <div class="byline">
                                        <span></span> <a></a>
                                    </div>
                                    <p class="excerpt"></a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection