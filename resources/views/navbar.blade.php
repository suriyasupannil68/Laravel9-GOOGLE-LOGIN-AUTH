<link rel="stylesheet" href="/assets/css/style01.css">
<link rel="stylesheet" href="/assets/css/navbar.css">
<style>
   .user-name {
  position: relative;
  font-size: 12px;

  font-weight: bold; /* เพิ่มค่านี้เพื่อกำหนดให้ตัวอักษรหนา */
  
}

.baybockmb-text {
  position: relative;
  font-size: 12px;
  top: 0px; /* ปรับค่านี้เพื่อเปลี่ยนระยะห่างจากด้านบน */
  font-weight: bold; /* เพิ่มค่านี้เพื่อกำหนดให้ตัวอักษรหนา */

}

.userwin-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* ปรับขนาดรูปภาพให้เต็มพื้นที่ที่กำหนด โดยไม่เสียอัตราส่วน */
        display: inline-block;
        max-width: 30px;
        max-height: 30px;
        border-radius: 60%; /* ทำให้รูปภาพเป็นวงกลม */
        overflow: hidden;
        
       
    }





  .baybockmb-container {
  margin-right: 10px; /* ปรับค่านี้เพื่อเปลี่ยนระยะห่างระหว่างตะกร้าสินค้ากับโปรไฟล์ผู้ใช้ */
}

.avatarwin-container {
  margin-left: 10px; /* ปรับค่านี้เพื่อเปลี่ยนระยะห่างระหว่างโปรไฟล์ผู้ใช้กับตะกร้าสินค้า */
}



.input-group-custom {
            max-width: 270px;
   
        }
        .input-group-custom .form-control {
            font-size: 0.8rem;
            padding: 0.375rem 0.75rem;
        }
        .input-group-custom .btn {
            font-size: 0.8rem;
            padding: 0.375rem 0.75rem;


        }

        .input-group-custom-DP .form-control {
            font-size: 0.8rem;
            padding: 0.375rem 1.75rem;
          
        }
        .input-group-custom-DP .btn {
            font-size: .9.5rem;
            padding: 0.375rem 1.75rem;
        

        }
        .input-group-custom-DP {
            max-width: 270px;

        }

</style>

<!-- **************CSS กลมสีแดงแสดงจำนวนสินค้าภายใน******************************************** -->


<style>
.cart-count-badge {
    position: absolute;
    top: 8px;
    right: 400px;
    background-color: red;
    color: white;
    font-size: 12px;
    font-weight: bold;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>


<!-- ********************************************************** -->




<style>

@media screen and (min-width: 980px) {
    .container-center {
        display: flex;
    }


    .container-center {
    position: fixed;
    top: 25%;
    left: 35%;

    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}




.login-popup {
    background-color: rgba(0, 0, 0, 0.5);

    padding: 100px;
    border-radius: 20px;

}


.login-popup-content {
    background-color: white;
    padding: 50px;
    border-radius: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
}

.login-popup-content h3 {
    margin: 0 0 15px 0;
    font-size: 24px;
}

.login-popup-content p {
    margin: 0 0 20px 0;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
}


}
</style>




<!-- ไฟล์ navbar.blade.php -->

<!-- header start -->
<div class="navbar-area">
    <!-- adbar end-->

    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg">
        <div class="container nav-container">
            <!-- ส่วนเดิมของโค้ด -->
            <div class="responsive-mobile-menu">
                    <div class="logo d-lg-none d-block">
                    <!-- <a class="main-logo" href="index.html"><img src="img/rung01.jpg" alt="img"></a>  -->
                 
                    </div>
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#nextpage_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>

                <div class="nav-right-part nav-right-part-mobile" >
                
                <div class="container my-0">
        <!-- <div class="row"> -->
            <div class="col-md-6 offset-md-0">
                <div class="input-group input-group-custom mb-0">
                    <input type="text" class="form-control" placeholder="Search For" aria-label="Search For">
                    <button class="btn btn-outline-info" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        <!-- </div> -->
    </div>
                </div>


                <div class="collapse navbar-collapse" id="nextpage_main_menu">
                    <ul class="navbar-nav menu-open">

                        <li class="current-menu-item">
                            <a href="{{route('home')}}">บ้าน</a>
                          
                        </li>                        
                        <li class="current-menu-item">
                            <a href="#trending">สินค้าทั้งหมด</a>
                        </li>                        
                        <li class="current-menu-item">
                            <a href="#latest">วิธีการสั่งซื้อ</a>
                        </li>                        
                        <li class="current-menu-item">
                            <a href="#grid">เกี่ยวกับ</a>
                        </li>                        
                        <li class="current-menu-item">
                            <a target="_blank" href="#">นโยบายความเป็นส่วนตัว</a>
                        </li>
                        <li class="current-menu-item">
                          
                        
                        <div class="nav-right-part nav-right-part-desktop" aling=" left ">
                        <div class="container my-0">
        <!-- <div class="row"> -->
            <div class="col-lg-12 offset-md-0">
                <div class="input-group input-group-custom-DP mb-0">
                    <input type="text" class="form-control" placeholder="Search For" aria-label="Search For">
                    <button class="btn btn-outline-info" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        <!-- </div> -->
    </div>
                    </div>
                        </li>
                
                    
   
                    </ul>

                   

                </div>


              <!-- ไฟล์  navbar.blade.php -->


            <div class="nav-right-part nav-right-part-desktop">
               <!-- เพิ่มแท็ก span ที่จะแสดงจำนวนสินค้าในตะกร้า -->
<!-- ตะกร้าสินค้า -->

<div class="baybockmb-container" onclick="openLoginPopup()">
    <a href="/carts">
        <i class="fas fa-shopping-cart"></i>
        <span class="baybockmb-text">ตะกร้าสินค้า</span>
        <!-- อัปเดตคลาสของแท็ก span ที่จะแสดงจำนวนสินค้าในตะกร้า -->
        <span class="cart-count-badge" style="display: none;"></span>
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
            const cartCountBadge = document.querySelector('.cart-count-badge');
            cartCountBadge.textContent = data.cart_count;
            // แสดงแท็ก span ที่มีคลาส cart-count-badge เมื่อมีสินค้าในตะกร้า
            if (data.cart_count > 0) {
                cartCountBadge.style.display = 'flex';
            } else {
                cartCountBadge.style.display = 'none';
            }
        });
}

</script>
<!-- ตามโค้ดข้างต้น เมื่อหน้าเว็บโหลดขึ้นมาแล้ว จะมีการเรียก function updateCartCount ที่เรียกข้อมูลจำนวนรายการในตะกร้าสินค้าจากเส้นทาง /cart-count และแสดงจำนวนนั้น -->


      </div>



                <div class="nav-right-part nav-right-part-desktop">

                @auth
                <!-- ส่วนของผู้ใช้ที่ลงชื่อเข้าใช้ -->
                <a href="/profile">
                <div class="avatarwin-container">
                    <div class="userwin-avatar">
                        @if(Auth::user()->avatar)
                       
                            <img src="{{ Auth::user()->avatar }}" alt="User Avatar">
                             @else
                    <i class="fas fa-user-circle"></i>
                  
                       
                        @endif
                  
                    <span class="user-name">{{ Auth::user()->name }}</span>
                </div>
                </div>
                </a>
                @endauth

                </div>



                <div class="nav-right-part nav-right-part-desktop">

                @guest
                <!-- ส่วนของผู้ใช้ที่ยังไม่ได้ลงชื่อเข้าใช้ -->
                <div class="baybockmb-container">
                    <a href="/login">
                        <i class="fas fa-user-circle"></i><span class="baybockmb-text">เข้าสู่ระบบ</span>
                    </a>
       
                @endguest
            </div>
            </div>

              
        </div>


        </nav>


<!-- ส่วนของป็อปอัป -->
<div class="container-center">
    <div id="login-popup" class="login-popup" style="display: none;">
        <div class="login-popup-content">
            <h3>คุณยังไม่ได้ลงชื่อเข้าใช้</h3>
            <p>กรุณาลงชื่อเข้าใช้เพื่อเข้าถึงตะกร้าสินค้า</p>
            <a href="/formlogingoogle" class="btn btn-primary">ลงชื่อเข้าใช้</a>
        </div>
    </div>
</div>



<!-- ส่วนของ JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if ('{{ session("login_required") }}' === '1') {
            document.getElementById('login-popup').style.display = 'block';
        }
    });
</script>


</div>







