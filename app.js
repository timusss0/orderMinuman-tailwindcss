let orderItems = [];
let totalPrice = 0;


function updateOrderList() {
    const pesanan = document.getElementById('pesanan');
    pesanan.innerHTML = '';
  
    orderItems.forEach(item => {
      const li = document.createElement('li');
      li.textContent = item;
      pesanan.appendChild(li);
    });
  }


function updateTotalPrice() {
    const totalHarga = document.getElementById('totalHarga');
    totalHarga.textContent = `Total Harga : Rp ${totalPrice}`;
  }

  
  function order(itemName, price) {
    const button = event.target;
  
    if (button.classList.contains('btn-pesan')) {
      button.classList.remove('btn-pesan');
      button.classList.add('btn-terpesan');
      button.textContent = 'Terpesan';
      
      orderItems.push(itemName);
      totalPrice += price;
      updateOrderList();
      updateTotalPrice();
    }
  }
  

  function submitOrder(){
        if (orderItems.length === 0) {
          alert("Silakan pilih minuman terlebih dahulu.");
        } else {
          const order = "Pesanan Anda: \n " + orderItems.join("\n");
          alert(order);
        }
      }


      function resetOrder() {
        orderItems = [];
         totalPrice = 0;
         updateOrderList();
         updateTotalPrice();
    
   
    const buttons = document.getElementsByClassName("btn-terpesan");
    for (let i = 0; i < buttons.length; i++) {
      const button = buttons[i];
      button.classList.remove("btn-terpesan");
      button.classList.add("btn-pesan");
      button.innerHTML = "Pilih Minuman";
    }
  }
