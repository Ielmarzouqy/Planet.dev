function message(){
    console.log("message");
var category = document.getElementById('category');
const success = document.getElementById('success');
const danger = document.getElementById('danger');

if(category.value === '' ){
danger.style.display = 'block';
}
else{
setTimeout(() => {
    category.value = '';

}, 2000);

success.style.display = 'block';
}


setTimeout(() => {
danger.style.display = 'none';
success.style.display = 'none';
}, 4000);

}