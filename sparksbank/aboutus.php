
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
    position: absolute;
    left: 600px;
  float: left;
  width: 20.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 80px;
  text-align: center;
  background-image:url('img/b1.jpg');
  color: white;
}

.container {

  padding: 0 20px;
}

h3{
    font-size: 20px;
}
p{
    font-size: 20px;
}
.title {
  color: white;
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

<div class="about-section">
  <h1>About Us</h1>
  <h3>HDFC BANK</h3>
  <p>			HDFC Bank is the place where customers feel the sense of safety for their property. In the bank, 
            where customers can send the money in easy way. Transaction of money is main part where customer takes shelter of the bank. Now to keep the belief and trust of customers, there is the positive need for management of the bank, which can handle all this with comfort and ease. Smooth and efficient management affects the satisfaction of the customers indirectly. And the main use of Virtual currency is a type of unregulated digital currency that is only available in electronic form. It is stored and transacted only through designated software, mobile or computer applications, or through dedicated digital wallets, and the transactions occur over the internet through secure, dedicated networks.
            </p>
</div>
<h2 style="text-align:center">Created By</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="img/b1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2><center>Manasi Mokashi<center></h2>
        <p class="title">Intern</p>
        <p><center> I am a student pursuing IT enginnering in VPKBIET<center></p>
        <p>mansi@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>


  

</body>
</html>
