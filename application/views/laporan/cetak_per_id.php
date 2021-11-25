<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;

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
  color: black;
}
</style>
<body onload="window.print()">
<table align="center" id="customers">
  <tr align="center">
    <td colspan="3"><b>ID CARD</b></td>
  <tr>
  <tr>
    <td>NIP</td>
    <td><?php echo $data->nip; ?></td>
  <tr>
  <tr>
    <td>Nama</td>
    <td><?php echo $data->nama; ?></td>
  <tr>
  <tr>
    <td>Alamat</td>
    <td><?php echo $data->alm; ?></td>
  <tr>
  <tr>
    <td>Gender</td>
    <td><?php echo $data->sex; ?></td>
  <tr>
  <tr>
    <td>Kota Asal</td>
    <td><?php echo $data->kta; ?></td>
  <tr>
  <tr>
    <td>No KTP</td>
    <td><?php echo $data->ktp; ?></td>
  <tr>
  </tr>

 </table>
 </body>