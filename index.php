<html>
    <head>
        <title>Diana Barrera </title>
    </head>
    <body>
        <h1> Taller 1 (Diana Barrera)</h1>
        <h1>
            <?php 
                $var1="Taller1";
                $var2=5;
                $var3=3.8975;                
                $var4=4.2;
                $var5="16-02-2020";
                echo "- Variable1=".$var1;
                echo "<h2></p>- Variable2=".$var2."</p>- Variable3=".$var3."</p>- Variable4=".$var4."</p>- Variable5=".$var5."</p></h2>";
            ?>
        </h1>
        <?php
            $miarray = [
                "Diana",
                "Alejandra",
                "Barrera",
                "Wilches",
                "PHP"
            ];

            for($j = 0; $j < count($miarray); $j++){
                echo "Pos".($j+1)."=".$miarray[$j]."</p>";
            }
            
        ?>
        
    </body>
</html>