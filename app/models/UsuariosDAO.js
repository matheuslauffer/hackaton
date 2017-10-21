var crypto = require('crypto')

function UsuariosDAO(connection){
  this._connection = connection();
}
UsuariosDAO.prototype.inserirUsuario = function(usuario) {
  this._connection.open(function(err, mongoclient){
    mongoclient.collection("usuarios", function(err, collection){
      //var senha_criptografada = crypto.createHash("md5").update(usuario.senha).digest("hex");
      //usuario.senha = senha_criptografada;
      collection.insert(usuario);
      mongoclient.close()
    });
  });
}

UsuariosDAO.prototype.autenticar = function (usuario, req, res) {
  this._connection.open(function(err, mongoclient){
    mongoclient.collection("usuarios", function(err, collection){
      collection.find(usuario).toArray(function(err, result){
        if(result[0] != undefined){
          req.session.autorizado = true;
        }
        var erros = 0;
        if(req.session.autorizado){
          res.render("index", {validacao: {erros}});
        }else{
          erros = 1;
          res.render("index",{validacao: {erros}});
        }
      });
      mongoclient.close()
    });
  });
}

module.exports = function(){
  return UsuariosDAO;
}
