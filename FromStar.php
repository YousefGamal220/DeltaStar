<!DOCTYPE html>
<html>
    <head> <meta charset="UTF-8">
    <title>Circuit Simulation</title>
    <link rel="stylesheet" href="CircuitSimulationStyle.css" type="text/css"/></head>
    <body>
                <h1>From Star To Delta</h1>
         <div class="FromStar" id="fromdelta">
            <?php
if ( ! empty($_POST['r1'])){
    $r1 = $_POST['r1'];
}
else{$r1=9845551;}
if ( ! empty($_POST['r2'])){
    $r2 = $_POST['r2'];
}
else{$r2=9845551;}
if ( ! empty($_POST['r3'])){
    $r3 = $_POST['r3'];
}
else{$r3=9845551;}

$r12=$r1+$r2+($r1*$r2/$r3);
$r23=$r3+$r2+($r3*$r2/$r3);
$r31=$r1+$r3+($r1*$r3/$r2);


?>
      <form name='form' method='post' action="FromStar.php">
        R1: <input type="text" name="r1" id="r1" class="R12Input" >
        <br>
        <br>
         R2: <input type="text" name="r2" id="r2" class="R12Input" >
        <br>
        <br>
         R3: <input type="text" name="r3" id="r3" class="R12Input" >
        <br>
        <br>
        <input class="Submitbtn" type="submit">
        
    </form>
        </div>
         <div class="ToDelta">
                <label class="R1_lbl" id="R1_ID"><?php if($r1!=9845551){echo "R12= ";echo $r12;} else{echo "R12";} ?></label>
                <br>
                <br>
                   <label class="R2_lbl" id="R2_ID"><?php if($r2!=9845551){echo "R23= ";echo $r23;} else{echo "R23";} ?></label>
                   <br>
                   <br>
                      <label class="R3_lbl" id="R3_ID"><?php if($r3!=9845551){echo "R31= ";echo $r31;} else{echo "R31";} ;?></labe>
            </div>
    </body>
</html>