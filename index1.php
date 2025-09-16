  <!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KKD音乐站</title>
    <!-- 引入Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- 引入Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- 配置Tailwind主题 -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6', // 蓝色作为主色调
                        secondary: '#10B981', // 绿色作为辅助色
                        dark: {
                            100: '#374151',
                            200: '#1F2937',
                            300: '#111827',
                            400: '#030712',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    
        <!-- 自定义工具类 -->
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
            .card-hover {
                transition: all 0.3s ease;
            }
            .card-hover:hover {
                transform: translateY(-5px);
            }
            .progress-track {
                height: 4px;
                background-color: rgba(255, 255, 255, 0.1);
                border-radius: 2px;
                cursor: pointer;
            }
            .progress-fill {
                height: 100%;
                background-color: #3B82F6;
                border-radius: 2px;
                transition: width 0.15s linear;
            }
            .player-gradient {
                background: linear-gradient(to top, rgba(17, 24, 39, 0.95), rgba(17, 24, 39, 0.8));
            }
        }

        /* 👇 在这里新增封面旋转的CSS动画 */
        /* 旋转动画：匀速30秒一圈（速度可调整） */
        @keyframes albumRotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /* 播放时添加的旋转类 */
        #now-playing-cover.rotate {
            animation: albumRotate 30s linear infinite;
        }

        /* 暂停时的样式：保留当前旋转角度，不重置 */
        #now-playing-cover.pause-rotate {
            animation-play-state: paused;
        }
    </style>
</head>
<body class="bg-dark-400 text-white font-sans min-h-screen flex flex-col">
    <!-- 顶部导航栏 -->
 <header class="bg-dark-300/80 backdrop-blur-md sticky top-0 z-40 border-b border-dark-100/20">
  <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <!-- 网站标志区域 -->
    <div class="flex items-center gap-3">
      <!-- 图片容器 -->
      <div class="w-10 h-10 rounded-full flex items-center justify-center p-1">
        <img src="piggod.jpg" 
             alt="piggod.png" 
             title="piggod.png" 
             class="w-full h-full object-contain rounded-full">
      </div>
      <!-- 网站名称（可添加） -->
      <h1 class="text-xl font-bold">KKD</h1>
    </div>
    
            <!-- 时间显示（精确到秒） -->
            <div class="flex items-center gap-2 text-gray-300">
                <span id="current-date" class="text-sm">6654年5月6日</span>
                <span id="current-time" class="font-medium">66:54:56</span>
                <span id="cat" class="text-sm"> </span>
            </div>
        </div>
    </header>

    <!-- 主内容区 -->
    <main class="flex-1 container mx-auto px-4 py-8 pb-40">
        <!-- 页面标题 -->
        <div class="mb-10">
            <h2 class="text-[clamp(1.5rem,3vw,2.5rem)] font-bold mb-2">音乐由KING PHONK耗时Ⅵ天匠心制作</h2>
            <p class="text-gray-400">太高质了酷狗没过审</p>
        </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- 展示 -->
                <div class="bg-dark-300 rounded-xl overflow-hidden card-hover">
                    <div class="relative h-48">
                        <img src="piggod.jpg" alt="展示猪头" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark-300 to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <h4 class="font-bold text-lg">了解作者</h4>
                            <p class="text-gray-300 text-sm">KING PHONK</p>
                        </div>
                    </div>
                    <div class="p-4 flex justify-between items-center">
                        <span class="text-xs text-gray-400">微信号：lanhaozhe120807</span>
                        </button>
                    </div>
                </div>
                <div class="bg-dark-300 rounded-lg p-3 mb-6 border-l-2 border-primary">
  <div class="flex items-center justify-between">
    <div class="flex items-center">
      <span class="text-sm font-medium">KKD音乐站公告</span>
    </div>
    <span class="text-xs">2025/9/16</span>
  </div>
  <p class="text-xs mt-2 leading-relaxed">
<?php
function showVisitCounter() {
    // 定义存储访问次数的文件路径
    $countFile = 'visit_num.txt';
    
    // 确保文件存在
    if (!file_exists($countFile)) {
        file_put_contents($countFile, '0');
    }
    
    // 读取并更新计数
    $count = intval(file_get_contents($countFile)) + 1;
    file_put_contents($countFile, $count);
    
    // 高亮显示访问次数（使用加粗和颜色突出）
    return '网站已经被访问了<span style="font-weight: bold; color: #e63946;">' . $count . '</span> 次';
}

// 调用函数显示计数器
echo showVisitCounter();
?>
 </br>
<a href="http.html">➡️点我上传歌曲到KKD音乐站⬅️</a></br>
鬼子！
    
      
  </p>
</div>
</div>
 </section>
        
        <!-- 热门歌曲 -->
        <section>
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-semibold">歌曲列表(共10首)</h3>
                </a>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <!-- 歌曲1 -->
                <div class="song-item card-hover" data-id="1" data-title="Terrible devil" data-artist="KING PHONK" data-src="Terrible devil.mp3">
                    <div class="relative rounded-lg overflow-hidden aspect-square mb-3">
                        <img src="1.jpg" alt="歌曲1" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 opacity-0 hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center transform scale-90 hover:scale-100 transition-transform">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-medium text-sm truncate">Terrible devil</h4>
                    <p class="text-gray-400 text-xs truncate">KING PHONK</p>
                </div>
                
                <!-- 歌曲2 -->
                <div class="song-item card-hover" data-id="2" data-title="Night drift" data-artist="KING PHONK" data-src="Night drift.mp3">
                    <div class="relative rounded-lg overflow-hidden aspect-square mb-3">
                        <img src="2.jpg" alt="歌曲2" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 opacity-0 hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center transform scale-90 hover:scale-100 transition-transform">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-medium text-sm truncate">Night drift</h4>
                    <p class="text-gray-400 text-xs truncate">KING PHONK</p>
                </div>
                
                <!-- 歌曲3 -->
                <div class="song-item card-hover" data-id="3" data-title="neon blade&wake up" data-artist="KING PHONK" data-src="neon blade&wake up.mp3">
                    <div class="relative rounded-lg overflow-hidden aspect-square mb-3">
                        <img src="3.jpg" alt="歌曲3" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 opacity-0 hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center transform scale-90 hover:scale-100 transition-transform">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-medium text-sm truncate">neon blade&wake up</h4>
                    <p class="text-gray-400 text-xs truncate">KING PHONK</p>
                </div>
                
                <!-- 歌曲4 -->
                <div class="song-item card-hover" data-id="4" data-title="Life and death" data-artist="KING PHONK" data-src="Life and death.mp3">
             <div class="relative rounded-lg overflow-hidden aspect-square mb-3">
                        <img src="4.jpg" alt="歌曲4" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 opacity-0 hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center transform scale-90 hover:scale-100 transition-transform">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-medium text-sm truncate">Life and death</h4>
                    <p class="text-gray-400 text-xs truncate">KING PHONK</p>
                </div>
                
                <!-- 歌曲5 -->
                <div class="song-item card-hover" data-id="5" data-title="FK.No Justice" data-artist="KING PHONK" data-src="FK.No Justice.mp3">
                    <div class="relative rounded-lg overflow-hidden aspect-square mb-3">
                        <img src="5.jpg" alt="歌曲5" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 opacity-0 hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center transform scale-90 hover:scale-100 transition-transform">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-medium text-sm truncate">FK.No Justice</h4>
                    <p class="text-gray-400 text-xs truncate">KING PHONK</p>
                </div>
                
                <!-- 歌曲6 -->
                <div class="song-item card-hover" data-id="6" data-title="FK.At Dusk" data-artist="KING PHONK" data-src="FK.At Dusk.mp3">
                    <div class="relative rounded-lg overflow-hidden aspect-square mb-3">
                        <img src="6.jpg" alt="歌曲6" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 opacity-0 hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center transform scale-90 hover:scale-100 transition-transform">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-medium text-sm truncate">FK.At Dusk</h4>
                    <p class="text-gray-400 text-xs truncate">KING PHONK</p>
                </div>
                
                <!--歌曲7-->
                <div class="song-item card-hover" data-id="4" data-title="Bloody sunset" data-artist="KING PHONK" data-src="Bloody sunset.mp3">
             <div class="relative rounded-lg overflow-hidden aspect-square mb-3">
                        <img src="7.jpg" alt="歌曲7" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 opacity-0 hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center transform scale-90 hover:scale-100 transition-transform">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-medium text-sm truncate">Bloody sunset</h4>
                    <p class="text-gray-400 text-xs truncate">KING PHONK</p>
                </div>
                
                <!--歌曲8-->
                <div class="song-item card-hover" data-id="4" data-title="FK.WAKE UP!" data-artist="KING PHONK" data-src="FK.WAKE UP!.mp3">
             <div class="relative rounded-lg overflow-hidden aspect-square mb-3">
                        <img src="8.jpg" alt="歌曲8" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 opacity-0 hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center transform scale-90 hover:scale-100 transition-transform">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-medium text-sm truncate">FK.WAKE UP!</h4>
                    <p class="text-gray-400 text-xs truncate">KING PHONK</p>
                </div>
                
                <!-- 歌曲9 -->
                <div class="song-item card-hover" data-id="2" data-title="sea of tranquility" data-artist="KING PHONK" data-src="sea of tranquility.mp3">
                    <div class="relative rounded-lg overflow-hidden aspect-square mb-3">
                        <img src="9.jpg" alt="歌曲9" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 opacity-0 hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center transform scale-90 hover:scale-100 transition-transform">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-medium text-sm truncate">sea of tranquility</h4>
                    <p class="text-gray-400 text-xs truncate">KING PHONK</p>
                </div>
                
                <!-- 歌曲10 -->
                <div class="song-item card-hover" data-id="2" data-title="GM" data-artist="KING PHONK" data-src="GM.mp3">
                    <div class="relative rounded-lg overflow-hidden aspect-square mb-3">
                        <img src="10.jpg" alt="歌曲10" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40 opacity-0 hover:opacity-100 transition-opacity flex items-center justify-center">
                            <div class="w-12 h-12 rounded-full bg-primary flex items-center justify-center transform scale-90 hover:scale-100 transition-transform">
                                <i class="fa fa-play"></i>
                            </div>
                        </div>
                    </div>
                    <h4 class="font-medium text-sm truncate">GM</h4>
                    <p class="text-gray-400 text-xs truncate">KING PHONK</p>
                </div>
            </div>
        </section>
    </main>

    <!-- 底部播放器 -->
    <footer class="fixed bottom-0 left-0 right-0 player-gradient z-50 border-t border-dark-100/30">
        <div class="container mx-auto px-4">
            <div class="py-4 flex flex-col md:flex-row items-center gap-4">
                <!-- 当前播放信息 -->
                <div class="flex items-center gap-3 w-full md:w-auto">
                    <img id="now-playing-cover" src="piggod.jpg" alt="当前播放歌曲封面" class="w-14 h-14 rounded shadow-lg">
                    <div class="min-w-0">
                        <h4 id="now-playing-title" class="font-medium text-sm truncate max-w-[180px]">滚木</h4>
                        <p id="now-playing-artist" class="text-gray-400 text-xs">KING PHONK</p>
                    </div>
                </div>
                
                <!-- 播放控制 -->
                <div class="flex-1 flex flex-col items-center w-full">
                    <div class="flex items-center gap-2 sm:gap-6 mb-3">
                        <button class="text-gray-400 hover:text-white transition-colors">
                            <i class="fa fa-random"></i>
                        </button>
                        <button class="text-gray-400 hover:text-white transition-colors">
                            <i class="fa fa-step-backward"></i>
                        </button>
                        <button id="play-pause-btn" class="w-12 h-12 rounded-full bg-primary flex items-center justify-center hover:bg-primary/90 transition-colors shadow-lg">
                            <i class="fa fa-pause text-white"></i>
                        </button>
                        <button class="text-gray-400 hover:text-white transition-colors">
                            <i class="fa fa-step-forward"></i>
                        </button>
                        <button class="text-gray-400 hover:text-white transition-colors">
                            <i class="fa fa-repeat"></i>
                        </button>
                    </div>
                    
                    <!-- 进度条 -->
                    <div class="w-full flex items-center gap-2">
                        <span id="progress-time" class="text-xs text-gray-400 min-w-[40px] text-right">00:00</span>
                        <div class="progress-track flex-1" id="progress-container">
                            <div id="progress-bar" class="progress-fill" style="width: 35%;"></div>
                        </div>
                        <span id="total-time" class="text-xs text-gray-400 min-w-[40px]">03:24</span>
                    </div>
                </div>
                
                <!-- 音量控制 -->
                <div class="hidden md:flex items-center gap-3 w-auto">
                    <button id="volume-btn" class="text-gray-400 hover:text-white transition-colors">
                        <i class="fa fa-volume-up"></i>
                    </button>
                    <div class="progress-track w-24" id="volume-container">
                        <div id="volume-bar" class="progress-fill" style="width: 70%;"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- 音频元素 -->
        <audio id="audio-player" src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" preload="metadata"></audio>
    </footer>

    <script>
        // DOM元素
        const audioPlayer = document.getElementById('audio-player');
        const playPauseBtn = document.getElementById('play-pause-btn');
        const progressContainer = document.getElementById('progress-container');
        const progressBar = document.getElementById('progress-bar');
        const progressTime = document.getElementById('progress-time');
        const totalTime = document.getElementById('total-time');
        const nowPlayingTitle = document.getElementById('now-playing-title');
        const nowPlayingArtist = document.getElementById('now-playing-artist');
        const nowPlayingCover = document.getElementById('now-playing-cover');
        const songItems = document.querySelectorAll('.song-item');
        const volumeBtn = document.getElementById('volume-btn');
        const volumeContainer = document.getElementById('volume-container');
        const volumeBar = document.getElementById('volume-bar');
        const currentTimeElement = document.getElementById('current-time');
        const currentDateElement = document.getElementById('current-date');
        
        // 当前播放的歌曲ID
        let currentSongId = '1';
        // 音量状态
        let isMuted = false;
        let lastVolume = 0.7; // 默认音量70%
        
        // 更新时间显示（精确到秒）
        function updateDateTime() {
            const now = new Date();
            
            // 格式化时间 (HH:MM:SS)
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            currentTimeElement.textContent = `${hours}:${minutes}:${seconds}`;
            
            // 格式化日期 (YYYY年MM月DD日 周X)
            const year = now.getFullYear();
            const month = now.getMonth() + 1;
            const day = now.getDate();
            const weekdays = ['日', '一', '二', '三', '四', '五', '六'];
            const weekday = weekdays[now.getDay()];
            
            currentDateElement.textContent = `${year}年
            ${month}月${day}日
            
            周${weekday}`;
        }
        
        // 格式化时间（秒 -> mm:ss）
        function formatTime(seconds) {
            if (isNaN(seconds)) return "00:00";
            const mins = Math.floor(seconds / 60);
            const secs = Math.floor(seconds % 60);
            return `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
        }
        
        // 更新进度条
        function updateProgress() {
            if (isNaN(audioPlayer.duration)) return;
            
            const percent = (audioPlayer.currentTime / audioPlayer.duration) * 100;
            progressBar.style.width = `${percent}%`;
            progressTime.textContent = formatTime(audioPlayer.currentTime);
        }
        
        // 更新音量条
        function updateVolumeBar() {
            volumeBar.style.width = `${audioPlayer.volume * 100}%`;
            
            // 更新音量图标
            if (audioPlayer.volume === 0 || isMuted) {
                volumeBtn.innerHTML = '<i class="fa fa-volume-off"></i>';
            } else if (audioPlayer.volume < 0.5) {
                volumeBtn.innerHTML = '<i class="fa fa-volume-down"></i>';
            } else {
                volumeBtn.innerHTML = '<i class="fa fa-volume-up"></i>';
            }
        }
        
        // 切换播放/暂停状态
        function togglePlayPause() {
            if (audioPlayer.paused) {
                audioPlayer.play();
                playPauseBtn.innerHTML = '<i class="fa fa-pause text-white"></i>';
                updatePlayingState(currentSongId, true);
            } else {
                audioPlayer.pause();
                playPauseBtn.innerHTML = '<i class="fa fa-play text-white"></i>';
                updatePlayingState(currentSongId, false);
            }
        }
        
        // 更新歌曲播放状态显示
        function updatePlayingState(songId, isPlaying) {
            // 重置所有歌曲的播放按钮
            songItems.forEach(item => {
                const iconElement = item.querySelector('.fa-play');
                if (iconElement) {
                    item.querySelector('.fa').className = 'fa fa-play';
                }
            });
            
            // 更新当前播放歌曲的按钮
            const activeItem = document.querySelector(`.song-item[data-id="${songId}"]`);
            if (activeItem) {
                const iconElement = activeItem.querySelector('.fa');
                if (iconElement) {
                    iconElement.className = isPlaying ? 'fa fa-pause' : 'fa fa-play';
                }
            }
        }
        
        // 播放指定歌曲
        function playSong(songElement) {
            const songId = songElement.getAttribute('data-id');
            const title = songElement.getAttribute('data-title');
            const artist = songElement.getAttribute('data-artist');
            const src = songElement.getAttribute('data-src');
            const cover = songElement.querySelector('img').src;
            
            // 如果点击的是当前正在播放的歌曲，则切换播放/暂停
            if (songId === currentSongId && !audioPlayer.paused) {
                togglePlayPause();
                return;
            }
            
            // 更新当前播放信息
            currentSongId = songId;
            nowPlayingTitle.textContent = title;
            nowPlayingArtist.textContent = artist;
            nowPlayingCover.src = cover;
            
            // 加载并播放新歌曲
            audioPlayer.src = src;
            audioPlayer.play().then(() => {
                playPauseBtn.innerHTML = '<i class="fa fa-pause text-white"></i>';
                updatePlayingState(songId, true);
            }).catch(error => {
                console.error('刷新网页领取20元红包:', error);
                alert('播放失败，你不会刷新网页吗？: ' + error.message);
            });
        }
        
        // 进度条点击事件 - 跳转到指定时间
        progressContainer.addEventListener('click', (e) => {
            const rect = progressContainer.getBoundingClientRect();
            const pos = (e.clientX - rect.left) / rect.width;
            audioPlayer.currentTime = pos * audioPlayer.duration;
            updateProgress();
        });
        
        // 音量条点击事件
        volumeContainer.addEventListener('click', (e) => {
            const rect = volumeContainer.getBoundingClientRect();
            const volume = (e.clientX - rect.left) / rect.width;
            audioPlayer.volume = volume;
            lastVolume = volume; // 保存当前音量
            isMuted = false; // 取消静音状态
            updateVolumeBar();
        });
        
        // 切换静音状态
        volumeBtn.addEventListener('click', () => {
            isMuted = !isMuted;
            
            if (isMuted) {
                lastVolume = audioPlayer.volume; // 保存当前音量
                audioPlayer.volume = 0;
            } else {
                audioPlayer.volume = lastVolume; // 恢复之前的音量
            }
            
            updateVolumeBar();
        });
        
        // 音频元数据加载完成后更新总时长
        audioPlayer.addEventListener('loadedmetadata', () => {
            totalTime.textContent = formatTime(audioPlayer.duration);
            updateProgress();
        });
        
        // 音频播放结束时更新状态
        audioPlayer.addEventListener('ended', () => {
            playPauseBtn.innerHTML = '<i class="fa fa-play text-white"></i>';
            updatePlayingState(currentSongId, false);
        });
        
        // 为所有歌曲项添加点击事件
        songItems.forEach(item => {
            item.addEventListener('click', () => {
                playSong(item);
            });
        });
        
        // 播放/暂停按钮事件
        playPauseBtn.addEventListener('click', togglePlayPause);
        
        // 时间更新事件 - 实时更新进度条
        audioPlayer.addEventListener('timeupdate', updateProgress);
        
        // 初始化页面
        window.addEventListener('load', () => {
            // 设置初始音量
            audioPlayer.volume = 0.7;
            updateVolumeBar();
            
            // 更新日期时间（精确到秒）
            updateDateTime();
            // 每秒更新一次时间
            setInterval(updateDateTime, 1000);
            
            // 预加载第一首歌的元数据以获取总时长
            audioPlayer.load();
        });
        // （原有代码全部保留，仅新增以下内容）
        // 获取封面元素和音频元素（你的代码中已有这两个变量，无需重复定义）
        // const audioPlayer = document.getElementById('audio-player');
        // const nowPlayingCover = document.getElementById('now-playing-cover');

        // 音乐播放时：添加旋转类
        audioPlayer.addEventListener('play', () => {
            nowPlayingCover.classList.add('rotate');
            nowPlayingCover.classList.remove('pause-rotate');
        });

        // 音乐暂停时：停止旋转（保留当前角度）
        audioPlayer.addEventListener('pause', () => {
            nowPlayingCover.classList.add('pause-rotate');
        });

        // 音乐结束时：停止旋转
        audioPlayer.addEventListener('ended', () => {
            nowPlayingCover.classList.add('pause-rotate');
        });

        // （原有代码全部保留）
        // 切换歌曲时重置封面状态（单独代码片段）
function resetCoverState() {
    const nowPlayingCover = document.getElementById('now-playing-cover');
    // 移除所有旋转相关类
    nowPlayingCover.classList.remove('rotate', 'pause-rotate');
    // 强制重置为初始角度
    nowPlayingCover.style.transform = 'rotate(0deg)';
}

// 在播放新歌曲前调用重置函数
const originalPlaySong = playSong;
playSong = function(songElement) {
    // 切换歌曲前先重置封面
    resetCoverState();
    // 执行原有播放逻辑
    originalPlaySong(songElement);
};

// 新歌曲开始播放时重新启动旋转
audioPlayer.addEventListener('play', () => {
    const cover = document.getElementById('now-playing-cover');
    cover.classList.add('rotate');
    cover.style.transform = ''; // 清除手动旋转设置
});
   const launchDate = new Date("2025-08-25 12;00;00").getTime();

// 更新运行时间的函数
function updateUptime() {
  const now = new Date().getTime();
  const diff = now - launchDate;
  
  // 计算天、时、分、秒
  const days = Math.floor(diff / (1000 * 60 * 60 * 24));
  const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((diff % (1000 * 60)) / 1000);
  
  // 显示到页面
  document.getElementById("uptime-display").textContent = 
    `${days} 天 ${hours} 时 ${minutes} 分 ${seconds} 秒`;
}

// 初始化显示并每秒更新一次
updateUptime();
setInterval(updateUptime, 1000);
    </script>
</body>
</html>