<?php

/**
 * Template Name: Home2 Template
 * by www.eminetwork.com
 */

?>
<?php get_header("2"); ?>
<style>
/* Hero Slider */

.ut-hero-slider {
	border: none !important;
	height: 100%;
	position: relative;
}
.hero.slider {
	background: #FFFFFF;
}
.hero.slider .parallax-overlay {
	z-index: 3;
	display: none;
}
.ut-hero-slider .flex-viewport {
	width: 100%;
	height: 100%;
}
.ut-hero-slider .slides {
	height: 100%;
	position: relative;
	width: 100%;
}
.ut-hero-slider .slides li {
	background-position: center center !important;
	-webkit-background-size: cover !important;
	-moz-background-size: cover !important;
	background-size: cover !important;
	height: 100%;
	position: relative;
}
.ut-hero-captions {
	position: absolute !important;
	width: 100%;
	z-index: 10;
	background: none;
	border: none;
	top: 0;
}
a.ut-flex-control {
	display: block;
	width: 60px;
	height: 60px;
	margin: 0;
	position: absolute;
	top: 50%;
	z-index: 11;
	margin-top: -30px;
	overflow: hidden;
	opacity: 1;
	cursor: pointer;
	color: #ffffff;
	-webkit-transition: all .3s ease;
	-moz-transition: all .3s ease;
	transition: all .3s ease;
	text-align: center;
}
a.ut-flex-control:before {
	font-family: 'FontAwesome';
	font-size: 40px;
	line-height: 60px;
	display: inline-block;
	content: "\f104";
}
a.ut-flex-control.next:before {
	content: "\f105";
}
a.ut-flex-control.prev {
	left: 0;
	-webkit-border-radius: 0 3px 3px 0;
	-moz-border-radius: 0 3px 3px 0;
	border-radius: 0 3px 3px 0;
}
a.ut-flex-control.next {
	right: 0;
	-webkit-border-radius: 3px 0 0 3px;
	-moz-border-radius: 3px 0 0 3px;
	border-radius: 3px 0 0 3px;
}
a.ut-flex-control.prev:hover {
	background: rgba(255, 255, 255, 0.15);
	color: #FFFFFF;
}
a.ut-flex-control.next:hover {
	background: rgba(255, 255, 255, 0.15);
	color: #FFFFFF;
}
/* font style for hero slider */

.hero.slider .hero-title.extralight {
	font-family: 'ralewayextralight', "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.hero.slider .hero-title.light {
	font-family: 'ralewaylight', "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.hero.slider .hero-title.regular {
	font-family: 'ralewayregular', "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.hero.slider .hero-title.medium {
	font-family: 'ralewaymedium', "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.hero.slider .hero-title.semibold {
	font-family: GothamM;
}
.hero.slider .hero-title.bold {
	font-family: 'ralewaybold', "Helvetica Neue", Helvetica, Arial, sans-serif;
}
.break {
	margin-top: 30px;
}
.carousel {
	/*height: 700px;*/

	margin-bottom: 10px;
	margin-top: 90px;
}
.carousel .item img {
	/*position: absolute;*/

	background: no-repeat center;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	width: 100%;
	height: 445px;
}

@media (max-width: 768px) {
.carousel {
	height: 300px;
	margin-bottom: 10px;
	margin-top: 90px;
}
.carousel .item img {
	/*position: absolute;*/


	background: no-repeat center;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	width: 100%;
	height: 300px;
}
}

@media (max-width: 600px) {
.carousel {
	height: 250px;
	margin-bottom: 10px;
	margin-top: 90px;
}
.carousel .item img {
	/*position: absolute;*/

	background: no-repeat center;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	width: 100%;
	height: 250px;
}
}
.bottom {
	padding-bottom: 50px;
}
span.blue {
	color: #8ecee5;
}

@media (max-width: 768px) {
.bar {
	border: none;
}
}
img.special-logo {
	max-width: 33.33%;
	margin-right: 0px;
	width: 32%;
}
input {
	background: #e6e6e6;
	border-radius: 5px;
	border: solid 1px #bbb;
}
.button-orange {
	color: #ffffff;
	display: inline-block;
	padding: 12px 24px;
	text-shadow: none;
	border-radius: 5px;
	background-color: #f57e20;
	text-transform: uppercase;
	font-family: GothamBook;
	font-size: 16px;
	padding-top: 10px;
}
.button-orange:hover {
	text-decoration: none;
}
/*.col-lg-4-content {

    width: 95%;

}*/



.bar {
	padding-right: 30px;
	padding-left: 0px;
	border-right: 1px solid #b5aeaa;
	height: 375px;
}
.bar-last {
	padding-right: 30px;
}

@media (max-width: 1200px) {
.bar {
	padding-right: 0px;
	padding-left: 0px;
	border: none;
	height: auto;
}
.bar-last {
	padding-right: 0px;
}
}
.banner img {
	position: absolute;
	z-index: 5;
	max-width: 100%;/*height: 150px;*/

}
.emi_video {
	cursor: pointer;
}
.testtest {
	display: none;
}
</style>

<div class="banner"></div>
<p>This dude's bullshit is unimpressive.</p>

    <?php the_content();?>
<?php get_footer(); ?>
