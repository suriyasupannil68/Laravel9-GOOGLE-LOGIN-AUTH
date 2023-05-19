<style>
    /* สำหรับอุปกรณ์ที่มีความกว้างน้อยกว่า 768px */
    @media (max-width: 768px) {
        .fixed-mobile  {
            position: fixed;
            right: 0;
            left: 0;
            z-index: 1030;
            bottom: 0;
            padding: 2px; /* เพิ่ม padding ให้กับแถบเมนูด้านล่าง */
        }
    }
</style>

<style>

.navbar-mobile .d-flex {
        align-items: center; /* จัดให้อยู่กึ่งกลางแนวตั้ง */
        justify-content: space-around; /* จัดให้อยู่กึ่งกลางแนวนอน */
    }




    .bay-container, .avatar-container,.iconprofile-container {
        display: inline-block;
        text-align: center;
    }


    .user-avatar {
        display: inline-block;
        max-width: 30px;
        max-height: 30px;
        border-radius: 60%; /* ทำให้รูปภาพเป็นวงกลม */
        overflow: hidden;
        margin-top: 9px;
    }


    .iconprofile-avatar {
        display: inline-block;
        max-width: 500px;
        max-height: 500px;
        border-radius: 50%; /* ทำให้รูปภาพเป็นวงกลม */
        overflow: hidden;
        margin-top: 15px;
    }

    .bay-avatar {
        display: inline-block;
        max-width:500px;
        max-height: 500px;
        border-radius: 50%; /* ทำให้รูปภาพเป็นวงกลม */
        overflow: hidden;
        margin-top: 15px;
    }
    
    .user-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* ปรับขนาดรูปภาพให้เต็มพื้นที่ที่กำหนด โดยไม่เสียอัตราส่วน */
       
    }
    

    .bay-avatar .i {
        width: 100%;
        height: 100%;
        object-fit: cover; /* ปรับขนาดรูปภาพให้เต็มพื้นที่ที่กำหนด โดยไม่เสียอัตราส่วน */
  
    }
    .avatar-text {
        display: block;
        text-align:right ;
        font-size: 12px;
        margin-top: -8px; /* ปรับระยะห่างของข้อความจากรูปภาพ */
    }

    .bay-text {
        display: block;
        font-size: 12px;
        margin-top: -10px;
    }

    .iconprofile-text {
        display: block;
        font-size: 12px;
        margin-top: -10px;
    }

</style>




<!-- **************CSS กลมสีแดงแสดงจำนวนสินค้าภายใน******************************************** -->

<style>
    .cart-count-badge-mobile {
        position: absolute;
        top: 8px;
        right: 180px;
        background-color: red;
        color: white;
        border-radius: 30%;
        padding: 1px 6px;
        font-size: 9px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<style>
    .custom-nav-link {
        margin-bottom: -22px;
        font-size: 13px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .custom-nav-link i {
        margin-bottom: 3px;
    }
</style>



<link rel="stylesheet" href="assets/css/PopupnavbarCart.css">


<!-- สร้างแถบเมนูด้านล่าง -->
<nav class="navbar-mobile fixed-mobile navbar-light bg-light d-block d-md-none">
    <div class="container">
        <div class="d-flex justify-content-around">
        <a class="nav-link custom-nav-link" href="/">
    <i class="fas fa-home"></i>
    หน้าแรก
</a>



            <div class="bay-container" onclick="openLoginPopup()">
    <div class="bay-avatar">
        <a href="/carts">
            <i class="fas fa-shopping-cart"></i> <!-- ไอคอนตะกร้าสินค้า -->
            <!-- แท็ก span ที่จะแสดงจำนวนสินค้าในตะกร้า -->
        
            </div>
            <span class="cart-count-badge-mobile" style="display: none;"></span>
    <span class="bay-text">ตะกร้าสินค้า</span>
    </a>
   
</div>


<!-- เพิ่ม JavaScript สำหรับการเรียกข้อมูลจากเส้นทาง 'cart.count' และปรับปรุงแท็ก span -->
<script>
// เรียกฟังก์ชัน updateCartCount เมื่อโหลดเสร็จ
updateCartCount();

// ฟังก์ชันสำหรับรับข้อมูลจำนวนรายการในตะกร้าสินค้า
function updateCartCount() {
    fetch('/cart-count')
        .then(response => response.json())
        .then(data => {
            const cartCountBadgeDesktop = document.querySelector('.cart-count-badge');
            const cartCountBadgeMobile = document.querySelector('.cart-count-badge-mobile');
            cartCountBadgeDesktop.textContent = data.cart_count;
            cartCountBadgeMobile.textContent = data.cart_count;
            // แสดงแท็ก span ที่มีคลาส cart-count-badge และ cart-count-badge-mobile เมื่อมีสินค้าในตะกร้า
            if (data.cart_count > 0) {
                cartCountBadgeDesktop.style.display = 'flex';
                cartCountBadgeMobile.style.display = 'flex';
            } else {
                cartCountBadgeDesktop.style.display = 'none';
                cartCountBadgeMobile.style.display = 'none';
            }
        });
}


</script>






   
        <!-- ส่วนของผู้ใช้ที่ลงชื่อเข้าใช้ -->
        @auth
          <a href="/profile">
            <div class="avatar-container">
                <div class="user-avatar">
                    @if(Auth::user()->avatar)
                        <img src="{{ Auth::user()->avatar }}" alt="User Avatar">
                          @else
                    <i class="fas fa-user-circle"></i>
                    @endif
                </div>
                {{-- <span class="avatar-text">บัญชี:</span> --}}
            <span class="avatar-text">{{ Illuminate\Support\Str::substr(Auth::user()->name, 0, 10) }}...</span>


            </div>
          </a>
        @endauth

        <!-- ส่วนของผู้ใช้ที่ยังไม่ได้ลงชื่อเข้าใช้ -->
        @guest
        <a href="/formlogingoogle">
            <div class="iconprofile-container">
                <div class="iconprofile-avatar">
                    <i class="fas fa-user-circle"></i> <!-- ไอคอนโปรไฟล์เริ่มต้น -->
                </div>
                <span class="iconprofile-text">ลงชื่่อ:</span>
            </div>
        </a>
        @endguest
  


        </div>
    </div>
</nav>

