<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
<!-- 
intro_1=new Image();intro_1.src="grfx/intro_1.jpg";
intro_1_ro=new Image();intro_1_ro.src="grfx/intro_1_ro.jpg";
 
intro_2=new Image();intro_2.src="grfx/intro_2.jpg";
intro_2_ro=new Image();intro_2_ro.src="grfx/intro_2_ro.jpg";
 
intro_3=new Image();intro_3.src="grfx/intro_3.jpg";
intro_3_ro=new Image();intro_3_ro.src="grfx/intro_3_ro.jpg";
 
intro_4=new Image();intro_4.src="grfx/intro_4.jpg";
intro_4_ro=new Image();intro_4_ro.src="grfx/intro_4_ro.jpg";

function rein1(img,ref) { document.images[img].src = ref; } 
function raus1(img,ref) { document.images[img].src = ref; }

function text_in(id)
{
	if (document.getElementById) {
		document.getElementById(id).style.display="block";
	}
}

function text_out(id) 
{
	if (document.getElementById) {
		document.getElementById(id).style.display="none";
	}
}

//-->
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>i-wars.net</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>



<div id="wrap">
    <div class="field">
        <img src="grfx/intro_1.jpg" usemap="#Map" id="platzhalter1" alt="Forum" class="img" />
    </div>
    <div class="field">
        <img src="grfx/intro_2.jpg" width="200px" height="300px" usemap="#Map2" id="platzhalter2" alt="Weblog" class="img" />
    </div>
    <div class="field">
        <img src="grfx/intro_3.jpg" width="200px" height="300px" usemap="#Map3" id="platzhalter3" alt="Chat" class="img" />
    </div>
    <div class="field">
        <img src="grfx/intro_4.jpg" width="200px" height="300px" usemap="#Map4" id="platzhalter4" alt="Galerie" class="img" />
    </div>
    <div id="rand_r">
        <img src="grfx/rand_r.png" width="9px" height="300px" alt="Rand" class="img" />
    </div>
    <div id="rand_u">
        <!-- <img src="grfx/rand_u.png" alt="" /> -->
    </div>
    <div id="menu">
        <div id="forum" class="sign">communication</div>
        <div id="weblog" class="sign">illumination</div>
    	<div id="chat" class="sign">selbstreferentiell</div>
        <div id="galerie" class="sign">pixlumination</div>
    </div>
    <div id="name">
        <a href="mailto:webmaster@sebastian-engel.de"><img src="grfx/se002.png" alt="Sebastian Engel" class="img" /></a>
    </div>
    <div id="email">
        <a href="mailto:webmaster@sebastian-engel.de" name="E-Mail"><img src="grfx/mm.png" alt="E-Mail" class="img" /></a>
    </div>
    <div id="counter">
		<p>
		  <a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" class="img" /></a>
        </p>
    </div>
</div>


<div style="display: none;">
<map name="Map" id="Map"><area shape="circle" coords="132,151,33" href="http://www.i-wars.net/forum/" alt="Forum" onmouseover="text_in('forum');rein1('platzhalter1',intro_1_ro.src);" onmouseout="text_out('forum');raus1('platzhalter1',intro_1.src);" />
</map>
<map name="Map2" id="Map2"><area shape="circle" coords="110,151,36" href="http://www.sebastian-engel.de/" alt="Weblog" onmouseover="rein1('platzhalter2',intro_2_ro.src);text_in('weblog');" onmouseout="raus1('platzhalter2',intro_2.src);text_out('weblog');" />
</map>
<map name="Map3" id="Map3"><area shape="circle" coords="84,150,37" href="" alt="Chat" onmouseover="rein1('platzhalter3',intro_3_ro.src);text_in('chat');" onmouseout="raus1('platzhalter3',intro_3.src);text_out('chat');" />
</map>
<map name="Map4" id="Map4"><area shape="circle" coords="69,154,38" href="http://juuro.deviantart.com/" alt="Galerie" onmouseover="rein1('platzhalter4',intro_4_ro.src);text_in('galerie');" onmouseout="raus1('platzhalter4',intro_4.src);text_out('galerie');" />
</map>
</div>
</body>
</html>