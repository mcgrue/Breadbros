	</div> <!-- container -->
	<!-- <footer>
		&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
		<span class="icon-alone" data-icon="&#xe001;"><span class="screen-reader-text">Twitter</span></span>
	</footer>
	-->
	<?php wp_footer(); ?>
	<script type="text/javascript">

		/* Set box height equal to width */

		function resizeBox() {
			var boxWidth = $('.box').width();
			$('.box').css({
	    		'height': boxWidth + 'px'
			});
		}
		$(document).ready(function() {
			resizeBox();
		});

		/* Resize boxes when the viewport changes */

		$(window).resize(function() {
  			resizeBox();
		});

		/* Brean man talk bubble */

		var phrases=[
			"Hello there, I'm bread man.",
			"What are you looking at?",
			"Stop clicking me.",
			"The clicking, it hurts.",
			"I'm not going to say anything else.",
			"That's it, we're done.",
			"You suck, sir.",
			"You want some?",
			"Don't think I won't fight you.",
			"I may be bread, but I can kill.",
			"Jabba no bother.",
			"You're almost to the last message!",
			"jk, there's a billion of these.",
			"Psych! Last one."
		];
		
		function breadTalk(num) {
			$("#text-bubble span").html(phrases[num]);
		}

		var counter = 0;
		$(".breadman").click( function() {
			breadTalk(counter);
			counter++;
			$("#text-bubble").css("display", "block").addClass("fadeInUp");
			var wait = window.setTimeout( function(){
				$('#text-bubble').removeClass("fadeInUp")},
				1200
			);
        });
	</script>
	</body>
</html>