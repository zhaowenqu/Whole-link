<?php 
$query="select * from info where id=1";
$result_info=execute($link, $query);
$data_info=mysqli_fetch_assoc($result_info);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<title><?php echo $template['title'] ?> - <?php echo $data_info['title']?></title>
<meta name="keywords" content="<?php echo $data_info['keywords']?>" />
<meta name="description" content="<?php echo $data_info['description']?>" />
<?php 
foreach ($template['css'] as $val){
	echo "<link rel='stylesheet' type='text/css' href='{$val}' />";
}
?>
</head>
<body>
	<div class="header_wrap">
		<div id="header" class="auto">
			<div class="logo">Wholelink</div>
			<div class="nav">
				<a class="hover" href="index.php">index</a>
			</div>
			<div class="serarch">
				<form action="#" method="get">
					<input class="keyword" type="text" name="keyword" value="<?php if(isset($_GET['keyword']))echo $_GET['keyword']?>" placeholder="test" />
					<input class="submit" type="submit" value="" />
				</form>
			</div>
			<div class="login">
				<?php 
				if(isset($member_id) && $member_id){
$str=<<<A
					<a href="#?id={$member_id}" target="_blank">Hello！{$_COOKIE['sfk']['name']}</a> <span style="color:#fff;">|</span> <a href="logout.php">logout</a>
A;
					echo $str;		
				}else{
$str=<<<A
					<a href="login.php">login</a>&nbsp;
					<a href="register.php">register</a>
A;
					echo $str;
				}
				?>
				
			</div>
		</div>
	</div>
	<div style="margin-top:55px;"></div>
