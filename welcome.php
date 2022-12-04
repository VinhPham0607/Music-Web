<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="music.js"></script>
    <link rel="icon" type="image/x-icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Spotify_icon.svg/1982px-Spotify_icon.svg.png">
    <script src="https://kit.fontawesome.com/def9820dcb.js" crossorigin="anonymous"></script>
    <title>Spotify</title>
</head>

<body>
    <div id="main">
        <div id="header">
            <a href="#"><i class="fa-brands fa-spotify fa-3x"></i></a>
            <a href="#" id="logo">Spotify</a>

            <div class="search">
                <i class="fa-solid fa-magnifying-glass "></i>
                <input type="text" placeholder="Tìm kiếm bài hát...">
                <div class="search_result">
                    <!-- <a href="#" class="card">
                        <img src="img/1.jpg" alt="">
                        <div class="content">
                            On My Way
                            <div class="subtitle">Alan Walker</div>
                        </div>
                        <i class="fa-solid fa-circle-play playListPlay1" id=""></i>
                    </a> -->
                </div>
            </div>

            <div class="icon">
                <span>
                    <a style="color: white;" href="#"><i class="fa-solid fa-gear fa-2x ihover"><h6 id="iconsetting">Setting</h6></i></a>
                </span>
                <span>
                    <a style="color: white;" href="logout.php"><i class="fa-solid fa-user fa-2x ihover"><h6 id="iconuser">User</h6></i><a>
                </span>    
            </div>  
        </div>

        <div class="container">
            <div class="catory">
                <div><a class="tablink" onclick="openMusic(event, 'EDM', 'EDM1')" href="#">EDM</a></div>
                <div><a class="tablink" onclick="openMusic(event, 'R&B', 'R&B1')" href="#">R&B</a></div>
                <div><a class="tablink" onclick="openMusic(event, 'Pop', 'Pop1')" href="#">Pop</a></div>
                <div><a class="tablink" onclick="openMusic(event, 'Country', 'Country1')" href="#">Country</a></div>
                <div><a class="tablink" onclick="openMusic(event, 'Rock', 'Rock1')" href="#">Rock</a></div>
            </div>

            <div id="course-item1">
                <h1>Playlist</h1>
                <h2>Top 5 Bài Hát</h2>
                <div id="EDM" class="music" style="display:none">
                    <div class="menu_song">
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="1"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="2"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="3"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="4"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="5"></i>
                        </li>
                    </div>
                </div>

                <div id="R&B" class="music" style="display:none">
                    <div class="menu_song">
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="6"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="7"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="8"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="9"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="10"></i>
                        </li>
                    </div>
                </div>

                <div id="Pop" class="music" style="display:none">
                    <div class="menu_song">
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="11"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="12"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="13"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="14"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="15"></i>
                        </li>
                    </div>
                </div>

                <div id="Country" class="music" style="display:none">
                    <div class="menu_song">
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="16"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="17"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="18"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="19"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="20"></i>
                        </li>
                    </div>
                </div>

                <div id="Rock" class="music" style="display:none">
                    <div class="menu_song">
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="21"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="22"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="23"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="24"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="25"></i>
                        </li>
                    </div>
                </div>
            </div>

            <div id="course-item2">
                <h1>Recomendation List</h1>
                <h2>Các Bài Hát Cùng Thể Loại</h2>
                <div id="EDM1" class="music1" style="display:none">
                    <div class="menu_song">
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="26"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="27"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="28"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="29"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="30"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="31"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="32"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="33"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="34"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="35"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="36"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="37"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="38"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="39"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="40"></i>
                        </li>
                        <li class="songItem1">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                        </li>
                    </div>
                </div>

                <div id="R&B1" class="music1" style="display:none">
                    <div class="menu_song">
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="41"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="42"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="43"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="44"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="45"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="46"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="47"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="48"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="49"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="50"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="51"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="52"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="53"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="54"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="55"></i>
                        </li>
                        <li class="songItem1">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                        </li>
                    </div>
                </div>

                <div id="Pop1" class="music1" style="display:none">
                    <div class="menu_song">
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="56"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="57"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="58"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="59"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="60"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="61"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="62"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="63"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="64"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="65"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="66"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="67"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="68"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="69"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="70"></i>
                        </li>
                        <li class="songItem1">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                        </li>
                    </div>
                </div>

                <div id="Country1" class="music1" style="display:none">
                    <div class="menu_song">
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="71"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="72"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="73"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="74"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="75"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="76"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="77"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="78"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="79"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="80"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="81"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="82"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="83"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="84"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="85"></i>
                        </li>
                        <li class="songItem1">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                        </li>
                    </div>
                </div>

                <div id="Rock1" class="music1" style="display:none">
                    <div class="menu_song">
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="86"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="87"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="88"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="89"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="90"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="91"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="92"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="93"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="94"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="95"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="96"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="97"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="98"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="99"></i>
                        </li>
                        <li class="songItem">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                            <i class="fa-solid fa-circle-play playListPlay" id="100"></i>
                        </li>
                        <li class="songItem1">
                            <img src="img/100th.jpg" alt="Alan">
                            <h5>
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </h5>
                        </li>
                    </div>
                </div>
            </div>

        </div>

        <div class="master_play">
            <div class="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/skyfall.jpg" alt="Alan" id="poster_master_play">
            <h5 id="title">Skyfall<br>
                <div class="subtitle">Adele</div>
            </h5>
            <div class="icon">
                <i class="fa-sharp fa-solid fa-music shuffle">next</i>
                <i id="back" class="fa-solid fa-backward-step"></i>
                <i id="masterPlay" class="fa-solid fa-play"></i>
                <i id="next" class="fa-solid fa-forward-step"></i>
                <a href="" download id="download_music"><i class="fa-solid fa-download"></i></a>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" value="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:00</span>

            <div class="vol">
                <i id="vol_icon" class="fa-solid fa-volume-low"></i>
                <input type="range" id="vol" min="0" value="30" max="100">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>
    </div>
    <style>
        .container .catory {
            padding-top: 50px;
        }
        .ihover {
            position: relative;
        }
        #iconsetting {
            text-align: center;
            font-size: 13px;
            position: absolute;
            top: 40px;
            left: -17px;
            color: black;
            background-color: white;
            padding: 3px 10px;
            border-radius: 5px;
            display: none;
        }
        #iconuser {
            text-align: center;
            font-size: 13px;
            position: absolute;
            top: 40px;
            left: -12px;
            color: black;
            background-color: white;
            padding: 3px 10px;
            border-radius: 5px;
            display: none;
        }
        .ihover:hover > #iconsetting {
            display: block;
        }
        .ihover:hover > #iconuser {
            display: block;
        }
    </style>
    <script src="app.js"></script>
</body>

</html>