function clicks(){
var valuek = document.getElementById("pro").value;
alert(valuek);
var kev = document.getElementById("pro").lenght;
alert(kev);
var img = document.getElementById("im");

if(kev!=0){
    alert("1");
    document.getElementById("pro").style.display="none";
    img.style.display="inline-block";
    img.scr.innerHTML=valuek;
}else{
    alert("2");
    kev.style.display="block";
    img.style.display="none";
}
}
alert("2");