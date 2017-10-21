/* importar o módulo do framework express */
var express = require('express');

/* importar o módulo do consign */
var consign = require('consign');

/* importar o módulo do body-parser */
var bodyParser = require('body-parser');

/* importar o módulo do express-validator */
var expressValidator = require('express-validator');

var expressSession = require('express-session');
var session = require('session');
/*iniciar o módulo passport*/
var passport = require('passport');

var FacebookStrategy = require('passport-facebook').Strategy;
/*Configurações do passport*/

var geoHash = require("geohash").GeoHash;

/* iniciar o objeto do express */
var app = express();
passport.serializeUser(function(user, done) {
  done(null, user);
});

passport.deserializeUser(function(user, done) {
  done(null, user);
});

passport.use(new FacebookStrategy({
    clientID: 1512478768865434,
    clientSecret:"4b86ecc76dd475305eaf390f43564b80",
    callbackURL: "/auth/facebook/callback",
    profileFields: ['id', 'displayName', 'emails', 'gender'] //verificar os campos necessários
  },
  function(accessToken, refreshToken, profile, done) {
    process.nextTick(function () {
      	return done(null, profile);
    });
  }
));

/*Rotas para login com facebook*/
app.get('/auth/facebook', passport.authenticate('facebook', {scope: 'email'}));

app.get('/auth/facebook/callback',
	passport.authenticate('facebook', { successRedirect : '/', failureRedirect: '/login' }),
	function(req, res) {
		res.redirect('/');
	});

app.get('/logout', function(req, res){
	req.logout();
	res.redirect('/');
});

app.get('/login', function(req, res){
	res.redirect('/');
});

function usuarioAutenticado(req, res, next) {
	if (req.isAuthenticated())
		return next();
	res.redirect('/login')
}

/* setar as variáveis 'view engine' e 'views' do express */
app.set('view engine', 'ejs');
app.set('views', './app/views');

/* configurar o middleware express.static */
app.use(express.static('./app/public'));

/* configurar o middleware body-parser */
app.use(bodyParser.urlencoded({extended: true}));

/* configurar o middleware express-validator */
app.use(expressValidator());

app.use(expressSession({
	secret:'idjaoiskdok',
	resave: true,
	saveUninitialized: true
}));

// app.use(session({
//     secret: '2C44-4D44-WppQ38S',
//     resave: true,
//     saveUninitialized: true
// }));

/*inicializar passport e session*/
app.use(passport.initialize());
app.use(passport.session());
/* efetua o autoload das rotas, dos models e dos controllers para o objeto app */
consign()
	.include('app/routes')
	.then('app/models')
	.then('app/controllers')
  .then('config/dbConnection.js')
	.into(app);

/* exportar o objeto app */
module.exports = app;
