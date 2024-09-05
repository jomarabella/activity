<html>
</head><title>PHP empty() function example</title>
</head>
<body>
<form method="post">

Enter value :<input type="text" name="str1"><br/>
<input type="submit" value="Submit" name="Submit1"><br/><br/>

<?php
if(isset($_POST["Submit1"]))
{
if(empty($_POST["str1"]))
{
echo "Enter Value";
}
else
{
echo "The Value = ". $_POST["str1"];
}
}
?>
</body>
</html>