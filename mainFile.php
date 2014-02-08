<?php
//////////////////////////////BGCookie/////////////////////////


    $check = $_POST['checkColor'];
//SetCookie("BGColor",'');
//print_r($_POST);
    if ($check == 1){
    $favcolor = $_POST['favcolor'];
    SetCookie("BGColor",$favcolor);
}
/////////////////////////////////////////////////////////////
    $new = $_POST['new'];
    $next = $_POST['next'];
    $stop = $_POST['stop'];
    $currentUserSum = $_POST['usr'];
    $currentCPUSum = $_POST['cpu'];
    $currentUserSumString = $_POST['usrStr'];
    $currentCPUSumString = $_POST['cpuStr'];

    function generateCard()
    {
        $card = rand(6, 14);
        return $card;
    }

    if ($new == 1)
    {
        $currentUserSum = generateCard();
        $currentCPUSum = generateCard();
        $currentUserSumString = (String)$currentUserSum;
        $currentCPUSumString = (String)$currentCPUSum;



    }
   
    if ($next == 1)
    {
        $currentUserSum += generateCard();
        $usrTempStr = (String)$currentUserSum;
        $currentUserSumString .=  " + " . $currentUserSum;

        if($currentCPUSum < 21) $currentCPUSum += generateCard();
        $cpuTempStr = (String)$currentCPUSum;
        $currentCPUSumString .=  " + " . $currentCPUSum;
    }


?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body style="background-color: <?php echo $_COOKIE['BGColor'] ?>">
<h1>Black Jack</h1>
<form method="post" action="mainFile.php">

    <!-- ///////////Input Hidden///////////////-->
    <input type="hidden" name="usr" value="<?php echo $currentUserSum?>" >
    <input type="hidden" name="cpu" value="<?php echo $currentCPUSum?>" >
    <input type="hidden" name="usrStr" value="<?php echo $currentUserSumString?>" >
    <input type="hidden" name="cpuStr" value="<?php echo $currentCPUSumString?>" >

    <button name="new" value="1">New Game</button>
    <h2>Your cards:</h2>
    <?php
    echo $currentUserSumString."=".$currentUserSum;

    ?>
    <button name="next" value="1">Take one card</button>
    <button name="stop" value="1">Stop</button>
    <h2>CPU cards:</h2>
    <?php
    echo $currentCPUSumString."=".$currentCPUSum;
    ?>

    <h2>State:</h2>

<?php
        if ($currentUserSum > 21) echo 'you lost';
        if ($currentCPUSum > 21) echo 'CPU lost';
        if ($stop == 1)
            {
            if ($currentUserSum > $currentCPUSum) echo 'you won';
            if ($currentUserSum < $currentCPUSum) echo 'you lost';
            if ($currentUserSum == $currentCPUSum) echo 'friendship won';

        }

?>

    <hr>
    <!-- -->
    <h3>Background color:</h3>
    <input type="checkbox" name="checkColor" value="1">
    <input type="color" name="favcolor">


</form>

</body>
</html>