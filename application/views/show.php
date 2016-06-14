<!DOCTYPE html>
<html lang="en">
<head>
	<?php $url = base_url()."asset/" ?>
	<meta charset="utf-8">
	<title>比特工场</title>
	<link rel="stylesheet" href="<?php echo $url; ?>style/login_in.css">
	<style type="text/css">

	.contain{
		margin:0 auto;
		width: 960px;
		min-height: 500px;
	}
    table{
		margin-top:25px;
    	border:1px solid #000000;
    	border-collapse: collapse; 
    }
    a{
    	margin-left: 6px;
    }
    table td{
    	min-width:100px;
    	max-width: 400px;
    	word-wrap:break-word;
    	border:1px solid #000000;
    	/*overflow: hidden;*/
    	/*text-overflow: hidden;*/
    	padding: 8px 10px 8px 10px; 
    }
    
    </style>
	<nav class="nav">
		<img src="<?php echo $url; ?>/image/logo.png" alt="LOGO">
		<p class="admin_login">查看留言</p>
		<p class="index"><a href="<?php echo base_url(); ?>index.php/c_index/logout">返回首页</a></p>
	</nav>
</head>
	<div class="contain">
		<table>
			<tr class='tb_header'>
				<td>操作</td><td>时间</td><td>用户名</td><td>专业</td><td>email</td><td class="msg">内容</td>
			</tr>
			<?php 
				foreach($result_row as $row):
	 		?>
			<tr>
				<td><a href="<?php echo site_url('c_index//delete').'/'.$row->id; ?>">删除</a></td>
				<td><?php echo $row->b_time; ?></td>
				<td><?php echo $row->b_user; ?></td>
				<td><?php echo $row->b_Professional; ?></td>
				<td><?php echo $row->b_email; ?></td>
				<td><?php echo $row->b_message; ?></td>
	    	</tr>
			<?php  endforeach ?>
			<?php 	echo $page; ?>
		</table>
	</div>
</body>
</html>