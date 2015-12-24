<?php get_header(); ?>
 
<!-- SPECIFIC PAGE CONTENT BEGINS HERE -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="keywords" content="ericdeno.com, Eric Denovellis, computational neuroscience, prefrontal cortex, cognitive control, cognitive flexibility" />
<meta name="title" content="Eric L. Denovellis | Graduate Student | Computational Neuroscience" />
<meta name="description" content="Tomfoolocrat, Neuroscientist, Babbler" />
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<meta name="google-site-verification" content="bWQf5sINSeFga28vSM7QHqXpaQDQApMNGMo-5SWjeTA" />
<title>Eric Denovellis | Graduate Student | Computational Neuroscience</title>
<link href='http://fonts.googleapis.com/css?family=Signika:400,600' rel='stylesheet' type='text/css'>
<link href="css/eric-style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container-home" class="clearfix" >
  <div id="side-menu" class="clearfix">
    <div itemscope itemtype="http://data-vocabulary.org/Person">
      <div id="logo-name"  class="clearfix"> <a href="http://www.ericdeno.com" itemprop="name">Eric L. Denovellis</a> </div>
      <div id="logo-subtitle" class="clearfix">
        <ul>
          <li><span itemprop="title">Ph.D. Student</span></li>
          <li><a href="http://www.bu.edu/neuro/graduate/" itemprop="affiliation">Graduate Program for Neuroscience</a></li>
          <li><a href="http://www.bu.edu/" itemprop="affiliation">Boston University (BU)</a> </li>
        </ul>
      </div>
    </div>
    <div class="clear"  class="clearfix"></div>
    <div class="nav" >
      <ul>
        <li><a href="/aboutMe">About Me</a></li>
        <li><a href="/publications">Publications</a></li>
        <li><a href="/research">Research</a></li>
        <li><a href="/code">Code</a></li>
        <li><a href="/blog">Blog</a></li>
        <li><a href="/links">Links</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
      <a href="https://plus.google.com/104926284051590949661/"
 rel="publisher"></a> <a href="https://plus.google.com/104926284051590949661/?rel=author"></a> </div>
  </div>
   <div id="content" class="clearfix">
   <?php get_template_part( 'loop', 'index' );?>
   </div>

</div>

</body>
</html>

<!-- SPECIFIC PAGE CONTENT ENDS HERE -->
   
<?php get_footer(); ?>