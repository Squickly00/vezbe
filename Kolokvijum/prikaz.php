<?php 
require_once("Auto.php");

$auti = [
    new Auto('golf 4','2003','VW'),
    new Auto('a4','2015','Audi'),
    new Auto('g400','2020','Mercedes'),
    new Auto('g20','2019','BMW'),
    new Auto('a8','2023','Audi'),
];

function prosekGodina($a){
    $sum=0;
    foreach($a as $pom){
        $sum+=$pom->getGodiste();
    }
    return $sum/count($a);
}

function najmladjiAuto($a){
    $min=$a[0];
    foreach($a as $pom){
        if($min>$pom->getGodiste()){
            $min=$pom;
        }
    }
   echo $min->getMarka()." ".$min->getGodiste()." ".$min->getProizvodjac();
}

function podniz($a){
    echo "<br>";
    foreach($a as $pom){
        if($pom->getProizvodjac()=="Audi"){
            echo $pom->getMarka()." ".$pom->getGodiste()." ".$pom->getProizvodjac()."<br>";
        }
    }
    
}

function sortiraj($a){
    for($i=0;$i<count($a)-1;$i++)
     for($j=$i+1;$j<count($a);$j++){
        if($a[$i]->getGodiste()>$a[$j]->getGodiste()){
            $temp = $a[$i];
            $a[$i]=$a[$j];
            $a[$j]=$temp;
        }
     }
     echo "<br>";
     foreach($a as $pom){
        echo $pom->getMarka()." ".$pom->getGodiste()." ".$pom->getProizvodjac()."<br>";
     }
}

include("head.php"); ?>
<body>
    <?php    include("header.php");
            include("nav.php");
        ?>

<section>
<table>

<?php 
foreach($auti as $a){
?>
    <tr> 
        <td><?= $a->getMarka()?> </td>
        <td><?= $a->getGodiste() ?> </td>
        <td><?= $a->getProizvodjac() ?> </td>
    </tr>

<?php } ?>
</table>
<section>
<h1> Metode </h1>

<h3> Prosek godista: <?=prosekGodina($auti)?></h3>

<h3> Najmladji auto: <?=najmladjiAuto($auti)?></h3>

<h3> Podniz: <?= podniz($auti);?> </h3>

<h3> Sortirano: <?= sortiraj($auti);?> </h3>


</section>
</section>

    <?php include("footer.php"); ?>

</body>
</html>