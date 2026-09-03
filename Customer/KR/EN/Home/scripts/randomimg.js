
var imagenes = [ 
	"images/KR/Home/alfaPXPFORTE-200623.jpg", 
    "images/KR/Home/alfaPXPPLUS-200623.jpg",
    "images/KR/Home/alfaB12.jpg", 
    "images/KR/Products/alfaAshwagandha.jpg"
];

var enlaces = [
	"index.php?option=com_staticxt&Itemid=3763", 
    "index.php?option=com_staticxt&Itemid=3972",
    "index.php?option=com_staticxt&Itemid=3766", 
    "index.php?option=com_staticxt&Itemid=1002802"
];

function azar()    { 
    var temp = new Array(6); 
    temp[0] = Math.floor(Math.random() * imagenes.length); 
    do 
        temp[1] = Math.floor(Math.random() * imagenes.length); 
    while (temp[0] == temp[1]) 
    do 
        temp[2] = Math.floor(Math.random() * imagenes.length); 
    while (temp[0] == temp[1] || temp[0] == temp[2] || temp[1] == temp[2]) 
    do 
        temp[3] = Math.floor(Math.random() * imagenes.length); 
    while (    temp[0] == temp[1] || 
        temp[0] == temp[2] || 
        temp[1] == temp[2] || 
        temp[0] == temp[3] || 
        temp[1] == temp[3] || 
        temp[2] == temp[3] 
) 

    document.getElementById("enlace1").setAttribute("href", enlaces[temp[0]]); 
    var IMAGE_SERVER_ROOT_DIRECTORY_IN_JAVASCRIPT = "";
    document.images.imagen1.src = "https://enzactamedia.enzacta.com/prod/Customer/"+imagenes[temp[0]];
}
