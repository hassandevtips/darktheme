const htmlElement = document.querySelector('html');

function toggleTheme(theme) {
    const body = document.body;
    if (theme === 'dark') {
        htmlElement.setAttribute('data-bs-theme', 'dark');
        body.classList.add('dark-mode');
        localStorage.setItem('theme', 'dark');
    } else {
        body.classList.remove('dark-mode');
        htmlElement.removeAttribute('data-bs-theme');
        localStorage.setItem('theme', 'light');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const themePreference = localStorage.getItem('theme');
    if (themePreference === 'dark') {
        document.body.classList.add('dark-mode');
        htmlElement.setAttribute('data-bs-theme', 'dark');
    }
});
