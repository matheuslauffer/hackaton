<html>
<head>
	<title>People's Help - Home</title>

	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet" >
	<meta charset="utf-8">
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/e_index.css"/>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNgM40ywladoIXRQSbjVEeN4-9KzAhRVg&callback=initMap" async defer></script>

	<link rel="stylesheet" type="text/css" href="css/e_cadastro.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-42119746-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
</head>
<body>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '504772776551388', // seu APP ID
	      cookie     : true, // habilita cookies para permitir o servidor acessar a sessao
	      xfbml      : true, // processa plugins sociais nessa pagina
	      version    : 'v2.4' // versao da Graph API usada
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/pt_BR/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));

		 function checkLoginState()
{
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            // usuario logado no facebook e com o app aceito

        } else if (response.status === 'not_authorized') {
            // Usuario logado no facebook, mas nao aceitou o App
        } else {
            // Usuario nao logado no facebook
        }
    });
}
	</script>
	<div class="container header">
		<img src="images/peoples_help.png" alt="People's Help" height="15%" width="15%">
	</div>

	<div class="container principal_css">
		<!-- <%if(validacao > 0){%>
			<div class="alert alert-danger" id="alerta">
				<strong>Atenção!<br /> Login e/ou senha inválido(s)</strong>
			</div>
		<%}%>
		<%if(validacao == 0){%>
			<div class="alert alert-info" id="alerta">
				<strong>Usuário cadstrado com sucesso</strong>
			</div>
		<%}%> -->
		<div class="row" class="conteudo">
			<div class="col-md-10 mapa_css" id="map">

			</div>

			<div class="col-md-2 login_css">
				<div class= "social_network">
					<a class="btn btn-social-icon btn-lg btn-facebook" href="#" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><fb:login-button
     scope="email,publish_actions" onlogin="checkLoginState();">
</fb:login-button></a>
					<a class="btn btn-social-icon btn-lg btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-google']);"><span class="fa fa-google"></span></a>
					<a class="btn btn-social-icon btn-lg btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-twitter']);"><span class="fa fa-twitter"></span></a>
				</div>
				<br>
					<form class="form-horizontal" method="post" action="/login">
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Login</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Digite um login"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Senha</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Digite sua senha"/>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Entrar</button>
						</div>
						<span class="centro">ou<br></span>
						<a href="/cadastro">
							<div class="form-group ">
								<button type="button" class="btn btn-primary btn-lg btn-block login-button">Cadastre-se</button>
							</div>
						</a>
					</form>

				<br>
				<div class="row">
					<div class="col-md-12 menu_css">
						<a href="index.ejs">
							<p>
								<img src="images/home.png" alt="Home Page" title="Home" width="27.5%" height="5%" class="home">
							</p>
						</a>
						<a href="info.ejs">
							<p class="link_page">
								<img src="images/information_icon.png" alt="Informações" title="Informações" width="27.5%" height="5%" class="home">
							</p>
						</a>
						<a href="doar.ejs">
							<p class="link_page">
								<img src="images/donate_icon.png" alt="Doar" title="Doar" width="27.5%" height="5%" class="home">
							</p>
						</a>
						<a href="solicitar.ejs">
							<p class="link_page">
								<img src="images/receive_icon.png" alt="Receber" title="Receberr" width="27.5%" height="5%" class="home">
							</p>
						</a>
					</div>
				</div>
			</div>


		</div>
	</div>
	<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

			<!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog" class="escondido">
	    <div class="modal-dialog modal-sm">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Modal Header</h4>
	        </div>
	        <div class="modal-body">
	          <p>This is a small modal.</p>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	    </div>
	  </div>

    </div>
  </div>
	<script>
	function addMarker(location, map, type){
		var image;
		if(type == 0){
			image = "./images/marcadorverde.png";
		}
		else {
			image = "./images/marcadorvermelho.png";
		}
		var marker = new google.maps.Marker({position: location, map: map, icon: image});
	}

	function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 10
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

					map.setCenter(pos);
					addMarker(pos, map, 1);

          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
  </script>
</body>
</html>
