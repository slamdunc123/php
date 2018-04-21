//function to collapse menu when item clicked in mobile view - stays expanded by default

//call to function collapse()

collapse();

//function collapse() - start

function collapse (){

var navi = document.getElementById('navi');
var a = document.getElementsByTagName('a');
//var status = document.getElementById("navi").className;

//console.log(status);
//console.log(a.length);
//console.log(navi);

for(var i = 0; i < a.length; i++){
a[i].addEventListener('click', hideFunction); 
//console.log(i);
}

function hideFunction(){
    var attr = navi.getAttribute('class');
//    console.log(this);
//    console.log(attr);
   
    if (attr == "navbar-collapse collapse in"){
        //console.log(true);
        //attr.className = "navbar-collapse collapse";
        document.getElementById("navi").className = "navbar-collapse collapse";
        //console.log(attr);
    } 
}
}

//function collapse() - end

//previous workings

//   if (navi.style.display == "none"){
//  navi.style.display = "block";  
//}else{
//    navi.style.display = "none";
//}


/*
var a = document.getElementsByTagName('a');
var b = a[5];
       // .addEventListener('click', function() {
  console.log('All assets are loaded '+b);
//});
*/

//working jQuery solution

/*$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    }
});*/

