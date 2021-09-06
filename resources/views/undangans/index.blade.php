@extends('undangans.layout')
  
@section('content')
<!-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('undangans.index') }}"> Back</a>
        </div>
    </div>
</div>
    -->






<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
<section class="jumbotron" data-aos="fade-up">
<div class="container">
  <div class="row media justify-content-center">
    <div class="col-10">
          <h2 data-aos="fade-down">The Wedding Of</h2>
         <h1 data-aos="fade-up">Dee Awan & Seny</h1>
         <!-- <a href="#" class="button">Save The Date</a> -->
    </div>
  </div>
</div>
    </section>
   <!-- akhir jumbotron -->
    <!-- coutdown -->
    <div class="coutdown" data-aos="fade-up">
        <div data-aos="fade-down" class="container">
            <h1>Countdown Wedding</h1>
            <li><span id="days"></span>days</li>
            <li><span id="hours"></span>Hours</li>
            <li><span id="minutes"></span>Minutes</li>
            <li><span id="secounds"></span>Seconds</li>
        </div>  
        
            <!-- <img src="{{ asset('../images/mask.png') }}" class="img-fluid" alt="Responsive image"> -->
    </div>

    <!-- pengantar -->
   

    <!-- akhir pengantar -->

    <!-- pengantin -->
    <section class="pengantin">
      <div class="container">
      <div  class="pengantar">
      <div class="container">
        <img data-aos="fade-down" src="{{ asset('../images/pawiwahan.png') }}" class="img-fluid" alt="Responsive image">
        <h1 data-aos="fade-up">Pawiwahan</h1>
        <h2 data-aos="fade-up">(Pernikahan)</h2>
        <p id="demo"></p>
        <!-- <img src="{{ asset('../images/flower1.png') }}" class="img-fluid" alt="Responsive image"> -->
      </div>
    </div>
        <div class="row justify-content-center">
          <div class="detail-1">
            <!-- <img src="{{asset('../images/1.jpg')}}" class="img-fluid rounded-circle f-pengantin-1"  alt="f-pengantin">  -->
            <img data-aos="fade-right" src="{{asset('../images/frame.png')}}" class="img-fluid rounded f-pengantin-1"  alt="f-pengantin">  
            <h3 data-aos="fade-down" >I Made Sukariawan, S.Pd</h3>
            <h4 data-aos="fade-down">Putra kedua Dari</h4>
            <h5 data-aos="fade-down"> Pasangan I Nyoman Kayun dengan Ni Wayan Cobek</h5>
            <p data-aos="fade-down">Br.Samuan Kangin, Desa carangsari, Kec.Petang, Badung</p>
          </div>
        

            <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"class="detail">
              <h1>&</h1>
            </div>

         <div class="detail-2">
            <img data-aos="fade-down" src="{{asset('../images/frame.png')}}" class="img-fluid rounded f-pengantin-2"  alt="f-pengantin">  
              <h3 data-aos="fade-down">Ni Putu Seni, SE </h3>
              <h4 data-aos="fade-down">Putri pertama Dari</h4>
              <h5 data-aos="fade-down">Pasangan I Wayan Sania Winaya dengan Ni Nyoman Kariani</h5>
              <p data-aos="fade-down">Br.Petang Dalem, Desa Petang, Kec. Petang, Badung</p>
          </div>
        </div>
      </div>       
         <!-- <a href="#" class="button">Save The Date</a> -->
    </section>
    <div class=spacing-emelen>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#000000" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,240C480,224,600,160,720,149.3C840,139,960,181,1080,181.3C1200,181,1320,139,1380,117.3L1440,96L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
    </svg>
    </div>
<!-- akhir pengantin -->
<!-- acara -->
    <div class="acara">
      <div class="container">
        <img data-aos="fade-down" src="{{asset('../images/om-swastyastu.png')}}" class="img-fluid rounded swatyastu"  alt="swatyastu">
          <p data-aos="fade-up">Atas Asung Kertha Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan Yang Maha Esa, Kami bermaksud mengundang Bapak/Ibu/Saudara/i, pada acara Manusa Yadnya Pawiwahan (Pernikahan) putra-putri kami, yang akan diselenggarakan pada :</p>
          <div data-aos="fade-down" class="tanggal">
            <div class="row media justify-content-center ">
              <div class="col-2 kiri">
                <h4>Jumat</h4>
                <h3><span>2</span><br> april <br> 2021</h3>
              </div>
              <div class="col-8 kanan">
                <h3>Pukul : 14.00 Wita- Selesai</h4>
                <h5> <br> Br. Samuan Kangin,  Desa Carangsari, <br> Kec. Petang - Badung <br> <br></h5>
              </div>
            </div>
          </div>
          <div class="row media justify-content-center ">
           <div class="col-8">
           <a href="https://goo.gl/maps/AbCw4zbvVPZ5S8b69">
            <button data-aos="fade-up" class="lokasi" type="button">Lokasi <img src="{{asset('../images/location.png')}}" ></button>
            </a>  
          </div>
          </div>
          <p data-aos="fade-up">Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i, berkenan hadir untuk memberi doa restu kepada putra-putri kami. <br> <br>Atas kehadiran serta doa restunya, kami sekeluarga mengucapkan terima kasih.</p>

          <img data-aos="fade-up" src="{{asset('../images/om-santy.png')}}" class="img-fluid rounded santy"  alt="santy">
          <p data-aos="fade-up">kami yang berbahagia.</p>
          <div class="row media justify-content-center ">
            <div data-aos="fade-up" class="col-5">
              <p><u>I Nyoman Kayun</u> <br> Sekeluarga</p>
            </div>
            <div data-aos="fade-up" class="col-5">
            <p><u>I Wayan Sania Winaya</u> <br> Sekeluarga </p>
            </div>
        </div>
        <img src="{{ asset('../images/ornamen1.png') }}" class="img-fluid" alt="Responsive image">
    </div>
</div>
<div class="spacing-emelen-button">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,192L60,208C120,224,240,256,360,240C480,224,600,160,720,149.3C840,139,960,181,1080,181.3C1200,181,1320,139,1380,117.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
</div>
<!-- akhir acara -->
<audio controls hidden autoplay>
    <source src="{{ asset('../images/music.mp3') }}"  type="audio/mpeg">
</audio>



<!-- gelerry -->
    <div class="box-gallery">
      <div class="container">
          <div class="gallery">
            <div class="col-lg">
                  <h1 data-aos="fade-down">Gallery</h1>
            </div>
          </div>
          <div class="row media justify-content-center ">
            
            <div data-aos="fade-up" class="col-5 gambar ">
              <a href="{{ asset('../images/img-01.JPG') }}" data-lightbox="mygallery">
              <img src="{{ asset('../images/img-01.JPG') }}" alt="gallery" class="center fluid rounded">
              </a>
            </div>
            <div data-aos="fade-down-right" class="col-5 gambar">
              <a href="{{ asset('../images/img-02.JPG') }}" data-lightbox="mygallery">
              <img src="{{ asset('../images/img-02.JPG') }}" alt="gallery" class="center fluid rounded">
              </a>
            </div>
            <div data-aos="fade-down-right" class="col-5 gambar">
              <a href="{{ asset('../images/img-03.JPG') }}" data-lightbox="mygallery">
              <img src="{{ asset('../images/img-03.JPG') }}" alt="gallery" class="center fluid rounded">
              </a>
            </div>
            <div data-aos="fade-down-right" class="col-5 gambar">
              <a href="{{ asset('../images/img-04.JPG') }}" data-lightbox="mygallery">
              <img src="{{ asset('../images/img-04.JPG') }}" alt="gallery" class="center fluid rounded">
              </a>
            </div>
            <div data-aos="fade-down-right"   class="col-5 gambar">
              <a href="{{ asset('../images/img-05.JPG') }}" data-lightbox="mygallery">
              <img src="{{ asset('../images/img-05.JPG') }}" alt="gallery" class="center fluid rounded">
              </a>
            </div>
            <div data-aos="fade-down-right"   class="col-5 gambar">
              <a href="{{ asset('../images/img-06.JPG') }}" data-lightbox="mygallery">
              <img src="{{ asset('../images/img-06.jpg') }}" alt="gallery" class="center fluid rounded">
              </a>
            </div>
            <div data-aos="fade-down-right"   class="col-5 gambar">
              <a href="{{ asset('../images/img-07.jpg') }}" data-lightbox="mygallery">
              <img src="{{ asset('../images/img-07.jpg') }}" alt="gallery" class="center fluid rounded">
              </a>
            </div>
            <div data-aos="fade-down-right"   class="col-5 gambar">
              <a href="{{ asset('../images/img-08.jpg') }}" data-lightbox="mygallery">
              <img src="{{ asset('../images/img-08.jpg') }}" alt="gallery" class="center fluid rounded">
              </a>
            </div>
            <div data-aos="fade-down-right"   class="col-5 gambar">
              <a href="{{ asset('../images/img-09.jpg') }}" data-lightbox="mygallery">
              <img src="{{ asset('../images/img-09.jpg') }}" alt="gallery" class="center fluid rounded">
              </a>
            </div>
            <img data-aos="fade-down"  src="{{ asset('../images/ornamen1.png') }}" class="img-fluid" alt="Responsive image">
          </div>
        </div>
       
      </div>
     

<!-- akhir gelerry -->

<!-- quotes -->
      <div class="quotes">
        <div class="container">
          <h1 data-aos="fade-down" >"</h1>
          <p data-aos="fade-down" >Grbhnāmi te saubhagatvāya hastam,<br>Mayā patyā jaradastir yathāsah,<br>Bhago aryamā savitā puramdhir,<br>Mahyam tvādurgārhapatyāya devāh.<br>(Rgveda : X.85.36)
          <br data-aos="fade-down" ><br> “Dalam sebuah pernikahan kalian disatukan demi sebuah kebahagiaan dengan janji hati untuk saling membahagiakan. Bersamaku engkau akan hidup selamanya karena Tuhan pasti akan memberikan karunia sebagai pelindung dan saksi dalam pernikahan ini. Untuk itulah kalian dipersatukan dalam satu keluarga.”</p>
          <h1 data-aos="fade-down" >"</h1>
        </div>
      </div>

<!-- akhirquotes -->
<!-- himbauan -->
  <div class="himbauan">
    <div class="container">
      <h1 data-aos="fade-down" >Himbauan</h1>
      <p data-aos="fade-down" >Kami menghimbau kepada Bapak/Ibu/Saudara/i yang berkesempatan dan berkenan hadir pada upacara pernikahan Kami, agar senantiasa mengikuti arahan Pemerintah terkait protokol kesehatan di tengah Pandemi Covid-19 ini.</p>
         <div class="row media justify-content-center ">
         <div data-aos="fade-down"  class="col-4">
            <img src="{{ asset('images/masker.png') }}" alt="himbauan" class="center fluid rounded">
            <p>Menggunakan Masker</p>
         </div>
         <div data-aos="fade-down"  class="col-4">
            <img src="{{ asset('images/cuci-tangan.png') }}" alt="himbauan" class="center fluid rounded">
            <p>Mencuci Tangan</p>
         </div>
         <div data-aos="fade-up" class="col-4">
            <img src="{{ asset('images/jaga-jarak.png') }}" alt="himbauan" class="center fluid rounded">
            <p>Jaga Jarak</p>
        </div>
         <div class="row media justify-content-center ">
         <div data-aos="fade-up" class="col-4">
           <img src="{{ asset('images/salaman.png') }}" alt="himbauan" class="center fluid rounded">
           <p>Tidak Berjabat Tangan</p>
          </div>
         <div data-aos="fade-up" class="col-4">
            <img src="{{ asset('images/kerumun.png') }}" alt="himbauan" class="center fluid rounded">
            <p>hindari kerumunan</p>
          </div>
         <div data-aos="fade-up" class="col-4">
            <img src="{{ asset('images/hand-sanitezer.png') }}" alt="himbauan" class="center fluid rounded">
            <p>Gunakan Handsanitezer</p>
          </div>
    </div>
  </div>
<!-- akhir himbauan -->
<!-- Buku Tamu -->
<div class="box-book">
<section>
  <div class="container">
    <h1 data-aos="fade-down"><br>Buku Tamu</h1>
      <div class="book">
         <div class="row">
             <div class="col-12 ">
                 @foreach ($undangans as $undangan) 
                  <div class="comment mt-4 text-justify float-left">     
                    <h4>{{ $undangan->name }}</h4> 
                      <p>{{ $undangan->detail }}</p>
                      <h3>{{$undangan->created_at}}</h3>
                  </div>
                  @endforeach
              </div>
          </div>
      </div>
    </div>
</section>
</div>


<!-- akhir buku tamu -->

    <!-- pesan -->
<div class="pesan">
<form action="{{ route('undangans.store') }}" method="POST" class="decor">
    <!-- @csrf -->
     {{ csrf_field() }}

  
    <div class="container">
    <div class="row">
      <div class=" col-12 pb-4">
      <div class="circle"></div>
      <div class="form-inner">
        <h1 data-aos="fade-down">Tulis disini</h1>
        <p data-aos="fade-down">Terima kasih atas ucapan, nasehat, doa, dan konfirmasi kehadiran yang anda berikan pada kami</p>
        <input type="text" name="name"  placeholder="Nama">
        <select name="opsi">
          <option value="Hadir">Hadir</option>
          <option value="Ragu-Ragu">Ragu-Ragu</option>
          <option value="Tidak">Tidak</option>
        </select>
        <textarea name="detail" placeholder="Pesan..." rows="5"></textarea>
        <button type="submit">Submit</button>
      </div>
      </div>  
      </form>
    </div>
    <div class="copyright">
      <div class="container">
        <p data-aos="zoom-out-down">Created by : Agui Muditha</p>
      </div>
    </div>

</div>
@endsection