function random(min, max) {return Math.floor((Math.random() * max) + min);}
document.getElementsByClassName("DOMContentLoaded", function () { update() });
setInterval(function () { update() }, 1000);
function update() {
    const items = document.getElementsByClassName("item");
    const l = items.length;
    const fc = 71;
    console.log(items);
    for(let i = 0; i < l; i++) {
        const r = random(-16, 16)+fc;
        var item = items[i];
        console.log(item);
        console.log(r);
        item.style.background = 'rgb(' + [r,r,r].join(',') + ')';
    }
}