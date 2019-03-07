// write your code here
// tulis kodingan disini
function validasi()
{
    if (document.getElementById("nama").value=="" || document.getElementById("email").value =="" || document.getElementById("alamat").value == "")
    {
        alert("Pastikan data tidak kosong ! ! !");
    }
    else if (document.getElementById("nama").value!="" || document.getElementById("email").value !="" || document.getElementById("alamat").value != "")
    {
        alert("Halo "+ document.getElementById("nama").value +" Selamat Datang :v");
    }
}

function changeBack()
{
    document.body.style.backgroundImage = "url(image.jpg)";
}

function changeFont()
{
    document.getElementById("telkom").style.fontFamily = "serif";
}

function changeFontsz()
{
    document.getElementById("telkom").style.fontSize = "20px";
}

function changeFontclr()
{
    document.getElementById("telkom").style.color = "red";
}

function delFont()
{
    document.getElementById("telkom").innerHTML = "";
}