<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php 
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 5; 
        $width = 7; 
        $area = calculateArea($length, $width);
    ?>

    <p>The area of a rectangle with length <?php echo $length; ?> and width <?php echo $width; ?> is <strong><?php echo $area; ?></strong>.</p>
</body>
</html>
