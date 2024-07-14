let  menu = document.querySelector("#menu");
let  leftSide = document.querySelector(".admin-panel .left-side");

menu.onclick = () =>{
    leftSide.classList.toggle('active');
    menu.classList.toggle('fa-times');
}
 
