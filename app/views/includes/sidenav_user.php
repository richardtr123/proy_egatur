    

<div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <!-- Search -->
        <div class="search">
            <label>
                <input type="text" placeholder="Search here">
                <ion-icon name="search-outline"></ion-icon>
            </label>
        </div>
        <!-- user Img-->
        <div class="card_user">

            <div class="user">
                <img src="img/user.jpg">            
            </div>
            <div class="detalles">
                <div><?php echo $_SESSION['username']?></div>
                <div><?php switch($_SESSION['rol']){
                    case 1:
                        echo "administrador";
                        break;
                    case 2:
                        echo "Docente";
                        break;
                    case 3:
                        echo "Estudiante";
                        break;
                    default:
                        echo "nigga, wtf?";
                        break;

                    }?></div>
            </div>
        
        </div>
        
</div>
