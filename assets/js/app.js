window.onload = function() {
  // Increment Decrement Buttons for Quantity Input
  var inc = document.querySelector("#cart-inc");
  var dec = document.querySelector("#cart-dec");
  var inputText = document.querySelector(".input-text");
  if(inc && dec){
    inc.addEventListener('click', ()=> {
      inputText.value++;
    });
    dec.addEventListener('click', ()=> {
      if(inputText.value > 1) inputText.value--;
    });
  }

  // Star Ratings
  var stars = [...document.querySelectorAll('.stars a')];
  if(stars){
    stars.forEach(star=>star.addEventListener('click', ({target})=>{
      var starString = target.classList[0];
      var starNum = parseInt(starString[starString.length-1],10);
      // must use setTimeout to override parent theme removing all active classes
      setTimeout(()=>{
        stars.forEach((star,i)=>{
          if(i+1 <= starNum){
            star.classList.add('active');
          }else{
            star.classList.remove('active');
          }
        }, 100)
      })
    }))
  }
}
