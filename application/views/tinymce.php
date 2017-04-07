<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>

	<!-- Bootstrap core CSS -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- tinymce -->
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=vtrnfikc61iv19iecaw7nrbdfsii22jsv0x8eb26dle7kj5k"></script>

	<script>
		tinymce.init({
			file_browser_callback: function(field, url, type, win) {
				tinyMCE.activeEditor.windowManager.open({
					file: '<?php echo base_url('assets/plugin/kcfinder'); ?>/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
					title: 'KCFinder',
					width: 700,
					height: 500,
					inline: true,
					close_previous: false
				}, {
					window: win,
					input: field
				});
				return false;
			},
			selector:'textarea',
			menubar:false,
			height : "350",
			plugins: [
			'save advlist autolink lists link image charmap print preview hr anchor pagebreak',
			'searchreplace wordcount visualblocks visualchars code fullscreen',
			'insertdatetime media nonbreaking save table contextmenu directionality',
			'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc spellchecker '
			],
			toolbar1: 'code | save preview print | template | cut copy paste | undo redo | searchreplace spellchecker | insert | link unlink anchor | image media | codesample ',
			toolbar2: ' alignleft aligncenter alignright alignjustify | bullist numlist | blockquote ltr rtl | outdent indent | charmap pagebreak table | fullscreen visualblocks',
			toolbar3:'bold italic underline strikethrough subscript superscript removeformat formatselect fontselect fontsizeselect forecolor backcolor',
			image_advtab: true,
			templates: [
			{ title: 'Test template 1', content: 'Test 1' },
			{ title: 'Test template 2', content: 'Test 2' }
			],
			content_css: [
			'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			'//www.tinymce.com/css/codepen.min.css'
			]
		});
	</script>
</head>
<body>


	<div class="container" style="margin-top: 100px">
		<div class="col-lg-10 col-lg-offset-1">
			<!-- form -->
			<form action="<?php echo base_url('index.php/submit'); ?>" method="post" accept-charset="utf-8">
				<textarea id="content" name="content"><?php echo $content ?></textarea> 
				<button name='go' type="submit" value="Submit" class="btn btn-primary"
				name="button" style="width: 100%; margin-top: 5px" >SUBMIT</button>
			</form>


			<!-- display -->
			<div style="background-color:#f0f0f0; margin: 50px auto 50px; padding: 50px"><?php echo $content ?></div>

			<div align="center" style="margin: 20px auto 200px;"><a href="<?php echo base_url('index.php/original') ?>"<?php  ?>>GO BACK TO ORIGINAL</a></div>
		</div>

		

	</body>
	</html>