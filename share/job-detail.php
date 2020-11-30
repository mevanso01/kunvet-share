<?php
	$title = '';
	$description = '';
	$job_id = '';
	$is_dev = false;
	if (isset($_GET['q1'])) {
		$title = $_GET['q1'];
	}
	if (isset($_GET['q2'])) {
		$description = $_GET['q2'];
	}
	if (isset($_GET['q3'])) {
		$job_id = $_GET['q3'];
	}
	if (isset($_GET['q4']) && $_GET['q4'] === 'dev') {
		$is_dev = true;
	}

	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html>
<head>
	<meta property='og:title' content="<?php echo $title ?>" />
	<meta property='og:description' content="<?php echo $description ?>" />
	<meta property='og:image' content="https://<?php echo $is_dev?'dev.':'' ?>kunvet.com/banner-image.png" />
	<meta property='og:url' content="<?php echo $actual_link ?>" />
	<title>Kunvet | Share</title>
</head>
<body>
</body>
<script type="text/javascript">
	window.location.href = 'https://<?php echo $is_dev?'dev.':'' ?>kunvet.com/jobs/detail/<?php echo $job_id ?>';
</script>
</html>