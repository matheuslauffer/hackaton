module.exports.cadastro = function(application, req, res){
  res.send('renderizar página de cadastro');
}

// module.exports.cadastrar = function(application, req, res){
// //Acertar conforme formulário de cadastro
//   var dadosForm = req.body;
//   req.assert("nome", "Nome não pode ser vazio").notEmpty();
//   req.assert("usuario", "Usuário não pode ser vazio").notEmpty();
//   req.assert("senha", "Senha' não pode ser vazio").notEmpty();
//   req.assert("casa", "Casa não pode ser vazio").notEmpty();
//
//   var erros = req.validationErrors();
//
//   if(erros){
//     res.render('cadastro', {validacao: erros, dadosForm});
//     return;
//   }
//
//   var connection = application.config.dbConnection;
//   var UsuariosDAO = new application.app.models.UsuariosDAO(connection);
//   var JogoDAO = new application.app.models.JogoDAO(connection);
//
//   UsuariosDAO.inserirUsuario(dadosForm);
//   JogoDAO.gerarParametros(dadosForm.usuario);
//   var cadastro = 1;
//   res.render("index", {validacao:cadastro, dadosForm:{}});
// }
