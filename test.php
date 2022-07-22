<?php
$server_path=$_SERVER['DOCUMENT_ROOT'];
$scan_dir=scandir($server_path.'/mamta');
$new_array= array_slice($scan_dir, 2);
for($i=0;$i<=count($new_array)-1;$i++)
{
	if(is_dir($new_array[$i]))
		
		{
			
			$scan_dir1=scandir($server_path.'/mamta/'.$new_array[$i]);
			$new_array_data= array_slice($scan_dir1, 2);
            for($j=0;$j<=count($new_array_data)-1;$j++)
			  {
				  
				  if(!empty($new_array_data))
					  
					  {
						  copy($new_array[$i].'/'.$new_array_data[$j],'india/'.$new_array_data[$j]);
						  
					  }
					  
					 
				  
			  }
			
		}
		
}




?>