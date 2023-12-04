const search = document.getElementById("exampleInputEmail1");
const items = document.getElementById("items");

search.focus();

search.addEventListener("keypress", function(e){
    if (e.key == "Enter"){
        var str = window.location.search;
        array = (str.split("&"));
        window.location.search = (array[0] += `&search=${search.value}`);
    }
})


