<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4e73df;
  color: white;
}
hr {
  color: white;
}
</style>


<h1>Data Pegawai</h1>

<hr>
<table id="customers">
  <tr>
    <th>No</th>
    <th>NIP</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No KTP</th>
    <th>Jk</th>
    <th>Kota Asal</th>
  </tr>
<?php 
$no = 1;
foreach ($data->result() as $row) {
?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $row->nip; ?></td>
    <td><?php echo $row->nama; ?></td>
    <td><?php echo $row->alm; ?></td>
    <td><?php echo $row->ktp; ?></td>
    <td><?php echo $row->sex; ?></td>
    <td><?php echo $row->kta; ?></td>
  </tr>
<?php 
}
?>
 </table>



