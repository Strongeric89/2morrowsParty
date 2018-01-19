function test(){
  var d = document.myform.n.d.value;
  console.log(d);
  alert(d);
}

function validateEnquiry(){

  //get inputs
  var name = document.myform.name.value;
  var review = document.myform.email.value;
  var date = document.myform.date.value;
  var number = document.myform.number.value;
  var venue = document.myform.venue.value;
  var query = document.myform.query.value;

  console.log(name,review,date,number,venue,email,query);

  //validate they not empty

  //validate they are valid types


  //return true if all ok

  //else return false

  return true;

}
