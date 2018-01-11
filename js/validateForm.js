
function validate() {


  //get all the elements first
  var name = document.myform.reviewby.value;
  var review = document.myform.review.value;
  var date = document.myform.date.value;

  console.log(name);
  console.log(review);
  console.log(date);


  //check if name has lettes only
  var flag = lettersOnly(name, "Review By Field");



  if(flag == true){
      //means all fields are correct for the form to onsubmit
      return true;
  }else{

    return false;
  }

} //end validate

function lettersOnly(element, field) {
  var letters = /^[a-zA-Z\s]*$/;

  if (!element.match(letters)) {
    alert(field + " Must contain letters only!");
    document.myform.name.focus;
        return false;

  }else{
      return true;
  }


} //end nameLettersOnly
