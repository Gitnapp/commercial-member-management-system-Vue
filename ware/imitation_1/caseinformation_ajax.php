<?php
require("../../conn.php");

$flag = $_REQUEST['flag'];

	//保存专利案件备注修改
	if($flag == "save_zlbz"){
		$str_ajh = $_GET['str_ajh'];
		$str_bz = $_GET['str_bz'];
		
		$sql = "UPDATE 专利信息 SET 备注='".$str_bz."' WHERE 案卷号='".$str_ajh."'";
		if($conn->query($sql)){
			echo "保存成功！";
		}else{
			echo "保存失败！";
		}
	}



$conn->close();
?>