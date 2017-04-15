<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Header</title>
    <link rel="stylesheet" href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="./css/header-responsive.css">
    <style media="screen">
      *{padding: 0px; margin: 0px;}
      body{font-family: 'Oswald', arial, helvetica, sans-serif; font-size: 18px;}
      a{text-decoration: none; color: #fff; height: 60px; line-height: 60px; padding: 15px;}
      header{background-color: #000; color: #fff; width: 100%; height: 105px; line-height: 105px;}
      .header-brand{width: 33%; float: left; padding-left: 20px;}
      .header-brand-text{font-size: 36px;}
        .header-brand-tagline{font-size: 18px; color: #3399fe; font-style: italic;}
      .header-topnav{width: 63%; float: left; padding-right: 20px; text-align: right;}

      ul li{list-style: none; display: inline-block; height: 60px; line-height: 60px;}
      ul li a:hover{background-color: #3399fe; color: #fff;}

      @media only screen and (max-width: 1000px) {
        .header-brand-text{font-size: 30px;}
        .header-topnav{font-size: 14px;}
    }


    </style>
  </head>
  <body>
    <header>
      <div class="header-brand">
        <div class="header-brand-text">
          <p>Michael L Parks</p>
        </div>
      </div>
      <div class="header-topnav">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Resources</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </header>
  </body>
</html>
