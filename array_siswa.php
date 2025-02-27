<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Nilai Siswa</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f0f8ff; /* Latar belakang biru sangat muda */
    }
    
    .container {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 100, 0.1);
      padding: 25px;
    }
    
    h3 {
      color: #0056b3;
      text-align: center;
      margin-bottom: 25px;
      font-weight: bold;
    }
    
    .table {
      border: 2px solid #cce5ff;
    }
    
    .thead-blue {
      background-color: #0056b3;
      color: white;
    }
    
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: #e6f2ff;
    }
    
    .table-bordered td, .table-bordered th {
      border: 1px solid #b8daff;
    }
    
    .footer {
      text-align: center;
      margin-top: 20px;
      color: #0056b3;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <?php
  $ns1 = ['id'=>1, 'nim'=>'01101', 'nama'=>'Rafidzal', 'uts'=>80, 'uas'=>84, 'tugas'=>78]; 
  $ns2 = ['id'=>2, 'nim'=>'01121', 'nama'=>'Jordy', 'uts'=>70, 'uas'=>50, 'tugas'=>68]; 
  $ns3 = ['id'=>3, 'nim'=>'01130', 'nama'=>'Alice', 'uts'=>60, 'uas'=>86, 'tugas'=>70]; 
  $ns4 = ['id'=>4, 'nim'=>'01134', 'nama'=>'Marko', 'uts'=>90, 'uas'=>91, 'tugas'=>82]; 

  $ar_nilai = [$ns1, $ns2, $ns3, $ns4]; 
  ?>

  <div class="container mt-5">
    <h3>Daftar Nilai Siswa</h3> 
    <table class="table table-striped table-bordered">
      <thead class="thead-blue">
        <tr> 
          <th>No</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>UTS</th>
          <th>UAS</th>
          <th>Tugas</th>
          <th>Nilai Akhir</th> 
        </tr>      
      </thead> 
      <tbody>
        <?php 
          $nomor = 1;  
          foreach($ar_nilai as $ns){ 
            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3; 
        ?>
          <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $ns['nama']; ?></td>
            <td><?php echo $ns['nim']; ?></td>
            <td><?php echo $ns['uts']; ?></td>
            <td><?php echo $ns['uas']; ?></td>
            <td><?php echo $ns['tugas']; ?></td>
            <td><?php echo number_format($nilai_akhir, 2, ',', '.'); ?></td>
          </tr>
        <?php 
          $nomor++; 
        } 
        ?>
      </tbody>         
    </table>
    <div class="footer">
      Data Nilai Semester Ganjil 2024/2025
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>