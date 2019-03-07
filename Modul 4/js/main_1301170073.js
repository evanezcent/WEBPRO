/* 
    Make sure that each id or class is accompanied by your student id
    for example #id_1301171234 , .class_1301171234

    FOR QUESTION No. 2, PLEASE USE $.getJSON function to load the data
    FOR QUESTION No. 3, PLEASE USE $.ajax function to load data
*/

/*-------------------------------------
    PUT YOUR getJSON function here
---------------------------------------*/
$.getJSON('js/data_1301170073.json',function(data){
    $(".vertical-middle p img").attr({
        "src" : data.prof_pict,
    });
    $("#title").text(data.title);
    $(".nama_1301170073").text(data.bio[0].name)
    $(".job_1301170073").text(data.bio[0].job)
    $("#id_1301170073").text(data.bio[0].job)


    $(".elementor-image img").attr({
        "src" : data.prof_pict,
    });
    $(".contacts_name").text(data.bio[0].name)
    $(".birth").text(data.bio[0].birth)
    $(".contacts_address").text(data.bio[0].profile)
    $(".contacts_phone").text(data.bio[0].phone)
    $(".contacts_email a").text(data.bio[0].mail)
});

/*-------------------------------------
    End of getJSON Function
---------------------------------------*/




$(document).ready(function(){

/*-------------------------------------
    PUT YOUR $.ajax function here
---------------------------------------*/
var tampil=" ";
    $.ajax({
        type : "Get",
        url : "js/data_1301170073.json",
        dataType : "json",
        success : function(data){

            $.each(data.function(index,obj) {
                tampil = '<span class="elemen-title">// Skill Name</span>'+
                        '<div class="elementor-proggress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="90" aria-valuetext="">'+
                            '<div class="elementor-proggress-bar" data-max">'+
                                '<div class = '

            });
        }
    })

/*-------------------------------------
    End Of $.ajax function
---------------------------------------*/
})