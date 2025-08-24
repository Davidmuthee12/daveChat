<?php include "../Partials/header/header.php"; ?>
<div class="chatApp d-flex h-100 m-1">
    <div class="aside w-40 h-100 border-1 m-2 p-2 border-right">
        <h4>daveChat</h4>
        <div class="search">
            <input class="rounded-pill w-100 p-1 form-control shadow-none" type="text" placeholder="Search Contact">
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

        <div class="tab-content border-top mt-2">
            <div class="tab-pane fade show active" id="allChats" role="tabpanel" aria-labelledby="allChats-tab">
                <h4>Chats here</h4>
            </div>
            <div class="tab-pane fade" id="unread" role="tabpanel" aria-labelledby="unread-tab">
                <h4>Unread here</h4>
            </div>
            <div class="tab-pane fade" id="groups" role="tabpanel" aria-labelledby="groups-tab">
                <h4>Groups here</h4>
            </div>
        </div>
    </div>

    <div class="main w-60 h-100">
        <h3>Chat window here</h3>
    </div>
</div>