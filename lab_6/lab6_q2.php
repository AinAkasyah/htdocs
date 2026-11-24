<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
    <style>
        table, th, td{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <?php
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'age' => 21
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => 20
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => 22
        ]
    ];
    ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $students):?>
            <tr>
                <td><?php echo $students['name'];?></td>
                <td><?php echo $students['program'];?></td>
                <td><?php echo $students['age'];?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>