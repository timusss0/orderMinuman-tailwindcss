<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>order -tailwind</title>
</head>
<body>
  <h1 class="text-5xl font-semibold text-center m-7 bg-gradient-to-bl from-blue-600 to-purple-50 text-transparent bg-clip-text animate-bounce">
  Starbucks Mini
</h1>
<h1 class=" text-lg text-center animate-pulse">Silahkan order</h1>

<div class="container mx-auto p-[25px] m-5">
 <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 m-5">
   <div class="bg-white rounded-t-lg shadow-2xl p-4 m-5 w-80 md:w-50 lg:w-100 rounded-lg transition-shadow transform hover:shadow-lg">
       <img src="img/drink1.jpeg" class="w-full rounded-lg m-1" alt="">
       <h2 class="text-xl font-semibold">Frappuccino Green Tea </h2>
       <p class="text-gray-600 mb-4">Menu Starbucks satu ini terbuat dari kombinasi antara susu, green tea,  dan es batu yang diblender. Orang yang tidak menyukai kopi lebih sering memesan menu Starbuck ini. </p>
       <button onclick="order('Frappuccino Green Tea Creme  :Rp 75.000' , 75000)" class="bg-indigo-500 rounded-md p-2 text-white btn-pesan" >Pilih Minuman</button>
   </div>
 
   <div class="bg-white rounded-t-lg shadow-2xl p-4 m-5 w-80 md:w-50 lg:w-100 rounded-lg transition-shadow transform hover:shadow-lg">
       <img src="img/drink4.jpg" class="w-full rounded-lg m-1 " alt="">
       <h2 class="text-xl font-semibold">Vanilla Latte</h2>
       <p class="text-gray-600 mb-4">Vanilla Latte terbuat dari perpaduan espresso, susu, dan sirup vanilla. Rasanya seimbang antara pahit dari kopi dan manis dari sirup vanilla</p>
       <button onclick="order('Vanilla Latte :Rp 50.000' , 50000)" class="bg-indigo-500 rounded-md p-2  text-white btn-pesan" >Pilih Minuman</button>
   </div>
 
 
   <div class="bg-white rounded-t-lg shadow-2xl p-4 m-5 w-80 md:w-50 lg:w-100 rounded-lg transition-shadow transform hover:shadow-lg">
       <img src="img/drink5.jpg" class="w-full rounded-lg m-1" alt="">
       <h2 class="text-xl font-semibold">Caffe Americano</h2>
       <p class="text-gray-600 mb-4"> Espresso cenderung mengeluarkan rasa kopi seutuhnya (bisa pahit, sedikit manis buah, atau asam kecut) dan punya cita rasa kuat.</p>
       <button onclick="order('Americano :Rp 60.000' , 60000)" class="bg-indigo-500 rounded-md p-2 text-white btn-pesan" >Pilih Minuman</button>
   </div>
 </div>
</div>

 

<div class="container mx-auto p-[25px] m-5">
<div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 m-5">
  <div class="bg-white rounded-t-lg shadow-2xl  p-4 m-5 w-80 md:w-50 lg:w-100 rounded-lg transition-shadow transform hover:shadow-lg">
      <img src="img/drink5.jpg" class="w-full rounded-lg m-1" alt="">
      <h2 class="text-xl font-semibold"> Cold Brew</h2>
      <p class="text-gray-600 mb-4"> Cold brew adalah kopi hitam yang rasanya lebih ringan dan manis meski tanpa gula. Kopi ini dibuat dengan teknik mencampur bubuk kopi dengan air bersuhu ruangan, bukan air panas. </p>
      <button onclick="order(' Cold Brew :Rp 86.000' , 86000)" class="bg-indigo-500 rounded-md p-3 text-white btn-pesan" >Pilih Minuman</button>
  </div>

  <div class="bg-white rounded-t-lg shadow-2xl  p-4 m-5  w-80 md:w-50 lg:w-100 rounded-lg transition-shadow transform hover:shadow-lg">
      <img src="img/drink6.jpg" class="w-full rounded-lg m-1 " alt="">
      <h2 class="text-xl font-semibold">Frappuccino Cotton Candy</h2>
      <p class="text-gray-600 mb-4">Frappuccino Cotton Candy termasuk secret menu, namun karena rasanya yang unik dan enak banyak orang yang mengetahui dan menjadikannya sebagai minuman Starbucks terfavorit.</p>
      <button onclick="order('Americano :Rp 45.000' , 45000)" class="bg-indigo-500 rounded-md p-2  text-white btn-pesan" >Pilih Minuman</button>
  </div>


  <div class="bg-white rounded-t-lg shadow-2xl  p-4 m-5 w-80 md:w-50 lg:w-100 rounded-lg transition-shadow transform hover:shadow-lg">
      <img src="img/drink4.jpg" class="w-full rounded-lg m-1" alt="">
      <h2 class="text-xl font-semibold">Asian Dolce Latte</h2>
      <p class="text-gray-600 mb-4">terbuat dari doubleshot dark roasted coffee, saus dolce, steamed milk, dan whipped cream yang terbuat dari espresso. Rasanya yang unik dan sudah disesuaikan dengan lidah asia. Minuman ini cocok untuk kamu yang suka dengan strong namun tetap manis</p>
      <button onclick="order('Asian Dolce Latte :Rp 45.000', 45000)" class="bg-indigo-500 rounded-md p-2 text-white btn-pesan" >Pilih Minuman</button>
  </div>
</div>
</div>




<div class="flex justify-center mb-5">
  <div class="bg-green-300 rounded-lg shadow-md p-5 w-96">
        <h2 class="text-2xl text-center">Daftar Pesanan</h2>
        <ul id="pesanan" class="text-center"></ul>
        <p id="totalHarga" class="text-center"></p>

        <div class="flex justify-center">
          <button class="bg-green-700 rounded-md p-2 text-white btn-pesan m-2" onclick="submitOrder()">Order</button>
          <div class="p-2">
            <button class="bg-red-600 rounded-md p-2 text-white btn-pesan"onclick="resetOrder()">Reset</button>
          </div>
        </div>
  
  </div>
</div>



<script src="app.js"></script>
</body>
</html>