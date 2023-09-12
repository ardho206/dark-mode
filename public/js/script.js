const button = document.getElementById('themeToggle');
const img = document.querySelector('.img-brand');
const icon = button.querySelector('i');
const navbar = document.querySelector('.navbar');
const checkInput = document.querySelectorAll('.input-nominal');

const allContents = document.querySelectorAll('.game, .aplikasi, .jasa-joki');

const contentButtons = {
    'game': document.querySelector('.btn-game'),
    'aplikasi': document.querySelector('.btn-apl'),
    'jasa-joki': document.querySelector('.btn-jasa')
};

document.addEventListener('click', function(event) {
    const target = event.target;

    if (target.id === 'darkThemeButton') {
        localStorage.setItem('theme', 'dark');
        applyTheme('dark');
    } else if (target.id === 'lightThemeButton') {
        localStorage.setItem('theme', 'light');
        applyTheme('light');
    }

});

function applyTheme(theme) {
    document.body.setAttribute('data-bs-theme', theme);
    const isDarkTheme = theme === 'dark';

    icon.classList.toggle('bi-sun-fill', !isDarkTheme);
    icon.classList.toggle('bi-moon-stars-fill', isDarkTheme);
    button.classList.toggle('btn-outline-dark', !isDarkTheme);
    button.classList.toggle('btn-outline-light', isDarkTheme);
    img.src = isDarkTheme ? '../img/k1.png' : '../img/k2.png';
}


document.addEventListener('DOMContentLoaded', function() {
    const storedTheme = localStorage.getItem('theme') || 'light';
    applyTheme(storedTheme);
});

window.addEventListener('scroll', function() {
    if (window.scrollY > 150) {
        navbar.classList.add('transparent');
    } else {
        navbar.classList.remove('transparent');
    }
});

function showContent(content) {

    allContents.forEach(element => {
        element.classList.remove('active-content');
    });

    const selectedContent = document.querySelector('.' + content);
    selectedContent.classList.add('active-content');

    if (content === 'game') {
        contentButtons['aplikasi'].classList.remove('active');
        contentButtons['jasa-joki'].classList.remove('active');
        contentButtons['game'].classList.add('active');
    } else if (content === 'aplikasi') {
        contentButtons['game'].classList.remove('active');
        contentButtons['jasa-joki'].classList.remove('active');
        contentButtons['aplikasi'].classList.add('active');
    } else if (content === 'jasa-joki') {
        contentButtons['game'].classList.remove('active');
        contentButtons['aplikasi'].classList.remove('active');
        contentButtons['jasa-joki'].classList.add('active');
    } else {
        alert('kontlooo');
    }
}

checkInput.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        const buttonFormCheck = this.closest('.form-check');
        if (buttonFormCheck) {
            if (this.checked) {
                buttonFormCheck.classList.add('active');
            } else {
                buttonFormCheck.classList.remove('active');
            }
        }
    });
});
