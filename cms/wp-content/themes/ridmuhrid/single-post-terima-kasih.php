<?php
session_start();

// Waktu sesi (1 menit = 60 detik)
$session_lifetime = 60;

// Cek apakah sesi sudah dibuat
if (isset($_SESSION['access_granted']) && $_SESSION['access_granted'] === true) {
    // Cek apakah sesi sudah kedaluwarsa
    if (isset($_SESSION['session_start_time'])) {
        if (time() - $_SESSION['session_start_time'] > $session_lifetime) {
            session_unset(); // Hapus semua variabel sesi
            session_destroy(); // Hancurkan sesi
            header("Location: https://muhrid.com/terima-kasih/"); // Redirect ke halaman PIN lagi
            exit();
        }
    } else {
        $_SESSION['session_start_time'] = time(); // Set waktu mulai sesi
    }
} else {
    // Jika PIN belum dimasukkan atau salah, tampilkan form PIN
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pin = $_POST['pin'];
        if ($pin == "699999") {
            $_SESSION['access_granted'] = true;
            $_SESSION['session_start_time'] = time(); // Simpan waktu sesi dimulai
            header("Location: https://muhrid.com/terima-kasih/");
            exit();
        } else {
            $error = "PIN salah!";
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Masukkan PIN</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: #f4f4f4;
                font-family: Arial, sans-serif;
            }
            .container {
                background: white;
                padding: 20px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                text-align: center;
            }
            input {
                padding: 10px;
                margin: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
            button {
                padding: 10px 15px;
                background: #3498db;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            .error {
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Masukkan PIN</h2>
            <form method="post">
                <input type="password" name="pin" placeholder="Masukkan PIN" required>
                <button type="submit">Submit</button>
            </form>
            <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        </div>
    </body>
    </html>

    <?php
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih - Kau Sempurna</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Love+Ya+Like+A+Sister&family=Loved+by+the+King&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #ff9a9e, #fad0c4);
            color: white;
            font-family: "Loved by the King", cursive, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 1.5em;
            text-align: center;
            padding: 50px;
            user-select: none; /* Mencegah pemilihan teks */
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }
        .content {
            background: rgba(255, 255, 255, 0.2);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
            max-width: 600px;
        }
        h1 {
            margin-bottom: 20px;
        }
        .quote {
            font-style: italic;
            margin-top: 20px;
        }
        #antiScreenshot {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0);
            z-index: 9999;
            pointer-events: none;
        }
    </style>

    <script>
        // Mencegah Screenshot dengan Print Screen
        document.addEventListener("keydown", function(event) {
            if (event.key === "PrintScreen") {
                event.preventDefault();
                alert("Screenshot tidak diperbolehkan!");
            }
            if (event.ctrlKey && event.shiftKey && event.key === "S") {
                event.preventDefault();
                alert("Screenshot tidak diperbolehkan!");
            }
        });

        // Mencegah Klik Kanan
        document.addEventListener("contextmenu", function(event) {
            event.preventDefault();
            alert("Klik kanan dinonaktifkan!");
        });

        // Mencegah Developer Tools (F12)
        document.addEventListener("keydown", function(event) {
            if (event.key === "F12" || (event.ctrlKey && event.shiftKey && event.key === "I")) {
                event.preventDefault();
                alert("Developer tools dinonaktifkan!");
            }
        });

        // Memainkan musik otomatis setelah halaman terbuka
        window.onload = function() {
            let audio = document.getElementById("backgroundMusic");
            audio.volume = 0.5; // Atur volume
            audio.play().catch(error => {
                console.log("Autoplay dicegah, pengguna harus menekan tombol play.");
            });
        };
    </script>
</head>
<body>
    <div id="antiScreenshot"></div>

    <audio id="backgroundMusic" loop>
        <source src="https://rsgm.muhrid.com/asmef/music.mp3" type="audio/mpeg">
        Browser Anda tidak mendukung pemutar audio.
    </audio>

    <div class="content">
        <h1>Terima Kasih</h1>
        <p>
            Aku tidak pernah menyangka semua ini. Namamu sudah lama akrab di telingaku, 
            tapi tak sekalipun terpikir bahwa kita akan benar-benar bisa sedekat ini. 
            Lalu waktu mempertemukan kita dalam sebuah urusan, dan sejak saat itu, aku sadar—aku beruntung bisa mengenalmu.
        </p>
        <p>
            Ada begitu banyak hal yang ingin aku sampaikan, tapi kata-kata selalu terasa kurang. 
            Mungkin aku terlalu takut untuk mengungkapkan semuanya, atau mungkin memang ada perasaan yang lebih baik disimpan dalam diam.
        </p>
        <p><b>Tak perlu ku paksakan juga karena aku tahu kesukaanmu bukanlah membaca.</b></p>
        <p>
            Namun satu hal yang pasti, aku menghargai setiap momen yang ada.
        </p>
        <p>
            Terima kasih sudah mengenalkan physical attack yang ternyata aku suka—siapa sangka hal sekecil itu bisa berarti banyak? 
            Mungkin aku tidak bisa menjelaskan semuanya, tapi aku senang bisa merasakan semua ini.
        </p>
        <p class="quote">
            "Kau dan aku sempurna, semoga ada cara tuk terus bersama. Selalu ku tunggu, tak mau berlalu, kau dan aku ..."
        </p>
        <p><b>Atau mungkin lebih tepatnya, kau sempurna.</b></p>
    </div>
</body>
</html>
