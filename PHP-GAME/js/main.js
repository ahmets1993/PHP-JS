
//************************************************************************* Hier Begint Memory********************************************
const cards = document.querySelectorAll('.memory-card');
let hasFlippedCard = false;
let lockBoard =false; // for waiting the event finished.
let firstCard, secondCard;
function flipCard() {
if(lockBoard) return; //if lockBoard ist true
if(this === firstCard) return; // solution for double click !!!
this.classList.toggle('flip');
if(!hasFlippedCard){
//First Click
hasFlippedCard =true;
firstCard =this;
return;
}
 	//second click
 	secondCard =this;
 	// console.log({firstCard, secondCard});
 	checkForMatch();
 }
 function checkForMatch(){
 	//Matching Cars
 	let isMatch =firstCard.dataset.framework === secondCard.dataset.framework;
 	isMatch ? disableCards() : unflipCards();
 }
 function disableCards(){
	// its a match!!
 firstCard.removeEventListener('click',flipCard);
 secondCard.removeEventListener('click',flipCard);
 resetBoard();
}
function unflipCards(){
	lockBoard =true;
	 //not a match!!
  setTimeout(() =>{
   firstCard.classList.remove('flip');
   secondCard.classList.remove('flip');
   resetBoard();	
 }, 1500);
}
function resetBoard(){
	[hasFlippedCard, lockBoard] = [false, false];
	[firstCard, secondCard]= [null, null];
}
(function shuffle(){ //for mixing the card
  cards.forEach(card =>{
    let randomPos = Math.floor(Math.random()*12);
    card.style.order = randomPos;
  });
})();
cards.forEach(card => card.addEventListener('click', flipCard));

//************************************************************************* Hier Begint Gallery********************************************

$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideDown("slow");
  });
});
$(document).ready(function(){
 Dropzone.options.dropzoneFrom = {
  autoProcessQueue: false,
  acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",
  init: function(){
   var submitButton = document.querySelector('#submit-all');
   myDropzone = this;
   submitButton.addEventListener("click", function(){
    myDropzone.processQueue();
  });
   this.on("complete", function(){
    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
    {
     var _this = this;
     _this.removeAllFiles();
   }
   list_image();
 });
 },
};
list_image();
function list_image()
{
  $.ajax({
   url:"upload.php",
   success:function(data){
    $('#preview').html(data);
  }
});
}
$(document).on('click', '.remove_image', function(){
  var name = $(this).attr('id');
  $.ajax({
   url:"upload.php",
   method:"POST",
   data:{name:name},
   success:function(data)
   {
    list_image();
  }
})
});
});
