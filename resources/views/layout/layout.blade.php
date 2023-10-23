 <!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
   

    <!-- description -->
    <meta name="description" content="aConic admin is a highly creative, modern, visually stunning and Bootstrap hospital manegment admin & dashboard template with 20+ ready page demos." />

    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/img/icon.svg">

    <!-- theme css -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/c-style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-icons.css') }}">
 



    <!-- bootstrap icons css -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@5.1.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/51d38df861.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- start header -->
    <header id="user-header" class="py-2">
        <!-- start top header -->
        <div class="container-fluid pe-md-5">
            <div class="row align-items-center">
                <div class="col px-0">
                    <div class="search-bg" id="searchBox">
                        <input type="text" placeholder="Search..." class="ps-5">
                        <i class="bi bi-search"></i>
                        <a href="doctor-nurse-profile.html#searchBox" data-bs-toggle="collapse" class="close-search-box"><i class="bi bi-x-lg"></i></a>
                    </div>
                    <a class="mobile-search" href="doctor-nurse-profile.html#searchBox" data-bs-toggle="collapse">
                        <i class="bi bi-search"></i>
                    </a>
                </div>
                <div class="col-auto d-flex align-items-center flex-row-reverse">
                    <div class="dropdown user-profile-btn">
                        <a class="dropdown-toggle" href="doctor-nurse-profile.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('img/avatar-01.svg') }}" >
                        </a>

                        <ul class="dropdown-menu mt-4 me-n2" aria-labelledby="dropdownMenuLink">
                            <li class="px-3 py-2 profile-bg">
                                <div class="row align-items-center">
                                    <div class="col-auto pe-0">
                                        <img src="{{ asset('img/avatar-01.svg') }}" >
                                    </div>
                                    <div class="col">
                                       
                                        <h3>{{ auth()->user()->username }}</h3>
                                        <h6 class="mb-0">#{{ auth()->user()->id }}</h6>
                                      
                                    </div>
                                </div>
                            </li>
                            <li><a class="dropdown-item border-bottom" href="../documentation/index.html"><i
                                        class="bi bi-question-circle-fill"></i> Help</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"><i
                                        class="bi bi-door-closed-fill bg-danger text-white"></i> Log Out</a></li>
                        </ul>
                    </div>

                    <div class="dropdown notification me-3 me-md-4">
                        <a class="dropdown-toggle read" href="doctor-nurse-profile.html#" role="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <i class="bi bi-bell"></i>
                        </a>

                        <div class="dropdown-menu mt-3 me-n2" aria-labelledby="dropdownMenuClickableInside">
                            <div class="notification-header border-bottom px-3 py-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="mb-0">Notifications</h3>
                                    </div>
                                    <div class="col-auto">
                                        <div class="dropdown notification-setting">
                                            <a class="dropdown-toggle" href="doctor-nurse-profile.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                            </a>

                                            <div class="dropdown-menu p-3 mt-3 me-n2" aria-labelledby="dropdownMenuLink">
                                                <h5 class="mb-1 border-bottom">Settings</h5>
                                                <a href="./inbox/message.html">
                                                    <i class="bi bi-archive-fill me-1"></i> Archive all
                                                </a>
                                                <a href="doctor-nurse-profile.html#">
                                                    <i class="bi bi-check2-all me-1"></i> Mark all as read
                                                </a>
                                                <a href="doctor-nurse-profile.html#">
                                                    <i class="bi bi-toggle-on me-1"></i> Disable notifications
                                                </a>

                                                <h6 class="mt-3 mb-1 border-bottom">Feedback</h6>
                                                <a href="doctor-nurse-profile.html#">
                                                    <i class="bi bi-chat-left-text-fill me-1"></i> Report
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- start tabs -->
                            <!-- nav tabs -->
                            <div class="p-3">
                                <ul class="nav nav-pills nav-fill notification-tab border" id="NotificationTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="true">Messages (3)</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="archived-tab" data-bs-toggle="tab" data-bs-target="#archived" type="button" role="tab" aria-controls="archived" aria-selected="false">Archived</button>
                                    </li>
                                </ul>

                                <!-- tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                        <div class="notification-body mt-2">
                                            <!-- item -->
                                            <a href="../inbox/message-details.html" class="notification-item border my-2 p-3">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <span class="notification-img">
                                                            <img src="img/avatar-01.svg" alt="">
                                                        </span>
                                                    </div>
                                                    <div class="col px-0">
                                                        <h5 class="mb-0">Bilal Azad</h5>
                                                        <p class="mb-0">New order #785756 - <span class="badge rounded-pill bg-primary">Processing</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="time">2 HR</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="./inbox/message-details.html" class="notification-item border p-3 my-2">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <span class="notification-img">
                                                            <img src="{{ asset('img/avatar-01.svg') }}" >
                                                        </span>
                                                    </div>
                                                    <div class="col px-0">
                                                        <h5 class="mb-0">Abu Bilal</h5>
                                                        <p class="mb-0">Order #456877 - <span class="badge rounded-pill bg-danger">Cancelled</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="time">1 DY</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="./inbox/message-details.html" class="notification-item border p-3 my-2 message-read">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <span class="notification-img">
                                                            <img src="{{ asset('img/avatar-01.svg') }}" >
                                                        </span>
                                                    </div>
                                                    <div class="col px-0">
                                                        <h5 class="mb-0">Mohammad</h5>
                                                        <p class="mb-0">Order #546667 - <span class="badge rounded-pill bg-success">Completed</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="time">12 DY</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="archived" role="tabpanel" aria-labelledby="archived-tab">
                                        <div class="notification-body mt-2">
                                            <!-- item -->
                                            <a href="./inbox/message-details.html" class="notification-item border my-2 p-3 message-read">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <span class="notification-img">
                                                            <img src="{{ asset('img/avatar-01.svg') }}" >
                                                        </span>
                                                    </div>
                                                    <div class="col px-0">
                                                        <h5 class="mb-0">Mohammad Azad</h5>
                                                        <p class="mb-0">joined the HS Team</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="time">2 DY</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="./inbox/message-details.html" class="notification-item border p-3 my-2 message-read">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <span class="notification-img">
                                                            <img src="{{ asset('img/avatar-01.svg') }}" >
                                                        </span>
                                                    </div>
                                                    <div class="col px-0">
                                                        <h5 class="mb-0">Abu Bilal</h5>
                                                        <p class="mb-0">completed task login</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="time">10 DY</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="./inbox/message-details.html" class="notification-item border p-3 my-2 message-read">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <span class="notification-img">
                                                            <img src="{{ asset('img/avatar-01.svg') }}" >
                                                        </span>
                                                    </div>
                                                    <div class="col px-0">
                                                        <h5 class="mb-0">Mohammad</h5>
                                                        <p class="mb-0">Dashboard - <span class="badge rounded-pill bg-primary">in progress</span>
                                                        </p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <span class="time">13 DY</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tabs -->
                            </div>
                            <div class="notification-footer border-top text-center p-3">
                                <a href="./inbox/message.html">View all notifications</a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown chatting me-3 me-md-4">
                        <a class="dropdown-toggle read" href="doctor-nurse-profile.html#" role="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-chat"></i>
                        </a>

                        <div class="dropdown-menu mt-3 me-n2" aria-labelledby="dropdownMenuClickableInside">
                            <div class="chat-header border-bottom px-3 py-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="mb-0">Chat</h3>
                                    </div>
                                    <div class="col-auto">
                                        <a href="https://aconic.mohammadazad.com/aConic-HMS/hospital/chat/chat.html" class="chat-fullscreen"><i class="bi bi-fullscreen"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="chat-body my-2 px-3">
                                <!-- item -->
                                <a href="doctor-nurse-profile.html#chatting" data-bs-toggle="modal" class="chat-item border my-2 p-3">
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="chat-img">
                                                <img src="{{ asset('img/avatar-01.svg') }}" >
                                            </span>
                                        </div>
                                        <div class="col px-0">
                                            <h5 class="mb-0">Bilal Azad</h5>
                                            <p class="mb-0">Hi</p>
                                        </div>
                                        <div class="col-auto">
                                            <span class="time">2 HR</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="doctor-nurse-profile.html#chatting" data-bs-toggle="modal" class="chat-item border p-3 my-2">
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="chat-img">
                                                <img src="{{ asset('img/avatar-01.svg') }}" >
                                            </span>
                                        </div>
                                        <div class="col px-0">
                                            <h5 class="mb-0">Abu Bilal</h5>
                                            <p class="mb-0">Curabitur arcu erat, accumsan...</p>
                                        </div>
                                        <div class="col-auto">
                                            <span class="time">1 DY</span>
                                        </div>
                                    </div>
                                </a>
                                <!-- item -->
                                <a href="doctor-nurse-profile.html#chatting" data-bs-toggle="modal" class="chat-item border p-3 my-2 message-read">
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="chat-img">
                                                <img src="{{ asset('img/avatar-01.svg') }}" >
                                            </span>
                                        </div>
                                        <div class="col px-0">
                                            <h5 class="mb-0">Mohammad</h5>
                                            <p class="mb-0">Curabitur arcu erat...</p>
                                        </div>
                                        <div class="col-auto">
                                            <span class="time">12 DY</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="chat-footer border-top text-center p-3">
                                <a href="https://aconic.mohammadazad.com/aConic-HMS/hospital/chat/chat.html">View all
                                    chat</a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown lang-btn me-3 me-md-4">
                        <a class="dropdown-toggle" href="doctor-nurse-profile.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('img/united-states.svg') }}">  En
                        </a>

                        <ul class="dropdown-menu mt-3" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="dropdown-item border-bottom" href="doctor-nurse-profile.html#"><img src="{{ asset('img/united-states.svg') }}"> English</a>
                            </li>
                            <li>
                                <a class="dropdown-item border-bottom" href="doctor-nurse-profile.html#"><img src="{{ asset('img/spain.svg') }}"> Spanish</a>
                            </li>
                            <li>
                                <a class="dropdown-item border-bottom" href="doctor-nurse-profile.html#"><img src="{{ asset('img/germany.svg') }}"> German</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="doctor-nurse-profile.html#"><img src="{{ asset('img/japan.svg') }}"> japanese</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <!-- start chatting modal -->
        <div class="modal fade" id="chatting" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="chattingLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable position-fixed top-0 end-0 m-0 vh-100 chatting-modal">
                <div class="modal-content vh-100 rounded-0">
                    <div class="modal-header d-block px-4 px-sm-5">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="modal-title" id="chattingLabel">Abu Bilal</h5>
                                <span class="user-online-status online ps-3">Active</span>
                            </div>
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="doctor-nurse-profile.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots"></i>
                                    </a>

                                    <ul class="dropdown-menu mt-2 me-n3" aria-labelledby="dropdownMenuLink">
                                        <li class="py-2 px-3 border-bottom">
                                            <h6 class="mb-0">Contact</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="https://aconic.mohammadazad.com/aConic-HMS/hospital/chat/chat.html"><i
                                                    class="bi bi-person-lines-fill me-1"></i> Add Contact</a></li>
                                        <li><a class="dropdown-item" href="https://aconic.mohammadazad.com/aConic-HMS/hospital/chat/chat.html"><i
                                                    class="bi bi-person-plus-fill me-1"></i> Invite Contacts</a></li>
                                        <li><a class="dropdown-item" href="https://aconic.mohammadazad.com/aConic-HMS/hospital/chat/chat.html"><i
                                                    class="bi bi-gear-fill me-1"></i> Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-auto">
                                <a href="https://aconic.mohammadazad.com/aConic-HMS/hospital/chat/chat.html" class="chat-full-screen"><i class="bi bi-fullscreen"></i></a>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body p-4 p-sm-5">
                        <!-- start sender text -->
                        <div class="sender-chat mb-4">
                            <div class="row align-items-center ms-1">
                                <div class="col-auto">
                                    <img src="{{ asset('img/avatar-01.svg') }}" >
                                </div>
                                <div class="col ps-0">
                                    <h4 class="mb-0">Abu Bilal</h4>
                                    <small>1 mins</small>
                                </div>
                            </div>
                            <div class="chat-text p-3 mt-3 me-5">
                                Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.
                            </div>
                        </div>
                        <!-- end sender text -->

                        <!-- start receiver text -->
                        <div class="receiver-chat mb-4 text-end">
                            <div class="row align-items-center me-1">
                                <div class="col pe-0">
                                    <h4 class="mb-0">You</h4>
                                    <small>1 mins</small>
                                </div>
                                <div class="col-auto">
                                    <img src="{{ asset('img/avatar-01.svg') }}" >
                                </div>
                            </div>
                            <div class="chat-text p-3 mt-3 ms-5">
                                How likely are you to recommend our company to your friends and family ?
                            </div>
                        </div>
                        <!-- end receiver text -->

                        <!-- start sender text -->
                        <div class="sender-chat mb-4">
                            <div class="row align-items-center ms-1">
                                <div class="col-auto">
                                    <img src="../assets/img/avatar-01.svg" alt="">
                                </div>
                                <div class="col ps-0">
                                    <h4 class="mb-0">Abu Bilal</h4>
                                    <small>1 Hours</small>
                                </div>
                            </div>
                            <div class="chat-text p-3 mt-3 me-5">
                                You’ll receive notifications for all issues, pull requests!
                            </div>
                        </div>
                        <!-- end sender text -->

                        <!-- start receiver text -->
                        <div class="receiver-chat mb-4 text-end">
                            <div class="row align-items-center me-1">
                                <div class="col pe-0">
                                    <h4 class="mb-0">You</h4>
                                    <small>1 mins</small>
                                </div>
                                <div class="col-auto">
                                    <img src="../assets/img/avatar-01.svg" alt="">
                                </div>
                            </div>
                            <div class="chat-text p-3 mt-3 ms-5">
                                Ok, Understood!
                            </div>
                        </div>
                        <!-- end receiver text -->

                        <!-- start sender text -->
                        <div class="sender-chat mb-4">
                            <div class="row align-items-center ms-1">
                                <div class="col-auto">
                                    <img src="../assets/img/avatar-01.svg" alt="">
                                </div>
                                <div class="col ps-0">
                                    <h4 class="mb-0">Abu Bilal</h4>
                                    <small>2 Hours</small>
                                </div>
                            </div>
                            <div class="chat-text p-3 mt-3 me-5">
                                Most purchased Business appointments during this sale!
                            </div>
                        </div>
                        <!-- end sender text -->

                        <!-- start receiver text -->
                        <div class="receiver-chat mb-4 text-end">
                            <div class="row align-items-center me-1">
                                <div class="col pe-0">
                                    <h4 class="mb-0">You</h4>
                                    <small>2 Hours</small>
                                </div>
                                <div class="col-auto">
                                    <img src="../assets/img/avatar-01.svg" alt="">
                                </div>
                            </div>
                            <div class="chat-text p-3 mt-3 ms-5">
                                You can unwatch this repository immediately by clicking here: mohammadazad.com
                            </div>
                        </div>
                        <!-- end receiver text -->
                    </div>
                    <div class="modal-footer d-block px-4 px-sm-5">
                        <form action="doctor-nurse-profile.html">
                            <textarea name="message" class="form-control border-0 p-0 m-0" rows="1" placeholder="Type a message" required></textarea>
                            <div class="row align-items-center mt-2">
                                <div class="col-auto">
                                    <a href="doctor-nurse-profile.html#!" class="border d-inline-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Upload file">
                                        <i class="bi bi-paperclip"></i>
                                    </a>
                                </div>
                                <div class="col-auto ps-0">
                                    <a href="doctor-nurse-profile.html#!" class="border d-inline-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Emoji">
                                        <i class="bi bi-emoji-sunglasses"></i>
                                    </a>
                                </div>
                                <div class="col text-end">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end chatting modal -->
        <!-- end top header -->

        <!-- start side navigation -->
        <div class="side-nav">
            <div class="logo-icon-bg">
                <a href="index.html"><img src="" class="ms-2" alt=""></a>
            </div>
            <div class="side-nav-item-bg">
                @if(auth()->user()->type == 'admin' )
                <a href="/moderators" class="side-nav-item current-nav">
                    <i class="fa-regular fa-address-card fa-xl" style="color: #c2d1e5;"></i>
                    <span>Profil</span>
                </a>
                @endif
                @if(auth()->user()->type == 'doctor' )
                <a href="/doctors" class="side-nav-item current-nav">
                    <i class="fa-regular fa-address-card fa-xl" style="color: #c2d1e5;"></i>
                    <span>Profil</span>
                </a>
                @endif
                @if(auth()->user()->type == 'patient' )
                <a href="/patients" class="side-nav-item current-nav">
                    <i class="fa-regular fa-address-card fa-xl" style="color: #c2d1e5;"></i>
                    <span>Profil</span>
                </a>
                @endif
                <a href="/calendar" class="side-nav-item ">
                    <i class="bi bi-calendar-week"></i>
                    <span>Calendar</span>
                </a>
                @if(auth()->user()->type == 'admin' or 'doctor')
                <a href="/patient-list" class="side-nav-item">
                    <i class="fa-solid fa-hospital-user fa-xl" style="color: #c2d1e5;"></i>
                    <span>Patient</span>
                </a>
                @endif
                <a href="{{ route('doctorlist') }}" class="side-nav-item">
                    <i class="fa-solid fa-user-doctor fa-xl" style="color: #c2d1e5;"></i>
                    <span>Doctors / Nurses</span>
                </a>
                <a href="" class="side-nav-item ">
                    <i class="fa-solid fa-people-roof fa-xl" style="color: #c2d1e5;"></i>
                    <span>Moderators</span>
                </a>
                <a href="/pills" class="side-nav-item">
                    <i class="fa-solid fa-pills fa-xl" style="color: #c2d1e5;"></i>
                    <span>Pills</span>
                </a>
                <a href="/inbox" class="side-nav-item">
                    <i class="bi bi-chat"></i>
                    <span> Inbox</span>
                </a>
            </div>
        </div>
        <!-- start side navigation -->
    </header>
    <!-- end header -->

    @yield('code')
    <!--jquery-->
    <script src="../assets/js/jquery.js"></script>

    <!-- bootstrap bundel -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- custom js -->
    <script src="../assets/js/custom.js"></script>

    <!-- flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr(".joiningDate", {
            dateFormat: "d-m-Y H:i",
            enableTime: true
        });
        flatpickr(".dob", {
            dateFormat: "d-m-Y"
        });
    </script>

    <!-- select js -->
    <link rel="stylesheet" href="../assets/plugins/tom-select/dist/css/tom-select.bootstrap5.min.css">
    <script src="../assets/plugins/tom-select/dist/js/tom-select.complete.min.js"></script>



    <!-- the main fileinput plugin script JS file -->
    <script src="../assets/plugins/bootstrap-fileinput/js/fileinput.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#uploadMedia").fileinput({
                uploadUrl: "/file-upload-single/1",
                maxFileCount: 1,
                showBrowse: false,
                browseOnZoneClick: true,
                showUpload: false,
                showRemove: false,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#uploadNationalID").fileinput({
                uploadUrl: "/file-upload-single/1",
                maxFileCount: 1,
                showBrowse: false,
                browseOnZoneClick: true,
                showUpload: false,
                showRemove: false,
            });
        });
        $(document).ready(function() {
            $("#uploadCertificates").fileinput({
                uploadUrl: "/file-upload-single/1",
                maxFileCount: 1,
                showBrowse: false,
                browseOnZoneClick: true,
                showUpload: false,
                showRemove: false,
            });
        });
    </script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/c-script.js') }}"></script>
</body>

</html>
