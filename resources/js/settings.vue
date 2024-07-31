<template>
    <div class="bg-[#15202B] min-h-screen">
      <!-- Header section -->
      <div class="bg-[#15202B] border-b border-gray-300 fixed top-0 w-full shadow">
        <div class="lg:container mx-auto p-4">
          <div class="grid grid-cols-3 gap-4">
            <div class="col-span-1 min-w-[250px]">
              <div class="flex items-center">
                <img :src="fileLink(user.avatar || 'default-avatar.jpg')" class="w-12 h-12 rounded-full border-2 border-green-400" alt="profile_image">
                <span class="font-semibold text-white pl-5 pt-2">{{ user.name }}</span>
              </div>
            </div>
            <div class="col-span-2 text-right">
              <a href="/user/dashboard" class="p-2 pl-0 mr-1 pr-1">
                <button class="bg-green-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Dashboard</button>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Settings content -->
      <div class="lg:container mx-auto mt-[90px] px-4 mb-4">
        <div class="bg-[#15202B] p-4 shadow-md rounded-md">
          <h2 class="text-2xl font-bold text-white mb-6">User Settings</h2>

          <!-- Profile Image -->
          <div class="mb-6">
            <label class="block text-white text-sm font-bold mb-2" for="profile-image">
              Profile Image
            </label>
            <div class="flex items-center">
              <img :src="fileLink(previewImage || user.avatar || 'default-avatar.jpg')" class="w-20 h-20 rounded-full border-2 border-green-400 mr-4" alt="profile_image">
              <input type="file" id="profile-image" @change="handleImageUpload" accept="image/*" class="hidden">
              <label for="profile-image" class="bg-green-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded cursor-pointer">
                Upload New Image
              </label>
            </div>
          </div>

          <!-- Username -->
          <div class="mb-6">
            <label class="block text-white text-sm font-bold mb-2" for="username">
              Username
            </label>
            <input v-model="newUsername" id="username" type="text" class="w-full p-2 rounded-md border border-green-300 focus:outline-none focus:ring focus:border-green-500 bg-gray-700 text-white">
          </div>

          <!-- Save Button -->
          <button @click="saveSettings" class="bg-green-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
            Save Changes
          </button>
        </div>
      </div>
    </div>
  </template>

  <script>
  import axios from 'axios';

  export default {
    name: 'settings',
    data() {
      return {
        user: {
          name: '',
          avatar: '',
        },
        newUsername: '',
        previewImage: null,
        newImageFile: null,
      };
    },
    mounted() {
      this.fetchUserData();
    },
    methods: {
      fetchUserData() {
        axios.get('/api/user')
          .then(response => {
            this.user = response.data;
            this.newUsername = this.user.name;
          })
          .catch(error => {
            console.error('Failed to fetch user data', error);
          });
      },
      handleImageUpload(event) {
        const file = event.target.files[0];
        if (file) {
          this.newImageFile = file;
          this.previewImage = URL.createObjectURL(file);
        }
      },
      saveSettings() {
        const formData = new FormData();
        formData.append('name', this.newUsername);
        if (this.newImageFile) {
          formData.append('avatar', this.newImageFile);
        }

        axios.post('/api/user/update', formData, {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        })
          .then(response => {
            console.log('Settings updated successfully');
            this.user = response.data;  // Update user data with the response
          })
          .catch(error => {
            console.error('Failed to update settings', error);
          });
      },
      fileLink(file) {
        return `http://127.0.0.1:8000/assets/${file}`;
      },
    }
  }
  </script>

  <style scoped>
  /* Custom styles here if needed */
  </style>
