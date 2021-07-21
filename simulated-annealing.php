<?php


function fungsi($x1, $x2) {
	$hasil = ((4-2.1*$x1*$x1+($x1*$x1*$x1*$x1/3))*$x1*$x1+$x1*$x2+(-4+4*$x2*$x2)*$x2*$x2);
	return $hasil;
}

$coolrate=0.9;
$exp=2.71828183;
$temp=1000;
$tempmin=1;

$no=1;
$sem1 = rand(-10,10);
$sem2 = rand(-10,10);
$hitung1=fungsi($sem1,$sem2);

while ($temp>$tempmin){
	$bar1=rand(-10,10);
	$bar2=rand(-10,10);
	$hitung2=fungsi($bar1,$bar2);

	if($hitung2<$hitung1){
		$sem1=$bar1;
		$sem2=$bar2;
		$hitung1=$hitung2;
	}else{
		$delta=($hitung2-$hitung1);
		if(($exp)*(-$delta/$temp) > rand(0,1)){
			$hitung1=$hitung2;
			$sem1=$bar1;
			$sem2=$bar2;
		}
	}
	
	$temp=$coolrate*$temp;

	echo 'iterasi ke='.$no.' ...hasil = '.$hitung1.' ...sementara='.$sem1.','.$sem2.' ...baru='.$bar1.','.$bar2;
	echo '<br>';
	$no++;
}?>