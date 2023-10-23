@extends('layout.layout')
@section('code')
<title>Inbox</title>
<section class="right-side-content px-4 pt-4 pb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-xl-auto" id="inboxNav">
                <div class="sub-side-navigation-bg p-2 mb-4">
                    <span class="btn-inbox-close rounded-end btn-collapse-nav d-lg-none"><i class="bi bi-x-circle"></i></span>
                    <div class="inbox-side-nav p-1 mb-3">
                        <div class="d-grid mb-3">
                            <a href="message.html#composeMail" data-bs-toggle="modal" class="btn btn-outline-primary px-4 py-1 rounded-3"><i class="bi bi-plus-circle me-1"></i> Compose Mail</a>
                        </div>
                        <ul>
                            <li class="act">
                                <a href="message.html">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="bi bi-inbox"></i>
                                        </div>
                                        <div class="col px-0">
                                            <span>Inbox</span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge bg-primary rounded-12">5</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="message.html#!">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                        <div class="col px-0">
                                            <span>Draft</span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="badge bg-secondary rounded-12">23</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="message.html#!">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="bi bi-box-arrow-up-right"></i>
                                        </div>
                                        <div class="col px-0">
                                            <span>Sent</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="message.html#!">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                        <div class="col px-0">
                                            <span>All Mails</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl" id="inboxMessage">
                <!-- start title -->
                <div class="row align-items-center mb-3">
                    <div class="col">
                        <!-- start heading -->
                        <div class="title mb-3">
                            <h1>Inbox</h1>
                            <h6>Mail Box</h6>
                        </div>
                        <!-- end heading -->
                    </div>
                    <div class="col-auto">
                        <a href="message.html#!" class="btn-collapse-nav btn border py-1 text-primary"><i class="bi bi-caret-left"></i></a>
                    </div>
                    <div class="col-auto">
                        <a href="message.html#composeMail" data-bs-toggle="modal" class="btn btn-primary px-4 py-1 rounded-3"><i class="bi bi-plus-circle me-1"></i> Compose Mail</a>
                    </div>
                </div>
                <!-- end title -->

                <!-- start content -->
                <div class="message-list bg-white px-4 pt-4 pb-2 rounded-12 custom-shadow-lg">
                    <div class="message-list-header">
                        <div class="row align-items-center">
                            <div class="col-auto d-flex align-items-center">
                                <a href="message.html#!" class="d-inline-block"><i class="bi bi-arrow-clockwise fs-5"></i></a>
                            </div>
                         
                            <div class="col">
                                
                            </div>
                            <div class="col-auto d-inline-flex align-items-center">
                                <a href="message.html#search" class="text-decoration-none" data-bs-toggle="collapse">
                                    <i class="bi bi-search fs-5" title="Search" data-bs-toggle="tooltip"></i>
                                </a>
                                <a href="message.html#!" class="ms-3 d-inline-block" class="ms-1">
                                    <i class="bi bi-caret-left btn btn-outline-secondary py-0 px-2" title="Prev Page" data-bs-toggle="tooltip"></i>
                                </a>
                                <a href="message.html#!" class="ms-1 d-inline-block">
                                    <i class="bi bi-caret-right btn btn-outline-secondary py-0 px-2" title="Next Page" data-bs-toggle="tooltip"></i>
                                </a>
                            </div>
                            <div class="col-12 collapse" id="search">
                                <div class="input-group my-3 mb-md-0 bg-light p-3 rounded-4">
                                    <input type="text" placeholder="Search by user or message" class="form-control" aria-describedby="search"/>
                                    <button class="btn btn-outline-secondary" type="button" id="search">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="custom-table-design-three mb-3">
                        <!-- item -->
                    

                        <!-- item -->
                        <div class="table-design-three-item border-top pt-3 mt-3">
                            <div class="row align-items-center">
                                <div class="col-2">
                                    <a href="message-details.html" class="user-img d-flex align-items-center">
                                        <img src="../../assets/img/user-02.png" class="rounded-circle border" alt="">
                                        <h2 class="mb-0">Isroilov Ozodbek Xurshidovich</h2>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="message-details.html"><small class="bg-primary text-white d-inline-block px-2 rounded-pill me-1">Doctor</small> Important Notice for 16 May - 20 May</a>
                                </div>
                                <div class="col-2">
                                    <span class="date text-secondary">10:31 AM</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- item -->
                        <div class="table-design-three-item border-top pt-3 mt-3">
                            <div class="row align-items-center">
                            
                                <div class="col-2">
                                    <a href="message-details.html" class="user-img d-flex align-items-center">
                                        <img src="../../assets/img/user-03.png" class="rounded-circle border" alt="">
                                        <h2 class="mb-0">Abdurakhimov Bekzod Anvarovich</h2>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="message-details.html"><small class="bg-warning text-white d-inline-block px-2 rounded-pill me-1">Patient</small> Changes done.</a>
                                </div>
                                <div class="col-2">
                                    <span class="date text-secondary">12:17 PM</span>
                                </div>
                               
                            </div>
                        </div>
                        
                        <!-- item -->
                        <div class="table-design-three-item border-top pt-3 mt-3">
                            <div class="row align-items-center">

                                <div class="col-2">
                                    <a href="message-details.html" class="user-img d-flex align-items-center">
                                        <img src="../../assets/img/user-04.png" class="rounded-circle border" alt="">
                                        <h2 class="mb-0">Riyazuddin</h2>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="message-details.html"><small class="bg-success text-white d-inline-block px-2 rounded-pill me-1">Moderator</small> Your customers want conversations</a>
                                </div>
                                <div class="col-2">
                                    <span class="date text-secondary">09:17 PM</span>
                                </div>
                             
                            </div>
                        </div>
                        
                        <!-- item -->
                        <div class="table-design-three-item border-top pt-3 mt-3">
                            <div class="row align-items-center">
            
                                <div class="col-2">
                                    <a href="message-details.html" class="user-img d-flex align-items-center">
                                        <div>
                                            <span class="no-image bg-primary text-white d-inline-flex align-items-center justify-content-center rounded-circle">S</span>
                                        </div>
                                        <h2 class="mb-0">Shamsuddin</h2>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="message-details.html"><small class="bg-warning text-white d-inline-block px-2 rounded-pill me-1">Patient</small> Prototype Design - v2</a>
                                </div>
                                <div class="col-2">
                                    <span class="date text-secondary">04:32 PM</span>
                                </div>
                            </div>
                        </div>

                        <!-- item -->

                        <!-- item -->
    
                        
                        <!-- item -->
                       
                        <!-- item -->
                        <div class="table-design-three-item border-top pt-3 mt-3">
                            <div class="row align-items-center">
                         
                                <div class="col-2">
                                    <a href="message-details.html" class="user-img d-flex align-items-center">
                                        <img src="../../assets/img/user-04.png" class="rounded-circle border" alt="">
                                        <h2 class="mb-0">Riyazuddin</h2>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="message-details.html"><small class="bg-success text-white d-inline-block px-2 rounded-pill me-1">Moderator</small> Your customers want conversations</a>
                                </div>
                                <div class="col-2">
                                    <span class="date text-secondary">09:17 PM</span>
                                </div>
        
                            </div>
                        </div>
                        
                        <!-- item -->
                        <div class="table-design-three-item border-top pt-3 mt-3">
                            <div class="row align-items-center">
                          
                                <div class="col-2">
                                    <a href="message-details.html" class="user-img d-flex align-items-center">
                                        <div>
                                            <span class="no-image bg-primary text-white d-inline-flex align-items-center justify-content-center rounded-circle">S</span>
                                        </div>
                                        <h2 class="mb-0">Shamsuddin</h2>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="message-details.html"><small class="bg-warning text-white d-inline-block px-2 rounded-pill me-1">Patient</small> Prototype Design - v2</a>
                                </div>
                                <div class="col-2">
                                    <span class="date text-secondary">04:32 PM</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- item -->
                        <div class="table-design-three-item border-top pt-3 mt-3">
                            <div class="row align-items-center">
                            
                                <div class="col-2">
                                    <a href="message-details.html" class="user-img d-flex align-items-center">
                                        <img src="../../assets/img/user-01.png" class="rounded-circle border" alt="">
                                        <h2 class="mb-0">Abdurakhimov Bekzod Anvarovich</h2>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="message-details.html"><small class="bg-primary text-white d-inline-block px-2 rounded-pill me-1">Doctor</small> Can we help you to setup your website?</a>
                                </div>
                                <div class="col-2">
                                    <span class="date text-secondary">01:17 PM</span>
                                </div>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="table-design-three-item border-top pt-3 mt-3">
                            <div class="row align-items-center">
                              
                                <div class="col-2">
                                    <a href="message-details.html" class="user-img d-flex align-items-center">
                                        <img src="../../assets/img/user-02.png" class="rounded-circle border" alt="">
                                        <h2 class="mb-0">Abdurakhimov Bekzod Anvarovich</h2>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="message-details.html"><small class="bg-primary text-white d-inline-block px-2 rounded-pill me-1">Doctor</small> Important Notice for 16 May - 20 May</a>
                                </div>
                                <div class="col-2">
                                    <span class="date text-secondary">10:31 AM</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- item -->
                        <div class="table-design-three-item border-top pt-3 mt-3">
                            <div class="row align-items-center">
                            
                                <div class="col-2">
                                    <a href="message-details.html" class="user-img d-flex align-items-center">
                                        <img src="../../assets/img/user-03.png" class="rounded-circle border" alt="">
                                        <h2 class="mb-0">Abdurakhimov Bekzod Anvarovich</h2>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="message-details.html"><small class="bg-warning text-white d-inline-block px-2 rounded-pill me-1">Patient</small> Changes done.</a>
                                </div>
                                <div class="col-2">
                                    <span class="date text-secondary">12:17 PM</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- item -->
                        <div class="table-design-three-item border-top pt-3 mt-3">
                            <div class="row align-items-center">
                           
                                <div class="col-2">
                                    <a href="message-details.html" class="user-img d-flex align-items-center">
                                        <img src="../../assets/img/user-04.png" class="rounded-circle border" alt="">
                                        <h2 class="mb-0">Riyazuddin</h2>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="message-details.html"><small class="bg-success text-white d-inline-block px-2 rounded-pill me-1">Moderator</small> Your customers want conversations</a>
                                </div>
                                <div class="col-2">
                                    <span class="date text-secondary">09:17 PM</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- item -->
                        <div class="table-design-three-item border-top pt-3 mt-3">
                            <div class="row align-items-center">
                         
                                <div class="col-2">
                                    <a href="message-details.html" class="user-img d-flex align-items-center">
                                        <div>
                                            <span class="no-image bg-primary text-white d-inline-flex align-items-center justify-content-center rounded-circle">S</span>
                                        </div>
                                        <h2 class="mb-0">Shamsuddin</h2>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="message-details.html"><small class="bg-warning text-white d-inline-block px-2 rounded-pill me-1">Patient</small> Prototype Design - v2</a>
                                </div>
                                <div class="col-2">
                                    <span class="date text-secondary">04:32 PM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end content -->

                <!-- start compose mail modal -->
                <div class="modal fade" id="composeMail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="composeMailLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="composeMailLabel">Compose Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 px-4">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span>To</span>
                                        </div>
                                        <div class="col px-0">
                                            <input type="email" class="form-control border-0" placeholder="Recipient">
                                        </div>
                                        <div class="col-auto">
                                            <span class="pointer d-inline-block me-2" data-bs-target="#cc" data-bs-toggle="collapse">CC</span>
                                            <span class="pointer d-inline-block" data-bs-target="#bcc" data-bs-toggle="collapse">BCC</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 px-4 collapse" id="cc">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span>CC</span>
                                        </div>
                                        <div class="col px-0">
                                            <input type="email" class="form-control border-0" placeholder="Recipient">
                                        </div>
                                        <div class="col-auto">
                                            <span class="pointer d-inline-block me-2" data-bs-target="#cc" data-bs-toggle="collapse"><i class="bi bi-x-lg"></i></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12 px-4 collapse" id="bcc">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span>BCC</span>
                                        </div>
                                        <div class="col px-0">
                                            <input type="email" class="form-control border-0" placeholder="Recipient">
                                        </div>
                                        <div class="col-auto">
                                            <span class="pointer d-inline-block me-2" data-bs-target="#bcc" data-bs-toggle="collapse"><i class="bi bi-x-lg"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 border-top mt-2 pt-2">
                                    <input type="text" class="form-control border-0" placeholder="Subject">
                                </div>
                                <div class="col-12 border-top mt-2">
                                    <textarea class="form-control border-0" rows="5" placeholder="Hi.."></textarea>
                                </div>

                                <div class="col-12 border-top pt-3 collapse" id="attachement">
                                    <div class="file-input-design-one">
                                        <div class="file-loading">
                                            <input id="mailAttachement" name="kartik-input-711[]" type="file" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-block">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <button type="button" class="btn btn-primary px-4">Send</button>
                                </div>
                                <div class="col">
                                    <div class="dropdown custom-dropdown d-inline-block">
                                        <a class="dropdown-toggle px-0" href="message.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-hash fs-5" title="Template" data-bs-toggle="tooltip"></i>
                                        </a>
                                    
                                        <ul class="dropdown-menu p-2 my-2" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item px-2 rounded-2" href="message.html#!">Quick insert</a></li>
                                            <li><a class="dropdown-item px-2 rounded-2" href="message.html#!">Thank you message</a></li>
                                            <li><a class="dropdown-item px-2 rounded-2" href="message.html#!">Your issues solved</a></li>
                                            
                                            <li class="border-top mt-2 pt-2"><a class="dropdown-item px-2 rounded-2" href="message.html#!"><i class="bi bi-card-checklist"></i> Saved as template</a></li>
                                            <li><a class="dropdown-item px-2 rounded-2" href="message.html#!"><i class="bi bi-card-text"></i> Manage template</a></li>
                                        </ul>
                                    </div>

                                    <a href="message.html#attachement" data-bs-toggle="collapse" class="text-secondary d-inline-block ms-3"><i class="bi bi-paperclip fs-5" title="Upload attachment" data-bs-toggle="tooltip"></i></a>
                                    <a href="message.html#!" class="text-secondary d-inline-block ms-3"><i class="bi bi-emoji-smile fs-5" title="Inser emoji" data-bs-toggle="tooltip"></i></a>
                                    <a href="message.html#attachement" data-bs-toggle="collapse" class="text-secondary d-inline-block ms-3"><i class="bi bi-image fs-5" title="Upload image" data-bs-toggle="tooltip"></i></a>
                                </div>
                                <div class="col-auto">
                                    <div class="dropdown custom-dropdown d-inline-block">
                                        <a class="dropdown-toggle px-0" href="message.html#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical fs-5"></i>
                                        </a>
                                    
                                        <ul class="dropdown-menu p-2 my-2" aria-labelledby="dropdownMenuLink">
                                            <li>
                                                <a class="dropdown-item px-2 rounded-2" href="message.html#!">
                                                    Another option
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item px-2 rounded-2" href="message.html#!">
                                                    More option
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="message.html#!" class="text-danger ms-2 fs-5"><i class="bi bi-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- end compose mail modal -->
            </div>
        </div>
    </div>
</section>
@endsection