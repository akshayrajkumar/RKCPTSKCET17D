<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="blog.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900" rel="stylesheet">

</head>
<body>
    
    <?php
// specific
$ch = curl_init("https://api.dropinblog.com/v1/html/specificposts/?b=3LHSWVQF8SWIUZNC3ICI&posts=4,6,1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$dib_specific = json_decode($response);
?>
    
    
	<div>
		<p>May 29 2017</p>
		
		<h2>This is my first article</h2>
		
		<p>Bacon ipsum dolor amet sirloin beef tail cow rump beef ribs. Jerky cow chuck, fatback tail ham bacon. Biltong beef shoulder, tri-tip porchetta drumstick strip steak tenderloin ground round. Tenderloin andouille turducken brisket chuck.</p>
		
		<p>Ground round bacon kevin doner meatball salami. Tongue pork chop ground round corned beef rump short ribs short loin doner ham hock boudin strip steak meatball turkey. Frankfurter bresaola kielbasa andouille alcatra cupim sirloin chicken pig beef tri-tip venison jerky rump corned beef. Ham hock beef ribs sirloin short loin venison. Cow leberkas boudin, biltong tenderloin venison turkey filet mignon ball tip. Landjaeger strip steak andouille, capicola pork drumstick hamburger sirloin bresaola porchetta. Cow jowl burgdoggen boudin.</p>

		<p>Tail porchetta leberkas beef venison fatback. Filet mignon swine sausage rump venison picanha. Ground round jowl corned beef cupim brisket capicola sausage bresaola bacon doner tenderloin tail short loin. Filet mignon beef ribs pancetta jerky, alcatra hamburger bacon pastrami brisket tongue landjaeger rump corned beef andouille ham hock. Fatback bacon pork belly shank tail short ribs turkey.</p>
	</div>
	<div>
		<p>June 9 2017</p>
		
		<h2>This is another article</h2>
		
		<p>Bacon ipsum dolor amet sirloin beef tail cow rump beef ribs. Jerky cow chuck, fatback tail ham bacon. Biltong beef shoulder, tri-tip porchetta drumstick strip steak tenderloin ground round. Tenderloin andouille turducken brisket chuck.</p>
		
		<p>Ground round bacon kevin doner meatball salami. Tongue pork chop ground round corned beef rump short ribs short loin doner ham hock boudin strip steak meatball turkey. Frankfurter bresaola kielbasa andouille alcatra cupim sirloin chicken pig beef tri-tip venison jerky rump corned beef. Ham hock beef ribs sirloin short loin venison. Cow leberkas boudin, biltong tenderloin venison turkey filet mignon ball tip. Landjaeger strip steak andouille, capicola pork drumstick hamburger sirloin bresaola porchetta. Cow jowl burgdoggen boudin.</p>

		<p>Tail porchetta leberkas beef venison fatback. Filet mignon swine sausage rump venison picanha. Ground round jowl corned beef cupim brisket capicola sausage bresaola bacon doner tenderloin tail short loin. Filet mignon beef ribs pancetta jerky, alcatra hamburger bacon pastrami brisket tongue landjaeger rump corned beef andouille ham hock. Fatback bacon pork belly shank tail short ribs turkey.</p>
	</div>
</body>
</html>