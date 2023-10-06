const checkBoxCategory = [...document.getElementsByClassName("checkbox-category")];
checkBoxCategory.forEach(check => {
    check.addEventListener("change", (e) => {
        if(e.target.checked){
            e.target.parentElement.classList.add("category-checked");
            console.log(e.target.parentElement);
        }
        else{
            e.target.parentElement.classList.remove("category-checked");
        }
    })
});

const ulCategory = document.getElementById("ul-category");
const liArray = [...ulCategory.querySelectorAll("li")];
liArray.forEach(li => {
    li.addEventListener("click", (e) => {
        e.stopPropagation();
        if(e.target.childNodes[1].checked){
            e.target.childNodes[1].checked = false;
            e.target.classList.add("category-checked");
        }
        else{
            e.target.childNodes[1].checked = true;
            e.target.childNodes[1].classList.remove("category-checked");
        }
    })
});