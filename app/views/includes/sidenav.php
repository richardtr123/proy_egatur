<div class="navigation">
        <ul>
            
            <li>            
                <a href="#">
                    <span class="icon"> <ion-icon name="logo-apple"></ion-icon> </span>
                    <span class="title">EGATUR</span>
                </a>
            </li>
            <?php if($_SESSION['rol']==1) { ?>
            <li>
                <a href="index2.html">
                    <span class="icon"> <ion-icon name="home-outline"></ion-icon> </span>
                    <span class="title">El pepe</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"> <ion-icon name="person-outline"></ion-icon> </span>
                    <span class="title">Customers</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"> <ion-icon name="chatbubble-outline"></ion-icon> </span>
                    <span class="title">Message</span>
                </a>
            </li>
            <li>
                <a href="index3.html">
                    <span class="icon"> <ion-icon name="help-outline"></ion-icon> </span>
                    <span class="title">Help</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"> <ion-icon name="settings-outline"></ion-icon> </span>
                    <span class="title">Settings</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"> <ion-icon name="lock-closed-outline"></ion-icon> </span>
                    <span class="title">Password</span>
                </a>
            </li>
            <?php }?>
            <!-- Botones en comun -->
            <li>
                <a href="<?php echo URLROOT;?>/users/logout">
                    <span class="icon"> <ion-icon name="log-out-outline"></ion-icon> </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
</div>