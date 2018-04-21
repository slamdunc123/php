//pulls data from catData.json when button is clicked

var catClass = document.getElementsByClassName('cat');

console.log(catClass.length);

for(var i = 0; i < catClass.length-1; i++){
catClass[i].addEventListener('click', myFunction, false);

    }


function myFunction() {
   
    var ourRequest = new XMLHttpRequest();
    ourRequest.open("GET","js/catData.json");
    ourRequest.onload = function(){
        var ourData = JSON.parse(ourRequest.responseText);
   
        console.log(ourData.cats[i]);
       
        renderHTML(ourData.cats[i],i);
    };
    ourRequest.send();
}
  

function renderHTML(data,j) {
    var animalContainer = document.getElementById("animal"+j+"-info");
    var htmlString ="";
     
    htmlString += "<p>" + data.name + "s live in " + data.location +":" + "<br>" + data.description + "</p>";
    animalContainer.insertAdjacentHTML("beforeend",htmlString);
}
 


