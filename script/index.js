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