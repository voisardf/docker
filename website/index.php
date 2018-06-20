<html>
    <head>
        <title>C2C Shop</title>
    </head>
    <body style="font-family:Arial;color:#660000;">
	<div style="margin:10px;">
        <h1 style="padding-top:2px;border-top:#006600 1px solid;border-bottom:#006600 1px solid;">Welcome to C2C</h1>
        <ul>
            <?php

            $json = file_get_contents('http://pyapp/');
            $obj = json_decode($json);

            $products = $obj->products;

            foreach ($products as $product) {
                echo "<li>$product</li>";
            }

            ?>
        </ul>
	</div>
    </body>
</html>
