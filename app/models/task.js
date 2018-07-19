var mysqlModel  = require('mysql-model');
const dbConfig = require('../config/database.js');
var mysql = require('mysql');

var MyAppModel  = mysqlModel.createConnection({
    host     :  dbConfig.host,
    user     :  dbConfig.user,
    password :  dbConfig.password,
    database :  dbConfig.database
});
var Task = MyAppModel.extend({
	tableName: "tasks"
});

task = new Task();
