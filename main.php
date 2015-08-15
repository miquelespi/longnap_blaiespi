<html>
<head>
<title>Blai Espi</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Blai Espi's main webpage, fine arts professional and graphic designer.">
<meta name="keywords" content="Blai, Espi, Marques, Fine Arts, Fine, Arts, Art, Photography, Design">
<meta name="author" content="Blai Espi">
<script src="https://www.google.com/jsapi?key=ABQIAAAAXLLf6csbkBttJf0WuxYFoBRlQJUNO_-r6HuxSSGfcd7UHoipFxSC2cy1LcT-NJGzKbS-zT8dI5ocvQ" type="text/javascript"></script>
<script type="text/javascript">
  google.load("jquery", "1");
  google.load("jqueryui", "1");

function toggleSlide(element)
{
    var drawer = jQuery("#drawer");
    var content = jQuery("#drawercontent");
    if (jQuery(content).is(":hidden"))
    {
        // The order here is important, we must slide juste before starting blinding
        setTimeout(function()
                    {
                        jQuery(content).effect("slide", { direction: "up", mode : "show"},500);
                    },1);
        setTimeout(function()
                    {
                        jQuery(drawer).effect("blind", { direction: "vertical", mode : "show" },500);

                    },1);
    }
}


</script>
<style type="text/css">
html {
  margin: 0;
  padding: 0;
  }

body {
  font-family:arial,helvetica,sans-serif;
/*  background-image: url(https://lh4.googleusercontent.com/-26YGawBTjj0/TxABpoIlFjI/AAAAAAAADE8/8-9k_otLCKQ/s0-d/nicksherman.jpg);
  background-image: url(https://lh4.googleusercontent.com/-CnEm_EbDN1g/TxABpnHR46I/AAAAAAAADE4/Ag04XH4XVzc/s0-d/paloetic.jpg);
*/
  background-position: center center;
  background-attachment: fixed;
  margin: 0;
  padding: 0;
}

.wrapper {
  /* background-color: white; */
  /* -moz-border-radius: 20px; */
  /* border-radius: 0px; */
  width: 680px;
  margin-left: auto;
  margin-right: auto;
  margin: 0 auto;
  margin-bottom: 0px;
  margin-top:40px;
}


ul {
  list-style-type: none;
  width: 100%;
}

li {
  float: right;
  margin: 0 0 0 15px;
}

div.space {
  height: 5px;
  width: 500px;
}

#photos img {
  border: 10px solid black;
}

.menu {
  text-align:right;
  font-size: 20px;
  padding-top:10px;
}

h1 {
  text-align:right;
  margin-top: 0px;
  font-size:170px;
  color:white;
  font-weight:bold;
  }

h2 {
  font-family: Georgia, "Times New Roman", Times, serif;
  font-weight: normal;
  font-size:50px;
}

a {
  color: #606060;
  text-decoration: none;
}

a:hover {
  color: green;
}

p {
  margin: 10 0 0 0;
}

.nav a {
  font-weight: bold;
}

</style>

</head>

<body onload="toggleSlide();">

<script>

</script>

<div style="margin:0;padding:0;position:absolute; z-index: -1;left:-15px;top:-40px;"><h1>blai espi</h1></div>
<div class="wrapper">
<div style="z-index: 2;  padding: 15px;">
<div class="menu nav">
<!--
<a href="">portafolio </a> &nbsp; <a href="">exhibitions</a> &nbsp; <a href="">contact</a>
-->
</div>
<div class="menu">
<!--
<a href="">familia</a> &nbsp; <a href="">V.I.H.</a>
-->
</div>
</div>

<div id="drawer" class="alpha60" >
<div id="drawercontent" style="z-index: 2; display:none; margin:0px auto 0px auto;  padding: 15px;
">
<h2>Blai Espi</h2>

<p><b>projects</b> &nbsp; <a href="http://ilfart.longnap.com">iLfArt</a>
<p><b>profile</b> &nbsp; <a href="http://www.linkedin.com/pub/blai-espi-marques/77/619/a90">linkedin</a> &nbsp; </p>
<p><b>social</b> &nbsp; <a href="http://facebook.com/blaiespi">facebook</a> &nbsp; <a href="http://twitter.com/blaiespi">twitter</a>  &nbsp; <a href="http://pinterest.com/blaiespi/likes">pinterest</a> &nbsp; </p>
<p><b>contact</b> &nbsp; <a href="mailto:blaiespi@longnap.com">blaiespi@longnap.com<a></p>
</div>
</div>
</div>


<body>
</html>
