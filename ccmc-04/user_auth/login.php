
<?php
$user_ok = "user01";
$password_ok = "pass01";

session_start();

$id = "";
if(isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
   
}


$password ="";
if(isset($_REQUEST["password"])) {
    $password = $_REQUEST["password"];
}
$isLonginde = false;
if (($id === $id_ok) and ($password === $password_ok)) {
    $_SESSION["id"] = $id;
    $isLogined = true;
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ccmc-04</title>
<link rel="stylesheet" href="../../assets/css/style.css" />
<link rel="stylesheet" href="../../assets/css/ccmc-03.css" />
<link rel="stylesheet" href="../../assets/css/ccmc-04.css" />
</head>
<body>
<h1>簡単なユーザ認証</h1>
<?php if ($isLongined === true) {?>
<p>ようこそ、usr01さん</p>
<p><a href="logout.php">ログアウトする</a></p>
<?php } else { ?>
<P>認証に失敗しました</P>
<p><a href="entry.php.html">ログアウトする</a></p>
<?php } ?>
</body>
</html>

