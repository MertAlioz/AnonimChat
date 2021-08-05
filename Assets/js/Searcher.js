const checkConnect = (args1) => {
    if(args1){
        console.log("true")
    }
}

let count = 1;
const GetConnectData = () => {

if(count == 10){
    return checkConnect(true)

}
else{
    count++
    return checkConnect(false)

}
}


setInterval(GetConnectData, 1000);

