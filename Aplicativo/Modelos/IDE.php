<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portugol Webstudio</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/ax5ui/ax5ui-layout/master/dist/ax5layout.css" />
	<style type="text/css" media="screen">
		#editor, #output, #input {
			margin: 0;
			width: 100%;
			height: 100%;
			font-size: 14px;
		}

		#layout {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			width: 100%;
			height: 100%;
		}

		#submit {
			display: block;
			margin: 0;
			width: 100%;
			font-size: 22px;
			border: 1px solid #222;
			background-color: #333;
			color: #FFF;
			height: 40px;
			border-radius: 0;
		}

		#submit:hover {
			border: 1px solid #111;
			background-color: #222;
		}

		#submit[disabled], #submit[disabled]:hover {
			border: 1px solid #333;
			background-color: #444;
		}

		.title {
			margin: 0;
			padding: 5px;
			background-color: #444;
			border: 1px solid #333;
			color: #FFF;
			text-align: center;
			text-transform: uppercase;
		}
	</style>
</head>
<body>
	<div data-ax5layout="ax1" data-config="{layout:'dock-panel'}" id="layout">
		<div data-dock-panel="{dock:'top',split:false,height:40,minHeight:40,maxHeight:40}">
			<button id="submit">Executar &#9658;</button>
		</div>

		<div data-dock-panel="{dock:'bottom',split:true,height:150,minHeight:10,maxHeight:300}">
			<pre id="output"></pre>
		</div>

		<div data-dock-panel="{dock:'right',split:true,width:250,minWidth:100,maxWidth:350}">
			<p class="title">Entrada de Dados</p>
			<pre id="input"></pre>
		</div>

		<div data-dock-panel="{dock:'center'}">
			<pre id="editor"></pre>
		</div>
	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.5/ace.js"></script>
	<script type="text/javascript" src="https://cdn.rawgit.com/ax5ui/ax5core/master/dist/ax5core.min.js?5cbc9cc42d9824913945da0260f2eb9d5773b317"></script>
	<script type="text/javascript" src="https://cdn.rawgit.com/ax5ui/ax5ui-layout/master/dist/ax5layout.min.js?c28a8add0b87fc4d5ad0ce4b1bb7ff6e7c681ea1"></script>
	<script type="text/javascript" src="<?=$siteURL;?>mode-portugol.js"></script>
	<script type="text/javascript">var d={ajaxUrl:"<?=$ajaxURL;?>",editor:null,output:null,input:null,running:false,scrollDown:function(){var r=d.output.session.getLength()-1;var c=d.output.session.getLine(r).length;d.output.gotoLine(r+1,c)}};</script>
	<script type="text/javascript" src="<?=$siteURL;?>ide.js"></script>
</body>
</html>