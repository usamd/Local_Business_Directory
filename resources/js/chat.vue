<template>
<div class = "bg-[#15202B] border-v border-gray-300 fixed top-0 w-full shadow ">
  <div class="lg:container mx-auto p-4">
    <div class ="grid grid-cols-3 gap-4">
        <div class="col-span-1 min-w-[250px]">
          <div class="flex item-center justify-between">
            <div class="flex item-center">
              <img :src="fileLink('c1.jpg')" class="w-12 h-12 rounded-full border-2 border-green-400" alt="prof_image">
              <span class ="font-semibold text-white pl-4">Sameeraa Dilshani</span>
            </div>
            <div class="relative inline-block text-left group">
              <three-dots-icon class="w-5 h-12" ></three-dots-icon>
              <div class="origin-top-right absolute left-150 w-500 rounded-md shadow-ld bg-green-500 ring-1 ring-black ring-opacity-5 z-5 hidden group-hover:block">
                <div class="py-3">
                  <a href="" class="block py-1 px-5 hover:bg-blue-700 text-black font-bold hover:text-gray-900" cursor-pointer >Profile</a>
                  <a href="" class="block py-1 px-5 hover:bg-blue-700 text-black font-bold hover:text-gray-900" cursor-pointer >Settings</a>
                </div>
              </div>


            </div>
          </div>
        </div>
        <div class="col-span-2 text-right">
          <button class="bg-green-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded" @click="logout">Logout</button>
        </div>
    </div>
  </div>
</div>
</template>

<script>
import ThreeDotsIcon from "@/component/ThreeDotsIcon.vue";

export default{
  name: 'chatapp',
  components:{ ThreeDotsIcon },
  methods:{
    logout() {
      console.log('logout');
    },
    fileLink(file){
      return 'http://127.0.0.1:8000/assest/' + file; //or we can put '/assest/'+file
    }

  }
}
</script>

<style scoped>
/* Custom styles here if needed */
</style>
