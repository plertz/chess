var username = document.getElementsByTagName('input')[0]; 
console.log(username); 
console.log("hello");

document.addEventListener("onkeyup", (e) => {
   console.log(e.keyCode);
})

function hello() {
    console.log("hello");
}