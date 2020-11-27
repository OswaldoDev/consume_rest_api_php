<?php 

$datas = json_decode(file_get_contents("https://mangadex.org/api/v2/tag"), true);
$dataArray = $datas["data"];
//print_r($dataArray);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oswaldo || API</title>
</head>
<body>
    <h1>Consume API</h1>
    <?php 
    
    for($i=0; $i<count($dataArray); $i++){ ?>

<p><?php if(!isset($dataArray[$i]["id"])) echo "No exist"; else echo $dataArray[$i]["id"]; ?></p>
<p><?php if(!isset($dataArray[$i]["name"])) echo "No exist"; else echo $dataArray[$i]["name"]; ?></p>
<p><?php if(!isset($dataArray[$i]["group"])) echo "No exist"; else echo $dataArray[$i]["group"]; ?></p>
<p><?php if(!isset($dataArray[$i]["description"])) echo "No exist"; else echo $dataArray[$i]["description"]; ?></p>


<?php
    }
    
    ?>
</body>
</html>