<template>
  <div class="left fixed left-0 h-full w-1/10"></div>

  <div class="middle fixed top-0 left-auto w-3/10 h-full flex justify-center z-10 pt-5"></div>

  <div class="right fixed top-0 right-0 w-3/5 h-full z-10 pt-5">
    <div class="chat-container mx-auto my-12 p-5 border border-bg-secondary">
      <div class="message-history h-72 overflow-y-scroll">
        <!-- Example messages -->
        <div v-for="message in messages" :key="message.id" :class="messageClass(message)">
          {{ message.text }}
        </div>
      </div>
      <div class="message-input flex fixed bottom-5 left-1/2 transform -translate-x-1/2 w-3/5 h-10">
        <input
          v-model="newMessage"
          @keyup.enter="sendMessage"
          id="message-text"
          class="flex-1 p-2 border border-bg-secondary bg-bg-secondary text-white"
          type="text"
          placeholder="Type your message..."
        />
        <button @click="sendMessage" id="send-button" class="p-2 bg-bg-secondary text-white border-none cursor-pointer">
          Send
        </button>
      </div>
    </div>
  </div>

  <div class="centered absolute top-[38%] left-1/2 transform -translate-x-1/2 text-center">
    <img class="w-36 rounded-full" src="#" alt="Profile Image" />
  </div>
</template>

<script>
export default {
  data() {
    return {
      messages: [
        { id: 1, text: 'Sent Message', type: 'sent' },
        { id: 2, text: 'Received Message', type: 'received' },
      ],
      newMessage: '',
    };
  },
  methods: {
    sendMessage() {
      if (this.newMessage.trim()) {
        this.messages.push({ id: Date.now(), text: this.newMessage, type: 'sent' });
        this.newMessage = '';
        this.scrollToBottom();
      }
    },
    messageClass(message) {
      return {
        'message': true,
        'bg-bg-secondary': true,
        'text-right': message.type === 'sent',
        'text-left': message.type === 'received',
        'p-2': true,
        'mb-2': true,
        'rounded': true,
      };
    },
    scrollToBottom() {
      this.$nextTick(() => {
        const container = this.$el.querySelector('.message-history');
        container.scrollTop = container.scrollHeight;
      });
    },
  },
};
</script>

<style scoped>
/* Custom styles here if needed */
</style>


