// alert("alert")
// console.log(confirm("confirm"))
// console.log(prompt("prompt"))
function losuj(min, max=100){
    var liczba = Math.round(Math.random()*(max-min)+min);
    alert(liczba)
}