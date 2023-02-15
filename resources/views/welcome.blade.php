<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #2B3467;">
        <div class="container">
          <a class="navbar-brand" href="/">Rent Books</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Kategori
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Fiksi</a></li>
                      <li><a class="dropdown-item" href="#">Romance</a></li>
                      <li><a class="dropdown-item" href="#">Horror</a></li>
                    </ul>
                  </li>
              <li class="nav-item">
                <a class="nav-link active" href="/login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="content" style="margin-top: px">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" >
              <div class="carousel-item active">
                <img src="{{asset('assets/img/Features.png')}}" class="d-block w-100" style="max-height: 500px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>NRent Books</h5>
                  <p>Beberapa buku dengan dikson pada tanggal tertentu</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/img/About.png')}}" class="d-block w-100" style="max-height: 500px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Buku Terfavorite</h5>
                  <p>Buku terfavorite dalam beberapa waktu yang lalu</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/img/Home.png')}}" class="d-block w-100" style="max-height: 500px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Buku yang paling banyak dicari</h5>
                  <p>Buku yang paling banyak dicari dalam beberapa waktu yang lalu</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
      <div class="container my-5">
        <div class="row">
            <div class="col-lg-4">
                <h3>Rent Book</h3>
                <a type="button" href="/register" class="btn btn-outline-primary">Ayo Daftar Sekarang</a>
            </div>
            <div class="col-lg-8">
                <p>Manfaat membaca buku dapat melatih otak untuk dapat berfikir lebih kritis maupun menganalisis adanya masalah yang tersaji dalam apa yang kita baca. Kita seperti mendapatkan akses atau jalan untuk dapat masuk ke dalam alur cerita dan membantu dalam penyelesaian cerita tersebut.</p>
            </div>
        </div>
      </div>
{{-- card buku --}}
<div class="container">
    <div class="row text-center">
        <h2>Buku Terpopuler</h2>
    </div>
    <div class="row my-5 text-center">
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="https://cdn.gramedia.com/uploads/items/9786020332956_Bumi-New-Cover.jpg" class="card-img-top" style="max-height: 400px" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Bumi</h5>
                  <p class="card-text">Petualangan 3 remaja yang berusia 15 tahun bernama Raib, Ali dan Seli. Namun mereka bukanlah remaja biasa, melainkan remaja yang memiliki kekuatan khusus.</p>
                  <a href="#" class="btn btn-primary w-100">Lihat Lebih Banyak</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="https://s3-ap-southeast-1.amazonaws.com/ebook-previews/38033/133088/1.jpg" class="card-img-top" style="max-height: 400px" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Bintang</h5>
                  <p class="card-text">Petualangan ketiga remaja SMA bisa dikatakan persahabatan ketiga anak yang memiliki rasa ingin tahu sangat tinggi dan banyak, mereka bertiga adalah Raib, Seli, dan Ali.</p>
                  <a href="#" class="btn btn-primary w-100">Lihat Lebih Banyak</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="width: 18rem;">
                <img src="https://cdn.gramedia.com/uploads/items/9786020332949_Bulan-New-Cover.jpg" class="card-img-top" style="max-height: 400px" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Bulan</h5>
                  <p class="card-text">Menceritakan petualangan dari tiga sekawan, dikisahkan Ali, Seli, dan Raib yang dibawa oleh Miss Selena dan Av untuk melakukan diplomasi di Klan Matahari.</p>
                  <a href="#" class="btn btn-primary w-100">Lihat Lebih Banyak</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- contact --}}
<div class="container my-5">
    <div class="row text-center">
        <h2>Contact Admin</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="name" placeholder="Name">
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Message</label>
                  <textarea class="form-control" id="message" placeholder="Message"></textarea>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2 w-50" type="button">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- footer --}}
<footer class="text-white text-center text-lg-start"style="background-color: #2B3467;">
    <div class="text-center p-3">
      Create By :
      <a class="text-white" style="text-decoration: none" href="https://getbootstrap.com/docs/5.3/components/buttons/">Nadalia Putri</a>
    </div>
</footer>
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>