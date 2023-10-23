
<!DOCTYPE html>
<html>

<head>
    <title>Kirish Tizimi  </title>
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<style>
    .tabcontent
    {
        display: none;
    }
</style>
<body>
        <div class="screen-1">
            <br>
            <div class="wrapper">
             
                <input type="radio" name="select" id="option-1" onclick="openCity(event, 'Patient')" checked>
                <input type="radio" name="select" id="option-2" onclick="openCity(event, 'Doctor')">
                <input type="radio" name="select" id="option-3" onclick="openCity(event, 'Moderator')">
                <label for="option-1" class="option option-1">
                    <div class="dot"></div>
                    <span>Bemor</span>
                </label>
                <label for="option-2" class="option option-2">
                    <div class="dot"></div>
                    <span>Doktor</span>
                </label>
                <label for="option-3" class="option option-3">
                    <div class="dot"></div>
                    <span>Moderator</span>
                </label>
            </div>
            <br>
            <div class="tabcontent" id='Patient'>
                <form action="{{ route('Patient') }}" method="POST" >
                    @csrf

                    <div class="email">
                        <label for="email">F.I.O</label>
                        <div class="sec-2">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="text" name="username">
                        </div>
                    </div>
                    <div class="password">
                        <label for="password">Karta raqami</label>
                        <div class="sec-2">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input class="pas" type="password" name="password">
                            <ion-icon class="show-hide" name="eye-outline"></ion-icon>
                        </div>
                    </div>        <button type="submit" class="login">Login</button>
            </form>
        </div>
        <div class="tabcontent" id='Doctor'>
          <form action="{{ route('Doctor') }}" method="POST" >
            @csrf

            <div class="email">
                <label for="email">F.I.O</label>
                <div class="sec-2">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="username">
                </div>
            </div>
            <div class="password">
                <label for="password">Karta Raqami</label>
                <div class="sec-2">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input class="pas" type="password" name="password">
                    <ion-icon class="show-hide" name="eye-outline"></ion-icon>
                </div>
            </div>        <button type="submit" class="login">Login</button>
    </form>
    </div>
    <div class="tabcontent" id='Moderator'>
      <form action="{{ route('Moder') }}" method="POST" >
        @csrf

        <div class="email">
            <label for="email">F.I.O</label>
            <div class="sec-2">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="text" name="username">
            </div>
        </div>
        <div class="password">
            <label for="password">Karta Raqami</label>
            <div class="sec-2">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input class="pas" type="password" name="password">
                <ion-icon class="show-hide" name="eye-outline"></ion-icon>
            </div>
        </div>
        <button type="submit" class="login">Login</button>
      </form>
</div>
            
    
        </div>
        <script>
            function openCity(evt, cityName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(cityName).style.display = "block";
              evt.currentTarget.className += " active";
            }
            </script>
</body>

</html>



