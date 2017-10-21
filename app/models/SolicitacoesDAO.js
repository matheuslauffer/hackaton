function SolicitacoesDAO(connection){
  this._connection = connection();
}
SolicitacoesDAO.prototype.pegarSolicitacoes = function(req, res) {
  this._connection.open(function(err, mongoclient){
    mongoclient.collection("solicitacao", function(err, collection){
      //var senha_criptografada = crypto.createHash("md5").update(usuario.senha).digest("hex");
      //usuario.senha = senha_criptografada;
      collection.find().toArray(function(err, result){
        res.render("index", {solicitacoesreg: result});
        mongoclient.close();
      });
    });
  });
}

module.exports = function(){
  return SolicitacoesDAO;
}
