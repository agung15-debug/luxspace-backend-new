<link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
<link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
<!-- <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css', true) }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css', true) }}"> -->
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

<style>
#weatherWidget .currentDesc {
    color: #ffffff!important;
}
    .traffic-chart {
        min-height: 335px;
    }
    #flotPie1  {
        height: 150px;
    }
    #flotPie1 td {
        padding:3px;
    }
    #flotPie1 table {
        top: 20px!important;
        right: -10px!important;
    }
    .chart-container {
        display: table;
        min-width: 270px ;
        text-align: left;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    #flotLine5  {
          height: 105px;
    }

    #flotBarChart {
        height: 150px;
    }
    #cellPaiChart{
        height: 160px;
    }

    @font-face {
	font-family: 'icomoon';
	src:url('../fonts/icomoon/icomoon.eot?-rdnm34');
	src:url('../fonts/icomoon/icomoon.eot?#iefix-rdnm34') format('embedded-opentype'),
		url('../fonts/icomoon/icomoon.woff?-rdnm34') format('woff'),
		url('../fonts/icomoon/icomoon.ttf?-rdnm34') format('truetype'),
		url('../fonts/icomoon/icomoon.svg?-rdnm34#icomoon') format('svg');
	font-weight: normal;
	font-style: normal;
}

div.cs-skin-elastic {
	background: transparent;
	font-size: 1.5em;
	font-weight: 700;
	color: #5b8583;
}

@media screen and (max-width: 30em) {
	div.cs-skin-elastic { font-size: 1em; }
}

.cs-skin-elastic > span {
	background-color: #fff;
	z-index: 100;
}

.cs-skin-elastic > span::after {
	font-family: 'icomoon';
	content: '\e005';
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.cs-skin-elastic .cs-options {
	overflow: visible;
	background: transparent;
	opacity: 1;
	visibility: visible;
	padding-bottom: 1.25em;
	pointer-events: none;
}

.cs-skin-elastic.cs-active .cs-options {
	pointer-events: auto;
}

.cs-skin-elastic .cs-options > ul::before {
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	-webkit-transform: scale3d(1,0,1);
	transform: scale3d(1,0,1);
	background: #fff;
	-webkit-transform-origin: 50% 0%;
	transform-origin: 50% 0%;
	-webkit-transition: -webkit-transform 0.3s;
	transition: transform 0.3s;
}

.cs-skin-elastic.cs-active .cs-options > ul::before {
	-webkit-transform: scale3d(1,1,1);
	transform: scale3d(1,1,1);
	-webkit-transition: none;
	transition: none;
	-webkit-animation: expand 0.6s ease-out;
  	animation: expand 0.6s ease-out;
}

.cs-skin-elastic .cs-options ul li {
	opacity: 0;
	-webkit-transform: translate3d(0,-25px,0);
	transform: translate3d(0,-25px,0);
	-webkit-transition: opacity 0.15s, -webkit-transform 0.15s;
	transition: opacity 0.15s, transform 0.15s;
}

.cs-skin-elastic.cs-active .cs-options ul li {
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
	opacity: 1;
	-webkit-transition: none;
	transition: none;
	-webkit-animation: bounce 0.6s ease-out;
  	animation: bounce 0.6s ease-out;
}

/* Optional delays (problematic in IE 11/Win) */
/*
.cs-skin-elastic.cs-active .cs-options ul li:first-child {
	-webkit-animation-delay: 0.1s;
	animation-delay: 0.1s;
}

.cs-skin-elastic.cs-active .cs-options ul li:nth-child(2) {
	-webkit-animation-delay: 0.15s;
	animation-delay: 0.15s;
}

.cs-skin-elastic.cs-active .cs-options ul li:nth-child(3) {
	-webkit-animation-delay: 0.2s;
	animation-delay: 0.2s;
}

.cs-skin-elastic.cs-active .cs-options ul li:nth-child(4) {
	-webkit-animation-delay: 0.25s;
	animation-delay: 0.25s;
} 

/* with more items, more delays declarations are needed */


.cs-skin-elastic .cs-options span {
	background-repeat: no-repeat;
	background-position: 1.5em 50%;
	background-size: 2em auto;
	padding: 0.8em 1em 0.8em 4em;
}

.cs-skin-elastic .cs-options span:hover,
.cs-skin-elastic .cs-options li.cs-focus span,
.cs-skin-elastic .cs-options .cs-selected span {
	color: #1e4c4a;
}

.cs-skin-elastic .cs-options .cs-selected span::after {
	content: '';
}

.cs-skin-elastic .cs-options li.flag-france span {
	background-image: url(../img/france.svg);
}

.cs-skin-elastic .cs-options li.flag-brazil span {
	background-image: url(../img/brazil.svg);
}

.cs-skin-elastic .cs-options li.flag-safrica span {
	background-image: url(../img/south-africa.svg);
}

.cs-skin-elastic .cs-options li.flag-argentina span {
	background-image: url(../img/argentina.svg);
}

@-webkit-keyframes expand { 
	0% { -webkit-transform: scale3d(1,0,1); }
	25% { -webkit-transform: scale3d(1,1.2,1); }
	50% { -webkit-transform: scale3d(1,0.85,1); }
	75% { -webkit-transform: scale3d(1,1.05,1) }
	100% { -webkit-transform: scale3d(1,1,1); }
}

@keyframes expand { 
	0% { -webkit-transform: scale3d(1,0,1); transform: scale3d(1,0,1); }
	25% { -webkit-transform: scale3d(1,1.2,1); transform: scale3d(1,1.2,1); }
	50% { -webkit-transform: scale3d(1,0.85,1); transform: scale3d(1,0.85,1); }
	75% { -webkit-transform: scale3d(1,1.05,1); transform: scale3d(1,1.05,1); }
	100% { -webkit-transform: scale3d(1,1,1); transform: scale3d(1,1,1); }
}


@-webkit-keyframes bounce { 
	0% { -webkit-transform: translate3d(0,-25px,0); opacity:0; }
	25% { -webkit-transform: translate3d(0,10px,0); }
	50% { -webkit-transform: translate3d(0,-6px,0); }
	75% { -webkit-transform: translate3d(0,2px,0); }
	100% { -webkit-transform: translate3d(0,0,0); opacity: 1; }
}

@keyframes bounce { 
	0% { -webkit-transform: translate3d(0,-25px,0); transform: translate3d(0,-25px,0); opacity:0; }
	25% { -webkit-transform: translate3d(0,10px,0); transform: translate3d(0,10px,0); }
	50% { -webkit-transform: translate3d(0,-6px,0); transform: translate3d(0,-6px,0); }
	75% { -webkit-transform: translate3d(0,2px,0); transform: translate3d(0,2px,0); }
	100% { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); opacity: 1; }
}


/* Default custom select styles */
div.cs-select {
	display: inline-block;
	vertical-align: middle;
	position: relative;
	text-align: left;
	background: #f1f2f7;
	z-index: 100;
	width: 100%;
	max-width: 80px;
	margin-left: 25px;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

div.cs-select:focus {
	outline: none; /* For better accessibility add a style for this in your skin */
}

.cs-select select {
	display: none;
}

.cs-select span {
	display: block;
	position: relative;
	cursor: pointer;
	padding: 9px 15px;
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
}

/* Placeholder and selected option */

.cs-select > span::after,
.cs-select .cs-selected span::after {
	speak: none;
	position: absolute;
	top: 50%;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}

.cs-select > span::after {
	content: "\f107";
	font-family: 'Fontawesome';
	right: 1em;
}

.cs-select .cs-selected span::after {
	content: '\2713';
	margin-left: 1em;
}

.cs-select.cs-active > span::after {
	-webkit-transform: translateY(-50%) rotate(180deg);
	transform: translateY(-50%) rotate(180deg);
}

div.cs-active {
	z-index: 200;
}

/* Options */
.cs-select .cs-options {
	position: absolute;
	overflow: hidden;
	width: 100%;
	background: #f1f2f7;
	visibility: hidden;
}

.cs-select.cs-active .cs-options {
	visibility: visible;
}

.cs-select ul {
	list-style: none;
	margin: 0;
	padding: 0;
	width: 100%;
}

.cs-select ul span {
	padding: 5px 15px;
}
.cs-select ul li {
	display: block;
}
.cs-select ul li.cs-focus span {
	background-color: #ddd;
}

/* Optgroup and optgroup label */
.cs-select li.cs-optgroup ul {
	padding-left: 1em;
}

.cs-select li.cs-optgroup > span {
	cursor: default;
}

/* This css file is to over write bootstarp css
--------------------------------------------------------- /
* Theme Name: ShaynaAdmin Template
* Theme URI: http://demos.jeweltheme.com/
* Author: jewel_theme
* Author URI: http://themeforest.net/user/jewel_theme/portfolio
* Description:
* Version: 1.0.0
* License: GNU General Public License v2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html
* Tags: html, themplate, ShaynaAdmin
--------------------------------------------------------- */
/* 


Googel Fonts  */
@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
/* Googel Fonts End  

*/
@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,700");
.bg-flat-color-1 {
  background: #00c292; }

.bg-flat-color-2 {
  background: #ab8ce4; }

.bg-flat-color-3 {
  background: #03a9f3; }

.bg-flat-color-4 {
  background: #fb9678; }

.bg-flat-color-5 {
  background: #66bb6a; }

.bg-flat-color-6 {
  background: #5c6bc0; }

.bg-transparent {
  background-color: transparent; }

.white-color {
  color: #fff; }

.flat-color-1 {
  color: #00c292; }

.flat-color-2 {
  color: #ab8ce4; }

.flat-color-3 {
  color: #03a9f3; }

.flat-color-4 {
  color: #fb9678; }

.flat-color-5 {
  color: #66bb6a; }

.flat-color-6 {
  color: #5c6bc0; }

.bg-twitter {
  background: #1da1f2; }

.bg-facebook {
  background: #3b5998; }

.bg-instagram {
  background: #833ab4; }

.bg- {
  background: #ef5350; }

.bg- {
  background: #4dbd74; }

.bg- {
  background: #66bb6a; }

.bg-white {
  background-color: #fff; }

.fade-5 {
  opacity: 0.5; }

.icon-lg {
  font-size: 4.68em; }

.fw-r {
  font-weight: normal; }

.color-gray {
  color: #868e96; }

.text-up {
  text-transform: uppercase; }

.br-0 {
  border: none !important; }

.black-rgba {
  background-color: rgba(0, 0, 0, 0.15) !important; }

.color-white {
  color: #fff !important; }

.color-red {
  color: #dc3545; }

.font-3xl {
  font-size: 2.8125em; }

.font-4xl {
  font-size: 3.75em; }

.width-90 {
  width: 90px; }

.height-15 {
  height: 15px; }

.height-93 {
  height: 93px; }

.height-100 {
  height: 100px; }

.inline-block {
  display: inline-block; }

.mb-15 {
  margin-bottom: 15px; }

/* 


Googel Fonts  */
/* Googel Fonts End  

*/
.bg-flat-color-1 {
  background: #00c292; }

.bg-flat-color-2 {
  background: #ab8ce4; }

.bg-flat-color-3 {
  background: #03a9f3; }

.bg-flat-color-4 {
  background: #fb9678; }

.bg-flat-color-5 {
  background: #66bb6a; }

.bg-flat-color-6 {
  background: #5c6bc0; }

.bg-transparent {
  background-color: transparent; }

.white-color {
  color: #fff; }

.flat-color-1 {
  color: #00c292; }

.flat-color-2 {
  color: #ab8ce4; }

.flat-color-3 {
  color: #03a9f3; }

.flat-color-4 {
  color: #fb9678; }

.flat-color-5 {
  color: #66bb6a; }

.flat-color-6 {
  color: #5c6bc0; }

.bg-twitter {
  background: #1da1f2; }

.bg-facebook {
  background: #3b5998; }

.bg-instagram {
  background: #833ab4; }

.bg- {
  background: #ef5350; }

.bg- {
  background: #4dbd74; }

.bg- {
  background: #66bb6a; }

.bg-white {
  background-color: #fff; }

.fade-5 {
  opacity: 0.5; }

.icon-lg {
  font-size: 4.68em; }

.fw-r {
  font-weight: normal; }

.color-gray {
  color: #868e96; }

.text-up {
  text-transform: uppercase; }

.br-0 {
  border: none !important; }

.black-rgba {
  background-color: rgba(0, 0, 0, 0.15) !important; }

.color-white {
  color: #fff !important; }

.color-red {
  color: #dc3545; }

.font-3xl {
  font-size: 2.8125em; }

.font-4xl {
  font-size: 3.75em; }

.width-90 {
  width: 90px; }

.height-15 {
  height: 15px; }

.height-93 {
  height: 93px; }

.height-100 {
  height: 100px; }

.inline-block {
  display: inline-block; }

.mb-15 {
  margin-bottom: 15px; }

.tdl-holder {
  margin: 0 auto; }
  .tdl-holder ul {
    list-style: none;
    margin: 0;
    padding: 0; }
  .tdl-holder li {
    position: relative;
    background-color: transparent;
    list-style: outside none none;
    margin: 0;
    padding: 7px 0; }
    .tdl-holder li:after, .tdl-holder li:before {
      content: "\f142";
      top: 24px;
      position: absolute;
      font: normal normal normal 14px/1 FontAwesome;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      z-index: 99;
      color: #99abb4; }
    .tdl-holder li:after {
      left: 10px; }
    .tdl-holder li:before {
      left: 14px; }
    .tdl-holder li span {
      margin-left: 30px;
      vertical-align: middle;
      -webkit-transition: all 0.2s linear;
      transition: all 0.2s linear; }
  .tdl-holder label {
    cursor: pointer;
    display: block;
    line-height: 50px;
    padding: 0 15px;
    padding-left: 30px;
    position: relative;
    margin: 0 !important;
    background: #fafafa;
    color: #99abb4;
    font-size: 15px;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear; }
    .tdl-holder label:hover {
      background-color: rgba(153, 171, 180, 0.1); }
    .tdl-holder label a {
      border-radius: 50%;
      color: rgba(153, 171, 180, 0.5);
      float: right;
      line-height: normal;
      margin-top: 15px;
      text-align: center;
      text-decoration: none;
      height: 16px;
      width: 20px;
      -webkit-transition: all 0.2s linear;
      transition: all 0.2s linear; }
      .tdl-holder label a:hover {
        color: rgba(153, 171, 180, 0.8); }
  .tdl-holder input[type="checkbox"] {
    cursor: pointer;
    opacity: 0;
    position: absolute; }
    .tdl-holder input[type="checkbox"] + i {
      border: 1px solid rgba(153, 171, 180, 0.3);
      display: block;
      height: 18px;
      position: absolute;
      top: 15px;
      width: 18px;
      z-index: 1; }
    .tdl-holder input[type="checkbox"]:checked + i::after {
      content: "\e64c";
      font-family: 'themify';
      display: block;
      color: rgba(153, 171, 180, 0.5);
      left: 0;
      position: absolute;
      top: -16px;
      z-index: 2; }
    .tdl-holder input[type="checkbox"]:checked ~ span {
      text-decoration: line-through; }
  .tdl-holder input[type="text"] {
    height: 60px;
    margin-top: 20px;
    font-size: 14px; }

.transition {
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease; }

body {
  display: table;
  font-family: "Open Sans", sans-serif;
  font-size: 16px;
  width: 100%; }

p {
  font-size: 16px;
  font-family: "Open Sans", sans-serif;
  font-weight: 400;
  line-height: 24px;
  color: #878787; }

p:focus {
  border: none;
  outline: 0; }

a, button {
  text-decoration: none;
  outline: none !important;
  color: #878787;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease; }

a:hover,
a:focus {
  text-decoration: none;
  color: #000; }

h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0; }

h5 {
  font-size: 1em; }

ul,
ol {
  padding-left: 0; }

.btn:focus,
button:focus {
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
  outline: 0; }

.btn.disabled, .btn:disabled {
  cursor: not-allowed; }

img {
  max-width: 100%; }

.modal-header {
  display: block; }

.mb-0 {
  margin-bottom: 0; }

.pb-0 {
  padding-bottom: 0; }

.ov-h {
  overflow: hidden; }

.btn,
button,
input,
textarea {
  -webkit-box-shadow: none;
          box-shadow: none;
  outline: 0 !important; }

.no-padding {
  padding: 0 !important; }

.progress-thin {
  border-radius: 0;
  height: 5px; }

canvas {
  max-width: 100%; }

.btn {
  border-radius: 3px; }

.text-muted {
  font-size: 14px; }
  .text-muted.muted-black {
    color: #333648 !important;
    font-weight: 600; }

.progress-box {
  margin-bottom: 30px; }
  .progress-box .por-title {
    font-size: 1em;
    font-weight: 600;
    color: #868e96;
    padding-bottom: 5px; }
  .progress-box .por-txt {
    font-size: 13px;
    padding-bottom: 5px; }

.order-table {
  position: relative; }
  .order-table:after, .order-table:before {
    content: "";
    position: absolute;
    top: 0px;
    height: 37px;
    width: 10px;
    background: #e8e9ef; }
  .order-table:after {
    right: -1px; }
  .order-table:before {
    left: -1px; }
  .order-table tr th {
    background: #e8e9ef; }
  .order-table tr td:last-child, .order-table tr th:last-child {
    text-align: right; }
  .order-table tr:last-child td {
    border: none; }
  .order-table .badge {
    color: white;
    padding: 10px;
    text-transform: uppercase;
    font-weight: normal; }
  .order-table .badge-complete {
    background: #00c292; }
  .order-table .badge-pending {
    background: #fb9678; }

.messenger-box {
  padding-top: 15px; }
  .messenger-box ul {
    padding-left: 0;
    display: inline-block;
    width: 100%;
    padding-bottom: 15px; }
  .messenger-box li {
    list-style: none;
    padding-bottom: 20px; }
  .messenger-box .avatar {
    width: 64px;
    float: left; }
    .messenger-box .avatar img {
      border-radius: 100%; }
    .messenger-box .avatar .send-time {
      font-size: 11px;
      text-align: center;
      padding-top: 5px; }
  .messenger-box .msg-box {
    margin-left: 84px; }
  .messenger-box .inner-box {
    position: relative;
    border-radius: 10px;
    background-color: #f1f2f7;
    font-size: 14px;
    color: #9aa0a4;
    padding: 14px 20px;
    display: table; }
    .messenger-box .inner-box .name {
      font-size: 16px;
      padding-bottom: 10px; }
    .messenger-box .inner-box:after {
      content: "";
      position: absolute;
      top: 10px;
      left: -18px;
      width: 18px;
      height: 18px;
      border-style: solid;
      border-width: 9px;
      border-color: transparent #f1f2f7 transparent transparent; }
  .messenger-box .msg-sent .avatar, .messenger-box .msg-sent .msg-box {
    float: right; }
  .messenger-box .msg-sent .msg-box {
    margin-left: 0;
    margin-right: 20px; }
  .messenger-box .msg-sent .inner-box:after {
    left: inherit;
    right: -18px;
    border-color: transparent transparent transparent #f1f2f7; }
  .messenger-box .send-mgs {
    margin-top: 20px;
    margin-bottom: 9px;
    position: relative; }
    .messenger-box .send-mgs .yourmsg {
      margin-right: 55px; }
      .messenger-box .send-mgs .yourmsg input {
        border: 1px solid #eceff1;
        height: 40px;
        line-height: 40px;
        font-size: 14px;
        border-radius: 7px; }
    .messenger-box .send-mgs .msg-send-btn {
      background: #03a9f3;
      color: #fff;
      font-size: 28px;
      border-radius: 7px;
      padding: 0;
      text-align: center;
      height: 40px;
      width: 40px;
      position: absolute;
      right: 0;
      top: 0; }

/* Global Styles */
/* Main Styles */
aside.left-panel {
  background: #fff;
  height: 100vh;
  padding: 0;
  vertical-align: top;
  width: 280px;
  -webkit-box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
          box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
  position: fixed;
  left: 0;
  bottom: 0;
  top: 55px;
  z-index: 999; }
  aside.left-panel:hover {
    overflow-x: scroll; }

.open aside.left-panel:hover {
  overflow-x: inherit; }

.small-device .right-panel {
  margin-left: 83px; }

.navbar {
  background: #fff;
  border-radius: 0;
  border: none;
  display: inline-block;
  margin: 0;
  padding: 0;
  vertical-align: top; }
  .navbar .main-menu {
    float: left;
    padding: 0;
    padding-bottom: 50px; }
  .navbar .menu-title {
    color: #41434d;
    clear: both;
    display: block;
    font-family: 'Open Sans';
    font-size: 14px;
    font-weight: 700;
    line-height: 50px;
    padding: 0;
    text-transform: uppercase;
    width: 100%; }
  .navbar .navbar-nav {
    float: none;
    position: relative; }
    .navbar .navbar-nav > li {
      padding-left: 30px;
      padding-right: 30px; }
      .navbar .navbar-nav > li.active {
        background: #fafafa; }
    .navbar .navbar-nav li {
      width: 100%; }
      .navbar .navbar-nav li.active .menu-icon, .navbar .navbar-nav li:hover .toggle_nav_button:before,
      .navbar .navbar-nav li .toggle_nav_button.nav-open:before {
        color: #03a9f3; }
      .navbar .navbar-nav li .dropdown-toggle:after {
        display: none; }
      .navbar .navbar-nav li > a {
        background: none !important;
        color: #607d8b;
        display: inline-block;
        font-size: 14px;
        line-height: 26px;
        padding: 10px 0;
        position: relative;
        width: 100%; }
        .navbar .navbar-nav li > a:hover, .navbar .navbar-nav li > a:hover .menu-icon {
          color: #03a9f3; }
        .navbar .navbar-nav li > a .menu-icon {
          color: #607d8b;
          float: left;
          margin-top: 8px;
          width: 55px;
          text-align: left;
          z-index: 9; }
        .navbar .navbar-nav li > a .menu-title-text {
          font-size: 14px; }
        .navbar .navbar-nav li > a .badge {
          border-radius: 0;
          font-weight: 600;
          float: right;
          margin: 6px 0 0 0;
          padding: 0.4em 0.5em; }
      .navbar .navbar-nav li.menu-item-has-children {
        position: relative; }
        .navbar .navbar-nav li.menu-item-has-children a {
          line-height: 30px; }
          .navbar .navbar-nav li.menu-item-has-children a:before {
            content: "";
            position: absolute;
            top: 23px;
            right: 0;
            width: 8px;
            height: 8px;
            border-style: solid;
            border-width: 1px;
            border-color: #607d8b #607d8b transparent transparent;
            -webkit-transform: rotate(45deg);
                    transform: rotate(45deg);
            -webkit-transition: all .25s ease;
            transition: all .25s ease; }
          .navbar .navbar-nav li.menu-item-has-children a:hover:before {
            border-color: #03a9f3 #03a9f3 transparent transparent; }
        .navbar .navbar-nav li.menu-item-has-children .sub-menu {
          background: #fff;
          border: none;
          -webkit-box-shadow: none;
                  box-shadow: none;
          overflow-y: hidden;
          padding: 0 0 0 35px; }
          .navbar .navbar-nav li.menu-item-has-children .sub-menu li {
            position: relative; }
          .navbar .navbar-nav li.menu-item-has-children .sub-menu i {
            color: #c8c9ce;
            float: left;
            padding: 0;
            position: absolute;
            left: 0;
            font-size: 14px;
            top: 9px; }
          .navbar .navbar-nav li.menu-item-has-children .sub-menu a {
            padding: 2px 0 2px 30px; }
            .navbar .navbar-nav li.menu-item-has-children .sub-menu a:before {
              content: '';
              display: none; }
            .navbar .navbar-nav li.menu-item-has-children .sub-menu a .menu-icon {
              top: 13px;
              text-align: left;
              width: 25px; }
        .navbar .navbar-nav li.menu-item-has-children.show a:before {
          border-color: transparent #607d8b #607d8b transparent;
          top: 20px;
          right: -5px; }
        .navbar .navbar-nav li.menu-item-has-children.show a:hover:before {
          border-color: transparent #03a9f3 #03a9f3 transparent; }
        .navbar .navbar-nav li.menu-item-has-children.show .sub-menu {
          max-height: 1000px;
          opacity: 1;
          position: static !important; }

.navbar .navbar-nav > .active > a,
.navbar .navbar-nav > .active > a:focus,
.navbar .navbar-nav > .active > a:hover {
  color: #03a9f3; }

.navbar-nav li span.count {
  background: #a9d86e;
  border-radius: 50%;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 9px;
  font-weight: 700;
  float: right;
  height: 20px;
  width: 20px;
  line-height: 20px;
  margin-right: 15px;
  text-align: center; }

.open .navbar .navbar-brand.hidden {
  display: block; }
.open .sub-menu .subtitle {
  display: block;
  font-size: 15px;
  line-height: 35px;
  color: #607d8b;
  border-bottom: 1px solid rgba(96, 125, 139, 0.15); }
.open .sub-menu i {
  left: 15px !important; }

.sub-menu .subtitle {
  display: none; }
  .sub-menu .subtitle > .menu-icon {
    display: none; }

.open aside.left-panel {
  max-width: 83px;
  width: 83px; }
  .open aside.left-panel .navbar .navbar-header {
    padding: 0; }
  .open aside.left-panel .navbar .navbar-brand {
    display: none; }
    .open aside.left-panel .navbar .navbar-brand.hidden {
      display: block !important;
      text-align: center;
      width: 100%; }
      .open aside.left-panel .navbar .navbar-brand.hidden img {
        max-width: 100%;
        margin: 0 auto; }
    .open aside.left-panel .navbar .navbar-brand.d-md-none {
      display: block !important;
      margin: 13px 0 0;
      min-height: 67px;
      padding: 0;
      text-align: center; }
  .open aside.left-panel .navbar .navbar-nav:before {
    display: none !important; }
  .open aside.left-panel .navbar .navbar-nav li {
    position: relative;
    padding: 0 15px; }
    .open aside.left-panel .navbar .navbar-nav li a {
      font-size: 0;
      z-index: 0;
      -webkit-transition: none;
      transition: none; }
      .open aside.left-panel .navbar .navbar-nav li a .menu-icon {
        font-size: 20px;
        z-index: -1;
        text-align: center;
        width: inherit; }
      .open aside.left-panel .navbar .navbar-nav li a .menu-title-text {
        font-size: 0; }
      .open aside.left-panel .navbar .navbar-nav li a .badge {
        display: none; }
    .open aside.left-panel .navbar .navbar-nav li > a {
      max-width: 60px;
      padding-left: 0; }
    .open aside.left-panel .navbar .navbar-nav li.menu-item-has-children {
      overflow: hidden; }
      .open aside.left-panel .navbar .navbar-nav li.menu-item-has-children ul {
        padding-left: 0; }
      .open aside.left-panel .navbar .navbar-nav li.menu-item-has-children .sub-menu {
        display: block;
        left: 83px;
        top: 0; }
        .open aside.left-panel .navbar .navbar-nav li.menu-item-has-children .sub-menu li a {
          display: block;
          font-size: 14px;
          max-width: inherit;
          padding: 2px 15px 2px 25px;
          width: 100%; }
          .open aside.left-panel .navbar .navbar-nav li.menu-item-has-children .sub-menu li a .menu-icon {
            text-align: center; }
      .open aside.left-panel .navbar .navbar-nav li.menu-item-has-children.show {
        overflow: visible; }
        .open aside.left-panel .navbar .navbar-nav li.menu-item-has-children.show .sub-menu {
          position: absolute !important;
          width: 180px;
          -webkit-box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08);
                  box-shadow: 1px 0 20px rgba(0, 0, 0, 0.08); }
    .open aside.left-panel .navbar .navbar-nav li span.count {
      display: none;
      margin-right: 5px;
      z-index: 1; }
    .open aside.left-panel .navbar .navbar-nav li.active a:after {
      content: '';
      display: none; }
  .open aside.left-panel .navbar .navbar-nav .menu-title {
    font-size: 0;
    line-height: 0;
    opacity: 0;
    padding: 0; }
  .open aside.left-panel .menutoggle {
    background-color: #dc3545;
    color: #fff !important;
    right: -20px;
    text-align: center; }

/* Right panel */
.right-panel {
  background: #f1f2f7;
  margin-left: 280px;
  margin-top: 55px; }
  .right-panel .top-left {
    width: 350px;
    float: left; }
  .right-panel .top-rigth {
    float: left; }
  .right-panel .breadcrumbs {
    float: left;
    margin-top: 30px;
    padding: 0 1.875em;
    width: 100%; }
    .right-panel .breadcrumbs .breadcrumbs-inner {
      background-color: #fff; }
    .right-panel .breadcrumbs .col-lg-8 .page-header {
      float: left; }
  .right-panel .page-header {
    min-height: 50px;
    margin: 0px;
    padding: 0px 15px;
    background: #ffffff;
    border-bottom: 0px; }
    .right-panel .page-header h1 {
      font-size: 18px;
      padding: 15px 0; }
    .right-panel .page-header .breadcrumb {
      margin: 0px;
      padding: 13.5px 0;
      background: #fff;
      text-transform: capitalize; }
    .right-panel .page-header .breadcrumb > li + li:before {
      padding: 0 5px;
      color: #ccc;
      content: "/\00a0"; }

.right-panel header.header {
  background: #fff;
  border-bottom: 1px solid #e8e9ed;
  -webkit-box-shadow: none;
          box-shadow: none;
  clear: both;
  padding: 0 30px;
  height: 55px;
  position: fixed;
  left: 280px;
  left: 0;
  right: 0;
  top: 0;
  z-index: 999; }
.right-panel .navbar-brand {
  width: 250px;
  display: inline-block; }
.right-panel .menutoggle {
  padding-top: 7px; }
.right-panel .navbar-header {
  width: 100%;
  background-color: #fff;
  padding: 0 1.25em 0 0; }
  .right-panel .navbar-header > a {
    display: inline-block; }
.right-panel .navbar-brand {
  line-height: 42px; }
  .right-panel .navbar-brand img {
    max-width: 145px; }
  .right-panel .navbar-brand.hidden {
    display: none; }

.open .right-panel {
  margin-left: 83px; }
.open .let-panel {
  z-index: 999; }

header.fixed-top {
  background: #fff;
  padding: 20px; }

.menutoggle {
  background-color: transparent;
  color: #99abb4 !important;
  cursor: pointer;
  font-size: 1em;
  height: 40px;
  line-height: 40px;
  width: 40px;
  display: block;
  text-align: right; }

.search-trigger {
  background: transparent;
  border: none;
  color: #99abb4;
  cursor: pointer;
  font-size: 16px;
  line-height: 55px;
  padding: 0;
  width: 43px; }

header .form-inline {
  background: #131c21;
  display: none;
  height: 55px;
  margin: 0;
  width: 100%;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 9999; }
  header .form-inline .search-form {
    height: 100%;
    max-width: 1025px;
    margin: 0 auto;
    position: relative; }
    header .form-inline .search-form input[type="text"] {
      background: #131c21;
      border: none;
      border-radius: 0;
      -webkit-box-shadow: none;
              box-shadow: none;
      color: #d3d3d3;
      font-size: 16px;
      height: inherit;
      margin-right: 0 !important;
      padding: 10px 36px 10px 15px;
      width: 100%; }
    header .form-inline .search-form input[type="text"].active,
    header .form-inline .search-form input[type="text"]:focus {
      border-color: rgba(0, 0, 0, 0.125);
      outline: 0; }
    header .form-inline .search-form button {
      background: transparent;
      border: none;
      color: #fff;
      font-size: 16px;
      position: absolute;
      right: 15px;
      top: 50%;
      margin-top: -14px !important; }
    header .form-inline .search-form button:active,
    header .form-inline .search-form button:focus,
    header .form-inline .search-form button:visited,
    header .form-inline .search-form .btn-outline-success:hover {
      background: transparent;
      border: none !important;
      -webkit-box-shadow: none;
              box-shadow: none;
      outline: 0 !important; }
    header .form-inline .search-form.close {
      display: none; }

.header-left {
  display: inline-block; }

.header-left.open .form-inline {
  display: block; }

.header-left .dropdown {
  display: inline-block; }
  .header-left .dropdown .dropdown-toggle {
    background: transparent;
    border: none;
    color: #99abb4;
    font-size: 16px;
    line-height: 55px;
    padding-top: 0;
    padding-bottom: 0; }
    .header-left .dropdown .dropdown-toggle:after {
      display: none; }
    .header-left .dropdown .dropdown-toggle .count {
      border-radius: 50%;
      color: #fff;
      font-size: 11px;
      height: 15px;
      width: 15px;
      line-height: 15px;
      right: 0;
      top: 12px;
      position: absolute; }
    .header-left .dropdown .dropdown-toggle:active, .header-left .dropdown .dropdown-toggle:focus, .header-left .dropdown .dropdown-toggle:visited {
      background: none !important;
      border-color: transparent !important;
      color: #292b35 !important; }
  .header-left .dropdown .dropdown-menu {
    background: #fff;
    border: none;
    border-radius: 0;
    -webkit-box-shadow: none;
            box-shadow: none;
    top: 52px !important;
    left: inherit !important;
    right: 0 !important;
    -webkit-box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
    line-height: 35px; }
    .header-left .dropdown .dropdown-menu p {
      font-size: 15px;
      margin: 0;
      padding: 5px 15px; }
    .header-left .dropdown .dropdown-menu .dropdown-item {
      color: #99abb4;
      font-size: 13px;
      padding: 10px 15px 3px;
      text-overflow: ellipsis;
      -webkit-transition: all .25s;
      transition: all .25s; }
      .header-left .dropdown .dropdown-menu .dropdown-item:hover {
        background: rgba(233, 236, 239, 0.5); }
      .header-left .dropdown .dropdown-menu .dropdown-item .photo {
        float: left;
        margin-right: 15px;
        width: 25px; }
      .header-left .dropdown .dropdown-menu .dropdown-item .message .name {
        margin-top: -5px; }
      .header-left .dropdown .dropdown-menu .dropdown-item .message .time {
        font-size: 11px; }
      .header-left .dropdown .dropdown-menu .dropdown-item .message p {
        clear: both;
        font-size: 14px;
        margin: 0;
        padding: 0;
        text-overflow: ellipsis; }

.header-menu {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end; }
  .header-menu .dropdown {
    line-height: 55px;
    margin-top: 0 !important; }
    .header-menu .dropdown .dropdown-toggle {
      line-height: 55px; }

.user-area .dropdown-toggle {
  position: relative;
  z-index: 0; }
  .user-area .dropdown-toggle:before {
    content: "";
    position: absolute;
    right: -3px;
    bottom: 10px;
    background: #868e96;
    width: 11px;
    height: 11px;
    border-radius: 100%;
    border: 2px  solid white;
    z-index: 1; }
  .user-area .dropdown-toggle.active:before {
    background: #49a342; }

.dropdown-menu {
  border-radius: 0;
  -webkit-transform: none !important;
          transform: none !important; }

.for-notification .dropdown-menu .dropdown-item {
  padding: 5px 15px !important;
  text-overflow: ellipsis; }
  .for-notification .dropdown-menu .dropdown-item i {
    float: left;
    font-size: 14px;
    margin: 5px 5px 0 0;
    text-align: left;
    width: 20px; }
  .for-notification .dropdown-menu .dropdown-item p {
    padding: 0 !important;
    text-overflow: ellipsis; }

.user-area {
  float: right;
  padding-right: 0;
  position: relative;
  padding-left: 20px; }
  .user-area .user-menu {
    background: #fff;
    border: none;
    left: inherit !important;
    right: 0;
    top: 54px !important;
    margin: 0;
    max-width: 150px;
    padding: 5px 10px;
    position: absolute;
    width: 100%;
    z-index: 999;
    min-width: 150px;
    -webkit-box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05);
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.05); }
    .user-area .user-menu .nav-link {
      color: #607d8b;
      display: block;
      font-size: 13px;
      line-height: 22px;
      padding: 5px 0; }
      .user-area .user-menu .nav-link > i {
        margin-right: 10px; }
  .user-area .user-avatar {
    float: right;
    width: 40px; }
  .user-area .user-info .name {
    color: #8c8c8c;
    font-size: 14px;
    position: relative;
    text-transform: uppercase; }
  .user-area .count {
    background: #d9534f;
    border-radius: 50%;
    color: #fff;
    font-family: 'Open Sans';
    font-size: 9px;
    font-weight: 700;
    float: right;
    height: 20px;
    width: 20px;
    line-height: 20px;
    text-align: center; }
  .user-area .dropdown-toggle {
    line-height: 55px;
    height: 55px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center; }
    .user-area .dropdown-toggle:after {
      display: none; }

#menuToggle2 {
  padding-left: 25px; }

#language-select {
  color: #f1f2f7;
  float: right;
  margin: 7px 20px 0 0;
  max-width: 80px; }
  #language-select:focus, #language-select:visited {
    border: none;
    outline: 0; }
  #language-select .flag-icon {
    line-height: 55px; }
  #language-select .dropdown-toggle::after {
    display: none; }
  #language-select .dropdown-menu {
    background: #fff;
    border: none;
    border-radius: 0;
    left: -8px !important;
    min-width: inherit;
    padding: 0 5px;
    top: 81px !important; }
    #language-select .dropdown-menu .dropdown-item {
      line-height: 1.5;
      margin-right: 0;
      max-width: 25px;
      padding: 0; }
      #language-select .dropdown-menu .dropdown-item:hover {
        background: #fff; }
      #language-select .dropdown-menu .dropdown-item .flag-icon {
        line-height: 1.5;
        margin-right: 0;
        width: 25px; }

.notification-show + .dropdown-menu,
.message-show + .dropdown-menu,
.language-show + .dropdown-menu {
  display: block; }

.content {
  float: left;
  padding: 1.875em;
  width: 100%; }

.card {
  margin-bottom: 1.875em;
  border-radius: 5px;
  padding: 0;
  border: 0px solid transparent;
  -webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
          box-shadow: 0 0 20px rgba(0, 0, 0, 0.08); }
  .card .box-title {
    font-weight: 600;
    font-size: 1em;
    padding: 5px 0; }
  .card .weather-title.box-title {
    padding: 0 15px;
    line-height: 50px;
    background: #fff;
    border-radius: 5px 5px 0 0; }
  .card.weather-box .card-body {
    padding-top: 0; }
  .card.weather-box .top {
    background: #eceff1;
    margin-left: -20px;
    margin-right: -20px;
    padding: 20px;
    padding-top: 22px;
    overflow: hidden; }
    .card.weather-box .top .wi {
      float: left;
      width: 100px;
      text-align: left;
      padding-bottom: 10px; }
      .card.weather-box .top .wi:before {
        font-size: 60px; }
    .card.weather-box .top .updates {
      font-size: 14px;
      text-align: right; }
    .card.weather-box .top .currently {
      font-size: 22px;
      text-align: right; }
  .card.weather-box .middle {
    clear: both;
    position: relative;
    height: 80px;
    color: #333648; }
    .card.weather-box .middle .city {
      padding-top: 15px;
      width: 100%;
      font-weight: 700;
      font-size: 16px; }
      .card.weather-box .middle .city span {
        font-size: 14px;
        display: block;
        font-weight: 400; }
    .card.weather-box .middle .temp {
      position: absolute;
      font-size: 34px;
      top: 10px;
      right: 0; }
      .card.weather-box .middle .temp span {
        font-size: 16px; }
  .card.weather-box .nextdays {
    clear: both;
    padding-top: 22px;
    text-align: center;
    margin-left: -20px;
    margin-right: -20px;
    border-top: 1px solid #ededed;
    background: #fff;
    font-family: "Open Sans", sans-serif; }
    .card.weather-box .nextdays .days {
      display: inline-block;
      width: 20%;
      font-size: 14px; }
      .card.weather-box .nextdays .days span {
        display: block; }
  .card .card-top,
  .card .card-footer {
    background: #fafafa;
    border-bottom: 1px solid #e8e9ef;
    float: left;
    padding: .75em 1.125em;
    width: 100%; }
    .card .card-top .card-title,
    .card .card-footer .card-title {
      color: #343a40;
      font-size: .875em;
      font-weight: 600;
      padding-top: 5px;
      text-transform: capitalize; }
    .card .card-top button,
    .card .card-footer button {
      background: none;
      border: none;
      -webkit-box-shadow: none;
              box-shadow: none;
      color: #868e96;
      font-size: 12px;
      padding: 0 5px; }
    .card .card-top[class*="bg"] .card-title,
    .card .card-footer[class*="bg"] .card-title {
      color: #fff; }
    .card .card-top[class*="bg"] button,
    .card .card-footer[class*="bg"] button {
      color: #fff; }
    .card .card-top.p-0 .card-title,
    .card .card-footer.p-0 .card-title {
      padding: 1.125em; }
    .card .card-top.bg-flat-color-1,
    .card .card-footer.bg-flat-color-1 {
      background: #5c6bc0;
      border: none; }
    .card .card-top.bg-flat-color-2,
    .card .card-footer.bg-flat-color-2 {
      background: #42a5f5;
      border: none; }
    .card .card-top.bg-flat-color-3,
    .card .card-footer.bg-flat-color-3 {
      background: #ffa726;
      border: none; }
    .card .card-top.bg-flat-color-4,
    .card .card-footer.bg-flat-color-4 {
      background: #ef5350;
      border: none; }
    .card .card-top.bg-flat-color-5,
    .card .card-footer.bg-flat-color-5 {
      background: #4dbd74;
      border: none; }
    .card .card-top.bg-flat-color-6,
    .card .card-footer.bg-flat-color-6 {
      background: #66bb6a;
      border: none; }
  .card .card-left {
    width: 60%; }
  .card .card-right {
    width: 40%; }
  .card .card-body {
    float: left;
    padding: 1.25em;
    position: relative;
    width: 100%; }
  .card h4 {
    font-size: 1.1rem; }
  .card .user-header .media img {
    border: 5px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    -webkit-border-radius: 50%; }
  .card .card-header .card-actions button {
    display: block;
    float: left;
    width: 50px;
    padding: .75rem 0;
    margin: 0 !important;
    color: #fff;
    outline: 0;
    text-align: center;
    background: transparent;
    border: 0;
    border-left: 1px solid rgba(120, 130, 140, 0.4); }
  .card .card-footer {
    padding: 0.65rem 1.25rem;
    background-color: #f0f3f5;
    border-top: 1px solid #c2cfd6; }
    .card .card-footer ul li {
      display: table-cell;
      padding: 0 1rem;
      text-align: center; }
  .card .nav-tabs {
    margin-bottom: -1px; }
    .card .nav-tabs a {
      border-radius: 0;
      color: #b5bcc2;
      font-size: 12px;
      font-weight: 700;
      padding: .25em .5em;
      text-transform: uppercase; }
      .card .nav-tabs a:hover {
        border-color: transparent; }
    .card .nav-tabs .active a {
      border-color: #e8e9ef;
      color: #868e96 !important; }

.action-menu .dropdown-toggle i {
  font-size: 12px; }
.action-menu .dropdown-toggle::after {
  display: none; }

.flotBar1,
.flotLine1 {
  height: 75px; }

.traffic-chart .ct-area {
  fill-opacity: .7; }

.traffic-chart .ct-series-a .ct-area,
.traffic-chart .ct-series-a .ct-slice-donut-solid,
.traffic-chart .ct-series-a .ct-slice-pie {
  fill: #66bb6a; }

.traffic-chart .ct-series-b .ct-area,
.traffic-chart .ct-series-b .ct-slice-donut-solid,
.traffic-chart .ct-series-b .ct-slice-pie {
  fill: #ef5350; }

.traffic-chart .ct-series-c .ct-area,
.traffic-chart .ct-series-c .ct-slice-donut-solid,
.traffic-chart .ct-series-c .ct-slice-pie {
  fill: #5c6bc0; }

.flotRealtime2 {
  height: 445px; }

.traffic-chart {
  height: 34vh; }

#flotBar2 {
  height: 168px; }

.gauge.g1 svg {
  fill: #ffa726 !important; }

#area_chart {
  max-height: 280px; }

#flotLine5 {
  height: 50px; }

#flotPie1 {
  height: 90px; }
  #flotPie1 .pieLabel {
    display: none; }
  #flotPie1 .legend tr {
    padding-bottom: 5px; }
  #flotPie1 .legendColorBox {
    float: left;
    margin: 2px 5px 0 0; }
    #flotPie1 .legendColorBox > div {
      border: none !important; }
  #flotPie1 .legendLabel {
    color: #868e96;
    font-family: 'Open Sans';
    font-size: 12px; }

/* Stats Table */
.table-stats table {
  font-family: 'Open Sans'; }
  .table-stats table th,
  .table-stats table td {
    border: none;
    border-bottom: 1px solid #e8e9ef;
    color: #868e96;
    font-size: 12px;
    font-weight: normal;
    padding: .75em 1.25em;
    text-transform: uppercase; }
    .table-stats table th img,
    .table-stats table td img {
      margin-right: 10px;
      max-width: 45px; }
    .table-stats table th .name,
    .table-stats table td .name {
      color: #343a40;
      font-size: 14px;
      text-transform: capitalize; }
  .table-stats table td {
    color: #343a40;
    font-size: 14px;
    font-weight: 600;
    text-transform: capitalize;
    vertical-align: middle; }

/* Timeline */
.timeline li {
  font-family: 'Open Sans';
  list-style: none;
  padding: 5px 0;
  position: relative; }
  .timeline li i {
    border-radius: 50%;
    color: #fff;
    font-size: 12px;
    height: 30px;
    width: 30px;
    line-height: 30px;
    text-align: center; }
  .timeline li span {
    color: #868e96;
    display: block;
    font-size: 14px; }
    .timeline li span a {
      color: #343a40; }
  .timeline li .time {
    font-size: 12px;
    padding-bottom: 15px; }
  .timeline li img {
    margin: 10px 5px 15px 0;
    max-height: 40px; }
.timeline .media-body {
  border-bottom: 1px solid #e8e9ef; }

/* Weather */
.widget .card-footer {
  border-top-color: #e8e9ef; }
.widget .weather-footer li {
  float: left;
  position: relative;
  width: 33.33%; }
  .widget .weather-footer li:before {
    content: '';
    background: #e8e9ef;
    height: 32px;
    width: 1px;
    top: 5px;
    right: 7.5px;
    position: absolute; }
  .widget .weather-footer li:last-child:before {
    display: none; }
  .widget .weather-footer li span {
    display: block; }
.widget .pt-0 {
  padding-top: 0 !important; }
.widget .social .rounded-circle {
  max-width: 130px;
  margin-top: -65px; }
.widget .social .weather-footer i {
  color: #868e96;
  font-size: 20px;
  line-height: 1;
  margin-top: -3px; }

/* Tabs */
.nav-tabs a.active {
  color: #555;
  cursor: default;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent; }
.nav-tabs .dropdown .dropdown-menu {
  top: 100% !important; }

.custom-tab .nav-tabs > a.active,
.custom-tab .nav-tabs > .active > a:focus,
.custom-tab .nav-tabs > li.active > a:hover {
  border-color: transparent transparent;
  color: #ff2e44;
  position: relative; }

.custom-tab .nav-tabs > a.active:after,
.custom-tab .nav-tabs > li.active > a:focus:after,
.custom-tab .nav-tabs > li.active > a:hover:after {
  background: #ff2e44;
  bottom: -1px;
  content: "";
  height: 2px;
  left: 0;
  position: absolute;
  right: 0;
  width: 100%;
  z-index: 999; }

.card .card-header .card-actions {
  float: right; }
  .card .card-header .card-actions [class*="btn"] {
    border-left: 1px solid rgba(120, 130, 140, 0.4);
    color: #878787;
    display: inline-block;
    font-size: 16px;
    float: left;
    padding: 0 7px;
    width: inherit;
    text-align: center; }

.social-buttons .card-body p button {
  padding-top: 0;
  padding-left: 0;
  padding-bottom: 0; }
.social-buttons .only-icon .card-body p button {
  padding: 0; }
.social-buttons .social i {
  padding: 0 10px;
  width: inherit !important; }
.social-buttons .only-text p button {
  padding: 0 .5rem; }

.buttons button {
  margin: 2px 0; }

/* Ribons */
.corner-ribon {
  text-align: center;
  width: 71px;
  height: 71px;
  position: absolute;
  right: 0;
  top: 0;
  font-size: 20px; }

.corner-ribon i {
  padding: 10px 0 0 35px;
  color: #fff; }

.twt-feed .wtt-mark {
  color: rgba(255, 255, 255, 0.15);
  font-size: 160px;
  position: absolute;
  top: 10px;
  left: 40%; }

.twt-feed {
  -webkit-border-radius: 4px 4px 0 0;
  color: #FFFFFF;
  padding: 40px 10px 10px;
  position: relative;
  min-height: 170px; }

.weather-category {
  padding: 15px 0;
  color: #74829C; }
  .weather-category ul li {
    width: 32%;
    text-align: center;
    border-right: 1px solid #e6e6e6;
    display: inline-block; }

.twt-feed.blue-bg {
  background: #58C9F3; }

.twt-category {
  display: inline-block;
  margin-bottom: 11px;
  margin-top: 10px;
  width: 100%; }
  .twt-category ul li {
    color: #bdbdbd;
    font-size: 13px; }

.twt-footer {
  padding: 12px 15px; }

.twt-footer, .twt-footer a {
  color: #d2d2d2; }

/* Button Reset */
.btn, .button {
  display: inline-block;
  font-weight: 400;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-transition: all .15s ease-in-out;
  transition: all .15s ease-in-out;
  border-radius: 3;
  cursor: pointer; }

/* Icons */
.icon-section {
  margin: 0 0 3em;
  clear: both;
  overflow: hidden; }

.icon-container {
  width: 240px;
  padding: .7em 0;
  float: left;
  position: relative;
  text-align: left; }

.icon-container [class^="ti-"],
.icon-container [class*=" ti-"] {
  color: #000;
  position: absolute;
  margin-top: 3px;
  -webkit-transition: .3s;
  transition: .3s; }

.icon-container:hover [class^="ti-"],
.icon-container:hover [class*=" ti-"] {
  font-size: 2.2em;
  margin-top: -5px; }

.icon-container:hover .icon-name {
  color: #000; }

.icon-name {
  color: #aaa;
  margin-left: 35px;
  font-size: 14px;
  -webkit-transition: .3s;
  transition: .3s; }

.icon-container:hover .icon-name {
  margin-left: 45px; }

.fontawesome-icon-list .page-header {
  border-bottom: 1px solid #C9CDD7;
  padding-bottom: 9px;
  margin: 30px 0px 27px 0px; }
.fontawesome-icon-list h2 {
  margin-top: 0;
  font-size: 20px;
  font-weight: 300; }
.fontawesome-icon-list i {
  font-style: 16px;
  padding-right: 10px; }

.social-box i {
  line-height: 110px; }
.social-box ul {
  display: inline-block;
  margin: 7px 0 0;
  padding: 10px;
  width: 100%; }
  .social-box ul li {
    color: #949CA0;
    font-size: 14px;
    font-weight: 700;
    padding: 0 10px 0 0;
    text-align: right; }
    .social-box ul li:last-child {
      padding-left: 10px;
      padding-right: 0;
      text-align: left; }
    .social-box ul li span {
      font-size: 14px; }

.login-logo {
  text-align: center;
  margin-bottom: 15px; }
  .login-logo span {
    color: #ffffff;
    font-size: 24px; }

.login-content {
  max-width: 540px;
  margin: 8vh auto; }

.login-form {
  background: #ffffff;
  padding: 30px 30px 20px;
  border-radius: 2px; }

.login-form h4 {
  color: #878787;
  text-align: center;
  margin-bottom: 50px; }

.login-form .checkbox {
  color: #878787; }

.login-form .checkbox label {
  text-transform: none; }

.login-form .btn {
  width: 100%;
  text-transform: uppercase;
  font-size: 14px;
  padding: 15px;
  border: 0px; }

.login-form label {
  color: #878787;
  text-transform: uppercase; }

.login-form label a {
  color: #ff2e44; }

.social-login-content {
  margin: 0px -30px;
  border-top: 1px solid #e7e7e7;
  border-bottom: 1px solid #e7e7e7;
  padding: 30px 0px;
  background: #fcfcfc; }

.social-button {
  padding: 0 30px; }
  .social-button .facebook {
    background: #3b5998;
    color: #fff; }
    .social-button .facebook:hover {
      background: #344e86; }
  .social-button .twitter {
    background: #00aced;
    color: #fff; }
    .social-button .twitter:hover {
      background: #0099d4; }

.social-button i {
  padding: 19px; }

.register-link a {
  color: #ff2e44; }

.cpu-load {
  width: 100%;
  height: 272px;
  font-size: 14px;
  line-height: 1.2em; }

.cpu-load-data-content {
  font-size: 18px;
  font-weight: 400;
  line-height: 40px; }

.cpu-load-data {
  margin-bottom: 30px; }

.cpu-load-data li {
  display: inline-block;
  width: 32.5%;
  text-align: center;
  border-right: 1px solid #e7e7e7; }

.cpu-load-data li:last-child {
  border-right: 0px; }

.nestable-cart {
  overflow: hidden; }

/* Forms */
.input-group-addon {
  background-color: transparent;
  border-left: 0; }

.input-group-addon, .input-group-btn {
  white-space: nowrap;
  vertical-align: middle; }

.input-group-addon {
  padding: .5rem .75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.25;
  color: #495057;
  text-align: center;
  background-color: #e9ecef;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: .25rem; }

.flotTip {
  background: #252525;
  border: 1px solid #252525;
  padding: 5px 15px;
  color: #ffffff; }

.flot-container {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  width: 100%;
  height: 275px;
  padding: 20px 15px 15px;
  margin: 15px auto 30px;
  background: transparent; }

.flot-pie-container {
  height: 275px; }

.flotBar-container {
  height: 275px; }

.flot-line {
  width: 100%;
  height: 100%;
  font-size: 14px;
  line-height: 1.2em; }

.legend table {
  border-spacing: 5px; }

#chart1,
#flotBar,
#flotCurve {
  width: 100%;
  height: 275px; }

.morris-hover {
  position: absolute;
  z-index: 1; }

.morris-hover.morris-default-style .morris-hover-row-label {
  font-weight: bold;
  margin: 0.25em 0; }

.morris-hover.morris-default-style .morris-hover-point {
  white-space: nowrap;
  margin: 0.1em 0; }

.morris-hover.morris-default-style {
  border-radius: 2px;
  padding: 10px 12px;
  color: #666;
  background: rgba(0, 0, 0, 0.7);
  border: none;
  color: #fff !important; }

.morris-hover-point {
  color: rgba(255, 255, 255, 0.8) !important; }

#morris-bar-chart {
  height: 285px; }

.map, .vmap {
  width: 100%;
  height: 400px; }

.btn-toolbar {
  float: left !important; }
  .btn-toolbar .btn-outline-secondary:not([disabled]):not(.disabled):active,
  .btn-toolbar .btn-outline-secondary:not([disabled]):not(.disabled).active,
  .btn-toolbar .show > .btn-outline-secondary.dropdown-toggle {
    background-color: #212529;
    border-color: #212529;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #fff; }
  .btn-toolbar .btn-outline-secondary:hover {
    background-color: #212529;
    border-color: #212529;
    color: #fff; }

/*    Widget One
---------------------------*/
.dib {
  display: inline-block; }

.stat-widget-one .stat-icon {
  vertical-align: top; }

.stat-widget-one .stat-icon i {
  font-size: 30px;
  border-width: 3px;
  border-style: solid;
  border-radius: 100px;
  padding: 15px;
  font-weight: 900;
  display: inline-block; }

.stat-widget-one .stat-content {
  margin-left: 30px;
  margin-top: 7px; }

.stat-widget-one .stat-text {
  font-size: 14px;
  color: #868e96; }

.stat-widget-one .stat-digit {
  font-size: 24px;
  color: #373757; }

/*    Widget Two
---------------------------*/
.stat-widget-two {
  text-align: center; }

.stat-widget-two .stat-digit {
  font-size: 1.75rem;
  font-weight: 500;
  color: #373757; }

.stat-widget-two .stat-digit i {
  font-size: 18px;
  margin-right: 5px; }

.stat-widget-two .stat-text {
  font-size: 16px;
  margin-bottom: 5px;
  color: #868e96; }

.stat-widget-two .progress {
  height: 8px;
  margin-bottom: 0;
  margin-top: 20px;
  -webkit-box-shadow: none;
          box-shadow: none; }

.stat-widget-two .progress-bar {
  -webkit-box-shadow: none;
          box-shadow: none; }

/*    Widget Three
---------------------------*/
.stat-widget-three .stat-icon {
  display: inline-block;
  padding: 33px;
  position: absolute;
  line-height: 21px; }

.stat-widget-three .stat-icon i {
  font-size: 30px;
  color: #ffffff; }

.stat-widget-three .stat-content {
  text-align: center;
  padding: 15px;
  margin-left: 90px; }

.stat-widget-three .stat-digit {
  font-size: 30px; }

.stat-widget-three .stat-text {
  padding-top: 4px; }

.home-widget-three .stat-icon {
  line-height: 19px;
  padding: 27px; }

.home-widget-three .stat-digit {
  font-size: 24px;
  font-weight: 300;
  color: #373757; }

.home-widget-three .stat-content {
  text-align: center;
  margin-left: 60px;
  padding: 13px; }

/*    Widget Four
---------------------------*/
.stat-widget-four {
  position: relative; }
  .stat-widget-four .stat-icon {
    display: inline-block;
    position: absolute;
    top: 5px; }
  .stat-widget-four i {
    display: block;
    font-size: 36px; }
  .stat-widget-four .stat-content {
    margin-left: 40px;
    text-align: center; }
  .stat-widget-four .stat-heading {
    font-size: 20px; }

/*    Widget Five
---------------------------*/
.stat-widget-five {
  min-height: 60px; }
  .stat-widget-five .stat-icon {
    font-size: 50px;
    line-height: 50px;
    position: absolute;
    left: 30px;
    top: 20px; }
  .stat-widget-five .stat-content {
    margin-left: 100px; }
  .stat-widget-five .stat-text {
    color: #455a64;
    font-size: 20px; }
  .stat-widget-five .stat-heading {
    color: #99abb4;
    font-size: 14px; }

.horizontal:before {
  background: #ffffff;
  bottom: 0;
  content: "";
  height: 38px;
  left: 0;
  margin: 0 auto;
  position: absolute;
  right: 0;
  width: 1px; }

/* Mixed Styles */
.badges h1, .badges h2, .badges h3, .badges h4, .badges h5, .badges h6 {
  margin: 5px 0; }

.vue-lists ul, .vue-lists ol {
  padding-left: 30px; }

.card .dropdown.float-right .dropdown-menu {
  left: inherit !important;
  right: 0 !important;
  top: 93% !important; }

.dataTables_paginate .pagination {
  border-radius: 0; }
  .dataTables_paginate .pagination li {
    border-radius: 0 !important; }
    .dataTables_paginate .pagination li a {
      border-radius: 0 !important;
      color: #292b35; }
    .dataTables_paginate .pagination li.active a {
      background: #292b35;
      border-color: #292b35;
      color: #fff; }
    .dataTables_paginate .pagination li:hover a {
      background: #292b35;
      border-color: #292b35;
      color: #fff; }

/* Footer */
footer.site-footer {
  padding: 0 1.875em; }
  footer.site-footer .footer-inner {
    color: #78909c;
    font-family: 'Open Sans';
    font-size: 14px;
    line-height: 1.5;
    padding: 2.45em 1.125em; }
    footer.site-footer .footer-inner a {
      color: #6a7074; }

.calender-cont {
  position: relative;
  padding-top: 20px; }
  .calender-cont .fc-title {
    color: #fff; }
  .calender-cont .fc-center {
    position: absolute;
    top: 0;
    left: 0; }
    .calender-cont .fc-center h2 {
      font-size: 16px;
      font-weight: 700; }
  .calender-cont td .fc-event {
    border: 0px solid transparent;
    padding: 1px; }
  .calender-cont td .fc-time {
    color: white;
    font-weight: 400;
    font-size: 11px;
    padding: 2px; }
  .calender-cont .fc-left .fc-button-group {
    position: absolute;
    top: 0;
    right: 0; }
    .calender-cont .fc-left .fc-button-group button {
      height: 20px;
      width: 20px;
      line-height: 18px;
      padding: 0;
      border: 0px solid transparent;
      background: #eceff1;
      color: #889196; }
      .calender-cont .fc-left .fc-button-group button.fc-prev-button {
        margin-right: 4px; }
      .calender-cont .fc-left .fc-button-group button .fc-icon {
        font-size: 11px; }
      .calender-cont .fc-left .fc-button-group button:hover {
        background: #d8d8d8; }
  .calender-cont.widget-calender {
    padding-top: 20px; }
    .calender-cont.widget-calender td, .calender-cont.widget-calender th {
      font-size: 14px;
      border: 0px solid transparent; }
    .calender-cont.widget-calender .fc-right {
      display: none; }
    .calender-cont.widget-calender .fc-today-button {
      display: none; }
    .calender-cont.widget-calender .fc-widget-content {
      height: 45px !important;
      min-height: 45px !important; }
    .calender-cont.widget-calender .fc-day-grid-container {
      max-height: 250px !important;
      overflow: hidden !important; }

@media (max-width: 1680px) {
  .timeline li {
    padding: 2px 0; } }
@media (max-width: 1368px) {
  .twt-category {
    margin-bottom: 0; }

  .twt-feed {
    max-height: 155px; }
    .twt-feed img {
      height: 75px;
      width: 75px; }

  .stat-widget-one .stat-content {
    margin-left: 15px; }

  .card-body {
    padding: 15px; }

  .badges button {
    margin: 2px 0; }

  #g2 {
    padding-top: 33px; }

  .timeline li .time {
    padding-bottom: 10px; }

  .height-93 {
    height: 75px; }

  .height-100 {
    height: 90px; }

  .widget .row.p-4.height-93 {
    padding: 1.125em 1.75em !important; }
  .widget .card-footer.p-3.bg-white.text-center {
    padding: .9em !important; }

  .weather h3.fw-r.text-white {
    font-size: 1.125em; }
  .weather span {
    font-size: 12px; } }
@media (max-width: 1024px) {
  .open aside.left-panel {
    width: 280px;
    max-width: 280px; }

  aside.left-panel:hover {
    overflow-x: inherit; }

  aside.left-panel.open-menu {
    overflow-x: scroll; }

  aside.left-panel {
    max-width: 83px;
    width: 83px; }
    aside.left-panel .navbar .navbar-header {
      padding: 0; }
    aside.left-panel .navbar .navbar-brand {
      display: none; }
      aside.left-panel .navbar .navbar-brand.hidden {
        padding: 0 0 10px;
        text-align: center;
        width: 100%; }
        aside.left-panel .navbar .navbar-brand.hidden img {
          max-width: 100%;
          margin: 0 auto; }
      aside.left-panel .navbar .navbar-brand.d-md-none {
        margin: 13px 0 0;
        min-height: 67px;
        padding: 0;
        text-align: center; }
    aside.left-panel .navbar .navbar-nav:before {
      display: none !important; }
    aside.left-panel .navbar .navbar-nav li {
      position: relative; }
      aside.left-panel .navbar .navbar-nav li a {
        font-size: 0;
        z-index: 0;
        -webkit-transition: none;
        transition: none; }
        aside.left-panel .navbar .navbar-nav li a .menu-icon {
          font-size: 20px;
          z-index: -1;
          text-align: center;
          width: inherit; }
        aside.left-panel .navbar .navbar-nav li a .menu-title-text {
          font-size: 0; }
        aside.left-panel .navbar .navbar-nav li a .badge {
          display: none; }
      aside.left-panel .navbar .navbar-nav li > a {
        max-width: 60px;
        padding-left: 0; }
      aside.left-panel .navbar .navbar-nav li.menu-item-has-children {
        overflow: hidden; }
        aside.left-panel .navbar .navbar-nav li.menu-item-has-children a:before {
          content: '';
          display: none; }
        aside.left-panel .navbar .navbar-nav li.menu-item-has-children ul {
          padding-left: 0; }
        aside.left-panel .navbar .navbar-nav li.menu-item-has-children .sub-menu {
          display: block;
          left: inherit;
          right: -160px;
          top: 0; }
          aside.left-panel .navbar .navbar-nav li.menu-item-has-children .sub-menu li a {
            display: block;
            font-size: 14px;
            max-width: inherit;
            padding: 2px 15px 2px 35px;
            width: 100%; }
            aside.left-panel .navbar .navbar-nav li.menu-item-has-children .sub-menu li a .menu-icon {
              text-align: center; }
          aside.left-panel .navbar .navbar-nav li.menu-item-has-children .sub-menu i {
            left: 10px; }
        aside.left-panel .navbar .navbar-nav li.menu-item-has-children.show {
          overflow: visible; }
          aside.left-panel .navbar .navbar-nav li.menu-item-has-children.show .sub-menu {
            position: absolute !important; }
      aside.left-panel .navbar .navbar-nav li span.count {
        display: none;
        margin-right: 5px;
        z-index: 1; }
      aside.left-panel .navbar .navbar-nav li.active a:after {
        content: '';
        display: none; }
    aside.left-panel .navbar .navbar-nav .menu-title {
      font-size: 0;
      line-height: 0;
      opacity: 0;
      padding: 0; }
    aside.left-panel .menutoggle {
      display: none; }
    aside.left-panel.open-menu {
      max-width: 280px;
      width: 280px; }
      aside.left-panel.open-menu .navbar .navbar-nav li > a {
        width: 100%;
        max-width: 100%;
        font-size: 14px; }
        aside.left-panel.open-menu .navbar .navbar-nav li > a .menu-icon {
          width: 55px;
          font-size: inherit;
          text-align: left; }
      aside.left-panel.open-menu .navbar .navbar-nav li.menu-item-has-children.show .sub-menu {
        position: static !important;
        margin-left: 45px; }
      aside.left-panel.open-menu .navbar .navbar-nav .menu-title {
        padding-left: 30px;
        padding-right: 30px;
        font-size: 14px;
        line-height: 50px;
        opacity: 1; }

  .navbar .main-menu {
    padding: 0; }

  #language-select,
  .user-area .dropdown-toggle,
  header .form-inline {
    height: 48px; }

  .header-left .dropdown .dropdown-menu {
    top: 47px !important; }

  #language-select .dropdown-menu {
    top: 49px !important; }

  .user-area .user-menu {
    top: 51px !important; }

  .content {
    padding: 1.25em; }

  .flotRealtime2 {
    height: 330px; }

  .card {
    margin-bottom: 1.25em; }
    .card .card-header {
      position: relative; }
      .card .card-header strong {
        display: block; }
      .card .card-header small {
        float: left; }
      .card .card-header .card-actions {
        right: 0;
        top: .75rem;
        position: absolute; }

  .card-footer.bg-white.br-0.pl-5.pr-5.pt-0.pb-5 {
    padding-bottom: 1.5em !important;
    padding-left: 1em !important;
    padding-right: 1em !important; }

  #g2 {
    height: auto !important;
    padding-top: 7px; }

  #flotBar2 {
    height: 150px; }

  #g1 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    padding-top: 0 !important; }

  .card-footer.bg-white [class*="float"] {
    display: block;
    float: none !important;
    text-align: center; }
    .card-footer.bg-white [class*="float"].currency {
      display: inline-block; }
    .card-footer.bg-white [class*="float"].fa {
      display: inline-block;
      float: left !important; }

  #traffic-chart {
    height: 232px !important; }

  i.p-4.font-3xl.width-90.text-center.mr-3.float-left.text-light {
    font-size: 1.8125em;
    width: 75px; }

  .card i + h4 {
    display: inline;
    padding-top: 1em !important; }

  .timeline li img {
    margin: 0px 5px 5px 0; }

  .timeline li span {
    padding-bottom: 8px !important; }

  .card-footer.bg-white.br-0.pl-5.pr-5.pt-1.pb-4.mb-3 {
    padding-left: 1em !important;
    padding-right: 1em !important; }

  .font-4xl {
    font-size: 2.75em; }

  .media.p-4.height-100,
  .widget .row.p-4.height-93 {
    padding: 1rem !important; }

  .height-100 {
    height: 63px; }

  .widget .social .rounded-circle {
    max-width: 60px;
    margin-top: 8px; }

  footer.site-footer {
    padding: 0 1.125em; }
    footer.site-footer .footer-inner {
      padding: 1.75em 1em; } }
@media (max-width: 992px) {
  [class*="col"].no-padding {
    -webkit-box-flex: 0;
        -ms-flex: none;
            flex: none; } }
@media (max-width: 768px) {
  .navbar {
    height: 100vh; }
    .navbar .navbar-nav li.menu-item-has-children > a:before {
      display: block !important; }
    .navbar .main-menu {
      float: none;
      padding-bottom: 70px; }

  .left-panel {
    display: none; }

  aside.left-panel {
    overflow: scroll; }

  .right-panel header.header {
    height: 62px; }
  .right-panel .top-left, .right-panel .top-right {
    width: 100%;
    float: none;
    background: white; }
  .right-panel .menutoggle {
    float: right; }
  .right-panel .navbar-header {
    padding: 0; }
  .right-panel header.header {
    position: static; }
    .right-panel header.header .top-left {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      padding: 0 30px;
      z-index: 999;
      border-bottom: 1px solid #dcdcdc; }
    .right-panel header.header .top-right {
      padding: 0 30px; }

  .small-device .right-panel {
    margin-left: 0; }

  #left-panel {
    max-width: 100%;
    width: 100%; }
    #left-panel .navbar .navbar-nav li > a {
      max-width: inherit;
      font-size: 14px; }
      #left-panel .navbar .navbar-nav li > a .menu-icon {
        width: 55px;
        text-align: left;
        font-size: 14px; }
    #left-panel .navbar .navbar-nav li.menu-item-has-children.show .sub-menu {
      position: static !important;
      padding-left: 50px; }

  .orders {
    overflow: hidden; }

  .order-table .avatar, .order-table .serial {
    display: none; } }
@media (max-width: 575px) {
  #left-panel .navbar {
    display: inherit; }
    #left-panel .navbar .main-menu {
      display: inherit; }
    #left-panel .navbar .sub-menu.children {
      display: none; }
    #left-panel .navbar .sub-menu.children.show {
      display: block; }

  .right-panel .navbar-brand {
    width: 220px;
    padding-bottom: 5px; }
  .right-panel .menutoggle {
    width: 20px; } }
#cellPaiChart {
  height: 160px; }
  #cellPaiChart .pieLabel {
    top: 50px !important; }
    #cellPaiChart .pieLabel div {
      font-size: 16px !important; }
  #cellPaiChart #pieLabel1 {
    left: 20px !important; }
  #cellPaiChart #pieLabel0 {
    left: inherit !important;
    right: 20px !important; }

/*# sourceMappingURL=style.css.map */
</style>