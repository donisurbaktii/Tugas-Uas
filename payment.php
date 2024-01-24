<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="payment.css">
    <script>
        function updateBiaya() {
            var mobil = document.getElementById("mobil").value;
            var biayaElement = document.getElementById("biaya");
            var biaya = 0;

            switch (mobil) {
                case "Avanza":
                    biaya = 350000;
                    break;
                case "Xenia":
                    biaya = 300000;
                    break;
                case "Rush":
                    biaya = 450000;
                    break;
                // tambahkan case untuk mobil lain jika diperlukan
            }

            biayaElement.innerHTML = "Biaya: Rp " + biaya;
            document.getElementById("biaya_input").value = biaya;
        }
    </script>
</head>

<body>
    <!-- tag form -->
    <form action="Save.php" method="POST">

        <section id="biaya">
            <h2>Harga</h2>
            <ul>
                <li>Avanza - Rp 350.000</li>
                <li>Xenia - Rp 300.000</li>
                <li>Rush - Rp 450.000</li>
            </ul>
        </section>

        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
        </div>

        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div>
            <label for="no_hp">Phone Number:</label>
            <input type="tel" id="no_hp" name="no_hp" required>
        </div>

        <div>
            <label for="bank">Select Your BANK:</label>
            <select id="bank" name="bank" required>
                <option value="BRI">BRI</option>
                <option value="BCA">BCA</option>
                <option value="MANDIRI">MANDIRI</option>
            </select>
        </div>

        <div>
            <label for="mobil">Select Your Mobil:</label>
            <select id="mobil" name="mobil" onchange="updateBiaya()" required>
                <option value="Avanza">Avanza</option>
                <option value="Xenia">Xenia</option>
                <option value="Rush">Rush</option>
            </select>
        </div>

        <div>
            <label for="jmlh_hari">Jumlah Hari:</label>
            <input type="number" id="jmlh_hari" name="jmlh_hari" min="1" max="10" required>
        </div>


        <button type="submit" class="btn">Order now</button>
    </form>

</body>

</html>
