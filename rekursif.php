<?php
echo "<br> Deret rekursif<br>";
$batas = 5;
function rekursif($a = 1){
	global $batas;
  echo "*";

  $a++;

  if($a<= $batas){
	rekursif($a);
	}
		else{
			echo "<br/>";
			$batas--;
			if ($batas!=0) {
				rekursif();
			}
	}
}

rekursif();
echo "Deret Pola rekursif";
echo "<br> ";
$garis = 1;
function rekursiff($b = 1){
	global $garis;
  echo "$b";
  $b++;
  if($b<= $garis){
	rekursiff($b);
	}
		else{
			echo "<br>";
			$garis++;
			if ($garis<=5) {
				rekursiff();
			}
	}
}
rekursiff();
?
