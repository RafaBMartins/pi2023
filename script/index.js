const checkBoxCategory = [...document.getElementsByClassName("checkbox-category")];
checkBoxCategory.forEach(check => {
    check.addEventListener("change", (e) => {
        if(e.target.checked){
            e.target.parentElement.children[0].classList.add("category-checked");
        }
        else{
            e.target.parentElement.children[0].classList.remove("category-checked");
        }
    })
});