module.exports.index = function(application, req, res){
  var connection = application.config.dbConnection;
  var SolicitacoesDAO = new application.app.models.SolicitacoesDAO(connection);
  var solicitacoes = SolicitacoesDAO.pegarSolicitacoes(req, res);
}
