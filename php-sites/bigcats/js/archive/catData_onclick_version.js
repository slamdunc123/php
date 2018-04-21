//pulls data from catData.json when button is clicked

function myFunction(x) {
    var ourRequest = new XMLHttpRequest();
    ourRequest.open("GET","js/catData.json");
    ourRequest.onload = function(){
        var ourData = JSON.parse(ourRequest.responseText);
        console.log(ourData.cats[x]);
        renderHTML(ourData.cats[x],x);
    };
    
    ourRequest.send();
    
}

function renderHTML(data,y) {
    var animalContainer = document.getElementById("animal"+y+"-info");
    var htmlString ="";
        htmlString += "<p>" + data.name + "s live in " + data.location +":" + "<br>" + data.description + "</p>";
        animalContainer.insertAdjacentHTML("beforeend",htmlString);
}