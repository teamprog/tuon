// // Create a "close" button and append it to each list item
// var myNodelist = document.getElementsByTagName("LI");
// var i;
// for (i = 0; i < myNodelist.length; i++) {
//   var span = document.createElement("SPAN");
//   var txt = document.createTextNode("\u00D7");
//   span.className = "close";
//   span.appendChild(txt);
//   myNodelist[i].appendChild(span);
// }

// // Click on a close button to hide the current list item
// var close = document.getElementsByClassName("close");
// var i;
// for (i = 0; i < close.length; i++) {
//   close[i].onclick = function() {
//     var div = this.parentElement;
//     div.style.display = "none";
//   }
// }

// // Add a "checked" symbol when clicking on a list item
// var list = document.querySelector('ul');
// list.addEventListener('click', function(ev) {
//   if (ev.target.tagName === 'LI') {
//     ev.target.classList.toggle('checked');
//   }
// }, false);

// // Create a new list item when clicking on the "Add" button
// function newElement() {
//   var li = document.createElement("li");
//   var inputValue = document.getElementById("myInput").value;
//   var t = document.createTextNode(inputValue);
//   li.appendChild(t);
//   if (inputValue === '') {
//     alert("You must write something!");
//   } else {
//     document.getElementById("myUL").appendChild(li);
//   }
//   document.getElementById("myInput").value = "";

//   var span = document.createElement("SPAN");
//   var txt = document.createTextNode("\u00D7");
//   span.className = "close";
//   span.appendChild(txt);
//   li.appendChild(span);

//   for (i = 0; i < close.length; i++) {
//     close[i].onclick = function() {
//       var div = this.parentElement;
//       div.style.display = "none";
//     }
//   }
// }

// This is the array that will hold the todo list items
let todoItems = [];

// This function will create a new todo object based on the text that was entered in the text input, and push it into the `todoItems` array
function addTodo(text){
  const todo = {
    text,
    checked: false,
    id: Date.now(),
  };
  todoItems.push(todo);
  renderTodo(todo);
}

// When a click event occurs on the list, a check is done to ensure that the element that was clicked is a checkbox.
function toggleDone(key){
  // findIndex is an array method that returns the position of an element in the array.
  const index = todoItems.findIndex(item => item.id === Number(key));
  // Locate the todo item in the todoItems array and set its checked property to the opposite. That means, `true` will become `false` and vice versa.
  todoItems[index].checked = !todoItems[index].checked;
  renderTodo(todoItems[index]);
}

function deleteTodo(key){
  // find the corresponding todo object in the todoItems array
  const index = todoItems.findIndex(item => item.id === Number(key));
  // Create a new object with properties of the current todo item and a `deleted` property which is set to true
  const todo = {
    deleted: true,
    ...todoItems[index]
  };
  // remove the todo item from the array by filtering it out
  todoItems = todoItems.filter(item => item.id !== Number(key));
  renderTodo(todo); 
}

// To render the item on the screen
function renderTodo(todo){
  // Persist the application state
  localStorage.setItem('todoItemsRef', JSON.stringify(todoItems));

  // Select the first element with a class of `js-todo-list`
  const list = document.querySelector('.js-todo-list');
  // select the current todo item in the DOM
  const item = document.querySelector(`[data-key='${todo.id}']`);

  if(todo.deleted){
    item.remove();
    // to clear whitespace from the list container when `todoItems` is empty
    if (todoItems.length === 0) list.innerHTML = '';
    return
  }

  // Use the ternary operator to check if `todo.checked` is true
  const isChecked = todo.checked ? 'done' : '';
  // Create an `li` element and assign it to `node`
  const node = document.createElement("li");
  // Set the class attribute
  node.setAttribute('class', `todo-item ${isChecked}`);
  // Set the data-key attribute to the id of the todo
  node.setAttribute('data-key', todo.id);
  // Set the contents of the `li` element created above
  node.innerHTML = `
    <input id="${todo.id}" type="checkbox"/>
    <label for="${todo.id}" class="tick js-tick"></label>
    <span>${todo.text}</span>
    <button class="delete-todo js-delete-todo">
      <svg><use href="#delete-icon"></use></svg>
    </button>
  `;
  
  // If the item already exists in the DOM
  if(item){
    // replace it
    list.replaceChild(node, item);
  }else{
    // Append the element to the DOM as the last child of the element referenced by the `list` variable
    list.append(node);
  }
}

// Select the form element
const form = document.querySelector('.js-form');
// Add a submit event listener
form.addEventListener('submit', event => {
  // prevent page refresh on form submission
  event.preventDefault();
  // select the text input
  const input = document.querySelector('.js-todo-input');

  // Get the value of the input and remove whitespace
  const text = input.value.trim();
  if(text !== ''){
    addTodo(text);
    input.value = '';
    input.focus();
  }
});

// Mark a task as completed
const list = document.querySelector('.js-todo-list');
// Add a click event listener to the list and its children
list.addEventListener('click', event => {
  if(event.target.classList.contains('js-tick')){
    const itemKey = event.target.parentElement.dataset.key;
    toggleDone(itemKey);
  }

  // Detect when the delete button is clicked
  if(event.target.classList.contains('js-delete-todo')){
    const itemKey = event.target.parentElement.dataset.key;
    deleteTodo(itemKey);
  }
});

// To render any existing todo list items when the page is loaded.
document.addEventListener('DOMContentLoaded', () => {
  const ref = localStorage.getItem('todoItemsRef');
  if(ref){
    todoItems = JSON.parse(ref);
    todoItems.forEach(t => {
      renderTodo(t);
    });
  }
});