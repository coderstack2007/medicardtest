@extends('layout.layout')
@section('code')
<title>Calendar</title>
<section class="right-side-content px-4 pt-5 pb-5"  >
    <div class="head">
      <h1 class="hd1">Calendar</h1>
      <a class="next" href="../doctors/doctor-nurse-list.html"><span class="plus">&#43;</span>Navbatga yozilish</a>
</div>
     <div class="bts">
      <div class="wrap"> 
              <h3 class="Mytitle">Notifications</h3>
              <hr>
          <div class="not">
              <div class="qua1">
                  <p class="time"> 17 : 00</p>
                  
              </div>
              <div class="qua2">
              <h5 class="title">Dori vaqti</h5>
            
              <p class="des">Dori ichish vaqti b'oldi</p>
              <p class="doc">Stomotolog : Xurmatullayev Xumoyun</p>
              </div>
          </div>

          <div class="not"> 
              <div class="qua1">
                  <p class="time"> 17 : 00</p>
                  
              </div>
              <div class="qua2">
              <h6 class="title">Dori vaqti</h5>
               
              <p class="des">Dori ichish vaqti b'oldi </p>
              <p class="doc">Stomotolog : X.Xumayun</p>
              </div>
          </div>
          <div class="not">
              <div class="qua1">
                  <p class="time"> 17 : 00</p>
                  
              </div>
              <div class="qua2">
              <h6 class="title">Dori vaqti</h5>
            
              <p class="des">dori ichish vaqti b'oldi   </p>
              <p class="doc">Stomotolog : X.Xumayun</p>
              </div>
          </div>
          <div class="not">
              <div class="qua1">
                  <p class="time"> 17 : 00</p>
                  
              </div>
              <div class="qua2">
              <h6 class="title">Take pills</h5>
           
              <p class="des">You shoud take it Lorem ipsum dolor sit amet consectetur </p>
              <p class="doc">Stomotolog : X.Xumayun</p>
              </div>
          </div>
          
      </div>
      <div class="wrapper">
          <header>
              <p class="current-date" style="color: #495057;"></p>
              <div class="icons">
                  <span id="prev" class="material-symbols-rounded"><</span>
                  <span id="next" class="material-symbols-rounded">></span>
              </div>
          </header>
          <div class="calendar">
              <ul class="weeks">
                  <li>Dush</li>
                  <li>Sesh</li>
                  <li>Chor</li>
                  <li>Paysh</li>
                  <li>Juma</li>
                  <li>Shan</li>
                  <li>Yak</li>
              </ul>
              <ul class="days">
                
              </ul>
              <br>
              <div class="ss">
                  <p class="point-1" style="position: relative"></p>
                  <p class="sen"> - dori ichish vaqti b'oldi</p>
              </div>
              <br>
              <div class="ss">
                  <p class="point-2" style="position: relative"></p>
                  <p class="sen"> - dori ichish vaqti b'oldi</p>
              </div>
              
          </div>
      </div>
</div>
  </section>
@endsection