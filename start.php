
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SelfieLessActs</title>


	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script> -->

	<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
    <script  src="js/index1.js"></script>

	<!-- Styleswitcher ( This style is for demo purposes only, you may delete this anytime. ) -->
	<link rel="stylesheet" id="theme-switch" href="css/style.css">
	<!-- End demo purposes only -->




	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>


	</head>
	<body>
	<header role="banner" id="fh5co-header">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		         <a class="navbar-brand" href="index.html">SelfieLessActs</a>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li class="active"><a href="#" data-nav-section="upload"><span>Upload</span></a></li>
		            <li><a href="#" data-nav-section="gallery"><span>Gallery</span></a></li>

		          </ul>
		        </div>
			    </nav>
			  <!-- </div> -->
		  </div>
	</header>

	<section id="fh5co-home" data-section="upload" style="background-image: url(images/full_image_2.jpg);">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">

					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h1 >Have a SelfieLess Moment?</h1>
							<h2 >Upload Now!</h2>
							<br>
							<br>
						</div>
						<div >
							<form action="start.php" method="post" enctype="multipart/form-data">
							<div class="form-group "style="padding-left:27.5%">
								<input id="name" name="cap" class="form-control" style="width:60%"placeholder="Caption this Picture!" type="text">
								<br>

								<select class="form-control"  style="width:60% ;align:center">
									<option>Choose Category</option>
  							<option value="Act1">Act1</option>
  						  <option value="Act2">Act2</opttion>
  					  	<option value="Act3">Act3</option>
  							<option value="Act4">Act4</option>
                </select>
								<br>
							</div>
							
								<div class="fileupload fileupload-new" data-provides="fileupload">
									<span class="btn btn-primary "><span class="fileupload-new">Choose Image</span>
									<input class="btn btn-primary" name="image" type="file" /></span>
									<span class="fileupload-preview"></span>
									<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
								</div>
							
							<input class="btn btn-primary btn-lg" name="submit" value="Post!" type="submit"/>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>


	<section id="fh5co-work"  data-section="gallery">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2>Gallery</h2>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 subtext  ">
					</div>
				</div>
			</div>
		</div>
		<div id="dolly" value="0" class="row row-bottom-padded-sm fh5co-project-item"style="padding:20px; display:none;" >
			<div class="col-md-4 col-sm-6 col-xxs-12 thb2 ">
				<div class="fh5co-text captionbox">
				<h2>Smug Komi-san </h2>
				<span style="font-size:15px; color:green" >Category:<span>
			  	<span style="font-size:15px; color:green" >Act1<span>
				<br>
				<form>
				<span id="0" name="upvotes" style="font-size:25px">1000</span>
				<span style="font-size:25px;color:red">❤</span>
				</form>
				<input id="0" type="submit" name="upvote" value="Upvote" class="btn btn-primary btn-lg" onclick="cli(this)" >
				<input id="-1" type="submit" name="delete" value="Delete" class="btn btn-primary btn-lg" onclick="cli(this)">
			        
				</div>
		 </div>
		</div>

	
		
		
	</div>
</section>
<script>
function cli(e){
var xmlhttp = new XMLHttpRequest();
var up=document.querySelector("span[id="+"'"+e.id+"'"+"]");
if(e.value=="Delete"){
var del=document.querySelector("div[value="+"'"+e.id+"'"+"]");
del.parentNode.removeChild(del);
xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.response);
            }
        };
xmlhttp.open("GET", "upvote.php?delete=" + e.id , true);
xmlhttp.send();
return;
}
var u=up.textContent;
u=u.split("❤");
//alert(u[0]);
u=parseInt(u[0]);
u=u+1;
up.textContent=u;
e.disabled='true';
  xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
            }
        };
xmlhttp.open("GET", "upvote.php?upvote=" + u+","+e.id , true);
xmlhttp.send();
}
</script>

<?php

if(isset($_POST["submit"])){
    $cap=$_POST["cap"];
    
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //DB details
        $dbHost     = 'localhost';
        $dbUsername = 'phpmyadmin';
        $dbPassword = 'maymaystone';
        $dbName     = 'phpmyadmin';
        
        //Create connection and select DB
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d H:i:s");
        $upvotes =0;
	
        //Insert image content into database
        $insert = $db->query("INSERT into images (image, created, caption, upvotes) VALUES ('$imgContent', '$dataTime','$cap', '$upvotes')");
        if($insert){
            echo "<script>alert('File uploaded successfully');</script>";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}
?>
					<?php 
					//DB details
					$dbHost     = 'localhost';
					$dbUsername = 'phpmyadmin';
					$dbPassword = 'maymaystone';
					$dbName     = 'phpmyadmin';
		
					//Create connection and select DB
					$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
					  //Get image data from database
					    $result = $db->query("SELECT id,image,caption,upvotes FROM images;");
					    
					    if($result->num_rows > 0){
						while($imgData = $result->fetch_assoc()){
						//Render image
						$cap=$imgData['caption'];
						$id=$imgData['id'];
						$up=$imgData['upvotes'];
						//echo "<script>alert('$id');</script>";
						header("Content-type: image/jpg"); 
						echo "<script>\n";
						echo "var dolly=document.querySelector('#dolly');\n";
						echo "var clone=dolly.cloneNode(true);\n";
						echo "clone.style.display='block';\n";
						echo 'clone.children[0].children[0].children[0].textContent='."'".$cap."'".";\n";
						echo "var a=document.createElement('a');\n";
						echo 'a.setAttribute("href","data:image/jpeg;base64,'.base64_encode($imgData['image']).'");'."\n";
						echo "a.setAttribute('class','fh5co-project-item image-popup thb2');\n";
						echo "var img=document.createElement('img');\n";
						echo 'img.setAttribute("src", "data:image/jpeg;base64,'.base64_encode( $imgData['image'] ).'");'."\n";
						echo "img.setAttribute('class','img-responsive thb2');\n";
						echo "dolly.parentNode.insertBefore(clone,dolly);\n";
						echo "a.appendChild(img);\n";
						echo "clone.children[0].appendChild(a);\n";
						echo "var upvote=document.querySelector("."'".'input[name="upvote"]'."'".");\n";
						echo "var upvotes=document.querySelector("."'".'span[name="upvotes"]'."'".");\n";
						echo "upvotes.id="."'".$id."'".";\n";
						echo "upvotes.textContent=".$up.";\n";
						echo "clone.setAttribute('value',"."'".$id."'".");\n";
						//echo "var idd=document.querySelector("."'".'input[name="id"]'."'".");\n";
						//echo "idd.id="."'".$id."'".";\n";
						echo "upvote.setAttribute('id',"."'".$id."'".");\n";
						echo "var del=document.querySelector(".'"'."input[name='delete']".'"'.");\n";
						echo "del.id="."'".$id."'".";\n";
						//echo "clone.children[0].children[0].appendChild(img);";
						echo "</script>\n";
						//echo '<img src="data:image/jpeg;base64,'.base64_encode( $imgData['image'] ).'"/>';
						}
					    }else{
						echo 'Image not found...';
					    }

					?>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Counter -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
	<script src="js/jquery.style.switcher.js"></script>
	<script>
		$(function(){
			$('#colour-variations ul').styleSwitcher({
				defaultThemeId: 'theme-switch',
				hasPreview: false,
				cookie: {
		          	expires: 30,
		          	isManagingLoad: true
		      	}
			});
			$('.option-toggle').click(function() {
				$('#colour-variations').toggleClass('sleep');
			});
		});
	</script>
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
