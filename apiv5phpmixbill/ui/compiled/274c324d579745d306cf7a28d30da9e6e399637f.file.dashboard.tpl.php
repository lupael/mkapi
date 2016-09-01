<?php /* Smarty version Smarty-3.1.13, created on 2016-09-01 16:59:02
         compiled from "ui\theme\default\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2452557c7fbe6635d90-93428465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '274c324d579745d306cf7a28d30da9e6e399637f' => 
    array (
      0 => 'ui\\theme\\default\\dashboard.tpl',
      1 => 1446083548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2452557c7fbe6635d90-93428465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_admin' => 0,
    '_L' => 0,
    '_c' => 0,
    'iday' => 0,
    '_url' => 0,
    'imonth' => 0,
    'u_act' => 0,
    'u_all' => 0,
    'expire' => 0,
    'no' => 0,
    'expired' => 0,
    'dlog' => 0,
    'dlogs' => 0,
    '_user' => 0,
    '_bill' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_57c7fbe67d7d78_17487083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7fbe67d7d78_17487083')) {function content_57c7fbe67d7d78_17487083($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (($_smarty_tpl->tpl_vars['_admin']->value['user_type'])=='Admin'||($_smarty_tpl->tpl_vars['_admin']->value['user_type'])=='Sales'){?>
					<div class="row">
						<div class="col-md-12">
							<div class="dash-head clearfix mt15 mb20">
								<div class="left">
									<h4 class="mb5 text-light">Welcome to PHPMixBill v5.0</h4>
									<p class="small"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome_Text_Admin'];?>
</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="panel panel-default mb20 mini-box panel-hovered">
								<div class="panel-body">
									<div class="clearfix">
										<div class="info left">
											<h4 class="mt0 text-primary text-bold"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['iday']->value,0,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h4>
											<h5 class="text-light mb0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_Today'];?>
</h5>
										</div>
										<div class="right ion ion-ios-pricetags-outline icon"></div>
									</div>
								</div>
								<div class="panel-footer clearfix panel-footer-sm panel-footer-primary">
									<p class="mt0 mb0 right"><a class="text-putih" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-date"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View_Reports'];?>
</a></p>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="panel panel-default mb20 mini-box panel-hovered">
								<div class="panel-body">
									<div class="clearfix">
										<div class="info left">
											<h4 class="mt0 text-success text-bold"><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['imonth']->value,0,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</h4>
											<h5 class="text-light mb0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income_This_Month'];?>
</h5>
										</div>
										<div class="right ion ion-social-usd icon"></div>
									</div>
								</div>
								<div class="panel-footer clearfix panel-footer-sm panel-footer-success">
									<p class="mt0 mb0 right"><a class="text-putih" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-period"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View_Reports'];?>
</a></p>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="panel panel-default mb20 mini-box panel-hovered">
								<div class="panel-body">
									<div class="clearfix">
										<div class="info left">
											<h4 class="mt0 text-info text-bold"><?php echo $_smarty_tpl->tpl_vars['u_act']->value;?>
</h4>
											<h5 class="text-light mb0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Users_Active'];?>
</h5>
										</div>
										<div class="right ion ion-android-contact icon"></div>
									</div>
								</div>
								<div class="panel-footer clearfix panel-footer-sm panel-footer-info">
									<p class="mt0 mb0 right"><a class="text-putih" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View_All'];?>
</a></p>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="panel panel-default mb20 mini-box panel-hovered">
								<div class="panel-body">
									<div class="clearfix">
										<div class="info left">
											<h4 class="mt0 text-pink text-bold"><?php echo $_smarty_tpl->tpl_vars['u_all']->value;?>
</h4>
											<h5 class="text-light mb0"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total_Users'];?>
</h5>
										</div>
										<div class="right ion ion-android-contacts icon"></div>
									</div>
								</div>
								<div class="panel-footer clearfix panel-footer-sm panel-footer-pink">
									<p class="mt0 mb0 right"><a class="text-putih" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['View_All'];?>
</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<div class="panel panel-default mb20 panel-hovered project-stats table-responsive">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['User_Expired_Today'];?>
</div>
								<div class="panel-body">	
									<table class="table">
										<thead>
											<tr>
												<th>Id</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</th>
												<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</th>
											</tr>
										</thead>
										<tbody>
										<?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
										<?php  $_smarty_tpl->tpl_vars['expired'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['expired']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['expire']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['expired']->key => $_smarty_tpl->tpl_vars['expired']->value){
$_smarty_tpl->tpl_vars['expired']->_loop = true;
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['expired']->value['username'];?>
</td>
												<td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['expired']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['expired']->value['time'];?>
</td>
												<td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['expired']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['expired']->value['time'];?>
</td>
											</tr>
										</tbody>
										<?php } ?>
									</table>
								</div>
							</div>
						</div>
						
						<div class="col-md-5">
							<div class="panel panel-default panel-hovered mb20 activities">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Activity_Log'];?>
</div>
								<div class="panel-body">
									<ul class="list-unstyled">
									<?php  $_smarty_tpl->tpl_vars['dlogs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dlogs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dlog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dlogs']->key => $_smarty_tpl->tpl_vars['dlogs']->value){
$_smarty_tpl->tpl_vars['dlogs']->_loop = true;
?>
										<li class="primary">
											<span class="point"></span>
											<span class="time small text-muted"><?php echo time_elapsed_string($_smarty_tpl->tpl_vars['dlogs']->value['date'],true);?>
</span>
											<p><?php echo $_smarty_tpl->tpl_vars['dlogs']->value['description'];?>
</p>
										</li>
									<?php } ?>
									</ul>
								</div>
							</div>
						</div>
						
					</div>
<?php }else{ ?>
					<div class="row">
						<div class="col-md-12">
							<div class="dash-head clearfix mt15 mb20">
								<div class="left">
									<h4 class="mb5 text-light"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome'];?>
, <?php echo $_smarty_tpl->tpl_vars['_user']->value['fullname'];?>
</h4>
									<p><?php echo $_smarty_tpl->tpl_vars['_L']->value['Welcome_Text_User'];?>
</p>
									<ul>
										<li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Information'];?>
</li>
										<li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/activation"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Voucher_Activation'];?>
</a></li>
										<li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
voucher/list-activated"><?php echo $_smarty_tpl->tpl_vars['_L']->value['List_Activated_Voucher'];?>
</a></li>
										<li> <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
accounts/change-password"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Change_Password'];?>
</a></li>
										<li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Order_Voucher'];?>
</li>
										<li> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Private_Message'];?>
</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="panel mb20 panel-primary panel-hovered">
								<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account_Information'];?>
</div>
								<div class="panel-body">
									<div class="row">
			            				<div class="col-sm-3">
					               			<p class="small text-success text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</p>
					               			<p class="small mb15"><?php echo $_smarty_tpl->tpl_vars['_bill']->value['username'];?>
</p>
					                	</div>
			            				<div class="col-sm-3">
					               			<p class="small text-primary text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plan_Name'];?>
</p>
					               			<p class="small mb15"><?php echo $_smarty_tpl->tpl_vars['_bill']->value['namebp'];?>
</p>
					                	</div>
					                	<div class="col-sm-3">
					                		<p class="small text-info text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Created_On'];?>
</p>
					               			<p class="small mb15"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['_bill']->value['recharged_on']));?>
 <?php echo $_smarty_tpl->tpl_vars['_bill']->value['time'];?>
</p>
					                	</div>
					                	<div class="col-sm-3">
					                		<p class="small text-danger text-uppercase text-normal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Expires_On'];?>
</p>
					               			<p class="small mb15"><?php echo date($_smarty_tpl->tpl_vars['_c']->value['date_format'],strtotime($_smarty_tpl->tpl_vars['_bill']->value['expiration']));?>
 <?php echo $_smarty_tpl->tpl_vars['_bill']->value['time'];?>
</p>
					                	</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>