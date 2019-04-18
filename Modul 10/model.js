//READ
exports.manusia = (req, res) => {
    connection.query('SELECT * FROM manusia', (error, rows, fields)=>{
        if(error){
            response.gagal(error,res)
        } else{
            response.ok(rows, res)
        }
    });
};

//READ BY ID
exports.cari_manusia = (req, res) => {
    var id_manusia = req.params.carimanusia;

    connection.query('SELECT * FROM manusia where id_manusia = ?',[id_manusia],(error,rows,fields)=>{
        if(error){
            response.gagal(error,res)
        } else{
            response.ok(rows, res)
        }
    })
};

//CREATE
exports.tambah_manusia = (req, res) => {

    var nama_manusia = req.body.nama_manusia;
    var umur = req.body.umur;

    connection.query('INSERT INTO manusia (nama_manusia , umur) vaLues (?,?)',[nama_manusia , umur], (error, rows, fields)=>{
        if(error){
            response.gagal(error,res)
        } else{
            //tambahin response.ok jika tidak error
            // contoh response.ok(rows,res)
            response.ok(rows, res)
        }
    });
};

//UPDATE
exports.update_manusia = (req, res) => {

    var id_manusia = req.body.id_manusia
    var nama_manusia = req.body.nama_manusia;
    var umur = req.body.umur;

    connection.query('UPDATE manusia SET nama_manusia= ? , umur = ? where id_manusia = ?',[nama_manusia , umur, id_manusia], (error, rows, fields)=>{
        if(error){
            response.gagal(error,res)
        } else{
            response.ok(rows, res)
        }
    });
};

//DELETE
exports.delete_manusia  = (req, res) => {

    var id_manusia = req.body.id_manusia

    connection.query('DELETE FROM manusia where id_manusia = ?',[id_manusia], (error, rows, fields)=>{
        if(error){
            response.gagal(error,res)
        } else{
            response.ok(rows, res)
        }
    });
};
//soal tambahan

//INDEX
// SOAL NO 9
exports.index = (req,res)=>{
    response.ok("Ini tuh index dari node.js ^-^",res)
};