
/**
 * Table of Contents:
 *
 * 1.0 Reset
 * 2.0 Repeatable Patterns
 * 3.0 Basic Structure
 * 4.0 Header
 *   4.1 Site Header
 *   4.2 Navigation
 * 5.0 Content
 *   5.1 Entry Header
 *   5.2 Entry Meta
 *   5.3 Entry Content
 *   5.4 Galleries
 *   5.5 Post Formats
 *   5.6 Attachments
 *   5.7 Post/Paging Navigation
 *   5.8 Author Bio
 *   5.9 Archives
 *   5.10 Search Results/No posts
 *   5.11 404
 *   5.12 Comments
 *   5.13 Multisite
 *   5.14 Sharing
 *   5.15 bbPress
 *   5.16 Modal
 *   5.17 Captcha
 *   5.18 Email Subscriptions
 * 6.0 Sidebar
 *   6.1 Widgets
 * 7.0 Footer
 * 8.0 Media Queries
 * 9.0 Print
 * ----------------------------------------------------------------------------
 */


/**
 * 1.0 Reset
 *
 * Modified from Normalize.css to provide cross-browser consistency and a smart
 * default styling of HTML elements.
 *
 * @see http://git.io/normalize
 * ----------------------------------------------------------------------------
 */


@font-face {
  font-family: 'SpacedPixel7';
  font-style: normal;
  font-weight: normal;
  src: url(fonts/SpacedPixel7.woff) format('woff');
}

@font-face {
  font-family: 'SpacedPixel7';
  font-style: normal;
  font-weight: bold;
  src: url(fonts/SpacedPixel7-Bold.woff) format('woff');
}

@font-face {
  font-family: 'SpacedPixel7-Mono';
  font-style: normal;
  font-weight: normal;
  src: url(fonts/SpacedPixel7-Mono.woff) format('woff');
}

* {
	-webkit-box-sizing: border-box;
	-moz-box-sizing:    border-box;
	box-sizing:         border-box;
	text-rendering: optimizeSpeed !important; /*geometricPrecision*/
	-webkit-font-smoothing: none !important;
	font-smooth: never !important;
	text-shadow: none !important;
	-webkit-backface-visibility: hidden !important;
	-moz-backface-visibility:    hidden !important;
	-ms-backface-visibility:     hidden !important;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
	filter:progid:DXImageTransform.Microsoft.Alpha(opacity=99);
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
nav,
section,
summary {
	display: block;
}

audio,
canvas,
video {
	display: inline-block;
}

audio:not([controls]) {
	display: none;
	height: 0;
}

[hidden] {
	display: none;
}

html {
	font-size: 100%;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	word-wrap: normal;
}

html,
button,
input,
select,
textarea {
	font-family: "SpacedPixel7","Lucida Console", "Monaco", monospace;}

body {
	color: #000;
	line-height: 1;
	margin: 0;
}

html,
body {
	min-height: 100%;
}

a,
a:visited {
	color: #25b15b;
	text-decoration: none;
}

a:active,
a:hover,
a:focus {
	color: #F49433;
	outline: none;
}

a:focus {
	outline: dotted;
}

a:hover {
	/*text-decoration: underline;*/
	text-decoration: none;
}

a:hover:before,
a:focus:before {
	text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	font-weight: bold;
	clear: both;
}

h1 {
	font-size: 400%;
}

h2 {
	font-size: 300%;
}

h3 {
	font-size: 250%;
}

h4 {
	font-size: 200%;
}

h5 {
	font-size: 150%;
}

address {
	font-style: italic;
	margin: 0 0 24px;
}

abbr[title] {
	border-bottom: 1px dotted;
}

b,
strong {
	font-weight: bold;
}

dfn {
	font-style: italic;
}

mark {
	background: #ff0;
	color: #000;
}

p {
	margin: 0 0 1em 0;
}

p + ul,
p + ol {
	margin-top: -1em;
}

ol {
	list-style-type: decimal;
}

p:last-child {
	margin: 0;
}

dl {
	margin-bottom: 1em;
}

code,
kbd,
pre,
samp {
	font-family: "SpacedPixel7-Mono","Lucida Console", "Monaco", monospace;	font-size: 14px;
	-webkit-hyphens: none;
	-moz-hyphens:    none;
	-ms-hyphens:     none;
	hyphens:         none;
}

pre,
code {
	font-family: "SpacedPixel7-Mono","Lucida Console", "Monaco", monospace;	font-size: 100%;
	overflow: auto;
	white-space: pre;
	white-space: pre-wrap;
	word-wrap: break-word;
}

pre {
	margin: 0.5em 0;
	
						color: #FFF;
						border-style: solid;
						border-width: 15px;
						-moz-border-image: url(images/terminal.png) 15 stretch;
						-webkit-border-image: url(images/terminal.png) 15 stretch;
						-o-border-image: url(images/terminal.png) 15 stretch;
						border-image: url(images/terminal.png) 15 fill stretch;
					}

blockquote,
q {
	-webkit-hyphens: none;
	-moz-hyphens:    none;
	-ms-hyphens:     none;
	hyphens:         none;
	quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
	content: "\"";
	color: #333;
	display: inline;
}

blockquote {
	font-size: 100%;
	font-style: normal;
	margin: 0.125em;
	padding-left: 1em;
	color: #808080;
	background: #fff;
}

blockquote p {
	display: inline;
}

small {
	font-size: smaller;
}

sub,
sup {
	font-size: 75%;
	line-height: 0;
	position: relative;
	vertical-align: baseline;
}

sup {
	top: -0.5em;
}

sub {
	bottom: -0.25em;
}

dt {
	font-weight: bold;
}

menu,
ol,
ul {
	padding-left: 1em;
}

ul {
	list-style-type: square;
	margin-bottom: 1em;
}

ul ul {
	margin-bottom: 0;
}

nav ul,
nav ol {
	list-style: none;
	list-style-image: none;
}

img {
	-ms-interpolation-mode: bicubic;
	border: 0;
	vertical-align: middle;
}

svg:not(:root) {
	overflow: hidden;
}

figure {
	margin: 0;
}

form {
	margin: 0;
}

fieldset {
	border: none;
	margin: 0;
	padding: 0;
}

legend {
	border: 0;
	padding: 0;
	white-space: normal;
}

button,
input,
select,
textarea {
	font-size: 100%;
	margin: 0;
	max-width: 100%;
	vertical-align: baseline;
}

input {
	height: 1em;
}

input[type=checkbox],
input[type=radio] {
	height: auto;
}

select,
input[type=file] {
	height: 1.5em;
}

button,
input {
	line-height: normal;
}

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
	-webkit-appearance: button;
	cursor: pointer;
}

button[disabled],
input[disabled] {
	cursor: default;
}

input[type="checkbox"],
input[type="radio"] {
	padding: 0;
}

input[type="search"] {
	-webkit-appearance: textfield;
	padding-right: 2px; /* Don't cut off the webkit search cancel button */
	width: 270px;
}

input[type="search"]::-webkit-search-decoration {
	-webkit-appearance: none;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
	border: 0;
	padding: 0;
}

textarea {
	overflow: auto;
	vertical-align: top;
}

table {
	border-bottom: 1px solid #ededed;
	border-collapse: collapse;
	border-spacing: 0;
	font-size: 14px;
	line-height: 2;
	margin: 0 0 20px;
	width: 100%;
}

caption,
th,
td {
	font-weight: normal;
	text-align: left;
}

caption {
	font-size: 16px;
	margin: 20px 0;
}

th {
	font-weight: bold;
	text-transform: uppercase;
}

td {
	border-top: 1px solid #ededed;
	padding: 6px 10px 6px 0;
}

del {
	color: #333;
}

ins {
	background: #fff9c0;
	text-decoration: none;
}

hr {
	background: url(images/dotted-line.png) repeat center top;
	background-size: 4px 4px;
	border: 0;
	height: 1px;
	margin: 0 0 24px;
}


/**
 * 2.0 Repeatable Patterns
 * ----------------------------------------------------------------------------
 */


<? foreach ( $icon as $iconKey => $iconValue ): ?>
	.steam-icon-before:before {
		content: 235b;
		padding-right: 0.25em;
	}
<? endforeach; ?>

.genericon:before,
.menu-toggle:after,
.featured-post:before,
.date a:before,
.entry-meta .author a:before,
.format-audio .entry-content:before,
.comments-link a:before,
.tags-links a:first-child:before,
.categories-links a:first-child:before,
.edit-link a:before,
.attachment .entry-title:before,
.attachment-meta:before,
.attachment-meta a:before,
.comment-awaiting-moderation:before,
.comment-reply-link:before,
.comment-reply-login:before,
.comment-reply-title small a:before,
.bypostauthor > .comment-body .fn:before,
.error404 .page-title:before {
	display: inline-block;
	margin-right: 0.125em;
}

/* Clearing floats */
.clear:after,
.attachment .entry-header:after,
.site-footer .widget-area:after,
.entry-content:after,
.page-content:after,
.navigation:after,
.nav-links:after,
.gallery:after,
.comment-form-author:after,
.comment-form-email:after,
.comment-form-url:after,
.comment-body:after {
	clear: both;
}

.clear:before,
.clear:after,
.attachment .entry-header:before,
.attachment .entry-header:after,
.site-footer .widget-area:before,
.site-footer .widget-area:after,
.entry-content:before,
.entry-content:after,
.page-content:before,
.page-content:after,
.navigation:before,
.navigation:after,
.nav-links:before,
.nav-links:after,
.gallery:before,
.gallery:after,
.comment-form-author:before,
.comment-form-author:after,
.comment-form-email:before,
.comment-form-email:after,
.comment-form-url:before,
.comment-form-url:after,
.comment-body:before,
.comment-body:after {
	content: "";
	display: table;
}

/* Assistive text */
.screen-reader-text {
	clip: rect(1px, 1px, 1px, 1px);
	position: absolute !important;
}

.screen-reader-text:focus {
	background-color: #f1f1f1;
	border-radius: 3px;
	box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
	clip: auto !important;
	color: #21759b;
	display: block;
	font-size: 14px;
	font-weight: bold;
	height: auto;
	line-height: normal;
	padding: 15px 23px 14px;
	position: absolute;
	left: 5px;
	top: 5px;
	text-decoration: none;
	width: auto;
	z-index: 100000; /* Above WP toolbar */
}

input:focus,
textarea:focus {
	outline: 0;
}

/* Buttons */
button,
input[type="submit"],
input[type="button"],
input[type="reset"] {
	
						color: #FFF;
						background: transparent;
						border-style: solid;
						border-width: 6px;
						-moz-border-image: url(images/button-dark.png) 6 stretch;
						-webkit-border-image: url(images/button-dark.png) 6 stretch;
						-o-border-image: url(images/button-dark.png) 6 stretch;
						border-image: url(images/button-dark.png) 6 fill stretch;
					}

button:hover,
button:focus,
input[type="submit"]:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:focus,
input[type="button"]:focus,
input[type="reset"]:focus,
.spoof-button {
	outline: none;
	
						color: #000;
						background: transparent;
						border-style: solid;
						border-width: 6px;
						-moz-border-image: url(images/button-primary.png) 6 stretch;
						-webkit-border-image: url(images/button-primary.png) 6 stretch;
						-o-border-image: url(images/button-primary.png) 6 stretch;
						border-image: url(images/button-primary.png) 6 fill stretch;
						color: #fff;
}

button:active,
button:focus,
button:hover,
input[type="submit"]:active,
input[type="submit"]:focus,
input[type="submit"]:hover,
input[type="button"]:active,
input[type="button"]:focus,
input[type="button"]:hover,
input[type="reset"]:active,
input[type="reset"]:focus,
input[type="reset"]:hover,
.spoof-button:active,
.spoof-button:focus,
.spoof-button:hover {
	
						color: #333;
						background: transparent;
						border-style: solid;
						border-width: 6px;
						-moz-border-image: url(images/button-secondary.png) 6 stretch;
						-webkit-border-image: url(images/button-secondary.png) 6 stretch;
						-o-border-image: url(images/button-secondary.png) 6 stretch;
						border-image: url(images/button-secondary.png) 6 fill stretch;
					}

input[type="text"],
input[type="textarea"],
select,
input[type="password"],
input[type="search"],
input[type="textarea"],
input[type="email"],
input[type="number"],
input[type="url"],
textarea {
	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-white.png) 7 stretch;
						-webkit-border-image: url(images/inset-white.png) 7 stretch;
						-o-border-image: url(images/inset-white.png) 7 stretch;
						border-image: url(images/inset-white.png) 7 fill stretch;
						padding: 0;
}

input[type="text"]:hover,
input[type="text"]:focus,
input[type="text"]:active,
input[type="textarea"]:hover,
input[type="textarea"]:focus,
input[type="textarea"]:active,
select:hover,
select:focus,
select:active,
input[type="password"]:hover,
input[type="password"]:focus,
input[type="password"]:active,
input[type="search"]:hover,
input[type="search"]:focus,
input[type="search"]:active,
input[type="email"]:hover,
input[type="email"]:focus,
input[type="email"]:active,
input[type="number"]:hover,
input[type="number"]:focus,
input[type="number"]:active,
input[type="url"]:hover,
input[type="url"]:focus,
input[type="url"]:active,
input[type="textarea"]:hover,
input[type="textarea"]:focus,
input[type="textarea"]:active,
textarea:hover,
textarea:focus,
textarea:active {
	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-white-selected.png) 7 stretch;
						-webkit-border-image: url(images/inset-white-selected.png) 7 stretch;
						-o-border-image: url(images/inset-white-selected.png) 7 stretch;
						border-image: url(images/inset-white-selected.png) 7 fill stretch;
						outline: none;
	box-shadow: none;
	padding: 0;
}

select {
	background-image: url(images/drop-down-arrow.png);
	background-repeat: no-repeat;
	background-position: center right;
}

.post-password-required input[type="submit"] {
	padding: 7px 24px 4px;
	vertical-align: bottom;
}

.post-password-required input[type="submit"]:active {
	padding: 5px 24px 6px;
}

/* Placeholder text color -- selectors need to be separate to work. */
::-webkit-input-placeholder {
	color: #7d7b6d;
}

:-moz-placeholder {
	color: #7d7b6d;
}

::-moz-placeholder {
	color: #7d7b6d;
}

:-ms-input-placeholder {
	color: #7d7b6d;
}

/*
 * Responsive images
 *
 * Fluid images for posts, comments, and widgets
 */
.entry-content img,
.entry-summary img,
.comment-content img,
.widget img,
.wp-caption {
	max-width: 100%;
}

/* Make sure images with WordPress-added height and width attributes are scaled correctly. */
.entry-content img,
.entry-summary img,
.comment-content img[height],
img[class*="align"],
img[class*="wp-image-"],
img[class*="attachment-"] {
	height: auto;
}

img.size-full,
img.size-large,
img.wp-post-image {
	height: auto;
	max-width: 100%;
}

/* Make sure videos and embeds fit their containers. */
embed,
iframe,
object,
video {
	max-width: 100%;
}

/* Override the Twitter embed fixed width. */
.entry-content .twitter-tweet-rendered {
	max-width: 100% !important;
}

/* Images */
.alignleft {
	float: left;
}

.alignright {
	float: right;
}

.aligncenter {
	display: block;
	margin-left: auto;
	margin-right: auto;
}

figure.wp-caption.alignleft,
img.alignleft,
.wp-caption.alignleft  {
	margin: 0.25em 0.5em 0.25em 0;
}

figure.wp-caption.alignright,
img.alignright,
.wp-caption.alignright {
	margin: 0.25em 0 0.25em 0.5em;
}

img.aligncenter {
	margin: 0.25em auto;
}

img.alignnone {
	margin: 0.125em 0;
}

.wp-caption,
.entry-caption,
.gallery-caption {
	color: #808080;
	font-size: 50%;
	transition: color 0.333s ease;
}

.wp-caption:hover,
.wp-caption:focus,
.wp-caption:active {
	color: #000;
}

div.wp-caption.alignright img[class*="wp-image-"] {
	float: right;
}

div.wp-caption.alignright .wp-caption-text {
	padding-left: 10px;
}

img.wp-smiley,
.rsswidget img {
	border: 0;
	border-radius: 0;
	box-shadow: none;
	margin-bottom: 0;
	margin-top: 0;
	padding: 0;
}

.wp-caption.alignleft + ul,
.wp-caption.alignleft + ol {
	list-style-position: inside;
}

.faq dl dt:before,
.faq dl dd:before {
	width: 1em;
	display: inline-block;
	font-weight: bold;
}

.faq dl dt:before {
	content: "Q:";
	color: #198c3d;
}

.faq dl dd:before {
	content: "A:";
	color: #D5720D;
}

ul.rooms-list,
ul.beings-list,
ul.races-list {
	list-style: none;
}

ul.rooms-list ul {
	list-style: none;
}

ul.rooms-list li.room {
	margin-left: 0;
	padding-left: 40px;
	background: url('images/room-bullets/default.png') left center no-repeat;
	margin: 0.25em 0;
}

ul.rooms-list li.launcher { background-image: url(images/room-bullets/launcher.png); }
ul.rooms-list li.accelerator { background-image: url(images/room-bullets/accelerator.png); }
ul.rooms-list li.laser { background-image: url(images/room-bullets/laser.png); }
ul.rooms-list li.hacker { background-image: url(images/room-bullets/hacker.png); }
ul.rooms-list li.tractor-beam { background-image: url(images/room-bullets/tractor-beam.png); }
ul.rooms-list li.telebomb { background-image: url(images/room-bullets/telebomb.png); }
ul.rooms-list li.drone-bay { background-image: url(images/room-bullets/drone-bay.png); }
ul.rooms-list li.fighter-bay { background-image: url(images/room-bullets/fighter-bay.png); }

ul.rooms-list li.shield { background-image: url(images/room-bullets/shield.png); }
ul.rooms-list li.barrier { background-image: url(images/room-bullets/barrier.png); }
ul.rooms-list li.thruster { background-image: url(images/room-bullets/thruster.png); }
ul.rooms-list li.phaser { background-image: url(images/room-bullets/phaser.png); }
ul.rooms-list li.security { background-image: url(images/room-bullets/security.png); }
ul.rooms-list li.jammer { background-image: url(images/room-bullets/jammer.png); }

ul.rooms-list li.bridge { background-image: url(images/room-bullets/bridge.png); }
ul.rooms-list li.life-support { background-image: url(images/room-bullets/life-support.png); }
ul.rooms-list li.infirmary { background-image: url(images/room-bullets/infirmary.png); }
ul.rooms-list li.teleporter { background-image: url(images/room-bullets/teleporter.png); }
ul.rooms-list li.sensor { background-image: url(images/room-bullets/sensor.png); }
ul.rooms-list li.generator { background-image: url(images/room-bullets/generator.png); }
ul.rooms-list li.repulsor-beam { background-image: url(images/room-bullets/repulsor-beam.png); }

ul.races-list li {
	margin-left: 0;
	padding-left: 48px;
	background: url('images/races/default.png') left center no-repeat;
	margin: 0.25em 0;
}

ul.races-list li.human { background-image: url(images/races/human.png); }
ul.races-list li.android { background-image: url(images/races/android.png); }
ul.races-list li.brikta { background-image: url(images/races/brikta.png); }
ul.races-list li.solluch { background-image: url(images/races/solluch.png); }
ul.races-list li.vwee { background-image: url(images/races/vwee.png); }
ul.races-list li.dioona { background-image: url(images/races/dioona.png); }




/**
 * 3.0 Basic Structure
 * ----------------------------------------------------------------------------
 */

html {
	background-color: #000;
}

.site {
	margin: 0 auto;
	width: 100%;
	height: 100%;
}

.site-main {
	position: relative;
	max-width: 1080px;
	margin: 0 auto;
}

.site-main .sidebar-container {
	height: 0;
	position: absolute;
	top: 40px;
	width: 100%;
	z-index: 1;
}

.site-main .sidebar-inner {
	margin: 0 auto;
	max-width: 1040px;
}


/**
 * 4.0 Header
 * ----------------------------------------------------------------------------
 */

/**
 * 4.1 Site Header
 * ----------------------------------------------------------------------------
 */

.site-header {
	position: relative;
}

.site-header .home-link {
	color: #fff;
	display: block;
	margin: 0 auto;
	max-width: 1080px;
	padding: 0 20px;
	text-decoration: none;
	text-align: center;
	width: 100%;
}

.site-title {
	font-size: 600%;
	font-weight: bold;
	line-height: 1;
	margin: 0;
	padding: 0.5em 0 0.125em 0;
	color: #fff;
}

#site-logo {
	width: 100%;
	height: auto;
	max-width: 735px;
	max-height: 120px;
	margin: 2em auto 1em;
}

.site-description {
	font-size: 200%;
	margin: 0.25em auto 1em;
}


/**
 * 4.2 Navigation
 * ----------------------------------------------------------------------------
 */

.main-navigation {
	clear: both;
	margin: 0 auto;
	max-width: 1080px;
	min-height: 45px;
	position: relative;
	
						color: #FFF;
						background: transparent;
						border-style: solid;
						border-width: 12px 15px;
						-moz-border-image: url(images/panel-dark.png) 12 15 stretch;
						-webkit-border-image: url(images/panel-dark.png) 12 15 stretch;
						-o-border-image: url(images/panel-dark.png) 12 15 stretch;
						border-image: url(images/panel-dark.png) 12 15 fill stretch;
					 
}

ul.nav-menu,
div.nav-menu > ul {
	margin: 0;
	padding: 0 40px 0 0;
}

.nav-menu li {
	display: inline-block;
	position: relative;
	margin: 0.25em 0.125em;
}

.nav-menu li:first-child {
	margin-left: 0;
}

.nav-menu li:last-child {
	margin-right: 0;
}

.nav-menu li a {
	display: block;
	font-size: 200%;
	line-height: 1;
	text-decoration: none;
	
						color: #FFF;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-dark.png) 7 stretch;
						-webkit-border-image: url(images/inset-dark.png) 7 stretch;
						-o-border-image: url(images/inset-dark.png) 7 stretch;
						border-image: url(images/inset-dark.png) 7 fill stretch;
						padding: 0.125em 0.25em;
}

.nav-menu .sub-menu,
.nav-menu .children {
	background-color: #220e10;
	border: 2px solid #f7f5e7;
	border-top: 0;
	padding: 0;
	position: absolute;
	left: -2px;
	z-index: 99999;
	height: 1px;
	width: 1px;
	overflow: hidden;
	clip: rect(1px, 1px, 1px, 1px);
}

.nav-menu .sub-menu ul,
.nav-menu .children ul {
	border-left: 0;
	left: 100%;
	top: 0;
}

ul.nav-menu ul a,
.nav-menu ul ul a {
	color: #fff;
	margin: 0;
	width: 200px;
}

ul.nav-menu ul a:hover,
.nav-menu ul ul a:hover,
ul.nav-menu ul a:focus,
.nav-menu ul ul a:focus {
	background-color: #db572f;
}

ul.nav-menu li:hover > ul,
.nav-menu ul li:hover > ul,
ul.nav-menu .focus > ul,
.nav-menu .focus > ul {
	clip: inherit;
	overflow: inherit;
	height: inherit;
	width: inherit;
}

.nav-menu .current_page_item > a,
.nav-menu .current_page_ancestor > a,
.nav-menu .current-menu-item > a,
.nav-menu .current-menu-ancestor > a,
.bbpress .nav-menu li#menu-item-80 a /* Hack to get Forums menu item to highlight */,
.single-post .nav-menu li#menu-item-31 a /* Hack to get News menu item to highlight */ {
	
						color: #000;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-primary.png) 7 stretch;
						-webkit-border-image: url(images/inset-primary.png) 7 stretch;
						-o-border-image: url(images/inset-primary.png) 7 stretch;
						border-image: url(images/inset-primary.png) 7 fill stretch;
						padding: 0.125em 0.25em;
	color: #fff;
}

.nav-menu li:hover > a,
.nav-menu li a:hover,
.nav-menu li:focus > a,
.nav-menu li a:focus {
	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-secondary.png) 7 stretch;
						-webkit-border-image: url(images/inset-secondary.png) 7 stretch;
						-o-border-image: url(images/inset-secondary.png) 7 stretch;
						border-image: url(images/inset-secondary.png) 7 fill stretch;
						color: #fff;
	padding: 0.125em 0.25em;
}

.bbpress .nav-menu li#menu-item-80 a:hover,
.bbpress .nav-menu li#menu-item-80 a:focus,
.single-post .nav-menu li#menu-item-31 a:hover,
.single-post .nav-menu li#menu-item-31 a:focus {
	color: #000;
}

.menu-toggle {
	display: none;
}

/* Navbar */
.navbar {
	margin: 0 auto;
	width: 100%;
}

.site-header .search-form {
	position: absolute;
	right: 0.125em;
	top: 0.25em;
	
						color: #FFF;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-dark.png) 7 stretch;
						-webkit-border-image: url(images/inset-dark.png) 7 stretch;
						-o-border-image: url(images/inset-dark.png) 7 stretch;
						border-image: url(images/inset-dark.png) 7 fill stretch;
					}

.site-header input.search-field {
	background-color: transparent;
	background-image: url(images/search-icon.png);
	background-position: 6px center;
	background-repeat: no-repeat;
	background-size: 18px 18px;
	border: 3px solid transparent;
	font-size: 200%;
	cursor: pointer;
	height: 36px;
	padding: 4px 0 4px 30px;
	position: relative;
	-webkit-transition: width 333ms ease, background 333ms ease, padding-left 333ms ease, padding-right 333ms ease;
	transition:         width 333ms ease, background 333ms ease, padding-left 333ms ease, padding-right 333ms ease;
	width: 0;
}

.site-header input.search-field:focus {
	background-color: #fff;
	border-color: #a2a2a2;
	cursor: text;
	outline: 0;
	width: 230px;
	
}


/**
 * 5.0 Content
 * ----------------------------------------------------------------------------
 */

#content {
	padding-top: 2em;
}

#content > .hentry {
	margin: 2em 0;
	
						color: #333;
						background: transparent;
						border-style: solid;
						border-width: 12px 15px;
						-moz-border-image: url(images/panel-light.png) 12 15 stretch;
						-webkit-border-image: url(images/panel-light.png) 12 15 stretch;
						-o-border-image: url(images/panel-light.png) 12 15 stretch;
						border-image: url(images/panel-light.png) 12 15 fill stretch;
					}

#content > .hentry:first-child {
	margin-top: 0;
}

#content code {
	color: #333;
}

.hentry {
	
}

.entry-header,
.entry-content,
.entry-summary,
.entry-meta {
	margin: 0 auto;
	width: 100%;
}

.entry-meta #email-subscribe,
.entry-meta .author-info {
	display: none;
}

.sidebar .entry-header,
.sidebar .entry-content,
.sidebar .entry-summary,
.sidebar .entry-meta {
	max-width: 1040px;
	padding: 0 376px 0 60px;
}


/**
 * 5.1 Entry Header
 * ----------------------------------------------------------------------------
 */

.sidebar .entry-header .entry-meta {
	padding: 0;
}

.entry-thumbnail img {
	display: block;
	margin: 0 auto 0.25em;
}

.entry-header {
}

.page-id-4 .entry-header:before,
.entry-title {
	font-weight: bold;
	font-size: 500%;
	color: #000;
}

.page-id-4 .entry-title {
	display: none;
}

.page-id-4 .entry-header:before {
	content: "What Is Spacewrights?";
}

.entry-title a {
	color: #000;
	/*text-decoration: underline;*/
}

.entry-title a:visited {
	color: #333;
	text-decoration: none;
}

.entry-title a:hover {
	color: #D5720D;
	text-decoration: none;
}


/**
 * 5.2 Entry Meta
 * ----------------------------------------------------------------------------
 */

.entry-meta {
	clear: both;
	font-size: 200%;
}

.entry-meta > span {
	margin-right: 20px;
}

.entry-meta > span:last-child {
	margin-right: 0;
}

.featured-post:before {
	content: "\f308";
	margin-right: 2px;
}

.entry-meta .date a:before {
	content: "\231a";
}

.comments-link a:before {
	content: "\2339";
}

.entry-meta .author a:before {
	content: "\233f";
}

.categories-links a:first-child:before {
	content: "\2339";
}

.tags-links a:first-child:before {
	content: "\233e";
}

.edit-link a:before {
	content: "\2336";
}

.sticky.format-standard .entry-meta .date,
.sticky.format-audio .entry-meta .date,
.sticky.format-chat .entry-meta .date,
.sticky.format-image .entry-meta .date,
.sticky.format-gallery .entry-meta .date {
	display: none;
}


/**
 * 5.3 Entry Content
 * ----------------------------------------------------------------------------
 */

.entry-content {
	font-size: 200%;
	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-light.png) 7 stretch;
						-webkit-border-image: url(images/inset-light.png) 7 stretch;
						-o-border-image: url(images/inset-light.png) 7 stretch;
						border-image: url(images/inset-light.png) 7 fill stretch;
					}

.entry-content h1,
.entry-content h2,
.entry-content h3,
.entry-content h4,
.entry-content h5,
.entry-content h6 {
	color: #000;
}

.entry-content h3 {
	color: #198c3d;
}

.entry-content h4 {
	color: #D5720D;
}

.entry-content .more-link {
	font-weight: bold;
}

.entry-content .more-link .meta-nav {
	font-weight: normal;
}

.entry-content blockquote {
}

.entry-content blockquote cite,
.entry-content blockquote small {
}

.entry-content img.alignleft,
.entry-content .wp-caption.alignleft {
}

.entry-content img.alignright,
.entry-content .wp-caption.alignright {
}

.format-standard footer.entry-meta {
	margin-top: 0;
}

/* Page links */
.page-links {
	clear: both;
	font-size: 16px;
	font-style: italic;
	font-weight: normal;
	line-height: 2.2;
	margin: 20px 0;
	text-transform: uppercase;
}

.page-links a,
.page-links > span {
	background: #fff;
	border: 1px solid #fff;
	padding: 5px 10px;
	text-decoration: none;
}

.format-status .entry-content .page-links a,
.format-gallery .entry-content .page-links a,
.format-chat .entry-content .page-links a,
.format-quote .entry-content .page-links a,
.page-links a {
	background: #e63f2a;
	border: 1px solid #e63f2a;
	color: #fff;
}

.format-gallery .entry-content .page-links a:hover,
.format-audio .entry-content .page-links a:hover,
.format-status .entry-content .page-links a:hover,
.format-video .entry-content .page-links a:hover,
.format-chat .entry-content .page-links a:hover,
.format-quote .entry-content .page-links a:hover,
.page-links a:hover {
	background: #fff;
	color: #e63f2a;
}

.format-status .entry-content .page-links > span,
.format-quote .entry-content .page-links > span {
	background: none;
}

.page-links .page-links-title {
	background: transparent;
	border: none;
	margin-right: 20px;
	padding: 0;
}

/* Mediaelements */
.hentry .mejs-mediaelement,
.hentry .mejs-container .mejs-controls {
	background: #220e10;
}

.hentry .mejs-controls .mejs-time-rail .mejs-time-loaded,
.hentry .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
	background: #fff;
}

.hentry .mejs-controls .mejs-time-rail .mejs-time-current {
	background: #ea9629;
}

.hentry .mejs-controls .mejs-time-rail .mejs-time-total,
.hentry .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total {
	background: #595959;
}

.hentry .mejs-controls .mejs-time-rail span,
.hentry .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total,
.hentry .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
	border-radius: 0;
}

.youtube-player {
	
						color: #FFF;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-dark.png) 7 stretch;
						-webkit-border-image: url(images/inset-dark.png) 7 stretch;
						-o-border-image: url(images/inset-dark.png) 7 stretch;
						border-image: url(images/inset-dark.png) 7 fill stretch;
					}

form.contact-form label span {
	color: #808080;
}

.demo-download {
	text-align: center;
	margin-bottom: 2em;
}

.demo-download a {
	
						color: #000;
						background: transparent;
						border-style: solid;
						border-width: 6px;
						-moz-border-image: url(images/button-primary.png) 6 stretch;
						-webkit-border-image: url(images/button-primary.png) 6 stretch;
						-o-border-image: url(images/button-primary.png) 6 stretch;
						border-image: url(images/button-primary.png) 6 fill stretch;
						font-size: 200%;
	padding: 0.25em;
	margin: 0 auto;
	display: inline-block;
	color: #fff;
	padding: 0.25em 1em;

}

.demo-download a:hover,
.demo-download a:active,
.demo-download a:focus {
	
						color: #333;
						background: transparent;
						border-style: solid;
						border-width: 6px;
						-moz-border-image: url(images/button-secondary.png) 6 stretch;
						-webkit-border-image: url(images/button-secondary.png) 6 stretch;
						-o-border-image: url(images/button-secondary.png) 6 stretch;
						border-image: url(images/button-secondary.png) 6 fill stretch;
						color: #fff;
	text-decoration: none;
}

.demo-download .demo-download-version {
	display: block;
	font-size: 50%
}

/**
 * 5.4 Galleries
 * ----------------------------------------------------------------------------
 */

.gallery {
	margin-bottom: 20px;
	margin-left: -4px;
}

.gallery-item {
	float: left;
	margin: 0 4px 4px 0;
	overflow: hidden;
	position: relative;
}

.gallery-columns-1.gallery-size-medium,
.gallery-columns-1.gallery-size-thumbnail,
.gallery-columns-2.gallery-size-thumbnail,
.gallery-columns-3.gallery-size-thumbnail {
	display: table;
	margin: 0 auto 20px;
}

.gallery-columns-1 .gallery-item,
.gallery-columns-2 .gallery-item,
.gallery-columns-3 .gallery-item {
	text-align: center;
}

.gallery-columns-4 .gallery-item {
	max-width: 23%;
	max-width: -webkit-calc(25% - 4px);
	max-width:         calc(25% - 4px);
}

.gallery-columns-5 .gallery-item {
	max-width: 19%;
	max-width: -webkit-calc(20% - 4px);
	max-width:         calc(20% - 4px);
}

.gallery-columns-6 .gallery-item {
	max-width: 15%;
	max-width: -webkit-calc(16.7% - 4px);
	max-width:         calc(16.7% - 4px);
}

.gallery-columns-7 .gallery-item {
	max-width: 13%;
	max-width: -webkit-calc(14.28% - 4px);
	max-width:         calc(14.28% - 4px);
}

.gallery-columns-8 .gallery-item {
	max-width: 11%;
	max-width: -webkit-calc(12.5% - 4px);
	max-width:         calc(12.5% - 4px);
}

.gallery-columns-9 .gallery-item {
	max-width: 9%;
	max-width: -webkit-calc(11.1% - 4px);
	max-width:         calc(11.1% - 4px);
}

.gallery-columns-1 .gallery-item:nth-of-type(1n),
.gallery-columns-2 .gallery-item:nth-of-type(2n),
.gallery-columns-3 .gallery-item:nth-of-type(3n),
.gallery-columns-4 .gallery-item:nth-of-type(4n),
.gallery-columns-5 .gallery-item:nth-of-type(5n),
.gallery-columns-6 .gallery-item:nth-of-type(6n),
.gallery-columns-7 .gallery-item:nth-of-type(7n),
.gallery-columns-8 .gallery-item:nth-of-type(8n),
.gallery-columns-9 .gallery-item:nth-of-type(9n) {
	margin-right: 0;
}

.gallery-columns-1.gallery-size-medium figure.gallery-item:nth-of-type(1n+1),
.gallery-columns-1.gallery-size-thumbnail figure.gallery-item:nth-of-type(1n+1),
.gallery-columns-2.gallery-size-thumbnail figure.gallery-item:nth-of-type(2n+1),
.gallery-columns-3.gallery-size-thumbnail figure.gallery-item:nth-of-type(3n+1) {
	clear: left;
}

.gallery-caption {
	background-color: rgba(0, 0, 0, 0.7);
	box-sizing: border-box;
	color: #fff;
	font-size: 14px;
	line-height: 1.3;
	margin: 0;
	max-height: 50%;
	opacity: 0;
	padding: 2px 8px;
	position: absolute;
	bottom: 0;
	left: 0;
	text-align: left;
	-webkit-transition: opacity 400ms ease;
	transition:         opacity 400ms ease;
	width: 100%;
}

.gallery-caption:before {
	box-shadow: 0 -10px 15px #000 inset;
	content: "";
	height: 100%;
	min-height: 49px;
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
}

.gallery-item:hover .gallery-caption {
	opacity: 1;
}

.gallery-columns-7 .gallery-caption,
.gallery-columns-8 .gallery-caption,
.gallery-columns-9 .gallery-caption {
	display: none;
}


/**
 * 5.5 Post Formats
 * ----------------------------------------------------------------------------
 */

/* Aside */
.format-aside {
	background-color: #f7f5e7;
}

.blog .format-aside:first-of-type,
.single .format-aside:first-of-type,
.format-aside + .format-aside,
.format-aside + .format-link,
.format-link + .format-aside {
	box-shadow: inset 0 2px 2px rgba(173, 165, 105, 0.2);
}

.format-aside .entry-meta {
	margin-top: 0;
}

.format-aside blockquote {
	font-size: 100%;
	font-weight: normal;
}

.format-aside cite {
	font-size: 100%;
	text-transform: none;
}

.format-aside cite:before {
	content: "\2014";
	margin-right: 5px;
}

/* Audio */
.format-audio {
	background-color: #db572f;
}

.format-audio .entry-title {
	font-size: 28px;
	font-weight: bold;
}

.format-audio .entry-content:before {
	content: "\f109";
	float: left;
	font-size: 64px;
	position: relative;
	top: 4px;
}

.format-audio .entry-content a,
.format-audio .entry-meta a,
.format-audio .entry-content a:hover,
.format-audio .entry-meta a:hover {
	color: #fbfaf3;
}

.format-audio .audio-content {
	background: url(images/dotted-line.png) repeat-y left top;
	background-size: 4px 4px;
	float: right;
	padding-left: 35px;
	width: 80%;
	width: -webkit-calc(100% - 85px);
	width:         calc(100% - 85px);
}

.format-audio .wp-audio-shortcode {
	height: 30px !important; /* Override mediaelement.js style */
	margin: 20px 0;
	max-width: 400px !important; /* Override mediaelement.js style */
}

.format-audio audio {
	max-width: 100% !important; /* Avoid player width overflow. */
}

/* Chat */
.format-chat {
	background-color: #eadaa6;
}

.format-chat .entry-title {
	font-size: 28px;
	font-weight: bold;
}

.format-chat .entry-meta a,
.format-chat .entry-content a {
	color: #722d19;
}

.format-chat .entry-meta .date a:before {
	content: "\f108";
	margin-right: 2px;
}

.format-chat .entry-meta .author {
	display: none;
}

.format-chat .chat {
	margin: 0;
}

.format-chat .chat .chat-timestamp {
	color: #722d19;
	float: right;
	font-size: 12px;
	font-weight: normal;
	margin: 5px 10px 0;
}

.format-chat .chat .fn {
	font-style: normal;
}

/* Gallery */
.format-gallery {
	background-color: #fbca3c;
}

.format-gallery .entry-header {
	margin-bottom: 15px;
}

.format-gallery .entry-title {
	font-size: 50px;
	font-weight: 400;
	margin: 0;
}

.format-gallery .entry-meta a,
.format-gallery .entry-content a {
	color: #722d19;
}

/* Image */
.format-image .entry-title {
	font-size: 28px;
	font-weight: bold;
}

.format-image .categories-links,
.format-image .tags-links {
	display: none;
}

/* Link */
.format-link {
	background-color: #f7f5e7;
}

.blog .format-link:first-of-type,
.single .format-link:first-of-type {
	box-shadow: inset 0 2px 2px rgba(173, 165, 105, 0.2);
}

.format-link .entry-header,
.format-link .entry-content p:last-child {
	margin-bottom: 0;
}

.format-link .entry-title {
	color: #ca3c08;
	display: inline;
	margin-right: 20px;
}

.format-link .entry-title a {
	color: #bc360a;
}

.format-link div.entry-meta {
	display: inline;
}

/* Quote */
.format-quote {
	background-color: #210d10;
}

.format-quote .entry-content,
.format-quote .entry-meta {
	color: #f7f5e7;
}


.format-quote .entry-content a,
.format-quote .entry-meta a,
.format-quote .linked {
	color: #e63f2a;
}

.format-quote .entry-content cite a {
	border-bottom: 1px dotted #fff;
	color: #fff;
}

.format-quote .entry-content cite a:hover {
	text-decoration: none;
}


.format-quote blockquote {
	font-style: italic;
	font-weight: 300;
	padding-left: 75px;
	position: relative;
}

.format-quote blockquote:before {
	content: '\201C';
	font-size: 140px;
	font-weight: 400;
	line-height: .8;
	padding-right: 25px;
	position: absolute;
	left: -15px;
	top: -3px;
}

.format-quote .entry-meta .author {
	display: none;
}

/* Status */
.format-status {
	background-color: #722d19;
	padding: 0;
}

.format-status .entry-content,
.format-status .entry-meta {
	padding-left: 35px;
	position: relative;
}

.format-status .entry-content a {
	color: #eadaa6;
}

.format-status .entry-meta a {
	color: #f7f5e7;
}

.sidebar .format-status .entry-content,
.sidebar .format-status .entry-meta {
	padding-left: 95px;
}

.format-status .entry-content:before,
.format-status .entry-meta:before {
	background: url(images/dotted-line.png) repeat-y left bottom;
	background-size: 4px 4px;
	content: "";
	display: block;
	height: 100%;
	position: absolute;
	left: 10px;
	top: 0;
	width: 1px;
}

.sidebar .format-status .entry-content:before,
.sidebar .format-status .entry-meta:before {
	left: 70px;
}

.format-status .categories-links,
.format-status .tags-links {
	display: none;
}

/* Ensures the dots in the dot background are in lockstep. */
.format-status .entry-meta:before {
	background-position: left top;
}

.format-status .entry-content {
	color: #f7f5e7;
	font-size: 24px;
	font-style: italic;
	font-weight: 300;
	padding-bottom: 30px;
	padding-top: 40px;
	position: relative;
}

.format-status .entry-content p:first-child:before {
	background-color: rgba(0, 0, 0, 0.65);
	content: "";
	height: 3px;
	margin-top: 13px;
	position: absolute;
	left: 4px;
	width: 13px;
}

.sidebar .format-status .entry-content > p:first-child:before {
	left: 64px;
}

.format-status .entry-content p:last-child {
	margin-bottom: 0;
}

.format-status .entry-meta {
	margin-top: 0;
	padding-bottom: 40px;
}

.format-status .entry-meta .date a:before {
	content: "\f105";
}


/**
 * 5.6 Attachments
 * ----------------------------------------------------------------------------
 */

.attachment .hentry {
	background-color: #e8e5ce;
	margin: 0;
	padding: 0;
}

.attachment .entry-header {
	margin-bottom: 0;
	max-width: 1040px;
	padding: 30px 0;
}

.attachment .entry-title {
	display: inline-block;
	float: left;
	font-family: 28px;
	margin: 0;
}

.attachment .entry-title:before {
	content: "\f416";
	font-size: 32px;
	margin-right: 10px;
}

.attachment .entry-meta {
	clear: none;
	color: inherit;
	float: right;
	padding: 9px 0 0;
	text-align: right;
}

.hentry.attachment:not(.image-attachment) .entry-meta {
	max-width: 104px;
}

.attachment footer.entry-meta {
	display: none;
}

.attachment-meta:before {
	content: "\f307";
}

.full-size-link a:before {
	content: "\f402";
}

.full-size-link:before {
	content: none;
}

.attachment .entry-meta a,
.attachment .entry-meta .edit-link:before,
.attachment .full-size-link:before {
	color: #ca3c08;
}

.attachment .entry-content {
	background-color: #fff;
	max-width: 100%;
	padding: 40px 0;
}

.image-navigation {
	margin: 0 auto;
	max-width: 1040px;
	position: relative;
}

.image-navigation a:hover {
	text-decoration: none;
}

.image-navigation .nav-previous,
.image-navigation .nav-next {
	position: absolute;
	top: 50px;
}

.image-navigation .nav-previous {
	left: 0;
}

.image-navigation .nav-next {
	right: 0;
}

.image-navigation .meta-nav {
	font-size: 32px;
	font-weight: 300;
	vertical-align: -4px;
}

.attachment .entry-attachment,
.attachment .type-attachment p {
	margin: 0 auto;
	max-width: 724px;
	text-align: center;
}

.attachment .entry-attachment .attachment {
	display: inline-block;
}

.attachment .entry-caption {
	text-align: left;
}

.attachment .entry-description {
	margin: 20px auto 0;
}

.attachment .entry-caption p:last-child,
.attachment .entry-description p:last-child {
	margin: 0;
}

.attachment .site-main .sidebar-container {
	display: none;
}

.attachment .entry-content .mejs-audio {
	max-width: 400px;
	margin: 0 auto;
}

.attachment .entry-content .wp-video {
	margin: 0 auto;
}

.attachment .entry-content .mejs-container {
	margin-bottom: 24px;
}

/**
 * 5.7 Post/Paging Navigation
 * ----------------------------------------------------------------------------
 */

.navigation .nav-previous {
	float: left;
}

.navigation .nav-next {
	float: right;
}

.navigation a {
	
						color: #000;
						background: transparent;
						border-style: solid;
						border-width: 6px;
						-moz-border-image: url(images/button-light.png) 6 stretch;
						-webkit-border-image: url(images/button-light.png) 6 stretch;
						-o-border-image: url(images/button-light.png) 6 stretch;
						border-image: url(images/button-light.png) 6 fill stretch;
						padding: 0.25em;
}

.navigation a:hover {
	text-decoration: none;
	
						color: #000;
						background: transparent;
						border-style: solid;
						border-width: 6px;
						-moz-border-image: url(images/button-primary.png) 6 stretch;
						-webkit-border-image: url(images/button-primary.png) 6 stretch;
						-o-border-image: url(images/button-primary.png) 6 stretch;
						border-image: url(images/button-primary.png) 6 fill stretch;
					}

.paging-navigation .nav-links {
	margin: 0 auto;
	width: 100%;
}

.sidebar .paging-navigation .nav-links {
	max-width: 1040px;
	padding: 0 376px 0 60px;
}

.paging-navigation .nav-next {
	padding: 13px 0;
}

.paging-navigation a {
	font-size: 200%;
}

.paging-navigation .meta-nav {
	display: inline;
}

.paging-navigation a:hover .meta-nav {
	text-decoration: none;
}

.post-navigation {
	font-size: 200%;
	padding: 0.75em 0;
}

.post-navigation .nav-links {
	margin: 0 auto;
	max-width: 1040px;
}

.sidebar .post-navigation .nav-links {
	padding: 0 376px 0 60px;
}

.post-navigation a[rel="prev"] {
	float: left;
	text-align: left;
}

.post-navigation a[rel="next"] {
	float: right;
	text-align: right;
}


/**
 * 5.8 Author Bio
 * ----------------------------------------------------------------------------
 */

.author-info {
	margin: 0 auto;
	text-align: left; /* gallery & video post formats */
	width: 100%;
}

.author.sidebar .author-info {
	max-width: 1040px;
	padding: 30px 376px 10px 60px;
}

.single .author-info {
	padding: 50px 0 0;
}

.author-avatar .avatar {
	float: left;
	margin: 0.25em 1em 0.125em 0.125em;
	height: 3em;
	width: auto;
}

.single-format-status .author-description {
	color: #f7f5e7;
}

.author-description .author-title {
	clear: none;
	font-size: 200%;
	margin: 0 0 8px;
}

.author-link {
	color: #ca3c08;
	margin-left: 2px;
}

.author.archive .author-link {
	display: none;
}


/**
 * 5.9 Archives
 * ----------------------------------------------------------------------------
 */

.archive-header,
.page-header {
	font-weight: bold;
	
						color: #000;
						background: transparent;
						border-style: solid;
						border-width: 12px 15px;
						-moz-border-image: url(images/panel-primary.png) 12 15 stretch;
						-webkit-border-image: url(images/panel-primary.png) 12 15 stretch;
						-o-border-image: url(images/panel-primary.png) 12 15 stretch;
						border-image: url(images/panel-primary.png) 12 15 fill stretch;
						padding: 0.5em auto;
}

.archive-header a,
.page-header a {
	color: #333;
}

.archive-header h1:before,
.page-header h1:before {
	content: "\2339";
	padding-right: 0.125em;
	font-weight: normal;
}

.search .page-header h1:before {
	content: "\2343";
}

.archive-header h1:before {
	content: "\2339";
}

.tag .archive-header h1:before {
	content: "\233e";
}

.author .archive-header h1:before {
	content: "\233f";
}

.page-title,
.archive-title,
.archive-meta {
	margin: 0 auto;
	max-width: 1040px;
	width: 100%;
}

.archive-meta {
	font-size: 200%;
	font-style: normal;
	font-weight: normal;
	color: #333;
}

.sidebar .archive-meta {
	padding-right: 316px;
}


/**
 * 5.10 Search Results/No posts
 * ----------------------------------------------------------------------------
 */


.search .entry-summary {
	font-size: 200%;
	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-light.png) 7 stretch;
						-webkit-border-image: url(images/inset-light.png) 7 stretch;
						-o-border-image: url(images/inset-light.png) 7 stretch;
						border-image: url(images/inset-light.png) 7 fill stretch;
					}

.page-title {
	max-width: 1040px;
	width: 100%;
}

.page-content {
	font-size: 200%;
	margin: 0 auto;
	width: 100%;
	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-light.png) 7 stretch;
						-webkit-border-image: url(images/inset-light.png) 7 stretch;
						-o-border-image: url(images/inset-light.png) 7 stretch;
						border-image: url(images/inset-light.png) 7 fill stretch;
					}

.page-content h2 {
	font-size: 100%;
}

.sidebar .page-content {
	margin: 0 auto;
	max-width: 1040px;
}


/**
 * 5.11 404
 * ----------------------------------------------------------------------------
 */

 .error404 .entry-content h2 {
 	font-size: 100%;
 }

/**
 * 5.12 Comments
 * ----------------------------------------------------------------------------
 */

.comments-area {
	display: none;
}

.comments-title,
.comment-list,
.comment-reply-title,
.must-log-in,
.comment-respond .comment-form,
.comment-respond iframe {
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 100%;
}

.sidebar .comments-title,
.sidebar .comment-list,
.sidebar .must-log-in,
.sidebar .comment-reply-title,
.sidebar .comment-navigation,
.sidebar .comment-respond .comment-form {
	max-width: 1040px;
	padding-left: 60px;
	padding-right: 376px;
}

.comments-title {
	font-family: 28px;
}

.comment-list,
.comment-list .children {
	list-style-type: none;
	padding: 0;
}

.comment-list .children {
	margin-left: 20px;
}

.comment-list > li:after,
.comment-list .children > li:before {
	background: url(images/dotted-line.png) repeat left top;
	background-size: 4px 4px;
	content: "";
	display: block;
	height: 1px;
	width: 100%;
}

.comment-list > li:last-child:after {
	display: none;
}

.comment-body {
	padding: 24px 0;
	position: relative;
}

.comment-author {
	float: left;
	max-width: 74px;
}

.comment-author .avatar {
	display: block;
	margin-bottom: 10px;
}

.comment-author .fn {
	word-wrap: break-word;
}

.comment-author .fn,
.comment-author .url,
.comment-reply-link,
.comment-reply-login {
	color: #bc360a;
	font-size: 14px;
	font-style: normal;
	font-weight: normal;
}

.says {
	display: none;
}

.no-avatars .comment-author {
	margin: 0 0 5px;
	max-width: 100%;
	position: relative;
}

.no-avatars .comment-metadata,
.no-avatars .comment-content,
.no-avatars .comment-list .reply {
	width: 100%;
}

.bypostauthor > .comment-body .fn:before {
	content: "\f408";
	vertical-align: text-top;
}

.comment-list .edit-link {
	margin-left: 20px;
}

.comment-metadata,
.comment-awaiting-moderation,
.comment-content,
.comment-list .reply {
	float: right;
	width: 79%;
	width: -webkit-calc(100% - 124px);
	width:         calc(100% - 124px);
	word-wrap: break-word;
}

.comment-meta,
.comment-meta a {
	color: #a2a2a2;
	font-size: 13px;
}

.comment-meta a:hover {
	color: #ea9629;
}

.comment-metadata {
	margin-bottom: 20px;
}

.ping-meta {
	color: #a2a2a2;
	font-size: 13px;
	line-height: 2;
}

.comment-awaiting-moderation {
	color: #a2a2a2;
}

.comment-awaiting-moderation:before {
	content: "\f414";
	margin-right: 5px;
	position: relative;
	top: -2px;
}

.comment-reply-link:before,
.comment-reply-login:before {
	content: "\f412";
	margin-right: 3px;
}

/* Comment form */
.comment-respond {
	font-size: 50%;
	margin-top: 4em;
}

.comment .comment-respond {
	margin-bottom: 20px;
	padding: 20px;
}

.comment-reply-title {
	font-family: 28px;
}

.comment-reply-title small a {
	color: #131310;
	display: inline-block;
	float: right;
	height: 16px;
	overflow: hidden;
	width: 16px;
}

.comment-reply-title small a:hover {
	color: #ed331c;
	text-decoration: none;
}

.comment-reply-title small a:before {
	content: "\f406";
	vertical-align: top;
}

.sidebar .comment-list .comment-reply-title,
.sidebar .comment-list .comment-respond .comment-form {
	padding: 0;
}

.comment-form .comment-notes {
	margin-bottom: 15px;
}

.comment-form .comment-form-author,
.comment-form .comment-form-email,
.comment-form .comment-form-url {
	margin-bottom: 8px;
}

.comment-form [for="author"],
.comment-form [for="email"],
.comment-form [for="url"],
.comment-form [for="comment"] {
	float: left;
	padding: 5px 0;
	width: 120px;
}

.comment-form .required {
	color: #ed331c;
}

.comment-form input[type="text"],
.comment-form input[type="email"],
.comment-form input[type="url"] {
	max-width: 270px;
	width: 60%;
}

.comment-form textarea {
	width: 100%;
}

.form-allowed-tags,
.form-allowed-tags code {
	color: #686758;
	font-size: 12px;
}

.form-allowed-tags code {
	font-size: 10px;
	margin-left: 3px;
}

.comment-list .pingback,
.comment-list .trackback {
	padding-top: 24px;
}

.comment-navigation {
	font-size: 20px;
	font-style: italic;
	font-weight: 300;
	margin: 0 auto;
	padding: 20px 0 30px;
	width: 100%;
}

.no-comments {
	background-color: #f7f5e7;
	font-size: 20px;
	font-style: italic;
	font-weight: 300;
	margin: 0;
	padding: 40px 0;
	text-align: center;
}

.sidebar .no-comments {
	padding-left: 60px;
	padding-right: 376px;
}


/**
 * 5.13 Multisite
 * ----------------------------------------------------------------------------
 */

.site-main .mu_register {
	margin: 0 auto;
	width: 100%;
}

.mu_alert {
	margin-top: 25px;
}

.site-main .mu_register input[type="submit"],
.site-main .mu_register #blog_title,
.site-main .mu_register #user_email,
.site-main .mu_register #blogname,
.site-main .mu_register #user_name {
	font-size: inherit;
	width: 270px;
}

.site-main .mu_register input[type="submit"] {
	width: auto;
}



/**
 * 5.14 Sharing
 * ----------------------------------------------------------------------------
 */

div.sharedaddy h3.sd-title:before {
	content: none;
	display: block;
	width: 0;
	border: none;
	margin: 0;
}

div.sharedaddy h3.sd-title {
	margin: 0;
	display: inline-block;
	line-height: 1;
	font-size: 100%;
	height: 0;
	font-weight: bold;
}

/* Share count */
.share-count {
	background: #D5720D;
	color: #fff;
	-moz-border-radius: 0;
	border-radius: 0;
	font-size: 100%;
	padding: 0 0.25em;
	line-height: 1;
}

/* Buttons */
.sd-social-icon .sd-content ul li a.sd-button,
.sd-social-text .sd-content ul li a.sd-button,
.sd-content ul li a.sd-button,
.sd-content ul li .option a.share-ustom,	/* Ugh. */
.sd-content ul li.preview-item div.option.option-smart-off a,
.sd-content ul li.advanced a.share-more,
.sd-social-icon-text .sd-content ul li a.sd-button,
.sd-social-official .sd-content>ul>li>a.sd-button,
#sharing_email .sharing_send,
.sd-social-official .sd-content>ul>li .digg_button >a {		/* official Digg button no longer works, needs cleaning */
	text-decoration: none !important;
	display: inline-block;
	margin: 0 5px 5px 0;
	font-size: 50%;
	font-family: "SpacedPixel7","Lucida Console", "Monaco", monospace;	font-weight: normal;
	border-radius: 0;
	background-color: transparent;
	color: #000 !important;
	border: none;
	box-shadow: none;
	text-shadow: none;
	line-height: 1em;
	
						color: #000;
						background: transparent;
						border-style: solid;
						border-width: 6px;
						-moz-border-image: url(images/button-light.png) 6 stretch;
						-webkit-border-image: url(images/button-light.png) 6 stretch;
						-o-border-image: url(images/button-light.png) 6 stretch;
						border-image: url(images/button-light.png) 6 fill stretch;
					}

.sd-social-icon .sd-content ul li a.sd-button:hover,
.sd-social-icon .sd-content ul li a.sd-button:active,
.sd-social-text .sd-content ul li a.sd-button:hover,
.sd-social-text .sd-content ul li a.sd-button:active,
.sd-social-icon-text .sd-content ul li a.sd-button:hover,
.sd-social-icon-text .sd-content ul li a.sd-button:active,
.sd-social-official .sd-content>ul>li>a.sd-button:hover,
.sd-social-official .sd-content>ul>li>a.sd-button:active,
.sd-social-official .sd-content>ul>li .digg_button>a:hover,
.sd-social-official .sd-content>ul>li .digg_button>a:active {
	color: #000 !important;
	background-color: transparent;
	border: none;
	
						color: #000;
						background: transparent;
						border-style: solid;
						border-width: 6px;
						-moz-border-image: url(images/button-primary.png) 6 stretch;
						-webkit-border-image: url(images/button-primary.png) 6 stretch;
						-o-border-image: url(images/button-primary.png) 6 stretch;
						border-image: url(images/button-primary.png) 6 fill stretch;
					}

/* Overflow Sharing dialog */
.sharing-hidden .inner {
	position: absolute;
	z-index: 2;
	border: none;
	padding: 0;
	background: transparent;
	box-shadow: none;
	margin-top: 0;
	margin-left: 12px;
	max-width: 230px;
	
						color: #FFF;
						background: transparent;
						border-style: solid;
						border-width: 12px 15px;
						-moz-border-image: url(images/panel-dark.png) 12 15 stretch;
						-webkit-border-image: url(images/panel-dark.png) 12 15 stretch;
						-o-border-image: url(images/panel-dark.png) 12 15 stretch;
						border-image: url(images/panel-dark.png) 12 15 fill stretch;
					}

.sharing-hidden .inner ul {
	margin: 0 !important;
}

.sharing-hidden .inner:before, .sharing-hidden .inner:after {
	position: absolute;
	z-index: 1;
	top: -8px;
	left: 20px;
	width: 0;
	height: 0;
	border: none;
	content: none;
	display: block;
}

/* Sharing services list */
.sd-content ul {
	margin: 0 !important;
}

/* All icons */
.sd-content ul li a.sd-button:before {
	display: inline-block;
	-webkit-font-smoothing: never;
	-moz-osx-font-smoothing: never;
	font: 100% "SpacedPixel7";
	top: 0;
	position: initial;
	text-align: center;
	vertical-align: baseline;
}

/* Individual icons */
.sd-social-icon .sd-content ul li.share-print a:before,
.sd-social-text .sd-content ul li.share-print a:before,
.sd-content ul li.share-print div.option.option-smart-off a:before,
.sd-social-icon-text .sd-content li.share-print a:before,
.sd-social-official .sd-content li.share-print a:before {
	content: "\2334";
}
.sd-social-icon .sd-content ul li.share-digg a:before,
.sd-social-text .sd-content ul li.share-digg a:before,
.sd-content ul li.share-digg div.option.option-smart-off a:before,
.sd-social-icon-text .sd-content li.share-digg a:before,
.sd-social-official .sd-content li.share-digg a:before {
	content: '\f221';
}
.sd-social-icon .sd-content ul li.share-email a:before,
.sd-social-text .sd-content ul li.share-email a:before,
.sd-content ul li.share-email div.option.option-smart-off a:before,
.sd-social-icon-text .sd-content li.share-email a:before,
.sd-social-official .sd-content li.share-email a:before {
	content: "\2335";
}
.sd-social-icon .sd-content ul li.share-linkedin a:before,
.sd-social-text .sd-content ul li.share-linkedin a:before,
.sd-content ul li.share-linkedin div.option.option-smart-off a:before,
.sd-social-icon-text .sd-content li.share-linkedin a:before {
	content: '\f207';
}
.sd-social-icon .sd-content ul li.share-twitter a:before,
.sd-social-text .sd-content ul li.share-twitter a:before,
.sd-content ul li.share-twitter div.option.option-smart-off a:before,
.sd-social-icon-text .sd-content li.share-twitter a:before {
	content: "\2324";
}
.sd-social-icon .sd-content ul li.share-reddit a:before,
.sd-social-text .sd-content ul li.share-reddit a:before,
.sd-content ul li.share-reddit div.option.option-smart-off a:before,
.sd-social-icon-text .sd-content li.share-reddit a:before {
	content: "\2329";
}
.sd-social-icon .sd-content ul li.share-tumblr a:before,
.sd-social-text .sd-content ul li.share-tumblr a:before,
.sd-content ul li.share-tumblr div.option.option-smart-off a:before,
.sd-social-icon-text .sd-content li.share-tumblr a:before {
	content: "\2327";
}
.sd-social-icon .sd-content ul li.share-stumbleupon a:before,
.sd-social-text .sd-content ul li.share-stumbleupon a:before,
.sd-content ul li.share-stumbleupon div.option.option-smart-off a:before,
.sd-social-icon-text .sd-content li.share-stumbleupon a:before {
	content: "\2328";
}
.sd-social-icon .sd-content ul li.share-pocket a:before,
.sd-social-text .sd-content ul li.share-pocket a:before,
.sd-content ul li.share-pocket div.option.option-smart-off a:before,
.sd-social-icon-text .sd-content li.share-pocket a:before {
	content: '\f224';
}
.sd-social-icon .sd-content ul li.share-pinterest a:before,
.sd-social-text .sd-content ul li.share-pinterest a:before,
.sd-content ul li.share-pinterest div.option.option-smart-off a:before,
.sd-social-icon-text .sd-content li.share-pinterest a:before {
	content: "\232a";
}
.sd-social-icon .sd-content ul li.share-google-plus-1 a:before,
.sd-social-text .sd-content ul li.share-google-plus-1 a:before,
.sd-content ul li.share-google-plus-1 div.option.option-smart-off a:before,
.sd-social-icon-text .sd-content li.share-google-plus-1 a:before {
	content: "\2326";
}
.sd-social-icon .sd-content ul li.share-facebook a:before,
.sd-social-text .sd-content ul li.share-facebook a:before,
.sd-content ul li.share-facebook div.option.option-smart-off a:before,
.sd-social-icon-text .sd-content li.share-facebook a:before {
	content: "\2325";
}
.sd-social-icon .sd-content ul li.share-press-this a:before,
.sd-social-text .sd-content ul li.share-press-this a:before,
.sd-content ul li.share-press-this div.option.option-smart-off a:before,
.sd-social-icon-text .sd-content li.share-press-this a:before,
.sd-social-official .sd-content li.share-press-this a:before {
	content: '\f205';
}
.sd-social-official .sd-content li.share-press-this a:before {
	color: #2ba1cb;
}
.sd-social-icon .sd-content ul a.share-more:before,
.sd-social-text .sd-content ul a.share-more:before,
.sd-content ul li.advanced a.share-more:before,
.sd-social-icon-text .sd-content a.share-more:before,
.sd-social-official .sd-content a.share-more:before {
	content: "\2338";
}
.sd-social-official .sd-content a.share-more:before {
	color: #2ba1cb;
}



/**
 * 5.15 bbPress
 * ----------------------------------------------------------------------------
 */

#bbpress-forums {
	background: transparent;
	clear: both;
	margin-bottom: 0;
	font-size: 100%;
}

div.bbp-breadcrumb,
div.bbp-topic-tags {
	font-size: 100%;
	margin-bottom: 0.5em;
}

/*div.bbp-breadcrumb a,
div.bbp-topic-tags a {
	color: #D5720D;
}

div.bbp-breadcrumb a:hover,
div.bbp-breadcrumb a:focus,
div.bbp-breadcrumb a:active,
div.bbp-topic-tags a:hover,
div.bbp-topic-tags a:focus,
div.bbp-topic-tags a:active {
	color: #F49433;
}*/


#bbpress-forums #subscription-toggle {
	font-weight: normal;
}

#bbpress-forums ul.bbp-lead-topic,
#bbpress-forums ul.bbp-topics,
#bbpress-forums ul.bbp-forums,
#bbpress-forums ul.bbp-replies,
#bbpress-forums ul.bbp-search-results {
	font-size: 100%;
	border: none;
	margin-bottom: 0;
	
						color: #FFF;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-dark.png) 7 stretch;
						-webkit-border-image: url(images/inset-dark.png) 7 stretch;
						-o-border-image: url(images/inset-dark.png) 7 stretch;
						border-image: url(images/inset-dark.png) 7 fill stretch;
					}

#bbpress-forums .bbp-body > div {
	margin: 0.25em 0;
	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-light.png) 7 stretch;
						-webkit-border-image: url(images/inset-light.png) 7 stretch;
						-o-border-image: url(images/inset-light.png) 7 stretch;
						border-image: url(images/inset-light.png) 7 fill stretch;
					}

#bbpress-forums div.bbp-forum-content,
#bbpress-forums div.bbp-topic-content,
#bbpress-forums div.bbp-reply-content {
	padding: 0;
}

#bbpress-forums .bbp-forum-info .bbp-forum-content,
#bbpress-forums p.bbp-topic-meta {
	font-size: 50%;
	margin: 0;
}

#bbpress-forums p.bbp-topic-meta img.avatar,
#bbpress-forums ul.bbp-reply-revision-log img.avatar,
#bbpress-forums ul.bbp-topic-revision-log img.avatar,
#bbpress-forums div.bbp-template-notice img.avatar,
#bbpress-forums .widget_display_topics img.avatar,
#bbpress-forums .widget_display_replies img.avatar {
	float: none;
	margin-bottom: 0;
	border: none;
}

.bbp-login-form .bbp-username,
.bbp-login-form .bbp-email,
.bbp-login-form .bbp-password,
.bbp-login-form .bbp-remember-me,
.bbp-login-form .bbp-submit-wrapper {
	margin-top: 0.25em;
}

.bbp_widget_login #user_login,
.bbp_widget_login #user_pass {
	height: 1.5em;
}

.bbp_widget_login .bbp-login-links {
	position: absolute;
	top: 0.5em;
	right: 0;
	height: 1em;
	width: 25%;
	text-align: right;
}

.bbp_widget_login .bbp-login-links a {
	float: none;
}

.bbp_widget_login .bbp-login-links .bbp-register-link {
	margin-right: 1em;
}


.bbp-login-form label {
	width: 300px;
}

#post-77 .bbp-login-form label { /* Hack to get lost password label longer */
	width: auto;
}

#bbpress-forums div.bbp-the-content-wrapper div.quicktags-toolbar {
	padding: 0;
	min-height: auto;
	background: transparent;
	margin-bottom: 0.5em;
	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-light.png) 7 stretch;
						-webkit-border-image: url(images/inset-light.png) 7 stretch;
						-o-border-image: url(images/inset-light.png) 7 stretch;
						border-image: url(images/inset-light.png) 7 fill stretch;
						padding: 0;
}

#bbpress-forums div.bbp-the-content-wrapper div.quicktags-toolbar input {
	height: 2em;
}

#bbpress-forums div.bbp-the-content-wrapper input {
	font-size: 50%;
	margin: 0.125em;
	background: transparent;
	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-light.png) 7 stretch;
						-webkit-border-image: url(images/inset-light.png) 7 stretch;
						-o-border-image: url(images/inset-light.png) 7 stretch;
						border-image: url(images/inset-light.png) 7 fill stretch;
						padding: 0 0.125em;
}

.bbp-pagination {
	font-size: 50%;

}

div.bbp-search-form input,
div.bbp-search-form button {
	font-size: 100%;
	padding: 0;
}

#bbpress-forums a.bbp-forum-title,
#bbpress-forums a.bbp-topic-permalink {
	font-weight: bold;
}

#bbpress-forums a.bbp-topic-permalink:before {
	font-weight: normal;
	content: "\233d";
	padding: 0 0.25em 0 0;
}

#bbpress-forums .status-closed a.bbp-topic-permalink:before {
	content: "\2341";
}

#bbpress-forums .sticky a.bbp-topic-permalink:before,
#bbpress-forums .super-sticky a.bbp-topic-permalink:before {
	content: "\2340";
}

.bbp-topics-front ul.super-sticky,
.bbp-topics ul.super-sticky,
.bbp-topics ul.sticky,
.bbp-forum-content ul.sticky {
	background-color: transparent !important;
	font-size: 100%;
}

#bbpress-forums div.bbp-the-content-wrapper input:hover,
#bbpress-forums div.bbp-the-content-wrapper input:active {
	
						color: #000;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-primary.png) 7 stretch;
						-webkit-border-image: url(images/inset-primary.png) 7 stretch;
						-o-border-image: url(images/inset-primary.png) 7 stretch;
						border-image: url(images/inset-primary.png) 7 fill stretch;
						padding: 0 0.125em;
}

#bbpress-forums div.wp-editor-container {
	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-light.png) 7 stretch;
						-webkit-border-image: url(images/inset-light.png) 7 stretch;
						-o-border-image: url(images/inset-light.png) 7 stretch;
						border-image: url(images/inset-light.png) 7 fill stretch;
					}

#bbpress-forums div.bbp-the-content-wrapper textarea.bbp-the-content {
	font-size: 100%;
	background: transparent;
	line-height: 1em;
	max-height: 12em;
	/*transition: max-height 0.333s ease;*/
	font-family: "SpacedPixel7","Lucida Console", "Monaco", monospace;	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-white.png) 7 stretch;
						-webkit-border-image: url(images/inset-white.png) 7 stretch;
						-o-border-image: url(images/inset-white.png) 7 stretch;
						border-image: url(images/inset-white.png) 7 fill stretch;
					}

#bbpress-forums li.bbp-header,
#bbpress-forums li.bbp-footer {
	background: transparent;
	border: none;
	padding: 0;
}

#bbpress-forums li.bbp-header .bbp-reply-author,
#bbpress-forums li.bbp-footer .bbp-reply-author {
	font-size: 100%;
	width: 140px;
}

#bbpress-forums div.bbp-forum-author,
#bbpress-forums div.bbp-topic-author,
#bbpress-forums div.bbp-reply-author {
	font-size: 50%;
}

#bbpress-forums #bbp-your-profile fieldset select,
#bbpress-forums #bbp-your-profile fieldset input,
#bbpress-forums #bbp-your-profile fieldset textarea {
	border: none;
	margin: 0;
	padding: 0;
	background: transparent;
	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-white.png) 7 stretch;
						-webkit-border-image: url(images/inset-white.png) 7 stretch;
						-o-border-image: url(images/inset-white.png) 7 stretch;
						border-image: url(images/inset-white.png) 7 fill stretch;
					}

#bbpress-forums #bbp-your-profile fieldset select,
#bbpress-forums #bbp-your-profile fieldset input {
	height: 1.5em;
}

#bbpress-forums #bbp-your-profile fieldset input:focus,
#bbpress-forums #bbp-your-profile fieldset input:hover,
#bbpress-forums #bbp-your-profile fieldset input:active,
#bbpress-forums #bbp-your-profile fieldset textarea:focus,
#bbpress-forums #bbp-your-profile fieldset textarea:hover,
#bbpress-forums #bbp-your-profile fieldset textarea:active {
	border: none;
	box-shadow: none;
	outline: none;
	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-white-selected.png) 7 stretch;
						-webkit-border-image: url(images/inset-white-selected.png) 7 stretch;
						-o-border-image: url(images/inset-white-selected.png) 7 stretch;
						border-image: url(images/inset-white-selected.png) 7 fill stretch;
					}

#bbp_search_submit {
	height: 1.5em;
	padding: 0 0.25em;
}

#bbpress-forums #bbp-your-profile fieldset span.description {
	margin: 0;
	font-size: 50%;
	font-style: normal;
	padding: 0;
	border: none;
	background: none;
	color: #fff;
}

#bbpress-forums fieldset.bbp-form input[type="text"],
#bbpress-forums fieldset.bbp-form input[type="textarea"] {
	margin: 0 0 0.25em 0;
	width: 100%;
	max-width: 10em;
}

#bbpress-forums div.bbp-topic-content code, #bbpress-forums div.bbp-reply-content code, #bbpress-forums div.bbp-topic-content pre, #bbpress-forums div.bbp-reply-content pre {
	font-family: "SpacedPixel7-Mono","Lucida Console", "Monaco", monospace;}


/** Notices **/
div.bbp-template-notice.info {
	border: none;
	background-color: transparent;
	font-size: 50%;
	
						color: #FFF;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-dark.png) 7 stretch;
						-webkit-border-image: url(images/inset-dark.png) 7 stretch;
						-o-border-image: url(images/inset-dark.png) 7 stretch;
						border-image: url(images/inset-dark.png) 7 fill stretch;
						padding: 0 0.125em;
	margin: 0 0 0.25em;
	display: none;
}

div.bbp-template-notice p {
	margin: 0 !important;
	padding: 0;
	font-size: 100%;
	line-height: 1;
}

div.bbp-template-notice a {
	color: #25b15b;
}

div.bbp-template-notice a:hover {
	color: #F49433;
	/*text-decoration: underline;*/
}

div.bbp-template-notice,
div.indicator-hint {
	border: none
	border-radius: 0;
	background-color: transparent;
	
						color: #000;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-primary.png) 7 stretch;
						-webkit-border-image: url(images/inset-primary.png) 7 stretch;
						-o-border-image: url(images/inset-primary.png) 7 stretch;
						border-image: url(images/inset-primary.png) 7 fill stretch;
						color: #000;
	padding: 0 0.125em;
	margin: 0 0 0.25em;
	font-size: 50%;
}

.bbp-pagination + .bbp-no-topic,
.bbp-pagination + .bbp-no-reply {
	margin-top: 2em;
}

#bbpress-forums div.bbp-topic-author a.bbp-author-name,
#bbpress-forums div.bbp-reply-author a.bbp-author-name {
	font-size: 100%;
}

#bbpress-forums div.bbp-forum-author .bbp-author-role,
#bbpress-forums div.bbp-topic-author .bbp-author-role,
#bbpress-forums div.bbp-reply-author .bbp-author-role {
	font-size: 100%;
	font-style: normal;
}

#bbpress-forums div.bbp-forum-author br,
#bbpress-forums div.bbp-topic-author br,
#bbpress-forums div.bbp-reply-author br {
	display: none;
}

div.bbp-reply-ip {
	display: none;
	font-size: 100%
}

span.bbp-author-ip {
	font-family: "SpacedPixel7-Mono","Lucida Console", "Monaco", monospace;	font-size: 100%;
	color: #333;
}

#bbpress-forums li.bbp-body ul.forum,
#bbpress-forums li.bbp-body ul.topic {
	border: none;
	padding: 0;
	margin: 0.25em 0;
	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-light.png) 7 stretch;
						-webkit-border-image: url(images/inset-light.png) 7 stretch;
						-o-border-image: url(images/inset-light.png) 7 stretch;
						border-image: url(images/inset-light.png) 7 fill stretch;
					}

#bbpress-forums li.bbp-body ul.topic.status-closed {
	
						color: #FFF;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-gray.png) 7 stretch;
						-webkit-border-image: url(images/inset-gray.png) 7 stretch;
						-o-border-image: url(images/inset-gray.png) 7 stretch;
						border-image: url(images/inset-gray.png) 7 fill stretch;
						color: #000;
}

#bbpress-forums li.bbp-body ul.topic.sticky,
#bbpress-forums li.bbp-body ul.topic.super-sticky {
	
						color: #000;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-primary.png) 7 stretch;
						-webkit-border-image: url(images/inset-primary.png) 7 stretch;
						-o-border-image: url(images/inset-primary.png) 7 stretch;
						border-image: url(images/inset-primary.png) 7 fill stretch;
					}

#bbpress-forums .bbp-topics .bbp-footer,
#bbpress-forums .bbp-forums .bbp-footer,
#bbpress-forums .bbp-replies .bbp-footer {
	display: none;
}

.bbp-pagination {
	margin-bottom: 0;
}

.bbp-pagination + .bbp-topic-form,
.bbp-pagination + .bbp-reply-form,
.bbp-template-notice + .bbp-topic-form {
	margin-top: 1.5em;
}


/** Toggles **/
div.bbp-toggleable-create-new {
	-webkit-transition: max-height 0.333s  ease;
	transition: max-height 0.333s ease;
	max-height: 0;
}

div.bbp-toggleable-create-new.toggled-on {
	max-height: 900px; /* Hack to animate height: auto; 900 is approx the full height. Timing will be slightly off to comensate for hidden pixels "animating" */
}

#bbpress-forums fieldset.bbp-form legend {
	background: transparent;
	
						color: #FFF;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-dark.png) 7 stretch;
						-webkit-border-image: url(images/inset-dark.png) 7 stretch;
						-o-border-image: url(images/inset-dark.png) 7 stretch;
						border-image: url(images/inset-dark.png) 7 fill stretch;
						padding-top: 0;
	padding-bottom: 0;
}

#bbpress-forums fieldset.bbp-form {
	border: none;
	padding: 0;
	margin-bottom: 0;
	
						color: #FFF;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-dark.png) 7 stretch;
						-webkit-border-image: url(images/inset-dark.png) 7 stretch;
						-o-border-image: url(images/inset-dark.png) 7 stretch;
						border-image: url(images/inset-dark.png) 7 fill stretch;
					}

.bbp-pagination-links a,
.bbp-pagination-links span.current,
.bbp-pagination-links a:hover,
.bbp-pagination-links span.current {
	border: none;
	opacity: 1;
	background: transparent;
}

.bbp-topic-pagination a {
}

#bbpress-forums #subscription-toggle {
	float: right;
}

.bbp-meta {
	font-size: 50%;
}

#bbpress-forums .bbp-topic-content ul.bbp-topic-revision-log,
#bbpress-forums .bbp-reply-content ul.bbp-topic-revision-log,
#bbpress-forums .bbp-reply-content ul.bbp-reply-revision-log {
	border: none;
	color: #808080;
	font-size: 50%;
}

#bbpress-forums .bbp-reply-revision-log-item:before {
	content: "\2336";
}

/** Admin Links **/
#bbpress-forums .bbp-post-info {
	font-size: 50%;
	color: #808080;
	text-align: right;
	text-transform: uppercase;
}

#bbpress-forums .bbp-post-info .bbp-post-admin-links-divider {
	display: none;
}

#bbpress-forums .bbp-post-info a + .bbp-post-admin-links-divider {
	display: inline;
}

#bbpress-forums .bbp-post-top {
	width: 100%;
	min-height: 0.5em;
	opacity: 0.333;
	-webkit-transition: opacity 0.333s ease;
	-moz-transition: opacity 0.333s ease;
	-ms-transition: opacity 0.333s ease;
	-o-transition: opacity 0.333s ease;
	transition: opacity 0.333s ease;
}

#bbpress-forums .bbp-post-top:hover {
	opacity: 1;
}

#bbpress-forums span.bbp-post-info,
#bbpress-forums span.bbp-pre-admin-links {
	float: none;
	color: #808080;
	text-transform: uppercase;
}

#bbpress-forums .bbp-post-info a:hover,
#bbpress-forums .bbp-post-info a:focus,
#bbpress-forums .bbp-post-info a.bbp-reply-permalink:hover,
#bbpress-forums .bbp-post-info a.bbp-reply-permalink:focus {
	color: #333;
}

#bbpress-forums .status-closed,
#bbpress-forums .status-closed a {
	color: #3dcb73;
}

#bbpress-forums .sticky,
#bbpress-forums .sticky a {
	color: #fff;
}

#bbpress-forums .bbp-post-info a {
	font-size: 100%;
	color: #808080;
}

#bbpress-forums  .bbp-post-info a:before,
#bbpress-forums  a.bbp-reply-permalink:before,
a.bbp-topic-permalink:before {
	padding: 0 0.25em;
}

#bbpress-forums  a.bbp-reply-permalink {
	color: #808080;
}

a.bbp-reply-permalink:hover,
a.bbp-topic-permalink:focus {
	text-decoration: none;
}

a.bbp-reply-permalink:before {
	content: "\234d";
}

a.bbp-topic-edit-link:before,
a.bbp-reply-edit-link:before {
	content: "\2336";
}

a.bbp-topic-close-link:before,
a.bbp-reply-close-link:before {
	content: "\2341";
}

a.bbp-topic-sticky-link:before,
a.bbp-reply-sticky-link:before {
	content: "\2340";
}

a.bbp-topic-merge-link:before,
a.bbp-reply-merge-link:before {
	content: "\233b";
}

a.bbp-topic-trash-link:before,
a.bbp-reply-trash-link:before {
	content: "\2348";
}

a.bbp-topic-spam-link:before,
a.bbp-reply-spam-link:before {
	content: "\234a";
}

a.bbp-topic-reply-link:before,
a.bbp-reply-to-link:before {
	content: "\2349";
}

a.bbp-topic-reply-link:before,
a.bbp-reply-to-link:before {
	content: "\2349";
}

a.bbp-topic-split-link:before,
a.bbp-reply-split-link:before {
	content: "\234b";
}

a.bbp-topic-move-link:before,
a.bbp-reply-move-link:before {
	content: "\234c";
}

/** BBP Comments **/
.bbp-comments-link {
	text-align: right;
}

/*.bbp-comments-link a {
	color: #D5720D;
}

.bbp-comments-link a:hover,
.bbp-comments-link a:focus,
.bbp-comments-link a:active {
	color: #F49433;
}*/

.bbp-comments-link a:before {
	content: "\233d";
	padding-right: 0.25em;
}

.bbp-comments-header h2 {
	font-size: 400%;
	color: #000;
}

#comments .bbp-breadcrumb {
	display: none;
}

#comments .bbp-template-notice.info {
	display: none;
}


/** Public Profile **/
#bbpress-forums #bbp-your-profile fieldset label[for] {
	padding: 0 1em 0 0;
}

#bbpress-forums #bbp-single-user-details {
	width: 192px;
	margin-right: 0.5em;
	
						color: #FFF;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-dark.png) 7 stretch;
						-webkit-border-image: url(images/inset-dark.png) 7 stretch;
						-o-border-image: url(images/inset-dark.png) 7 stretch;
						border-image: url(images/inset-dark.png) 7 fill stretch;
					}

#bbpress-forums #bbp-single-user-details #bbp-user-avatar {
	margin: 0 auto;
}

#bbpress-forums #bbp-single-user-details #bbp-user-avatar img.avatar {
	border: none;
	width: 150px;
	height: auto;
	margin: 0;
}

#bbpress-forums #bbp-single-user-details #bbp-user-navigation {
	
}

#bbpress-forums #bbp-single-user-details #bbp-user-navigation a {
	border: none;
	padding: 0;
	margin: 0.125em 0;
	
						color: #FFF;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-dark.png) 7 stretch;
						-webkit-border-image: url(images/inset-dark.png) 7 stretch;
						-o-border-image: url(images/inset-dark.png) 7 stretch;
						border-image: url(images/inset-dark.png) 7 fill stretch;
					}

#bbpress-forums .bbp-row-actions #favorite-toggle span.is-favorite a,
#bbpress-forums .bbp-row-actions #subscription-toggle span.is-subscribed a {
	border-width: 3px;
	font-size: 100%;
}

#bbpress-forums .bbp-row-actions #favorite-toggle span.is-favorite a,
#bbpress-forums .bbp-row-actions #subscription-toggle span.is-subscribed a {
	background: #CC0000;
	border-color: #660000;
	color: #660000;
}

#bbpress-forums #bbp-single-user-details #bbp-user-navigation a:hover,
#bbpress-forums #bbp-single-user-details #bbp-user-navigation a:focus,
#bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a:hover,
#bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a:focus {
	
						color: #000;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-primary.png) 7 stretch;
						-webkit-border-image: url(images/inset-primary.png) 7 stretch;
						-o-border-image: url(images/inset-primary.png) 7 stretch;
						border-image: url(images/inset-primary.png) 7 fill stretch;
						color: #000;
}

#bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a {
	background: transparent;
	opacity: 1;
	
						color: #000;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-primary.png) 7 stretch;
						-webkit-border-image: url(images/inset-primary.png) 7 stretch;
						-o-border-image: url(images/inset-primary.png) 7 stretch;
						border-image: url(images/inset-primary.png) 7 fill stretch;
					}

#bbpress-forums #bbp-user-wrapper h2.entry-title {
	font-size: 300%;
	padding: 0;
	margin: 0;
	color: #000;
}

#bbpress-forums #bbp-user-wrapper .bbp-user-description {
	margin-bottom: 1em;
}

#bbpress-forums #bbp-user-wrapper .bbp-user-forum-role,
#bbpress-forums #bbp-user-wrapper .bbp-user-topic-count,
#bbpress-forums #bbp-user-wrapper .bbp-user-reply-count {
	margin: 0;
	font-weight: bold;
}

#bbpress-forums li.bbp-forum-info,
#bbpress-forums li.bbp-topic-title {
	width: 52%;
}

#bbpress-forums li.bbp-forum-freshness,
#bbpress-forums li.bbp-topic-freshness {
	width: 27%;
}

#bbpress-forums #bbp-user-body {
	margin-left: 200px;
}

#bbpress-forums #bbp-user-body .bbp-topics,
#bbpress-forums #bbp-user-body .bbp-replies {
	float: left;
	width: 100%;
}



#bbpress-forums .bbp-body .bbp-meta .bbp-header {
	display: block;
	
						color: #000;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-primary.png) 7 stretch;
						-webkit-border-image: url(images/inset-primary.png) 7 stretch;
						-o-border-image: url(images/inset-primary.png) 7 stretch;
						border-image: url(images/inset-primary.png) 7 fill stretch;
						padding: 0;
	margin-bottom: 0.5em;
	color: white;
}

#bbpress-forums .bbp-body .bbp-meta .bbp-header a {
	color: white;
}

#bbpress-forums div.bbp-forum-author,
#bbpress-forums div.bbp-topic-author,
#bbpress-forums div.bbp-reply-author {
	width: 130px;
}

@media (max-width: 767px) {
	.responsive #bbpress-forums div.bbp-search-form {
		float: left;
		clear: both;
	}

	.responsive #bbpress-forums div.bbp-reply-content p {
		margin-bottom: 0;
	}

	.responsive #bbpress-forums div.bbp-breadcrumb {
		clear: both;
	}

	.responsive #bbpress-forums li.bbp-footer {
		display: none;
	}

	.responsive #bbpress-forums li.bbp-header {
		font-size: 50%;
		visibility: collapse;
	}

	.responsive #bbpress-forums .bbp-forums li.bbp-header,
	.responsive #bbpress-forums .bbp-topics li.bbp-header {
		display: none;
	}

	.responsive #bbpress-forums li.bbp-header #subscription-toggle,
	.responsive #bbpress-forums li.bbp-header #favorite-toggle {
		visibility: visible;
	}

	.responsive #bbpress-forums .bbp-body div.bbp-reply-author {
		display: block;
		margin: 0;
		height: 2em;
		width: 100%;
		min-height: initial;
		text-align: left;
		padding: 0;
	}

	.responsive #bbpress-forums .bbp-body div.bbp-reply-author img.avatar {
		height: 2em;
		width: auto;
		float: left;
		clear: none;
		top: 0;
		left: 0;
		margin: 0;
		position: static;
	}

	.responsive #bbpress-forums .bbp-body div.bbp-reply-author {
		float: left;
		width: 100%;
	}

	.responsive #bbpress-forums div.bbp-reply-author a.bbp-author-name {
		float: left;
		clear: none;
		margin-left: 0.5em;
	}
	.responsive #bbpress-forums div.bbp-reply-author .bbp-reply-post-date {
		float: right;
		clear: none;
	}

	.responsive #bbpress-forums .bbp-body div.bbp-reply-content {
		margin: 0;
	}

	.responsive #bbpress-forums .bbp-post-info {
		text-align: center;
		margin-bottom: 0.25em;
	}

	.responsive #bbpress-forums .bbp-body div.bbp-reply-content {
		margin-top: 0.25em;
		float: left;
		width: 100%;
	}

	.responsive li.bbp-forum-info,
	.responsive li.bbp-topic-title {
		width: 100%;
	}

	.responsive li.bbp-forum-topic-count,
	.responsive li.bbp-topic-voice-count,
	.responsive li.bbp-forum-reply-count,
	.responsive li.bbp-topic-reply-count {
		width: auto;
		display: inline;
		font-size: 50%;
	}

	.responsive li.bbp-topic-voice-count:before {
		content: "Voices: ";
	}

	.responsive li.bbp-forum-topic-count:before {
		content: "Topics: ";
	}

	.responsive #bbpress-forums li.bbp-forum-info,
	.responsive #bbpress-forums li.bbp-topic-title {
		width: 100%;
	}

	.responsive #bbpress-forums li.bbp-forum-freshness,
	.responsive #bbpress-forums li.bbp-topic-freshness {
		width: auto;
	}

	.responsive li.bbp-topic-reply-count:before,
	.responsive li.bbp-forum-reply-count:before {
		content: "Posts: ";
		margin-left: 0.5em;
	}

	.responsive li.bbp-forum-freshness,
	.responsive li.bbp-topic-freshness {
		width: auto;
		display: inline;
		float: right;
		font-size: 50%;
	}

	.responsive li.bbp-topic-freshness:before,
	.responsive li.bbp-forum-freshness:before {
		content: "Last Post: ";
	}

	.responsive #bbpress-forums .bbp-topic-freshness-author {
		display: none;
	}

	.responsive #bbpress-forums #bbp-single-user-details {
		width: 100%;
		margin: 0;
	}

	.responsive #bbpress-forums #bbp-user-body {
		float: left;
		margin: 0;
	}

	.responsive #bbpress-forums #bbp-user-wrapper h2.entry-title {
		font-size: 150%;
	}

	.responsive #bbpress-forums #bbp-single-user-details #bbp-user-avatar,
	.responsive #bbpress-forums #bbp-single-user-details #bbp-user-navigation a {
		float: left;
		width: auto;
		clear: none;
	}

	.responsive #bbpress-forums #bbp-single-user-details #bbp-user-avatar img.avatar {
		height: 2.75em;
		width: auto;
		margin-right: 0.5em;
	}

	.responsive #bbpress-forums #bbp-single-user-details #bbp-user-navigation a {
		font-size: 50%;
		margin: 0.125em;
	}
}



/**
 * 5.16 Top Bar
 * ----------------------------------------------------------------------------
 */

#top-bar {
	clear: both;
	font-size: 100%;
	
						color: #FFF;
						background: transparent;
						border-style: solid;
						border-width: 12px 15px;
						-moz-border-image: url(images/panel-dark.png) 12 15 stretch;
						-webkit-border-image: url(images/panel-dark.png) 12 15 stretch;
						-o-border-image: url(images/panel-dark.png) 12 15 stretch;
						border-image: url(images/panel-dark.png) 12 15 fill stretch;
					}

#top-bar a {
	color: #fff;
}

#top-bar a:hover,
#top-bar a:focus,
#top-bar a:active {
	color: #3dcb73;
}

#top-bar-interior {
	margin: 0 auto;
	max-width: 1080px;
	min-height: 1em;
	position: relative;
}

#top-bar .widget-title {
	display: none;
}

#top-bar .bbp-logged-in h4 {
	display: inline;
	font-size: 100%;
	line-height: 1em;
	margin: 0;
	padding: 0;
}

#top-bar .logout-link {
	float: right;
}

#top-bar .bbp-logged-in img.avatar {
	margin: 0 0.5em 0 0;
	height: 1em;
	width: auto;
}

#top-bar .bbp-login-form label {
	width: auto;
}

#top-bar .bbp-login-form .bbp-submit-wrapper {
	text-align: left;
}

#top-bar div.bbp-submit-wrapper {
	float: none;
	clear: none;
}

#top-bar .bbp-login-form .bbp-username,
#top-bar .bbp-login-form .bbp-email,
#top-bar .bbp-login-form .bbp-password,
#top-bar .bbp-login-form .bbp-remember-me,
#top-bar .bbp-login-form .bbp-submit-wrapper {
	margin: 0;
	display: inline;
}

#top-bar .bbp-login-left,
#top-bar .bbp-login-right {
	height: 1.75em;
	display: inline-block;
}

#top-bar .bbp-login-left input {
	padding: 0;
	height: 1.5em;
}

#top-bar .bbp-login-left {
	text-align: left;
	float: left;
}

#top-bar .bbp-login-left input[name=rememberme] {
	vertical-align: bottom;
}

#top-bar .bbp-login-right {
	text-align: right;
	float: right;
	padding-top: 0.375em;
}

#top-bar .bbp-login-right a.bbp-lostpass-link {
	margin-left: 1em;
}

.bbp-login-form .bbp-username input,
.bbp-login-form .bbp-email input,
.bbp-login-form .bbp-password input {
	padding: 0;
}


/**
 * 5.16 Modal
 * ----------------------------------------------------------------------------
 */

div#wp-link-wrap {
	background: transparent;
	height: 340px;
}

form#wp-link {
	
						color: #333;
						background: transparent;
						border-style: solid;
						border-width: 12px 15px;
						-moz-border-image: url(images/panel-light.png) 12 15 stretch;
						-webkit-border-image: url(images/panel-light.png) 12 15 stretch;
						-o-border-image: url(images/panel-light.png) 12 15 stretch;
						border-image: url(images/panel-light.png) 12 15 fill stretch;
						background: transparent;
	outline: none;
}

div#link-modal-title {
	font-size: 200%;
	background: transparent;
	padding: 0;
	border: none;
}

#link-selector {
	
						color: #333;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-light.png) 7 stretch;
						-webkit-border-image: url(images/inset-light.png) 7 stretch;
						-o-border-image: url(images/inset-light.png) 7 stretch;
						border-image: url(images/inset-light.png) 7 fill stretch;
					}

#wp-link-submit {
	
						color: #FFF;
						background: transparent;
						border-style: solid;
						border-width: 6px;
						-moz-border-image: url(images/button-dark.png) 6 stretch;
						-webkit-border-image: url(images/button-dark.png) 6 stretch;
						-o-border-image: url(images/button-dark.png) 6 stretch;
						border-image: url(images/button-dark.png) 6 fill stretch;
						font-size: 100%;
	background: transparent;
	line-height: 0;
	height: 1em;
}

#wp-link-submit:hover, #wp-link-submit:active, #wp-link-submit:focus {
	
						color: #000;
						background: transparent;
						border-style: solid;
						border-width: 6px;
						-moz-border-image: url(images/button-primary.png) 6 stretch;
						-webkit-border-image: url(images/button-primary.png) 6 stretch;
						-o-border-image: url(images/button-primary.png) 6 stretch;
						border-image: url(images/button-primary.png) 6 fill stretch;
					}

form#wp-link div.submitbox,
form#wp-link div.submitbox {
	font-size: 200%;
	border: none;
	padding: 0;
	background: transparent;
	height: 1.2em;
}

#wp-link-wrap.search-panel-visible #search-panel {
	margin: 0;
}

#wp-link-cancel {
	line-height: 1em;
	float: left;
	margin-top: 0.125em;
}

form#wp-link #wp-link-search-toggle::after {
	font-size: 100%;
	padding-left: 0.25em;
	font-family: "SpacedPixel7","Lucida Console", "Monaco", monospace;	content: "\25b2";
}

#wp-link-wrap.search-panel-visible #wp-link-search-toggle::after {
	content: "\25bc";/*"\25bc";*/
}

div#wp-link-close:before {
	content: "\2715";
	font-family: "SpacedPixel7","Lucida Console", "Monaco", monospace;}

div#wp-link-close {
	
						color: #FFF;
						background: transparent;
						border-style: solid;
						border-width: 6px;
						-moz-border-image: url(images/button-dark.png) 6 stretch;
						-webkit-border-image: url(images/button-dark.png) 6 stretch;
						-o-border-image: url(images/button-dark.png) 6 stretch;
						border-image: url(images/button-dark.png) 6 fill stretch;
						background: transparent;
	margin-top: -4px;
	height: 40px;
}

#wp-link-close:focus, div#wp-link-close:hover {
	
						color: #000;
						background: transparent;
						border-style: solid;
						border-width: 6px;
						-moz-border-image: url(images/button-primary.png) 6 stretch;
						-webkit-border-image: url(images/button-primary.png) 6 stretch;
						-o-border-image: url(images/button-primary.png) 6 stretch;
						border-image: url(images/button-primary.png) 6 fill stretch;
						color: #fff;
}

#wp-link .query-results span.item-info {
	font-size: 100%;
}

#wp-link .query-results li:hover,
#wp-link .query-results li:focus,
#wp-link .query-results li:active {
	background-color: #3dcb73;
}


/**
 * 5.17 Captcha
 * ----------------------------------------------------------------------------
 */

.bbp-login-form .bbp-email {
	margin-bottom: 0.25em;
}

.aiowps-captcha {
	display: inline;
}

.aiowps-captcha-equation {
	display: inline;
	margin-left: 1em;
}



/**
 * 5.18 Email Subscriptions
 * ----------------------------------------------------------------------------
 */


#email-subscribe {
	margin-top: 2em;
	margin-bottom: 1em;
}

#email-subscribe h2.widgettitle {
	font-size: 200%;
}

#email-subscribe .success {
	color:#D5720D;
}

#email-subscribe p {
	margin-bottom: 0.25em;
}

.jetpack_subscription_widget .error,
.jetpack_subscription_widget .success {
	
						color: #000;
						background: transparent;
						padding: 0.125em;
						border-style: solid;
						border-width: 7px;
						-moz-border-image: url(images/inset-primary.png) 7 stretch;
						-webkit-border-image: url(images/inset-primary.png) 7 stretch;
						-o-border-image: url(images/inset-primary.png) 7 stretch;
						border-image: url(images/inset-primary.png) 7 fill stretch;
					}





/**
 * 6.0 Sidebar
 * ----------------------------------------------------------------------------
 */



.site-main .widget-area {
	float: right;
	width: 300px;
}


/**
 * 6.1 Widgets
 * ----------------------------------------------------------------------------
 */

.widget {
	-webkit-hyphens: auto;
	-moz-hyphens:    auto;
	-ms-hyphens:     auto;
	hyphens:         auto;
	word-wrap: break-word;
}

/* Search widget */
.search-form .search-submit {
	display: none;
}

/* RSS Widget */
.widget_rss .rss-date {
	display: block;
}

.widget_rss .rss-date,
.widget_rss li > cite {
	color: #a2a2a2;
}

/* Calendar Widget */
.widget_calendar table,
.widget_calendar td {
	border: 0;
	border-collapse: separate;
	border-spacing: 1px;
}

.widget_calendar caption {
	font-size: 14px;
	margin: 0;
}

.widget_calendar th,
.widget_calendar td {
	padding: 0;
	text-align: center;
}

.widget_calendar a {
	display: block;
}

.widget_calendar a:hover {
	background-color: rgba(0, 0, 0, 0.15);
}

.widget_calendar tbody td {
	background-color: rgba(255, 255, 255, 0.5);
}

.site-footer .widget_calendar tbody td {
	background-color: rgba(255, 255, 255, 0.05);
}

.widget_calendar tbody .pad, .site-footer .widget_calendar tbody .pad {
	background-color: transparent;
}


/**
 * 7.0 Footer
 * ----------------------------------------------------------------------------
 */

.site-footer {
	color: #fff;
	font-size: 200%;
	text-align: center;
}

.site-footer .widget-area,
.sidebar .site-footer {
	text-align: left;
}

.site-footer .sidebar-container {
	background-color: #220e10;
	padding: 20px 0;
}

.site-footer .widget-area {
	margin: 0 auto;
	max-width: 1040px;
	width: 100%;
}

.sidebar .site-footer .widget-area {
	max-width: 724px;
	position: relative;
	left: -158px;
}

.site-footer .widget {
	background: transparent;
	color: #fff;
	float: left;
	margin-right: 20px;
	width: 245px;
}

.sidebar .site-footer .widget {
	width: 228px;
}

.sidebar .site-footer .widget:nth-of-type(4),
.sidebar .site-footer .widget:nth-of-type(3) {
	margin-right: 0;
}

.site-footer .widget a {
	color: #e6402a;
}

.site-footer .widget-title,
.site-footer .widget-title a,
.site-footer .wp-caption-text {
	color: #fff;
}

footer .site-info {
	margin: 0 auto;
	max-width: 1080px;
	padding: 0.25em;
	width: 100%;
	display: table;
	
						color: #FFF;
						background: transparent;
						border-style: solid;
						border-width: 12px 15px;
						-moz-border-image: url(images/panel-dark.png) 12 15 stretch;
						-webkit-border-image: url(images/panel-dark.png) 12 15 stretch;
						-o-border-image: url(images/panel-dark.png) 12 15 stretch;
						border-image: url(images/panel-dark.png) 12 15 fill stretch;
						margin-bottom: 1em;
}

.site-info header {
	font-weight: bold;
}

.site-info-wrapper {
	display: table-row;
}

.site-info-wrapper div {
	display: table-cell;
	vertical-align: middle;
	width: 30%;
	text-align: left;
}

#site-info-publisher {
	text-align: center;
	width: 40%;
}

#arithmebit-link {
	margin: 0 auto;
	color: #F49433;
}

#arithmebit-link:hover,
#arithmebit-link:active,
#arithmebit-link:focus {
	color: #FFAD5A;
}

/*.site-info-wrapper div.left-space,
.site-info-wrapper div.right-space {
	width: 12.5%;
}*/

.site-info-wrapper div#site-press-links {
	vertical-align: top;
}

img#wpstats {
	position: absolute;
	top: 0;
	width: 0px;
	height: 0px;
	overflow: hidden;
}

ul.social-media-links {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

footer .site-info a,
footer .site-info a:visited {
	color: #3dcb73;
}

footer .site-info a:hover,
footer .site-info a:active,
footer .site-info a:focus {
	color: #FFAD5A;
}

ul.social-media-links li {
	/*display: inline;*/
}

footer.site-footer .publisher-link {
	display: block;
	background-image: url('images/arithmebit-logo-128px.png');
	background-position: top center;
	background-repeat: no-repeat;
	padding-top: 128px;
	color: #fff;
}

button.responsive-toggle {
	
						color: #FFF;
						background: transparent;
						border-style: solid;
						border-width: 6px;
						-moz-border-image: url(images/button-dark.png) 6 stretch;
						-webkit-border-image: url(images/button-dark.png) 6 stretch;
						-o-border-image: url(images/button-dark.png) 6 stretch;
						border-image: url(images/button-dark.png) 6 fill stretch;
						padding-left: 0.375em;
	color: #F49433;
	display: none;
	margin: 1em auto 0.25em auto;
}

.responsive button.responsive-toggle {
	color: #25b15b;
}

.responsive button.responsive-toggle:hover,
.responsive button.responsive-toggle:active,
.responsive button.responsive-toggle:focus {
	color: #3dcb73;
}

button.responsive-toggle:hover,
button.responsive-toggle:active,
button.responsive-toggle:focus {
	color: #FFAD5A;
}

button.responsive-toggle:before {
	content: "Mobile Mode Disabled";
}

.responsive button.responsive-toggle:before {
	content: "Mobile Mode Enabled";
}

.parallax-background {
	background-repeat: repeat;
	position: fixed;
	width: 100%;
	height: 100%;
	top:0;
	left:0;
	z-index: -1;
}

#space-far {
	background-image: url("images/space-far.png");
	background-color: #000;
}

#space-moderate {
	background-image: url("images/space-moderate.png");
}

#space-close {
	background-image: url("images/space-close.png");
}


/**
 * 8.0 Media Queries
 * ----------------------------------------------------------------------------
 */

/* Does the same thing as <meta name="viewport" content="width=device-width">,
 * but in the future W3C standard way. -ms- prefix is required for IE10+ to
 * render responsive styling in Windows 8 "snapped" views; IE10+ does not honor
 * the meta tag. See http://core.trac.wordpress.org/ticket/25888.
 */
@-ms-viewport {
	width: device-width;
}
@viewport {
	width: device-width;
}

@media (max-width: 1599px) {
	.site {
		border: 0;
	}
}

@media (max-width: 1069px) {
	.sidebar img.alignleft,
	.sidebar .wp-caption.alignleft {
		margin-left: 0;
	}

	.sidebar img.alignright,
	.sidebar .wp-caption.alignright {
		margin-right: 0;
	}

	.error404 .page-header {
		width: 100%;
	}

	.attachment .image-navigation {
		max-width: 724px;
	}

	.image-navigation .nav-previous,
	.image-navigation .nav-next {
		position: static;
	}

	.site-main .widget-area {
		margin-right: 60px;
	}
}

@media (max-width: 999px) {
	.sidebar .entry-header,
	.sidebar .entry-content,
	.sidebar .entry-summary,
	.sidebar .entry-meta,
	.sidebar .comment-list,
	.sidebar .comment-reply-title,
	.sidebar .comment-navigation,
	.sidebar .comment-respond .comment-form,
	.sidebar .featured-gallery,
	.sidebar .post-navigation .nav-links,
	.author.sidebar .author-info {
		padding-left: 0;
		padding-right: 0;
	}

	.sidebar .site-info,
	.search.sidebar .page-content,
	.blog.sidebar .page-content,
	.attachment .entry-header,
	.sidebar .comments-title {
	}

	.sidebar .archive-meta,
	.attachment .entry-header,
	.search.sidebar .page-content,
	.blog.sidebar .page-content,
	.sidebar .site-info,
	.sidebar .comments-title,
	.sidebar .no-comments {
		padding-left: 0;
		padding-right: 0;
	}

	.attachment .entry-meta {
		float: left;
		text-align: left;
		width: 100%;
	}

	.attachment .entry-content {
		max-width: 100%;
		padding: 40px 0;
	}

	.format-status .entry-content {
		padding-top: 40px;
	}

	.format-status .entry-meta {
		padding-bottom: 40px;
	}

	.sidebar .format-status .entry-content,
	.sidebar .format-status .entry-meta {
		padding-left: 35px;
	}

	.sidebar .format-status .entry-content:before,
	.sidebar .format-status .entry-meta:before {
		left: 10px;
	}

	.sidebar .format-status .entry-content p:first-child:before {
		left: 4px;
	}

	.sidebar .paging-navigation .nav-links {
		padding: 0 60px;
	}

	.site-main .sidebar-container {
		height: auto;
		margin: 0 auto;
		position: relative;
		top: 20px;
	}

	.responsive .site-main .widget-area {
		float: none;
		margin: 0;
		width: 100%;
	}

	.sidebar .site-footer .widget-area {
		max-width: 100%;
		left: 0;
	}
}

/* Collapse oversized image and pulled images after iPad breakpoint. */
@media (max-width: 767px) {
	.responsive .entry-content img.alignleft,
	.responsive .entry-content .wp-caption.alignleft {
		margin-left: 0;
	}

	.responsive .entry-content img.alignright,
	.responsive .entry-content .wp-caption.alignright {
		margin-right: 0;
	}

	.responsive .attachment .image-navigation,
	.responsive .attachment .entry-attachment .attachment {
		padding: 0;
		width: 100%;
	}

	.responsive .gallery-caption {
		display: none;
	}

	.responsive img.size-medium,
	.responsive img.size-large,
	.responsive img.size-full {
		float: none;
		display: block;
		margin: 0 auto;
		margin-left: auto !important;
		margin-right: auto !important;
	}

	button.responsive-toggle { /* always display the toggle once this media query goes into effect */
		display: block;
	}
}

@media (max-width: 643px) {
	.responsive .site-title {
		font-size: 500%;
	}

	.responsive .site-description {
		font-size: 100%;
	}

	.responsive #content .format-status .entry-content,
	.responsive #content .format-status .entry-met {
		padding-left: 35px;
	}

	/* Small menu */
	.responsive .menu-toggle {
		cursor: pointer;
		display: inline-block;
		margin: 0;
		font-size: 200%;
		padding: 11px 0 11px 10px;
	}

	.responsive .menu-toggle:after {
		content: "\25bc";
		font-weight: normal;
		margin-left: 0.25em;
	}

	.responsive .toggled-on .menu-toggle:after {
		content: "\25b2";
	}

	.responsive .toggled-on .nav-menu,
	.responsive .toggled-on .nav-menu > ul {
		display: block;
		margin-left: 0;
		padding: 0;
		width: 100%;
	}

	.responsive .toggled-on li,
	.responsive .toggled-on .children {
		display: block;
		margin: 0.5em 0;
	}

	.responsive .toggled-on .nav-menu li > ul {
		background-color: transparent;
		display: block;
		float: none;
		margin-left: 20px;
		position: relative;
		left: auto;
		top: auto;
	}

	.responsive ul.nav-menu,
	.responsive div.nav-menu > ul {
		margin-top: 1em;
		display: none;
	}

	.responsive #content .featured-gallery {
		padding-left: 24px;
	}

	.responsive .gallery-columns-1 .gallery-item {
		margin-right: 0;
		width: 100%;
	}

	.responsive .entry-title,
	.responsive .format-chat .entry-title,
	.responsive .format-image .entry-title,
	.responsive .format-gallery .entry-title,
	.responsive .format-video .entry-title {
		font-size: 300%;
	}

	.responsive .comment-author {
		margin-right: 30px;
	}

	.responsive .comment-author .avatar {
		height: auto;
		max-width: 100%;
	}

	.responsive .comment-metadata,
	.responsive .comment-content,
	.responsive .comment-list .reply {
		width: 70%;
		width: -webkit-calc(100% - 104px);
		width:         calc(100% - 104px);
	}

	.responsive .comment-form input[type="text"],
	.responsive .comment-form input[type="email"],
	.responsive .comment-form input[type="url"] {
		width: -webkit-calc(100% - 120px);
		width:         calc(100% - 120px);
	}

	.responsive .comment-form textarea {
		height: 80px; /* Smaller field for mobile. */
	}

	/* Audio */
	.responsive .format-audio .entry-content:before {
		display: none;
	}

	.responsive .format-audio .audio-content {
		background-image: none;
		float: none;
		padding-left: 0;
		width: auto;
	}

	.responsive h1 {
		font-size: 250%;
	}

	.responsive h2 {
		font-size: 200%;
	}

	.responsive h3 {
		font-size: 150%;
	}

	.responsive h4,
	.responsive h5 {
		font-size: 100%;
	}
}

@media (max-width: 540px) {
	.responsive footer .site-info,
	.responsive .site-info-wrapper,
	.responsive .site-info-wrapper div,
	.responsive #site-info-publisher {
		display: block;
		width: 100%;
		
		
	}

	.responsive .site-info-wrapper div {
		text-align: center;
		margin-bottom: 1em;
	}

	.responsive .site-info-wrapper div:last-child {
		margin-bottom: 0;
	}
}

/* Mobile devices */
@media (max-width: 359px) {
	.gallery {
		margin-left: 0;
	}

	.gallery .gallery-item,
	.gallery-columns-2.gallery-size-thumbnail .gallery-item {
		max-width: none;
		width: 49%;
		width: -webkit-calc(50% - 4px);
		width:         calc(50% - 4px);
	}

	.gallery-columns-1.gallery-size-medium,
	.gallery-columns-1.gallery-size-thumbnail,
	.gallery-columns-2.gallery-size-thumbnail,
	.gallery-columns-3.gallery-size-thumbnail {
		display: block;
	}

	.gallery-columns-1 .gallery-item,
	.gallery-columns-1.gallery-size-medium .gallery-item,
	.gallery-columns-1.gallery-size-thumbnail .gallery-item {
		text-align: center;
		width: 98%;
		width: -webkit-calc(100% - 4px);
		width:         calc(100% - 4px);
	}

	.gallery-columns-3 .gallery-item:nth-of-type(3n),
	.gallery-columns-5 .gallery-item:nth-of-type(5n),
	.gallery-columns-7 .gallery-item:nth-of-type(7n),
	.gallery-columns-9 .gallery-item:nth-of-type(9n) {
		margin-right: 4px;
	}

	.gallery br {
		display: none;
	}

	.gallery .gallery-item:nth-of-type(even) {
		margin-right: 0;
	}

	/* Comments */
	.responsive .comment-author {
		margin: 0 0 5px;
		max-width: 100%;
	}

	.responsive .comment-author .avatar {
		display: inline;
		margin: 0 5px 0 0;
		max-width: 20px;
	}

	.responsive .comment-metadata,
	.responsive .comment-content,
	.responsive .comment-list .reply {
		width: 100%;
	}
}


/**
 * 9.0 Print
 * ----------------------------------------------------------------------------
 */

/* Retina-specific styles. */
@media print,
	(-o-min-device-pixel-ratio: 5/4),
	(-webkit-min-device-pixel-ratio: 1.25),
	(min-resolution: 120dpi) {

	.site-header .search-field {
		background-image: url(images/search-icon-2x.png);
	}

	.format-audio .audio-content,
	.format-status .entry-content:before,
	.format-status .entry-meta:before,
	.comment-list > li:after,
	.comment-list .children > li:before {
		background-image: url(images/dotted-line-2x.png);
	}
}

@media print {
	body {
		background: none !important;
		color: #000;
		font-size: 10pt;
	}

	footer a[rel="bookmark"]:link:after,
	footer a[rel="bookmark"]:visited:after {
		content: " [" attr(href) "] "; /* Show URLs */
	}

	.site {
		max-width: 98%;
	}

	.site-header {
		background-image: none !important;
	}

	.site-header .home-link {
		max-width: none;
		min-height: 0;
	}

	.site-title {
		color: #000;
		font-size: 21pt;
	}

	.site-description {
		font-size: 10pt;
	}

	.author-avatar,
	.site-footer,
	.comment-respond,
	.comments-area .comment-edit-link,
	.comments-area .reply,
	.comments-link,
	.entry-meta .edit-link,
	.page-links,
	.site-content nav,
	.widget-area,
	.main-navigation,
	.navbar,
	.more-link {
		display: none;
	}

	.entry-header,
	.entry-content,
	.entry-summary,
	.entry-meta {
		margin: 0;
		width: 100%;
	}

	.page-title,
	.entry-title {
		font-size: 21pt;
	}

	.entry-meta,
	.entry-meta a {
		color: #444;
		font-size: 10pt;
	}

	.entry-content img.alignleft,
	.entry-content .wp-caption.alignleft {
		margin-left: 0;
	}

	.entry-content img.alignright,
	.entry-content .wp-caption.alignright {
		margin-right: 0;
	}

	.format-image .entry-content .size-full {
		margin: 0;
	}

	/* Remove colors from post formats */
	.hentry {
		background-color: #fff;
	}

	/* Comments */
	.comments-area > li.comment {
		background: none;
		position: relative;
		width: auto;
	}

	.comment-metadata {
		float: none;
	}

	.comment-author .fn,
	.comment-reply-link,
	.comment-reply-login {
		color: #333;
	}
}
