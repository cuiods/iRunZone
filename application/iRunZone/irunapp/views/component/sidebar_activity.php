<nav class="navbar navbar-vertical-left">
    <ul class="nav navbar-nav">
        <li>
            <a href="/activity/show">
                <i class="fa fa-fw fa-lg fa-globe"></i>
                <span>发现</span>
            </a>
        </li>
        <li>
            <a href="/activity">
                <i class="fa fa-fw fa-lg fa-pencil "></i>
                <span>发布</span>
            </a>
        </li>
        <li>
            <?php
            if ($_SESSION['type']==1) {
                ?>
            <a href="/manage">
                <?php
            } else {
                  ?>
                <a href="/activity/my">
                    <?php
                }
            ?>
                <i class="fa fa-fw fa-lg fa-user"></i>
                <span>我</span>
            </a>
        </li>
    </ul>
</nav>