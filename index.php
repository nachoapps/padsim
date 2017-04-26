<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Puzzles and Dragons Simulator" />
	<title>Pad Simulator</title>
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="pad.css?v3">
	<link rel="shortcut icon" href="favicon.ico?v2" />
	<script src="pad.js?v7"></script>
</head>
<body>
<div id="wrapwrap">
	<div id="lineback">
		<button onclick="requestAction('help')" class="topbutton image3">?</button>
		<button onclick="requestAction('options')" class="topbutton image6">Options</button>
		<button onclick="requestAction('damage')" class="topbutton image1">Damage</button>
		<button onclick="requestAction('timer')" class="topbutton image2">Timer</button>
		<div style="float:left;line-height:25px;">Time: <span id="time"></span>&nbsp;</div>
		<button onclick="requestAction('ctimer', 0)" id="image4" style="display:none" class="topbutton image4">Minus</button>
		<button onclick="requestAction('ctimer', 1)" id="image5" style="display:none" class="topbutton image5">Plus</button>
		<div style="float:right;line-height:25px">dawnGlare PAD Simulator</div>
	</div>
	<div id="damage">
		<input id='total' value='Total Damage Dealt' disabled>
		<div id='multic'></div>
	</div>
	<div id="game">
		<div id="board">
			<div id="arrowSurfaceC">
				<canvas id="arrowSurface" width="540px" height="450px"></canvas>
			</div>
			<div id="tiles"></div>
			<button id="showDrops" style="display:none" onclick="requestAction('showdrops')">Show Drops</button>
		</div>
	</div>
	<div id="buttons">
		<button id="random" onclick="requestAction('randomize')">Random</button>
		<button onclick="requestAction('loadboard')">Reset</button>
		<button onclick="requestAction('replay')">Replay</button>
		<button onclick="requestAction('copypattern')">Share</button>
		<button onclick="requestAction('changetheworld')">CtW</button>
		<button onclick="requestAction('skyfall')">SkyFall</button>
		<div id="colorchange"><textarea id="entry" maxlength=30></textarea>
		<button onclick="requestAction('applypattern');" id="convert" style="margin-bottom:10px">apply</button>
		<input type="text" placeholder="H" maxlength="2" id="colorfrom" name="colorfrom">
		<input type="text" placeholder="G" maxlength="2" id="colorto" name="colorto">
		<br /><button onclick="requestAction('convert')" id="convert">convert</button></div>
	</div>
	<div id="infobooth">
	</div>
</div>
</body>
</html>