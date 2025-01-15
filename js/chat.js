let selectedRoom = '';
let username = '';

function selectRoom(room) {
    selectedRoom = room;
    document.getElementById('room-selection').style.display = 'none';
    document.getElementById('chat-container').style.display = 'block';
    document.getElementById('room-name').textContent = `You are in ${room}`;
    fetchMessages();
}

document.getElementById('join-chat').addEventListener('click', () => {
    username = document.getElementById('username').value.trim();
    if (!username) {
        alert('Please enter your name!');
        return;
    }
    document.getElementById('join-chat').style.display = 'none';
    document.getElementById('chat-box').style.display = 'block';
});

document.getElementById('send-message').addEventListener('click', () => {
    const messageInput = document.getElementById('message-input');
    const message = messageInput.value.trim();
    if (!message) return;

    fetch('../data/save_message.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `room=${selectedRoom}&username=${username}&message=${message}`
    }).then(() => {
        fetchMessages();
    });

    messageInput.value = '';
});

function fetchMessages() {
    fetch(`../data/fetch_messages.php?room=${selectedRoom}`)
        .then(response => response.json())
        .then(messages => {
            const messagesContainer = document.getElementById('messages');
            messagesContainer.innerHTML = '';
            messages.forEach(msg => {
                const messageElement = document.createElement('div');
                messageElement.textContent = `${msg.username}: ${msg.message}`;
                messagesContainer.appendChild(messageElement);
            });
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        });
}

setInterval(fetchMessages, 2000);
