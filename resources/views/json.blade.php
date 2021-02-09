<?php
 $sumber = 'http://192.168.43.103:5000/api/3/action/datastore_search?resource_id=6746321f-43a8-4e0d-99ea-e8ead75a2c73&limit=5';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);
 $data2 = $data["result"]["records"];
?>
<!DOCTYPE html>
<html>
<head>
 <title>Dota API:Dev</title>
</head>
<body>
 <h1 align="center">Perbandingan Curah Hujan Dan Kasus DBD</h1>
 <table id="dotacss" border="1">
  <tr>
   <th>ID</th>
   <th>Bulan</th>
   <th>Kasus DBD 2014</th>
   <th>Curah Hujan 2014</th>
   <th>Kasus DBD 2015</th>
   <th>Curah Hujan 2015</th>
   <th>Kasus DBD 2016</th>
   <th>Curah Hujan 2016</th>
   <th>Kasus DBD 2017</th>
   <th>Curah Hujan 2017</th>
   <th>Kasus DBD 2018</th>
   <th>Curah Hujan 2018</th>
   <th>Kasus DBD 2019</th>
   <th>Curah Hujan 2019</th>
   <th>Kasus DBD 2020</th>
   <th>Curah Hujan 2020</th>
  </tr>
  <?php
   for($a=0; $a < count($data2); $a++)
   {
    print "<tr>";
    // menayangkan
    print "<td>".$data2[$a]['_id']."</td>";
    print "<td>".$data2[$a]['BULAN']."</td>";
    print "<td>".$data2[$a]['Kasus DBD 2014']."</td>";
    print "<td>".$data2[$a]['Curah Hujan 2014']."</td>";
    print "<td>".$data2[$a]['Kasus DBD 2015']."</td>";
    print "<td>".$data2[$a]['Curah Hujan 2015']."</td>";
    print "<td>".$data2[$a]['Kasus DBD 2016']."</td>";
    print "<td>".$data2[$a]['Curah Hujan 2016']."</td>";
    print "<td>".$data2[$a]['Kasus DBD 2017']."</td>";
    print "<td>".$data2[$a]['Curah Hujan 2017']."</td>";
    print "<td>".$data2[$a]['Kasus DBD 2018']."</td>";
    print "<td>".$data2[$a]['Curah Hujan 2018']."</td>";
    print "<td>".$data2[$a]['Kasus DBD 2019']."</td>";
    print "<td>".$data2[$a]['Curah Hujan 2019']."</td>";
    print "<td>".$data2[$a]['Kasus DBD 2020']."</td>";
    print "<td>".$data2[$a]['Curah Hujan 2020']."</td>";
    print "</tr>";
   }
  ?>
 </table>
</body>
</html>
