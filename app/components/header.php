

<header class="app-header">
    <p> App </p>
    <nav>
        <ul>
            <?php
                if(isset($_SESSION['user'])){
                    ?>
                        <li><i class="fas fa-home header-icon"></i></li>
                        <li><i class="fas fa-user"></i></li>
                        <li><i class="fas fa-sign-out-alt" id="logout-icon"></i></li>
                    <?php
                }
            ?>
          
        </ul>
    </nav>

</header>