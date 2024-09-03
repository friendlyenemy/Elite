          
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