<?php

 $nama=$_REQUEST["nama"];
 $tugas=$_REQUEST["tugas"];
 $uts=$_REQUEST["uts"];
 $uas=$_REQUEST["uas"];
 $hasil=($tugas+$uas+$uts)/3;

echo("Nilai Akhir anda adalah : $hasil ");

 echo("<br>");
 if ($hasil>=80)
 echo(" Anda dinyatakan lulus dengan predikat : <b>A</b>");
 elseif ($hasil>=70)
 echo("Anda dinyatakan lulus dengan predikat  : <b>B</b>");
 elseif ($hasil>=60)
 echo("Anda dinyatakan lulus dengan predikat  : <b>C</b>");
 elseif ($hasil>=40)
 echo("Anda dinyatakan lulus dengan predikat  : <b>D</b>");
 else
 echo("Anda dinyatakan lulus dengan predikat  : <b>E</b>");

?>