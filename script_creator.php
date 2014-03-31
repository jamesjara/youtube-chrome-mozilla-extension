<?php

/*


javascript:(function(){url='http://50.116.30.49/ticoyoutube.js';document.body.appendChild(document.createElement('script')).src=url+'?'+new%20Date().getTime();})();

 * */
$codigo_basura = "";

$strFlashVars 		= "a_________";
$fmt_list	  		= "a__________________";
$fmt_list_s	  		= "a____";
$fmt_stream_map		= "a______";
$fmt_stream_maps	= "a__________";
$vid_vars			= "a______";
$dict				= "a_";
$itag				= "a____________";
$key				= "a___";
$value				= "a________________________";
$vid_vars			= "a_________________";
$url				= "a_______________";
$msg				= "a________";
$continuar			= "a____________________";
$div_links			= "a_____________a_______";
$linkis			    = "a______________v______";
$fb_link			= "https://www.facebook.com/pages/James-Jara-Web-Blog/125047730935251";
$bad_browser		= "http://tico-youtube.blogspot.com/p/internet-explorer-obsoleto.html";
$web				= "http://tico-youtube.blogspot.com/";
$javascript = "

isIE=/*@cc_on!@*/false;isIE ?  $strFlashVars =document.getElementById('movie_player').getElementsByTagName('param')[1].value  :   $strFlashVars =document.getElementById(\"movie_player\").getAttribute(\"flashvars\");


if(  $strFlashVars ){
//var $strFlashVars = document.getElementById(\"movie_player\").getAttribute(\"flashvars\");

var $linkis = '';
  
//this is a hack for CHROME USER , movieplayer is overlapping the div
document.getElementById(\"movie_player\").setAttribute('wmode','opaque');
var param_wmode = document.createElement('param');
param_wmode.setAttribute('name', 'wmode');
param_wmode.setAttribute('value', 'opaque');
document.getElementById(\"movie_player\").appendChild(param_wmode);
document.getElementById(\"movie_player\").wmode = 'opaque';
var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
if(is_chrome){
document.getElementById(\"movie_player\").setAttribute(\"id\",\"movie_player2\");
document.getElementById(\"movie_player2\").setAttribute(\"id\",\"movie_player1\");
}

var is_IE = navigator.userAgent.toLowerCase().indexOf('ie') > -1;
if(is_IE){
 $linkis = '<a target=\"_blank\" href=\"$bad_browser\"><img border=\"0\" style=\"color: red; position: relative; top: -18px;\" src=\"http://pntrstbot.com/wp-content/uploads/2012/05/no_ie.png\"> </a> ';
  
}

var $div_links = document.createElement('div');


$strFlashVars = unescape($strFlashVars.replace(/&amp;/g, \"&\"));
var $fmt_list = $strFlashVars.match(/fmt_list.*/g)[0].substring(9);
if ($fmt_list.indexOf(\"&\") != -1) $fmt_list = $fmt_list.substr(0, $fmt_list.indexOf(\"&\"));
var $fmt_stream_map = $strFlashVars.match(/url_encoded_fmt_stream_map=(.*)url=http.*/ig)[0].substring(27);

var $fmt_list_s = $fmt_list.split(\",\");
var $fmt_stream_maps = $fmt_stream_map.split(\",\");
for (var i = 0; i < $fmt_list_s.length; i++) {
    ".$fmt_stream_maps."[i] = ".$fmt_stream_maps."[i];
    var $vid_vars = ".$fmt_stream_maps."[i].split(\"&\");
    var $dict = [];
    var $itag = '';
    for (var j = 0; j < $vid_vars.length; j++) {
        $key   = ".$vid_vars."[j].split(\"=\")[0];
        $value = ".$vid_vars."[j].split(\"=\")[1];
        switch ($key) { //key
            case \"url\":
                ".$dict."[j] =unescape($value);
                break;
            case \"type\":                
               //show video types console.log( unescape($value) + '-'+$itag);
                ".$dict."[j] = $key + \"=\" + $value;
                break;
            case \"fallback_host\":
                ".$dict."[j] = $key + \"=\" + $value;
                break;
            case \"sig\":
                ".$dict."[j] = $key + \"nature=\" + $value;
                break;
            case \"quality\":
                ".$dict."[j] = $key + \"=\" + $value;
                break;
            case \"itag\":
                $itag = $value;
                break;
        }
    }
    ".$dict."[$dict.length] = \"title=\" + escape(document.title);
    $url = $dict.join(\"&\").substring(1);
    $msg = null;
    $continuar = true;
    switch ($itag) { 
       case \"22\":
            //$msg = 'HD 720p MP4 video/mp4;+codecs=\"avc1.64001F,+mp4a.40.2';
            $msg = 'HD 720p MP4';
            break;
       case \"18\":
            //$msg = 'HQ MP4 | video/mp4 | codecs=\"avc1.42001E,+mp4a.40.2\"';
            $msg = 'HQ MP4';
            break;
       case \"37\":
            $msg = 'HQ MP4 1080';
            break;
       case \"34\":
            $msg = 'HQ FLV';
            break;
       case \"35\":
            $msg = 'HQ FLV 480P';
            break;
       case \"5\":
            $msg = 'LQ FLV';
            break;  
       case \"13\":
            $msg = 'LQ 3GP 176x144';
            //$msg = 'type: \"video/3gp\", resolution:\"176x144\", quality:\"small\"';
            break; 
       case \"17\":
           // $msg = 'type: \"video/3gpp;+codecs=\"mp4v.20.3,+mp4a.40.2\" , resolution:\"176x144\", quality:\"medium\"';
            $msg = 'MQ 3GP 176x144';
            break;
       case \"36\":
            //$msg = 'video/3gpp;+codecs=\"mp4v.20.3,+mp4a.40.2\" , 320x240 , quality:high';
            $msg = 'HQ 3GP 320x240';
            break;
       case \"43\":
            //$msg = 'MQ WEBM 43video/webm;+codecs=\"vp8.0,+vorbis\"';
            $msg = 'MQ WEBM 720p';
            break;
       case \"44\":
            // $msg = 'HQ WEBM 4344video/webm;+codecs=\"vp8.0,+vorbis\"';
            $msg = 'HQ WEBM 720p';
            break;
       case \"45\":
            //$msg = '45video/webm;+codecs=\"vp8.0,+vorbis\"'; 
            $msg = 'LQ WEBM';
            break;
       case \"46\":
            $msg = 'HQ WEBM 1080';
            break;
     }
     if($continuar) 
	 $linkis += '<a class=\"mws-dropdown-trigger\" href=\"'+$url+'\">'+$msg+'</a>';
}
}	



$div_links.innerHTML += ' <div class=\"clearfix\" id=\"mws-user-tools\">'    
  +'         	<div class=\"mws-dropdown-menu\" id=\"mws-user-notif\">'  
  + '<img border=\"0\" height=\"40px\" src=\"http://png-5.findicons.com/files/icons/282/flags/32/costa_rica.png\" style=\"color: red; position: relative; top: -13px;\">  '     
  + '<a target=\"_blank\" href=\"$fb_link\"><img border=\"0\" style=\"color: red; position: relative; top: -18px;\" src=\"http://png-5.findicons.com/files/icons/852/drink_web_2_0/32/drink_facebook.png\"> </a> '
   + $linkis       
    + '<a target=\"_blank\" href=\"$web\"><img border=\"0\" style=\"color: red; position: relative; top: -18px;\" src=\"http://png-5.findicons.com/files/icons/329/simple/16/help_and_support.png\"> </a> '
    +'      </div>   '     
       +' </div>';
       
       
var is_IE = navigator.userAgent.toLowerCase().indexOf('ie') > -1;
if(is_IE){
$div_links.innerHTML += ' <div style=\"color:red;\">   Your browser is obsolete. Please upgrade to <a href=\"http://www.getfirefox.com\" target=\"_new\">Mozilla Firefox</a>. </div> ';
}

      
  $div_links.innerHTML += '<style>'
  +'html { padding-top: 43px;}  '
  +'#jamesjaraweb{   text-align: center;border-bottom: 4px solid;    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.35);   height: 38px;  position: fixed;    z-index: 100; background-color: #35353A;  border-color:  Highlight ;  top: 0;  left: 0; width: 100%; z-index: 99999;  }'
  +' #mws-user-tools { width:100%; float: right; margin-right: 10px;padding: 9px 0;}'
  +' #mws-user-tools .mws-dropdown-menu {  margin-top: 4px;}'
  +'#mws-user-tools .mws-dropdown-menu .mws-dropdown-trigger {  top: -30px; margin-right: 5px; color:Red; height: 15px;  border: 1px solid rgba(255, 255, 255, 0.15);    border-radius: 4px 4px 4px 4px;    color: #FFFFFF;      outline: 0 none;    overflow: hidden;    padding: 4px;    position: relative;    text-align: center;    text-decoration: none;}'
  +'#mws-user-tools .mws-dropdown-menu a:hover {  color:Red; }'
    +'#mws-user-tools a:hover {  color:Red; }'
  + '#mws-dropdown-content{  color:red;}'
  + '#movie_player2 {display: ;}'
  +'</style> ';
 

$div_links.id = 'jamesjaraweb';
$div_links.class = 'jamesjaraweb';
if(!document.getElementById('jamesjaraweb')){
	if (document.body.firstChild){
		document.body.insertBefore($div_links, document.body.firstChild);
	} else {
		document.body.appendChild($div_links);
	}
}


";
	require 'class.JavaScriptPacker.php';
	$packer = new JavaScriptPacker($javascript);
	$javascript = $packer->pack();

	$handle = fopen('script.js', 'w+');
	fwrite($handle, $javascript );


