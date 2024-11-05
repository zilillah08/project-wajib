<html>
<head>
    <title>Payment Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #a0bcd9;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar a {
            display: block;
            color: #000;
            text-decoration: none;
            padding: 10px 0;
            margin: 10px 0;
            font-size: 18px;
        }
        .sidebar a:hover {
            background-color: #d0e1f9;
            border-radius: 5px;
        }
        .sidebar .active {
            background-color: #d0e1f9;
            border-radius: 5px;
        }
        .content {
            flex: 1;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group .apply-btn {
            width: auto;
            padding: 10px 20px;
            margin-left: 10px;
            background-color: #d0e1f9;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group .apply-btn:hover {
            background-color: #a0bcd9;
        }
        .pay-btn {
            width: 100%;
            padding: 15px;
            background-color: #4a90e2;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }
        .pay-btn:hover {
            background-color: #357ab8;
        }
        .summary {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
        }
        .summary h2 {
            margin: 0 0 20px 0;
            font-size: 24px;
        }
        .summary p {
            margin: 10px 0;
            font-size: 18px;
        }
        .summary .total {
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <a href="#" class="active"><i class="fas fa-home"></i> Beranda</a>
            <a href="#"><i class="fas fa-credit-card"></i> Pembayaran</a>
            <a href="#"><i class="fas fa-chart-line"></i> Aktivitas</a>
            <a href="#"><i class="fas fa-star"></i> Rating/Ulasan</a>
            <a href="#" style="margin-top: auto;"><i class="fas fa-phone"></i> Hubungi Kami</a>
        </div>
        <div class="content">
            <div class="form-group">
                <input type="text" placeholder="Augustine Campbell">
            </div>
            <div class="form-group">
                <input type="text" placeholder="5764 9986 6789 0234">
            </div>
            <div class="form-group">
                <input type="text" placeholder="04 / 26" style="width: 48%;">
                <input type="text" placeholder="654" style="width: 48%;">
            </div>
            <div class="form-group">
                <input type="text" placeholder="GODFREY 20-OFF" style="width: 70%;">
                <button class="apply-btn">Apply</button>
            </div>
            <button class="pay-btn">Pay</button>
            <div class="summary">
                <h2>You're paying,</h2>
                <p class="total">Rp 1.500.000</p>
                <p>Membuat Vidsat Menggunakan Canva</p>
                <p>12 October 24</p>
                <p>Rp 1.500.000</p>
                <p>Discounts & Offers: Rp 0.00</p>
                <p>Tax: Rp 10.000</p>
                <p class="total">Total: Rp 1.510.000</p>
            </div>
        </div>
    </div>
    <script>
        document.querySelector(".pay-btn").addEventListener("click", function() {
            const summaryDiv = document.querySelector(".summary");
            summaryDiv.style.display = summaryDiv.style.display === "none" ? "block" : "none";
        });
    </script>
</body>
</html>