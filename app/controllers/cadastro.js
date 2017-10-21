module.exports.cadastro = function(application, req, res){
  res.render('cadastro');
}

module.exports.cadastrar = function(application, req, res){
  var dadosForm = req.body;

  var connection = application.config.dbConnection;
  var UsuariosDAO = new application.app.models.UsuariosDAO(connection);
  //var SolicitacoesDAO = new application.app.models.SolicitacoesDAO(connection);

  UsuariosDAO.inserirUsuario(dadosForm);
  res.redirect("index");
}
