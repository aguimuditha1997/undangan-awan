    @extends('undangans.layout')
    
    @section('content')

    <div class="cover">
        <div class="container">
        <img src="{{ asset('../images/ornamen1.png') }}" class="img-fluid" alt="Responsive image">
            <h2  data-aos="fade-down-left">Undangan Pernikahan</h2>
            <h1  data-aos="fade-up-right">Dee Awan & Seny</h1>
            <div class="row media justify-content-center ">
                <div data-aos="fade-up" class="col-4">
                  <h3 class="kiri">Jumat</h3>
                </div>
                <div data-aos="fade-up" class="col-3">
                  <h3 class="tengah">02</h3>
                </div>
                <div data-aos="fade-up" class="col-4">
                  <h3 class="kanan">April</h3>
                </div>
                <div data-aos="fade-up" class="col-12">
                  <h3 class="bawah">2020</h3>
                </div>
            <div>
            <div  data-aos="fade-down-left" class="row justify-content-center">
                  <div class="col-10 info-panel text">
                    <div class="row">
                      <div class="col-lg">
                        <p>Kepada bapak/ibu/Saudara/ i:</p>
                        <h4>{{$blog}}</h4>
                      </div>
                    </div>
                </div>    
            </div>
            <a href="{{ route('undangans.store') }}">
                <button  data-aos="fade-up-right" type="button">Buka Undangan</button>
            </a>
        <div>
        <img src="{{ asset('../images/ornamen1.png') }}" class="img-fluid" alt="Responsive image">
    </div>




    <!-- <p>{{$blog}}</p> -->

    @endsection