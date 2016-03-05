<header class="am-topbar">
    <h1 class="am-topbar-brand">
        <a href="index.php"><?php echo $blogname?></a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">



        <?php echo $text?>



        <form class="am-topbar-form am-topbar-left am-form-inline" action="search.php" role="search">
            <div class="am-form-group">
                <input type="text" name="n"  class="am-form-field am-input-sm" placeholder="搜索">
            </div>
        </form>


    </div>
</header>