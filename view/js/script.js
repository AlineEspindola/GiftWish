const search = document.getElementById("exampleInputEmail1");
const items = document.getElementById("items");
const animatedItems = document.querySelectorAll(".animate__animated");
const checkerInvisible = document.getElementById("checkerInvisible");
const descriptions = document.querySelectorAll("#description");

search.focus();

search.addEventListener("keypress", function(e){
    if (e.key == "Enter"){
        var str = window.location.search;
        array = (str.split("&"));
        window.location.search = (array[0] += `&search=${search.value}`);
    }
})

function removeAnimation(){
    if(checkerInvisible.value){
        for(i = 0; i <= animatedItems.length; i++){
            animatedItems[i].classList.remove("animate__animated");
        }
    }
}

removeAnimation();

function limitCharacters(descriptions){
    for(var i = 0; i < descriptions.length; i++){
        var characters = descriptions[i].innerHTML.split('');
        var finalDescription = '';

        for(var j = 0; j < characters.length; j++){
            finalDescription += characters[j];

            if(j == 24){
                break;
            }
        }
 
        finalDescription += '...';
        descriptions[i].innerHTML = finalDescription;
    }
}

limitCharacters(descriptions);


