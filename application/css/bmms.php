/**
 * Buddyexpress Mail Managment System
 *
 * @package   Bframework
 * @subpackage BMMS
 * @author    Buddyexpress Core Team <admin@buddyexpress.net
 * @copyright 2013 BUDDYEXPRESS.
 * @license   Buddyexpress Public License http://www.buddyexpress.net/Licences/bpl/ 
 * @link      http://www.buddyexpress.net
 */
body {
padding-bottom: 10px;
position: relative;
z-index: 2;
margin: 20px auto;
min-height: 512px;
width: 848px;
background: none repeat scroll 0 0;
line-height:1.5;font-family:"Helvetica Neue", Arial, Helvetica, sans-serif;color:#000;background:none;font-size:10pt;}
.container {background:none;}
hr {background:#eee;width:850px;height:2px;margin:2em 0;padding:0;border:none;}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
caption, th, td {
	text-align: left;
	font-weight: normal;
	vertical-align: top;
}
.bmms-nav {
  background-color:#c3d9ff;
  border-top:1px solid #b3c9e4;
  border-bottom:1px solid #b3c9ef;
  height:1%; /* fixing IE 6 */
  margin:0 0 1.5em 0;
  min-height:auto;
  overflow:auto;
  padding:0.67em 0 0.67em 0;
}
.bmms-nav li {
  float:left;
  line-height:1.5;
  list-style-type:none;
  margin:0 0.5em 0 0.5em;
  padding:0;
}
.bmms-nav li a {
  color:#222;
  cursor:pointer;
  display:block;
  float:left;
  font-weight:bold;
  padding:0 .33em 0 .33em;
}
.bmms-nav li a.selected {
  color:#555;
  cursor:default;
}
.bmms-nav li a, .bmms-nav li a:focus, .bmms-nav li a:hover {
  text-decoration:none;
}
.bmms-nav li a:focus, .bmms-nav li a:hover {
  color:#555;
  outline:none;
}
.bmms-nav li.label {
  font-weight:normal;
  line-height:1.5;
  margin-right:1em;
  padding:.15em .33em .15em .33em;
}/* ***************************************
	TABLE
*************************************** */
.bmms-table {
	width: 100%;
	border-top: 1px solid #ccc;
}
.bmms-table td, .bmms-table th {
	background: white;
	border: 1px solid #ccc;
	padding: 4px 8px;
	vertical-align: middle;
}
.bmms-table th {
	background-color: #ddd;
}
.bmms-table .alt td {
	background: #eee;
}
.bmms-table input[type=checkbox] {
	margin-top: 3px;
}

.bmms-table-alt {
	width: 100%;
	border-top: 1px solid #ccc;
}
.bmms-table-alt th {
	background-color: #eee;
	font-weight: bold;
}
.bmms-table-alt td, th {
	padding: 2px 4px;
	border-bottom: 1px solid #ccc;
}
.bmms-table-alt td:first-child {
	width: 200px;
}
.bmms-table-alt tr:hover {
	background: #E4E4E4;
}
.bmms-mainb {
width:850px;
font-family: 'PT Sans', sans-serif;
}
.bmms-mainb th{
background: url("http://production.buddyexpress.net/template/img/sprites/tables/table-head-bg.png") repeat-x scroll top left #dddddd;
border-bottom: 1px solid #bcbcbc;

}
.bmms-mainb tr:hover td {
background: #e8eaef;
}

.bmms-footer {
font-size: .9em;
margin-bottom: 30px;
}
.bmms-append-footer {
padding-right: 40px;
}
.bmms-logo{
background:url("<?php echo bframework_get_appurl();?>images/logo-bmms.png") no-repeat;
width: 303px;
height: 90px;
}
.bmms-top-contents {
float: right;
margin-toP: -90px;
}
.paginate_button, .paginate_active {
	background-color: #ebebeb;
	border-style: solid;
	border-width: 1px;
	border-color: #ffffff #b5b5b5 #b5b5b5 #ffffff;
	margin: 0;
	padding: 2px 10px;
	cursor: pointer;
}

.paginate_button_disabled {
	cursor: default;
}

.paginate_active {
	background-color: #2D5580;
	border-color: #123458;
		color:#fff;

}    

.first {
	border-radius: 3px 0 0 3px;
}

.last {
	border-radius: 0 3px 3px 0;
}
.bmms-forms input, textarea {
	background: #fff;
	display: block;
	margin: 10px 0;
	border: 1px solid #c8c8c8;
	border-radius: 5px;
	padding: 5px 0;
	width: 400px;
	outline: none;
	/* Inset shadow */
	-webkit-box-shadow: inset 0px 2px 3px 0px rgba(18, 16, 11, 0.13);
	-moz-box-shadow: inset 0px 2px 3px 0px rgba(18, 16, 11, 0.13);
	box-shadow: inset 0px 2px 3px 0px rgba(18, 16, 11, 0.13);
}

.bmms-forms  .input {
	margin: 10px 0;
}

.bmms-forms input:hover, .bmms-forms input:active, .bmms-forms input:focus, .bmms-forms textarea:hover, .bmms-forms textarea:active, .bmms-forms textarea:focus {
	border: 1px solid #a3a3a3;
}

.bmms-forms input:active, .bmms-forms input:focus, .bmms-forms textarea:active, .bmms-forms textarea:focus  {
	-webkit-box-shadow: inset 0px 2px 3px 0px rgba(18, 16, 11, 0.13), 0px 0px 5px 0px rgba(58, 111, 163, 0.75);
	-moz-box-shadow: inset 0px 2px 3px 0px rgba(18, 16, 11, 0.13), 0px 0px 5px 0px rgba(58, 111, 163, 0.75);
	box-shadow: inset 0px 2px 3px 0px rgba(18, 16, 11, 0.13), 0px 0px 5px 0px rgba(58, 111, 163, 0.75);
}
.bmms-forms .submit{
	background-color: #ebebeb;
	border-style: solid;
	border-width: 1px;
	border-color: #ffffff #b5b5b5 #b5b5b5 #ffffff;
	margin: 0;
	padding: 2px 10px;
	cursor: pointer;
}

fieldset {
border: 2px solid #eee;
}
.fancybox-skin {
  background: rgb(255, 255, 255);
}
