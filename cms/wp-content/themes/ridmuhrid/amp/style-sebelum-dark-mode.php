<?php
$content_max_width=absint($this->get('content_max_width'));
?>

@font-face {
font-family:'ABeeZee';
font-style:normal;
font-weight:400;
font-display:swap;
src:local(ABeeZee),local(ABeeZee-Regular),url(//muhrid.com/assets/ABeeZee.woff2) format("woff2");
unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000
}

/* Generic WP styling */

.alignright {
	float: right;
}

.alignleft {
	float: left;
}

.aligncenter {
	display: block;
	margin-left: auto;
	margin-right: auto;
}

.amp-wp-enforced-sizes {
	max-width: 100%;
	margin: 0 auto;
}

.amp-wp-unknown-size img {
	object-fit: contain;
}

/* Template Styles */

.amp-wp-content,
.amp-wp-title-bar div {
	<?php if ( $content_max_width > 0 ) : ?>
	margin: 0 auto;
	max-width: <?php echo sprintf( '%dpx', $content_max_width ); ?>;
	<?php endif; ?>
}

body {
background:#fff;
color:#585858;
font-family:ABeeZee;
line-height: 1.75em;
}

p,
ol,
ul,
figure {
	margin: 0 0 1em;
	padding: 0;
}

a,
a:visited {
color: #585858;
text-decoration:none;
border-bottom:1px dotted #585858;
}

a:hover,
a:active,
a:focus {
	color: #222;
}

/* Quotes */

blockquote {
color: #585858;
background: #f9f9f9;
margin: 8px 0 24px 0;
padding: 16px;
}

blockquote p:last-child {
	margin-bottom: 0;
}

/* Header */

.amp-wp-header {
}

.amp-wp-header div {
	color: #fff;
	font-size: 1em;
	margin: 0 auto;
	max-width: calc(840px - 32px);
	padding: 1em;
}

.amp-wp-header a {
	font-family:ABeeZee;
	letter-spacing:.25em;
	border:0;
}

.amp-wp-header span {
	display:inline-block;
	vertical-align:middle;
	font-weight:normal;
}

/* Site Icon */

.amp-wp-header .amp-wp-site-icon {
	display:inline-block;
	vertical-align:middle;
	margin-right:.3em;
}

/* Article */

.amp-wp-article {
	margin: 0 auto;
	max-width: 840px;
	overflow-wrap: break-word;
	word-wrap: break-word;
}

.amp-wp-article-content .wp-caption { 
 	max-width: 100%; 
 } 

/* Article Header */

.amp-wp-article-header {
	background:#585858;
	color:#fff;
	padding:1em;
	text-align:center;
}

.amp-wp-title {
	font-family:ABeeZee;
	display: block;
	text-align:center;
}

/* Article Meta */

.amp-wp-meta {
	display: inline-block;
	font-size: .8em;
	line-height: 1.5em;
	margin: 0 3px 10px;
	padding: 5px;
	border:1px solid #fff;
	border-radius:3px;
}

.amp-wp-byline amp-img,
.amp-wp-byline .amp-wp-author {
	display: inline-block;
}

/* Article Content */

.amp-wp-article-content {
	margin: 16px;
}

.amp-wp-article-content ul,
.amp-wp-article-content ol {
	margin-left:1em;
	padding-left:1em;
}

.amp-wp-article-content amp-img {
	margin: 0 auto;
}

.amp-wp-article-content amp-img.alignright {
	margin: 0 0 1em 16px;
}

.amp-wp-article-content amp-img.alignleft {
	margin: 0 16px 1em 0;
}

.level a{
display:inline-block;
font-size:.9em;
background:#585858;
color:#fff;
padding:.25em .5em;
border:0;
border-radius:5px;
margin:0 .5em .5em 0;
min-width:80px;
text-align:center;
}

.level a:hover {
background:#7e7e7e;
}

/* Captions */

.wp-caption {
	padding: 0;
}

.wp-caption.alignleft {
	margin-right: 16px;
}

.wp-caption.alignright {
	margin-left: 16px;
}

.wp-caption .wp-caption-text {
	font-size: .875em;
	line-height: 1.5em;
	margin: 0;
	padding: .3em 0 .75em;
}

/* AMP Table */

#table {
overflow-x:auto
}

table {
margin:0 0 1em;
width:100%
}

table tbody tr {
border:1px solid rgba(88,88,88,.1);
}

table td {
padding:.5em;
border:1px solid rgba(88,88,88,.1);
}

table th {
font-family:ABeeZee;
font-size:1.1em;
padding:.75em;
}

table thead, table .colspan {
background:#585858;
color:#fff;
font-weight:bold;
}

table thead td {
border:1px solid #222;
}

table tfoot {
border:1px solid rgba(88,88,88,.1);
}

/* AMP Media */

amp-carousel {
	background: #f9f9f9;
	margin: 0 -16px 1.5em;
}
amp-iframe,
amp-youtube,
amp-instagram,
amp-vine {
	background: #f9f9f9;
	margin: 0 -16px 1.5em;
}

.amp-wp-article-content amp-carousel amp-img {
	border: none;
}

amp-carousel > amp-img > img {
	object-fit: contain;
}

.amp-wp-iframe-placeholder {
	background: #c2c2c2 url(<?php echo esc_url($this->get('placeholder_image_url'));?>) no-repeat center 40%;
	background-size: 48px 48px;
	min-height: 48px;
}

/* Article Footer Meta */

.amp-wp-article-footer .amp-wp-meta {
	display: block;
}

.amp-wp-tax-category,
.amp-wp-tax-tag {
	font-size: .875em;
	line-height: 1.5em;
	margin: 0 16px;
}

.amp-wp-comments-link {
	font-size: .875em;
	line-height: 1.5em;
	text-align: center;
	margin: 2.25em 0 1.5em;
}

.amp-wp-comments-link a {
	border-style: solid;
	border-color: #585858;
	border-width: 1px 1px 2px;
	border-radius: 4px;
	background-color: transparent;
	cursor: pointer;
	display: block;
	font-size: 14px;
	font-weight: 600;
	line-height: 18px;
	margin: 0 auto;
	max-width: 200px;
	padding: 11px 16px;
	text-decoration: none;
	width: 50%;
	-webkit-transition: background-color 0.2s ease;
			transition: background-color 0.2s ease;
}

/* AMP Footer */

h1, h2, h3, h4 {
text-align:left;
}

.amp-wp-footer {
	color:#fff;
	margin: calc(1.5em - 1px) auto 0;
	background:#585858;
	max-width: calc(840px - 32px);
}

.amp-wp-footer div {
	margin: 0 auto;
	max-width: calc(840px - 32px);
	padding: 1.25em 16px 1.25em;
	position: relative;
}

.amp-wp-footer h2 {
	font-size: 1em;
	line-height: 1.375em;
	margin:0;
}

.amp-wp-footer p {
	font-size: .8em;
	line-height: 1.5em;
}

.amp-wp-footer a {
	text-decoration: none;
}