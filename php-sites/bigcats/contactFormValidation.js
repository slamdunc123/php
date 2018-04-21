function validate(){
                    var name = document.getElementById('name').value;
                    var email = document.getElementById('email').value;
                    var age = document.getElementById('age').value;
                    
                    if(!name.length == 0 && name.length >=5){
                        name2 = document.getElementById('name');
                        name2.style.backgroundColor = "white";
                    }
                    
                    if(!age.length == 0 && !isNan(age)){
                        age2 = document.getElementById('age');
                        age2.style.backgroundColor = "white";
                    }
                    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        
                    if(!email.length == 0 && re.test(email)){
                        email2 = document.getElementById('email');
                        email2.style.backgroundColor = "white";
                    }
                    
                    if(name.length == 0){
                        var errors = document.getElementById('errors');
                        errors.style.color = "red";
                        errors.innerHTML = "You must enter a name!";
                        name2 = document.getElementById('name');
                        name2.value = "you must enter a name";
                        name2.style.backgroundColor="red";
                        return false;
                    }
                    else {
                        if(name.length < 5){
                            var errors = document.getElementById('errors');
                            errors.style.color = "red";
                            errors.innerHTML = "You must enter a name greater than or equal to 5 characters!";
                            name2 = document.getElementById('name');
                            name2.value = "you must enter a name greater than or equal to 5 characters";
                            name2.style.backgroundColor="red";
                            return false;
                    }
                    }
                    
                    if(email.length == 0){
                        var errors = document.getElementById('errors');
                        errors.style.color = "red";
                        errors.innerHTML = "You must enter a valid email!";
                        email2 = document.getElementById('email');
                        email2.value = "you must enter a valid email";
                        email2.style.backgroundColor="red";
                        return false;
                    }
                    else {
                        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        if(!re.test(email)){
                            var errors = document.getElementById('errors');
                            errors.style.color = "red";
                            errors.innerHTML = "You must enter a valid email!";
                            email2 = document.getElementById('email');
                            email2.value = "you must enter a valid email!";
                            email2.style.backgroundColor="red";
                            return false;
                    }
                    }
                    if(age.length == 0){
                        var errors = document.getElementById('errors');
                        errors.style.color = "red";
                        errors.innerHTML = "You must enter an age!";
                        age2 = document.getElementById('age');
                        age2.value = "you must enter an age";
                        age2.style.backgroundColor="red";
                        return false;
                    }
                    else {
                        if(isNaN(age)){
                            var errors = document.getElementById('errors');
                            errors.style.color = "red";
                            errors.innerHTML = "You must enter an age!";
                            age2 = document.getElementById('age');
                            age2.value = "you must enter an age";
                            age2.style.backgroundColor="red";
                            return false;
                    }
                    }
                }


