<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan Diri</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    max-width: 600px;
    width: 100%;
    text-align: center;
}

header {
    margin-bottom: 20px;
}

h1 {
    margin: 0;
}

button {
    background-color: #007BFF;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

footer {
    margin-top: 20px;
}

    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Pengenalan Diri</h1>
        </header>
        <main>
            <section id="intro">
                <h2>Hai, Saya Ridwan wiranata!</h2>
                <p>Selamat datang di halaman pengenalan diri saya. Saya adalah seorang mahasiswa yang berdedikasi dan antusias dalam Progamer.</p>
                <button onclick="showMore()">Tampilkan lebih banyak</button>
            </section>
            <section id="more-info" style="display: none;">
                <h3>Tentang Saya</h3>
                <p>Saya memiliki pengalaman dalam membuat aplikasi rumah sakit dan sangat menikmati ngoding. Dalam waktu luang, saya suka ngoding.</p>
                <button onclick="hideMore()">Sembunyikan</button>
            </section>
        </main>
        <footer>
            <p>Terima kasih telah mengunjungi halaman saya!</p>
        </footer>
    </div>
    <script>
        function showMore() {
            document.getElementById('more-info').style.display = 'block';
        }

function hideMore() {
    document.getElementById('more-info').style.display = 'none';
}

    </script>
</body>
</html>
