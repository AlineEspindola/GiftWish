const search = document.getElementById("exampleInputEmail1");
const items = document.getElementById("items");
const animatedItems = document.querySelectorAll(".animate__animated");
const checkerInvisible = document.getElementById("checkerInvisible");

search.focus();

search.addEventListener("keypress", function(e){
    if (e.key == "Enter"){
        var str = window.location.search;
        array = (str.split("&"));
        window.location.search = (array[0] += `&search=${search.value}`);
    }
})

removeAnimation();

function removeAnimation(){
    if(checkerInvisible.value){
        for(i = 0; i <= animatedItems.length; i++){
            console.log("<3")
            animatedItems[i].classList.remove("animate__animated");
        }
    }
}


