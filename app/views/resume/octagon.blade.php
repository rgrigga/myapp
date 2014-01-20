<style>
	#octagon {
	width: 100px;
	height: 100px;
	background: red;
	position: relative;
}

#octagon:before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	border-bottom: 29px solid red;
	border-left: 29px solid #eee;
	border-right: 29px solid #eee;
	width: 42px;
	height: 0;
}

#octagon:after {
	content: "";
	position: absolute;
	bottom: 0;
	left: 0;
	border-top: 29px solid red;
	border-left: 29px solid #eee;
	border-right: 29px solid #eee;
	width: 42px;
	height: 0;
}
</style>

<span id="octagon">STOP</span>