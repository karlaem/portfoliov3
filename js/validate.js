  // validate the form
  var Validate = function(){
    var validate = this;
    validate.element = document.getElementById("contactform");
    validate.element.addEventListener("submit", function(event){
    
        var error = false;
        var fieldGroups = document.getElementsByClassName("required"); 

        for(var i=0; i<fieldGroups.length; i++)
        {   
            var field = fieldGroups[i].querySelector("input, select, textarea"); 
            var fieldValue = field.value;
            

            if (field[field.selectedIndex])
            {
                fieldValue = field[field.selectedIndex].value;
                console.log(fieldValue)
            }
            
            console.log(fieldValue);
            if (fieldValue == "")
            {
                fieldGroups[i].classList.add("errors");
                error = true;
            } else {
                fieldGroups[i].classList.remove("errors");
            }
        }
        
        if(error)
        {
            event.preventDefault();
        }
    })
}

new Validate();