let btnClick = document.querySelector("#btnClick");
let showField = document.querySelector("#showNameField");
let boolean = false;
$stringFromPHP = null;

btnClick.style.cursor = 'pointer';
btnClick.addEventListener('click', () => {
    boolean = !boolean;
    if (boolean) {
        usingAjax('functions.php', 'getUserDetails');
    } else {
        showField.textContent = "";
    }
})

function getResponse(fileName, methodName) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', fileName);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status === 200 && xhr.responseText) {
            var user = xhr.responseText;
            showField.textContent = user;
        }
    };
    xhr.send('action=' + methodName);
}

//include jquery script 
//use this to send data and call a php method
function usingAjax(filepath,methodName){
    $.ajax({
        url:filepath,
        type:"POST",
        dataType:"JSON",
        data:{action:methodName, name : "Using Ajax Name"},
        success:function(result){
            console.log(result);
            showField.textContent = result
        },
    })
}
// btnClick.addEventListener('mouseover', ()=>{
//     btnClick.textContent = "Hovered"
// })
// btnClick.addEventListener('mouseout', ()=>{
//     btnClick.textContent = "Mouse out";
// })
