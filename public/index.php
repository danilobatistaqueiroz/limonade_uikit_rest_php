<html>
<head>
  <!--script src="../node_modules/jquery/dist/jquery.js"></script-->
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link href="../node_modules/uikit/dist/css/uikit.css" rel="stylesheet" type="text/css" />
  <script src="../node_modules/uikit/dist/js/uikit.js"></script>
  <link href="https://getuikit.com/v2/docs/css/uikit.docs.min.css" rel="stylesheet" type="text/css" />
  <script src="../node_modules/uikit/dist/js/uikit-icons.min.js"></script>
  <script src="js/grid.js"></script>
  <script src="../libs/notify.js"></script>
  <!--script src="../libs/verify.notify.js"></script-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/usersIncludes.js"></script>
  <script src="js/users.js"></script>
  <script src="js/index.js"></script>
  <link href="css/users.css" rel="stylesheet" type="text/css" />
  <script src="js/productsIncludes.js"></script>
  <script src="js/products.js"></script>
</head>
<body style="background-color:#f8f8f8">

  <div id="divHeader"></div>

  <div uk-grid>
    <div id="divMain" style="margin-left:10%;width:80%" class="uk-card uk-card-default uk-card-body"></div>
    <!-- Sidebar -->
    <style>
      .uk-card-default {
        background:#f8f8f8;
      }
      .fa-stack{
        margin-left:15px;
      }
    </style>
    <div id="divSideBar" class="uk-card uk-card-default uk-card-body" style="width:10%">
      <br/>
      <br/>
      <span class="fa-stack fa-lg">
        <i class="fa fa-square-o fa-stack-2x"></i>
        <i class="fa fa-facebook fa-stack-1x"></i>
      </span>
      <br/>
      <br/>
      <span class="fa-stack fa-lg">
        <i class="fa fa-square-o fa-stack-2x"></i>
        <i class="fa fa-twitter fa-stack-1x"></i>
      </span>
      <br/>
      <br/>
      <span class="fa-stack fa-lg">
        <i class="fa fa-square-o fa-stack-2x"></i>
        <i class="fa fa-comment-o fa-stack-1x"></i>
      </span>
      <br/>
      <br/>
      <span class="fa-stack fa-lg">
        <i class="fa fa-square-o fa-stack-2x"></i>
        <i class="fa fa-bookmark-o fa-stack-1x"></i>
      </span>
    </div>
  </div>

</body>
</html>
