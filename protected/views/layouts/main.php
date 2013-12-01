<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="amey jadiye">
<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

<title>Starter Template for Bootstrap</title>

<!-- Bootstrap core CSS -->
<link
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css"
	rel="stylesheet">

<!-- Custom styles for this template -->
<link
	href="http://getbootstrap.com/examples/starter-template/starter-template.css"
	rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" 	data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span> <span class="icon-bar"></span> <span
	class="icon-bar"></span></button>
<a class="navbar-brand" href="#">Push Dump</a></div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav">
	<li class="active"><a href="#">Text push</a></li>
	<li><a href="#about">Blob push</a></li>
</ul>
</div>
<!--/.nav-collapse --></div>
</div>

<div class="container">

<div class="starter-template">
<h1>Text pushing functionality</h1>
<!-- Place inside the <head> of your HTML --> <script
	type="text/javascript"
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/tinymce/js/tinymce/tinymce.min.js"></script>
<!-- place in header of your html document -->
<script>
tinymce.init({
    selector: "textarea#elm1",
    theme: "modern",
    
    height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 }); 
</script>
<form action="">
<!-- place in body of your html document -->
<textarea id="elm1" name="area"></textarea>
<br>
<div align="left">
<button type="button" class="btn btn-default btn-lg"><span
	class="glyphicon glyphicon-cloud-upload"></span> Push </button>
</div>
</form>

</div>

</div>
<!-- /.container -->


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.10.2.min.js"></script>
<script
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
</body>
</html>
