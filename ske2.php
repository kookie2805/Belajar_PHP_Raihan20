<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Harian Andi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-rose-200 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold text-center mb-6 text-black">Jadwal Harian Andi</h1>
        <form method="post" class="space-y-4">
            <div>
                <label for="jam" class="block text-sm font-medium text-gray-700">Masukkan Jam (HH:MM):</label>
                <input type="text" id="jam" name="jam" required
                       class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button type="submit"
                    class="w-full bg-red-400 text-white py-2 px-4 rounded-md hover:bg-rose-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Cek Jadwal
            </button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jam = $_POST['jam'];
            $waktu = explode(":", $jam);
            $jamInt = (int)$waktu[0];
            $menitInt = (int)$waktu[1];

            // Logika jadwal harian Andi
            $aktivitas = "Tidak ada kegiatan yang terjadwal.";

            if ($jamInt >= 15 && $jamInt < 16 && $menitInt >= 30 && $menitInt < 45) {
                $aktivitas = "Andi sedang dalam perjalanan pulang ke rumah.";
            } elseif ($jamInt >= 16 && $jamInt < 16 && $menitInt >= 45 && $menitInt < 30) {
                $aktivitas = "Andi mandi dan bersiap untuk mengaji.";
            } elseif ($jamInt >= 16 && $jamInt < 17 && $menitInt >= 30 && $menitInt < 30) {
                $aktivitas = "Andi mengaji selama 30 menit.";
            } elseif ($jamInt >= 17 && $jamInt < 19 && $menitInt >= 30 && $menitInt < 30) {
                $aktivitas = "Andi mengerjakan tugas sekolah selama 2 jam.";
            } elseif ($jamInt >= 19 && $jamInt < 19 && $menitInt >= 30 && $menitInt < 30) {
                $aktivitas = "Andi menghafalkan dialog untuk festival kesenian budaya.";
            } elseif ($jamInt >= 19 && $jamInt < 20 && $menitInt >= 30 && $menitInt < 30) {
                $aktivitas = "Andi membeli bumbu masakan untuk ibu.";
            } elseif ($jamInt >= 20 && $jamInt < 21 && $menitInt >= 30 && $menitInt < 30) {
                $aktivitas = "Andi makan malam setelah sholat maghrib.";
            } elseif ($jamInt >= 21 && $jamInt < 22 && $menitInt >= 30 && $menitInt < 30) {
                $aktivitas = "Andi chatting dengan Raya mengenai persiapan festival.";
            } elseif ($jamInt >= 22 && $jamInt < 22 && $menitInt >= 30 && $menitInt < 30) {
                $aktivitas = "Andi mengobrol bersama keluarga sebelum tidur.";
            } elseif ($jamInt >= 22 && $jamInt < 4 && $menitInt >= 30 && $menitInt < 30) {
                $aktivitas = "Andi tidur.";
            }

            echo "<div class='mt-6 p-4 bg-gray-100 rounded-md text-gray-700'>";
            echo "<strong>Jam $jam:</strong> $aktivitas";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>