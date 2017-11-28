<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <h1>You Got Your Email</h1>
 <p><h3 style="display: inline;">Subject: </h3>{!! html_entity_decode($subject) !!}</p>
 <p>{!! html_entity_decode($bodymessage) !!}</p>
 <p>Sent From : 'rumman142228@gmail.com'</p>
</body>
</html>