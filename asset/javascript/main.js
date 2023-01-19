function message(e){
    e.preventDefault();
    console.log("message");
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
success.style.display = 'none';
}, 4000);

}