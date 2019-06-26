document.getElementById('select-city').onchange=function () {
    ChooseCity();
};
function ChooseCity() {
    let timeZone=document.getElementById("select-city");
    window.location.href=timeZone.value;
}
