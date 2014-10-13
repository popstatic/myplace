var es = require('elasticsearch');
var sails = require('sails');

var esclient      = new es.Client({
    host: 'localhost:9200',
    log: 'error'
});

var currentIndex = 'gouv.accidents.corporels';

module.exports= {

    setIndex : function(index) {

        currentIndex = index;

    },
    //
    //--
    // Perform a query in elasticsearch
    //--
    search : function (indice, query, cb) {

        esclient.search({
            index: currentIndex,
            type: indice,
            body: query
        }
        , cb);
    },

    //--
    // Delete a document in elasticsearch
    //--
    unindex : function (indice, id, cb) {

        esclient.delete({
            index: currentIndex,
            type: indice,
            id: id
        }
        , cb);
    },

    //--
    // Index a new document in elasticsearch
    //--
    index : function (indice, id, body, cb) {

        esclient.index({
            index: currentIndex,
            type: indice,
            id: id,
            body: body
        }
        , cb);
    }
}
