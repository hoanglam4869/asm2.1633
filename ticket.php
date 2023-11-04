<?php
require_once 'connect.php';

$list_sql = "SELECT * FROM custom ORDER BY fname, fage, ftype, ffrom, fto, fdeparting, freturning";
$result = mysqli_query($conn, $list_sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Your ticket</title>
    <style>
        html,
        body {
            height: 100%;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-image: url('https://img.freepik.com/premium-vector/flights-banner-realistic-airplane-sky-international-transportation-travel-foreign-vacation-express-air-delivery-online-ticket-reserved-flight-promo-service-vector-3d-poster-with-copy-space_176411-2268.jpg');
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
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
<?php include 'navbar.php'; ?>
<h1>Your ticket</h1>
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
            </tr>
        <?php } ?>
    </tbody>
</table>
</body>

</html>
