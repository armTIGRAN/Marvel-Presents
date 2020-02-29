<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">

		<a href="<?php echo home_url()?>"><div class="header-div"></div></a>
		
		
		

		<header class="site-header">

			<div class="hd-search">
				<?php get_search_form(); ?>
			</div>

			<h1 class="title">
				<a href="http://localhost:8888/wordpress/store/">
					<p style="color:red !important">SHOP BY MARVEL</p>
				</a>			
			</h1>
			<hr>
			
			<!-- <br> <br> -->
			
		<div class=HeaderPost>

			<div class=RandomPost >

				<div class="sidebar-column">
					<?php dynamic_sidebar("sidebar1"); ?>
				</div>
			
			</div>

			<div class=RandomPost2> 
				<?php dynamic_sidebar("sidebar2"); ?>
			</div>

		</div>

	
		<br>

			<nav class="site-nav">
				<?php 
				$args = array(
					"theme_location" => "top_menu"
				);

				wp_nav_menu($args); 
				?>
			</nav>

</header>

<?php if (is_page("HOME")) {
		    echo "<br>";
		    masterslider(1); ?>
		    <br>
		    <h1 style="color:red; text-align:center;">Marvel Studios</h1> 
		    <p style= "color:#eeee;">Is an American motion picture studio based at the Walt Disney Studios in Burbank, California and is a subsidiary of Walt Disney Studios, itself a wholly owned division of The Walt Disney Company, with film producer Kevin Feige serving as president.[3] Previously, the studio was a subsidiary of Marvel Entertainment until Disney reorganized the companies in August 2015.
		    <br>
			Dedicated to producing films based on Marvel Comics characters, the studio has been involved in three Marvel-character film franchises to have exceeded $1 billion in North American revenue: the X-Men, Spider-Man, and Marvel Cinematic Universe multi-film franchises. The Spider-Man franchise is licensed to Sony Pictures. Since 2012, Marvel Studios' films are distributed theatrically by Walt Disney Studios Motion Pictures, having previously been distributed by Paramount Pictures from 2008 to 2011. Universal Pictures distributed The Incredible Hulk (2008) and has the right of first refusal to distribute any future Hulk films produced by Marvel Studios, while Sony Pictures distributed Spider-Man: Homecoming (2017) and will distribute any future Spider-Man films produced in conjunction with Marvel Studios.
			<br>
			Marvel Studios has released 20 films since 2008 within the Marvel Cinematic Universe, from Iron Man (2008) to Ant-Man and the Wasp (2018). These films all share continuity with each other, along with the One-Shots produced by the studio and the television shows produced by Marvel Television. The series has grossed over $17 billion at the global box office, making it the highest-grossing film franchise of all time.</p>
			<h2 style="color:red; text-align:center;">Marvel Films</h2> 
			<p style= "color:#eeee;">Following Marvel Entertainment Group's (MEG) ToyBiz deal in 1993, Avi Arad of ToyBiz was named President and CEO of Marvel Films division and of New World Family Filmworks, Inc., a New World Entertainment subsidiary. New World was MEG's former parent corporation and later a fellow subsidiary of the Andrews Group. Marvel Productions became New World Animation by 1993 as Marvel would start up Marvel Films including Marvel Films Animation. Marvel Films Animation shared Tom Tataranowicz with New World Animation as head of development and production. New World Animation (The Incredible Hulk), Saban (X-Men) and Marvel Films Animation (Spider-Man) each produced a Marvel series for television for the 1996–1997 season.[14] It was Marvel Films Animation's only production. By the end of 1993, Arad and 20th Century Fox struck a deal to make a film based on the X-Men.
			<br>
			New World Animation and Marvel Films Animation were sold along with the rest of New World by Andrews Group to News Corporation/Fox as announced in August 1996. As part of the deal, Marvel licensed the rights to Captain America, Daredevil and Silver Surfer to be on Fox Kids Network and produced by Saban. New World Animation continued producing a second season of The Incredible Hulk for UPN.
			</p>
			<h2 style="color:red; text-align:center;">Production</h2> 
			<p style= "color:#eeee;">In 2004, David Maisel was hired as chief operating officer of Marvel Studios as he had a plan for the studio to self-finance movies.[41] Marvel entered into a non-recourse debt structure with Merrill Lynch that was collateralized by certain movie rights to a total of 10 characters from Marvel's vast vault. Marvel got $525 million to make a maximum of 10 movies based on the company's properties over eight years, according to the parameters of the original deal. Those characters were: Ant-Man, The Avengers, Black Panther, Captain America, Cloak & Dagger, Doctor Strange, Hawkeye, Nick Fury, Power Pack and Shang-Chi. Ambac insured the movies would succeed or they would pay the interest payment on the debt and get the movie rights collateral.
			<br>
			Initially Marvel Studios was in talks with Universal Pictures as a possible distributor, as Universal owned the film rights to both Hulk and Namor[ during that time. Negotiations dragged on, so the studio began talks with Paramount Pictures. In the second quarter of 2005, Merrill attempted to back out of full financing of each movie, demanding that Marvel finance 1/3 of the budget. Marvel took back rights in five foreign territories from Paramount for pre-sell to meet that demand. On September 6, 2005, Marvel announced the Merrill Lynch financing deal with Paramount was on as marketer and distributor. Also, the parent company changed its name from Marvel Enterprises, Inc. to Marvel Entertainment, Inc. to reflect the change to self-production.
			<br>
			The studio moved to a new location over a Mercedes-Benz dealership in Beverly Hills. Maisel was also named vice-chairman of the studio, but reported to Isaac Perlmutter. In October 2005, Michael Helfant joined the studio as president and chief operating officer.
			<br>
			In November 2005, Marvel gained the film rights to Iron Man from New Line Cinema. Marvel revealed that it had regained the film rights to Hulk from Universal in February 2006, in exchange for letting Universal own the distribution rights to The Incredible Hulk and the right of first refusal to pick up the distribution rights to any future Marvel Studios-produced Hulk films.In April 2006, Thor was announced to be a Marvel Studios production.Lions Gate Entertainment subsequently dropped the Black Widow motion picture project it had since 2004 giving the rights back to Marvel.
			<br>
			Maisel and Arad fought over the rate of movie releases and strength of characters in the movie line up. Perlmutter supported Maisel and thus, in May 2006, Arad quit as studio chair and CEO. In March 2007, David Maisel was named Chairman and Kevin Feige was named President of Production as Iron Man began filming.
			<br>
			In January 2008, Marvel Animation was incorporated to direct Marvel's efforts in animation and home entertainment markets including then animation efforts with Lionsgate and Nickelodeon.[40] The company in March agreed to a five picture basic cable distribution with FX for Iron Man and The Incredible Hulk movies with the additional movies to be named later.[52] In November, Marvel Studios signed a lease with Raleigh Studios to host its headquarters and production offices and film the next four movies on the studios' slate, including Iron Man 2 and Thor, at their Manhattan Beach facilities. By September 2008, Paramount added to its domestic film distribution contract 5 additional Marvel movies' foreign distribution.
			<br>
			In 2009, Marvel attempted to hire a team of writers to help come up with creative ways to launch its lesser-known properties, such as Black Panther, Cable, Iron Fist, Nighthawk, and Vision. In early 2009, Sony returned all Spider-Man television rights (including live action) in exchange for an adjustment to the movie rights.

</p>

<?php } ?>
	

	
