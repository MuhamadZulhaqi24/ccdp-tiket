<!DOCTYPE html>
<html>
<head>
    <title>Hubungi Kami</title>
    <link rel="stylesheet" href="styles.css"> <!-- Menghubungkan ke file style eksternal -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('concert.jpg'); /* Menggunakan gambar latar belakang dari direktori 'images' */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Pemesanan Tiket Konser</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda</a> <!-- Mengarahkan kembali ke halaman beranda -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tickets.php">Tiket</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Hubungi Kami <span class="sr-only">(saat ini)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <h1 class="text-center">Hubungi Kami</h1>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kontak Kami</h5>
                        <p class="card-text">Jika Anda memiliki pertanyaan atau komentar, jangan ragu untuk menghubungi kami.</p>
                        <ul class="list-group">
                            <li class="list-group-item">Email: info@tiketkonser.com</li>
                            <li class="list-group-item">Telepon: +123 4567 890</li>
                            <li class="list-group-item">Alamat: Jl. Konser No. 123, Kota Musik</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sertakan Bootstrap JS dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>