// script.js

const socket = io();

// Select DOM elements
const form = document.getElementById('form');
const input = document.getElementById('input');
const messages = document.getElementById('messages');

// Function to add a new message to the chat
function addMessage(message) {
    const item = document.createElement('li');
    item.textContent = message;
    messages.appendChild(item);
}

// Event listener for form submission
form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (input.value) {
        // Emit the message to the server
        socket.emit('chat message', input.value);
        input.value = '';
    }
});

// Event listener for receiving messages
socket.on('chat message', (msg) => {
    // Add the received message to the chat
    addMessage(msg);
});
