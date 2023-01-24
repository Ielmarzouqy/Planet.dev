let addBtn = document.getElementById('second');
let input = document.getElementById('input');
addBtn.addEventListener("click",event=>{
    secondForm();
})
   
function validateInputs(){
const error = document.getElementById('error');
 if(input.value = ''){
    error.style.display = 'block';
 }else{
    error.style.display = 'none';
    input.classList.add('success');
 }

}
validateInputs();

function message(e){
    // console.log("message");
var category = document.getElementById('category');
const success = document.getElementById('success');
const danger = document.getElementById('danger');

if(category.value === '' ){
danger.style.display = 'block';
}
else{
    success.style.display = 'block';
    setTimeout(() => {
        category.value = '';
    }, 2000);
}
setTimeout(() => {
danger.style.display = 'none';
}, 40000);
success.style.display = 'none';

}