$(".navbar a").on("click", function(e) {
  if (this.hash !== "") {
    e.preventDefault();

    const hash = this.hash;

    $("html, body").animate(
      {
        scrollTop: $(hash).offset().top
      },
      2000
    );
  }
});

document.getElementById('button').addEventListener('click',
    function(){
document.querySelector('.bg-modal').style.display='flex'


    });

document.querySelector('.close').addEventListener('click',
    function () {
  document.querySelector('.bg-modal').style.display=none;
      
    });
