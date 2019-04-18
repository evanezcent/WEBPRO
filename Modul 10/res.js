'use strict';

exports.ok = (values, res) => {
    var data = {
        'status': 200,
        'values': values
    };
    // SOAL NO 6
// konversi data di atas agar mereturn hasil json
// contoh pengerjaan , 

    res.json(data)
    res.end();
};

exports.gagal = (values, res) =>{
    var data = {
        'status': 500,
        'values': values
    };
        // SOAL NO 6
// konversi data di atas agar mereturn hasil json
// contoh pengerjaan , res.json(data)
    res.json(data)
    res.end();
};