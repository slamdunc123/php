//pulls data from catData.json when button is clicked

catData();

function catData(){

var catClass = document.getElementsByClassName('cat');
//var i = 0;
console.log(catClass.length);
//console.log("i = "+i);
for(var i = 0; i < catClass.length; i++){
catClass[i].addEventListener('click', myFunction, false);
   console.log("i = "+i);
   console.log(catClass[i]);
    }
 console.log("i = "+i);
 console.log(catClass[i]);
 



function myFunction() {
//    var cat = catClass[0];
//    console.log(cat);
//    var val = this.attributes.id.value;
//    console.log(val);
//    var index = val.indexOf('al');
//    console.log(index);
//    var index2 = cat.indexOf('mal');
//    console.log(index2);
   var n = this.getAttribute("data-no");
    //alert(n);
    
    var ourRequest = new XMLHttpRequest();
    ourRequest.open("GET","js/catData.json");
    ourRequest.onload = function(){
        var ourData = JSON.parse(ourRequest.responseText);
        //console.log(ourData.cats[n],n);
        //console.log(ourData.cats.length);
        console.log(ourData.cats[n],n);
        //document.getElementById("lion-info").innerHTML = ourData;
        renderHTML(ourData.cats[n],n);
    };
    
    ourRequest.send();
    catClass[n].style.display="none";
}
  

function renderHTML(data,j) {
    var animalContainer = document.getElementById("animal"+j+"-info");
    var htmlString ="";
     
    //for (i=0; i<data.length; i++){
        htmlString += "<p>" + data.name + "s live in " + data.location +":" + "<br>" + data.description + "</p>";
    //}
    animalContainer.insertAdjacentHTML("beforeend",htmlString);
}
} 
