<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;  
  background-image: url('https://images.travelandleisureasia.com/wp-content/uploads/sites/2/2022/02/11171306/flight.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;

}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
<?php include 'navbar.php'; ?>
<div class="about-section">
  <h1>About Us Page</h1>
  <p>Thanks you for helping us.</p>
  <p>I'm Lam, a student at GreenWich school majoring in information technology. The aircraft management website design project here may help me improve my programming skills.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
    <img src="https://i.pinimg.com/564x/b6/b9/bb/b6b9bb81099de095b393a28da35e0fed.jpg" alt="Jane" style="width: 200px;">
      <div class="container">
        <h2>Lam Hoang</h2>
        <p class="title">Designer</p>
        <p>My introduction will be here.</p>
        <p>hoanglam@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div> 
  
  <div class="column">
    <div class="card">
    <img src="https://cdn2.iconfinder.com/data/icons/pack1-baco-flurry-icons-style/512/XAMPP.png" alt="XAMPP" style="width: 200px;">
      <div class="container">
        <h2>Xampp</h2>
        <p class="title">Database</p>
        <p>Xampp can stores my database of this project.</p>
        <p>xamppp.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
