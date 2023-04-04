<?php include("head.php"); 
$imena = [
    ['RB'=>1 ,'ime'=>'Marko','prezime' => 'Marinkovic'],
    ['RB'=>2 ,'ime'=>'Marko','prezime' => 'Marinkovic'],
    ['RB'=>3 ,'ime'=>'Marko','prezime' => 'Marinkovic'],
    ['RB'=>4 ,'ime'=>'Marko','prezime' => 'Marinkovic'],
    ['RB'=>5 ,'ime'=>'Marko','prezime' => 'Marinkovic'],
    ['RB'=>6 ,'ime'=>'Marko','prezime' => 'Marinkovic'],
    ['RB'=>7 ,'ime'=>'Marko','prezime' => 'Marinkovic'],
    ['RB'=>8 ,'ime'=>'Marko','prezime' => 'Marinkovic'],
    ['RB'=>9 ,'ime'=>'Marko','prezime' => 'Marinkovic'],
    ['RB'=>10 ,'ime'=>'Marko','prezime' => 'Marinkovic'],
];
?>

<body>
    <?php    include("header.php");
            include("nav.php");
        ?>

<section>
    <table>

    <?php foreach($imena as $pom){  ?>
        <tr>
        <td> <?= 'RB.'.$pom['RB'].'.'?> </td>
        <td> <?= $pom['ime']?> <td> 
        <td> <?= $pom['prezime']?></td>
        </tr>
    <?php }?>
    
    </table>
</section>

    <?php include("footer.php"); ?>

</body>
</html>