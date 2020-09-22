<!-- jquery 3.5.1库  -->
<!-- <script src="//cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.js"></script>

<!-- 图片懒加载  -->
<script src="//cdn.jsdelivr.net/npm/jquery-lazyload@1.9.7/jquery.lazyload.min.js"></script>

<!-- 全局JS，自执行 -->
<?php $this->need('config/GlobalJS.php'); ?>


<!-- <1> 背景图 -->
<?php $this->need('config/Background.php'); ?>


<!-- <2> 开启 关闭页面加载动画 -->
<?php $this->need('config/PageLoad.php'); ?>


<!-- <3> 开启 关闭 侧边栏无缝滚动 -->
<?php $this->need('config/ReplyScroll.php'); ?>


<!-- <4> 开启 关闭 颜色选择器 -->
<?php $this->need('config/ColorTheme.php'); ?>


<!-- <5> 开启 关闭 切换标签栏时，显示不同的title -->
<?php $this->need('config/DocumentTitle.php'); ?>


<!-- <6> 开启/关闭 弹幕功能 -->
<?php $this->need('config/Barrager.php'); ?>


<!-- <7> 开启/关闭 小人 -->
<?php $this->need('config/Live2D.php'); ?>


<!-- <8> 开启 关闭 3d 云标签 -->
<?php $this->need('config/3DTag.php'); ?>


<!-- <9> 开启 关闭 鼠标点击特效 -->
<?php $this->need('config/Cursor.php'); ?>


<!-- <10> 开启 关闭 天气 -->
<?php $this->need('config/Wether.php'); ?>


<!-- <11> 开启 关闭 音乐播放器 -->
<?php $this->need('config/APlayer.php'); ?>


<!-- <12> 启用 禁用 代码防偷 -->
<?php $this->need('config/Console.php'); ?>


<!-- <13>  启用 禁用 鼠标右键 -->
<?php $this->need('config/ContextMenu.php'); ?>


<!-- <14> 启用 禁用 页面滚动显示进度条 -->
<?php $this->need('config/ProgressBar.php'); ?>


<!-- <15> 启用 禁用 头部跟随页面滚动 -->
<?php $this->need('config/HeaderScroll.php'); ?>


<!-- <16> 启用 禁用 返回顶部按钮 -->
<?php $this->need('config/BackTop.php'); ?>