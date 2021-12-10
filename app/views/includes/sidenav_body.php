<!--MAIN-->
<div class="main">
<?php
   require APPROOT . '/views/includes/sidenav_user.php';
?>
    <!-- Body dinamico -->
    <?php

        function verificador($x){
            switch($x){
                //solo minuscula
                case '1': 
                    return $_GET['controlador']=='administrador' ? true : false;
                    break;
                case '2': 
                    return $_GET['controlador']=='docentes' ? true : false;
                    break;
                case '3': 
                    return $_GET['controlador']=='estudiantes' ? true : false;
                    break;
                case '4': 
                    return $_GET['controlador']=='nosequecosa' ? true : false;
                    break;
                default: 
                    return false;
                    break;
            }
        }
        

        $rol_de_sesion=$_SESSION['rol'];
        print_r($rol_de_sesion);
        if(verificador($rol_de_sesion)){
            if(isset($_GET['controlador'])&&isset($_GET['accion'])){
                if(file_exists('../app/controllers/'.$_GET['controlador'].'.php')){
                    require_once '../app/controllers/'.$_GET['controlador'].'.php';
                    $controlador=$_GET['controlador'];
                    $controlador3=new $controlador();
                    if(method_exists($controlador3,$_GET['accion'])){
                        echo 'exito y con metodo';                    
                        $accion=$_GET['accion'];
                        $controlador3->$accion();
                        
                    }
                    else{
                        // echo ' no existe el metodo';
                        header('location: '.URLROOT.'/errores/error404');
                        die();
                    }
                }
                else{
                    // echo 'no existe el controlador';
                    //problemas relacionados a los archivos
                }
            }
        }
        else{
            // echo 'no hay suficiente acceso';
            header('location: '.URLROOT.'/errores/error401');
            die();
        }
        
        
        
    ?>
    
    <!-- Body dinamico -->
    <!-- CARDS -->
    <div class="cardBox">
        <!--<a class="card" href="https://www.youtube.com/" target="_blank">
            <div>
                <div class="numbers"> 1,504 </div>
                <div class="cardName"> Vistas Diarias</div>
            </div>
            <div class="iconBx" >
                <ion-icon name="eye-outline"></ion-icon>                        
            </div>
        </a>-->
        <div class="card">
            <div>
                <div class="numbers"> 1,504 </div>
                <div class="cardName"> Vistas Diarias</div>
            </div>
            <div class="iconBx" >
                <ion-icon name="eye-outline"></ion-icon>                        
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers"> 80 </div>
                <div class="cardName"> Sales</div>
            </div>
            <div class="iconBx">
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers"> 284 </div>
                <div class="cardName"> Comments</div>
            </div>
            <div class="iconBx">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers"> $7,842 </div>
                <div class="cardName"> Earning</div>
            </div>
            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>
    </div>  

    
    <div class="details">
        <!-- Order Details list -->
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>recent Orders</h2>
                <a href="#"class="btn">View All</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>name</td>
                        <td>Price</td>
                        <td>Payment</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Star Refrigerator</td>
                        <td>$1200</td>
                        <td>Paid</td>
                        <td> <span class="status delivered">Delivered</span></td>
                    </tr>
                    <tr>
                        <td>Window Coolers</td>
                        <td>$110</td>
                        <td>Due</td>
                        <td> <span class="status pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td>Speakers</td>
                        <td>$620</td>
                        <td>Paid</td>
                        <td> <span class="status return">Return</span></td>
                    </tr>
                    <tr>
                        <td>Hp Laptop</td>
                        <td>$110</td>
                        <td>Due</td>
                        <td> <span class="status inprogress ">In Progress</span></td>
                    </tr>
                    <tr>
                        <td>Apple Watch</td>
                        <td>$1200</td>
                        <td>Paid</td>
                        <td> <span class="status delivered">Delivered</span></td>
                    </tr>
                    <tr>
                        <td>Speakers</td>
                        <td>$620</td>
                        <td>Paid</td>
                        <td> <span class="status return">Return</span></td>
                    </tr>
                    <tr>
                        <td>Hp Laptop</td>
                        <td>$110</td>
                        <td>Due</td>
                        <td> <span class="status inprogress ">In Progress</span></td>
                    </tr>
                    <tr>
                        <td>Apple Watch</td>
                        <td>$1200</td>
                        <td>Paid</td>
                        <td> <span class="status delivered">Delivered</span></td>
                    </tr>
                    <tr>
                        <td>Speakers</td>
                        <td>$620</td>
                        <td>Paid</td>
                        <td> <span class="status return">Return</span></td>
                    </tr>
                    <tr>
                        <td>Hp Laptop</td>
                        <td>$110</td>
                        <td>Due</td>
                        <td> <span class="status inprogress ">In Progress</span></td>
                    </tr>
                    <tr>
                        <td>Apple Watch</td>
                        <td>$1200</td>
                        <td>Paid</td>
                        <td> <span class="status delivered">Delivered</span></td>
                    </tr>
                    <tr>
                        <td>Speakers</td>
                        <td>$620</td>
                        <td>Paid</td>
                        <td> <span class="status return">Return</span></td>
                    </tr>
                    <tr>
                        <td>Apple Watch</td>
                        <td>$1200</td>
                        <td>Paid</td>
                        <td> <span class="status delivered">Delivered</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- New customers -->
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Recent Customers</h2>
            </div>
            <table>
                <tr>
                    <td width="60px"> <div class="imgBx"><img src="img/img1.jpg"> </div></td>
                    <td><h4>David <br><span>Italy</span> </h4></td>
                </tr>
                <tr>
                    <td width="60px"> <div class="imgBx"><img src="img/img2.jpg"> </div></td>
                    <td><h4>Mario <br><span>USA</span> </h4></td>
                </tr>
                <tr>
                    <td width="60px"> <div class="imgBx"><img src="img/img3.jpg"> </div></td>
                    <td><h4>Fulana <br><span>Pais xy</span> </h4></td>
                </tr>
                <tr>
                    <td width="60px"> <div class="imgBx"><img src="img/img4.jpg"> </div></td>
                    <td><h4>Fulana <br><span>Pais xy</span> </h4></td>
                </tr>
                <tr>
                    <td width="60px"> <div class="imgBx"><img src="img/img5.jpg"> </div></td>
                    <td><h4>Fulano <br><span>Pais xy</span> </h4></td>
                </tr>
                <tr>
                    <td width="60px"> <div class="imgBx"><img src="img/img6.jpg"> </div></td>
                    <td><h4>Fulano <br><span>Pais xy</span> </h4></td>
                </tr>
                <tr>
                    <td width="60px"> <div class="imgBx"><img src="img/img7.jpg"> </div></td>
                    <td><h4>Fulana <br><span>Pais xy</span> </h4></td>
                </tr>
                <tr>
                    <td width="60px"> <div class="imgBx"><img src="img/img8.jpg"> </div></td>
                    <td><h4>Fulano <br><span>Pais xy</span> </h4></td>
                </tr>
                <tr>
                    <td width="60px"> <div class="imgBx"><img src="img/img9.jpg"> </div></td>
                    <td><h4>Fulana <br><span>Pais xy</span> </h4></td>
                </tr>
            </table>
        </div>
    </div>
</div>    