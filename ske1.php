<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penentuan Nilai</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96 text-center">
        <h1 class="text-2xl font-bold text-gray-700 mb-4">Penentuan Nilai</h1>
        <form method="post" class="space-y-4">
            <label for="nilai" class="block text-gray-600">Masukkan Nilai:</label>
            <input type="number" id="nilai" name="nilai" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Cek Nilai</button>
        </form>
        <div class="mt-4 text-lg font-semibold text-gray-700">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nilai = $_POST['nilai'];
                
                if ($nilai >= 90 && $nilai <= 100) {
                    echo "<p class='text-green-600'>Nilai $nilai = A</p>";
                } elseif ($nilai >= 80 && $nilai <= 89) {
                    echo "<p class='text-blue-600'>Nilai $nilai = B</p>";
                } elseif ($nilai >= 70 && $nilai <= 79) {
                    echo "<p class='text-yellow-600'>Nilai $nilai = C</p>";
                } elseif ($nilai >= 0 && $nilai <= 69) {
                    echo "<p class='text-red-600'>Nilai $nilai = D</p>";
                } else {
                    echo "<p class='text-gray-600'>Nilai wajib di antara 0 - 100</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
