<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php
  $meta = array(
    "title" => "Top 50 High School Athletes | Statesman.com",
    "description" => "The final buzzer has sounded for this year's Austin-area high school sports. Let's relive the season with a look at this year's Top 50 High School Athletes.",
    "thumbnail" => "http://projects.statesman.com/sports/high-school-top-50/assets/share.png", // needs update
    "shortcut_icon" => "http://media.cmgdigital.com/shared/theme-assets/242014/www.statesman.com_5126cb2068bd43d1ab4e17660ac48255.ico",
    "apple_touch_icon" => "http://media.cmgdigital.com/shared/theme-assets/242014/www.statesman.com_fa2d2d6e73614535b997734c7e7d2287.png",
    "url" => "http://projects.statesman.com/sports/high-school-top-50/",
    "twitter" => "statesman"
  );
?>

  <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
  <link rel="shortcut icon" href="<?php print $meta['shortcut_icon']; ?>" />
  <link rel="apple-touch-icon" href="<?php print $meta['apple_touch_icon']; ?>" />

  <link rel="canonical" href="<?php print $meta['url']; ?>" />

  <meta name="description" content="<?php print $meta['description']; ?>">

  <meta property="og:title" content="<?php print $meta['title']; ?>"/>
  <meta property="og:description" content="<?php print $meta['description']; ?>"/>
  <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
  <meta property="og:url" content="<?php print $meta['url']; ?>"/>

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
  <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
  <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
  <meta name="twitter:image" content="<?php print $meta['thumbnail']; ?>" />
  <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/style.css">

  <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>
 

  <?php /* CMG advertising and analytics */ ?>
  <?php include "includes/advertising.inc"; ?>
  <?php include "includes/metrics-head.inc"; ?>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

        <a class="navbar-brand" href="http://www.statesman.com/" target="_blank">
        <img class="visible-xs visible-sm" width="103" height="26" src="assets/logo-short-black.png" />
        <img class="hidden-xs hidden-sm" width="273" height="26" src="assets/logo.png" />
        </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
  </div>
</nav>
<div id="back">

  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-lg-8 header">
      <h1 id="pagetitle">Meet the area's 2014-2015 top 50 high school athletes</h1>
      <p class="author">Compiled by Rick Cantu and Danny Davis. Presentation by Paighten Harkins.</p>
      <p>The final buzzer has sounded for this year's Austin-area high school sports, and you know what that means. Every year the Statesman's sports staff compiles a list of top athletes, a who's-who in the region's high school sports. Let's relive the season and see who made the cut:</p>

      </div>
      <div class="col-sm-6 col-lg-4">
        <img class="img-responsive" style="margin-top: 12px;" src="assets/collage1.jpg">
      </div>

    </div>
<hr>
    <div class="row">
      <div class="col-lg-4">
        <h3>Top 10 high school athletes</h3>
        <p>Scroll through the list for the top 10.</p>
        <p>Ranging from 10 different area schools, these athletes are the best in the region. Here's how the Top 10 broke down:</p>
        <ul>
          <li>Schools represented: <strong>10</strong></li>
          <li>Number of seniors: <strong>8</strong></li>
          <li>Number of juniors: <strong>1</strong></li>
          <li>Number of sophomores: <strong>1</strong></li>
          <li>Sports represented: <strong>Baseball, basketball, football, softball, track & field, volleyball.</strong></li>
        </ul>
      </div>
      <div class="col-lg-8 hidden-xs">
        <div style='display: inline-block; width: 100%;'><div style='position: relative; padding-bottom: 65%; padding-top:25px; height: 0;'><iframe src="//top-50-high-school-athletes.silk.co/s/embed/grid/collection/top-10-high-school-athletes/column/school/column/year/image/image/description/accomplishment/slice/0/10" style="border:0;position: absolute; top:0; left:0; width: 100%;height:100%;"></iframe></div> </div>
      </div>
      <div class="col-xs-12 visible-xs">

        <img class="img-responsive" src="http://media.cmgdigital.com/shared/lt/lt_cache/thumbnail/400/img/photos/2015/07/04/3d/79/RBB-Travis-Brannan_2.jpg">
        <h3>No. 1: Travis Brannan</h3>
        <h4>jr., Vandegrift</h4>
        <p>Piled up 2,685 rushing yards, 42 TDs before competing at state in Class 5A long jump, triple jump.</p>
        <p> <a href="http://www.mystatesman.com/news/sports/high-school-football/vandegrifts-travis-brannan-tops-areas-prep-athlete/nmrWW/" target="_blank"> >> More on Brannan</a></p>

        <img class="img-responsive" src="http://media.cmgdigital.com/shared/lt/lt_cache/thumbnail/400/img/photos/2015/07/03/3f/5a/DSC_0076.jpg">
        <h3>No. 2: Chris Roller</h3>
        <h4>sr., Lake Travis</h4>
        <p>Helped Lake Travis to district titles as an All-Central Texas first-team defensive back, outfielder.</p>
        <p> <a href="http://www.mystatesman.com/news/sports/high-school/athlete-of-the-year-finalist-chris-roller-lake-tra/nmrN5/" target="_blank"> >> More on Roller</a></p>

        <img class="img-responsive" src="http://media.cmgdigital.com/shared/lt/lt_cache/thumbnail/400/img/photos/2015/07/02/87/fd/asz-110414-prep-volley-9.jpg">
        <h3>No. 3: Lele Carter</h3>
        <h4>sr., Bastrop</h4>
        <p>Earned silver and bronze medals at state track meet and was all-district choice in volleyball, basketball.</p>
        <p> <a href="http://www.mystatesman.com/news/sports/high-school/athlete-of-the-year-finalist-lele-carter-bastrop/nmqfp/" target="_blank"> >> More on Carter</a></p>

        <img class="img-responsive" src="http://media.cmgdigital.com/shared/lt/lt_cache/thumbnail/400/img/photos/2015/06/30/f0/3f/SSS-Cedar-Park-Ennis-29.jpg">
        <h3>No. 4: Thomas Hutchings</h3>
        <h4>sr., Cedar Park</h4>
        <p>Austin area’s top football player rushed for 1,173 yards, recorded 173 tackles this past season.</p>
        <p> <a href="http://www.mystatesman.com/news/sports/high-school/athlete-of-the-year-finalist-thomas-hutchings-ceda/nmphG/" target="_blank"> >> More on Hutchings</a></p>

        <img class="img-responsive" src="http://media.cmgdigital.com/shared/lt/lt_cache/thumbnail/400/img/photos/2015/06/30/34/c3/MM_FacesOctober-13.jpg">
        <h3>No. 5: Brittany Adams</h3>
        <h4>sr., St. Stephen’s</h4>
        <p>Two-time All-Central Texas pick led school’s volleyball, basketball teams to SPC titles.</p>
        <p> <a href="http://www.mystatesman.com/news/sports/high-school/athlete-of-the-year-finalist-brittany-andrews-st-s/nmpL8/" target="_blank"> >> More on Adams</a></p>

        <img class="img-responsive" src="http://media.cmgdigital.com/shared/lt/lt_cache/thumbnail/400/img/photos/2015/06/29/bc/ed/rgz-TX-RELAYS-SAT-20.jpg">
        <h3>No. 6: Virginia Kerley</h3>
        <h4>soph., Taylor</h4>
        <p>Three-time track and field medalist also was a standout in volleyball, basketball.</p>
        <p> <a href="http://www.mystatesman.com/news/sports/high-school/athlete-of-the-year-finalist-6-virginia-kerley-tay/nmngq/" target="_blank"> >> More on Kerley</a></p>

        <img class="img-responsive" src="http://media.cmgdigital.com/shared/lt/lt_cache/thumbnail/400/img/photos/2015/06/28/61/e2/RRSP9200.jpg">
        <h3>No. 7: Marcus McWilliams</h3>
        <h4>sr., Pflugerville</h4>
        <p>All-district defensive back turned in one of nation’s top times in the 110-meter hurdles.</p>
        <p> <a href="http://www.mystatesman.com/news/sports/high-school/athlete-of-the-year-finalist-marcus-mcwilliams-pfl/nmnRT/" target="_blank"> >> More on McWilliams</a></p>

        <img class="img-responsive" src="http://media.cmgdigital.com/shared/lt/lt_cache/thumbnail/400/img/photos/2015/06/27/d2/8b/RRSP8639.jpg">
        <h3>No. 8: Jorden Russell</h3>
        <h4>sr., Vista Ridge</h4>
        <p>All-Centex softball MVP led team to Class 5A runner-up finish, posting 242 strikeouts, 37 RBIs.</p>
        <p> <a href="http://www.mystatesman.com/news/sports/high-school/athlete-of-the-year-finalist-jorden-russell-vista-/nmnBs/" target="_blank"> >> More on Russell</a></p>

        <img class="img-responsive" src="http://media.cmgdigital.com/shared/lt/lt_cache/thumbnail/400/img/photos/2015/06/26/46/b8/ULY6959111.jpg">
        <h3>No. 9: Lashann Higgs</h3>
        <h4>sr., Cedar Ridge</h4>
        <p>McDonald’s All-American averaged 27 points per game during basketball season.</p>
        <p> <a href="http://www.mystatesman.com/news/sports/high-school/athlete-of-the-year-finalist-lashann-higgs-cedar-r/nmmWB/" target="_blank"> >> More on Higgs</a></p>


        <img class="img-responsive" src="http://media.cmgdigital.com/shared/lt/lt_cache/thumbnail/400/img/photos/2015/06/25/57/2a/jameson-houston.jpg">
        <h3>No. 10: Jameson Houston</h3>
        <h4>sr., St. Michael’s</h4>
        <p>Baylor-bound football player also won three golds at TAPPS track meet.</p>
        <p> <a href="http://www.mystatesman.com/news/sports/high-school/athlete-of-the-year-finalists-jameson-houston-st-m/nmmGt/" target="_blank"> >> More on Houston</a></p>


      </div>
    </div>
<hr>
    <div class="row">
      <div class="col-sm-6 col-lg-8">
        <div class="row">
          <div class="col-xs-12 col-lg-5">
            <h3>Top 50 athletes by class</h3>
            <p>While last year's group of top athletes included more seniors and evened out their numbers with two freshmen, nine juniors and four sophomores, this year's class was made up entirely of seniors, juniors and sophomores.</p>
          </div>
          <div class="col-xs-12 col-lg-7">
            <div style='display: inline-block; width: 100%;'><div style='position: relative; padding-bottom: 100%; padding-top:25px; height: 0;'><iframe src="//top-50-high-school-athletes.silk.co/s/embed/donutchart/collection/top-high-school-athletes-11-50/collection/top-10-high-school-athletes/distribution/year" style="border:0;position: absolute; top:0; left:0; width: 100%;height:100%;"></iframe></div></div>
          </div>
        </div>
<hr>
        <div class="row">
          <div class="col-xs-12 col-lg-5">
            <h3>Where did they come from?</h3>

            <p>While all the athletes in the Top 50 came from Austin area schools, some schools contributed more top picks than others. Here's a breakdown:</p>

            <ul>
              <li>Schools represented: <strong>37</strong></li>
              <li>Schools with three students: <strong>3</strong></li>
              <li>Schools with two students: <strong>6</strong></li>
              <li>Schools with one student: <strong>28</strong></li>
            </ul>

            <p>How did your school fare? Find them on the map to see how many students they had on the list.</p>
          </div>
          <div class="col-xs-12 col-lg-7">

            <iframe src="https://www.google.com/fusiontables/embedviz?q=select+col1+from+1ZOPslhK0_-qesnwMYatbCzu4y73xOn2u7Y6jFH9q&amp;viz=MAP&amp;h=false&amp;lat=30.419031138174873&amp;lng=-97.62736077746735&amp;t=1&amp;z=9&amp;l=col1&amp;y=2&amp;tmplt=2&amp;hml=ONE_COL_LAT_LNG" width="100%" height="300" frameborder="no" scrolling="no"></iframe>
          </div>
          <div class="col-lg-12">
            <h3>Can't get enough of this year's class of top area athletes? Check out this <a href="http://www.statesman.com/gallery/sports/top-50-high-school-athletes-070515/gCTdz/">gallery</a>.</h3>
          </div>

        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <h3>Top high school athletes (11-50)</h3>

        <p>Even though these athletes didn't make the top ten, they are still in a league of their own. The following students make up the rest of our Top 50 and are arranged in alphabetical order:
 </p>
        <div style='display: inline-block; width: 100%;'><div style='position: relative; padding-bottom: 250%; padding-top:25px; height: 0;'><iframe src="//top-50-high-school-athletes.silk.co/s/embed/list/collection/top-high-school-athletes-11-50/column/school/slice/0/50" style="border:0;position: absolute; top:0; left:0; width: 100%;height:100%;"></iframe></div></div>
      </div>
    </div>


  </div>

    <!-- bottom matter -->
    <?php include "includes/banner-ad.inc";?>
    <?php include "includes/legal.inc";?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>

    <script src="dist/scripts.js"></script>

</div>

  <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
    <script src="//localhost:35729/livereload.js"></script>
  <?php endif; ?>
</body>
</html>
