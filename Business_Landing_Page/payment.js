// First half of the form validation
//Email field Validation format
const email = document.getElementById("email");

email.addEventListener("blur", () => {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!regex.test(email.value)) {
    email.setCustomValidity("Please enter a valid email address");
    email.classList.add("invalid");
  } else {
    email.setCustomValidity("");
    email.classList.remove("invalid");
  }
});


//OpenStreetMap Nominatim API to validate location
var form = document.getElementById("user_information_form");
var address = document.getElementById("adr");
var city = document.getElementById("city");
var country = document.getElementById("country");
var zip = document.getElementById("zip");

//event listener prevent submit if fields have invalid inputs.
//Validate that input entered is valid and just random words.
form.addEventListener("submit", function(event){
    event.preventDefault();

    var searchQuery = `${address.value}, ${city.value}, ${country.value}, ${zip.value}`;//Query for nominatim openstreetmap 

    fetch(`https://nominatim.openstreetmap.org/search?q=${searchQuery}&format=json&limit=1`)//search request to api
    .then(Response => Response.json())
    .then(data => {
        if(data.length > 0){
            form.submit();//if valid allow for submission
        }else{
            alert("Invalid address please enter a valid address")
            address.classList.add("invalid");
            city.classList.add("invalid");
            country.classList.add("invalid");
            zip.classList.add("invalid");
        }
    })
    .catch(error => {
        console.log(error);
        alert("There was an error with you request")
    });
});

// Month field validation
function validateForm() {
    var monthValidation = document.getElementById("expmonth").value;
    // Array of months to choose from
    var monthArray = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    // Check if user input is the same as as value in array
    if(monthArray.indexOf(monthValidation) === -1) {
      document.getElementById("monthError-message").innerHTML = "Please input a valid month starting with a capital letter";
      return false;
    }
    return true;
  }
  
  var form = document.querySelector("form");
  form.addEventListener("submit", function(event) { //eventListener to check month entered matches array
    if (!validateForm()) { //if false trigger the function preventDefault()
      event.preventDefault(); //Prevent form from submitting
    }
});
