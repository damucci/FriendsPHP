<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <link rel="stylesheet" href="../assets/style.css">

	<meta charset="UTF-8">
	<title><?= $userInfo['alias'] ?></title>
</head>
<body>
	<div>
		<ul>
			<li><a href="/friends">Home</a></li>
			<li><a href="/logout">Logout</a></li>
		</ul>
	</div>
	<div class="container">
		<h2><?= $userInfo['alias'] ?>'s Profile</h2>
		<h3>Name: <?= $userInfo['name'] ?></h3>
		<h3>Email: <?= $userInfo['email'] ?></h3>
	</div>
	
</body>
</html>