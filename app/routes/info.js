module.exports = function(application){
	application.get('/info', function(req, res){
		application.app.controllers.info.info(application, req, res);
	});
}
