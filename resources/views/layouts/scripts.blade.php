<script type="text/javascript" src="assets/js/quke.js"></script>
<script type="text/javascript" src="assets/js/departure-board.js"></script>
<script>
		
			var board = new DepartureBoard (document.getElementById ('test'), { rowCount: 2, letterCount: 25 }); 
			board.setValue (['19:30 London King\'s Cross', '19:42 Sheffield']);
			
			window.setTimeout (function () {
			 	board.setValue ('19:42 Sheffield');
			}, 12000);
		</script>

