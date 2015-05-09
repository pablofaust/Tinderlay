<?php if(!isset($route)) include_once '../config.php'; ?>

<?php include $route.'/assets/header.php' ?>

<body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62772158-1', 'auto');
  ga('send', 'pageview');

</script>

<?php include $route.'/home/body.php' ?>
<?php include $route.'/home/counter.php' ?>
<?php include $route.'/home/share.php' ?>
<?php include $route.'/home/panel.php' ?>


</body>

<?php include $route.'/assets/footer.php' ?>
