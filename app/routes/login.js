module.exports = function(application){
	application.get('/login', function(req, res){
		application.app.controllers.login.login(application, req, res);
	});
	application.post('/autenticar', function(req, res){
		application.app.controllers.login.autenticar(application, req, res);
	});

	/*Rotas para login com facebook*/
	application.get('/', function(req, res){
	  res.render('index', { user: req.user });
	});

	application.get('/auth/facebook', passport.authenticate('facebook', {scope: 'email'}));

	application.get('/auth/facebook/callback',
	  passport.authenticate('facebook', { successRedirect : '/', failureRedirect: '/login' }),
	  function(req, res) {
	    res.redirect('/');
	  });

	application.get('/logout', function(req, res){
	  req.logout();
	  res.redirect('/');
	});

	application.get('/login', function(req, res){
		res.redirect('/');
	});

	function usuarioAutenticado(req, res, next) {
  	if (req.isAuthenticated())
    	return next();
  	res.redirect('/login')
	}
}
