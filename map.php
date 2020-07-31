<?php
$locations[] = array(1, 'จังหวัดบุรีรัมย์', '15.0335724', '102.9311442', 15);//15.0335724,102.9311442
$locations[] = array(2, 'จังหวัดลพบุรี', '15.2009199', '100.3609918', 15);//15.2009199,100.3609918
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Google Map API</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
<style type="text/css">
/* css สำหรับ div คลุม google map อีกที */
/* css กำหนดความกว้าง ความสูงของแผนที่ */
#map_canvas { 
    height:600px;
    margin:auto;
/*  margin-top:100px;*/
}
</style>

  </head>
  <body>
  <div class="container">
   <!-- <h1><a href="index.php">Google Map API 3</a></h1>-->
	
	<div class="row mb-5">
		<div class="col">
			<div id="map_canvas"></div>
		</div>
	</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
function detectBrowser() {
  var useragent = navigator.userAgent;
  var mapdiv = document.getElementById("map_canvas");

  if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1 ) {
//    mapdiv.style.width = '100%';
//    mapdiv.style.height = '100%';
  } else {
/*    mapdiv.style.width = '600px';
    mapdiv.style.height = '800px';
*/  }
}


var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้
var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น
var infowindow=[]; // กำหนดตัวแปรสำหรับเก็บตัว popup แสดงรายละเอียดสถานที่  
var infowindowTmp; // กำหนดตัวแปรสำหรับเก็บลำดับของ infowindow ที่เปิดล่าสุด  
var my_Marker=[]; // กำหนดตัวแปรสำหรับเก็บตัว marker เป็นตัวแปร array  
var markerID=[];  // ประกาศเป็น arrray สำหรับเก็บค่า id
var markerName=[];  // ประกาศเป็น arrray สำหรับเก็บค่า name
var markerLat=[]; // ประกาศเป็น arrray สำหรับเก็บ latitude
var markerLng=[]; // ประกาศเป็น arrray สำหรับเก็บ longitude
var markerDate=[]; // ประกาศเป็น arrray สำหรับเก็บ datetime
var markerIcons=[]; // ประกาศเป็น arrray สำหรับเก็บ icon
var markerLatLng=[]; // ประกาศเป็น arrray สำหรับเก็บ พิกัดในรูปแบบของ google map
var contentData=[]; // ประกาศเป็น arrray สำหรับเก็บ เนื้อหาของแต่ละ icon
var image1=[]; // ประกาศเป็น arrray สำหรับเก็บ icons ในรูปแบบของ google map

function initialize() { // ฟังก์ชันแสดงแผนที่
	detectBrowser();
    GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM
    // กำหนดจุดเริ่มต้นของแผนที่
    var my_Latlng  = new GGM.LatLng(15.3469106143088,100.93277984375004);
    // กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas
    var my_DivObj=$("#map_canvas")[0]; 
    // กำหนด Option ของแผนที่
    var myOptions = {
        zoom: 7, // กำหนดขนาดการ zoom
        center: my_Latlng , // กำหนดจุดกึ่งกลาง
        mapTypeId:GGM.MapTypeId.ROADMAP, // กำหนดรูปแบบแผนที่
        mapTypeControlOptions:{ // การจัดรูปแบบส่วนควบคุมประเภทแผนที่
            position:GGM.ControlPosition.TOP, // จัดตำแหน่ง
            style:GGM.MapTypeControlStyle.DROPDOWN_MENU // จัดรูปแบบ style 
        }
    };
    map = new GGM.Map(my_DivObj,myOptions);// สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map

<?php foreach($locations as $index=>$value){ ?> 
	markerName[<?php echo $index; ?>]='<?php echo $value[1]; ?>'; // นำค่าต่างๆ มาเก็บไว้ในตัวแปรไว้ใช้งาน      
	markerLat[<?php echo $index; ?>]=<?php echo $value[2]; ?>; // นำค่าต่างๆ มาเก็บไว้ในตัวแปรไว้ใช้งาน   
	markerLng[<?php echo $index; ?>]=<?php echo $value[3]; ?>; // นำค่าต่างๆ มาเก็บไว้ในตัวแปรไว้ใช้งาน         
	//markerIcons[<?php echo $index; ?>]='<i class="material-icons">add_location</i>'; // นำค่าต่างๆ มาเก็บไว้ในตัวแปรไว้ใช้งาน           
	markerLatLng[<?php echo $index; ?>]=new GGM.LatLng(markerLat[<?php echo $index; ?>],markerLng[<?php echo $index; ?>]);  
//	image1[<?php echo $index; ?>] = new GGM.MarkerImage(markerIcons[<?php echo $index; ?>],  // url ภาพ ใส่แบบเต็ม หรือแบบ path ก็ได้  
//		new GGM.Size(50, 60),  //กำหนดความกว้าง สูงของ icons  
//		new GGM.Point(0,0),  // จุดเริ่มต้นของรูปภาพ ใช้ 0,0  
//		new GGM.Point(25, 60)  // จุดปลายของพิกัดเทียบกับรูป ปกติ (0,ความสูงของรูป) หรือ (ครึ่งหนึ่งความกว้างของรูป,ความสูงของรูป)  
//	);              
				 
	my_Marker[<?php echo $index; ?>] = new GGM.Marker({ // สร้างตัว marker  
		position:markerLatLng[<?php echo $index; ?>],  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง  
		//icon: image1[<?php echo $index; ?>], // เปลี่ยนเป็น icon ตามรูปภาพที่ดึงจาก xml 
		map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map  
		title:markerName[<?php echo $index; ?>] // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ  
	});  
	 
	// จัดรูปแบบ เนื้อหาใน infowndow
	contentData[<?php echo $index; ?>]=markerName[<?php echo $index; ?>]+"<br/>"+markerLat[<?php echo $index; ?>]+","+markerLng[<?php echo $index; ?>];
	infowindow[<?php echo $index; ?>] = new GGM.InfoWindow({// สร้าง infowindow ของแต่ละ marker เป็นแบบ array  
		content: contentData[<?php echo $index; ?>]+"<br /><a href='https://www.google.com/maps/search/"+markerLat[<?php echo $index; ?>]+","+markerLng[<?php echo $index; ?>]+"/@"+markerLat[<?php echo $index; ?>]+","+markerLng[<?php echo $index; ?>]+",13z?ht=th' target='_blank'>คลิกเพื่อดูใน Google Maps</a>" // แสดงเนื้อหา ของแต่ละ icons
	});                                 
	
	GGM.event.addListener(my_Marker[<?php echo $index; ?>], "click", function(){ // เมื่อคลิกตัว marker แต่ละตัว  
		if(infowindowTmp!=null){ // ให้ตรวจสอบว่ามี infowindow ตัวไหนเปิดอยู่หรือไม่  
			infowindow[infowindowTmp].close();  // ถ้ามีให้ปิด infowindow ที่เปิดอยู่  
		}  
		infowindow[<?php echo $index; ?>].open(map,my_Marker[<?php echo $index; ?>]); // แสดง infowindow ของตัว marker ที่คลิก  
		infowindowTmp=<?php echo $index; ?>; // เก็บ infowindow ที่เปิดไว้อ้างอิงใช้งาน  
	});                     
	 
	//  console.log($(this).find("id").text());  
<?php } ?>
}


$(function(){
    // โหลด สคริป google map api เมื่อเว็บโหลดเรียบร้อยแล้ว
    // ค่าตัวแปร ที่ส่งไปในไฟล์ google map api
    // v=3.2&sensor=false&language=th&callback=initialize
    //  v เวอร์ชัน่ 3.2
    //  sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false
    //  language ภาษา th ,en เป็นต้น
    //  callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize  
    $("<script/>", {
      "type": "text/javascript",
      src: "//maps.google.com/maps/api/js?language=th&callback=initialize&key=AIzaSyDBChJMIntmWnIeqecPR8xGs7ryUghXGJ8"
    }).appendTo("body");    
});
</script>  

  </body>
</html>