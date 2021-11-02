<?
class pbook
{
	
	
	function select_by_category($cat)
	{
		
		 $link = mysqli_connect("localhost", "root", "hanaa12300", "readme");
      //$sql = "SELECT * FROM bookinfo where category=$cat";

      $result = mysql_query("SELECT * FROM bookinfo where category= '$cat'");
	  $i=0;
     while($row = mysql_fetch_array($result)){
		
					//$row=mysql_fetch_array($result);
					$arr[$i][0]=$row["name"];
					$arr[$i][1]=$row["authorName"];
					$arr[$i][2]=$row["link"];
					$arr[$i][3]=$row["image"];
					$i++;
				}
			
		return $arr;
		
	}
		
		
	
	
}


?>