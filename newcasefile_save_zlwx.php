<?php
require("AHeader.php");




	header('content-type:text/html;charset=utf-8');
	$flag = $_REQUEST['flag'];
//	echo $flag."\n";
	
	//专利案件新建时的异步文件保存
	if($flag == "upfile_wx"){
		require_once 'upload_func.php';//保存文件的函数
		require('conn.php');//连接数据库
		$ajh_str = $_POST['ajh'];
		$ret_msg = "";
//		echo $ajh_str."\n";
//		print_r($_FILES);
		if(isset($ajh_str)){
			//获取案卷号
			if(strpos($ajh_str, ",")){
				$ajh_arr = explode(",", $ajh_str);
			}else{
				$ajh_arr[0] = $ajh_str;
			}
			foreach($ajh_arr as $ky => $ajh){
				if($ajh != ''){
					//判断专利信息的是否有对应的案件存在
					$sql = "SELECT id FROM 专案_无效  WHERE 案卷号='".$ajh."'";
					@$result = $conn->query($sql);
					if(@$result->num_rows >0){
						//获取对应案卷号的文件对应的键值
						$file_num = $_POST[$ajh];
						if(strpos($file_num, ",")){
							$file_num_arr = explode(",", $file_num);
						}else{
							$file_num_arr[0] = $file_num;
						}
						//判断是否有上传文件
						if($file_num_arr[0] != "nofile"){
							foreach($file_num_arr as $ky_2 => $index_file){
								$up_path = "filesave/".$ajh;
								$ret_path = uploadFile_wx($_FILES[$index_file],$up_path);//保存文件并返回保存路径
//								$ret_path['dest']//保存路径
								$sql_file = "INSERT INTO 案卷流程及文档(案卷号,流程,处理人,时间,文件路径) VALUES(";
								$sql_file .= "'".$ajh."','待提交','".$name."','".date("Y-m-d H:i:s")."','".$ret_path['dest']."')";
								if($conn->query($sql_file)){
									$ret_msg .= basename($ret_path['dest'])."保存成功！\n";
								}else{
									$ret_msg .= basename($ret_path['dest'])."保存失败！\n";
								}
							}
						}else{
							$ret_msg .= $ajh."案件无文件上传！\n";
						}
					}else{
						$ret_msg .= $ajh."案件没有保存到专利信息中！\n".$sql;
					}
				}else{
					$ret_msg .= "案卷号为空\n";
				}
			}
		}else{
			$ret_msg .= "案卷号传输失败！\n";
		}
		
		echo $ret_msg;
		$conn->close();
	}
	




///*
// * 此文件仅保存文件路径，不包含信息，为新建案件的文件保存
// * */
//	$ajxh = $_POST['ajxh'];//获取案件序号	
//	$time = date("Y-m-d");//获取当前时间
//	
//	require('conn.php');
//	/*通过案件序号获取“案件信息”的id、代理人*/
//	$sql = "select id,案件处理人 from 案件信息 where 案件号='$ajxh'";
//	echo $sql;
//	$result = $conn->query($sql);
//	if($result->num_rows>0){
//		while($row = $result->fetch_assoc()){
//			$ajxx_id = $row['id'];
//			$dlr = $row['案件处理人'];
//		}
//	}else{
//		exit('<script type="text/javascript">alert("文件保存失败！");</script>');//location.href="ware/imitation_1/new_wx/new case 02.php";
//	}
////	echo $ajxh."\n".$ajxx _id."\n".$dlr."\n".$time."<br/>";//00004 110 羊神 2017-05-26
//	
//	//获取案卷号
//	$sql2 = "select 案卷号 from 专案_无效 where 案件信息id = '$ajxx_id' order by id asc";
//	$result2 = $conn->query($sql2);
//	if($result2->num_rows > 0){
//		$j = 0;
//		while($row2 = $result2->fetch_assoc()){
//			$ajh[$j] = $row2['案卷号'];
//			$j++;
//		}
//	}
//	
//	/*获取传过来的文件保存后的路径*/
//	require_once 'upload.func1.php';//保存文件的函数
//	$j = 0;//案卷号的键值
//	foreach($_FILES as $myfile){
//		//整理文件数组
//		if($myfile['name'][0] != ''){
//			$i=0;
//			foreach($myfile['name'] as $key => $val ){
//				$files[$i]['name'] = $myfile['name'][$i];
//				$files[$i]['type'] = $myfile['type'][$i];
//				$files[$i]['tmp_name'] = $myfile['tmp_name'][$i];
//				$files[$i]['error'] = $myfile['error'][$i];
//				$files[$i]['size'] = $myfile['size'][$i];
//				$i++;
//			}
////			print_r($files);
////			echo "<br/><hr/>";
//		
//			//保存文件并返回路径
//			$i=0;
//			foreach($files as $fileInfo){
//				//$maxSize=1048576;//1M
//				//保存文件到服务器
////				echo $fileInfo['name'].",".$fileInfo['type'].",".$fileInfo['tmp_name'].",".$fileInfo['error'].",".$fileInfo['size']."<br/><hr/>";
//				$save_path = "filesave/".$ajh[$j];
////				echo $ajh[$j]."<br/><hr/>";
//				$res=uploadFile($fileInfo,$save_path,'209715200');//uploadFile(数组二维名称,主目录,上传文件大少最大值)
//				$msg[] = $res['mes'];
//				$uploadFiles=$res['dest'];//保存文件的路径
//				//保存到“案卷流程及文档”
//				$uploadFiles = iconv('gb2312', 'utf-8', $uploadFiles);//将gbk转为utf-8
//				$sql3 = "insert into 案卷流程及文档(案卷号,流程,处理人,时间,文件路径) values(";
//				$sql3 .= "'$ajh[$j]','待提交','$dlr','$time','$uploadFiles')";
////				echo $sql3."<br/><hr/>";
//				$result= $conn->query($sql3);
//				$i++;
//			}
//			$j++;
//		}
//	}
//	if($result==1){
//		echo "<script>alert('文件上传成功！');self.location='index.php';</script>";		
//	}else{
//		echo "<script>alert('文件上传失败,请联系管理员！');self.location='index.php';</script>";
//	}
//	
	
	
?>