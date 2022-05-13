<?php
    include 'db.php';
	ini_set("allow_url_fopen", 1);
	$jsonTerrains = file_get_contents('http://simulateur.ecoparc.ma/api/terrains');
	$terrains = json_decode($jsonTerrains,true);
	$jsonBatiments = file_get_contents('http://simulateur.ecoparc.ma/api/batiments');	
	$batiments = json_decode($jsonBatiments,true);
	$sqlCommerces = "SELECT * FROM commerces";
    $resultCommerces = mysqli_query($conn, $sqlCommerces);	
	$Commerces = mysqli_fetch_all($resultCommerces,MYSQLI_ASSOC);
	$conn->close();	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="public/icon-cfcim.png">
    <title>CFCIM ECOPARC MAP</title>	
</head>
<body>
<img src="public/dis.png" alt="dis" />
<div class="body">
<!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1024 1024" style="enable-background:new 0 0 1024 1024;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#ADAEB3;}
	.st1{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
	.st2{fill:#E6E6E8;}
	.st3{fill:#848589;}
	.st4{fill:none;stroke:#5C6D75;stroke-width:0.4356;stroke-miterlimit:10;}
	.st5{fill:none;stroke:#FFFFFF;stroke-width:2;stroke-miterlimit:10;}
	.st6{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#5C6D75;stroke-width:0.4356;stroke-miterlimit:10;}
	.st7{fill-rule:evenodd;clip-rule:evenodd;fill:none;stroke:#FFFFFF;stroke-width:2;stroke-miterlimit:10;}
	.st8{fill:#FFFFFF;}
	.st9{fill:#83858A;}
	.st10{fill:none;stroke:#FFFFFF;stroke-width:1.9381;stroke-miterlimit:10;}
	.st11{fill:none;stroke:#FFFFFF;stroke-width:1.9582;stroke-miterlimit:10;}
	.st12{fill:#CCCCCC;stroke:#FFFFFF;stroke-width:2;stroke-miterlimit:10;}
    .st13{font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen",
    "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue",
    sans-serif;}
	.st14{font-size:7px;font-weight:bold}
</style>
<g id="Calque_1">
	<path class="st0" d="M148.9,550.2L288,732.6l141.1-65.4l284-16.2l202.4,53.8l93.8-155.7L729.1,343.5
		C491.7,443.9,491.7,443.9,416.5,468.6c-61.1,20.1-123.3,43.2-154.9,51.4C230,528.1,148.9,550.2,148.9,550.2z"/>
	<g>
		<path class="st0" d="M143,378.8L10.8,364.3l134,180.1l20.8-9.2c-0.2-2.2,1-4.4,3.1-5.4c2.6-1.3,5.7-0.3,7.2,2.2l75.7-19.7
			c-0.7-3.3,1-6.8,4.1-8.3c3.8-1.8,8.3-0.2,10.1,3.5c0.2,0.3,0.3,0.7,0.4,1l1.6-0.4l58.9-17.2l-12.3-121.4L143,378.8z"/>
	</g>
	<polygon class="st1" points="203,383.5 206,383.2 254.9,499.4 251.9,500.3 	"/>
	<g>
		<path class="st2" d="M763.4,526.4l17.4,8.2l2.5-1.2l0.9-1.8c-1.1-1.1-2.1-2.3-2.8-3.8c-0.8-1.6-1.2-3.3-1.3-4.9l-14.6-7.8
			L763.4,526.4z"/>
		<path class="st2" d="M770,491.9l-2.2,11.6l16.8,8.8c0.8-0.7,1.8-1.4,2.9-1.9c2.5-1.2,5.2-1.6,7.8-1.1l1-2l-1.3-2.7L770,491.9z"/>
		<path class="st2" d="M766.4,510.8l14.2,7.8c0.4-1.2,0.9-2.4,1.6-3.5l-15.2-7.5L766.4,510.8z"/>
	</g>
	<ellipse transform="matrix(0.9002 -0.4355 0.4355 0.9002 -144.3833 359.2477)" class="st3" cx="711.6" cy="494.6" rx="4" ry="4"/>
	
		<ellipse transform="matrix(0.9002 -0.4355 0.4355 0.9002 -143.6457 377.7247)" class="st3" cx="752.3" cy="502.3" rx="7.3" ry="7.3"/>
	
		<ellipse transform="matrix(0.9002 -0.4355 0.4355 0.9002 -146.7626 318.2994)" class="st3" cx="621.1" cy="479.3" rx="5.1" ry="5.1"/>
	<g>
		<path class="st2" d="M741,483.7l-23-4.6l-0.9,3c2.9,1.3,5.4,3.5,6.8,6.6c0.3,0.6,0.6,1.3,0.8,1.9c4.3,0.8,11.3,2.3,14.7,3
			L741,483.7z"/>
		<path class="st2" d="M724.5,498.8l13.5,2.6l0.5-3l-13.3-3.1C725.1,496.6,724.9,497.7,724.5,498.8z"/>
		<path class="st2" d="M717.5,506.9c-1.8,0.9-3.6,1.3-5.5,1.4l0,0l0.9,3.6l22.6,3.7l1.6-9.6l-14.7-3.2
			C721.2,504.5,719.6,505.9,717.5,506.9z"/>
	</g>
	<g>
		<line class="st4" x1="284.6" y1="551.5" x2="336.3" y2="528.7"/>
		<line class="st4" x1="295.5" y1="576.9" x2="347.7" y2="555.6"/>
		<line class="st4" x1="299.8" y1="516.2" x2="332.1" y2="593.2"/>
	</g>
	<g>
		<line class="st4" x1="178.6" y1="571.8" x2="201.7" y2="554.2"/>
		<line class="st4" x1="211.8" y1="568" x2="188.7" y2="585.1"/>
		<line class="st4" x1="198.7" y1="598.4" x2="221.5" y2="581.2"/>
		<line class="st4" x1="208.6" y1="611.5" x2="231" y2="594.1"/>
		<line class="st4" x1="218.8" y1="625" x2="240.7" y2="607.3"/>
		<line class="st4" x1="195.4" y1="545.6" x2="254.8" y2="626.6"/>
		<line class="st4" x1="271.1" y1="551.3" x2="216.7" y2="574.6"/>
		<line class="st4" x1="282.4" y1="578.1" x2="234.6" y2="599"/>
		<line class="st4" x1="273.2" y1="619" x2="260.4" y2="587.7"/>
		<line class="st4" x1="229.6" y1="536.2" x2="241.6" y2="564"/>
	</g>
	<path class="st5" d="M357.9,579.6l-29.6-69.7l-3.5-1.2l-48.4,14.6l-2.2,4.1l30.1,69.5c3.6,0,7.2,1.5,9.7,4.2l42-18.2L357.9,579.6z"
		/>
	<path class="st5" d="M292.3,601.2l-30.6-71.2l-4.5-1.4l-77.3,21.1l-4.3,18.1l52.6,69.7l59.6-24.6
		C287.3,608.6,289,604.1,292.3,601.2z"/>
	<line class="st6" x1="351.7" y1="543.4" x2="432" y2="508.7"/>
	<line class="st6" x1="392.3" y1="568.6" x2="361.8" y2="495.9"/>
	<line class="st6" x1="390.5" y1="486.2" x2="419.6" y2="557.1"/>
	<polygon class="st7" points="336.6,507.3 339.5,503.4 414.7,478 419.2,478.9 446.4,542.1 444.5,546.7 369.7,578.1 365.5,576.4 	"/>
	<line class="st6" x1="447.4" y1="466.6" x2="476.6" y2="533.3"/>
	<line class="st6" x1="496.7" y1="524.5" x2="469.1" y2="458.4"/>
	<line class="st6" x1="489.6" y1="450.7" x2="516.9" y2="515.7"/>
	<line class="st6" x1="523.6" y1="474.6" x2="441.8" y2="509.7"/>
	<polygon class="st7" points="427.9,476.4 430.1,473.1 506.8,444.2 511.2,445.9 536,503.7 534.1,508.2 459.1,540.9 453.8,538.5 	"/>
	<line class="st4" x1="531.5" y1="470.8" x2="599.3" y2="440.7"/>
	<line class="st4" x1="552.9" y1="425" x2="579.5" y2="489.7"/>
	<path class="st5" d="M604.8,478.3c-0.2-4.5,1.7-8.9,5.3-11.8L588.7,415l-5.5-2.5l-61.7,25.6l-1.8,4.3l24.4,58.4l5.1,2.5
		L604.8,478.3z"/>
	<g>
		<polyline class="st4" points="609.6,438.2 655.3,418.3 715.5,429 		"/>
		<polyline class="st4" points="712,471 708.4,468.4 728.9,354.1 		"/>
		<line class="st4" x1="696.1" y1="365.7" x2="674.3" y2="481"/>
		<line class="st4" x1="662.6" y1="379.7" x2="644.1" y2="475.7"/>
		<line class="st4" x1="623.4" y1="396.1" x2="635.4" y2="427"/>
		<line class="st4" x1="741.6" y1="365.1" x2="736.7" y2="387.3"/>
		<line class="st4" x1="723.4" y1="384.4" x2="749.6" y2="389.8"/>
		<line class="st4" x1="721.1" y1="397" x2="747.5" y2="402.2"/>
		<line class="st4" x1="719" y1="408.3" x2="745.5" y2="413.5"/>
		<line class="st4" x1="716.9" y1="419.8" x2="743.4" y2="425.5"/>
		<line class="st4" x1="714.9" y1="431" x2="741.4" y2="436.6"/>
		<line class="st4" x1="712.7" y1="443.3" x2="739.4" y2="448.5"/>
		<line class="st4" x1="710.5" y1="455.3" x2="737.3" y2="460"/>
	</g>
	<g>
		<line class="st4" x1="283.2" y1="625.4" x2="297.8" y2="659.4"/>
		<line class="st4" x1="262.1" y1="634.9" x2="317.9" y2="709"/>
		<line class="st4" x1="246.2" y1="665.3" x2="270.8" y2="646.5"/>
		<line class="st4" x1="255.3" y1="677.2" x2="279.5" y2="658.5"/>
		<line class="st4" x1="264.2" y1="689" x2="288.8" y2="670.3"/>
		<line class="st4" x1="273.2" y1="700.8" x2="297.8" y2="682.3"/>
		<line class="st4" x1="282.3" y1="712.7" x2="306.7" y2="694.1"/>
		<line class="st4" x1="315.5" y1="650.8" x2="285" y2="665.6"/>
		<line class="st4" x1="325.7" y1="675.4" x2="301.1" y2="686.7"/>
	</g>
	<path class="st5" d="M291.7,621.6l-56.3,24.6l-1.2,3.4l54.3,71.3l2.2,1.1l43.1-20.8l1.2-3.5l-29.4-69.9
		C300.3,628.9,294.7,626.5,291.7,621.6z"/>
	<line class="st4" x1="336.9" y1="605.3" x2="370.3" y2="683.7"/>
	<line class="st4" x1="321.8" y1="646.2" x2="375.7" y2="623.2"/>
	<line class="st4" x1="332.4" y1="671.8" x2="386.6" y2="648.7"/>
	<g>
		<path class="st5" d="M313,624.7l28.5,69.1l4.4,1.7l50.2-24.3l-31.5-74.4l-4.4-1.7l-41.3,18.3C318.9,617.8,316.8,622.1,313,624.7z"
			/>
	</g>
	<line class="st6" x1="388" y1="630.4" x2="468.7" y2="595.7"/>
	<line class="st6" x1="425.1" y1="568.5" x2="456.4" y2="645.6"/>
	<line class="st6" x1="397.6" y1="579.8" x2="429.6" y2="657.3"/>
	<polygon class="st7" points="374.3,589.3 449.1,558.7 453.1,560.1 484,631 482.8,634 407.5,666.9 402.9,664.7 372.2,594 	"/>
	<g>
		<line class="st4" x1="522" y1="527.9" x2="563.2" y2="625.3"/>
		<line class="st4" x1="501.4" y1="536.6" x2="539.5" y2="626.7"/>
		<line class="st4" x1="481.1" y1="545.2" x2="515.8" y2="628"/>
		<line class="st4" x1="472" y1="580.6" x2="492.3" y2="571.9"/>
		<line class="st4" x1="483.8" y1="608.3" x2="503.9" y2="599.5"/>
		<line class="st4" x1="500.2" y1="590.2" x2="541" y2="572.8"/>
		<line class="st4" x1="536.4" y1="562" x2="556.7" y2="553.2"/>
		<line class="st4" x1="550.4" y1="595.2" x2="570.7" y2="586.6"/>
	</g>
	<polygon class="st7" points="539.6,520.4 543.7,522.2 584.2,618.8 581.4,624.3 496.8,629.1 491.7,626.8 461.8,556.8 463.9,552.4 	
		"/>
	<g>
		<line class="st4" x1="585.9" y1="502.9" x2="635" y2="620.4"/>
		<line class="st4" x1="562.5" y1="544.6" x2="630.4" y2="515.3"/>
		<line class="st4" x1="642.5" y1="544.1" x2="574.8" y2="573.2"/>
		<line class="st4" x1="587" y1="601.5" x2="654.7" y2="572.8"/>
	</g>
	<path class="st5" d="M611.4,492.6l-58,23.3l-1.6,3.7L594.9,620l3.8,2.7l69.7-4.5l3.2-5.6l-49.3-116.6
		C618.3,496.5,614.4,495.2,611.4,492.6z"/>
	<g>
		<line class="st4" x1="661.4" y1="491.9" x2="656" y2="521.4"/>
		<line class="st4" x1="681.3" y1="495.6" x2="676.4" y2="524.7"/>
		<line class="st4" x1="642.1" y1="519.1" x2="696.8" y2="528"/>
		<line class="st4" x1="650.9" y1="540" x2="693.2" y2="548.6"/>
		<line class="st4" x1="660.5" y1="562.9" x2="689.6" y2="568.8"/>
		<polyline class="st4" points="703,515 699.1,515.2 684.8,595.8 		"/>
		<line class="st4" x1="693.9" y1="544.2" x2="722.3" y2="550"/>
		<line class="st4" x1="696.4" y1="531.1" x2="724.7" y2="536.9"/>
		<line class="st4" x1="691.7" y1="557.1" x2="720" y2="562.8"/>
		<line class="st4" x1="689.5" y1="569.7" x2="717.7" y2="575.4"/>
		<line class="st4" x1="687.2" y1="582.4" x2="715.5" y2="587.9"/>
		<line class="st4" x1="713" y1="601.1" x2="673.3" y2="593.5"/>
	</g>
	<g>
		<line class="st4" x1="500.6" y1="661.7" x2="499.4" y2="637.4"/>
		<line class="st4" x1="541" y1="635" x2="542" y2="659.5"/>
		<line class="st4" x1="596.8" y1="631.9" x2="597.9" y2="656.4"/>
		<line class="st4" x1="669.8" y1="627.8" x2="670.9" y2="652.5"/>
		<line class="st4" x1="568.5" y1="633.5" x2="569.6" y2="658"/>
	</g>
	<g>
		<line class="st4" x1="750.3" y1="650.7" x2="807.3" y2="537.3"/>
		<line class="st4" x1="778.9" y1="594.7" x2="927.6" y2="670"/>
		<line class="st4" x1="837.5" y1="553.1" x2="783.1" y2="659.7"/>
		<line class="st4" x1="866.9" y1="568.6" x2="816" y2="668.8"/>
		<line class="st4" x1="896" y1="583.8" x2="848.4" y2="677.7"/>
		<line class="st4" x1="926" y1="599.5" x2="880.8" y2="686.7"/>
		<line class="st4" x1="780.1" y1="591.3" x2="761.5" y2="582.1"/>
		<line class="st4" x1="766.2" y1="556.9" x2="790.9" y2="570"/>
	</g>
	<g>
		<path class="st8" d="M803.5,535.3l152,79.6l2.3,4.8l-44.2,73.7l-4.5,1l-160.5-44.2l20.8-110.3l16.3,7.2l1.9-0.9l3.9-8.1
			c1.1,0.3,2.3,0.5,3.5,0.5c1.9,0,3.8-0.4,5.6-1.3C801.7,536.7,802.7,536.1,803.5,535.3 M803.2,532.9l-1,0.9
			c-0.7,0.7-1.6,1.2-2.5,1.6c-1.5,0.7-3.1,1.1-4.7,1.1c-1,0-2-0.1-2.9-0.4l-1.6-0.5l-0.7,1.5l-3.6,7.5l-0.5,0.2l-15.4-6.8l-2.3-1
			l-0.5,2.5l-20.8,110.3l-0.3,1.8l1.8,0.5l160.5,44.2l0.5,0.1l0.5-0.1l4.5-1l0.8-0.2l0.4-0.7l44.2-73.7l0.6-0.9l-0.5-1l-2.3-4.8
			l-0.3-0.6l-0.6-0.3l-152-79.6L803.2,532.9L803.2,532.9z"/>
	</g>
	<line class="st4" x1="806" y1="530.7" x2="956.4" y2="607.9"/>
	<line class="st4" x1="692.8" y1="491.2" x2="637.2" y2="481.3"/>
	<line class="st4" x1="605.2" y1="485.4" x2="548.4" y2="509.8"/>
	<line class="st4" x1="360.6" y1="588.6" x2="313.4" y2="608.5"/>
	<line class="st4" x1="449.8" y1="551" x2="369.6" y2="584.8"/>
	<line class="st4" x1="539.4" y1="513.2" x2="458.2" y2="547.5"/>
	
		<ellipse transform="matrix(0.9002 -0.4355 0.4355 0.9002 -236.2527 193.2654)" class="st9" cx="303.5" cy="612.1" rx="5.1" ry="5.1"/>
	<g>
		<line class="st4" x1="785.4" y1="446.8" x2="987.9" y2="569"/>
		<line class="st4" x1="788.1" y1="433.5" x2="806.3" y2="443.9"/>
		<line class="st4" x1="790.8" y1="420" x2="812.5" y2="431.7"/>
		<line class="st4" x1="782.7" y1="489.3" x2="818" y2="421"/>
		<line class="st4" x1="838.1" y1="435.4" x2="803.1" y2="500.2"/>
		<line class="st4" x1="858.3" y1="449.9" x2="817.5" y2="528.2"/>
		<line class="st4" x1="878.5" y1="464.5" x2="840" y2="540.2"/>
		<line class="st4" x1="899.5" y1="479.6" x2="861.9" y2="551.8"/>
		<line class="st4" x1="919.3" y1="493.8" x2="883.3" y2="563.2"/>
		<line class="st4" x1="939.6" y1="508.4" x2="905.6" y2="575"/>
		<line class="st4" x1="960.4" y1="523.3" x2="927.5" y2="586.6"/>
		<line class="st4" x1="981.3" y1="538.4" x2="948.4" y2="597.7"/>
	</g>
	<g>
		<g>
			<path class="st8" d="M796.5,405.6L818,421l176.9,127.2l2.5,5.1l-29.5,49.1l-7.2,1.9L809,523.7c0.5-2.5,0.2-5.2-1-7.7
				c-0.8-1.6-1.8-2.9-3.1-4l3.6-6.9l-1-2.5l-24.9-13.3l-2.5-1.3l-2-4.1l15.2-76.6L796.5,405.6 M796.7,403.2l-1.1,0.5l-3.2,1.5
				l-0.9,0.4l-0.2,1l-15.2,76.6L776,484l0.3,0.6l2,4.1l0.3,0.6l0.6,0.3l2.5,1.3l24.2,13l0.4,1l-3.2,6.1l-0.7,1.4l1.2,1
				c1.1,0.9,2,2.1,2.6,3.4c1,2,1.3,4.3,0.9,6.5l-0.3,1.4l1.3,0.7L959.8,606l0.7,0.4l0.8-0.2l7.2-1.9l0.8-0.2l0.4-0.7l29.5-49.1
				l0.6-0.9l-0.5-1l-2.5-5.1l-0.2-0.5l-0.4-0.3L819.2,419.4l-21.5-15.4L796.7,403.2L796.7,403.2z"/>
		</g>
	</g>
	<path class="st10" d="M696.2,497.9l-60.1-11.1c-1.2,2.4-3,4.4-5.4,5.9l51.4,122.5l3.6,2.2l22.2-0.9l3-1.4l16.3-90.2l-1.3-2.6
		l-21.5-4.2l-1.3-2.8l1.3-6.6c-2.9-1.3-5.4-3.6-6.9-6.7C696.8,500.6,696.4,499.3,696.2,497.9z"/>
	<path class="st11" d="M727.8,352l-128.6,53.7l-1.7,5.5l22.5,52.1c6.3-1.2,12.8,1.9,15.7,7.9c0.7,1.4,1.1,2.9,1.3,4.3l61.7,10.4
		c1.4-1.9,8.5-6,10.3-6.1l2.7-9.3l21.6,3.2l3.4-1.6l16.6-97.9L727.8,352z"/>
</g>
<g id="Calque_110">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="708.4,650.4 707.1,627.4 669.1,629.3 670.2,652.6 	"/>
	<text transform="matrix(0.989 -3.429385e-02 3.465845e-02 0.9994 683.8657 643.2111)" class="st13 st14">LS6</text>
</g>
<g id="Calque_109">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="669.1,629.3 570,634.5 571.1,658.4 670.2,652.6 	"/>
	<text transform="matrix(0.9882 -5.356544e-02 5.413152e-02 0.9985 582.8828 644.5019)" style="font-size:6px" class="st13 st14"><tspan x="0" y="0" style="font-size:6px" class="st13 st14">BASSINS DE</tspan><tspan x="0" y="8.4" style="font-size:6px" class="st13 st14">RECUPERATION DES EAUX</tspan></text>
</g>
<g id="Calque_108">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="543.1,635.9 544.1,660 571.1,658.4 570,634.5 	"/>
	<text transform="matrix(0.989 -3.429385e-02 3.465845e-02 0.9994 549.7487 651.3666)" class="st13 st14">STEP</text>
</g>
<g id="Calque_107">
<?php
if($terrains[60]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[60]['numero_lot'].'
Surface: '.$terrains[60]['surface'].'m²
Tarif: '.$terrains[60]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[60]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[60]['url'].'">
	<path class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';"  d="M502.4,638.7l1.1,23.5c0,0,0,0.1,0.1,0.1L544,660c0,0,0.1,0,0.1-0.1l-1-23.9c0,0,0-0.1-0.1-0.1l-40,2.1
	C502.7,638.1,502.4,638.4,502.4,638.7z"/>
    <text transform="matrix(0.989 -3.429385e-02 3.465845e-02 0.9994 510.9999 653.2372)" style="font-size:6px" class="st13 st14">LS4-D.I.B</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<path class="st12"  d="M502.4,638.7l1.1,23.5c0,0,0,0.1,0.1,0.1L544,660c0,0,0.1,0,0.1-0.1l-1-23.9c0,0,0-0.1-0.1-0.1l-40,2.1
	C502.7,638.1,502.4,638.4,502.4,638.7z"/>
    <text transform="matrix(0.989 -3.429385e-02 3.465845e-02 0.9994 510.9999 653.2372)" style="font-size:6px" class="st13 st14">LS4-D.I.B</text>
</a>';
}
?>
</g>
<g id="Calque_106">
<a xlink:title="Pas Disponible">
	<path class="st12" d="M433.5,666.5l70-4.1l-1.2-23.8c0-0.2-0.2-0.4-0.5-0.3L433.5,666.5z"/>	
	<text transform="matrix(0.9772 -0.1566 0.1582 0.9874 480.5798 658.4108)" class="st13 st14">LS5</text>
	
</g>
<g id="Calque_105">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="778.4,594.4 778.6,594.5 780.2,591.4 760.4,581.5 747.5,650.7 749.9,651.4 778.6,594.5 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 758.0005 607.8997)" class="st13 st14">LS3</text>
</g>
<g id="Calque_104">
<?php
if($terrains[59]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[59]['numero_lot'].'
Surface: '.$terrains[59]['surface'].'m²
Tarif: '.$terrains[59]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[59]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[59]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="791,570.1 765.1,556.4 760.4,581.5 780.2,591.4 	"/>
    <text transform="matrix(0.9808 0.1317 -0.1331 0.9911 769.0005 576.2007)" class="st13 st14">LS2</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="791,570.1 765.1,556.4 760.4,581.5 780.2,591.4 	"/>
    <text transform="matrix(0.9808 0.1317 -0.1331 0.9911 769.0005 576.2007)" class="st13 st14">LS2</text>
</a>';
}
?>
</g>
<g id="Calque_103">
<a xlink:title="Commerces" xlink:href="">
	<path class="st12" style="fill:#e65e24;" onmouseover="this.style.fill='#e65e24aa';" onmouseout="this.style.fill='#e65e24';" d="M807.9,536.4c-2.5-1.3-4.2-2.2-4.9-2.6c-3.1,5.3-12.1,3.5-12.1,3.5l-3.9,8l-1.3,0.4l-17.2-7.7l-3.4,18.4
		l25.9,13.7L807.9,536.4z"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 776.2051 556.4224)" style="fill:#fff;" class="st13 st14">LS1</text>
</g>
<g id="Calque_102">
<a xlink:title="Pas Disponible">
	<path class="st12" d="M791.2,570.2l-0.2-0.1l-10.7,21.3l0.3,0.1l-0.3-0.1l-1.6,3.1l30,15.2l29.3-57.5c-13.1-6.9-24-12.6-30-15.8
		l-17,33.7L791.2,570.2z"/>
		<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 802.0005 577.4708)" class="st13 st14">10</text>
</g>
<g id="Calque_101">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="778.6,594.5 749.9,651.4 782.7,660.5 808.6,609.7 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 778.6167 629.5218)" class="st13 st14">9</text>
</g>
<g id="Calque_100">
<a xlink:title="Pas Disponible">
	<path class="st12" d="M838.3,624.8l29-57.2c-10.4-5.4-20.4-10.7-29.4-15.4l-29.3,57.5L838.3,624.8z"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 835.4063 592.3997)" class="st13 st14">8</text>
</g>
<g id="Calque_99">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="808.6,609.7 782.7,660.5 815.6,669.6 838.3,624.8 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 809.5371 642.3997)" class="st13 st14">7</text>
</g>
<g id="Calque_98">
<a xlink:title="Pas Disponible">
	<path class="st12" d="M867.7,639.7l28.8-56.8c-9.5-5-19.4-10.2-29.1-15.2l-29,57.2L867.7,639.7z"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 864.0947 607.8997)" class="st13 st14">6</text>
</g>
<g id="Calque_97">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="838.3,624.8 815.6,669.6 848,678.5 867.7,639.7 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 840.8447 653.6404)" class="st13 st14">5</text>
</g>
<g id="Calque_96">
<a xlink:title="Pas Disponible">
	<path class="st12" d="M897.4,654.7l29.1-56.1c-8.9-4.7-19.2-10.1-30-15.7l-28.8,56.8L897.4,654.7z"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 893.9497 622.7296)" class="st13 st14">4</text>
</g>
<g id="Calque_95">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="867.7,639.7 848,678.5 880.4,687.5 897.4,654.7 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 871.4497 665.7899)" class="st13 st14">3</text>
</g>
<g id="Calque_94">
<a xlink:title="Pas Disponible">
	<path class="st12" d="M955.7,613.8c0,0-12-6.3-29.2-15.3l-29.1,56.1l31,15.7l30.4-50.9L955.7,613.8z"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 925.4497 637.2899)" class="st13 st14">2</text>
</g>
<g id="Calque_93">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="880.4,687.5 909.2,695.5 914.2,694.3 928.4,670.5 897.4,654.7 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 902.4497 678.5399)" class="st13 st14">1</text>
</g>
<g id="Calque_92">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="818.6,420.5 796.3,404.5 792.3,406.6 789.7,419.9 812.7,431.9 	"/>
	<text transform="matrix(0.8932 0.4262 -0.4307 0.9025 797.0729 418.178)" class="st13 st14">187</text>
</g>
<g id="Calque_91">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="812.7,431.9 789.7,419.9 787.2,433.1 806.3,443.9 	"/>
	<text transform="matrix(0.8932 0.4262 -0.4307 0.9025 791.9753 432.4774)" class="st13 st14">188</text>
</g>
<g id="Calque_90">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="806.3,443.9 787.2,433.1 784.6,446.5 800.1,455.9 	"/>
	<text transform="matrix(0.8932 0.4262 -0.4307 0.9025 787.6423 444.7144)" class="st13 st14">189</text>
</g>
<g id="Calque_89">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="784.6,446.5 777.2,484.4 778.8,488 782.2,489.9 800.1,455.9 	"/>
	<text transform="matrix(0.9242 0.3539 -0.3576 0.9339 782.3892 462.19)" class="st13 st14">190</text>
</g>
<g id="Calque_88">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="812.8,431.9 812.7,431.9 806.3,443.9 806.4,444 806.3,443.9 800.1,455.9 820.8,468.4 838.9,434.9 
		818.6,420.5 812.7,431.9 	"/>
		<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 815.0005 448.9806)" class="st13 st14">28</text>
</g>
<g id="Calque_87">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="800.1,455.9 782.2,489.9 803,501.2 820.8,468.4 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 797.0728 481.2867)" class="st13 st14">27</text>
</g>
<g id="Calque_86">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="842.2,481.3 858.9,449.3 838.9,434.9 820.8,468.4 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 835.4063 460.9073)" class="st13 st14">26</text>
</g>
<g id="Calque_85">
<a xlink:title="Pas Disponible">
	<path class="st12" d="M820.8,468.4L803,501.2l3,1.6l1.3,2c0,0-0.6,2.4-3.3,7.5c6.2,6.2,4,12,4,12l9.1,4.8l25.1-47.9L820.8,468.4z"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 817.0728 495.3006)" class="st13 st14">25</text>
</g>
<g id="Calque_84">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="863.6,494.2 879,463.6 858.9,449.3 842.2,481.3 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 857.5005 473.7008)" class="st13 st14">24</text>
</g>
<g id="Calque_83">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="842.2,481.3 817.1,529.2 839.8,541.2 863.6,494.2 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 837.5005 512.7742)" class="st13 st14">23</text>
</g>
<g id="Calque_82">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="885.2,507.3 900.1,478.7 886.5,469 879,463.6 863.6,494.2 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 877.981 488.1539)" class="st13 st14">22</text>
</g>
<g id="Calque_81">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="863.6,494.2 839.8,541.2 861.5,552.7 885.2,507.3 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 858.936 525.1539)" class="st13 st14">21</text>
</g>
<g id="Calque_80">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="905.8,519.8 919.7,492.8 900.1,478.7 885.2,507.3 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 898.4668 501.4007)" class="st13 st14">20</text>
</g>
<g id="Calque_79">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="885.2,507.3 861.5,552.7 863,553.5 883,564.2 905.8,519.8 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 880.8003 535.6785)" class="st13 st14">19</text>
</g>
<g id="Calque_78">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="927.3,532.7 940.2,507.6 919.7,492.8 905.8,519.8 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 918.6938 515.6006)" class="st13 st14">18</text>
</g>
<g id="Calque_77">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="905.8,519.8 883,564.2 905.1,575.9 927.3,532.7 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 902.4434 548.6671)" class="st13 st14">17</text>
</g>
<g id="Calque_76">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="948.9,545.8 960.9,522.4 940.2,507.6 927.3,532.7 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 940.2334 529.1722)" class="st13 st14">16</text>
</g>
<g id="Calque_75">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="927.3,532.7 905.1,575.9 927.3,587.7 948.9,545.8 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 923.5894 560.2186)" class="st13 st14">15</text>
</g>
<g id="Calque_74">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="970.1,558.6 981.7,537.4 960.9,522.4 948.9,545.8 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 960.9229 544.034)" class="st13 st14">14</text>
</g>
<g id="Calque_73">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="948.9,545.8 927.3,587.7 948,598.7 970.1,558.6 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 944.8667 572.9437)" class="st13 st14">13</text>
</g>
<g id="Calque_72_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="995.8,547.5 981.7,537.4 970.1,558.6 988.7,569.9 998.5,553.5 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 981.2002 555.3021)" class="st13 st14">12</text>
</g>
<g id="Calque_71_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="948,598.7 960.2,605.2 968.8,603 988.7,569.9 970.1,558.6 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 964.1997 583.8004)" class="st13 st14">11</text>
</g>
<g id="Calque_70_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="697.3,527.3 697.4,527.4 697.3,527.3 696.7,530.6 725.1,536.4 727.2,524.9 725.9,522.3 704.4,518.1 
		703.1,515.3 703.4,513.9 699.6,514.1 	"/>
		<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 705.5332 528.2005)" class="st13 st14">177</text>
</g>
<g id="Calque_69_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="696.7,530.6 694.3,544.2 722.7,549.9 725.1,536.4 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 703.3999 542.0513)" class="st13 st14">176</text>
</g>
<g id="Calque_68_1_">
<?php
if($batiments[1]['disponibility']==1){
echo '<a xlink:title="Batiment N°: '.$batiments[1]['numero_batiment'].'
Surface-RDC: '.$batiments[1]['surface_rdc'].'m²
Surface-étage: '.$batiments[1]['surface_etage'].'m²
Parking: '.$batiments[1]['parking'].'m²
Tarif: '.$batiments[1]['tarif'].' MAD/m²/Mois
Charge: '.$batiments[1]['charge'].'0 MAD/m²/Mois" xlink:href="'.$batiments[1]['url'].'">
	<polygon class="st12" style="fill:#003649;" onmouseover="this.style.fill=\'#003649cc\';" onmouseout="this.style.fill=\'#003649\';" points="693.5,548.7 693.5,548.7 693.5,548.7 691.9,557.5 720.3,563.2 722.7,549.9 694.3,544.2 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 700.6982 555.3013)" class="st13 st14" style="fill:#fff;">175</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="693.5,548.7 693.5,548.7 693.5,548.7 691.9,557.5 720.3,563.2 722.7,549.9 694.3,544.2 	"/>
    <text transform="matrix(0.9808 0.1317 -0.1331 0.9911 700.6982 555.3013)" class="st13 st14">175</text>
</a>';
}
?>
</g>
<g id="Calque_67_1_">
<?php
if($batiments[0]['disponibility']==1){
echo '<a xlink:title="Batiment N°: '.$batiments[0]['numero_batiment'].'
Surface-RDC: '.$batiments[0]['surface_rdc'].'m²
Surface-étage: '.$batiments[0]['surface_etage'].'m²
Parking: '.$batiments[0]['parking'].'m²
Tarif: '.$batiments[0]['tarif'].' MAD/m²/Mois
Charge: '.$batiments[0]['charge'].'0 MAD/m²/Mois" xlink:href="'.$batiments[0]['url'].'">
	<polygon class="st12" style="fill:#003649;" onmouseover="this.style.fill=\'#003649cc\';" onmouseout="this.style.fill=\'#003649\';" points="689.8,569.6 689.8,569.6 689.8,569.6 689.6,570.5 717.9,576.2 720.3,563.2 691.9,557.5 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 698.9639 569.0003)" class="st13 st14" style="fill:#fff;">174</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="689.8,569.6 689.8,569.6 689.8,569.6 689.6,570.5 717.9,576.2 720.3,563.2 691.9,557.5 	"/>
    <text transform="matrix(0.9808 0.1317 -0.1331 0.9911 698.9639 569.0003)" class="st13 st14">174</text>
</a>';
}
?>
</g>
<g id="Calque_66_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="687.3,583.7 715.6,589.1 717.9,576.2 689.6,570.5 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 696.7139 581.639)" class="st13 st14">173</text>
</g>
<g id="Calque_65_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="684.9,597.4 713.1,602.8 715.6,589.1 687.3,583.7 	"/>
	<text transform="matrix(0.9808 0.1317 -0.1331 0.9911 694.2637 595.0831)" class="st13 st14">172</text>
</g>
<g id="Calque_64_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="684.8,597.5 684.9,597.4 673.7,595.3 682.1,615.2 685.7,617.4 707.9,616.5 710.9,615.1 713.1,602.8 
		684.9,597.4 	"/>
		<text transform="matrix(0.9843 0.1027 -0.1038 0.9946 688.2822 609.729)" class="st13 st14">171</text>
</g>
<g id="Calque_63_1_">
<a xlink:title="Pas Disponible">
	<path class="st12" d="M660.4,491.3l-24.3-4.5c-1.2,2.4-3,4.4-5.4,5.9l10.7,25.6l13.6,2.2L660.4,491.3z"/>
	<text transform="matrix(0.9843 0.1027 -0.1038 0.9946 642.6088 504.7998)" class="st13 st14">34</text>
</g>
<g id="Calque_62_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="676.2,523.9 681,495.1 660.4,491.3 655.1,520.5 	"/>
	<text transform="matrix(0.9843 0.1027 -0.1038 0.9946 664.353 509.7995)" class="st13 st14">33</text>
</g>
<g id="Calque_61_1_">
<a xlink:title="Pas Disponible">
	<path class="st12" d="M697.3,527.3l2.3-13.2l3.7-0.2l1-5.2c-2.9-1.3-5.4-3.6-6.9-6.7c-0.7-1.4-1.1-2.7-1.3-4.1l-15.2-2.8l-4.9,28.8
		L697.3,527.3z"/>
		<text transform="matrix(0.9843 0.1027 -0.1038 0.9946 685.2626 513.936)" class="st13 st14">32</text>
</g>
<g id="Calque_60_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="694.3,544.2 694.1,544.1 694.3,544.2 696.7,530.6 696.5,530.6 696.7,530.6 697.3,527.3 676.2,523.9 
		676.2,524 676.2,523.9 655.1,520.5 655.1,520.5 655.1,520.5 641.4,518.3 650.5,539.9 693.5,548.7 	"/>
		<text transform="matrix(0.9843 0.1027 -0.1038 0.9946 666.3124 535.6785)" class="st13 st14">31</text>
</g>
<g id="Calque_59_1_">
<?php
if($terrains[0]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[0]['numero_lot'].'
Surface: '.$terrains[0]['surface'].'m²
Tarif: '.$terrains[0]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[0]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[0]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="691.9,557.5 691.8,557.5 691.9,557.5 693.5,548.7 650.5,539.9 660.5,563.6 689.8,569.6 	"/>
    <text transform="matrix(0.9843 0.1027 -0.1038 0.9946 669.7993 556.8997)" class="st13 st14">30</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="691.9,557.5 691.8,557.5 691.9,557.5 693.5,548.7 650.5,539.9 660.5,563.6 689.8,569.6 	"/>
    <text transform="matrix(0.9843 0.1027 -0.1038 0.9946 669.7993 556.8997)" class="st13 st14">30</text>
</a>';
}
?>
</g>
<g id="Calque_58_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="687.3,583.7 687.1,583.6 687.3,583.7 689.6,570.5 689.5,570.5 689.6,570.5 689.8,569.6 660.5,563.6 
		673.7,595.3 684.9,597.4 	"/>
		<text transform="matrix(0.9843 0.1027 -0.1038 0.9946 673.9155 582.0747)" class="st13 st14">29</text>
</g>
<g id="Calque_57_1_">
<?php
if($batiments[8]['disponibility']==1){
echo '<a xlink:title="Batiment N°: '.$batiments[8]['numero_batiment'].'
Surface-RDC: '.$batiments[8]['surface_rdc'].'m²
Surface-étage: '.$batiments[8]['surface_etage'].'m²
Parking: '.$batiments[8]['parking'].'m²
Tarif: '.$batiments[8]['tarif'].' MAD/m²/Mois
Charge: '.$batiments[8]['charge'].'0 MAD/m²/Mois" xlink:href="'.$batiments[8]['url'].'">
	<polygon class="st12" style="fill:#003649;" onmouseover="this.style.fill=\'#003649cc\';" onmouseout="this.style.fill=\'#003649\';" points="750.8,389.2 753.3,374.2 742.6,364.9 737.9,386.5 	"/>
	<text transform="matrix(0.9799 0.1387 -0.1401 0.9901 739.8066 380.6822)" class="st13 st14" style="fill:#fff;">186</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="750.8,389.2 753.3,374.2 742.6,364.9 737.9,386.5 	"/>
    <text transform="matrix(0.9799 0.1387 -0.1401 0.9901 739.8066 380.6822)" class="st13 st14">186</text>
</a>';
}
?>
</g>
<g id="Calque_56">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="737.9,386.5 742.6,364.9 729.7,353.7 724.3,383.8 	"/>
	<text transform="matrix(0.9799 0.1387 -0.1401 0.9901 727.2006 375.4319)" class="st13 st14">185</text>
</g>
<g id="Calque_55_1_">
<?php
if($batiments[7]['disponibility']==1){
echo '<a xlink:title="Batiment N°: '.$batiments[7]['numero_batiment'].'
Surface-RDC: '.$batiments[7]['surface_rdc'].'m²
Surface-étage: '.$batiments[7]['surface_etage'].'m²
Parking: '.$batiments[7]['parking'].'m²
Tarif: '.$batiments[7]['tarif'].' MAD/m²/Mois
Charge: '.$batiments[7]['charge'].'0 MAD/m²/Mois" xlink:href="'.$batiments[7]['url'].'">
	<polygon class="st12" style="fill:#003649;" onmouseover="this.style.fill=\'#003649cc\';" onmouseout="this.style.fill=\'#003649\';" points="737.9,386.5 737.8,386.7 737.9,386.5 724.3,383.8 722,396.6 748.6,401.8 750.8,389.2 	"/>
	<text transform="matrix(0.9799 0.1387 -0.1401 0.9901 730.1909 394.4319)" class="st13 st14" style="fill:#fff;">184</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="737.9,386.5 737.8,386.7 737.9,386.5 724.3,383.8 722,396.6 748.6,401.8 750.8,389.2 	"/>
    <text transform="matrix(0.9799 0.1387 -0.1401 0.9901 730.1909 394.4319)" class="st13 st14">184</text>
</a>';
}
?>
</g>
<g id="Calque_54_1_">
<?php
if($batiments[6]['disponibility']==1){
echo '<a xlink:title="Batiment N°: '.$batiments[6]['numero_batiment'].'
Surface-RDC: '.$batiments[6]['surface_rdc'].'m²
Surface-étage: '.$batiments[6]['surface_etage'].'m²
Parking: '.$batiments[6]['parking'].'m²
Tarif: '.$batiments[6]['tarif'].' MAD/m²/Mois
Charge: '.$batiments[6]['charge'].'0 MAD/m²/Mois" xlink:href="'.$batiments[6]['url'].'">
	<polygon class="st12" style="fill:#003649;" onmouseover="this.style.fill=\'#003649cc\';" onmouseout="this.style.fill=\'#003649\';" points="720,408.2 746.6,413.5 748.6,401.8 722,396.6 	"/>
	<text transform="matrix(0.9799 0.1387 -0.1401 0.9901 728.1059 406.565)" class="st13 st14" style="fill:#fff;">183</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="720,408.2 746.6,413.5 748.6,401.8 722,396.6 	"/>
    <text transform="matrix(0.9799 0.1387 -0.1401 0.9901 728.1059 406.565)" class="st13 st14">183</text>
</a>';
}
?>
</g>
<g id="Calque_53_1_">
<?php
if($batiments[5]['disponibility']==1){
echo '<a xlink:title="Batiment N°: '.$batiments[5]['numero_batiment'].'
Surface-RDC: '.$batiments[5]['surface_rdc'].'m²
Surface-étage: '.$batiments[5]['surface_etage'].'m²
Parking: '.$batiments[5]['parking'].'m²
Tarif: '.$batiments[5]['tarif'].' MAD/m²/Mois
Charge: '.$batiments[5]['charge'].'0 MAD/m²/Mois" xlink:href="'.$batiments[5]['url'].'">
	<polygon class="st12" style="fill:#003649;" onmouseover="this.style.fill=\'#003649cc\';" onmouseout="this.style.fill=\'#003649\';" points="717.9,419.9 744.6,425.7 746.6,413.5 720,408.2 	"/>
	<text transform="matrix(0.9799 0.1387 -0.1401 0.9901 725.978 418.315)" class="st13 st14" style="fill:#fff;">182</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="717.9,419.9 744.6,425.7 746.6,413.5 720,408.2 	"/>
    <text transform="matrix(0.9799 0.1387 -0.1401 0.9901 725.978 418.315)" class="st13 st14">182</text>
</a>';
}
?>
</g>
<g id="Calque_52_1_">
<?php
if($batiments[4]['disponibility']==1){
echo '<a xlink:title="Batiment N°: '.$batiments[4]['numero_batiment'].'
Surface-RDC: '.$batiments[4]['surface_rdc'].'m²
Surface-étage: '.$batiments[4]['surface_etage'].'m²
Parking: '.$batiments[4]['parking'].'m²
Tarif: '.$batiments[4]['tarif'].' MAD/m²/Mois
Charge: '.$batiments[4]['charge'].'0 MAD/m²/Mois" xlink:href="'.$batiments[4]['url'].'">
	<polygon class="st12" style="fill:#003649;" onmouseover="this.style.fill=\'#003649cc\';" onmouseout="this.style.fill=\'#003649\';" points="716.2,429.2 716.2,429.2 716.2,429.2 715.8,431.3 742.7,437 744.6,425.7 717.9,419.9 	"/>
	<text transform="matrix(0.9799 0.1387 -0.1401 0.9901 724.4999 430.2681)" class="st13 st14" style="fill:#fff;">181</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="716.2,429.2 716.2,429.2 716.2,429.2 715.8,431.3 742.7,437 744.6,425.7 717.9,419.9 	"/>
    <text transform="matrix(0.9799 0.1387 -0.1401 0.9901 724.4999 430.2681)" class="st13 st14">181</text>
</a>';
}
?>
</g>
<g id="Calque_51_1_">
<?php
if($batiments[3]['disponibility']==1){
echo '<a xlink:title="Batiment N°: '.$batiments[3]['numero_batiment'].'
Surface-RDC: '.$batiments[3]['surface_rdc'].'m²
Surface-étage: '.$batiments[3]['surface_etage'].'m²
Parking: '.$batiments[3]['parking'].'m²
Tarif: '.$batiments[3]['tarif'].' MAD/m²/Mois
Charge: '.$batiments[3]['charge'].'0 MAD/m²/Mois" xlink:href="'.$batiments[3]['url'].'">
	<polygon class="st12" style="fill:#003649;" onmouseover="this.style.fill=\'#003649cc\';" onmouseout="this.style.fill=\'#003649\';" points="713.6,443.9 740.6,449.2 742.7,437 715.8,431.3 	"/>
	<text transform="matrix(0.9799 0.1387 -0.1401 0.9901 722.0341 442.1507)" class="st13 st14" style="fill:#fff;">180</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="713.6,443.9 740.6,449.2 742.7,437 715.8,431.3 	"/>
    <text transform="matrix(0.9799 0.1387 -0.1401 0.9901 722.0341 442.1507)" class="st13 st14">180</text>
</a>';
}
?>
</g>
<g id="Calque_50_1_">
<?php
if($batiments[2]['disponibility']==1){
echo '<a xlink:title="Batiment N°: '.$batiments[2]['numero_batiment'].'
Surface-RDC: '.$batiments[2]['surface_rdc'].'m²
Surface-étage: '.$batiments[2]['surface_etage'].'m²
Parking: '.$batiments[2]['parking'].'m²
Tarif: '.$batiments[2]['tarif'].' MAD/m²/Mois
Charge: '.$batiments[2]['charge'].'0 MAD/m²/Mois" xlink:href="'.$batiments[2]['url'].'">
	<polygon class="st12" style="fill:#003649;" onmouseover="this.style.fill=\'#003649cc\';" onmouseout="this.style.fill=\'#003649\';" points="711.4,456.1 738.6,460.9 740.6,449.2 713.6,443.9 	"/>
	<text transform="matrix(0.9799 0.1387 -0.1401 0.9901 719.9648 454.1507)" class="st13 st14" style="fill:#fff;">179</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="711.4,456.1 738.6,460.9 740.6,449.2 713.6,443.9 	"/>
    <text transform="matrix(0.9799 0.1387 -0.1401 0.9901 719.9648 454.1507)" class="st13 st14">179</text>
</a>';
}
?>
</g>
<g id="Calque_49_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="709,469.4 711.5,471.2 711.7,470.5 733.3,473.7 736.7,472.1 738.6,460.9 711.4,456.1 	"/>
	<text transform="matrix(0.9799 0.1387 -0.1401 0.9901 717.6967 467.2835)" class="st13 st14">178</text>
</g>
<g id="Calque_48_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="622.4,396 599.2,405.7 597.5,411.2 609.2,438.2 634.5,427.2 	"/>
	<text transform="matrix(0.9288 -0.3418 0.3453 0.9385 613.4807 420.9994)" class="st13 st14">41</text>
</g>
<g id="Calque_47_1_">
<?php
if($terrains[5]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[5]['numero_lot'].'
Surface: '.$terrains[5]['surface'].'m²
Tarif: '.$terrains[5]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[5]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[5]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="654.7,418.4 662.2,379.4 622.4,396 634.5,427.2 	"/>
    <text transform="matrix(0.9288 -0.3418 0.3453 0.9385 639.7307 408.1679)" class="st13 st14">40</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="654.7,418.4 662.2,379.4 622.4,396 634.5,427.2 	"/>
    <text transform="matrix(0.9288 -0.3418 0.3453 0.9385 639.7307 408.1679)" class="st13 st14">40</text>
</a>';
}
?>
</g>
<g id="Calque_46_1_">
<?php
if($terrains[4]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[4]['numero_lot'].'
Surface: '.$terrains[4]['surface'].'m²
Tarif: '.$terrains[4]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[4]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[4]['url'].'">
	<path class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" d="M634.5,427.2L634.5,427.2L634.5,427.2l-25.3,11l10.8,25.1c6.3-1.2,12.8,1.9,15.7,7.9c0.7,1.4,1.1,2.9,1.3,4.3
	l6.4,1.1l11.2-58.2L634.5,427.2z"/>
    <text transform="matrix(0.9288 -0.3418 0.3453 0.9385 630.4807 448.9801)" class="st13 st14">39</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<path class="st12" d="M634.5,427.2L634.5,427.2L634.5,427.2l-25.3,11l10.8,25.1c6.3-1.2,12.8,1.9,15.7,7.9c0.7,1.4,1.1,2.9,1.3,4.3
	l6.4,1.1l11.2-58.2L634.5,427.2z"/>
    <text transform="matrix(0.9288 -0.3418 0.3453 0.9385 630.4807 448.9801)" class="st13 st14">39</text>
</a>';
}
?>		
</g>
<g id="Calque_45_1_">
<?php
if($terrains[3]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[3]['numero_lot'].'
Surface: '.$terrains[3]['surface'].'m²
Tarif: '.$terrains[3]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[3]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[3]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="654.8,418.3 685.3,423.7 696.3,365.1 662.2,379.4 654.7,418.4 	"/>
    <text transform="matrix(0.9719 0.1865 -0.1884 0.9821 670.9824 400.2999)" class="st13 st14">38</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="654.8,418.3 685.3,423.7 696.3,365.1 662.2,379.4 654.7,418.4 	"/>
    <text transform="matrix(0.9719 0.1865 -0.1884 0.9821 670.9824 400.2999)" class="st13 st14">38</text>
</a>';
}
?>
</g>
<g id="Calque_44_1_">
<?php
if($terrains[2]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[2]['numero_lot'].'
Surface: '.$terrains[2]['surface'].'m²
Tarif: '.$terrains[2]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[2]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[2]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="654.8,418.3 654.7,418.4 643.4,476.6 674.3,481.8 685.3,423.7 	"/>
    <text transform="matrix(0.9719 0.1865 -0.1884 0.9821 660.7324 450.0499)" class="st13 st14">37</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="654.8,418.3 654.7,418.4 643.4,476.6 674.3,481.8 685.3,423.7 	"/>
    <text transform="matrix(0.9719 0.1865 -0.1884 0.9821 660.7324 450.0499)" class="st13 st14">37</text>
</a>';
}
?>
</g>
<g id="Calque_43_1_">
<?php
if($terrains[1]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[1]['numero_lot'].'
Surface: '.$terrains[1]['surface'].'m²
Tarif: '.$terrains[1]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[1]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[1]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="716.2,429.2 717.9,419.9 717.6,419.8 717.9,419.9 720,408.2 719.8,408.1 720,408.2 722,396.6 
	721.9,396.6 722,396.6 724.3,383.8 724.3,383.7 724.3,383.8 729.7,353.7 727.8,352 696.3,365.1 685.3,423.7 	"/>
    <text transform="matrix(0.9719 0.1865 -0.1884 0.9821 701.6982 398.4005)" class="st13 st14">36</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="716.2,429.2 717.9,419.9 717.6,419.8 717.9,419.9 720,408.2 719.8,408.1 720,408.2 722,396.6 
	721.9,396.6 722,396.6 724.3,383.8 724.3,383.7 724.3,383.8 729.7,353.7 727.8,352 696.3,365.1 685.3,423.7 	"/>
    <text transform="matrix(0.9719 0.1865 -0.1884 0.9821 701.6982 398.4005)" class="st13 st14">36</text>
</a>';
}
?>
</g>
<g id="Calque_42_1_">
<a xlink:title="Pas Disponible">
	<path class="st12" d="M711.4,456.1l-0.2,0L711.4,456.1l2.2-12.2l-0.2,0l0.2,0l2.2-12.5l-0.2,0l0.2,0l0.4-2.1l-30.9-5.5l-11,58.1
		l24.4,4.1c1.4-1.9,8.5-6,10.3-6.1l2.5-8.6l-2.5-1.8L711.4,456.1z"/>
		<text transform="matrix(0.9719 0.1865 -0.1884 0.9821 691.4482 454.1505)" class="st13 st14">35</text>
</g>
<g id="Calque_41_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="585.9,502.8 553.4,515.9 551.8,519.6 562.4,544.4 597,529.5 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 570.9321 527.6772)" class="st13 st14">51</text>
</g>
<g id="Calque_40_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="597,529.5 562.4,544.4 574.8,573.2 609.1,558.4 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 583.2001 555.3009)" class="st13 st14">50</text>
</g>
<g id="Calque_39_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="609.1,558.4 574.8,573.2 587,601.7 621.1,587.2 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 595.2003 583.0527)" class="st13 st14">49</text>
</g>
<g id="Calque_38_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="587,601.7 594.9,620 598.7,622.7 635,620.4 621.1,587.2 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 606.4503 610.4708)" class="st13 st14">48</text>
</g>
<g id="Calque_37_1_">
<a xlink:title="Pas Disponible">
	<path class="st12" d="M630.4,515.1l-8.1-19.1c-4,0.5-7.9-0.8-10.9-3.4l-25.5,10.2l11.1,26.6L630.4,515.1z"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 605.2003 513.2006)" class="st13 st14">45</text>
</g>
<g id="Calque_36_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="609.1,558.4 642.6,544 630.4,515.1 597,529.5 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 616.8596 540.0004)" class="st13 st14">44</text>
</g>
<g id="Calque_35_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="621.1,587.2 654.8,572.9 642.6,544 609.1,558.4 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 628.8596 569.7006)" class="st13 st14">43</text>
</g>
<g id="Calque_34_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="671.6,612.6 654.8,572.9 621.1,587.2 635,620.4 668.4,618.2 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 642.6096 601.6842)" class="st13 st14">42</text>
</g>
<g id="Calque_33_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="480.6,545.3 463.9,552.4 461.8,556.8 471.8,580.3 491.7,571.8 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 473.2476 566.7482)" class="st13 st14">69</text>
</g>
<g id="Calque_32_1_">
<?php
if($terrains[11]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[11]['numero_lot'].'
Surface: '.$terrains[11]['surface'].'m²
Tarif: '.$terrains[11]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[11]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[11]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="499.5,590.5 499.4,590.6 499.5,590.5 491.7,571.8 471.8,580.3 483.9,608.6 503.5,600 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 485.0809 593.9148)" class="st13 st14">68</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="499.5,590.5 499.4,590.6 499.5,590.5 491.7,571.8 471.8,580.3 483.9,608.6 503.5,600 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 485.0809 593.9148)" class="st13 st14">68</text>
</a>';
}
?>
</g>
<g id="Calque_31_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="483.9,608.6 491.7,626.8 496.8,629.1 515.2,628.1 503.5,600 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 495.7476 619.5239)" class="st13 st14">67</text>
</g>
<g id="Calque_30_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="491.7,571.8 491.7,571.8 499.5,590.5 520.4,581.6 501.3,536.6 480.6,545.3 491.7,571.8 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 498.5735 567.9003)" class="st13 st14">64</text>
</g>
<g id="Calque_29_1_">
<?php
if($terrains[10]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[10]['numero_lot'].'
Surface: '.$terrains[10]['surface'].'m²
Tarif: '.$terrains[10]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[10]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[10]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="499.5,590.5 503.5,600 503.5,600 503.5,600 515.2,628.1 539.4,626.7 520.4,581.6 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 515.2402 609.1614)" class="st13 st14">63</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="499.5,590.5 503.5,600 503.5,600 503.5,600 515.2,628.1 539.4,626.7 520.4,581.6 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 515.2402 609.1614)" class="st13 st14">63</text>
</a>';
}
?>
</g>
<g id="Calque_28_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="541.4,572.7 536.8,561.6 536.7,561.6 536.8,561.6 522.4,527.7 501.3,536.6 520.4,581.6 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 518.4742 559.4709)" class="st13 st14">60</text>
</g>
<g id="Calque_27_1_">
<?php
if($terrains[9]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[9]['numero_lot'].'
Surface: '.$terrains[9]['surface'].'m²
Tarif: '.$terrains[9]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[9]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[9]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="551,595.6 551.1,595.6 541.4,572.7 520.4,581.6 539.4,626.7 563.7,625.3 551.1,595.6 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 537.4678 602.9707)" class="st13 st14">59</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="551,595.6 551.1,595.6 541.4,572.7 520.4,581.6 539.4,626.7 563.7,625.3 551.1,595.6 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 537.4678 602.9707)" class="st13 st14">59</text>
</a>';
}
?>
</g>
<g id="Calque_26_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="556.6,553 543.7,522.2 539.6,520.4 522.4,527.7 536.8,561.6 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 537.4671 545.3492)" class="st13 st14">56</text>
</g>
<g id="Calque_25_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="541.4,572.7 541.4,572.7 541.4,572.7 551.1,595.6 570.9,587.2 556.6,553 536.8,561.6 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 550.8004 577.4707)" class="st13 st14">55</text>
</g>
<g id="Calque_24_1_">
<?php
if($terrains[8]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[8]['numero_lot'].'
Surface: '.$terrains[8]['surface'].'m²
Tarif: '.$terrains[8]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[8]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[8]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="584.2,618.8 570.9,587.2 551.1,595.6 563.7,625.3 581.4,624.3 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 564.3002 609.7288)" class="st13 st14">54</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="584.2,618.8 570.9,587.2 551.1,595.6 563.7,625.3 581.4,624.3 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 564.3002 609.7288)" class="st13 st14">54</text>
</a>';
}
?>
</g>
<g id="Calque_17_2_">
<a xlink:title="Pas Disponible">
	<path class="st12" d="M336.9,605.4l-18,8c0,4.4-2.1,8.7-5.9,11.3l8.7,21l27.4-11.7L336.9,605.4z"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 327.7504 630.4001)" class="st13 st14">92</text>
</g>
<g id="Calque_16_2_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="349.1,634 321.7,645.7 332.7,672.5 360.4,660.6 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 338.4506 657.3009)" class="st13 st14">91</text>
</g>
<g id="Calque_15_2_">
<?php
if($terrains[20]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[20]['numero_lot'].'
Surface: '.$terrains[20]['surface'].'m²
Tarif: '.$terrains[20]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[20]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[20]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="332.7,672.5 341.5,693.8 345.9,695.5 370.3,683.7 360.4,660.6 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 349.111 682.6005)" class="st13 st14">90</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="332.7,672.5 341.5,693.8 345.9,695.5 370.3,683.7 360.4,660.6 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 349.111 682.6005)" class="st13 st14">90</text>
</a>';
}
?>
</g>
<g id="Calque_23_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="397,580 374.3,589.3 372.2,594 388,630.4 413.3,619.5 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 390.3042 610.4705)" class="st13 st14">81</text>
</g>
<g id="Calque_22_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="388,630.4 402.9,664.7 407.5,666.9 429,657.5 413.3,619.5 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 405.0008 645.3008)" class="st13 st14">80</text>
</g>
<g id="Calque_21_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="441.5,607.4 425.6,568.3 397,580 413.3,619.5 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 417.0004 598.5506)" class="st13 st14">77</text>
</g>
<g id="Calque_20_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="413.3,619.5 429,657.5 456.9,645.3 441.5,607.4 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 432.0004 634.6002)" class="st13 st14">76</text>
</g>
<g id="Calque_19_2_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="468.6,595.7 453.1,560.1 449.1,558.7 425.6,568.3 441.5,607.4 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 445.4004 587.4706)" class="st13 st14">73</text>
</g>
<g id="Calque_18_2_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="484,631 468.6,595.7 441.5,607.4 456.9,645.3 482.8,634 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 459.8002 622.7288)" class="st13 st14">72</text>
</g>
<g id="Calque_14_2_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="375.6,622.7 364.6,596.8 360.2,595.1 336.9,605.4 349.1,634 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 354.5504 618.8004)" class="st13 st14">86</text>
</g>
<g id="Calque_13_2_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="360.4,660.6 386.9,649.4 375.6,622.7 349.1,634 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 365.3223 645.3002)" class="st13 st14">85</text>
</g>
<g id="Calque_12_2_">
<?php
if($terrains[17]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[17]['numero_lot'].'
Surface: '.$terrains[17]['surface'].'m²
Tarif: '.$terrains[17]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[17]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[17]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="386.9,649.4 360.4,660.6 370.3,683.7 396.1,671.2 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 376.6004 670.4005)" class="st13 st14">84</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="386.9,649.4 360.4,660.6 370.3,683.7 396.1,671.2 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 376.6004 670.4005)" class="st13 st14">84</text>
</a>';
}
?>
</g>
<g id="Calque_11_2_">
<?php
if($terrains[36]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[36]['numero_lot'].'
Surface: '.$terrains[36]['surface'].'m²
Tarif: '.$terrains[36]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[36]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[36]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="261.9,634.6 235.4,646.2 234.2,649.6 245.8,664.8 270.4,645.8 	"/>
    <text transform="matrix(0.8105 -0.5678 0.5738 0.819 249.4965 653.6404)" class="st13 st14">111</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="261.9,634.6 235.4,646.2 234.2,649.6 245.8,664.8 270.4,645.8 	"/>
    <text transform="matrix(0.8105 -0.5678 0.5738 0.819 249.4965 653.6404)" class="st13 st14">111</text>
</a>';
}
?>
</g>
<g id="Calque_10_2_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="270.4,645.8 245.8,664.8 255.1,677 279.5,658 	"/>
	<text transform="matrix(0.8105 -0.5678 0.5738 0.819 259.4965 666.9006)" class="st13 st14">112</text>
</g>
<g id="Calque_9_2_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="285.1,665.4 285,665.5 285.1,665.4 279.5,658 255.1,677 264.2,689.1 288.8,670.4 	"/>
	<text transform="matrix(0.8105 -0.5678 0.5738 0.819 268.8299 678.5674)" class="st13 st14">113</text>
</g>
<g id="Calque_8_2_">
<?php
if($terrains[37]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[37]['numero_lot'].'
Surface: '.$terrains[37]['surface'].'m²
Tarif: '.$terrains[37]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[37]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[37]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="288.8,670.4 264.2,689.1 273.5,701.2 298.1,682.6 	"/>
    <text transform="matrix(0.8105 -0.5678 0.5738 0.819 278.1633 690.9006)" class="st13 st14">114</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="288.8,670.4 264.2,689.1 273.5,701.2 298.1,682.6 	"/>
    <text transform="matrix(0.8105 -0.5678 0.5738 0.819 278.1633 690.9006)" class="st13 st14">114</text>
</a>';
}
?>
</g>
<g id="Calque_7_2_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="301.5,687.1 301.5,687.1 301.5,687.1 298.1,682.6 273.5,701.2 282.8,713.4 307.2,694.7 	"/>
	<text transform="matrix(0.8105 -0.5678 0.5738 0.819 287.1633 703.2339)" class="st13 st14">115</text>
</g>
<g id="Calque_6_2_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="282.8,713.4 288.5,720.9 290.7,722 317.9,708.9 307.2,694.7 	"/>
	<text transform="matrix(0.8105 -0.5678 0.5738 0.819 295.7003 714.9006)" class="st13 st14">116</text>
</g>
<g id="Calque_5_2_">
<?php
if($terrains[27]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[27]['numero_lot'].'
Surface: '.$terrains[27]['surface'].'m²
Tarif: '.$terrains[27]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[27]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[27]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="270.5,645.7 270.4,645.8 279.5,658 279.6,657.9 279.5,658 285.1,665.4 298.1,659.1 283.5,625.2 
	261.9,634.6 270.4,645.8 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 279.9997 649.6998)" class="st13 st14">99</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="270.5,645.7 270.4,645.8 279.5,658 279.6,657.9 279.5,658 285.1,665.4 298.1,659.1 283.5,625.2 
	261.9,634.6 270.4,645.8 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 279.9997 649.6998)" class="st13 st14">99</text>
</a>';
}
?>
</g>
<g id="Calque_4_2_">
<?php
if($terrains[26]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[26]['numero_lot'].'
Surface: '.$terrains[26]['surface'].'m²
Tarif: '.$terrains[26]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[26]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[26]['url'].'">
	<path class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" d="M315.3,650.8l-9.7-23c-5.3,1.1-10.9-1.3-13.9-6.2l-8.2,3.6l14.6,34L315.3,650.8z"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 298.4264 645.6004)" class="st13 st14">98</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<path class="st12" d="M315.3,650.8l-9.7-23c-5.3,1.1-10.9-1.3-13.9-6.2l-8.2,3.6l14.6,34L315.3,650.8z"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 298.4264 645.6004)" class="st13 st14">98</text>
</a>';
}
?>
</g>
<g id="Calque_3_2_">
<?php
if($terrains[25]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[25]['numero_lot'].'
Surface: '.$terrains[25]['surface'].'m²
Tarif: '.$terrains[25]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[25]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[25]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="298.1,659.2 298.1,659.1 285.1,665.4 288.8,670.4 288.9,670.3 288.8,670.4 298.1,682.6 298.1,682.6 
	298.1,682.6 301.5,687.1 325.9,675.9 315.3,650.8 298.1,659.1 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 304.4954 673.5237)" class="st13 st14">97</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="298.1,659.2 298.1,659.1 285.1,665.4 288.8,670.4 288.9,670.3 288.8,670.4 298.1,682.6 298.1,682.6 
	298.1,682.6 301.5,687.1 325.9,675.9 315.3,650.8 298.1,659.1 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 304.4954 673.5237)" class="st13 st14">97</text>
</a>';
}
?>
</g>
<g id="Calque_2_2_">
<?php
if($terrains[24]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[24]['numero_lot'].'
Surface: '.$terrains[24]['surface'].'m²
Tarif: '.$terrains[24]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[24]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[24]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="335,697.7 325.9,675.9 301.5,687.1 307.2,694.7 307.2,694.7 307.2,694.7 317.9,708.9 333.8,701.2 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 317.2436 695.5005)" class="st13 st14">96</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="335,697.7 325.9,675.9 301.5,687.1 307.2,694.7 307.2,694.7 307.2,694.7 317.9,708.9 333.8,701.2 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 317.2436 695.5005)" class="st13 st14">96</text>
</a>';
}
?>
</g>
<g id="Calque_19_1_">
<a xlink:title="Pas Disponible">
	<path class="st12" d="M599.3,440.6l-33.8,15l14,34l25.3-11.4c-0.2-4.5,1.7-8.9,5.3-11.8L599.3,440.6z"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 585.8994 467.3005)" class="st13 st14">46</text>
</g>
<g id="Calque_18_1_">
<?php
if($terrains[6]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[6]['numero_lot'].'
Surface: '.$terrains[6]['surface'].'m²
Tarif: '.$terrains[6]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[6]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[6]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="599.3,440.6 588.7,415 583.2,412.5 553,425 565.5,455.6 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 573.2328 437.6739)" class="st13 st14">47</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="599.3,440.6 588.7,415 583.2,412.5 553,425 565.5,455.6 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 573.2328 437.6739)" class="st13 st14">47</text>
</a>';
}
?>
</g>
<g id="Calque_17_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="531.5,470.7 544.1,500.8 549.2,503.3 579.5,489.7 565.5,455.6 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 552.9563 483.0503)" class="st13 st14">52</text>
</g>
<g id="Calque_16_1_">
<?php
if($terrains[7]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[7]['numero_lot'].'
Surface: '.$terrains[7]['surface'].'m²
Tarif: '.$terrains[7]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[7]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[7]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="553,425 521.5,438.1 519.7,442.4 531.5,470.7 565.5,455.6 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 540.9563 452.3836)" class="st13 st14">53</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="553,425 521.5,438.1 519.7,442.4 531.5,470.7 565.5,455.6 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 540.9563 452.3836)" class="st13 st14">53</text>
</a>';
}
?>
</g>
<g id="Calque_15_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="536,503.7 523.5,474.6 503.9,483 517.5,515.4 534.1,508.2 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 517.6088 497.6006)" class="st13 st14">57</text>
</g>
<g id="Calque_14_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="483.1,492 496.7,524.5 517.5,515.4 503.9,483 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 498.4499 506.651)" class="st13 st14">61</text>
</g>
<g id="Calque_13_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="461.8,501.1 476,533.5 496.7,524.5 483.1,492 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 476.976 515.6006)" class="st13 st14">65</text>
</g>
<g id="Calque_12_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="441.8,509.7 453.8,538.5 459.1,540.9 476,533.5 461.8,501.1 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 456.3998 524.501)" class="st13 st14">70</text>
</g>
<g id="Calque_11_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="523.5,474.6 511.2,445.9 506.8,444.2 490.2,450.4 503.9,483 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 504.8764 468.2673)" class="st13 st14">58</text>
</g>
<g id="Calque_10_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="503.9,483 490.2,450.4 469.1,458.4 483.1,492 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 484.4499 475.7006)" class="st13 st14">62</text>
</g>
<g id="Calque_9_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="483.1,492 469.1,458.4 446.8,466.8 461.8,501.1 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 463.6427 484.3784)" class="st13 st14">66</text>
</g>
<g id="Calque_8_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="446.8,466.8 430.1,473.1 427.9,476.4 441.8,509.7 461.8,501.1 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 441.7917 491.901)" class="st13 st14">71</text>
</g>

<g id="Calque_7_1_">
<?php
if($terrains[12]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[12]['numero_lot'].'
Surface: '.$terrains[12]['surface'].'m²
Tarif: '.$terrains[12]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[12]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[12]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="446.4,542.1 432,508.8 405,520.4 420.1,556.9 444.5,546.7 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 424.0122 535.6799)" class="st13 st14">74</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="446.4,542.1 432,508.8 405,520.4 420.1,556.9 444.5,546.7 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 424.0122 535.6799)" class="st13 st14">74</text>
</a>';
}
?>
</g>
<g id="Calque_6_1_">
<?php
if($terrains[14]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[14]['numero_lot'].'
Surface: '.$terrains[14]['surface'].'m²
Tarif: '.$terrains[14]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[14]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[14]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="376.6,532.5 391.9,568.8 420.1,556.9 405,520.4 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 396.0999 547.5003)" class="st13 st14">78</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="376.6,532.5 391.9,568.8 420.1,556.9 405,520.4 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 396.0999 547.5003)" class="st13 st14">78</text>
</a>';
}
?>
</g>
<g id="Calque_5_1_">
<?php
if($terrains[16]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[16]['numero_lot'].'
Surface: '.$terrains[16]['surface'].'m²
Tarif: '.$terrains[16]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[16]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[16]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="351.6,543.3 365.5,576.4 369.7,578.1 391.9,568.8 376.6,532.5 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 368.6 558.4007)" class="st13 st14">82</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="351.6,543.3 365.5,576.4 369.7,578.1 391.9,568.8 376.6,532.5 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 368.6 558.4007)" class="st13 st14">82</text>	
</a>';
}
?>
</g>
<g id="Calque_4_1_">
<?php
if($terrains[13]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[13]['numero_lot'].'
Surface: '.$terrains[13]['surface'].'m²
Tarif: '.$terrains[13]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[13]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[13]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="432,508.8 419.2,478.9 414.7,478 390.8,486.1 405,520.4 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 409.7 502.9003)" class="st13 st14">75</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="432,508.8 419.2,478.9 414.7,478 390.8,486.1 405,520.4 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 409.7 502.9003)" class="st13 st14">75</text>
</a>';
}
?>
</g>
<g id="Calque_3_1_">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="361.2,496.1 339.5,503.4 336.6,507.3 351.6,543.3 376.6,532.5 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 354.5499 524.3503)" class="st13 st14">83</text>
</g>
<g id="Calque_2_1_">
<?php
if($terrains[15]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[15]['numero_lot'].'
Surface: '.$terrains[15]['surface'].'m²
Tarif: '.$terrains[15]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[15]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[15]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="405,520.4 390.8,486.1 361.2,496.1 376.6,532.5 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 381.9998 513.2003)" class="st13 st14">79</text>	
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="405,520.4 390.8,486.1 361.2,496.1 376.6,532.5 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 381.9998 513.2003)" class="st13 st14">79</text>	
</a>';
}
?>	
</g>

<g id="Calque_72">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="357.9,579.6 347.8,555.9 321,566.8 332.1,593.2 355.9,582.9 	"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 336.5409 577.4707)" class="st13 st14">87</text>
</g>
<g id="Calque_71">
<?php
if($terrains[18]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[18]['numero_lot'].'
Surface: '.$terrains[18]['surface'].'m²
Tarif: '.$terrains[18]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[18]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[18]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="321,566.8 347.8,555.9 336.1,528.3 309.7,540 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 326.5409 551.4707)" class="st13 st14">88</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="321,566.8 347.8,555.9 336.1,528.3 309.7,540 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 326.5409 551.4707)" class="st13 st14">88</text>
</a>';
}
?>
</g>
<g id="Calque_70">
<?php
if($terrains[19]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[19]['numero_lot'].'
Surface: '.$terrains[19]['surface'].'m²
Tarif: '.$terrains[19]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[19]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[19]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="336.1,528.3 328.3,509.9 324.7,508.7 299.7,516.2 309.7,540 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 315.5409 526.4707)" class="st13 st14">89</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="336.1,528.3 328.3,509.9 324.7,508.7 299.7,516.2 309.7,540 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 315.5409 526.4707)" class="st13 st14">89</text>
</a>';
}
?>
</g>
<g id="Calque_69">
<?php
if($terrains[21]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[21]['numero_lot'].'
Surface: '.$terrains[21]['surface'].'m²
Tarif: '.$terrains[21]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[21]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[21]['url'].'">
	<path class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" d="M295.7,577.2l8.5,19.7c3.6,0,7.2,1.5,9.7,4.2l18.2-7.9L321,566.8L295.7,577.2z"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 310.5409 587.4707)" class="st13 st14">93</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<path class="st12" d="M295.7,577.2l8.5,19.7c3.6,0,7.2,1.5,9.7,4.2l18.2-7.9L321,566.8L295.7,577.2z"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 310.5409 587.4707)" class="st13 st14">93</text>
</a>';
}
?>
</g>
<g id="Calque_68">
<?php
if($terrains[22]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[22]['numero_lot'].'
Surface: '.$terrains[22]['surface'].'m²
Tarif: '.$terrains[22]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[22]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[22]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="309.7,540 284.4,551.1 295.7,577.2 321,566.8 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 300.5409 562.4707)" class="st13 st14">94</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="309.7,540 284.4,551.1 295.7,577.2 321,566.8 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 300.5409 562.4707)" class="st13 st14">94</text>
</a>';
}
?>
</g>
<g id="Calque_67">
<?php
if($terrains[23]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[23]['numero_lot'].'
Surface: '.$terrains[23]['surface'].'m²
Tarif: '.$terrains[23]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[23]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[23]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="299.7,516.2 276.3,523.2 274.1,527.4 284.4,551.1 309.7,540 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 288.5409 536.4707)" class="st13 st14">95</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="299.7,516.2 276.3,523.2 274.1,527.4 284.4,551.1 309.7,540 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 288.5409 536.4707)" class="st13 st14">95</text>
</a>';
}
?>
</g>
<g id="Calque_55">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="264.6,422.2 288.8,411.3 282.3,394.3 257.3,405.1 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 269.3006 412.0502)" class="st13 st14">166</text>
</g>
<g id="Calque_54">
<?php
if($terrains[55]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[55]['numero_lot'].'
Surface: '.$terrains[55]['surface'].'m²
Tarif: '.$terrains[55]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[55]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[55]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="250,387.9 219.1,402.1 226.1,418.6 257.3,405.1 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 233.9498 408.6002)" class="st13 st14">163</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="250,387.9 219.1,402.1 226.1,418.6 257.3,405.1 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 233.9498 408.6002)" class="st13 st14">163</text>
</a>';
}
?>
</g>
<g id="Calque_53">
<?php
if($terrains[56]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[56]['numero_lot'].'
Surface: '.$terrains[56]['surface'].'m²
Tarif: '.$terrains[56]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[56]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[56]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="246.8,380.3 210.9,382.6 219.1,402.1 250,387.9 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 225.65 393.4501)" class="st13 st14">164</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="246.8,380.3 210.9,382.6 219.1,402.1 250,387.9 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 225.65 393.4501)" class="st13 st14">164</text>
</a>';
}
?>
</g>
<g id="Calque_52">
<?php
if($terrains[57]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[57]['numero_lot'].'
Surface: '.$terrains[57]['surface'].'m²
Tarif: '.$terrains[57]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[57]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[57]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="250.4,387.8 250,387.9 257.3,405.1 282.3,394.3 276.4,378.5 246.8,380.3 250,387.9 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 261.3167 393.4498)" class="st13 st14">165</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="250.4,387.8 250,387.9 257.3,405.1 282.3,394.3 276.4,378.5 246.8,380.3 250,387.9 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 261.3167 393.4498)" class="st13 st14">165</text>
</a>';
}
?>
</g>
<g id="Calque_51">
<?php
if($terrains[58]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[58]['numero_lot'].'
Surface: '.$terrains[58]['surface'].'m²
Tarif: '.$terrains[58]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[58]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[58]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="271.7,439.1 295.4,428.8 288.8,411.3 264.6,422.2 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 275.9673 429.3004)" class="st13 st14">167</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="271.7,439.1 295.4,428.8 288.8,411.3 264.6,422.2 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 275.9673 429.3004)" class="st13 st14">167</text>
</a>';
}
?>
</g>
<g id="Calque_66">
<a xlink:title="Pas Disponible">
	<path class="st12" d="M292.3,601.2l-9.8-22.9l-21.2,9.3l12.3,31.2l14.3-5.9C287.3,608.6,289,604.1,292.3,601.2z"/>
	<text transform="matrix(0.928 -0.3438 0.3474 0.9377 273.5409 601.4707)" class="st13 st14">100</text>	
</g>
<g id="Calque_65">
<?php
if($terrains[28]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[28]['numero_lot'].'
Surface: '.$terrains[28]['surface'].'m²
Tarif: '.$terrains[28]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[28]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[28]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="234.6,599.3 240.9,607.9 240.9,607.9 254.7,626.7 273.6,618.9 261.3,587.6 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 250.5409 610.4707)" class="st13 st14">101</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="234.6,599.3 240.9,607.9 240.9,607.9 254.7,626.7 273.6,618.9 261.3,587.6 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 250.5409 610.4707)" class="st13 st14">101</text>
</a>';
}
?>
</g>
<g id="Calque_64">
<?php
if($terrains[29]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[29]['numero_lot'].'
Surface: '.$terrains[29]['surface'].'m²
Tarif: '.$terrains[29]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[29]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[29]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="216.3,574.4 221.4,581.4 221.4,581.4 231.2,594.6 231.2,594.6 234.6,599.3 261.3,587.6 261.3,587.6 
	282.5,578.3 270.8,551.2 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 246.5409 579.4707)" class="st13 st14">102</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="216.3,574.4 221.4,581.4 221.4,581.4 231.2,594.6 231.2,594.6 234.6,599.3 261.3,587.6 261.3,587.6 
	282.5,578.3 270.8,551.2 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 246.5409 579.4707)" class="st13 st14">102</text>
</a>';
}
?>
</g>
<g id="Calque_63">
<?php
if($terrains[30]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[30]['numero_lot'].'
Surface: '.$terrains[30]['surface'].'m²
Tarif: '.$terrains[30]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[30]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[30]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';"  points="270.8,551.2 261.7,530.1 257.2,528.7 229.8,536.2 241.8,563.6 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 246.5409 549.4707)" class="st13 st14">103</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12"  points="270.8,551.2 261.7,530.1 257.2,528.7 229.8,536.2 241.8,563.6 	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 246.5409 549.4707)" class="st13 st14">103</text>
</a>';
}
?>
</g>
<g id="Calque_62">
<?php
if($terrains[31]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[31]['numero_lot'].'
Surface: '.$terrains[31]['surface'].'m²
Tarif: '.$terrains[31]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[31]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[31]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="201.1,553.7 211.3,567.6 211.3,567.6 216.3,574.4 241.8,563.6 229.8,536.2 195.2,545.6 201.1,553.7 	
	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 216.5409 559.4707)" class="st13 st14">104</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="201.1,553.7 211.3,567.6 211.3,567.6 216.3,574.4 241.8,563.6 229.8,536.2 195.2,545.6 201.1,553.7 	
	"/>
    <text transform="matrix(0.928 -0.3438 0.3474 0.9377 216.5409 559.4707)" class="st13 st14">104</text>
</a>';
}
?>
</g>
<g id="Calque_61">
<?php
if($terrains[35]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[35]['numero_lot'].'
Surface: '.$terrains[35]['surface'].'m²
Tarif: '.$terrains[35]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[35]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[35]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="219,625.3 228.3,637.6 254.7,626.7 240.9,607.9 	"/>
    <text transform="matrix(0.8078 -0.5717 0.5777 0.8163 231.7452 629.5212)" class="st13 st14">110</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="219,625.3 228.3,637.6 254.7,626.7 240.9,607.9 	"/>
    <text transform="matrix(0.8078 -0.5717 0.5777 0.8163 231.7452 629.5212)" class="st13 st14">110</text>
</a>';
}
?>
</g>
<g id="Calque_60">
<?php
if($terrains[34]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[34]['numero_lot'].'
Surface: '.$terrains[34]['surface'].'m²
Tarif: '.$terrains[34]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[34]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[34]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="231.2,594.6 208.7,611.6 219,625.3 240.9,607.9 	"/>
    <text transform="matrix(0.8078 -0.5717 0.5777 0.8163 221.7452 615.5212)" class="st13 st14">109</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="231.2,594.6 208.7,611.6 219,625.3 240.9,607.9 	"/>
    <text transform="matrix(0.8078 -0.5717 0.5777 0.8163 221.7452 615.5212)" class="st13 st14">109</text>
</a>';
}
?>
</g>
<g id="Calque_59">
<?php
if($terrains[33]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[33]['numero_lot'].'
Surface: '.$terrains[33]['surface'].'m²
Tarif: '.$terrains[33]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[33]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[33]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="221.4,581.4 198.6,598.3 208.7,611.6 231.2,594.6 	"/>
    <text transform="matrix(0.8078 -0.5717 0.5777 0.8163 211.7452 601.5212)" class="st13 st14">108</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="221.4,581.4 198.6,598.3 208.7,611.6 231.2,594.6 	"/>
    <text transform="matrix(0.8078 -0.5717 0.5777 0.8163 211.7452 601.5212)" class="st13 st14">108</text>
</a>';
}
?>
</g>
<g id="Calque_58">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="211.3,567.6 188.4,584.8 198.6,598.3 221.4,581.4 	"/>
	<text transform="matrix(0.8078 -0.5717 0.5777 0.8163 201.7452 588.5212)" class="st13 st14">107</text>
</g>
<g id="Calque_57">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="201.1,553.7 178.2,571.2 188.4,584.8 211.3,567.6 	"/>
	<text transform="matrix(0.8078 -0.5717 0.5777 0.8163 191.7452 574.5212)" class="st13 st14">106</text>
</g>
<g id="Calque_56">
<?php
if($terrains[32]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[32]['numero_lot'].'
Surface: '.$terrains[32]['surface'].'m²
Tarif: '.$terrains[32]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[32]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[32]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="195.2,545.6 179.9,549.8 175.7,567.9 178.2,571.2 201.1,553.7 	"/>
    <text transform="matrix(0.8078 -0.5717 0.5777 0.8163 183.7452 562.5212)" class="st13 st14">105</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="195.2,545.6 179.9,549.8 175.7,567.9 178.2,571.2 201.1,553.7 	"/>
    <text transform="matrix(0.8078 -0.5717 0.5777 0.8163 183.7452 562.5212)" class="st13 st14">105</text>
</a>';
}
?>
</g>
<g id="Calque_50">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="279,456 302,446.3 295.4,428.8 271.7,439.1 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 282.3004 446.5504)" class="st13 st14">168</text>
</g>
<g id="Calque_49">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="286.2,473.1 308.4,463.4 302,446.3 279,456 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 290.1666 464.098)" class="st13 st14">169</text>
</g>
<g id="Calque_48">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="254.9,486.7 258.6,495.5 261.6,497.1 292.5,488 286.2,473.1 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 269.3004 490.7709)" class="st13 st14">158</text>
</g>
<g id="Calque_47">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="313.8,477.6 308.4,463.4 286.2,473.1 292.5,488 311.4,482.4 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 296.9671 480.3002)" class="st13 st14">170</text>
</g>
<g id="Calque_46">
<?php
if($terrains[51]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[51]['numero_lot'].'
Surface: '.$terrains[51]['surface'].'m²
Tarif: '.$terrains[51]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[51]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[51]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="279,456 247.5,469.3 254.9,486.7 286.2,473.1 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 262.9 475.2003)" class="st13 st14">159</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="279,456 247.5,469.3 254.9,486.7 286.2,473.1 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 262.9 475.2003)" class="st13 st14">159</text>
</a>';
}
?>
</g>
<g id="Calque_45">
<?php
if($terrains[52]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[52]['numero_lot'].'
Surface: '.$terrains[52]['surface'].'m²
Tarif: '.$terrains[52]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[52]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[52]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="271.7,439.1 240.5,452.7 247.5,469.3 279,456 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 255.7 458.7001)" class="st13 st14">160</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="271.7,439.1 240.5,452.7 247.5,469.3 279,456 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 255.7 458.7001)" class="st13 st14">160</text>
</a>';
}
?>
</g>
<g id="Calque_44">
<?php
if($terrains[54]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[54]['numero_lot'].'
Surface: '.$terrains[54]['surface'].'m²
Tarif: '.$terrains[54]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[54]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[54]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="257.3,405.1 226.1,418.6 233.5,436.2 264.6,422.2 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 240.4998 425.2003)" class="st13 st14">162</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="257.3,405.1 226.1,418.6 233.5,436.2 264.6,422.2 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 240.4998 425.2003)" class="st13 st14">162</text>
</a>';
}
?>
</g>
<g id="Calque_43">
<?php
if($terrains[53]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[53]['numero_lot'].'
Surface: '.$terrains[53]['surface'].'m²
Tarif: '.$terrains[53]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[53]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[53]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="264.6,422.2 233.5,436.2 240.5,452.7 271.7,439.1 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 247.4998 441.8998)" class="st13 st14">161</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="264.6,422.2 233.5,436.2 240.5,452.7 271.7,439.1 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 247.4998 441.8998)" class="st13 st14">161</text>
</a>';
}
?>
</g>
<g id="Calque_42">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="193,425 211.8,417.4 208.2,408.8 189.5,416.4 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 196.3499 420.6503)" class="st13 st14">148</text>
</g>
<g id="Calque_41">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="189.5,416.4 208.2,408.8 204.5,399.9 186,408 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 192.9998 412.8002)" class="st13 st14">147</text>
</g>
<g id="Calque_40">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="196.4,433 214.9,424.9 211.8,417.4 193,425 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 200.0504 428.9486)" class="st13 st14">149</text>
</g>
<g id="Calque_39">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="239.6,483.6 220.8,491.8 226.3,505 246.2,499.5 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 228.9503 498.6002)" class="st13 st14">157</text>
</g>
<g id="Calque_38">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="200.7,391.1 197.6,383.6 176.2,384.5 182.3,399.1 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 184.3499 394.4503)" class="st13 st14">145</text>
</g>
<g id="Calque_37">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="186,408 204.5,399.9 200.7,391.1 182.3,399.1 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 189.4998 403.5504)" class="st13 st14">146</text>
</g>
<g id="Calque_36">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="210.2,466.4 228.9,458.2 225.5,450 206.7,457.9 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 213.4 462.1503)" class="st13 st14">153</text>
</g>
<g id="Calque_35">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="217.2,483 235.9,474.9 232.4,466.5 213.7,474.6 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 220.7999 479.1002)" class="st13 st14">155</text>
</g>
<g id="Calque_34">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="213.7,474.6 232.4,466.5 228.9,458.2 210.2,466.4 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 217.2 470.1998)" class="st13 st14">154</text>
</g>
<g id="Calque_33">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="220.8,491.8 239.6,483.6 235.9,474.9 217.2,483 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 224.8001 487.4)" class="st13 st14">156</text>
</g>
<g id="Calque_32">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="203.4,449.8 222,441.7 218.3,432.8 199.7,440.9 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 206.7 445.3502)" class="st13 st14">151</text>
</g>
<g id="Calque_31">
<?php
if($terrains[50]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[50]['numero_lot'].'
Surface: '.$terrains[50]['surface'].'m²
Tarif: '.$terrains[50]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[50]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[50]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="176.2,384.5 155.6,385.3 153.5,388.5 161.7,408.1 182.3,399.1 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 163.9537 399.5504)" class="st13 st14">144</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="176.2,384.5 155.6,385.3 153.5,388.5 161.7,408.1 182.3,399.1 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 163.9537 399.5504)" class="st13 st14">144</text>
</a>';
}
?>
</g>
<g id="Calque_30">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="206.7,457.9 225.5,450 222,441.7 203.4,449.8 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 210.1998 453.7484)" class="st13 st14">152</text>
</g>
<g id="Calque_29">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="199.7,440.9 218.3,432.8 214.9,424.9 196.4,433 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 203.4 436.9503)" class="st13 st14">150</text>
</g>
<g id="Calque_28">
<?php
if($terrains[49]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[49]['numero_lot'].'
Surface: '.$terrains[49]['surface'].'m²
Tarif: '.$terrains[49]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[49]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[49]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';"   points="213.7,474.6 193.3,483.5 196.9,491.9 217.2,483 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 200.95 487.65)" class="st13 st14">134</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="213.7,474.6 193.3,483.5 196.9,491.9 217.2,483 	"/>
    <text transform="matrix(0.9239 -0.3825 0.3825 0.9239 200.95 487.65)" class="st13 st14">134</text>
</a>';
}
?>
</g>
<g id="Calque_27">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="203.4,449.8 182.9,458.7 186.2,466.5 206.7,457.9 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 190.4503 462.2875)" class="st13 st14">137</text>
</g>
<g id="Calque_26">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="206.7,457.9 186.2,466.5 189.9,475.2 210.2,466.4 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 194.8001 470.5502)" class="st13 st14">136</text>
</g>
<g id="Calque_25">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="210.2,466.4 189.9,475.2 193.3,483.5 213.7,474.6 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 198.1998 479.1002)" class="st13 st14">135</text>
</g>
<g id="Calque_24">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="217.2,483 196.9,491.9 200.5,500.6 220.8,491.8 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 204.5001 495.9)" class="st13 st14">133</text>
</g>
<g id="Calque_23">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="200.5,500.6 203.3,507.2 209.1,509.7 226.3,505 220.8,491.8 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 209.1378 506.4283)" class="st13 st14">132</text>
</g>
<g id="Calque_22">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="196.4,433 175.9,441.9 179.2,449.8 199.7,440.9 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 183.1502 445.6976)" class="st13 st14">139</text>
</g>
<g id="Calque_21">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="186,408 165.4,416.9 168.7,424.9 189.5,416.4 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 173.2501 420.65)" class="st13 st14">142</text>
</g>
<g id="Calque_20">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="199.7,440.9 179.2,449.8 182.9,458.7 203.4,449.8 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 187.8001 453.7487)" class="st13 st14">138</text>
</g>
<g id="Calque_19">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="189.5,416.4 168.7,424.9 172.3,433.4 193,425 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 176.9 428.8004)" class="st13 st14">141</text>
</g>
<g id="Calque_18">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="182.3,399.1 161.7,408.1 165.4,416.9 186,408 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 169.4437 412.0502)" class="st13 st14">143</text>
</g>
<g id="Calque_17">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="193,425 172.3,433.4 175.9,441.9 196.4,433 	"/>
	<text transform="matrix(0.9239 -0.3825 0.3825 0.9239 180.4498 437.5004)" class="st13 st14">140</text>
</g>
<g id="Calque_16">
<?php
if($terrains[42]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[42]['numero_lot'].'
Surface: '.$terrains[42]['surface'].'m²
Tarif: '.$terrains[42]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[42]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[42]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';"  points="94.6,390 94.5,390.1 104.2,410.9 147.4,392.4 145.8,388.4 136.9,384.9 90,380.5 94.5,390.1 	"/>
    <text transform="matrix(1 0 0 1 111.5 395.1665)" class="st13 st14">125</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12"  points="94.6,390 94.5,390.1 104.2,410.9 147.4,392.4 145.8,388.4 136.9,384.9 90,380.5 94.5,390.1 	"/>
    <text transform="matrix(1 0 0 1 111.5 395.1665)" class="st13 st14">125</text>
</a>';
}
?>
</g>
<g id="Calque_15">
<?php
if($terrains[43]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[43]['numero_lot'].'
Surface: '.$terrains[43]['surface'].'m²
Tarif: '.$terrains[43]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[43]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[43]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';"   points="114.9,433.6 130.2,427 130.2,427 130.2,427 157,415.6 147.4,392.4 104.2,410.9 	"/>
    <text transform="matrix(1 0 0 1 123.5 416)" class="st13 st14">126</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12"   points="114.9,433.6 130.2,427 130.2,427 130.2,427 157,415.6 147.4,392.4 104.2,410.9 	"/>
    <text transform="matrix(1 0 0 1 123.5 416)" class="st13 st14">126</text>
</a>';
}
?>
</g>
<g id="Calque_14">
<?php
if($terrains[41]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[41]['numero_lot'].'
Surface: '.$terrains[41]['surface'].'m²
Tarif: '.$terrains[41]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[41]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[41]['url'].'">
	<path class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" d="M90,380.5L43.1,376c-6.1-0.6-9.9,6.3-6.3,11.2l16,21.5l41.6-18.6L90,380.5z"/>
    <text transform="matrix(1 0 0 1 55 392)" class="st13 st14">124</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<path class="st12" d="M90,380.5L43.1,376c-6.1-0.6-9.9,6.3-6.3,11.2l16,21.5l41.6-18.6L90,380.5z"/>
    <text transform="matrix(1 0 0 1 55 392)" class="st13 st14">124</text>
</a>';
}
?>
</g>
<g id="Calque_13">
<?php
if($terrains[46]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[46]['numero_lot'].'
Surface: '.$terrains[46]['surface'].'m²
Tarif: '.$terrains[46]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[46]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[46]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';"  points="155.8,487.1 181.9,475.9 174.2,457.4 148,468.6 	"/>
    <text transform="matrix(1 0 0 1 159.1665 474.5)" class="st13 st14">129</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12"  points="155.8,487.1 181.9,475.9 174.2,457.4 148,468.6 	"/>
    <text transform="matrix(1 0 0 1 159.1665 474.5)" class="st13 st14">129</text>
</a>';
}
?>
</g>
<g id="Calque_12">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="94.5,390.1 52.9,408.7 66.6,427.1 104.2,410.9 	"/>
    <text transform="matrix(1 0 0 1 72.6665 411.3335)" class="st13 st14">123</text>
</g>
<g id="Calque_11">
<?php
if($terrains[45]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[45]['numero_lot'].'
Surface: '.$terrains[45]['surface'].'m²
Tarif: '.$terrains[45]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[45]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[45]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';"  points="148,468.6 174.2,457.4 166.6,438.9 140.1,450.2 	"/>
    <text transform="matrix(1 0 0 1 151.5 456.5)" class="st13 st14">128</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12"  points="148,468.6 174.2,457.4 166.6,438.9 140.1,450.2 	"/>
    <text transform="matrix(1 0 0 1 151.5 456.5)" class="st13 st14">128</text>
</a>';
}
?>
</g>
<g id="Calque_10">
<?php
if($terrains[44]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[44]['numero_lot'].'
Surface: '.$terrains[44]['surface'].'m²
Tarif: '.$terrains[44]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[44]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[44]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';"  points="140.1,450.2 166.6,438.9 157,415.6 130.2,427 	"/>
    <text transform="matrix(1 0 0 1 143 435.8335)" class="st13 st14">127</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12"   points="140.1,450.2 166.6,438.9 157,415.6 130.2,427 	"/>
    <text transform="matrix(1 0 0 1 143 435.8335)" class="st13 st14">127</text>
</a>';
}
?>
</g>
<g id="Calque_9">
<?php
if($terrains[47]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[47]['numero_lot'].'
Surface: '.$terrains[47]['surface'].'m²
Tarif: '.$terrains[47]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[47]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[47]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="163.7,505.5 189.6,494.5 181.9,475.9 155.8,487.1 	"/>
    <text transform="matrix(1 0 0 1 166.8335 493.6665)" class="st13 st14">130</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="163.7,505.5 189.6,494.5 181.9,475.9 155.8,487.1 	"/>
    <text transform="matrix(1 0 0 1 166.8335 493.6665)" class="st13 st14">130</text>
</a>';
}
?>
</g>
<g id="Calque_8">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="134.4,518 141,526.9 169.4,519 163.7,505.5 	"/>
    <text transform="matrix(1 0 0 1 146.3335 520)" class="st13 st14">117</text>
</g>
<g id="Calque_7">
<?php
if($terrains[38]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[38]['numero_lot'].'
Surface: '.$terrains[38]['surface'].'m²
Tarif: '.$terrains[38]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[38]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[38]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="155.8,487.1 122.1,501.5 134.4,518 163.7,505.5 	"/>
    <text transform="matrix(1 0 0 1 138 505.5)" class="st13 st14">118</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="155.8,487.1 122.1,501.5 134.4,518 163.7,505.5 	"/>
    <text transform="matrix(1 0 0 1 138 505.5)" class="st13 st14">118</text>
</a>';
}
?>

</g>
<g id="Calque_6">
<?php
if($terrains[48]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[48]['numero_lot'].'
Surface: '.$terrains[48]['surface'].'m²
Tarif: '.$terrains[48]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[48]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[48]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="195.2,508.2 189.6,494.5 163.7,505.5 169.4,519 192.7,512.6 	"/>
    <text transform="matrix(1 0 0 1 174.3335 510.5)" class="st13 st14">131</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="195.2,508.2 189.6,494.5 163.7,505.5 169.4,519 192.7,512.6 	"/>
    <text transform="matrix(1 0 0 1 174.3335 510.5)" class="st13 st14">131</text>
</a>';
}
?>
</g>
<g id="Calque_5">
<?php
if($terrains[39]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[39]['numero_lot'].'
Surface: '.$terrains[39]['surface'].'m²
Tarif: '.$terrains[39]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[39]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[39]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="140.1,450.2 97.4,468.4 109.7,485 148,468.6 	"/>
    <text transform="matrix(1 0 0 1 117.8335 470.6665)" class="st13 st14">120</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="140.1,450.2 97.4,468.4 109.7,485 148,468.6 	"/>
    <text transform="matrix(1 0 0 1 117.8335 470.6665)" class="st13 st14">120</text>
</a>';
}
?>
</g>
<g id="Calque_4">
<a xlink:title="Pas Disponible">
	<polygon class="st12" points="148,468.6 109.7,485 122.1,501.5 155.8,487.1 	"/>
    <text transform="matrix(1 0 0 1 128.3335 487.8335)" class="st13 st14">119</text>
</g>
<g id="Calque_3">
<?php
if($terrains[40]['disponibility']==1){
echo '<a xlink:title="Lot N°: '.$terrains[40]['numero_lot'].'
Surface: '.$terrains[40]['surface'].'m²
Tarif: '.$terrains[40]['tarif'].' MAD/m²/Mois
Charge: '.$terrains[40]['charge'].'0 MAD/m²/Mois" xlink:href="'.$terrains[40]['url'].'">
	<polygon class="st12" style="fill:#92c64e;" onmouseover="this.style.fill=\'#6f963b\';" onmouseout="this.style.fill=\'#92c64e\';" points="130.2,427 114.9,433.6 115,433.8 114.9,433.6 81.9,447.7 97.4,468.4 140.1,450.2 	"/>
    <text transform="matrix(1 0 0 1 105.3335 450.3335)" class="st13 st14">121</text>
</a>';
}else{
	echo '<a xlink:title="Pas Disponible">
	<polygon class="st12" points="130.2,427 114.9,433.6 115,433.8 114.9,433.6 81.9,447.7 97.4,468.4 140.1,450.2 	"/>
    <text transform="matrix(1 0 0 1 105.3335 450.3335)" class="st13 st14">121</text>
</a>';
}
?>
</g>
<g id="Calque_2">

<a xlink:title="Pas Disponible">
	<polygon class="st12" points="104.2,410.9 66.6,427.1 81.9,447.7 114.9,433.6 	"/>
    <text transform="matrix(1 0 0 1 85.3335 431.6665)" class="st13 st14">122</text>
    
</g>
</svg>
</div>
</body>
</html>