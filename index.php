<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PHP SNACKS</h2>
    <?php
    $matches = [
        [
            'home_name' => " Los Angeles Lakers",
            'away_name' => "Toronto Raptors ",
            'home_points' => rand(90,200),
            "away_points" => rand(90,200),
        ],
        [
            'home_name' => " Brooklyn Nets",
            'away_name' => "Milwaukee Bucks ",
            'home_points' => rand(90,200),
            "away_points" => rand(90,200),
        ],
        [
            'home_name' => " NewYork Knicks",
            'away_name' => "Minnesota TimberWolfes",
            'home_points' => rand(90,200),
            "away_points" => rand(90,200),
        ],
        [
            'home_name' => " Philadelphia 76",
            'away_name' => "Boston Celtics ",
            'home_points' => rand(90,200),
            'away_points' => rand(90,200),
        ],
    ];
    ?>

    <ul>
        <?php for($i = 0; $i< count($matches);$i++){?>
        <li>
            
            <?php echo $matches[$i]["away_name"].$matches[$i]["away_points"] ?> <span>VS</span> <?php echo $matches[$i]["home_name"].$matches[$i]["home_points"] ?>
            
        </li>
        <?php }; ?>
    </ul>

</body>
</html>
