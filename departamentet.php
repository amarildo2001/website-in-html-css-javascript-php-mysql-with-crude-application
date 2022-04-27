<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <!-- Pjesa e header -->
    <header class = "header bg-blue">
        <nav class = "navbar bg-blue">
            <div class = "container flex">
                <a href = "index.html" class = "navbar-brand">
                    <h3>Alb Diagnostic</h3>
                </a>
                <button type = "button" class = "navbar-show-btn">
                    <img src = "images/ham-menu-icon.png">
                </button>

                <div class = "navbar-collapse bg-white">
                    <button type = "button" class = "navbar-hide-btn">
                        <img src = "images/close-icon.png">
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "#kryefaqja" class = "nav-link">Kryefaqja</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#about" class = "nav-link">Rreth Nesh</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#sherbimet" class = "nav-link">Sherbimet</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#stafi" class = "nav-link">Stafi</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#paketa" class = "nav-link">Departamentet</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#artikuj" class = "nav-link">Blog-u</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "php/index3.php" class = "nav-link">Rezervo Konsulte</a>
                        </li>
                    </ul>
                    
                </div> 
            </div>
        </nav>
          <!-- depatamentet -->
          <section id = "paketa" class = "package-service py text-center">
            <div class = "container">
                <div class = "package-service-head text-white">
                    <h2>Departamentet</h2>
                    <p class = "text text-lg">Disa nga departamentet tona..</p>
                </div>
                <div class = "package-service-inner grid">
                    <div class = "package-service-item bg-white">
                      
                        <h3>Departamenti i Radiologjise</h3>
                        <p class = "text text-sm">Ne kette departament kryhen analiza skanera te pjeseve te ndyshme te trupit.</p>
                        <a href = "php/index3.php" class = "btn btn-blue">Rezervo Konsulte</a>
                    </div>

                    <div class = "package-service-item bg-white">
                        
                        <h3>Departamenti i laboratorit</h3>
                        <p class = "text text-sm">Ketu kryhen te gjitha analizat dhe pastaj u dorezohen pacientave.</p>
                        <a href = "php/index3.php" class = "btn btn-blue">Rezervo Konsulte</a>
                    </div>
                    
                    <div class = "package-service-item bg-white">
                        
                        <h3>Departamenti i alergologjise</h3>
                        <p class = "text text-sm">Ky departament ofron konsulte per te gjithe ata qe vuajne nga alergji te ndryshme.</p>
                        <a href = "php/index3.php" class = "btn btn-blue">Rezervo Konsulte</a>
                    </div>

                </div>
            </div>
        </section>
        <!-- fundi -->
    <footer id = "footer" class = "footer text-center">
        <div class = "container">
            <div class = "footer-inner text-white py grid">
                <div class = "footer-item">
                    <h3 class = "footer-head">Reth Nesh</h3>
                    
                    <p class = "text text-md">Ju mund te na gjeni ne kete adrese!</p>
                    <address>
                        Alb Diagnostic <br>
                        Bulevardi Zogu I <br>
                        Tirane<br>
                        Shqiperi
                    </address>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">Fjale Kyc</h3>
                    <ul class = "tags-list flex">
                        <li>Kujdes shendetsor</li>
                        <li>Laborator mjeksor</li>
                        <li>Urgjence</li>
                        <li>Shendet</li>
                        <li>Covid-19</li>
                        <li>Doktor</li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">Menu</h3>
                    <ul>
                        <li><a href = "#sherbimet" class = "text-white">Sherbimet</a></li>
                        <li><a href = "php/adminlogin.php" class = "text-white">Admin</a></li>
                        <li><a href = "#" class = "text-white">Departamentet</a></li>
                        <li><a href = "php/index3.php" class = "text-white">Rezervo Konsulte</a></li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">Rezervo Konsulte</h3>
                    <p class = "text text-md">Menjehere pasi te rezervoni konsulten tuaj, ne do ju kontaktojme nepermjet telefonit</p>
                    <ul class = "appointment-info">
                        <li>8:00 - 11:00 </li>
                        <li>2:00 - 05:00 </li>
                        <li>8:00 - 11:00 </li>
                        <li>
                            <i class = "fas fa-envelope"></i>
                            <span>albdiagnostic@gmail.com</span>
                        </li>
                        <li>
                            <i class = "fas fa-phone"></i>
                            <span>+355 69 11 11 111</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class = "footer-links">
                <ul class = "flex">
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-facebook-f"></i></a></li>
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-twitter"></i></a></li>
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="tedrejtat">
                <h4>&copy; <i>Krijuar nga Amarildo Prendi</i></h4>
            </div>
        </div>
    </footer>
        
</body>
</html>