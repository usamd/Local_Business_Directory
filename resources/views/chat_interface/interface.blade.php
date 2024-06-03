<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Messenger App</title>
  <link rel="stylesheet" href="D:/Project/BizNest/biznest_chatapp/Local_Business_Directory/resources/css/interface.css">
</head>
<body bgcolor="#adadda">

  <div class="left">
    <div class="centered">
      <img src="{{ asset('img/img.jpg') }}" alt="Avatar men">
      <h2>Jane Flex</h2>
      <p>Some text.</p>
      <button>Message</button><br>
      <button>Setting</button>
    </div>
  </div>
  
  <div class="middle">
      <h2>Messages</h2>
  </div>

  <div class="right">
    <div class="header">
      <h2>Christopher Nolan</h2>
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
