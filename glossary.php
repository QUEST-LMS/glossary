<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    
 <?php
include('admin/dbcon.php');
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM student WHERE username = '$username'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
<title></title>
	
	
</head>
<body>

		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('student_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
				
									
					     <ul class="breadcrumb">
	
    <link href="facebox.css" media="screen" rel="stylesheet" type="text/css" />
   

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.watermarkinput.js"></script> 
	<!-- Custom scrollbars CSS -->
	<link href="js/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.mousewheel.min.js"></script>
     <script src="js/jquery.min.js"></script>
     <script>!window.jQuery && document.write(unescape('%3Cscript src="jquery/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>
     
     
     <script src="./jquery/jquery-ui.min.js"></script>
	<script>!window.jQuery.ui && document.write(unescape('%3Cscript src="jquery/jquery-ui-1.8.21.custom.min.js"%3E%3C/script%3E'))</script>
	<!-- custom scrollbars plugin -->
	<script src="custom-scrollbar-plugin/jquery.mCustomScrollbar.js"></script>
     
	<script src="facebox.js" type="text/javascript"></script>
	<script type="text/javascript" src="jquery.watermarkinput.js"></script>

<script type="text/javascript">
$(document).ready(function(){

$(".search").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

if(searchbox=='')
{
}
else
{

$.ajax({
type: "POST",
url: "searches.php",
data: dataString,
cache: false,
success: function(html)
{

$("#display").html(html).show();
  
  
  }




});
}return false;    


});
});

jQuery(function($){
   $("#searchbox").Watermark("Search");
   });
</script>
<body>

<?php error_reporting(0);?>
<?php $id=$_GET['Keyword'];?>

<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-th"></i> Glossary</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
                 

<div style="width:850px; height:600px; margin-top:20px ">
	
<div style="width:950px; height:600px; ">

<div style="letter-spacing: -1px;width: 840px; height:30px; border:1px solid; color:#39F; font-weight:bold font-size:16px; -webkit-border-top-left-radius: 10px;-webkit-border-bottom-left-radius: 0px;
	 -webkit-border-top-right-radius: 10px;-webkit-border-bottom-right-radius: 0px; -moz-box-shadow:0px 0px 10px #39F; -webkit-box-shadow:0px 0px 10px #000 ;">
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold font-weight:bold" rel='fancybox' href=./glossary.php?Keyword=a>A</a>

&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=b>B</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=c>C</a>

&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=d>D</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=e>E</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=f>F</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=g>G</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=h>H</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=i>I</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=j>J</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=k>K</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=l>L</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=m>M</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=n>N</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=o>O</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=p>P</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=q>Q</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=r>R</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=s>S</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=t>T</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=u>U</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=v>V</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=w>W</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=x>X</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold"rel='fancybox' href=./glossary.php?Keyword=y>Y</a>
&nbsp;&nbsp;&nbsp;&nbsp;<a style="color:#33F; font-weight:bold" rel='fancybox' href=./glossary.php?Keyword=z>Z</a>
</div>
<div style="width:225px; height:550px;  margin-left:0px; margin-top:3px; background:#39F; color:#090; font-size:20px;">

<div id="content_1" style="width:200px; height:540px;  margin-left:0px; margin-top:3px;  margin-left:4px; color:#090; 
  font-size:30px; overflow:auto; padding-left: 15px; border:1px solid: #E5E5E5;">
<!--background-image:url(bg.jpg); -->
<br />
 <?php  
 		
			$id=$_GET['Keyword'];
        if($id=='')
	{
		

	$id='a';
	
	 $sql = "SELECT g_id,name from cai_glossary order by name " ;



//echo $sql . "<br />";
$select = mysql_query($sql);

while($row = mysql_fetch_assoc($select))
{
		if($row >=1){
    echo "<tr>";
  
	echo "<td class='s'><a  style='color:#fff;  font-size:16px; font-weight:bold; margin-top:10px; text-decoration:none;' id='link' rel='facebox'  href=discription.php?disc=" . $row['g_id'] . "> " . $row['name']. "</a></td><br><br>";
	
    echo "</tr>";
  
 
}}
	
	
	
	
	
	
	
	}else{
          ?>
         
<?php $sql = "SELECT g_id,name from cai_glossary where keyword='$id' " ;



//echo $sql . "<br />";
$select = mysql_query($sql);

while($row = mysql_fetch_assoc($select))
{
		if($row >=1){
    echo "<tr>";
  
	echo "<td ><div class='s'><a style='color:#fff; text-decoration:none; font-size:16px; font-weight:bold; margin-top:10px;' id='link' rel='facebox'  href=discription.php?disc=" . $row['g_id'] . "></div> " . $row['name']. "</a></td><br><br>";
	
    echo "</tr>";
  
 
}
else  {
			echo "<td><a style='color:#fff;  text-decoration:none;'; id='link' rel='facebox' href=./discription.php?id='" ."nono". "</a></td>";
		}}}
	
?>

</div></div>


<div style="width:500px; height:180px;position:fixed;  margin-left:240px; margin-top:-580px; border:0px solid; color:#333"><div >
<div style="width:200px; height:30px; margin:20px 250px 10px; float:right;">
<br /></div>
</div>
<div id="display" style="margin-right:-0px;" >
</div>
 
</div>


                  </div>
				</div><!--/span-->
			</div><!--/row-->
	

<script>
		(function($){
			$(window).load(function(){
				$("#content_1").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
			});
		})(jQuery);
		</script>
	

</body>
  
               
<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
</body> 
</html>
