<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   
    <div class = "container">
        <div class="row bg-primary-subtle">
            <div class="col-6 p-5">
                <h1>Selamat Datang di Toko Buku Online</h1>
                <p>Kami menyediakan berbagai jenis buku dari berbagai penerbit termuka.</p>
                <button class="btn btn-warning">Lihat Produk</button>
            </div>
            <div class="col-6 p-5">
                <h1>Temukan Buku Favorit</h1>
                <form action="">
                    <div class="mb-3">
                        <input type="text" name="judul" id="judul" class="from-control" placeholder="Judul Buku"> 
                    </div>
                    <div class="mb-3">
                        <select name="kategori" id="kategori" class="form-control">
                            <option value="">-- Pilih Kategori --</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pengarang" id="pengarang" placholder="Pengarang" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h2 class="mb-3">Buku Best Seller</h2>
                <div class="row d-flex flex-wrap justify-content-center">
                    <div class="col-4 mb-4 d-flex justify-content-center">
                        <div class="card" style="width: 15rem;">
                            <img src="<?= base_url() ?>/images/1-15.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Bumi Manusia</h5>
                                        <p class="card-text">Rp 78.000</p>
                                        <a href="#" class="btn btn-primary">Add to chart</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-4 mb-4 d-flex justify-content-center">
                        <div class="card" style="width: 15rem;">
                            <img src="<?= base_url() ?>/images/images.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Divine Rivals</h5>
                                        <p class="card-text">Rp 100.000</p>
                                        <a href="#" class="btn btn-primary">Add to chart</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 15rem;">
                            <img src="<?= base_url() ?>/images/03.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kamu Tidak Istimewa</h5>
                                        <p class="card-text">Rp 178.000</p>
                                        <a href="#" class="btn btn-primary">Add to chart</a>
                                </div>
                        </div>
                    </div>
                    <div class="col-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 15rem;">
                            <img src="<?= base_url() ?>/images/04.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Sebuah Seni Untuk Bersikap Bodo Amat</h5>
                                        <p class="card-text">Rp 88.000</p>
                                        <a href="#" class="btn btn-primary">Add to chart</a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="p-5 bg-danger-subtle mt-5 text-center">
        &copy; 2024. Kelas A Pemrograman Web 2. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>