<?php include "../Partials/header/header.php"; ?>
<div class="chatApp d-flex h-100 m-1">
    <div class="aside h-100 border  p-2">
        <h4>DavesChat</h4>
        <div class="search">
            <input class=" w-100 p-1 form-control shadow-none" type="text" placeholder="Search Contact">
        </div>
        <div class="nav-tabs-wrapper mt-2">
            <ul class="nav nav-tabs" id="navTabs" role="tablist">
                <li class="nav-item p-2">
                    <a class="nav-link active btn bg-danger rounded-pill text-white shadow-none" id="allChats-tab" data-toggle="tab" href="#allChats" role="tab" aria-controls="allChats" aria-selected="true">All</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link btn bg-danger rounded-pill text-white shadow-none" id="unread-tab" data-toggle="tab" href="#unread" role="tab" aria-controls="unread" aria-selected="false">Unread</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link btn bg-danger rounded-pill text-white shadow-none" id="groups-tab" data-toggle="tab" href="#groups" role="tab" aria-controls="groups" aria-selected="false">Groups</a>
                </li>
            </ul>
        </div>

        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="allChats" role="tabpanel" aria-labelledby="allChats-tab">
                <!-- <h4>Chats here</h4> -->
                <div class="card chat-item d-flex flex-row m-1 p-2 justify-content-around align-items-center">
                    <div class="avatar">
                        <img src="../Assets/images/image.png" alt="">
                    </div>
                    <div class="name d-flex mr-auto p-2 flex-column">
                        <h6>Chege Boy</h6>
                        <p>Last Message here</p>
                    </div>
                    <div class="time ">3:78AM</div>
                </div>
                <div class="card chat-item d-flex flex-row m-1 p-2 justify-content-around align-items-center">
                    <div class="avatar">
                        <img src="../Assets/images/avatar2.png" alt="">
                    </div>
                    <div class="name d-flex mr-auto p-2 flex-column">
                        <h6>Makali</h6>
                        <p>Last Message here</p>
                    </div>
                    <div class="time ">3:78AM</div>
                </div>
            </div>
            <div class="tab-pane fade" id="unread" role="tabpanel" aria-labelledby="unread-tab">
                <h4>Unread here</h4>
            </div>
            <div class="tab-pane fade" id="groups" role="tabpanel" aria-labelledby="groups-tab">
                <h4>Groups here</h4>
            </div>
        </div>
    </div>

    <div class="main h-100 border ">
        <!-- <h3>Chat window here</h3> -->
        <div class="placeHolder align-items-center justify-content-center flex-column">
            <div class="logo ">
                <img src="../Assets/images/logo.jpg" alt="">
            </div>
            <p>Welcome to DavesChat</p>
        </div>

        <div class="chatWindow d-flex flex-column">
            <div class="chatHeader d-flex flex-row border-bottom align-items-center p-1">
                <div class="chatAvatar">
                    <img src="../Assets/images/image.png" alt="">
                </div>
                <div class="chatTitle ml-2">
                    <h6>Chat Name</h6>
                </div>
            </div>
            <div class="chatMessages">
                <div class="message sent p-2">
                    <div class="text">Hallo sir, im texting you to remind you of our agreement</div>
                    <span>11:87AM</span>
                </div>
                <div class="message received p-1">
                    <div class="text">sir goodmorning, i understand </div>
                    <span>11:87AM</span>
                </div>
            </div>
            <div class="message-input d-flex align-items-center p-1">
                <button class="inputAction"><i class='bx  bx-smile'></i> </button>
                <button class="inputAction"><i class='bx  bx-paperclip bx-rotate-90'></i> </button>
                <input type="text" class="msg-input form-control shadow-none" placeholder="Type message here...">
                <button class="inputAction"><i class='bx  bx-microphone bx-rotate-90 bx-flip-horizontal'></i> </button>
            </div>
        </div>
    </div>
</div>
<?php include '../Partials/footer/footer.php'; ?>