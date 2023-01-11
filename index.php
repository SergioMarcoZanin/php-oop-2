<?php
require_once __DIR__ ."/classes/products.php";
var_dump($food);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <h1>Happy Food</h1>
        </div>
    <div>
        <div>
         <h2>Food</h2>
        </div>
        <div>
            <?php foreach($foods as $food){ ?>
                 <div>
                     <h3><?php echo $food->name ?></h3>
                    <div><?php echo $food->image ?></div>
                    <div><?php echo $food->type ?></div>
                    <div><?php echo $food->price ?></div>
                    <div><?php echo $food->ingredients ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
        <div>
            <div>
                <h2>Toys</h2>
            </div>
            <div>
                <?php foreach($toys as $toy){ ?>
                    <div>
                        <h3><?php echo $toy->name ?></h3>
                        <div><?php echo $toy->image ?></div>
                        <div><?php echo $toy->type ?></div>
                        <div><?php echo $toy->price ?></div>
                        <div><?php echo $toy->item ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <div >
    <div >
        <h2>Shelters</h2>
    </div>
        <div >
            <?php foreach($shelters as $shelter){ ?>
                <div >
                    <h3><?php echo $shelter->name ?></h3>
                    <div><?php echo $shelter->image ?></div>
                    <div><?php echo $shelter->type ?></div>
                    <div><?php echo $shelter->price ?></div>
                    <div><?php echo $shelter->size ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>