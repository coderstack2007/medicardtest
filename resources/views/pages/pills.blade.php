@extends('layout.doctor')
@section('doctor')
<title>Pills</title>
<link rel="stylesheet" href="{{ URL::asset('css/pills.css') }}">
<section class="right-side-content px-4 pt-5 pb-5">
    <div class="head">
        <h1 class="head1">Dorilar</h1>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Enter keyword..." aria-label="Recipient's username"
                aria-describedby="button-addon2">
            <i class="bi bi-search bg-primary border"></i>
        </div>
    </div>
        <div class="how">
            <h2>Nima qidiriyapsiz ?</h2>
        </div>
        <div class="containe">
            <div class="cat">
                <div class="cat-1">
                <img class="cat-img" src="{{ asset('img/headache-pain-svgrepo-com.svg') }}" alt="">
                </div>
                <div class="cat-2">
                    <a class="cat-link" href="index.html#">Alomatlar bo'yicha</a>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="cat">
                <div class="cat-1">
                    <img class="cat-img" src="{{ asset('img/health-medical-healthcare-heart-svgrepo-com.svg') }}" alt="">                </div>
                <div class="cat-2">
                <a class="cat-link" href="index.html#">Toifalar bo'yicha</a>
                <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
            <div class="cat">
                <div class="cat-1">
                    <img class="cat-img" src="{{ asset('img/medical-history-svgrepo-com.svg') }}" alt="">                 </div>
                <div class="cat-2">
                    <a class="cat-link" href="index.html#">Tayinlash varaqasi bo'yicha</a>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
        <div class="how">
            <h2>Ommabop</h2>
        </div>
    <div class="pills">
        <div class="pill">

            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
        <div class="pill">
    
            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
    
        <div class="pill">

            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
        <div class="pill">
    
            <center>
                <img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
    
        <div class="pill">

            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
        <div class="pill">
    
            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
    
        <div class="pill">

            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
        <div class="pill">
    
            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
    
        <div class="pill">

            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
        <div class="pill">
    
            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
    
        <div class="pill">

            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
        <div class="pill">
    
            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
    
        <div class="pill">

            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
        <div class="pill">
    
            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
    
        <div class="pill">

            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
        <div class="pill">
    
            <center><img class="img" src="https://chelyabinsk.uteka.ru/media/1024/4/de/4de53de1fa037def66db37ed2292fab3.jpg" alt=""></center>
            <div class="dd">
                <div class="div">
                    <h5 class="h33">Dori nomi</h5>
                    <p>Dori turi</p>
                    <p class="price">14$</p>
    
                </div>
                <p style="color:#1e90ff;">Mavjud 6</p>
                <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quas...</p>
                <a href="index.html#">Batafsil</a><br>
                <button class="cart">Savatga qo'shish</button>
    
    
            </div>
    
        </div>
    
    </div>
</section>

@endsection