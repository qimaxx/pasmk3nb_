<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore the World</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>Explore the World with Us</h1>
    <button onclick="openBookingForm()">Pesan Destinasi</button>
</header>

<section>
    <h2>Discover Beautiful Places</h2>
    <div class="card-container">
        @foreach($Liburan as $row)
        <div class="card">
            <img src="storage/{{$row->picture}}" alt="Suluban Beach">
            <div class="card-title">{{$row->title}}</div>
            <div class="card-price">{{$row->price}}</div>
            <button onclick="openBookingForm('Suluban Beach')">Pesan Sekarang</button>
        </div>
        @endforeach
    </div>
</section>

<footer>
    <p>Traveling All Over the World</p>
    <button onclick="alert('More Destinations Coming Soon!')">See More Destinations</button>
</footer>

<!-- Form Pemesanan -->
<div class="booking-form" id="bookingForm">
    <div class="form-content">
        <button class="close-form"***onclick="closeBookingForm()">X</button>
        <h3>Pesan Destinasi</h3>
        <form onsubmit="confirmBooking(event)">
            <label for="destination">Destinasi:</label>
            <input type="text" id="destination" name="destination" readonly>

            <label for="name">Nama Anda:</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

            <label for="date">Tanggal Keberangkatan:</label>
            <input type="date" id="date" name="date" required>

            <label for="people">Jumlah Orang:</label>
            <select id="people" name="people">
                <option value="1">1 Orang</option>
                <option value="2">2 Orang</option>
                <option value="3">3 Orang</option>
                <option value="4">4 Orang</option>
                <option value="5">5 Orang</option>
            </select>

            <label for="payment-method">Metode Pembayaran:</label>
            <select id="payment-method" name="payment-method" required>
                <option value="credit-card">Transfer Bank</option>
                <option value="debit-card">Dana</option>
                <option value="paypal">PayPal</option>
                <option value="bank-transfer">Go Pay</option>
            </select>

            <button type="submit">Konfirmasi Pemesanan</button>
        </form>
    </div>
</div>

<!-- Simbol Pembayaran Sukses -->
<div id="successMessage" class="success-message" style="display: none;">
    <div class="success-icon">✔</div>
    <h3>Pembayaran Sukses!</h3>
</div>

<script>
    function openBookingForm(destination = 'Default Destination') {
        document.getElementById('destination').value = destination;
        document.getElementById('bookingForm').style.display = 'flex';
    }

    function closeBookingForm() {
        document.getElementById('bookingForm').style.display = 'none';
    }

    function confirmBooking(event) {
        event.preventDefault();
        closeBookingForm();
        document.getElementById('successMessage').style.display = 'flex';
        setTimeout(() => {
            document.getElementById('successMessage').style.display = 'none';
        }, 3000);
    }
</script>

</body>
</html>