<?php
require('../db.php');
include("../auth_session.php");
include("header.php");
$username = $_SESSION["username"];
?>
<body>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    background: rgb(59,72,91);
background: linear-gradient(90deg, rgba(59,72,91,1) 0%, rgba(30,135,244,1) 100%);
}
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}
@import url('https://fonts.googleapis.com/css?family=Roboto');

.container{
  padding: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.card{
  width: 300px;
  height: 420px;
  margin-left: 40px;
  background-color: #1E2B32;
  border-radius: 10px 10px;
}
@media screen and (max-width: 600px) {
.card.responsive {
  width: 300px;
  height: 420px;
  margin-left: 40px;
  background-color: #1E2B32;
  border-radius: 10px 10px;
}
p.responsive {
  font-size: 8px;
  size: 8px;
}
}

.header{
  border-radius: 10px 10px 0px 0px;
  padding: 5px;
  background-color: #2A3942;
}

h3{
  color: #FFFFFF;
  font-family: 'Roboto', sans-serif;
  margin-left: 1rem;
}

.iconM{
  font-size: 18px;
  margin-left: 170px;
  color: #2f89fc;
}

.icon{
  margin-right: 8px;
}

.body li{
  transition: 1s all;
  font-family: 'Roboto', sans-serif;
  font-size: 18px;
  padding: 15px;
  margin-left: -40px;
  margin-top: 0px;
  color: #fff;
  list-style: none;
  display: block;
  border-top-right-radius: 10px 10px;
  border-bottom-right-radius: 10px 10px;
}

li:hover{
  transition: 1s all;
  color: #2f89fc;
  border-top-right-radius: 10px 10px;
  border-bottom-right-radius: 10px 10px;
  cursor: pointer;
}

.body > li{
  float: left;
}

.body li ul{
  background: #1E2B32;
  margin-left: 280px;
  margin-top: -38px;
  display: none;
  position: absolute;
  border-top-right-radius: 15px 15px;
  border-bottom-right-radius: 15px 15px;
}

.body li:hover > ul{
  display: block;
  cursor: pointer;
}
.myButton {
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:linear-gradient(to bottom, #ededed 5%, #dfdfdf 100%);
	background-color:#ededed;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#777777;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
	background:linear-gradient(to bottom, #dfdfdf 5%, #ededed 100%);
	background-color:#dfdfdf;
}
.myButton:active {
	position:relative;
	top:1px;
}

        
</style>
</head>
<div class="container">
  <div class="card">
    <div class="header">
      <center> <h3>Youtube Subscribers</h3></center>
    </div>
    <div class="body">
      <ul>
        <li><form class="form-style-9" method="post" action"start()">
<center>
                                       
                                                    
                                                    <input style="font-family: 'Roboto', sans-serif;
  color: #333;
	margin: 0 auto;
  padding: 0.4rem 0.7rem;
  border-radius: 0.2rem;
  background-color: rgb(255, 255, 255);
  border: none;
  width: 70%;
  display: block;
  border-bottom: 0.3rem solid transparent;
  transition: all 0.3s;" class="field-style field-split" type="text" id="url" name="url" placeholder="Enter Channel URL">

                                                    



                                                    
                                       
                                            <center><div class="slidecontainer">

<input type="range" min="20" max="500" step="10" id="myRange" name="demo">
<p>Quantity: <span id="demo"></span></p>
<p>Price: $ <span id="price"></span></p>
<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
var op = document.getElementById("price");
output.innerHTML = slider.value;
op.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
  var price = this.value * 0.023;
  op.innerHTML = price.toFixed(2);
}
</script>
</div></center>
											
							

                                       
												<button type="submit" name="button2" onclick="subs()" id="nigger" class="myButton">Purchase</button>	
                                           
                                    </form></li><li>
                                    <center><p style="size: 40%">Stats must be public.<br>AUTODELIVERY [24h]<br>
                                    </p></center>

                                    </li>
      </ul>
    </div>
  </div>
  <div class="card">
    <div class="header">
      <center> <h3>Youtube Likes</h3></center>
    </div>
    <div class="body">
      <ul>
        <li><form class="form-style-9" method="post" action"likes()">
<center>
                                       
                                                    
                                                    <input style="font-family: 'Roboto', sans-serif;
  color: #333;
	margin: 0 auto;
  padding: 0.4rem 0.7rem;
  border-radius: 0.2rem;
  background-color: rgb(255, 255, 255);
  border: none;
  width: 70%;
  display: block;
  border-bottom: 0.3rem solid transparent;
  transition: all 0.3s;" class="field-style field-split" type="text" id="url2" name="url2" placeholder="Enter Video URL">

                                                    



                                                    
                                       
                                            <center><div class="slidecontainer">

<input type="range" min="50" max="500" step="10" id="LikesRange" name="likes">
<p>Quantity: <span id="likes"></span></p>
<p>Price: $ <span id="priceL"></span></p>
<script>
var slider2 = document.getElementById("LikesRange");
var output2 = document.getElementById("likes");
var op2 = document.getElementById("priceL");
output2.innerHTML = slider2.value;
op2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
  var price2 = this.value * 0.0204;
  op2.innerHTML = price2.toFixed(2);
}
</script>
</div></center>
											
							

                                       
												<button type="submit" name="button1" onclick="likes()" id="nigger" class="myButton">Purchase</button>	
                                           
                                    </form></li><li>
                                    <center><p style="size: 60%">No video restrictions allowed.<br>AUTODELIVERY [24h]<br>
                                    </p></center>

                                    </li>
      </ul>
    </div>
  </div>
  <div class="card">
    <div class="header">
      <center> <h3>Youtube Views</h3></center>
    </div>
    <div class="body">
      <ul>
        <li><form class="form-style-9" method="post" action"start()">
<center>
                                       
                                                    
                                                    <input style="font-family: 'Roboto', sans-serif;
  color: #333;
	margin: 0 auto;
  padding: 0.4rem 0.7rem;
  border-radius: 0.2rem;
  background-color: rgb(255, 255, 255);
  border: none;
  width: 70%;
  display: block;
  border-bottom: 0.3rem solid transparent;
  transition: all 0.3s;" class="field-style field-split" type="text" id="url3" name="url3" placeholder="Enter Video URL">

                                                    



                                                    
                                       
                                            <center><div class="slidecontainer">

<input type="range" min="1000" max="10000" step="1000" id="viewrange" name="views">
<p>Quantity: <span id="views"></span></p>
<p>Price: $ <span id="priceV"></span></p>
<script>
var slider3 = document.getElementById("viewrange");
var output3 = document.getElementById("views");
var op3 = document.getElementById("priceV");
output3.innerHTML = slider.value;
op3.innerHTML = slider.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;
  var priceV = this.value * 0.0039;
  op3.innerHTML = priceV.toFixed(2);
}
</script>
</div></center>
											
							

                                       
												<button type="submit" name="button3" onclick="views()" id="nigger" class="myButton">Purchase</button>	
                                           
                                    </form></li><li>
                                    <center><p style="size: 60%">No video restrictions allowed.<br>AUTODELIVERY [24h]<br>
                                    </p></center>

                                    </li>
      </ul>
    </div>
  </div>
</div>
                                    <?php
    if(array_key_exists('button1', $_POST)) { 
            likes(); 
        } 
    if(array_key_exists('button2', $_POST)) { 
            subs(); 
        }
    if(array_key_exists('button3', $_POST)) { 
            views(); 
      }
        ?>
    
</div>
<?php
function subs() {
            $username = $_SESSION['username'];
            global $balance;
                                  
            $url = $_POST["url"];
            $quantity = $_POST["demo"];
            $id_service = "262";
            $price2 = $quantity * 0.023;
            $price = round($price2, 2);
            $newb=$balance-$price;

            
      if ($balance < $price) {
        die("<br><center><h3>ERROR: You dont have enough Funds.</h3></center>");
      }

			if (empty($url) || empty($quantity) || empty($id_service)) {
				die('<form class="form-style-9" method="post" action"start()">
	
				<h3>Please verify all fields</h3>

				</form>');
			}

            if ($quantity) {

            }
            if ($quantity < 20){
		    	die('Choose atleast 20 Subs.');
		    }	    	        

		    if ($id_service == "170") {
                $service = "YT Views";
            }
            if ($id_service == "262") {
                $service = "YT Subscribers";
            }


            $arrayReplace = array($action, $url, $quantity, $id_service);
            $APILink = "https://www.qqtube.com/v1-api";
  
			
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $APILink);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_VERBOSE, false);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30); // Incase things are slow allow enough time to try.
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Can cause unexpected/no return
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);// Can cause unexpected/no return
            $data = array(
                /* Required */
                'api_key' => "API KEY HERE",
                'action' => 'add',
                'url' => $url,
                'quantity' => $quantity,
                'id_service' => $id_service,
            
                // Country (required when service is geo targeted)
                'geo-countries' => 'US', // ISO Code
            
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            $result = curl_exec($ch);
            curl_close($ch);
            extract(json_decode($result, true));
            if ($status == 'error') {
                die("<br><center><h3>ERROR Please contact Support.</h3></center>");
            }
            if ($status == 'success') {
                echo('<h3>Successfully bought ' . $quantity . ' ' . $service . ' for ' . $url .'!</h3>');
            }
            $sql = "INSERT INTO orders (username, service_id, quantity, time, url, status) VALUES ('$username', '$service', '$quantity', UNIX_TIMESTAMP(), '$url', 'Pending')";
            if(mysqli_query($con, $sql)){

            } else{
                 echo '<form class="form-style-9" method="post" action"start()">
				<ul>
				<li>
				<h3>DB Error</h3>
				</ul>
				</li>
				</form>';
            }
            $sql = "UPDATE users SET bal='$newb' WHERE username='$username'";
            if(mysqli_query($con, $sql)){

            } else{
                 echo '<form class="form-style-9" method="post" action"start()">
				<ul>
				<li>
				<h3>DB Error</h3>
				</ul>
				</li>
				</form>';
            }
                
            

$mysqli->close();
}

		?>
    <?php
function likes() {
            $username = $_SESSION['username'];
            global $balance;                
            $url = $_POST["url2"];
            $quantity = $_POST["likes"];
            $id_service = "263";
            $price2 = $quantity * 0.0204;
            $price = round($price2, 2);
            $newb=$balance-$price;

            
            if ($balance < $price) {
              die("<br><center><h3>ERROR: You dont have enough Funds.</h3></center>");
            }

			if (empty($url) || empty($quantity) || empty($id_service)) {
				die('<form class="form-style-9" method="post" action"start()">
	
				<h3>Please verify all fields</h3>

				</form>');
			}

            if ($quantity) {

            }
            if ($quantity < 20){
		    	die('Choose atleast 20 Subs.');
		    }	    	        

		    if ($id_service == "170") {
                $service = "YT Views";
            }
        if ($id_service == "263") {
              $service = "YT Likes";
          }
            if ($id_service == "262") {
                $service = "YT Subscribers";
            }


            $arrayReplace = array($action, $url, $quantity, $id_service);
            $APILink = "https://www.qqtube.com/v1-api";
  
			
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $APILink);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_VERBOSE, false);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30); // Incase things are slow allow enough time to try.
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Can cause unexpected/no return
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);// Can cause unexpected/no return
            $data = array(
                /* Required */
                'api_key' => "API KEY HERE",
                'action' => 'add',
                'url' => $url,
                'quantity' => $quantity,
                'id_service' => $id_service,
            
                // Country (required when service is geo targeted)
                'geo-countries' => 'US', // ISO Code
            
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            $result = curl_exec($ch);
            curl_close($ch);
            extract(json_decode($result, true));
            if ($status == 'error') {
                die("<br><center><h3>ERROR Please contact Support.</h3></center>");
            }
            if ($status == 'success') {
                echo('<h3>Successfully bought ' . $quantity . ' ' . $service . ' for ' . $url .'!</h3>');
            }
            $sql = "INSERT INTO orders (username, service_id, quantity, time, url, status) VALUES ('$username', '$service', '$quantity', UNIX_TIMESTAMP(), '$url', 'Pending')";
            if(mysqli_query($con, $sql)){

            } else{
                 echo '<form class="form-style-9" method="post" action"start()">
				<ul>
				<li>
				<h3>DB Error</h3>
				</ul>
				</li>
				</form>';
            }
            $sql = "UPDATE users SET bal='$newb' WHERE username='$username'";
            if(mysqli_query($con, $sql)){

            } else{
                 echo '<form class="form-style-9" method="post" action"start()">
				<ul>
				<li>
				<h3>DB Error</h3>
				</ul>
				</li>
				</form>';
            }
                
            

$mysqli->close();
}

		?>
    <?php
function views() {
            $username = $_SESSION['username'];
                  global $balance;                
            $url = $_POST["url3"];
            $quantity = $_POST["views"];
            $id_service = "170";
            $price2 = $quantity * 0.0039;
            $price = round($price2, 2);
            $newb=$balance-$price;

            
            if ($balance < $price) {
              die("<br><center><h3>ERROR: You dont have enough Funds.</h3></center>");
            }

			if (empty($url) || empty($quantity) || empty($id_service)) {
				die('<form class="form-style-9" method="post" action"start()">
	
				<h3>Please verify all fields</h3>

				</form>');
			}

            if ($quantity) {

            }
            if ($quantity < 20){
		    	die('Choose atleast 20 Subs.');
		    }	    	        

		    if ($id_service == "170") {
                $service = "YT Views";
            }
            if ($id_service == "262") {
                $service = "YT Subscribers";
            }


            $arrayReplace = array($action, $url, $quantity, $id_service);
            $APILink = "https://www.qqtube.com/v1-api";
  
			
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $APILink);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_VERBOSE, false);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30); // Incase things are slow allow enough time to try.
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Can cause unexpected/no return
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);// Can cause unexpected/no return
            $data = array(
                /* Required */
                'api_key' => "API KEY",
                'action' => 'add',
                'url' => $url,
                'quantity' => $quantity,
                'id_service' => $id_service,
            
                // Country (required when service is geo targeted)
                'geo-countries' => 'US', // ISO Code
            
            );
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            $result = curl_exec($ch);
            curl_close($ch);
            extract(json_decode($result, true));
            if ($status == 'error') {
                die("<br><center><h3>ERROR Please contact Support.</h3></center>");
            }
            if ($status == 'success') {
                echo('<h3>Successfully bought ' . $quantity . ' ' . $service . ' for ' . $url .'!</h3>');
            }
            $sql = "INSERT INTO orders (username, service_id, quantity, time, url, status) VALUES ('$username', '$service', '$quantity', UNIX_TIMESTAMP(), '$url', 'Pending')";
            if(mysqli_query($con, $sql)){

            } else{
                 echo '<form class="form-style-9" method="post" action"start()">
				<ul>
				<li>
				<h3>DB Error</h3>
				</ul>
				</li>
				</form>';
            }
            $sql = "UPDATE users SET bal='$newb' WHERE username='$username'";
            if(mysqli_query($con, $sql)){

            } else{
                 echo '<form class="form-style-9" method="post" action"start()">
				<ul>
				<li>
				<h3>DB Error</h3>
				</ul>
				</li>
				</form>';
            }
                
            

$mysqli->close();
}

		?>
