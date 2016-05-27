<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Sportabil">
    <title>Sportabil :: feedback para vencedores</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon.ico">

    <!-- CORE CSS-->

    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
      <!-- Custome CSS-->
      <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body class="red darken-3">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" id="form" action="dashboard.php" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">Sportabil<br/>FeedBack para Vencedores</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" class="validate"/>
            <label for="username" class="center-align">Usuário</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" class="validate"/>
            <label for="password">Senha</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Lembrar-me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="#" id="btn_submit" class="btn waves-effect red darken-4 waves-light col s12">Login</a>
          </div>
        </div>

      </form>
    </div>
  </div>

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>

  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="js/plugins.min.js"></script>

  <!--sweetalert -->
  <script type="text/javascript" src="js/plugins/sweetalert/sweetalert.min.js"></script>
  <link href="js/plugins/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">

  <script type="text/javascript">
    $('#btn_submit').on('click', function(){

      if( $('#username').val().length == 0 ){

        swal("Atenção", "Informe um Usuário", "warning");
        return false;
      }

      if( $('#password').val().length == 0 ){

        swal("Atenção", "Informe uma Senha", "warning");
        return false;
      }

      $('#form').submit();
    })
  </script>

</body>

</html>