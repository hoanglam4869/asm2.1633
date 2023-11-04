<?php
$id=$_GET["sid"];
require_once 'connect.php';
$edit_sql = "SELECT * FROM custom WHERE id=$id";
$result = mysqli_query($conn, $edit_sql);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <style>
        .background-image {
            background-image: url('https://www.libertytravel.com/sites/default/files/styles/full_size/public/flight-hero.jpg?itok=hhscHSGZ');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            max-width: 500px;
            width: 100%;
        }
    </style>
    <title>Edit Page</title>
</head>

<body>
    <div class="container">
        <h1>Form edit flight</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="sid" value="<?php echo $id;?>" id="">
            <div class="form-group">
                <label for="fname">Name</label>
                <input type="text" id="fname" class="form-control" name="fname" value="<?php echo $row['fname']?>">
            </div>
            <div class="form-group">
                <label for="fage">Age</label>
                <input type="text" id="fage" name="fage" class="form-control" value="<?php echo $row['fage']?>">
            </div>
            <div class="form-group">
                <label for="ffrom">From</label>
                <input type="text" id="ffrom" name="ffrom" class="form-control" value="<?php echo $row['ffrom']?>">
            </div>
            <div class="form-group">
                <label for="fto">To</label>
                <input type="text" id="fto" name="fto" class="form-control" value="<?php echo $row['fto']?>">
            </div>
            <div class="form-group">
                <label for="ftype">Type</label>
                <input type="text" id="ftype" name="ftype" class="form-control" value="<?php echo $row['ftype']?>">
            </div>
            <div class="form-group">
                <label for="fdeparting">Departing</label>
                <input type="date" id="fdeparting" name="fdeparting" class="form-control" value="<?php echo $row['fdeparting']?>">
            </div>
            <div class="form-group">
                <label for="freturning">Returning</label>
                <input type="date" id="freturning" name="freturning" class="form-control" value="<?php echo $row['freturning']?>">
            </div>
            <button class="btn btn-success">Update</button>
        </form>
    </div>
</body>

</html>