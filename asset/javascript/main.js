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
//  function addforme(){

//     // preventDefault();
//     divForm.innerHTML+= ` <div class="name">
//     <i class="fas fa-user"></i>
//     <input type="text" placeholder="Title" name="title" id="title[]">
//     </div>
//     <div class="name">
//     <i class="fas fa-user"></i>
//     <input type="file" placeholder="image" name="image" id="image">
//     </div>
//     <div class="name">
//     <i class="fas fa-user"></i>
//     <input type="text" placeholder="Description" name="description" id="description">
//     </div>
//     <div class="name "  >
//     <select name="category" id="category" class=" p-4 form-select form-select-lg rounded-pill mb-3" aria-label=".form-select-lg example">
//         <option selected>Choose a category</option>
//         <?php foreach($categories as $category)  :?>      
//         <option value=<?= $category['id_category']?>><?=$category['name'] ?></option>
//         <?php endforeach;?>
//     </select>
//     </div>
    
//     <div class="name border-radius ">
//     <i class="fas fa-user"></i>
//     <textarea class="form-control p-4" placeholder="Content" name="content" id="content"></textarea>
//     </div>` ;

// }

function addForm(){
    divForm.classList.remove('d-none');
}