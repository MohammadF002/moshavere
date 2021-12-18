<?php



	$question = 'این یک پرسش نمونه است';
$msg = 'این یک پاسخ نمونه است';

		$str = file_get_contents("people.json");
		$data=(json_decode(utf8_encode($str),true));
	    $ak=array_keys($data);
		$av=array_values($data);
		$st=array_rand($ak);		

		$en_name=  $ak[$st];
        $fa_name =( utf8_decode($data[ $en_name]));	 

if(isset($_GET['question']))
{
	    $question=$_GET['question'];
	if(isset($_GET['en_name']))	
		 $en_name=$_GET['en_name'];

	$file=fopen("newfile.txt","r");
		$en_name=fgets($file);
		$fa_name =( utf8_decode($data[ $en_name]));
	fclose($file);


$fileques=fopen("messages.txt","r");
   $rand=rand(1,15);
   for($i=0;$i<=$rand;$i++)
   {
	  $quest=fgets($fileques);
	   
   }
$msg= $quest;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styles/default.css" charset="" rel="stylesheet" >
    <title>مشاوره بزرگان</title>
</head>
<body>
<p id="copyright">تهیه شده برای درس کارگاه کامپیوتر،دانشکده کامییوتر، دانشگاه صنعتی شریف</p>
<div id="wrapper">
    <div id="title">
        <span id="label">پرسش:</span>
        <span id="question"><?php  echo $question ?></span>
    </div>
    <div id="container">
        <div id="message">
            <p><?php echo $msg ?></p>
        </div>
        <div id="person">
            <div id="person">
                <img src= "images/people/<?php echo "$en_name.jpg" ?>"/>
                <p id="person-name"><?php echo $fa_name ?></p>
            </div>
        </div>
    </div>
    <div id="new-q">
				<form method="get" action="index.php?question=$question&en_name=$en_name&fn2=$fa_name">
سوال
              <input type="text" name="question" value="<?php echo $question ?>" maxlength="150" placeholder="..."/>
را از
<select name="person">

	
	 
	    <option value=<?php echo "$en_name"?>   >  <?php echo "$fa_name";?></option>
	<?php
	for($i=0;$i<=15;$i++) 
	{
	?>
             
                <option value="<?php print_r(($ak[$i]));?>" name="fn2"><?php print_r(utf8_decode($av[$i]));?></option>
            
	<?php
		
	}
	  $question="";
		   if(isset($_GET["b1"]))
				   {
					 $en_name =$_GET["person"] ;
					 $question =$_GET["question"];
					$fa_name = ( utf8_decode($data[$en_name]));					  		   
			     	
			   
				   $file=fopen("newfile.txt","w");
				   
				   
	echo	fwrite($file,$en_name);
			fclose($file);
			   
			   }echo $fa_name1;
	?>
         
            </select>
			
            <input type="submit" value="بپرس" name="b1"/>
			
        </form>
		 
	</div>
	</div>
</body>
</html> 