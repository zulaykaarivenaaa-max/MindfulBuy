<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>MindfulBuy - Pembanding Harga & Belanja Bijak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <style>
        /* RESET & GENERAL STYLES */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #fcfdfc;
            color: #333;
        }

        /* NAVBAR STYLING */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 5%;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: 700;
            color: #2d4036;
        }

        .navbar .logo span {
            color: #4A6B5D;
        }

        .navbar ul {
            display: flex;
            list-style: none;
            align-items: center;
            gap: 25px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: #555;
            font-weight: 500;
            font-size: 15px;
            transition: color 0.3s;
        }

        .navbar ul li a:hover {
            color: #4A6B5D;
        }

        /* HERO SECTION STYLING */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 60px 5%;
            background: linear-gradient(135deg, #f4f7f5 0%, #e8efe9 100%);
            gap: 40px;
        }

        .hero-content {
            flex: 1;
            max-width: 600px;
        }

        .hero-content h1 {
            font-size: 36px;
            color: #2d4036;
            margin-bottom: 15px;
            line-height: 1.3;
        }

        .hero-content p {
            font-size: 16px;
            color: #555;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        /* STYLING KALKULATOR BEBAS IMPULSIF */
        .mindful-calculator {
            background: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
            max-width: 480px;
            border: 1px solid #e0e8e4;
        }

        .mindful-calculator h4 {
            color: #2d4036;
            margin-bottom: 12px;
            font-size: 15px;
        }

        .calc-box {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }

        .calc-box input {
            flex: 1;
            padding: 10px 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 13px;
            outline: none;
        }

        .calc-box button {
            background-color: #4A6B5D;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 13px;
        }

        .calc-box button:hover {
            background-color: #385247;
        }

        #calcResult {
            font-size: 13px;
            color: #4A6B5D;
            font-weight: 600;
            background: #f4f7f5;
            padding: 10px;
            border-radius: 6px;
            display: none;
        }

        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .hero-image img {
            width: 100%;
            max-width: 480px;
            height: 320px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-title h2 {
            font-size: 28px;
            color: #2d4036;
            margin-bottom: 8px;
        }

        .section-title p {
            color: #666;
            font-size: 15px;
        }

        footer {
            text-align: center;
            padding: 25px;
            background-color: #2d4036;
            color: #d1e0d7;
            font-size: 14px;
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }
            .calc-box {
                flex-direction: column;
            }
            .navbar ul {
                gap: 12px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="logo">Mindful<span>Buy</span></div>

        <ul>
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#fitur">Fitur</a></li>
            <li><a href="#produk">Katalog & Perbandingan</a></li>
            <li><a href="#edukasi">Edukasi</a></li>
            <li><a href="#testimoni">Testimoni</a></li>
        </ul>
    </nav>

    <!-- HERO SECTION DENGAN KALKULATOR RASIONALITAS -->
    <section class="hero" id="beranda">
        <div class="hero-content">
            <h1>Bandingkan Harga Asli, Bebas dari Promo Palsu</h1>
            <p>
                MindfulBuy membantu kamu membandingkan harga riil di berbagai platform e-commerce secara rasional sebelum mengambil keputusan membeli.
            </p>

            <!-- FITUR BARU: KALKULATOR RASIONALITAS BELANJA -->
            <div class="mindful-calculator">
                <h4>💡 Cek Kelayakan Belanja (Rasio Harga vs Waktu Kerja)</h4>
                <div class="calc-box">
                    <input type="text" id="itemName" placeholder="Nama Barang (misal: Shoes)">
                    <input type="number" id="itemPrice" placeholder="Harga (Rp)">
                    <button onclick="hitungRasio()">Hitung</button>
                </div>
                <div id="calcResult"></div>
            </div>
        </div>

        <div class="hero-image">
            <img src="assets/images/hero-banner.jpg" alt="Mindful Shopping Illustration">
        </div>
    </section>

    <!-- FITUR UTAMA -->
    <section class="destinasi" id="fitur" style="padding: 50px 20px;">
        <div class="section-title">
            <h2>Fitur Pembanding Bijak</h2>
            <p>Transparansi harga tanpa gangguan trik psikologis promo</p>
        </div>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; max-width: 1100px; margin: 0 auto;">
            
            <div style="flex: 1; min-width: 250px; background: #ffffff; border-radius: 12px; padding: 20px; text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.08);">
                <div style="background: #f4f7f5; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
                    <img src="assets/images/icons/cooling-off.svg" alt="Cooling Off" style="width: 50px; height: 50px; display: block; margin: 0 auto;">
                </div>
                <h3 style="margin-bottom: 8px; color: #333;">Cooling-off Period</h3>
                <p style="font-size: 14px; color: #666;">Jeda waktu refleksif sebelum memutuskan untuk berpindah ke link toko penjual.</p>
            </div>

            <div style="flex: 1; min-width: 250px; background: #ffffff; border-radius: 12px; padding: 20px; text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.08);">
                <div style="background: #f4f7f5; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
                    <img src="assets/images/icons/budget.svg" alt="Budget Control" style="width: 50px; height: 50px; display: block; margin: 0 auto;">
                </div>
                <h3 style="margin-bottom: 8px; color: #333;">Perbandingan Lintas Toko</h3>
                <p style="font-size: 14px; color: #666;">Melihat langsung harga pasaran asli tanpa biaya tersembunyi atau ongkir manipulatif.</p>
            </div>

            <div style="flex: 1; min-width: 250px; background: #ffffff; border-radius: 12px; padding: 20px; text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.08);">
                <div style="background: #f4f7f5; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
                    <img src="assets/images/icons/mindfull.svg" alt="Mindful Filter" style="width: 50px; height: 50px; display: block; margin: 0 auto;">
                </div>
                <h3 style="margin-bottom: 8px; color: #333;">Filter Nilai Guna</h3>
                <p style="font-size: 14px; color: #666;">Analisis rasional antara frekuensi pemakaian dengan estimasi harga barang.</p>
            </div>

        </div>
    </section>

    <!-- KATALOG & PERBANDINGAN HARGA -->
    <section class="paket" id="produk" style="padding: 50px 20px; max-width: 1100px; margin: 0 auto;">
        <div class="section-title">
            <h2>Katalog & Perbandingan Harga</h2>
            <p>Pilih barang dan bandingkan estimasi harga terbaik hari ini</p>
        </div>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 25px;">
            
            <!-- PRODUK 1 -->
            <div class="paket-card" style="flex: 1; min-width: 280px; max-width: 340px; background: #ffffff; border-radius: 12px; padding: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <span style="background: #e8f5e9; color: #2e7d32; font-size: 12px; font-weight: bold; padding: 4px 10px; border-radius: 20px; display: inline-block; margin-bottom: 10px;">Harga Rata-Rata Terbaik</span>
                    <img src="assets/images/products/journal.jpg" alt="Mindful Journal" style="width: 100% !important; height: 180px !important; object-fit: cover !important; border-radius: 8px !important; margin-bottom: 12px !important; display: block;">
                    <h3 style="font-size: 18px; margin: 5px 0;">Mindful Journal</h3>
                    <p style="color: #4A6B5D; font-weight: bold; font-size: 16px; margin-bottom: 10px;">Rp 85.000 <span style="font-size:12px; color:#888; font-weight:normal;">(Kisaran: Rp 80k - 95k)</span></p>
                    
                    <div style="background:#f9fbf9; padding: 10px; border-radius: 6px; font-size: 12px; margin-bottom: 15px;">
                        <b>Perbandingan Marketplace:</b>
                        <ul style="padding-left: 15px; margin-top: 5px; color: #555;">
                            <li>Toko A: Rp 85.000 (Free Ongkir)</li>
                            <li>Toko B: Rp 89.000</li>
                            <li>Toko C: Rp 95.000</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <button onclick="alert('Membuka perbandingan detail untuk Mindful Journal')" style="width: 100%; background: #4A6B5D; color: white; border: none; padding: 10px; border-radius: 6px; cursor: pointer; font-weight: bold;">Cek Detail Perbandingan</button>
                </div>
            </div>

            <!-- PRODUK 2 (DIBUAT JADI 'TUMBLER') -->
            <div class="paket-card" style="flex: 1; min-width: 280px; max-width: 340px; background: #ffffff; border-radius: 12px; padding: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <span style="background: #e8f5e9; color: #2e7d32; font-size: 12px; font-weight: bold; padding: 4px 10px; border-radius: 20px; display: inline-block; margin-bottom: 10px;">Harga Stabil</span>
                    <img src="assets/images/products/tumbler.jpg" alt="Tumbler" style="width: 100% !important; height: 180px !important; object-fit: cover !important; border-radius: 8px !important; margin-bottom: 12px !important; display: block;">
                    <h3 style="font-size: 18px; margin: 5px 0;">Tumbler</h3>
                    <p style="color: #4A6B5D; font-weight: bold; font-size: 16px; margin-bottom: 10px;">Rp 120.000 <span style="font-size:12px; color:#888; font-weight:normal;">(Kisaran: Rp 115k - 135k)</span></p>
                    
                    <div style="background:#f9fbf9; padding: 10px; border-radius: 6px; font-size: 12px; margin-bottom: 15px;">
                        <b>Perbandingan Marketplace:</b>
                        <ul style="padding-left: 15px; margin-top: 5px; color: #555;">
                            <li>Toko A: Rp 120.000 (Termurah)</li>
                            <li>Toko B: Rp 128.000</li>
                            <li>Toko C: Rp 135.000</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <button onclick="alert('Membuka perbandingan detail untuk Tumbler')" style="width: 100%; background: #4A6B5D; color: white; border: none; padding: 10px; border-radius: 6px; cursor: pointer; font-weight: bold;">Cek Detail Perbandingan</button>
                </div>
            </div>

            <!-- PRODUK 3 -->
            <div class="paket-card" style="flex: 1; min-width: 280px; max-width: 340px; background: #ffffff; border-radius: 12px; padding: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <span style="background: #fff3e0; color: #e65100; font-size: 12px; font-weight: bold; padding: 4px 10px; border-radius: 20px; display: inline-block; margin-bottom: 10px;">Variasi Harga Tinggi</span>
                    <img src="assets/images/products/totebag.jpg" alt="Canvas Tote Bag" style="width: 100% !important; height: 180px !important; object-fit: cover !important; border-radius: 8px !important; margin-bottom: 12px !important; display: block;">
                    <h3 style="font-size: 18px; margin: 5px 0;">Canvas Tote Bag</h3>
                    <p style="color: #4A6B5D; font-weight: bold; font-size: 16px; margin-bottom: 10px;">Rp 65.000 <span style="font-size:12px; color:#888; font-weight:normal;">(Kisaran: Rp 50k - 85k)</span></p>
                    
                    <div style="background:#f9fbf9; padding: 10px; border-radius: 6px; font-size: 12px; margin-bottom: 15px;">
                        <b>Perbandingan Marketplace:</b>
                        <ul style="padding-left: 15px; margin-top: 5px; color: #555;">
                            <li>Toko A: Rp 65.000</li>
                            <li>Toko B: Rp 50.000 (Bahan Tipis)</li>
                            <li>Toko C: Rp 85.000 (Premium)</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <button onclick="alert('Membuka perbandingan detail untuk Canvas Tote Bag')" style="width: 100%; background: #4A6B5D; color: white; border: none; padding: 10px; border-radius: 6px; cursor: pointer; font-weight: bold;">Cek Detail Perbandingan</button>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION EDUKASI -->
    <section class="edukasi" id="edukasi" style="padding: 50px 20px; background: #f9fbf9;">
        <div class="section-title">
            <h2>Edukasi Mindful Shopping</h2>
            <p>Tips & Trik Mengatasi Manipulasi Psikologis Promo Marketplace</p>
        </div>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 25px; max-width: 1100px; margin: 0 auto;">
            <div style="flex: 1; min-width: 280px; max-width: 340px; background: white; border-radius: 12px; padding: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.06); border-top: 4px solid #4A6B5D;">
                <span style="font-size: 12px; color: #4A6B5D; font-weight: bold;">LITERASI KEUANGAN</span>
                <h3 style="font-size: 18px; margin: 10px 0; color: #222;">Aturan 24 Jam Sebelum Checkout</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Gunakan aturan jeda 24 jam untuk meredakan dorongan impulsif saat melihat diskon kilat.</p>
            </div>

            <div style="flex: 1; min-width: 280px; max-width: 340px; background: white; border-radius: 12px; padding: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.06); border-top: 4px solid #4A6B5D;">
                <span style="font-size: 12px; color: #4A6B5D; font-weight: bold;">KONTROL DIRI</span>
                <h3 style="font-size: 18px; margin: 10px 0; color: #222;">Membedakan Need vs Want</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Tanyakan 3 hal ini sebelum beli: Apakah kebutuhan pokok? Berapa kali akan digunakan? Apakah ada anggaran yang tersisa?</p>
            </div>

            <div style="flex: 1; min-width: 280px; max-width: 340px; background: white; border-radius: 12px; padding: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.06); border-top: 4px solid #4A6B5D;">
                <span style="font-size: 12px; color: #4A6B5D; font-weight: bold;">BEBAS MANIPULASI</span>
                <h3 style="font-size: 18px; margin: 10px 0; color: #222;">Bahaya Trik Flash Sale</h3>
                <p style="font-size: 14px; color: #666; line-height: 1.6;">Fitur timer dan 'stok terbatas' dirancang untuk memicu rasa panik (FOMO). Tetap tenang dan cek perbandingan harganya di sini.</p>
            </div>
        </div>
    </section>

    <!-- TESTIMONI PENGGUNA -->
    <section class="testimoni" id="testimoni" style="padding: 50px 20px;">
        <div class="section-title">
            <h2>Kata Mereka Tentang MindfulBuy</h2>
            <p>Pengalaman pengguna yang terbantu membuat keputusan belanja rasional</p>
        </div>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; max-width: 1000px; margin: 0 auto;">
            <div style="flex: 1; min-width: 280px; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.06);">
                <p style="font-style: italic; color: #555; font-size: 14px;">"Sangat terbantu buat cek harga pasaran asli. Jadi nggak gampang tertipu diskon coret palsu!"</p>
                <h4 style="margin-top: 15px; color: #4A6B5D;">Budi, Mahasiswa</h4>
            </div>

            <div style="flex: 1; min-width: 280px; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.06);">
                <p style="font-style: italic; color: #555; font-size: 14px;">"Fitur perbandingan harganya cepat dan informatif. Bikin belanja bulanan jadi jauh lebih hemat."</p>
                <h4 style="margin-top: 15px; color: #4A6B5D;">Siti, First Jobber</h4>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2026 MindfulBuy - Platform Pembanding Harga & Belanja Bijak. All Rights Reserved.</p>
    </footer>

    <!-- SCRIPT KALKULATOR RASIONALITAS -->
    <script>
        function hitungRasio() {
            let name = document.getElementById('itemName').value;
            let price = parseFloat(document.getElementById('itemPrice').value);
            let resultDiv = document.getElementById('calcResult');

            if (!name || isNaN(price) || price <= 0) {
                alert('Silakan masukkan nama barang dan harga yang valid!');
                return;
            }

            let jamKerja = (price / 25000).toFixed(1);

            resultDiv.style.display = "block";
            resultDiv.innerHTML = `📊 Membeli <b>${name}</b> seharga <b>Rp ${price.toLocaleString('id-ID')}</b> setara dengan <b>${jamKerja} Jam Kerja kerasmu</b>. Apakah bernilai sebanding? 🤔`;
        }
    </script>

</body>

</html>