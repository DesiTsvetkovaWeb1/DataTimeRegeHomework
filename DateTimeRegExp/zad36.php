<?php
$a="<html>
<head>
<meta charsetdfdsf>
<title>Insert title here</title>
</head>
<body jj=o hh=y>
		<div>
<5645gdg>
</body>
</html>";

$b=preg_match_all('/<[a-z]+(\s>|[\s[a-z(=\")]+]*>|>)/', $a);

var_dump($b);