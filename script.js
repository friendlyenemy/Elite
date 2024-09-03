const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;

imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);

$('nav ul li.btn span').click(function(){
  $('nav ul div.items').toggleClass("show");
  $('nav ul li.btn span').toggleClass("show");
});
          
function showDetails(elem) {
    let id = elem.getAttribute("data-id");
    location.href="detail.php?id="+id.toString();
    
}

newFunction();
function newFunction() {
    $('nav ul li.btn span').click(function () {
        $('nav ul div.items').toggleClass("show");
        $('nav ul li.btn span').toggleClass("show");
    });
}

function search() {
    let text=document.querySelector("#myInput").value;
    location.href="index.php?getId="+text;
}