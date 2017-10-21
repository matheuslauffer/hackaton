module.exports.login = function(application, req, res){
  var dadosForm = req.body;
  var connection = application.config.dbConnection;
  var UsuariosDAO = new application.app.models.UsuariosDAO(connection);
  UsuariosDAO.autenticar(dadosForm, req, res);
}
