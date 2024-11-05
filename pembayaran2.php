<html>
  <head>
    <title>Worksmart payment</title>
    
     <a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet" ></a>
    
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
      }
      .container {
        display: flex;
      }
      .sidebar {
        width: 200px;
        background-color: #d1d1e9;
        padding: 20px;
        height: 100vh;
      }
      .sidebar h2 {
        font-size: 18px;
        margin-bottom: 20px;
      }
      .sidebar ul {
        list-style-type: none;
        padding: 0;
      }
      .sidebar ul li {
        margin-bottom: 10px;
      }
      .sidebar ul li a {
        text-decoration: none;
        color: #000;
        font-size: 16px;
      }
      .sidebar ul li a i {
        margin-right: 10px;
      }
      .sidebar .contact {
        margin-top: 50px;
        font-size: 14px;
      }
      .content {
        flex-grow: 1;
        padding: 20px;
        background-color: #fff;
        border-left: 5px solid #0000ff;
      }
      .content h1 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
      }
      .content .form-group {
        margin-bottom: 20px;
      }
      .content .form-group label {
        display: block;
        margin-bottom: 5px;
      }
      .content .form-group select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
      }
      .content .info {
        background-color: #4a6b8a;
        color: #fff;
        padding: 15px;
        margin-bottom: 20px;
        text-align: center;
        font-size: 16px;
      }
      .content .payment-methods {
        text-align: center;
        margin-bottom: 20px;
      }
      .content .payment-methods img {
        margin: 0 10px;
      }
      .content .total-amount {
        text-align: center;
        font-size: 18px;
        margin-bottom: 20px;
      }
      .content .total-amount span {
        font-weight: bold;
      }
      .content .pay-now {
        text-align: center;
      }
      .content .pay-now button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <h2>WORKSMART</h2>
        <ul>
          <li>
            <a href="#">
              <i class="fas fa-home"> </i>
              Beranda
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-credit-card"> </i>
              Pembayaran
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-tasks"> </i>
              Aktivitas
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fas fa-star"> </i>
              Rating/Ulasan
            </a>
          </li>
        </ul>
        <div class="contact">
          <i class="fas fa-quote-left"> </i>
          Hubungi Kami
        </div>
      </div>
      <div class="content">
        <h1>DETAIL PEMBAYARAN</h1>
        <div class="form-group">
          <label for="course"> Materi Visual Data dengan Canva </label>
          <select id="course">
            <option value="1">
              Instruktur : Ponco Prakoso Agung Purwanto, Trainer and
              Presentation Designer
            </option>
            <option value="2">Advanced Data Visualization Techniques</option>
          </select>
        </div>
        <div class="form-group">
          <label for="webinar"> Detail Sesi Kelas Live Webinar </label>
          <select id="webinar">
            <option value="1">Sesi 1: 10:00 - 12:00</option>
            <option value="2">Sesi 2: 14:00 - 16:00</option>
          </select>
        </div>
        <div class="info">
          Setelah melakukan pembelian, kamu bisa mengikuti sesi webinar ini
          sesuai jadwal yang kamu pilih.
        </div>
        <div class="payment-methods">
          <span> PAYMENT METHODS </span>
          <br />
          <img
            alt="MasterCard"
            height="30"
            src="https://storage.googleapis.com/a1aa/image/p7KG5uASc8o6G9ieOi0ee7HUog7HTEoxDj7rHt5YqpmxHmXnA.jpg"
            width="50"
          />
          <img
            alt="PayPal"
            height="30"
            src="https://storage.googleapis.com/a1aa/image/plqfTexdjxsRT0BLJv3qutKVMpz2gTT0f01o4SlGtLmsHmXnA.jpg"
            width="50"
          />
          <img
            alt="VISA"
            height="30"
            src="https://storage.googleapis.com/a1aa/image/70sydpneylyrRKe01szye3LYVrezVTkXaAgHUI4tArBXPMvOB.jpg"
            width="50"
          />
        </div>
        <div class="total-amount">
          Total Amount :
          <span> Rp 1.500.000 </span>
          <br />
          fund will be not refundable.
        </div>
        <div class="pay-now">
          <!-- <a href="finishedpembayaran.html" type="button" class="btn btn-primary">Pay now</a> -->
          <button onclick="document.location='finishedpembayaran.php'">Pay Now</button>
        </div>
      </div>
    </div>
  </body>
</html>
