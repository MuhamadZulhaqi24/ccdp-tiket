<!DOCTYPE html>
<html>
<head>
    <title>Tiket Konser Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> 
    <style>
        body {
            background-image: url('concert.jpg'); 
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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Beranda <span class="sr-only">(saat ini)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Tickets.php">Tiket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <h1 class="text-center">Selamat Datang di Pemesanan Tiket Konser</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Konser Metallica</h5>
                        <p class="card-text">Bergabunglah dengan kami dalam pengalaman Konser Metallica yang mendebarkan!</p>
                        <a href="#" class="btn btn-primary">Beli Tiket</a>
                        <p class="mt-2 merchandise-option">Tambah Merchandise seharga 500rb</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Konser Bintang Pop</h5>
                        <p class="card-text">Siapkan diri untuk pengalaman Konser Bintang Pop yang menakjubkan dengan artis top!</p>
                        <a href="#" class="btn btn-primary">Beli Tiket</a>
                        <p class="mt-2 merchandise-option">Tambah Merchandise seharga 500rb - 1jt</p>
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
