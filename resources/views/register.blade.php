<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register</title>
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="assets/css/register.css" />
</head>
<body>


    <!-- Register -->
    <section class="container">
        <header>Bergabung untuk<br> Menjamin Kesehatan <br>Karyawan</header>
        <form action="#" class="form">
            <div class="input-box">
                <label>Nama Perusahaan</label>
                <input type="text" placeholder="Masukan nama perusahaan aktif" required />
            </div>

            <div class="input-box">
                <label>Nama Person In Charge (PIC)</label>
                <input type="text" placeholder="Masukan nama yang bertanggung jawab" required />
            </div>

            <div class="input-box">
                <label>Email PIC</label>
                <input type="text" placeholder="Masukan email yang bertanggung jawab untuk kontak" required />
            </div>

            <div class="input-box">
                <label>Nomor Telepon PIC</label>
                <input type="number" placeholder="(+62)8888 999" required />
            </div>

            <div class="input-box">
                <label>Jumlah Karyawan</label>
                <input type="text" placeholder="Kurang dari 10" required />
            </div>


            <button>Register</button>
        </form>
    </section>
    <!-- End Register -->


</body>
</html>
