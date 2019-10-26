<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
    <title>Circuit Simulation</title>
    <link rel="stylesheet" href="CircuitSimulationStyle.css" type="text/css"/>
</head>
<body>
	<h1>From Delta To Star</h1>
 <div class="OnDelta" id="fromdelta">
            <?php
if ( ! empty($_POST['r12'])){
    $r12 = $_POST['r12'];
}
else{$r12=9845551;}
if ( ! empty($_POST['r23'])){
    $r23 = $_POST['r23'];
}
else{$r23=9845551;}
if ( ! empty($_POST['r31'])){
    $r31 = $_POST['r31'];
}
else{$r31=9845551;}

$r1=($r12*$r31)/($r12+$r23+$r31);
$r2=($r12*$r23)/($r12+$r23+$r31);
$r3=($r23*$r31)/($r12+$r23+$r31);


?>
      <form name='form' method='post' action="CircuitSimulation.php">
        R13: <input type="text" name="r12" id="r12" class="R12Input" >
        <br>
        <br>
         R23: <input type="text" name="r23" id="r23" class="R12Input" >
        <br>
        <br>
         R31: <input type="text" name="r31" id="r31" class="R12Input" >
        <br>
        <br>
        <input class="Submitbtn" type="submit">
        
    </form>
         
        </div>

 <div class="ToStar">
                <label class="R1_lbl" id="R1_ID"><?php if($r12!=9845551){echo "R1= ";echo $r1;} else{echo "R1";} ?></label>
                <br>
                <br>
                   <label class="R2_lbl" id="R2_ID"><?php if($r23!=9845551){echo "R2= ";echo $r2;} else{echo "R2";} ?></label>
                   <br>
                   <br>
                      <label class="R3_lbl" id="R3_ID"><?php if($r31!=9845551){echo "R3= ";echo $r3;} else{echo "R3";} ;?></label>
            </div>

          </body>
</html>