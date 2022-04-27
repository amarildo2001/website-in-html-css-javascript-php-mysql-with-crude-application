<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <a href = "departamentet.php" class = "nav-link">Departamentet</a>
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

        <div class = "header-inner text-white text-center">
            <div class = "container grid">
                <div class = "header-inner-left">
                    <h1 id="kryefaqja">Shendeti juaj<br> <span>Prioriteti yne</span></h1>
                    <p class = "lead">Laboratori me i mire mjeksor ne Shqiperi!</p>
</br>
                    <div class = "btn-group">
                        <a href = "php/index3.php" class = "btn btn-white">Lexo me shume</a>
                        <a href = "php/index3.php" class = "btn btn-light-blue">Rezervo Konsulte</a>
                    </div>
                </div>
                <div class = "header-inner-right">
                    <img src = "images/background6.png">
                </div>
            </div>
        </div>
    </header>
    <!-- fundi i header -->

    <main>
        <!-- Rreth nesh-->
        <section id = "about" class = "about py">
            <div class = "about-inner">
                <div class = "container grid">
                    <div class = "about-left text-center">
                        <div class = "section-head">
                            <h2>Rreth Nesh</h2>
                            <div class = "border-line"></div>
                        </div>
                        <p class = "text text-lg">Alb Diagnostic eshtë një laborator mjekësor i përkushtuar për të ofruar kujdes cilësor 
                            ,vëmendje te pakursyer ndaj përsosmërinë klinike dhe sigurise se pacientit, me një pasion të pashembullt nga gjithe stafi ,për të siguruar kujdesin shëndetësor më të mirë për ata që ne shërbejmë. 
                            Alb Diagnostic eshte themeluar ne 2020 nga nje partneritet italo-shqiptar dhe deri sot numeron mbi 2000 pacient te kenaqu me sherbimin tone.</p>
                        <a href = "php/formreg.php" class = "btn btn-white">Lexo me shume</a>
                    </div>
                    <div class = "about-right flex">
                        <div class = "img">
                            <img src = "images/about-img.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fund i rreth nesh -->

        <!-- shprehje filozfike-->
        <section id = "banner-one" class = "banner-one text-center">
            <div class = "container text-white">
                <blockquote class = "lead"><i class = "fas fa-quote-left"></i>Nuk jane parate ato qe te bejne te pasur, por eshte shendeti i mire. <i class = "fas fa-quote-right"></i></blockquote>
                <small class = "text text-sm">- Mahatma Gandi</small>
            </div>
        </section>
        

        <!-- sherbimet -->
        <section id = "sherbimet" class = "services py">
            <div class = "container">
                <div class = "section-head text-center">
                    <h2 class = "lead">Sherbime</h2>
                    <p class = "text text-lg">Ja cfare ju ofrojme:</p>
                    <div class = "line-art flex">
                        <div></div>
                        <img src = "images/4-dots.png">
                        <div></div>
                    </div>
                </div>
                <div class = "services-inner text-center grid">
                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-1.png">
                        </div>
                        <h3>Kujdes i personalizuar</h3>
                        <p class = "text text-sm">Kujdesi i personalizuar i pacientit është ai që e veçon  laboratorin tone.</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-2.png">
                        </div>
                        <h3>Laboratori</h3>
                        <p class = "text text-sm">Aparaturat qe jane ne perdorim prane laboratorit tone jane teknologjia me e fundit ne fushen  laboratorike te kompanive me te mira siç eshte BECKMAN – Coulter, TOSHIBA etj</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-3.png">
                        </div>
                        <h3>Kardiologjia</h3>
                        <p class = "text text-sm">Ne Alb Diagnostic kryhen te gjitha llojet e kontrollve kardiake per te rritur, kjo do te thote se te gjitha semundjet e zemres te fituara apo te lindura te pacientet mund te trajtohen si dhe te ndiqen ne spitalin tone. Departamenti i Kardiologjise është njëri prej departamenteve më modernë mjekësorë, kjo, falë pajisjes se veçantë të teknologjisë së lartë</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-4.png">
                        </div>
                        <h3>Ndihma e shpejte</h3>
                        <p class = "text text-sm">Specialistët ekspertë dhe personeli i kujdesshëm klinik ju ofrojnë një përvojë të jashtëzakonshme të dhenies se ndihmes se shpejt.</p>
                    </article>
                </div>
            </div>
        </section>
        

        <!-- banner nr2 -->
        <section id = "banner-two" class = "banner-two text-center">
            <div class = "container grid">
                <div class = "banner-two-left">
                    <img src = "images/banner2.png">
                </div>
                <div class = "banner-two-right">
                    <p class = "lead text-white">Njihuni me faqen tone te re te internetit!</p>
                    <div class = "btn-group">
                        <a href = "website.php" class = "btn btn-white">Vizito faqen tone</a>
                        <a href = "php/index3.php" class = "btn btn-light-blue">Rezevo Konsulte</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- fundi i bannerit -->

        <!-- Stafi -->
        <section id = "stafi" class = "doc-panel py">
            <div class = "container">
                <div class = "section-head">
                    <h2>Stafi</h2>
                </div>

                <div class = "doc-panel-inner grid">
                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/doc-1.png" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead">Samuel</p>
                                <p class = "text-lg">Mjek i pergjithshem</p>
                            </div>
                        </div>
                    </div>

                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/doc-2.png" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead">Mira</p>
                                <p class = "text-lg">Kardiologe</p>
                            </div>
                        </div>
                    </div>

                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/doc-3.png" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead">Tanja</p>
                                <p class = "text-lg">Imazheriste</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- paketat -->
        <section id = "paketa" class = "package-service py text-center">
            <div class = "container">
                <div class = "package-service-head text-white">
                    <h2>Paketa</h2>
                    <p class = "text text-lg">Paketat me te mira per pacientat tane</p>
                </div>
                <div class = "package-service-inner grid">
                    <div class = "package-service-item bg-white">
                      
                        <h3>Paketa Covid-19</h3>
                        <p class = "text text-sm">Analiza mjeksore per Covid-19 dhe kujdes shendetesor per te prekurit me kete virus.</p>
                        <a href = "php/index3.php" class = "btn btn-blue">Rezervo Konsulte</a>
                    </div>

                    <div class = "package-service-item bg-white">
                        
                        <h3>Paketa Pediatrike</h3>
                        <p class = "text text-sm">Analiza mjeksore dhe kujdes shendetesor per femijet tuaj</p>
                        <a href = "php/index3.php" class = "btn btn-blue">Rezervo Konsulte</a>
                    </div>
                    
                    <div class = "package-service-item bg-white">
                        
                        <h3>Paketa Kardiake</h3>
                        <p class = "text text-sm">Analiza mjekesore per kontrollin rutine te zemres tuaj ose diagnostifikime te semundjeve te zemres</p>
                        <a href = "php/index3.php" class = "btn btn-blue">Rezervo Konsulte</a>
                    </div>
                </div>
            </div>
        </section>
        

        <!-- artikuj -->
        <section id = "artikuj" class = "posts py">
            <div class = "container">
                <div class = "section-head">
                    <h2>Artikujt tane me te fundit.</h2>
                </div>
                <div class = "posts-inner grid">
                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/post-1.jpg">
                        </div>
                        <div class = "content">
                            <h4>Cfarë është Hepatiti Viral dhe llojet e tij</h4>
                            <p class = "text text-sm">Hepatiti Viral është një inflamacion i mëlçisë, shkaktuar nga infeksionet virale. Viruset tipike të hepatiteve janë A,B,C,D,E Këto pesë lloje virusesh janë me interes të madh për shkak të potencialit të tyre për shpërthime dhe përhapje epidemike, barrës së sëmundjes dhe vdekjes që ata shkaktojnë. </p>
                            <p class = "text text-sm">Hepatiti C: HCV Shkaktohet nga Virusi i Hepatitit C, i njohur si HCV (Hepatitis C Virus). Infeksioni përhapet njëlloj si infeksioni nga Hepatiti B.</p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> 27 shtator</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 5 komente</small>
                            </div>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/post-2.jpg">
                        </div>
                        <div class = "content">
                            <h4>Gënjeshtrat dhe të Vërtetat e Coronavirus. Fakte të vërtetuara</h4>
                            <p class = "text text-sm">Njerëzit e të gjitha moshave MUND të infektohen nga koronavirusi. Njerëzit e moshuar dhe njerëzit me kushte mjekësore para-ekzistuese (të tilla si astma, diabeti, sëmundjet e zemrës) duket se janë më të prekshëm nga sëmundja e rëndë me virusin.
                                Moti i ftohtë dhe dëbora MUND të vrasë koronavirusin.</p>
                            <p class = "text text-sm">Koronavirusi MUND të transmetohet në zona me klimë të nxehtë dhe të lagësht</p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> 17 mars</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 2 Komente</small>
                            </div>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/post-3.jpg">
                        </div>
                        <div class = "content">
                            <h4>Cilat janë opsionet e trajtimit për COVID-19 (përfshirë ilaçe, vaksina, terapi)?</h4>
                            <p class = "text text-sm">A janë antibiotikë të efektshëm në parandalimin ose trajtimin e COVID-19?

                                Jo. Antibiotikët nuk funksionojnë kundër viruseve, ato funksionojne vetëm në infeksione bakteriale. COVID-19 shkaktohet nga një virus, kështu që antibiotikët nuk funksionojnë. Antibiotikët nuk duhet të përdoren si një mjet për parandalimin ose trajtimin e COVID-19. Ato duhet të përdoren vetëm siç udhëzohet nga një mjek për të trajtuar një infeksion bakterial.</p>
                            <p class = "text text-sm">Ndërsa disa mjekime tradicionale ose shtëpiake mund të ofrojnë rehati dhe lehtësim të simptomave të COVID-19, nuk ka asnjë provë që mjekësia aktuale mund të parandalojë ose shërojë sëmundjen.</p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> 2 shkurt</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 5 komente</small>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        

        <!-- kontakt -->
        <section id = "contact" class = "contact py">
            <div class = "container grid">
                <div class = "contact-left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2384.6268289831164!2d-6.214682984112116!3d53.29621947996855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486709e0c9c80f8f%3A0x92f408d10f2277c2!2sREVO!5e0!3m2!1sen!2snp!4v1636264848776!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class = "contact-right text-white text-center bg-blue">
                    <div class = "contact-head">
                        <h3 class = "lead">Na kontakto</h3>
                        <p class = "text text-md">Ketu mund te na kontaktoni per cdo problem shendetsor</p>
                    </div>
                    <form>
                        <div class = "form-element">
                            <input type = "text" class = "form-control" placeholder="Emri">
                        </div>
                        <div class = "form-element">
                            <input type = "email" class = "form-control" placeholder="Email-i">
                        </div>
                        <div class = "form-element">
                            <textarea rows = "5" placeholder="Pershkrimi" class = "form-control"></textarea>
                        </div>
                        <button type = "submit" class = "btn btn-white btn-submit">
                            <i class = "fas fa-arrow-right"></i> Dergo mesazh
                        </button>
                    </form>
                </div>
            </div>
        </section>
       
    </main>

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
    
    <script src = "js/script.js"></script>
</body>
</html>