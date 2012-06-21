<!DOCTYPE html>
<html>
<head>
  <meta name=viewport content="user-scalable=no,width=device-width" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
  <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head>

<body>

<div data-role=page id=home>
  <div data-role=header>
    <h1>Home</h1>
  </div>

  <div data-role=content>
   <p> Window content </p>
  </div>
</div>

</body>
</html>

<script>

$.ajax (
{
  url : "action.php",
  complete : function (xhr, result)
  {
    if (result != "success") return;
    var response = xhr.responseText;
    $("#home").append (response);

    $("#home").fixHeaderFooter ();
    $("#navbar").navbar();
  }
});

</script>

