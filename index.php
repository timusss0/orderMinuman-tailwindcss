<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>order -tailwind</title>
</head>
<body>
  <h1 class="text-4xl text-center m-10 ">
  Silahkan Order minuman
  </h1>

  <div class="bg-white rounded-t-lg shadow-md p-4 w-80">
      <img src="img/drink1.jpeg" class="w-full rounded-lg" alt="">
      <h2 class="text-xl font-semibold mb-2">Americano</h2>
      <p class="text-gray-600 p-1">Lorem ipsum dolor sit amet.</p>
      <button onclick="order('Americano :Rp 45.000' , 45000 , pesan)" class="bg-indigo-500 rounded-md p-2  text-white" >Pilih Minuman</button>
  </div>
</body>
</html>