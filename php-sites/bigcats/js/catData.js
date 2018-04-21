//function to pull data from catData.json via AJAX when button is clicked

catData();

function catData(){

var catClass = document.getElementsByClassName('catClass');

for(var i = 0; i < catClass.length; i++){
catClass[i].addEventListener('click', myFunction, false);
console.log(catClass.length);

}

function myFunction() {
   
    var i = this.getAttribute("data-no");
    console.log(i);
    
    var ourRequest = new XMLHttpRequest();
    ourRequest.open("GET","js/catData.json");
    ourRequest.onload = function(){
        var ourData = JSON.parse(ourRequest.responseText);
        renderHTML(ourData.cats[i],i);
    };
    
    ourRequest.send();
    catClass[i].style.display="none";
}

function renderHTML(data,i) {
    var animalContainer = document.getElementById("catInfo"+i);
    var htmlString ="";
        htmlString += "<p>" + data.name + "s live in " + data.location +":" + "<br>" + data.description + "</p>";
        animalContainer.insertAdjacentHTML("beforeend",htmlString);
}
} 
