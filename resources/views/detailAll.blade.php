















</head>
<body>









<style>

.main-background {
  background-image: url('/img/BG-detail.jpg');
  background-size: cover; /* หรือค่าอื่น ๆ ที่คุณต้องการ */
 

}




  .image-container {
       width: 400px;
   
       height: 380px;
        border: 0px solid #ddd;
        border-spacing: 10px;
  
      
}

.image {
  max-width: 100%;
  max-height: 100%;
  border-radius: 10px;
}

.container-fluid h4 {

  font-size: 30px;
  color: black;
}
.container {

  margin-top: -10px;
}

.single-post-wrap .details-ALL h6 {
		font-size: 25px;

	}


  .textured-button {
 background-color: green;
 color: white;

}
.inline-block {
  font-size: auto;
  font-weight: bold;
  color: #ffffff;
  text-align: left ;
  margin-top: 2rem;
  margin-bottom: 2rem;
  text-transform: uppercase;
}





</style>

<!-- ******************************************************** -->


<style>



@media only screen and (max-width: 820px) {
  .background-BG {
  position: relative;
  background-image: url('/img/BG-detail.jpg');
  background-size: cover; /* หรือค่าอื่น ๆ ที่คุณต้องการ */
  background-position: left;
}



.details-ALL{
color: #07090C;
border-bottom: 1px solid #F1A40A; /* เส้นขีดจบด้านล่าง */
margin-bottom: 1px;

}

  .container-fluid .details-ALL h6 {
    font-size: 12px;
  }

  .inline-block h4 {
    font-size: 20px;
    font-weight: bold;
    text-align: left;
    margin-top: -15px;
    margin-bottom: -50px;
    text-transform: uppercase;
  }


  .text-body {
    max-width: 200px;
    max-height: auto;
  margin-top: -8px;
  display: -webkit-box;
  font-size: 10px;
  line-height: 1.2; /* ปรับค่าตามที่คุณต้องการ */
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-align: center;
  margin-bottom: -23px;
}




  /* .image-container {
    width: 140px;
    height: 120px;
    border: 0px solid #ddd;
    border-spacing: 10px;
  }

  .image {
    max-width: 100%;
    max-height: 100%;
    border-radius: 10px;
  } */
  .image-container {
  width: auto;
  height: 145px;
  border: 0px solid #ddd;
  
    margin-bottom: auto;
}

.image {
  max-width: 100%;
    max-height: auto;
    border-radius: 10px;
    margin-bottom: -20px;
}
  .tag-blue:hover {
    background: #0f68c0;
  }

  .post-meta-single-1 .tag-base-1 {
    

    background: #0f68c0;
    height: 28px;
    line-height: 28px;
    padding: 0 16px;
    display: inline-block;
    border-radius: 10px;
    font-size: 15px;
    align-items: center;
    
    

   


  }

 
  




  .money  {
   
    font-size: 7px;
    list-style-type: none;
    align-items: center;

    
  }





  }















</style>





<div class="background-BG" >  

<div class="container-fluid " align="center"> 



  <div class="row">
 

    <div class="inline-block"> <h4>สินค้าของเรา</h4> </div>

    
    @foreach($all_products as $product)
      <div class="col-lg-3 col-sm-6 col-xs-6 col-md-4 col-6 ">
        <div class="single-post-wrap ">
        <div class="frame">
  <div class="image-container">
    <img src="{{ asset('images/' . $product->image) }}" class="image">
  </div>
</div>



          <div class="details-ALL" >
            <h6 class="title">
              <a >{{ $product->name }}</a>
            </h6> 
            <div class=" text-body "> 
            <div class="content"> <!-- เนื้อหาที่ล็อกไว้ -->
            <p>{{ $product->detail }}</p>
            </div>

</div>









            <div class="post-meta-single-1 mt-4" >
         



    <a class="tag-base-1 tag-blue" href="{{ route('show_detail', ['product_id' => $product->id]) }}">ดูรายละเอียด</a>




<div class="money" >
    <i class="fa fa-money fa-sm"></i> เริ่มต้นที่15฿
</div>
</div>
</div>
        </div>
      </div>
    @endforeach
  </div>
</div>
</div>
<ul>
  <li style="display: inline-block;">
    เนื้อหาที่เป็นบล็อกแบบอินไลน์ แสดงในบรรทัดเดียวกัน 
  </li>
</ul>








