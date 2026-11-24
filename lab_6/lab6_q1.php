<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
    <style>
        table, td{
            border-collapse: collapse;
            border: 1px solid;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
    $name = "Ain Akasyah binti Omar";
    $matricNum = "CI250002";
    $course = "Information Security";
    $yearOfStudy = "Year 2";
    $address = "Tongkang Pecah, Batu Pahat, Johor";
    ?>
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matricNum"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year Of Study</td>
            <td><?php echo "$yearOfStudy"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>
</html>