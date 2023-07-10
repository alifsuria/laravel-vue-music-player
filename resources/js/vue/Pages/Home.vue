<template>
    <div class="d-flex">
        <Sidebar />
        <div class="content">
            <div class="content-wrapper">
                <!-- Navbar -->
                <div class="d-flex align-items-center justify-content-between custom-navbar">
                    <div class="content-title">
                        <h3 class="mb-0">Discover</h3>
                    </div>
                    <div class="d-flex">
                        <div class="navbar-item">
                            <span> <font-awesome-icon icon="fa-solid fa-user-secret" />
                            </span>
                        </div>
                        <div class="navbar-item">
                            <span> <font-awesome-icon icon="fa-solid fa-user-secret" />
                            </span>
                        </div>
                        <div class="navbar-item">
                            <span> <font-awesome-icon icon="fa-solid fa-user-secret" />
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Navbar -->
                <div class="main-content">
                    <div class="recently-played-group">
                        <p class="group-text-guide">RECENTLY PLAYED</p>
                        <div class="recently-played-list">
                            <div class="recently-played-item">
                                <img src="@/assets/img/arknights.jpeg" alt="">
                                <div class="pt-3">
                                    <p class="recently-played-title">Arknight:Prelude of Dawn</p>
                                    <p class="recently-played-artist">Vanguard Studio</p>
                                </div>
                            </div>
                            <div class="recently-played-item">
                                <img src="@/assets/img/arknights.jpeg" alt="">
                                <div class="pt-3">
                                    <p class="recently-played-title">Arknight:Prelude of Dawn</p>
                                    <p class="recently-played-artist">Vanguard Studio</p>
                                </div>
                            </div>
                            <div class="recently-played-item">
                                <img src="@/assets/img/arknights.jpeg" alt="">
                                <div class="pt-3">
                                    <p class="recently-played-title">Arknight:Prelude of Dawn</p>
                                    <p class="recently-played-artist">Vanguard Studio</p>
                                </div>
                            </div>
                            <div class="recently-played-item">
                                <img src="@/assets/img/arknights.jpeg" alt="">
                                <div class="pt-3">
                                    <p class="recently-played-title">Arknight:Prelude of Dawn</p>
                                    <p class="recently-played-artist">Vanguard Studio</p>
                                </div>
                            </div>
                            <div class="recently-played-item">
                                <img src="@/assets/img/arknights.jpeg" alt="">
                                <div class="pt-3">
                                    <p class="recently-played-title">Arknight:Prelude of Dawn</p>
                                    <p class="recently-played-artist">Vanguard Studio</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3" style="height:15rem">
                        <p class="group-text-guide">ANALYTIC</p>
                        <div class="recently-added-group">
                            <table class="w-100">
                                <tr class="rag-item">
                                    <td>#1</td>
                                    <td class="rag-item-img-col"><img class="rag-item-img" src="@/assets/img/arknights.jpeg"
                                            alt=""></td>
                                    <td>
                                        <p class="rag-item-title">Arknights: Prelude Of Dawn</p>
                                        <p class="rag-item-artist">Vanguard Studio</p>
                                    </td>
                                    <td>
                                        <p class="rag-item-artist-2 mb-0">Vanguard Studio</p>
                                    </td>
                                    <td class="play-count-col">
                                        <span class="me-2"><font-awesome-icon icon="fa-solid fa-music" /></span>
                                        <span class="play-count-value">1000</span>
                                    </td>
                                    <td class="rag-item-music-col">
                                        <span class="music-icon me-2">
                                            <font-awesome-icon icon="fa-regular fa-clock" />
                                        </span>
                                        <span class="music-value">3:45</span>
                                    </td>
                                    <td><span><font-awesome-icon icon="fa-regular fa-heart" /></span></td>
                                    <td class="rag-item-more-option-col">

                                        <div class="dropdown">
                                            <!-- <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown link
                                            </a> -->
                                            <a class="more-option" data-bs-toggle="dropdown"
                                                id="dropdownMenuLink"><font-awesome-icon icon="fa-solid fa-ellipsis" /></a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="rag-item currently-played">
                                    <td class="rag-item-index"><span><font-awesome-icon
                                                icon="fa-brands fa-soundcloud" /></span></td>
                                    <td class="rag-item-img-col"><img class="rag-item-img" src="@/assets/img/arknights.jpeg"
                                            alt=""></td>
                                    <td>
                                        <p class="rag-item-title">Arknights: Prelude Of Dawn</p>
                                        <p class="rag-item-artist">Vanguard Studio</p>
                                    </td>
                                    <td>
                                        <p class="rag-item-artist-2 mb-0">Vanguard Studio</p>
                                    </td>
                                    <td class="play-count-col">
                                        <span class="me-2"><font-awesome-icon icon="fa-solid fa-music" /></span>
                                        <span class="play-count-value">1000</span>
                                    </td>
                                    <td class="rag-item-music-col">
                                        <span class="music-icon me-2">
                                            <font-awesome-icon icon="fa-regular fa-clock" />
                                        </span>
                                        <span class="music-value">3:45</span>
                                    </td>
                                    <td><span><font-awesome-icon icon="fa-regular fa-heart" /></span></td>
                                    <td class="rag-item-more-option-col">

                                        <div class="dropdown">
                                            <!-- <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown link
                                            </a> -->
                                            <a class="more-option" data-bs-toggle="dropdown"
                                                id="dropdownMenuLink"><font-awesome-icon icon="fa-solid fa-ellipsis" /></a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="media-player">
                        <img class="mp-img" src="@/assets/img/arknights.jpeg" alt="">
                        <div class="media-player-action">
                            <div class="mp-inner-media-player-action">
                                <div class="left-mp-action">
                                    <span class="mp-button"><font-awesome-icon icon="fa-regular fa-heart" /></span>
                                    <span class="mp-button"><font-awesome-icon icon="fa-solid fa-download" /></span>
                                </div>
                                <div class="center-mp-action mx-auto">
                                    <span class="mp-button"><font-awesome-icon icon="fa-solid fa-backward-step" /></span>
                                    <span class="mp-button"><font-awesome-icon icon="fa-solid fa-backward" /></span>
                                    <span class="mp-button"><font-awesome-icon icon="fa-solid fa-play" /></span>
                                    <span class="mp-button"><font-awesome-icon icon="fa-solid fa-pause" /></span>
                                    <span class="mp-button"><font-awesome-icon icon="fa-solid fa-forward" /></span>
                                    <span class="mp-button"><font-awesome-icon icon="fa-solid fa-forward-step" /></span>
                                </div>
                                <div class="right-mp-action ms-auto">
                                    <span class="mp-button"><font-awesome-icon icon="fa-solid fa-shuffle" /></span>
                                    <span class="mp-button"><font-awesome-icon icon="fa-solid fa-repeat" /></span>
                                </div>
                            </div>
                            <div class="playback">
                                
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script setup lang="ts">
import Sidebar from '@/components/Sidebar.vue';


</script>

<style scoped></style>