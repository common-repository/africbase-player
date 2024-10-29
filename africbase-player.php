<?php
 
/**
 
 * @package Africbase
 
 */
 
/*
 
Plugin Name: Africbase Audio Player
 
Plugin URI: https://africbase.com/africbaseplayer
 
Description: Africbase Audio Player With Download Button, Helps Boost Your Seo, and Skyrocket Your Music Blog On Google with just one link.
 
Version: 2.0.2
 
Author: Africbase
 
Author URI: https://africbase.com
 
License: Africbase Private License
 
Text Domain: africbase-player
 
*/


function africbase_audio($attr){

global $post;
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );

    if ( get_option('africbase_ct')) {
$copyafricbase = '<div style=""><a class="hb-copy-a" href="https://africbase.com/" title="Powered By Africbase">ⓐfricbase</a></div>';
}
 
    $args = shortcode_atts( array(
     
            'url' => '#',
            'name' => '#',
            'artist' => '#',
            'color' => 'yes'
 
        ), $attr );
 
    $output = '<div class="africbase-con">
<div id="abrolldiv" class="africbase-audio-flex"> 
<div id="abrollimgg" class="africbase-art-img"><img src="'.$image[0].'" style="width:100px; height:100px"> </div>

<div class="africbase-art-mp3">
<div class="africbase-song-name">'.$args['name'].'</div>
<span class="africbase-song-art">by <b>'.$args['artist'].'</b> </span>
<br>
  
  <audio id="africbaseaudio" src="'.$args['url'].'"></audio>
  <div class="africbase-line">
  <span id="africbaseplay"><i class="fa fa-play" aria-hidden="true"></i></span>
  <span class="africbase-downloadmp3" onclick="africbase_enableLoop()"> <i class="fa fa-retweet" aria-hidden="true"></i></span>
  </div>
  </div>
  </div>
  <span id="africbase" class="africbase"></span>

<div class="africbase-progress" id="africbase-progress"></div>




</div>

<a class="africbase-btn" href="'.$args['url'].'"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download MP3</a>

<div class="hb-copy">'.$copyafricbase.'</div>';
    return $output;
}



function africbase_audio2($attr){
global $post;
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );
if ( get_option('africbase_ct')) {
$copyafricbase = '<div style=""><a class="hb-copy-a" href="https://africbase.com/" title="Powered By Africbase" rel="dofollow">ⓐfricbase</a></div>';
}
 
    $args = shortcode_atts( array(
             
            'wht' => get_the_title(),
            'whtt' => get_the_permalink($post->ID),
            'whttn' => get_bloginfo('name'),
            'url' => '#',
            'name' => '#',
            'artist' => '#',
            'color' => 'yes'
 
        ), $attr );
 
    $output = '<div class="africbase-con">
<div id="abrolldiv" class="africbase-audio-flex"> 
<div id="abrollimgg" class="africbase-art-img"><img src="'.$image[0].'" style="width:100px; height:100px"> </div>

<div class="africbase-art-mp3">
<div class="africbase-song-name">'.$args['name'].'</div>
<span class="africbase-song-art">by <b>'.$args['artist'].'</b> </span>
<br>
  
  <audio id="africbaseaudio" src="'.$args['url'].'"></audio>
  <div class="africbase-line">
  <span id="africbaseplay"><i class="fa fa-play" aria-hidden="true"></i></span>
  <span class="africbase-downloadmp3" onclick="africbase_enableLoop()"> <i class="fa fa-retweet" aria-hidden="true"></i></span>
  </div>
  </div>
  </div>
  <span id="africbase" class="africbase"></span>

<div class="africbase-progress" id="africbase-progress"></div>




</div>

<a class="africbase-btn" href="'.$args['url'].'"><i class="fa fa-cloud-download" aria-hidden="true"></i> Download MP3</a>

<div class="hb-copy">'.$copyafricbase.'</div>';
    return $output;
}
 
add_shortcode( 'africbase' , 'africbase_audio' );
add_shortcode( 'abplayer' , 'africbase_audio2' );

add_action('wp_enqueue_scripts', 'africbase_enqueue');
function africbase_enqueue() {
   
    wp_enqueue_style('africbase-faw-fonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), null);


wp_enqueue_style('africbase-fawwM-fonts', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), true);

}


function africbase_headerplayer(){
?>
<style type="text/css">
.artist-ab h3, .artist-ab h4 {
line-height:1!important;
}
.africbase-audio-flex {
flex-directionn: column;
  align-items: flex-start;
}
.africbase-art-img {
width:100px! important;
margin-right:10px;
flex:1.3! important;
}
.africbase-art-mp3 {
flex:2.8! important;
}
 .africbase-art-img1::after {
   content: "";
   background-image: url(<?php the_post_thumbnail_url(); ?>);
}
.africbase::after 
   {
   content: "";
   background-image: url("<?php echo esc_attr( get_option('africbase_watermark') ); ?>");
   width:<?php echo esc_attr( get_option('africbase_w_w') ); ?>! important;
height:<?php echo esc_attr( get_option('africbase_w_h') ); ?>! important;
   }
.africbase-con {
background-color: <?php echo esc_attr( get_option('africbase_bg') ); ?>! important;
border-radius:10px! important;
}
.playr {
background-color: <?php echo esc_attr( get_option('africbase_bg') ); ?>! important;
border:none!important;
overflow: hidden;
padding: 5px!important;
}
.playr *{
color: <?php echo esc_attr( get_option('africbase_color') ); ?>! important;
}
.africbase-con *{
color: <?php echo esc_attr( get_option('africbase_color') ); ?>! important;
}
.africbase-btn, #btnx, #downloadx {
background-color: <?php echo esc_attr( get_option('africbase_btn_c', 'darkblue') ); ?>! important;
}
#btnx {
color: <?php echo esc_attr( get_option('africbase_color') ); ?>! important;
}
.deso .fa, .deso span {
color: <?php echo esc_attr( get_option('africbase_color') ); ?>! important;
}

.africbase-progress, #africbase-progress {
  background: <?php echo esc_attr( get_option('africbase_p_color', 'darkblue') ); ?>! important;
}

@-webkit-keyframes rotating /* Safari and Chrome */ {
  from {
    -webkit-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes rotating {
  from {
    -ms-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  to {
    -ms-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
.abrotating {
  -webkit-animation: rotating 2s linear infinite;
  -moz-animation: rotating 2s linear infinite;
  -ms-animation: rotating 2s linear infinite;
  -o-animation: rotating 2s linear infinite;
  animation: rotating 2s linear infinite;
}
.africbase-btn {
  background:black;
   padding:8px;
   text-align:center;
   font-size:18px;
   width:200px;
   border-radius:50px;
  margin-top:5px;
  font-weight:bold;
}
    .africbase-divv{
  display:block; 
  cursor: pointer; 
  width: 50px; 
  height:50px; 
  background-color:#000000;
}

#africbaseplay, .africbaseplay{
  cursor: pointer; 
  font-family:Tahoma; 
  font-weight: bold;
  font-size:14px; 
  color:#fff;
  border:none;
  margin-top:3px;
  padding-right:15px;
  padding-left:15px;
  padding-top:3px;
}



.africbase-progress, #africbase-progress {
  width: 1px;
  height: 10px;
  background: white;
  transition: width .1s linear;
}
.africbase-con {
  width: 320px;
  background: ;
  marginn: calc(50vh - 30px) auto;
  text-alignb: center;
  padding: 10px;
  -webkit-transition:all 0.5s linear;
  -moz-transition:all 0.5s linear;
  -o-transition:all 0.5s linear;
  transition:all 0.5s linear;
  position:relative;
  font-family: Times New Roman;
  
}

.africbase-downloadmp3 {
   font-family:Tahoma; 
   font-weight: bold;
   font-size:14px; 
   color:white;
   padding: 3px 15px;
   border:none;
   margin-top:3px;
   margin-left:3px;
   }
   .africbase-downloadmp3 a {
   color:#fff;
   }
   .africbase-song-name {
   font-weight:bold;
   font-size:19px;
   }
   .africbase-audio-flex { 
   display: flex; 
   width:320px;
   }
   .africbase-art-img {
   flex:1;
   border:none;
   box-shadow:none;
   display:block;
   padding-rightt:5px;
   background-image: 
   text-align: center;
   color: green;
   margin-right:2px;
   }
   .africbase-art-img1 {
   width3:40px;
   height3:50px;
   border:none:!important;
   box-shadow:none:important;
   display:block!important;
   padding-right3:10px!important;
   }
   .africbase-art-mp3 {
   flex:3;
   }
   
   .africbase {
   margin-bottom: 1px;
   }
   .africbase::after 
   {
   content: "";
   background-image: url("<?php echo esc_attr( get_option('option_etc') ); ?>");
   height: 30px;
   width: 30px;
   background-position: center;
   background-repeat: no-repeat;
   background-size: cover;
   position: absolute;
   display: inline-block; 
   margin-left: 2px!important;
   bottom:20px;
   right:5px;
   }
   
   .africbase-art-img1::after {
   content: "";
   background-image: url(<?php the_post_thumbnail_url(); ?>);
   height: 100px;
   width: 100px;
   background-position: center;
   background-repeat: no-repeat;
   background-size: cover;
   position: relative;
   display: inline-block; 
   margin-right: 3px;
   }
   .africbase-line {
   display: inline-flex; 
   }
   
   #download-button, a[href$=".mp3"], h1 a[href$=".mp3"], h2 a[href$=".mp3"], h3 a[href$=".mp3"], a[href$=".mp4"], a[href$=".srt"] {
    color: #fff !important;
    background-color: black;
    padding: 6px;
    margin: 8px 2px 10px;
    display: inline-block;
    font-weight: 600;
   text-align:center;
text-align:center;
border-bottom:8px solid #eaea;
}

.hb-copy {
    color: #fff!important;
    background-color: black;
    padding: 6px;
    margin: 8px 2px 10px;
    display: inline-block;
    font-weight: 600;
   text-align:center;
text-align:center;
}
.hb-copy-a {
    color: #fff!important;
}
</style>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<?php
};
add_action('wp_head', 'africbase_headerplayer');


function africbase_dont_edit() {
    ?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Libre+Baskerville&family=Noto+Serif&family=Orelega+One&family=Pacifico&family=Pattaya&family=Sigmar+One&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<?php
}
add_action('admin_head', 'africbase_dont_edit');

add_action( 'wp_footer', 'my_footer_scripts' );
function my_footer_scripts(){
  ?>
  <script>
      var africbase_button = document.getElementById("button");
var africbase_audio = document.getElementById("africbaseaudio");

africbaseplay.addEventListener("click", function(){
  if(africbase_audio.paused){
    africbase_audio.play();
    africbaseplay.innerHTML = '<i class="fa fa-pause" aria-hidden="true"></i>';
  } else {
    africbase_audio.pause();
    africbaseplay.innerHTML = '<i class="fa fa-play" aria-hidden="true"></i>';
  }
});

var timer;
var percent = 0;
var africbase = document.getElementById("africbaseaudio");
africbase.addEventListener("playing", function(_event) {
  var duration = _event.target.duration;
  advance(duration, africbase_audio);
});
africbase.addEventListener("pause", function(_event) {
  clearTimeout(timer);
});
var advance = function(duration, element) {
  var progress = document.getElementById("africbase-progress");
  increment = 10/duration
  percent = Math.min(increment * element.currentTime * 10, 100);
  progress.style.width = percent+'%'
  startTimer(duration, element);
}
var startTimer = function(duration, element){ 
  if(percent < 100) {
    timer = setTimeout(function (){advance(duration, element)}, 100);
  }
  
  }

var africbase_looper = document.getElementById("africbaseaudio");

function africbase_enableLoop() { 
  africbase_looper.loop = true;
  africbase_looper.load();

africbase_looper.addEventListener('ended', function() {
    this.currentTime = 0;
    this.play();
}, false);
} 
  </script>
  <?php
}


add_filter( 'plugin_action_links', 'ttt_wpmdr_add_action_plugin', 10, 5 );
 
function ttt_wpmdr_add_action_plugin( $actions, $plugin_file ) 
{
   static $plugin;
 
   if (!isset($plugin))
        $plugin = plugin_basename(__FILE__);
   if ($plugin == $plugin_file) {
 
      $settings = array('settings' => '<a href="admin.php?page=africbase-player%2Fafricbase-player.php">' . __('Settings', 'General') . '</a>');
      $site_link = array('support' => '<a href="http://africbase.com" target="_blank">Support</a>');
         
      $actions = array_merge($settings, $actions);
      $actions = array_merge($site_link, $actions);
   }
     
   return $actions;
}


add_action('admin_menu', 'africbase_player_create_menu');

function africbase_player_create_menu() {

    //create new top-level menu
    add_menu_page('Africbase Player Settings', 'Africbase Player', 'administrator', __FILE__, 'africbase_player_settings_page' , 'dashicons-superhero', 2);

    //call register settings function
    add_action( 'admin_init', 'register_africbase_player_settings' );
}


function register_africbase_player_settings() {
    //register our settings
    register_setting( 'africbase-option', 'africbase_watermark' );
    register_setting( 'africbase-option', 'africbase_bg' );
register_setting( 'africbase-option', 'africbase_btn_c' );
    register_setting( 'africbase-option', 'africbase_color' );
register_setting( 'africbase-option', 'africbase_ct' );
register_setting( 'africbase-option', 'africbase_p_color' );
register_setting( 'africbase-option', 'africbase_w_w' );
register_setting( 'africbase-option', 'africbase_w_h' );
}

function africbase_player_settings_page() {
?><div style="clear:both"></div>

<div class="ab-admin">
<div class="africbaselogo"><h1 class="logo"><i class="fa fa-music" aria-hidden="true"></i>
Africbase Player</h1></div>

<link rel="stylesheet" 

        href= 
"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"

        integrity= 

"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 

        crossorigin="anonymous"> 
<br>
<div style="clear:both"></div>
<div style="color:#000! important">
<?php settings_errors(); ?></div>
<div style="clear:both"></div>
<a href="https://helpblogger.com.ng" style="
background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%); text-align:center; padding:5px; font-weight:bold; text-decoration:none; font-size:15px"> HelpBlogger</a>

<a href="https://africbase.com" style="
background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%); text-align:center; padding:5px; font-weight:bold; text-decoration:none; font-size:15px">Knowledge Panel</a>
<style>
.ab-admin {
backgroundg: rgb(2,0,36);
backgroundf: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
font-family: philosophy! important;
borderr:2px solid blue;
margin:5px;
padding:10px;
    box-shadowc: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
border-radius:10px;
color:white! important;
}
input[type="submit"] {
    background-color:blue! important;
    }
.africbaselogo {
    background: none!important;
   font-size:1.5em;
    box-sizing:border-box;
    padding:10px;
    border:none!important;
    box-shadow:none!important;
border-radius: 50px;
text-align:center;
    color:white;
    font-weight:bold;
    font-family: Sigmar One! important;
    }
.logo {
     color: darkblue;
  -webkit-text-fill-color: darkblue; /* Will override color (regardless of order) */
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: blue;
text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;
   font-size:1em!important;
     }
input {
      padding: 10px!important;
 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)!important;
border-radius: 50px!important; 
background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
border:none!important;
    }
th {
color:white!important;
}
</style>
<form method="post" action="options.php">
    <?php settings_fields( 'africbase-option' ); ?>
    <?php do_settings_sections( 'africbase-option' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row" style="color:#000!important">Watermark Url</th>
        <td><input placeholder="https://africbase.com/logo.png" type="text" name="africbase_watermark" value="<?php echo esc_attr( get_option('africbase_watermark') ); ?>" /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row" style="color:#000!important">Background-color</th>
        <td><input placeholder="#000000" type="text" name="africbase_bg" value="<?php echo esc_attr( get_option('africbase_bg') ); ?>"/></td>
        </tr>

<tr valign="top">
        <th scope="row" style="color:#000!important">Download Button Color</th>
        <td><input placeholder="#000000" type="text" name="africbase_btn_c" value="<?php echo esc_attr( get_option('africbase_btn_c') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row" style="color:#000!important">Text Color</th>
        <td><input placeholder="#000000" type="text" name="africbase_color" value="<?php echo esc_attr( get_option('africbase_color') ); ?>"/></td>
        </tr>

<tr valign="top">
        <th scope="row" style="color:#000!important">Player Color</th>
        <td><input placeholder="#000000" type="text" name="africbase_p_color" value="<?php echo esc_attr( get_option('africbase_p_color') ); ?>"/></td>
        </tr>


<tr valign="top">
        <th scope="row" style="color:#000!important">Watermark Size</th>
        <td> 
<div class="input-group"> 
        <span class="input-group-text">Width</span> 

        <input type="text" class="form-control" placeholder="150px" name="africbase_w_w" value="<?php echo esc_attr( get_option('africbase_w_w') ); ?>"/> 

        <span class="input-group-text" style="border-left: 0; border-right: 0;">Height</span> 

        <input type="text" class="form-control" placeholder="25px" name="africbase_w_h" value="<?php echo esc_attr( get_option('africbase_w_h') ); ?>"/> 
    </div> 

</td>
        </tr>


<tr valign="top">
        <th scope="row">Show Credit.</th>
<td> 
<label>
    Type "yes" or "Leave It Empty"
    <input type="text" pattern="[Yy]es|[Nn]o" name="africbase_ct" value="<?php echo esc_attr( get_option('africbase_ct') ); ?>">
  </label>
</div>
</td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
<div class="dont-change">
<button class="accordion">How To Use Plugin</button>
<div class="panel">
  <p><li style="background:black;padding:8px">[africbase name="song name" artist="Artist Name" url="Link To The .mp3 file"]</li></p>


</div>

<button class="accordion">Customization</button>
<div class="panel">
  <p>Go To Africbase Player › From The menu to add., Add the below codes, Change Watermark url to yours.. 
<li style="background:black;padding:8px">
Watermark Url
</li>
<li style="background:black;padding:8px">
Background-color
</li>
<li style="background:black;padding:8px">
Player/Download Color
</li>
<li style="background:black;padding:8px">
Text Color
</li>
</p>
</div>

<button class="accordion">Download Button</button>
<div class="panel">
  <li><p><span style="background:black;padding:8px">
Download Bottom Will Automatically Be Added, no need of added extra url
</span></p></li>
</div>

<style>
body label, th span {
color:black!important;
}
body {
  background: white;
}
.panel {
  padding: 0 18px;
  background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.accordion {
  background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  color: #fff;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border:none;
  outline: none;
  transition: 0.4s;
  
}
.active, .accordion:hover {
  background-color: blue;
}
</style>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

$(document).on("click", "input[name='africbase_ct']", function(){
    thisRadio = $(this);
    if (thisRadio.hasClass("imChecked")) {
        thisRadio.removeClass("imChecked");
        thisRadio.prop('checked', false);
    } else { 
        thisRadio.prop('checked', true);
        thisRadio.addClass("imChecked");
    };
})
</script>

</div>

</div>
<?php } ?>