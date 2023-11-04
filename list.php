<?php
require_once 'connect.php';

$list_sql = "SELECT * FROM custom order by fname, fage, ftype, ffrom, fto, fdeparting, freturning";

$result = mysqli_query($conn, $list_sql);
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Passenger List</title>
    <style>
        html,
        body {
            height: 100%;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-image: url('https://media.cntraveler.com/photos/607f3c487774091e06dd5d21/4:3/w_1819,h_1364,c_limit/Breeze%20Airways_166655077_303814634409055_8038496796049085212_n.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;

        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;

        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .table-container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        th,
        td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .action-links {
            text-decoration: none;
            margin-right: 10px;
            color: #007bff;
        }

        .action-links.delete {
            color: #ff4444;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <h1>Passenger List</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Type</th>
                <th>Flying from</th>
                <th>Flying to</th>
                <th>Departing</th>
                <th>Returning</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['fage']; ?></td>
                    <td><?php echo $row['ftype']; ?></td>
                    <td><?php echo $row['ffrom']; ?></td>
                    <td><?php echo $row['fto']; ?></td>
                    <td><?php echo $row['fdeparting']; ?></td>
                    <td><?php echo $row['freturning']; ?></td>
                    <td><a href="edit.php?sid=<?php echo $row['id']; ?>">
                            <i class="fas fa-pen-to-square"></i>
                        </a>
                        <a onclick="return confirm('Do you want to delete it?');" href="delete.php?sid=<?php echo $row['id']; ?>">
                            <i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>