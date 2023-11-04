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

        .inputbox {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        .h-blue {
            color: blue;
            font-weight: bold;
        }

        .btn-primary {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <title>Flight Registration</title>
</head>

<body>
<?php include 'navbar.php'; ?>
    <div class="background-image">
        <div class="container form-container">
            <form action="add.php" method="post" id="flight-form">
                <h2>Flight Registration</h2>
                <div class="form-group">
                    <label for="fname" class="h-blue">Name:</label>
                    <input type="text" id="fname" class="form-control inputbox" name="fname" required>
                </div>
                <div class="form-group">
                    <label for="fage" class="h-blue">Age:</label>
                    <input type="number" id="fage" name= "fage" class="form-control inputbox" required min="18">
                </div>
                <div class="form-group">
                    <label for="ffrom" class="h-blue">Flying From:</label>
                    <select class="inputbox" id="ffrom" name="ffrom" required>
                        <option value="Hanoi">Hanoi</option>
                        <option value="Danang">Danang</option>
                        <option value="Saigon">Saigon</option>
                        <option value="Ho Chi Minh">Ho Chi Minh</option>
                        <option value="Phu Quoc">Phu Quoc</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fto" class="h-blue">Flying To:</label>
                    <select class="inputbox" id="fto" name="fto" required>
                        <option value="Hanoi">Hanoi</option>
                        <option value="Danang">Danang</option>
                        <option value="Saigon">Saigon</option>
                        <option value="Ho Chi Minh">Ho Chi Minh</option>
                        <option value="Phu Quoc">Phu Quoc</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ftype" class="h-blue">Ticket Type:</label>
                    <select class="inputbox" id="ftype" name="ftype" required>
                        <option value="Economy">Economy</option>
                        <option value="Premium">Premium</option>
                        <option value="Business">Business</option>
                        <option value="First">First</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="fdeparting" class="h-blue">Departing Date:</label>
                    <input type="date" id="fdeparting" name="fdeparting" class="form-control inputbox" required>
                </div>
                <div class="form-group">
                    <label for="freturning" class="h-blue">Returning Date:</label>
                    <input type="date" id="freturning" name="freturning" class="form-control inputbox" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("flight-form");

            form.addEventListener("submit", function (event) {
                const age = parseInt(document.querySelector("#fage").value);
                const name = document.querySelector("#fname").value;
                const flyingFrom = document.querySelector("#ffrom").value;
                const flyingTo = document.querySelector("#fto").value;
                const departingDate = new Date(document.querySelector("#fdeparting").value);
                const returningDate = new Date(document.querySelector("#freturning").value);
                if ( age < 18) {
                    alert("Age must be a positive integer and greater than or equal to 18.");
                    event.preventDefault();
                    return;
                }
                if (/[^a-zA-Z ]/.test(name)) {
                    alert("Name cannot contain numbers or special characters.");
                    event.preventDefault();
                    return;
                }
                if (flyingFrom === flyingTo) {
                    alert("Departure and arrival locations cannot be the same.");
                    event.preventDefault();
                    return;
                }
                if (departingDate >= returningDate) {
                    alert("Departure date must be less than the return date.");
                    event.preventDefault();
                }
            });
        });
    </script>
</body>

</html>
