// Menu Onclick
const shila_flex = document.getElementById('shila_flex');
const shila_flex_close = document.getElementById('shila_flex_close');
const shila_lef = document.getElementById('shila_lef');
shila_flex_close.addEventListener('click', function(){
    shila_flex.classList.add('flex100');
}); shila_lef.addEventListener('click', function(){
    shila_flex.classList.remove('flex100');
});

// Lazyload Image