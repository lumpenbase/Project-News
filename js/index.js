// Получаем все элементы меню
const menuItems = document.querySelectorAll('.nav-link');

// Добавляем обработчик события click для каждого элемента меню
menuItems.forEach(item => {
   item.addEventListener('click', () => {
      // Удаляем класс nav-link active text-white у всех элементов меню
      menuItems.forEach(item => {
         item.classList.remove('nav-link', 'active', 'text-white');
         item.classList.add('nav-link', 'text-black');
      });

      // Добавляем класс nav-link active text-white для нажатого элемента меню
      item.classList.add('nav-link', 'active', 'text-white');
   });
});