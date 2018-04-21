/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 /*   var i = 0;
    var btn1 = document.getElementById("btn1");
    var li = document.getElementById("lorum-ipsum");
    
    btn1.addEventListener("click", function(){
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "js/lorum-ipsum.json");
        xhttp.onload = function() {
            var ourData = JSON.parse(xhttp.responseText);
          if (this.readyState == 4 && this.status == 200) {
          
            
              li.innerHTML = ourData.lorumipsum[i].text;
             console.log(ourData.lorumipsum[i].text);
             console.log(i);
           i++;
           };
           if (i>4){
                btn1.style.display="none";
           };   
        };
        
        xhttp.send();
        
        
    });


    */
    










/*
function loadDoc() {
    var counter = 1;
    var i = 0;
    
    var btn1 = document.getElementById("btn1");
    var li = document.getElementById("lorum-ipsum");
    var xhttp = new XMLHttpRequest();
    
    xhttp.open("GET", "lorum-ipsum.json");
    xhttp.onload = function() {
        console.log(counter);
      if (this.readyState == 4 && this.status == 200) {
          var ourData = JSON.parse(xhttp.responseText);
          console.log(counter);
        li.innerHTML = ourData.lorumipsum[i].text;
        console.log(counter);
    };
    };
    
    xhttp.send();
    i++;
   counter++;
    //if (counter>1){
     //   btn1.style.display="none";
     //btn1.classList.add("btnHide");   
        
  
    
}

function loadDoc2() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "lorum-ipsum2.html", true);
    xhttp.send();
    }*/
/*
function loadCatData() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "js/catData.json", true);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var ourData = JSON.parse(xhttp.responseText);
            var catData = ourData.cats;
            var lionData = catData[0];
            var lionText = document.getElementById("lion-data");
            
            lionText.innerHTML = lionData.name + "<br>" + lionData.size + "<br>" + lionData.location + "<br>";
            
        }; 
        //console.log(lionData);
    };
    xhttp.send();
}
*/
/*
var btn = document.getElementById("btn");

btn.addEventListener("click", function(){
    var ourRequest = new XMLHttpRequest();
    ourRequest.open("GET","js/catData.json");
    ourRequest.onload = function(){
        var ourData = JSON.parse(ourRequest.responseText);
        console.log(ourData);
    };
    ourRequest.send();
});

*/
/*
function myFunction(x) {
    var ourRequest = new XMLHttpRequest();
    ourRequest.open("GET","js/catData.json");
    ourRequest.onload = function(){
        var ourData = JSON.parse(ourRequest.responseText);
        console.log(ourData.cats[x]);
        //document.getElementById("lion-info").innerHTML = ourData;
        renderHTML(ourData.cats[x],x);
    };
    
    ourRequest.send();
    
}

function renderHTML(data,y) {
    var animalContainer = document.getElementById("animal"+y+"-info");
    var htmlString ="";
     
    //for (i=0; i<data.length; i++){
        htmlString += "<p>" + data.name + "s live in " + data.location +":" + "<br>" + data.description + "</p>";
    //}
    animalContainer.insertAdjacentHTML("beforeend",htmlString);
}

*/
