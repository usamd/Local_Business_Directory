<template>
  <!-- header section for chatapp -->
<div class = "bg-[#15202B] border-v border-gray-300 fixed top-0 w-full shadow ">
  <div class="lg:container mx-auto p-4">
    <div class ="grid grid-cols-3 gap-4">
        <div class="col-span-1 min-w-[250px]">
          <div class="flex item-center justify-between">
            <div class="flex item-center">

              <img :src="fileLink('c7.jpg')" class="w-12 h-12 rounded-full border-2 border-green-400" alt="prof_image">
              <span class ="font-semibold text-white pl-5 pt-2">sameera</span>
            </div>
            <!-- three dots and dot_popup menu -->
            <!-- <div class="relative inline-block text-left group">
              <three-dots-icon class="w-5 h-12" ></three-dots-icon>
              <div class="origin-top-right absolute left-150 w-500 rounded-md shadow-ld bg-green-500 ring-1 ring-black ring-opacity-5 z-5 hidden group-hover:block">
                <div class="py-3">
                  <a href="/profile" class="block py-1 px-5 hover:bg-blue-700 text-black font-bold hover:text-gray-900" cursor-pointer >Profile</a>
                  <a href="#" class="block py-1 px-5 hover:bg-blue-700 text-black font-bold hover:text-gray-900" cursor-pointer >Settings</a>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <!-- logout button -->
        <div class="col-span-2 text-right">
          <a href="/user/dashboard" class="p-2 pl-0 mr-1 pr-1"><button class="bg-green-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Back</button></a>
          <a href="/settings" class="p-2 pl-0 mr-1 pr-1"><button class="bg-green-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Settings</button></a>
          <button class="bg-green-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded" @click="logout">Logout</button>
        </div>
    </div>
  </div>
</div>

<div class="lg:container mx-auto mt-[90px] px-4 mb-4">
  <div class ="grid grid-cols-3 gap-4">
    <div class="col-span-1 min-w-[300px] bg-[#15202B] p-4 shadow-md rounded-md">
        <!-- chat Search -->
         <input type ="text" placeholder="search" class="w-full p-2 rounded-md border border-green-300 focus:outline-none focus:ring focus:border-green-500 mb-4" >
        <!-- chat list -->

        <div class="max-h-96 overflow-y-auto">
    <div v-for="user in users" :key="users.id" class="flex p-2 items-center mb-3 cursor-pointer rounded bg-gray-800">
        <div class="relative">
            <img :src="user.avatar ? fileLink(user.avatar) : fileLink('default-avatar.jpg')" class="w-12 h-12 rounded-full border-2 border-green-400" :alt="user.name">
            <div class="absolute h-3 w-3 bg-green-500 rounded-full -top-1.5 -left-1.5 ml-2"></div>
        </div>
        <div class="ml-3 text-white">

            <p class="font-semibold">{{ user.name }}</p>
            <p class="text-gray-500">{{ user.email }}</p>
        </div>
    </div>
</div>
        </div>
    <div class="col-span-2 bg-[#15202B] shadow-md rounded-md">

      <div v-if="isChatOpen">

        <!-- Chat Header -->
        <div class="flex items-center justify-between mb-4 bg-gray-900 px-4 pt-4 pb-2 rounded-tl-md rounded-tr-md ">
          <div class="flex items-center ">
            <img :src="fileLink('c7.jpg')" class="w-12 h-12 rounded-full border-2 border-white-400" alt="user_image">
            <div class="ml-3">
                <p class="font-semibold text-white">User 0</p>
                <p class="text-gray-500">hello</p>
            </div>
          </div>
          <div class="relative inline-block text-left group">
              <three-dots-icon class="w-5 h-12" ></three-dots-icon>
              <div class="origin-top-right absolute right-0 w-40 rounded-md shadow-ld bg-green-500 ring-1 ring-black ring-opacity-5 z-5 hidden group-hover:block">
                <div class="py-1">
                  <a href="#" class="block py-1 px-4 text-sm text-black-700 hover:bg-blue-700 hover:text-gray-900" cursor-pointer >Close-Chat</a>
                  <a href="#" class="block py-1 px-4 text-sm text-black-700 hover:bg-blue-700 hover:text-gray-900" cursor-pointer >ClearAll</a>
                </div>
              </div>
            </div>

        </div>



        <!-- chat body -->
        <div class="overflow-y-auto h-64 min-h[19rem] px-4">
          <div class="flex items-center mb-4">
            <img :src="fileLink('c7.jpg')" class="w-6 h-6 rounded-full border-2 border-white mr-1" alt="user">
            <div class="relative group text-sm py-2 px-auto px-max-7 p-2 shadow bg-gray-400 rounded-md max-w-xs">
              Lorem ipsum dolor sit amet, consectetur
            <div class="absolute top-1/2 -translate-y-1/2 bg-gray-600 py-1 px-1.5 rounded z-50 text-white left-full ml-1 hidden group-hover:block w-max">12.00</div>

            </div>
            <!-- <three-dots-icon class="w-4 h-4" cursor-pointer></three-dots-icon> -->
          </div>

          <div class="flex items-center justify-end mb-4">
            <!-- <three-dots-icon class="w-8 h-4" cursor-pointer></three-dots-icon> -->
            <div class="relative group text-sm text-white py-2 px-auto p-2 px-max-7 shadow bg-green-900 rounded-md max-w-xs mr-1 ml-1">
              Lorem ipsum dolor sit amet, consectetur a
              <div class="absolute top-1/2 -translate-y-1/2 bg-gray-600 py-1 px-1.5 rounded z-50 text-white right-full mr-1 hidden group-hover:block w-max">12.00</div>
            </div>
            <img :src="fileLink('c1.jpg')" class="w-6 h-6 rounded-full border-2 border-white mr-1" alt="user">


          </div>


        </div>



        <!-- sending messages -->
        <div class="flex items-center bg-white p-4 rounded-bl-md rounded-br-md">
          <input type ="text" placeholder="Type your message" class="w-full p-2 rounded-md border border-green-300 focus:outline-none focus:ring focus:border-green-500" >
          <button class="bg-blue-600 text-white px-4 py-2 rounded-md disabled:bg-gray-400 ml-2" @click="sendMessage">Send</button>

        </div>
      </div>


        <div v-else class="flex flex-col items-center justify-center min-h-[19rem]">
          <img :src ="fileLink('chatBG.png')" alt="backgroundLogo">
          <p class="text-2xl font-semibold mt-4 text-white">BizNest Messenger</p>
          <p class="text-gray-500">Select a chat to start messaging</p>
        </div>
    </div>
  </div>

</div>

</template>

<script>
import axios from 'axios';
import ThreeDotsIcon from "@/component/ThreeDotsIcon.vue";

export default {
  name: 'chatapp',
  components: { ThreeDotsIcon },
  data() {
    return {
      message: 'bhvvngv',
      isChatOpen: true,
      allMessages: [],
      users: [],
      user: {
          name: '',
          avatar: '',
        },
    }
  },
  created(){
        this.fetchUsers();
        this.fetchUserData();
  },
  methods: {
    logout() {
      axios.post('/logout')
        .then(response => {
          console.log('Logged out successfully');
          window.location.href = '/login';
        })
        .catch(error => {
          console.error('Logout failed', error);
        });
    },
    sendMessages() {
      if (!this.message) {
        return alert('Empty! Please enter the message');
      }

      this.allMessages.push(this.message);
      axios.post('/chat', { message: this.message })
        .then(response => {
          console.log('send successfully');
        })
        .catch(error => {
          console.error('Failed to send message', error);
        });
    },

    fetchUsers() {
      axios.get('/users')
        .then(response => {
          this.users = response.data;
        })
        .catch(error => {
          console.error('Failed to fetch users', error);
        });
    },

    fetchUserData() {
        axios.get('/userdetails')
          .then(response => {
            this.user = response.data;
            this.newUsername = this.user.name;
          })
          .catch(error => {
            console.error('Failed to fetch user data', error);
          });
      },

    fileLink(file) {
      return `http://127.0.0.1:8000/assets/${file}`;
    },
}};



</script>

<style scoped>
/* Custom styles here if needed */
</style>
