// GLOBAL VARIABLES
// DON'T REMOVE THEM
var xmlDoc = null;
var x = null;
var i = -1;
var result = [];
/************************************************************************************************************ */

function next(id){
    // store answer bta3t user
    result.push($('input[name=' + id +']:checked').attr('value'));
    

   i++; // next question
   display();
}
/************************************************************************************************************ */
// hna btgeeb as2la mn XML file
$(document).ready(function() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "file.xml", true);
    xhttp.send();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        xmlDoc = this.responseXML;
        x = xmlDoc.getElementsByTagName("question");
        i = 0;
        display();
      
      }
    };
    
   });
/************************************************************************************************************ */
  function display() {
    if ($('#parent .question_wrapper').last().remove()){
        // btms7 so2al elly 2bleh 34an t3rd elly b3do
        // et2kd enk 2bl ma tms7 t4of egaba s7 wla la2 w tdelo score msln aw 3la 7sb ent 3awz t3mlha ezay
        $('#parent .question_wrapper').last().remove();
    }
    if (i >=0 && i<x.length){
        // hna ent btdeef so2al gded mn file
        $('#parent').append( '<div class="question_wrapper mb-5">'+
                    '<div class="title">' + x[i].getElementsByTagName("title")[0].childNodes[0].nodeValue + "</div>"+
                    '<div class="answers"><form>'+
                        '<input type="radio" name="' + x[i]['id'] + '" value="' + x[i].getElementsByTagName("answer1")[0].childNodes[0].nodeValue + '">'
                        + x[i].getElementsByTagName("answer1")[0].childNodes[0].nodeValue + '<br>' +

                        '<input type="radio" name="' + x[i]['id'] + '" value="' + x[i].getElementsByTagName("answer2")[0].childNodes[0].nodeValue + '">'
                        + x[i].getElementsByTagName("answer2")[0].childNodes[0].nodeValue + '<br>' +

                        '<input type="radio" name="' + x[i]['id'] + '" value="' + x[i].getElementsByTagName("answer3")[0].childNodes[0].nodeValue + '">'
                        + x[i].getElementsByTagName("answer3")[0].childNodes[0].nodeValue + '<br>' +

                        '<input type="radio" name="' + x[i]['id'] + '" value="' + x[i].getElementsByTagName("answer4")[0].childNodes[0].nodeValue + '">'
                        + x[i].getElementsByTagName("answer4")[0].childNodes[0].nodeValue + '<br>' +
                        
      
                    '</form></div>'+
                    '<button class="btn btn-primary float-right mb-3 mr-5" onclick=next(' + x[i]['id'] + ')>Next</button>'+
                '</div>'); 
    }
    else{
        if (i === x.length){
            // 4of hna ent 3awz t3ml eh lma y5ls quiz
            
            var jsonString = JSON.stringify(result);
            //console.log(jsonString);
             $.ajax({
                    type: "POST",
                    url: "script.php",
                    data: {data : jsonString}, 
                    cache: false,

             success: function(d){
                 // d da score byt7sb 3la asas hwa gawb kam so2al s7 (out of 100)
                 // result btban hna
                        $('#parent').append( '<div class="question_wrapper mb-5 alert alert-success">'
                        + 'Congrats! The quiz is completed.<br>Your score is ' + d + ' points'
                        
                        +'</div>'); 
                       
                    }
             }); 
            
        }
    }
    
  }