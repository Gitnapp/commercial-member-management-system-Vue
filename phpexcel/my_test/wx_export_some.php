<?php
/*专利案件总览的Excel选中行导出
 * 
 * */
header("Content-type:text/html;charset=utf-8");
include '../Classes/PHPExcel.php';
require_once('../Classes/PHPExcel/Writer/Excel2007.php'); 
include '../../conn.php';

//创建Excel对象
$objPHPExcel = new PHPExcel(); 
//Set properties 设置文件属性  这部分随意
$objPHPExcel->getProperties()->setCreator("KingShen");  
$objPHPExcel->getProperties()->setLastModifiedBy("KingShen");  
$objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Test 专案导出");  
$objPHPExcel->getProperties()->setSubject("Office 2007 XLSX Test Document");  
$objPHPExcel->getProperties()->setDescription("Test document for Office 2007 XLSX,专案导出");  
$objPHPExcel->getProperties()->setKeywords("office 2007 openxml php");  
$objPHPExcel->getProperties()->setCategory("Test result file"); 
//Rename sheet 重命名工作表标签  
$objPHPExcel->getActiveSheet()->setTitle('sheet1');  
/*写进头部*/
$letter = array('A','B','C','D','E','F','G','H','I','J','K');
//Set column widths 设置列宽度 
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(8);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(12);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);  
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(50);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(50);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(10);
//编写表字段
$objPHPExcel->getActiveSheet()->setCellValue('A1','序号');
$objPHPExcel->getActiveSheet()->setCellValue('B1','案卷号');
$objPHPExcel->getActiveSheet()->setCellValue('C1','类型');
$objPHPExcel->getActiveSheet()->setCellValue('D1','申请号');
$objPHPExcel->getActiveSheet()->setCellValue('E1','申请日');
$objPHPExcel->getActiveSheet()->setCellValue('F1','申请人');
$objPHPExcel->getActiveSheet()->setCellValue('G1','专利名称');
$objPHPExcel->getActiveSheet()->setCellValue('H1','案源人');
$objPHPExcel->getActiveSheet()->setCellValue('I1','代理人');
$objPHPExcel->getActiveSheet()->setCellValue('J1','当前程序');
$objPHPExcel->getActiveSheet()->setCellValue('K1','案件分类');
//居中
foreach($letter as $ky => $column){
	$objPHPExcel->getActiveSheet()->getStyle($column.'1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);//垂直居中
	$objPHPExcel->getActiveSheet()->getStyle($column.'1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);//水平居中 	
}

function Get_sqr($idstr){
	include '../../conn.php';
	$sqr_str = "";
	$sql = "SELECT 申请人 FROM 申请人 WHERE FIND_IN_SET(id,'".$idstr."')";
	$result_sqr = $conn->query($sql);
	if($result_sqr->num_rows>0){
		while($row_s = $result_sqr->fetch_assoc()){
			$sqr_str .= ",".$row_s['申请人'];
		}
	}
	$sqr_str = substr($sqr_str, 1);
	$conn->close();
	return $sqr_str;
}
	
//$sql_s="select b.案卷号,b.案源人,b.代理人,类型,专利名称,冻结状态,b.状态,申请号,申请人id,申请人  from `专案_无效` b where b.冻结状态<>'3' and b.冻结状态<>'2' and 状态<>9 group by b.`案卷号`";
//$sql_s = "CALL CheStu()";
$str_ajh = $_POST['data'];
if($str_ajh != ""){
	$sql_s = "SELECT 案卷号,申请号,申请日,类型,专利名称,案源人,代理人,申请人id,状态,案件分类 FROM (
	SELECT 案卷号,申请号,申请日,类型,专利名称,案源人,代理人,申请人id,状态,'申请案件' AS 案件分类 FROM 专利信息 WHERE 冻结状态<>'3' AND 状态<>'9' UNION 
	SELECT 案卷号,申请号,申请日,类型,专利名称,案源人,代理人,申请人id,状态,'年费案件' AS 案件分类 FROM 专案_年费 WHERE 冻结状态<>'3' AND 案件状态<>'9' UNION 
	SELECT 案卷号,申请号,申请日,类型,专利名称,案源人,代理人,申请人id,状态,'其他案件' AS 案件分类 FROM 专案_复审等 WHERE 冻结状态<>'3' AND 状态<>'9'
	) AS c WHERE FIND_IN_SET(案卷号,'".$str_ajh."')";
	$result = $conn->query($sql_s);
	$i=2;
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			$sqr_str = Get_sqr($row['申请人id']);
			
			$objPHPExcel->getActiveSheet()->setCellValue('A'.$i,$i-1);
			$objPHPExcel->getActiveSheet()->setCellValueExplicit('B'.$i,$row['案卷号'],PHPExcel_Cell_DataType::TYPE_STRING);//显示字符串
			$objPHPExcel->getActiveSheet()->setCellValue('C'.$i,$row['类型']);
			$objPHPExcel->getActiveSheet()->setCellValueExplicit('D'.$i,$row['申请号'],PHPExcel_Cell_DataType::TYPE_STRING);//显示字符串
			$objPHPExcel->getActiveSheet()->setCellValue('E'.$i,$row['申请日']);
			$objPHPExcel->getActiveSheet()->setCellValue('F'.$i,$sqr_str);
			$objPHPExcel->getActiveSheet()->setCellValue('G'.$i,$row['专利名称']);
			$objPHPExcel->getActiveSheet()->setCellValue('H'.$i,$row['案源人']);
			$objPHPExcel->getActiveSheet()->setCellValue('I'.$i,$row['代理人']);
			$objPHPExcel->getActiveSheet()->setCellValue('J'.$i,$row['状态']);
			$objPHPExcel->getActiveSheet()->setCellValue('K'.$i,$row['案件分类']);
			//日期格式化
			$objPHPExcel->getActiveSheet()->getStyle('E'.$i)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_DATE_YYYYMMDDSLASH);
			$i++;
		}
	}else{
		exit("没有数据！");
	}	
}else{
	exit("没有数据！");
}
	
$conn->close();

//保存
$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);  
//$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
$objWriter->save("file_excel/one.xlsx");

//输出下载
sleep(1);
$filename = "file_excel/one.xlsx";
$name = "案件总览".date("Y年m月d日").".xlsx"; 
if(file_exists($filename)){
	header('content-disposition:attachment;filename='.$name);
	header('content-length:'.filesize($filename));
	readfile($filename);
}else{
	echo '<script type="text/javascript">alert("文件已被删除或移动了！");window.close();</script>';
}



?>