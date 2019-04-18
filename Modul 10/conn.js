// SOAL NO 1 , import mysql
// contoh import
var mysql = require('mysql');

var con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "mod10"
});
// SOAL NO 2
// UBAHLAH CONFIG DATABASE DIATAS DENGAN NAMA DATABASE KALIAN


con.connect(function (err){
    if(err) throw err;
});

module.exports = con;