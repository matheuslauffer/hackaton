module.exports.index = function(application, req, res){
  /*api google maps*/
  app.get("/:id",function (req,res){
  	//decode the geohash with geohash module
    var latlon = geohash.decodeGeoHash(req.params["id"]);
    console.log("latlon : " + latlon);
    var lat = latlon.latitude[2];
    console.log("lat : " + lat);
    var lon = latlon.longitude[2];
    console.log("lon : " + lon);
    zoom = req.params["id"].length + 2;
    console.log("zoom : " + zoom);
            // now we use the templating capabilities of express and call our template to render the view, and pass a few parameters to it
    res.render("index.ejs", { layout: false, lat:lat, lon:lon, zoom:zoom, geohash:req.params["id"]});
  });
}
