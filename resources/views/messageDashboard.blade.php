<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Messenger App</title>
  <link rel="stylesheet" href="{{asset('css/new.css')}}"> 
  <style>
    body {
  font-family: poppins;
  background-color: #15202B;
  color: #00FF00;
}
input { 
  background-color: #113D2C; 
} 

.chat-container {
  width: 600px;
  margin: 50px auto;
  border: 1px solid #113D2C;;
  padding: 20px;
}

.message-history {
  height: 300px;
  overflow-y: scroll;
}

.message {
  padding: 10px;
  margin-bottom: 10px;
  border-radius: 5px;
}


.message.sent {
  background-color: #113D2C;;
  text-align: right;
}

.message.received {
  background-color: #113D2C;;
  text-align: left;
}

.message-input {
  display: flex;
  position: absolute;
  top: 95%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 60%;
  height: 5%;
}

#message-text {
  flex: 1;
  padding: 10px;
  border: 1px solid #113D2C;;
  color: white;
}

#send-button {
  padding: 10px 20px;
  background-color: #113D2C;
  color: white;
  border: none;
  cursor: pointer;
}

.left{
  left: 0%;
  height: 100%;
  width: 10%;
  position: fixed;
}

.middle {
  left: auto;
  width: 30%;
  height: 100%;
  display: flex;
  position: fixed;
  justify-content: center;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
  }

.right {
  right: 0;
  height: 100%;
  width: 60%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.centered {
  position: absolute;
  top: 38%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}


.centered img {
  width: 150px;
  border-radius: 50%;
}


  </style>
</head>
<body> 

  <div class="left">
    <div class="centered">
      <img src="" alt="Avatar men"> 
      <h2>Jane Flex</h2>
      <p>Some text.</p>
      <a href="route('profile.edit')"><button>Setting</button></a><br> <!-- Link to message page -->

    </div>
  </div>
  
  <div class="middle">
    <h2>Messages</h2>
  </div>

  <div class="right">
    <div class="header">
      <h2>Christoper nolan</h2>
    </div>
    <div class="message-history">
      
    </div>
    <div class="message-input">
      <input type="text" id="message-text" placeholder="Type your message">
      <button id="send-button">Send</button>
    </div>
  </div>

</body>
</html>
