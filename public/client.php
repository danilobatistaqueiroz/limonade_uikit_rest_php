<html>
<head>
  <script src="../node_modules/jquery/dist/jquery.js"></script>
  <link href="../node_modules/uikit/dist/css/uikit.css" rel="stylesheet" type="text/css" />
  <script src="../node_modules/uikit/dist/js/uikit.js"></script>
  <link href="https://getuikit.com/v2/docs/css/uikit.docs.min.css" rel="stylesheet" type="text/css" />
  <script src="../node_modules/uikit/dist/js/uikit-icons.min.js"></script>
  <script src="js/grid.js"></script>
  <script src="../libs/notify.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script>
    var approot = "/limonade/crudrest";
    var url = approot + '/rest/api/users';
    var tableID = "#tableUsers";
    function sendAndLoad(sURL, params, sType) {
      $.ajax({
        url: sURL,
        type: sType,
        data: params,
        success: function(response) {
          $.notify(JSON.stringify(response).replace(/"/g, ''), {
            className: "success",
            autoHideDelay: 2000
          });
        },
        error: function(xhr) {
          $.notify(JSON.stringify(xhr).replace(/"/g, ''), {
            className: "error",
            autoHideDelay: 2000
          });
        }
      });
    }
    $(function() {
      function callRestApi(type) {
        if (type == "get") {
          listToGrid(url, tableID);
        } else {
          var params = {
            login: 'super',
            name: 'super user',
            passwd: '123',
            email: 'super@gmail.com',
            type: 'Admin',
            address: 'Avenue New World'
          };
          sendAndLoad(url, params, type);
        }
      }
      $('a').click(function() {
        var href = $(this).attr('href').substr(1).toLowerCase();
        callRestApi(href);
      });
      listToGrid(url, tableID)
    });
	$.ajax({
		url:'forms/editUserForm.php',
		method: 'GET',
		contentType: "application/json; charset=utf-8",
		success: function(data) {
			$('#divEditUserForm').empty();
			$('#divEditUserForm').append(data);
		}
	});
  $.ajax({
		url:'modals/confirmDelete.php',
		method: 'GET',
		contentType: "application/json; charset=utf-8",
		success: function(data) {
			$('#divConfirmDelete').empty();
			$('#divConfirmDelete').append(data);
		}
	});
  </script>
</head>
<body style="background-color:#f8f8f8">
  <div id="divConfirmDelete" ></div>
  <ul class="uk-switcher uk-margin">
    <li class="uk-active">
      <nav class="uk-navbar-container uk-margin uk-navbar" uk-navbar="">
        <div class="uk-navbar-left" style="height: 40px;">
          <a class="uk-navbar-item uk-logo" href="#">
            <span class="uk-icon uk-margin-small-right" uk-icon="icon: home"></span>
          </a>
          <ul class="uk-navbar-nav">
            <li>
              <a href="#post">
                <span class="uk-icon uk-margin-small-right" uk-icon="icon: plus"></span>create
              </a>
            </li>
            <li>
              <a href="#get">
                <span class="uk-icon uk-margin-small-right" uk-icon="icon: refresh"></span>list
              </a>
            </li>
            <li>
              <a href="#get/1">
                <span class="uk-icon uk-margin-small-right" uk-icon="icon: user"></span>get
              </a>
            </li>
            <li>
              <a href="#put">
                <span class="uk-icon uk-margin-small-right" uk-icon="icon: file-edit"></span>edit
              </a>
            </li>
            <li>
              <a href="#delete">
                <span class="uk-icon uk-margin-small-right" uk-icon="icon: trash"></span>delete
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </li>
  </ul>
  <div class="uk-inline">
    <div class="uk-container">
      <h1 class="uk-heading-divider">Limonade - Uikit</h1>
      <div class="uk-margin uk-margin-medium-top uk-margin-medium-left uk-medium-margin-medium-bottom">
        <div id="divEditUserForm" style="display:none">
        </div>
        <div id="divBlockQuotes">
          <blockquote>
            <span uk-icon="icon: github-alt"></span> I developed using git and github for source control
          </blockquote>
          <blockquote>
            <span uk-icon="icon: cog"></span> I used limonade, a micro framework for php
          </blockquote>
          <blockquote>
            <span uk-icon="icon: server"></span> This works using a REST api and jquery
          </blockquote>
          <blockquote>
            <i class="fa fa-hand-o-up"></i> All you need is to select an operation above
          </blockquote>
          <blockquote>
            <span uk-icon="icon: mail"></span> If you want contact me: danilobatistaqueiroz@gmail.com
          </blockquote>
          <blockquote>
            <i class="fa fa-whatsapp"></i> I'm found in whatsapp too: +55(11)9.6451-5485
          </blockquote>
        </div>
      </div>
      <div class="uk-margin uk-margin-medium-top uk-margin-medium-left uk-margin-medium-bottom">
        <table id="tableUsers" name="tableUsers" class="uk-table uk-table-hover">
          <thead>
            <tr>
              <th style="display:none">id</th>
              <th>name</th>
              <th>email</th>
              <th>age</th>
              <th>phone</th>
              <th></th>
            </tr>
          </thead>
        </table>
      </div>
      <article class="uk-comment uk-comment-primary">
        <header class="uk-comment-header">
          <img class="uk-comment-avatar" src="images/placeholder_avatar.svg" width="50" height="50" alt="">
          <h4 class="uk-comment-title">Danilo Batista de Queiroz</h4>
          <p class="uk-comment-meta">27.10.2017 | php developer | #</p>
        </header>
        <div class="uk-comment-body">
          <p>This is a crud application, an example using resful api with limonade in the backend and uikit for css/js in the frontend</p>
        </div>
      </article>
    </div>
  </div>
  <button uk-toggle="target: #my-id" type="button">okok</button>
</body>
</html>
