
var nav = document.querySelector('nav');

window.addEventListener('scroll', function()
{
    if(window.pageYOffset > 200)
    {
        nav.classList.add('customBg', 'shadow');
    }
    else
    {
        nav.classList.remove('customBg', 'shadow');
    }
});