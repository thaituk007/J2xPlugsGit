let Q = require('q');


module.exports = {

    GetSQLStringData(dbs, sqls) {

        var deferred = Q.defer();
        dbs.raw(sqls)
            .then(data => {
                deferred.resolve(data[0][0].cc)
            }).catch((err) => {
                deferred.reject(err)
            });
        return deferred.promise;
    }


}