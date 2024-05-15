// function toggleTheme() {
//     // Получаем текущий класс темы
//     const currentTheme = document.body.classList.contains("theme-dark") ? "theme-light" : "theme-dark";
  
//     // Добавляем класс текущей темы к элементу body
//     document.body.classList.add(currentTheme);
  
//     // Удаляем класс предыдущей темы
//     document.body.classList.remove(currentTheme === "theme-dark" ? "theme-light" : "theme-dark");
//   }
  
//   // Привязываем обработчик события к кнопке
//   document.getElementById("theme-toggle").addEventListener("click", toggleTheme);

let root = document.querySelector(':root');
let btn = document.querySelector('#themeToggle');

btn.addEventListener('click', () => {
    Event.preventDefault();
    root.classList.toggle('dark');
})