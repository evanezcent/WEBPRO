/* 
    Make sure that each id or class is accompanied by your student id
    for example #id_1301171234 , .class_1301171234

    FOR QUESTION No. 2, PLEASE USE $.getJSON function to load the data
    FOR QUESTION No. 3, PLEASE USE $.ajax function to load data
*/

/*-------------------------------------
    PUT YOUR getJSON function here
---------------------------------------*/
$.getJSON('js/data_1301170073.json', function (data) {
    $(".vertical-middle p img").attr({
        "src": data[0].prof_pict,
    });
    $("#title").text(data[0].title);
    $(".nama_1301170073").text(data[0].bio[0].name)
    $(".job_1301170073").text(data[0].bio[0].job)
    $("#id_1301170073").text(data[0].bio[0].job)


    $(".elementor-image img").attr({
        "src": data[0].prof_pict,
    });
    $(".contacts_name").text(data[0].bio[0].name)
    $(".birth").text(data[0].bio[0].birth)
    $(".contacts_address").text(data[0].bio[0].profile)
    $(".contacts_phone").text(data[0].bio[0].phone)
    $(".contacts_email a").text(data[0].bio[0].mail)
});

/*-------------------------------------
    End of getJSON Function
---------------------------------------*/




$(document).ready(function () {

    /*-------------------------------------
        PUT YOUR $.ajax function here
    ---------------------------------------*/
    var skill = (data) => {
        return '<span class="elemen-title">' + data.namaa + '</span>' +
            '<div class="elementor-progress-wrapper" role="progressbar" aria-valuemin="idx" aria-valuemax="100" aria-valuenow="90" aria-valuetext="">' +
            '<div class="elementor-progress-bar" data-max="' + data.persen + '">'+'<span class ="elementor-progress-text"></span>' +
            '<span class ="elementor-progress-percentage>' + data.persen + '</span>' +
            '</div>' +
            '</div>';
    }

    /*-------------------------------------
        End Of $.ajax function
    ---------------------------------------*/
    $.ajax({
        type: "Get",
        url: "js/data_1301170073.json",
        dataType: "json",
        success: function (datacv) {
            var dataS = datacv[0].skills;

            $.each(dataS, function (index, obj) {
                $("#keahlian").append(skill(obj));
            });
        }
    });


});