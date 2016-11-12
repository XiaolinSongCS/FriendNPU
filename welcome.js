/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var images = new Array();
images[0] = "./pictures/welcome.jpg";
images[1] = "./pictures/welcome1.jpg";
images[2] = "./pictures/welcome2.jpg";
images[3] = "./pictures/welcome2.jpg";
setTimeout("changeImage()", 3000);
var x=0;

function changeImage()
{
    document.getElementById("imageWelcome").src=images[x];
    x++;
}

function pageChange(){
    windows.open(welcome.php);
}


