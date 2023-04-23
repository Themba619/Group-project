
// const dropdowns = document.querySelectorAll('.dropdown'); //GET ALL DROPDOWNS FROM DOCUMENT
// //loops through all drop down elements
// dropdowns.forEach(dropdown => {
//     //gets inner elements from dropdown
//     const select = dropdown.querySelector('.select');
//     const caret = dropdown.querySelector('.caret');
//     const menu = dropdown.querySelector('.menu');
//     const options = dropdown.querySelectorAll('.menu li');
//     const selected = dropdown.querySelector('.selected');
//     //add click event to the selected element
//     select.addEventListener('click', () =>{
//         //add the clicked select styles to the select element
//         select.classList.toggle('select-clicked');
//         //add rotate styles to caret element
//         caret.classList.toggle('caret-rotate');
//         //add the open styles to the menu element
//         menu.classList.toggle('menu-open');
//     })
    
//     options.forEach(options =>{
//         options.addEventListener('click', () =>{
//             selected.innerHtml = Option.innerHtml;

//             select.classList.remove('select-clicked');

//             caret.classList.remove('caret-rotate');

//             menu.classList.remove('menu-open');

//             options.forEach(Option => {
//                 Option.classList.remove('active');
//             })

//             Option.classList.add('active');
//         })
//     })
// })
