    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> healthfood@store.com</li>
                                <li>Gratis Ongkir Untuk Pembelian diatas Rp.250.000</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>  
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Indonesian</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            
                            <div class="header__top__right__language">
                                <img src="img/pngprofile.png" width="20" alt="">
                                <?php
                                $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
                                $select_profile->execute([$user_id]);
                                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <div><b><?= $fetch_profile['name']; ?></b></div>
                                <span class="arrow_carrot-down"></span>
                                <span class="header__menu__dropdown"></span>
                                <ul>
                                    <li><img src="img/product/<?= $fetch_profile['image']; ?>" alt=""></li>
                                    <li><a href="user_profile_update.php">update</a></li>
                                    <li><a href="logout.php">logout</a></li>
                                        <li><a href="login.php">login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>