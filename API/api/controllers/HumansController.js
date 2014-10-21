/**
 * HumansController
 *
 * @description :: Server-side logic for managing humans
 * @help        :: See http://links.sailsjs.org/docs/controllers
 */

module.exports = {


	create : function (req,res) {
		console.log("Well, hello "+req.url+'\n'+'Waiting for new connection...');
		return res.json({message:"Well, hello "+req.param('prenom')}, 200);
	},
	nocreate : function (req,res) {
		console.log("Well, hello "+req.url+'\n'+'Waiting for new connection...');
		return res.json({message:"Well, hello who? Fucktard..."}, 200);
	},
	accidents : function (req,res){
		var reqAccidents = {
						  "query": {
						    "bool": {
						      "must": [
						        {
						          "match_all": {}
						        }
						      ],
						      "must_not": [],
						      "should": []
						    }
						  },
						  "from": 0,
						  "size": 25,
						  "sort": [],
						  "facets": {}
						};
		console.dir(reqAccidents);
		async.parallel([
    		function (callback) {
		        ESservice.search('', reqAccidents, function (err, result) {

					if (err) {
						sails.log.error(err);
						sails.log.error('Failed to request '+result);
					}
					reqAccidents = result.hits.hits;
					console.dir(reqAccidents);
					if (typeof reqAccidents[0] == "undefined") {
						//return res.notFound();
					}
					return res.json({"resultats":reqAccidents},200);
			        callback();
		        });
		    },
		    ], function (err) {
		    	console.dir(dir);
		    });

	},
	_config: {}
};

