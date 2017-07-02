<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Home | CODICI Labs</title>
		<meta name="description" content="Page Preloading Effect: Re-creating the effect seen on fontface.ninja" />
		<meta name="keywords" content="page loading, effect, initial, logo, sliding, web design, css animation, transform" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="img/logo-BN.ico">

		<!-- css -->

		<link rel="stylesheet" href="css/font-awesome.min.css">
    	<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/normalize.css" />
		<link rel="stylesheet" href="css/effects.css" />
		<!-- <link rel="stylesheet" href='css/jquery.fullPage.css' > -->
		<link rel="stylesheet" href='css/jquery.pagepiling.css' >
		<link rel="stylesheet" href="css/main.css" />


		<!-- google fonts -->
    
	    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:200" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<script src="js/modernizr.custom.js"></script>
	
	</head>
	
	<body>
		<div id="maindiv" class="main">	
			<section id="section0" class="zero-section section">
			<canvas id="particles-js"></canvas>
				<header class="ip-header">
					<h1 class="ip-logo">
						<svg class="ip-inner" width="100%" height="100%" viewBox="0 0 300 160" preserveAspectRatio="xMidYMin meet" aria-labelledby="logo_title">
							<polygon stroke="#010101" class="fill-black path3" stroke-width="0.2" points="77.413,139.335 88.272,139.335 88.272,138.854 77.942,138.854 
								77.942,122.518 77.413,122.518 "/>
							<path stroke="#010101" class="fill-black path3" stroke-width="0.2" d="M89.834,139.335h0.553l2.403-5.045h10.715l2.402,5.045h0.577
								l-8.096-16.938H97.93L89.834,139.335z M93.029,133.81l5.118-10.715l5.117,10.715H93.029z"/>
							<path stroke="#010101" class="fill-black path2" stroke-width="0.2" d="M109.87,139.335h7.28c1.905,0,3.384-0.376,4.432-1.13
								c1.051-0.752,1.575-1.825,1.575-3.219v-0.048c0-0.561-0.109-1.077-0.325-1.549c-0.217-0.474-0.51-0.891-0.875-1.25
								c-0.369-0.361-0.805-0.661-1.311-0.901c-0.504-0.24-1.046-0.399-1.622-0.48c0.962-0.224,1.743-0.681,2.342-1.369
								c0.603-0.688,0.901-1.554,0.901-2.595v-0.048c0-1.138-0.359-2.066-1.081-2.786c-0.96-0.962-2.435-1.442-4.421-1.442h-6.895V139.335z
								 M110.4,130.589v-7.591h6.342c1.586,0,2.814,0.341,3.688,1.021c0.873,0.682,1.311,1.598,1.311,2.751v0.048
								c0,0.641-0.12,1.197-0.361,1.671c-0.239,0.473-0.572,0.864-0.996,1.176c-0.426,0.313-0.914,0.546-1.467,0.696
								c-0.551,0.153-1.141,0.229-1.766,0.229H110.4z M110.4,138.854v-7.784h7.158c0.689,0,1.342,0.084,1.959,0.252
								c0.615,0.169,1.152,0.417,1.609,0.745c0.455,0.328,0.82,0.732,1.093,1.213s0.409,1.042,0.409,1.683v0.048
								c0,1.218-0.477,2.162-1.43,2.835c-0.953,0.672-2.303,1.009-4.049,1.009H110.4z"/>
							<path stroke="#010101" class="fill-black path3" stroke-width="0.2" d="M135.251,139.227c0.715-0.232,1.318-0.549,1.814-0.949
								c0.496-0.399,0.877-0.873,1.143-1.418c0.264-0.544,0.395-1.128,0.395-1.752v-0.049c0-0.577-0.095-1.094-0.288-1.551
								c-0.192-0.455-0.517-0.864-0.972-1.225c-0.457-0.36-1.059-0.681-1.802-0.961c-0.745-0.279-1.663-0.532-2.753-0.757
								c-1.039-0.207-1.904-0.436-2.594-0.685c-0.688-0.248-1.246-0.528-1.67-0.841s-0.723-0.669-0.9-1.069
								c-0.177-0.399-0.264-0.856-0.264-1.368v-0.049c0-0.496,0.115-0.973,0.349-1.43c0.231-0.456,0.563-0.86,0.997-1.213
								c0.432-0.353,0.949-0.633,1.549-0.842c0.601-0.207,1.27-0.312,2.006-0.312c1.041,0,2.019,0.172,2.933,0.517
								c0.911,0.345,1.744,0.796,2.497,1.357l0.336-0.432c-0.768-0.594-1.637-1.062-2.604-1.406c-0.971-0.345-2.009-0.517-3.112-0.517
								c-0.801,0-1.534,0.112-2.199,0.337c-0.664,0.224-1.242,0.532-1.73,0.924c-0.488,0.393-0.868,0.85-1.141,1.37
								s-0.408,1.077-0.408,1.669v0.049c0,0.592,0.104,1.116,0.313,1.573c0.209,0.456,0.541,0.861,0.997,1.213
								c0.458,0.353,1.05,0.661,1.778,0.925c0.729,0.265,1.613,0.502,2.654,0.71c1.058,0.225,1.942,0.46,2.654,0.708
								c0.714,0.25,1.277,0.533,1.693,0.854c0.417,0.32,0.713,0.684,0.89,1.093c0.176,0.408,0.265,0.869,0.265,1.381v0.049
								c0,0.561-0.12,1.086-0.36,1.573c-0.24,0.489-0.585,0.909-1.034,1.262c-0.446,0.353-0.992,0.628-1.633,0.828
								s-1.354,0.301-2.139,0.301c-1.233,0-2.378-0.224-3.436-0.673c-1.057-0.448-2.019-1.089-2.883-1.921l-0.383,0.383
								c0.91,0.866,1.925,1.53,3.038,1.995c1.113,0.463,2.318,0.696,3.616,0.696C133.743,139.575,134.541,139.459,135.251,139.227z"/>
							<path class="fill-black path2" stroke="#000000" stroke-width="0.5" d="M21.636,107.391c-3.085,0-5.93-0.595-8.535-1.782
								c-2.606-1.188-4.868-2.804-6.785-4.846c-1.918-2.043-3.408-4.43-4.472-7.16c-1.063-2.731-1.594-5.639-1.594-8.725v-0.125
								c0-3.085,0.531-5.993,1.594-8.724c1.063-2.73,2.554-5.128,4.472-7.192c1.917-2.064,4.19-3.699,6.816-4.909
								c2.626-1.208,5.503-1.813,8.63-1.813c2.042,0,3.877,0.178,5.503,0.532c1.626,0.354,3.095,0.844,4.409,1.469
								c1.313,0.625,2.511,1.367,3.596,2.22c1.083,0.855,2.126,1.761,3.127,2.72l-0.938,0.938c-0.875-0.834-1.825-1.646-2.845-2.438
								c-1.022-0.792-2.158-1.502-3.409-2.126c-1.25-0.625-2.658-1.126-4.221-1.501c-1.563-0.375-3.325-0.563-5.284-0.563
								c-2.919,0-5.608,0.574-8.067,1.72c-2.46,1.147-4.576,2.7-6.347,4.659c-1.773,1.96-3.158,4.221-4.159,6.785
								c-1,2.564-1.501,5.285-1.501,8.161v0.125c0,2.876,0.51,5.607,1.533,8.192c1.021,2.585,2.417,4.846,4.189,6.784
								c1.771,1.94,3.887,3.482,6.348,4.628c2.459,1.146,5.127,1.721,8.004,1.721c1.792,0,3.46-0.198,5.003-0.595
								c1.542-0.396,2.98-0.916,4.314-1.564c1.334-0.645,2.554-1.396,3.659-2.25c1.104-0.854,2.095-1.761,2.97-2.72l1.001,0.938
								c-0.959,1-2.022,1.948-3.189,2.845c-1.168,0.897-2.461,1.688-3.877,2.377c-1.417,0.688-2.95,1.23-4.596,1.625
								C25.336,107.191,23.555,107.391,21.636,107.391"/>
							<path class="fill-black path2" stroke="#000000" stroke-width="0.5" d="M67.413,107.391c-3.336,0-6.337-0.616-9.005-1.845
								c-2.669-1.229-4.951-2.887-6.848-4.973c-1.897-2.083-3.356-4.48-4.378-7.19c-1.022-2.71-1.532-5.566-1.532-8.567V84.69
								c0-3.002,0.51-5.857,1.532-8.568c1.021-2.709,2.48-5.106,4.378-7.191c1.896-2.084,4.179-3.742,6.848-4.972
								c2.667-1.229,5.669-1.844,9.005-1.844c3.292,0,6.285,0.615,8.974,1.844c2.689,1.23,4.981,2.888,6.879,4.972
								c1.897,2.085,3.355,4.482,4.377,7.191c1.021,2.71,1.532,5.566,1.532,8.568v0.125c0,3.001-0.511,5.857-1.532,8.567
								c-1.022,2.71-2.48,5.107-4.377,7.19c-1.897,2.086-4.19,3.743-6.879,4.973C73.697,106.774,70.705,107.391,67.413,107.391
								 M67.476,106.141c3.042,0,5.815-0.584,8.317-1.751c2.501-1.167,4.648-2.721,6.441-4.659c1.792-1.939,3.167-4.19,4.127-6.755
								c0.958-2.563,1.438-5.262,1.438-8.098v-0.125c0-2.793-0.49-5.482-1.469-8.067c-0.98-2.585-2.367-4.856-4.159-6.817
								c-1.793-1.959-3.951-3.533-6.472-4.722c-2.523-1.188-5.306-1.782-8.349-1.782c-3.085,0-5.869,0.585-8.349,1.751
								c-2.48,1.168-4.618,2.722-6.409,4.66c-1.793,1.938-3.169,4.2-4.128,6.785c-0.959,2.585-1.438,5.275-1.438,8.067v0.125
								c0,2.793,0.49,5.483,1.47,8.067c0.979,2.585,2.365,4.856,4.158,6.815c1.792,1.96,3.949,3.534,6.472,4.722
								C61.648,105.546,64.432,106.141,67.476,106.141"/>
							<path class="fill-black path2" stroke="#000000" stroke-width="0.5" d="M135.888,76.091c-1.127-2.646-2.721-4.949-4.785-6.91
								c-2.063-1.959-4.522-3.502-7.378-4.627s-5.994-1.688-9.411-1.688h-14.071v1.217l7.004,0.017l7.004,0.017
								c1.626,0,3.182,0.133,4.666,0.398c1.484,0.266,2.9,0.665,4.244,1.197c1.346,0.531,2.596,1.165,3.752,1.899
								c1.157,0.735,2.221,1.571,3.189,2.509c0.971,0.938,1.83,1.954,2.58,3.049c0.75,1.094,1.392,2.268,1.924,3.518
								c0.53,1.251,0.93,2.548,1.194,3.893c0.267,1.345,0.399,2.736,0.399,4.174v0.063v0.062c0,1.438-0.133,2.827-0.399,4.167
								c-0.265,1.34-0.664,2.63-1.194,3.87c-0.532,1.24-1.172,2.403-1.916,3.487c-0.746,1.083-1.598,2.089-2.557,3.016
								c-0.958,0.928-2.014,1.756-3.166,2.486c-1.152,0.729-2.399,1.36-3.742,1.892c-1.347,0.531-2.756,0.931-4.23,1.195
								c-1.475,0.268-3.016,0.399-4.619,0.399l-7.066,0.015l-7.067,0.016v1.22h14.071c3.417,0,6.556-0.563,9.411-1.688
								s5.315-2.666,7.378-4.627c2.064-1.96,3.658-4.262,4.785-6.91c1.125-2.647,1.688-5.514,1.688-8.599V84.69
								C137.577,81.605,137.013,78.74,135.888,76.091"/>
							<rect x="149.083" y="62.865" class="fill-black path2" width="1.375" stroke="#000000" stroke-width="0.5" height="43.774"/>
							<path class="fill-black path2" stroke="#000000" stroke-width="0.5" d="M183.351,107.391c-3.086,0-5.932-0.595-8.536-1.782
								c-2.605-1.188-4.867-2.804-6.785-4.846c-1.918-2.043-3.408-4.43-4.471-7.16c-1.063-2.731-1.596-5.639-1.596-8.725v-0.125
								c0-3.085,0.532-5.993,1.596-8.724c1.063-2.73,2.553-5.128,4.471-7.192c1.918-2.064,4.189-3.699,6.816-4.909
								c2.627-1.208,5.502-1.813,8.63-1.813c2.042,0,3.876,0.178,5.503,0.532c1.626,0.354,3.095,0.844,4.408,1.469
								c1.313,0.625,2.511,1.367,3.596,2.22c1.085,0.855,2.126,1.761,3.128,2.72l-0.939,0.938c-0.875-0.834-1.823-1.646-2.844-2.438
								c-1.022-0.792-2.159-1.502-3.41-2.126c-1.251-0.625-2.656-1.126-4.219-1.501c-1.563-0.375-3.326-0.563-5.285-0.563
								c-2.918,0-5.607,0.574-8.066,1.72c-2.461,1.147-4.576,2.7-6.349,4.659c-1.771,1.96-3.157,4.221-4.157,6.785
								c-1.001,2.564-1.502,5.285-1.502,8.161v0.125c0,2.876,0.511,5.607,1.533,8.192c1.021,2.585,2.417,4.846,4.188,6.784
								c1.771,1.94,3.888,3.482,6.349,4.628c2.457,1.146,5.127,1.721,8.004,1.721c1.793,0,3.46-0.198,5.003-0.595
								c1.541-0.396,2.979-0.916,4.314-1.564c1.334-0.645,2.554-1.396,3.657-2.25c1.105-0.854,2.097-1.761,2.972-2.72l1,0.938
								c-0.96,1-2.022,1.948-3.188,2.845c-1.168,0.897-2.46,1.688-3.878,2.377c-1.417,0.688-2.949,1.23-4.595,1.625
								C187.05,107.191,185.267,107.391,183.351,107.391"/>
							<rect x="209.741" y="62.865" class="fill-black path2" stroke="#000000" stroke-width="0.5" width="1.376" height="43.774"/>
							<path stroke="#000000" stroke-width="0.5" class="path2 logo-fill" stroke-miterlimit="10" d="M107.099,44.087c-3.07,0-5.968-0.578-8.616-1.718
								c-2.611-1.124-4.918-2.692-6.858-4.661c-1.939-1.968-3.477-4.309-4.569-6.957c-1.094-2.654-1.648-5.512-1.648-8.492v-0.091
								c0-2.974,0.544-5.817,1.619-8.45c1.072-2.631,2.606-4.98,4.558-6.979c1.955-2.004,4.291-3.602,6.94-4.746
								c2.678-1.157,5.64-1.743,8.803-1.743c1.81,0,3.513,0.159,5.062,0.472c1.576,0.32,3.059,0.783,4.408,1.375
								c1.34,0.589,2.602,1.304,3.751,2.124c1.063,0.761,2.077,1.603,3.019,2.506l3.731,3.581l-10.312,11.877l10.573,10.708l-3.549,3.815
								c-1.022,1.098-2.116,2.095-3.255,2.963c-1.18,0.9-2.463,1.688-3.816,2.345c-1.432,0.695-2.995,1.222-4.651,1.569
								C110.697,43.918,108.951,44.087,107.099,44.087z M107.281,16.268c-0.732,0-1.369,0.128-1.944,0.393
								c-0.639,0.293-1.17,0.674-1.624,1.164c-0.465,0.503-0.822,1.093-1.09,1.803c-0.285,0.754-0.424,1.555-0.424,2.45v0.091
								c0,0.903,0.141,1.716,0.43,2.489c0.274,0.735,0.637,1.342,1.11,1.86c0.449,0.494,0.97,0.872,1.597,1.158
								c0.576,0.264,1.212,0.393,1.945,0.393c1.033,0,1.857-0.16,2.451-0.477c0.973-0.518,1.979-1.26,2.99-2.204l3.443-3.214l-3.66-3.397
								c-0.902-0.837-1.852-1.514-2.826-2.011C109.023,16.431,108.239,16.268,107.281,16.268z"/>
							<path stroke="#010406" class="path4 logo-fill stroke-finito" stroke-width="0.5" d="M152.079,131.922c0,1.444-1.171,2.615-2.615,2.615
								c-1.445,0-2.616-1.171-2.616-2.615c0-1.445,1.171-2.616,2.616-2.616C150.908,129.306,152.079,130.477,152.079,131.922"/>
							<path stroke="#000204" class="path4 logo-fill stroke-finito" stroke-width="0.5" d="M65.17,132.068c0,1.445-1.171,2.615-2.616,2.615s-2.616-1.17-2.616-2.615
								s1.171-2.616,2.616-2.616S65.17,130.623,65.17,132.068"/>
						</svg>
					</h1>
					<div class="ip-loader">
						<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
							<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
							<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						</svg>
					</div>
				</header>
				<!-- top bar -->
				<div class="codrops-top clearfix">
					<!-- <a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/FullscreenForm/"><span>Previous Demo</span></a>
					<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19535"><span>Back to the Codrops Article</span></a></span> -->
				</div>
				<!-- main content -->
				<div class="zero-body">
					<div class="zero-text-container">
						<div class="zero-text-container-middle">
							<h1 id="zero-text"></h1>
						</div>
					</div>
				</div>
				<div class="col-xs-12 scroll-img">
                    <div class="col-xs-4 socialnetworks"></div>
                    <div class="col-xs-4 button aparicion-up">
                        <div id="sectionarrow" class="demo">
							<a><span></span>Scroll</a>
						</div>
                    </div>
                    <div class="col-xs-4 copyright">
                        <div>
                            <h4>— © 2017 by Codicilabs. All rights reserved. | <a href='privacy.php'> Privacy Policy </a> | <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></h4>
                        </div>
                    </div> 
                </div>
			</section><!-- First-section -->
			<section id="section1" class="first-section section">
				<div class="backgroundcontainer">
					<div class="background-arriba">
						<img src="./img/servicesarriba2.png">
					</div>
					<hr>
					<div class="background-abajo">
						<img src="./img/servicesabajo2.png">
					</div>
				</div>
			</section><!-- Second-section -->
			<section id="section2" class="second-section section">
			</section><!-- Second-section -->
			<section id="section3" class="third-section section">
			</section><!-- Second-section -->
			<section id="section4" class="fourth-section section">
			</section><!-- Second-section -->
		</div>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/TweenMax.min.js"></script>
		<script src="js/cooltext.animations.js"></script>
		<script src="js/cooltext.min.js"></script>
		<script src="js/scrolloverflow.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/pathLoader.js"></script>
		<script src="js/main.js"></script>
		<script src="js/app.js"></script>
		<!-- <script src="js/jquery.fullPage.js"></script> -->
		<script src="js/jquery.pagepiling.js"></script> 
	</body>
</html>