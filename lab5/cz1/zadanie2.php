<?php
$cookieName = "visitCount";
$cookieExpire = time() + (30 * 24 * 60 * 60);
$visitThreshold = 5;

if(isset($_COOKIE[$cookieName])) {
    $visitCount = intval($_COOKIE[$cookieName]);
    $visitCount++;
} else {
    $visitCount = 1;
}

setcookie($cookieName, $visitCount, $cookieExpire);

$message = "";
$image = "";
if($visitCount >= $visitThreshold) {
    $message = "Odwiedziłeś tą stronę " . $visitCount . " razy, w nagrodę masz tu zdjęcie małpy.";
    $image = "<img src='image.jpg' alt='nagroda'>";
} else {
    $message = "To jest Twoja " . $visitCount . " wizyta na tej stronie.";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
<h1>Licznik</h1>
<p><?php echo $message; ?></p>
<?php if ($image): ?>
    <div><?php echo $image; ?></div>
<?php endif; ?>
</body>
</html>
