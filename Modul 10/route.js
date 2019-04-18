'use strict';
var modelmod10 = require('./model.js');

module.exports = (app) => {
    //halaman index
    app.route('/')
        .get(modelmod10.index);

    //api ngambil semua data
    // SOAL NO 7
    //urlnya /get_all_manusia
    // cara manggilnya make 
    app.route('/get_all_manusia/')
        .get(modelmod10.manusia)

    //api buat cari manusia
    app.route('/find_manusia/:carimanusia')
        .get(modelmod10.cari_manusia);

        // SOAL NO 8
    //api buat nambah manusia
    app.route('/tambah_manusia')
        .post(modelmod10.tambah_manusia);
    //ganti jadi post

    //api buat update manusia
    app.route('/update_manusia')
        .post(modelmod10.update_manusia);
    //ganti jadi post

    //api buat delete manusia
    app.route('/delete_manusia')
        .post(modelmod10.delete_manusia);
    //ganti jadi post
        

};