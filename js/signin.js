function ViewPass(){
    var InputPass = document.getElementById('senha')
    if(InputPass.type === 'password'){
        InputPass.setAttribute('type', 'text')
    }
    else{
        InputPass.setAttribute('type', 'password')
    }
 }