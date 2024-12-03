<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
</head>
<body>
    <?php 
        $students = [
            [
                'name' => 'Nadia',
                'matric number' => 'CI220060',
                'section' => 1
            ],
            [
                'name' => 'Nazifa',
                'matric number' => 'CI220011',
                'section' => 1
            ],
            [
                'name' => 'Ummi',
                'matric number' => 'CI220099',
                'section' => 1
            ]
        ];
    ?>

    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Matric Number</th>
            <th>Section</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['matric number']; ?></td>
            <td><?php echo $student['section']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
