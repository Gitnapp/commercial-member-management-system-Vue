<?php 
require'../../AHeader.php'; 
$firm_id = $_SESSION["firm_id"];//获取公司的id，用于获取去相关的表格或视图
require("AHeaderRecord.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">
  			  	<!--专利事务所logo-->
  <link rel="SHORTCUT ICON" href="../../images/output/logo.ico"/>

  <title>财务管理</title>
  
  <!--dynamic table-->
  <link href="../../js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="../../js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../js/data-tables/DT_bootstrap.css" />
  	
	<!--pickers css-->
  <link rel="stylesheet" type="text/css" href="../../js/bootstrap-datepicker/css/datepicker-custom.css" />

  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/style-responsive.css" rel="stylesheet">
  
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="../../js/html5shiv.js"></script>
  <script src="../../js/respond.min.js"></script>
  <![endif]-->
   <style type="text/css">
  	/*上传条的样式*/
	.progress_upload{
		margin-top:1px;
	    width: 200px;
	    height: 20px;
	    margin-bottom: 1px;
	    overflow: hidden;
	    background-color: #f5f5f5;
	    border-radius: 10px;
	    -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
	    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
	}
	.progress-bar{ 
		background-color: rgb(92, 184, 92);
		background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.14902) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.14902) 50%, rgba(255, 255, 255, 0.14902) 75%, transparent 75%, transparent);
		background-size: 40px 40px;
		box-shadow: rgba(0, 0, 0, 0.14902) 0px -1px 0px 0px inset;
		box-sizing: border-box;
		color: rgb(255, 255, 255);
		display: block;
		float: left; 
		font-size: 12px;
		height: 30px;
		line-height: 20px;
		text-align: center;
		transition-delay: 0s;
		transition-duration: 0.6s;
		transition-property: width;
		transition-timing-function: ease;
		width:266.188px;
	}
  </style> 
  
  <!--jQuery库文件-->
  <script src="../../js/jquery-1.10.2.min.js"></script>  
  
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">
			<?php
				//创建左边菜单栏 
				require("../../menu_tree.php"); 
				Create_leftlist(5,0);
			?>
    </div>
    <!-- left side end-->
    
    <!-- main content start--主页左上方的标志-->
    <div class="main-content" >
	
        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn" style="width: auto;"><i class="fa fa-bars"></i> &nbsp;<?php echo $firmname_show;//在AHeaderRecord.php中定义 ?></a>
            <!--toggle button end-->

            <!--search start-->
            <!--<form class="searchform" action="http://view.jqueryfuns.com/2014/4/10/7_df25ceea231ba5f44f0fc060c943cdae/index.html" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>-->
            <!--search end-->

            <!--notification menu start -->
            <?php require'../../MenuMin-2.php';  ?>  
            <!--notification menu end -->

        </div>
        <!-- header section end-->

				<!--body wrapper start :主要内容-->
				<div class="wrapper" >
        		<div class="row" >
	        		<div class="col-sm-12">
	        		<section class="panel">
	        			<header class="panel-heading custom-tab">
		             		<ul class="nav nav-tabs">
		             			<li class="about-1"><a href="financial-management.php" ><i class="fa fa-align-justify"></i>总收入记录</a></li>
		             			<li class="about-7"><a href="financial-management-allexpenditure.php"><i class="fa fa-align-justify"></i>总支出记录</a></li>
		             			<li class="about-8"><a href="financial-management-allowe.php" ><i class="fa fa-align-justify"></i>总欠费记录</a></li>
		             			
				                <li class="about-6 active"><a href="#about-6" data-toggle="tab"><i class="fa fa-align-justify"></i>月收入记录</a></li>
				                <li class="about-2"><a href="financial-management-monthexpenditure.php" ><i class="fa fa-align-justify"></i>月支出记录</a></li>
				                <li class="about-3"><a href="financial-management-monthstatistics.php" ><i class="fa fa-adjust"></i>月统计记录</a></li>
				                <li class="about-4"><a href="financial-management-personnelstatistics.php" ><i class="fa fa-user"></i>按人员统计</a></li>
				                <li class="about-5"><a href="financial-management-monthowe.php" ><i class="fa fa-align-justify"></i>月欠费记录</a></li>
              					<input type="text" id="czyid" hidden="hidden" value="<?php echo $userid; ?>" />
              					<input id="NORS" hidden="hidden"  value="<?php echo $normal; ?>" />
              				</ul>
	        			</header>
				        <div class="panel-body">
				        <div class="tab-content">
				        	<!--月收入记录   star-->
				        	<div class="tab-pane active" id="about-6">
				        	<section id="unseen">
				        		<header>
				        			<button class="btn btn-primary" data-toggle="modal" href="#addModal" >添加收入记录</button><!--onclick="Clear_Modal('my_form','6,7')"-->
				        			<button class="btn btn-success exp_Excel_sr">导出选中行Excel</button>
				        			<label>选择年月：</label><input placeholder="请选填年月" style="width: 100px;" id="selected_value_sr" list="Select_ny"><datalist id="Select_ny"></datalist>
					        		<!-- /btn-group -->
							            	<div class="btn-group" style="float: right;" >
			                        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button" name="MenuO">
			                        	<?php 
			                        		require'../../conn.php';
			                        		//查询
			                        		$sqlO1 = "select 财务1 from 表格顺序 where 用户id = '".$userid."'";
			                        		$resultO1 = $conn->query($sqlO1);
			                        		if($resultO1->num_rows>0){
			                        			while($rowO1 = $resultO1->fetch_assoc()){
			                        				$order = $rowO1['财务1'];
			                        			}
			                        		}
			                        		if(strlen($order)<1){
			                        			$order = '0/asc/客户名称';
			                        		}
			                        		//显示
			                        		$order = explode('/',$order);
			                        		echo $order[2];
			                        	?>
			                        	<span class="caret"></span>
			                        	<span class="dynamic-table" hidden="hidden" ><?php echo $order[0].'/'.$order[1]; ?></span>
			                        </button>
			                        <ul role="menu" class="dropdown-menu checilck" id="MenuO" >
			                            <li><a href="#">客户名称</a></li>
			                            <li><a href="#">总费用【正】</a></li>
			                            <li><a href="#">总费用【倒】</a></li>
			                            <li><a href="#">规费【正】</a></li>
			                            <li><a href="#">规费【倒】</a></li>
			                            <li><a href="#">管理费【正】</a></li>
			                            <li><a href="#">管理费【倒】</a></li>
			                            <li><a href="#">税费【正】</a></li>
			                            <li><a href="#">税费【倒】</a></li>
			                            <li><a href="#">收费方式</a></li>
			                            <li><a href="#">收费日期【正】</a></li>
			                            <li><a href="#">收费日期【倒】</a></li>
			                            <li><a href="#">案源人</a></li>
			                        </ul>
			                    </div>
			                    <!-- /btn-group -->
		                    </header>
				        		<div>
				        		
				        		<table class="display table table-bordered table-striped" id="dynamic-table">
						        	<thead>
							        	<th style="width: 50px;"><input type="checkbox" onclick="Slect_All('dynamic-table',this)" /> </th>
							            <th>客户名称</th>
							            <th>项目内容</th>
							            <th>总费用</th>
							            <th>规费</th>
							            <th>管理费 </th>
							            <th>税费 </th>
							            <th>收费方式</th>
							            <th>收费日期</th>
							            <th>案源人</th>
							            <th>操作</th>
						        	</thead>
						        	<tbody id="my_tab_1">
						        		
						        	</tbody>
						        </table>
						        </div>
						        <div>
							        <table class="display table table-bordered table-striped">
							        	<thead>
							        		<th>本月</th>
							        		<th>总费用</th>
							        		<th>规费</th>
							        		<th>管理费</th>
							        		<th>税费</th>
							        	</thead>
							        	<tbody id="tab_monthcount_sr">
							        		
							        	</tbody>
							        </table>
						        </div>	
				        	</section>
            				</div>
				        	<!--月收入记录   end-->
				        	
					    </div>
				    	</div>    	
				    </section>
				    </div> 
				    </div> 
				    </div> 
				        	
		<!--body wrapper end-->
										<!--隐藏模块-->		
		<!--添加收入记录模块 star-->
		<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">收入记录添加</h4>
					</div>
					<div class="modal-body">
						<div class="form-horizontal " id="my_form">
					 		<div class="form-group">
                                <label class="control-label col-md-4">客户名称：</label>
                                <div class="col-md-6 col-xs-11">
                                    <input id="kh" class="form-control form-control-inline input-medium save_input"   type="text" onclick="select_kh(this.id)" readonly="readonly" />
                                    <a class="ADD_NEW_sqr">新建申请人</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">项目内容：</label>
                                <div class="col-md-6 col-xs-11">
                                    <input class="form-control form-control-inline input-medium save_input"   type="text" placeholder="费用明细" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">总收费：</label>
                                <div class="col-md-6 col-xs-11">
                                    <input class="form-control form-control-inline input-medium save_input"   type="text" onkeyup="value=value.replace(/[^-?\d*\.?\d]/g,'')" placeholder="请输入数字" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">规费：</label>
                                <div class="col-md-6 col-xs-11">
                                    <input class="form-control form-control-inline input-medium save_input"   type="text" onkeyup="value=value.replace(/[^-?\d*\.?\d]/g,'')" placeholder="请输入数字" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">管理费：</label>
                                <div class="col-md-6 col-xs-11">
                                    <input class="form-control form-control-inline input-medium save_input"   type="text" onkeyup="value=value.replace(/[^-?\d*\.?\d]/g,'')" placeholder="请输入数字" />
                                </div>
                            </div>
                            <div class="form-group"> 
                                <label class="control-label col-md-4">税费：</label>
                                <div class="col-md-6 col-xs-11">
                                    <input class="form-control form-control-inline input-medium save_input"   type="text" onkeyup="value=value.replace(/[^-?\d*\.?\d]/g,'')" placeholder="请输入数字" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">收费方式：</label>
                                <div class="col-md-6 col-xs-11">
                                	<input class="form-control form-control-inline input-medium save_input"  id="payway_inp"  type="text" />
                                	<!--<select id="payway">
                                		<option value="现金">现金</option>
                                		<option value="银行">银行</option>
                                	</select>
                                	<input type="text" id="payway_inp" value="现金" hidden="hidden" />-->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">收费日期：</label>
                                <div class="col-md-6 col-xs-11">
                                    <input class="form-control form-control-inline input-medium save_input" type="date" value="<?php echo date("Y-m-d"); ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">案源人：</label>
                                <div class="col-md-6 col-xs-11">
                                    <input id="ayr" class="form-control form-control-inline input-medium save_input"   type="text" onclick="select_ayr(this.id)" readonly="readonly" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">代理人：</label>
                                <div class="col-md-6 col-xs-11">
                                    <input id="dlr" class="form-control form-control-inline input-medium save_input"   type="text" onclick="select_dlr(this.id)" readonly="readonly" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">备注：</label>
                                <div class="col-md-6 col-xs-11">
                                    <input class="form-control form-control-inline input-medium save_input"   type="text" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">文件：</label>
                                <div class="col-md-6 col-xs-11">
                                    <input class="form-control form-control-inline input-medium" type="file" id="file_sr" multiple="multiple" />
                                </div>
                            </div>
                            <div class="form-group">
                             	<label class="control-label col-md-4"></label>
                                <div class="col-md-6 col-xs-11" id="file_list_sr">
                                	<div class="progress_upload"><div class="progress-bar" style="width: 0%"></div></div>&nbsp;<strong></strong>
                                </div>
                            </div>
					 	</div>
	                    <div class="modal-footer" align="center">
	                    	<button class="btn btn-danger" onclick="Clear_Modal('my_form','6,7')" >清除</button>
	                    	<button id="save_add" class="btn btn-primary" type="button" onclick="Savenew_data(this)" >保存</button>
	                      <button data-dismiss="modal" class="btn btn-primary" type="button">关闭</button>
	                    </div>
                   </div>
                </div>
            </div>
        </div>		
        <!--添加收入记录模块 end-->	
		       

    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="../../js/jquery-1.10.2.min.js"></script>
<script src="../../js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="../../js/jquery-migrate-1.2.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/modernizr.min.js"></script>
<script src="../../js/jquery.nicescroll.js"></script>



<!--dynamic table-->
<script type="text/javascript" language="javascript" src="../../js/advanced-datatable/js/jquery.dataTables.js"></script>
<!--页数跳转-->
<script type="text/javascript" src="../../js/data-tables/DT_bootstrap.js"></script>
<!--dynamic table initialization 搜索 -->
<!--<script src="../../js/dynamic_table_init.js"></script>-->

<!--pickers plugins-->
<script type="text/javascript" src="../../js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="../../js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="../../js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="../../js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<!--pickers initialization-->
<script src="../../js/pickers-init.js"></script>


<!--common scripts for all pages-->
<script src="../../js/scripts.js"></script>


<!--个人新添js文件-->
<script src="../../js/imitation_6/financial-management.js"></script>
<!--about 常态-->
<script src="../../js/NormalS-2.js"></script>
<!--新写的jQuery的个人页面响应 -->
<script src="../../js/Change_session.js"></script><!--财务人员管理的公司id更换-->
<script src="../../js/imitation_6/financial-management_monthincome.js"></script>
<script>
	//设置排序
	$(".checilck > li").click(function(){
		var czyid = $("#czyid").val();
		var aim  = $(this).parent().attr("id");//获取点击的位置的父id
		var text = $(this).html();//获取排序方式
		var Text = text.substr(12,text.length-16);
		var ch = document.getElementsByName(aim)[0].innerHTML;
//		alert(ch);
		$.ajax({
			url:'../../OrderChange.php',
			type:'get',
			async:true,
			data:{
				falg:aim,//判断表格的依据
				order:Text,
				czyid:czyid,
				page:'FARECON'
			},
			success:function(data){
				window.location.reload();
			},
			error:function(){
				alert('false');
			}
		});
	});
</script>

</body>
</html>
