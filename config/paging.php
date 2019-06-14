<?php
function tampilHalaman($tabel, $limit, $target, $join, $pk, $k, $i, $urut)
{
	include ('config/koneksi.php');
	$url=$_GET['p']="$target";
	$sql="SELECT COUNT(*) AS total FROM $tabel a INNER JOIN $join b ON a.$pk = b.$pk WHERE b.$k='$i' ORDER BY $urut DESC";
	$aksiQuery = $conn->query($sql);
	$hasil = mysqli_fetch_array($aksiQuery);
	$totalData = $hasil['total'];
	$totalHal = ceil($totalData / $limit);
	$hal = 1;
		while ($hal <= $totalHal) 
		{
			echo '<li class=""><a href="?p='.$url.'&hal='.$hal.'">'.$hal.'</a></li>';
				if ($hal <= $totalHal) 
					$hal++;
		                  
		}
}
function ambilData($tabel, $join, $pk, $k, $i, $urut, $hal=1, $limit)
{ include ('config/koneksi.php');
  $dataTable=array();
  $startRow=($hal-1) * $limit;
  $sql="SELECT * FROM $tabel a INNER JOIN $join b ON a.$pk = b.$pk WHERE b.$k='$i' ORDER BY $urut DESC LIMIT $startRow, $limit";

  $query=mysqli_query($conn,$sql);

while ($data=mysqli_fetch_array($query))
	array_push($dataTable,$data);

return $dataTable;
                                                                                                                                           
} //akhir
?>