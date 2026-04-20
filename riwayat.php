<?php
require_once "koneksi.php";

$sql    = "SELECT * FROM riwayat_fpb ORDER BY waktu_hitung DESC";
$result = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Perhitungan FPB</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f0f0;
      margin: 0;
      padding: 40px 20px;
    }

    .container {
      background: #fff;
      max-width: 700px;
      margin: 0 auto;
      padding: 30px 35px 35px;
      border: 1px solid #ccc;
    }

    h1 {
      font-size: 1.4rem;
      font-weight: bold;
      margin: 0 0 20px;
      color: #000;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 0.88rem;
    }

    th {
      background: #1a73e8;
      color: #fff;
      padding: 8px 10px;
      text-align: left;
    }

    td {
      padding: 7px 10px;
      border-bottom: 1px solid #ddd;
    }

    tr:nth-child(even) td { background: #f5f5f5; }

    .prima       { color: green; font-weight: bold; }
    .tidak-prima { color: red;   font-weight: bold; }

    .back-link {
      display: inline-block;
      margin-top: 20px;
      font-size: 0.85rem;
      color: #1a73e8;
      text-decoration: none;
    }

    .back-link:hover { text-decoration: underline; }

    .kosong {
      color: #888;
      font-style: italic;
      padding: 12px 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Riwayat Perhitungan FPB</h1>

    <?php if (mysqli_num_rows($result) > 0): ?>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nilai A</th>
          <th>Nilai B</th>
          <th>FPB</th>
          <th>Status</th>
          <th>Waktu</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $row['nilai_a'] ?></td>
          <td><?= $row['nilai_b'] ?></td>
          <td><strong><?= $row['hasil_fpb'] ?></strong></td>
          <td class="<?= $row['status'] === 'RELATIF PRIMA' ? 'prima' : 'tidak-prima' ?>">
            <?= $row['status'] ?>
          </td>
          <td><?= date('d/m/Y H:i', strtotime($row['waktu_hitung'])) ?></td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
    <?php else: ?>
      <p class="kosong">Belum ada riwayat perhitungan.</p>
    <?php endif; ?>

    <a class="back-link" href="fpb.html">&larr; Kembali ke Kalkulator</a>
  </div>
</body>
</html>