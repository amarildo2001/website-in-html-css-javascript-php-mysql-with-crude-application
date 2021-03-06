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
                        <p class = "text text-lg">Alb Diagnostic esht?? nj?? laborator mjek??sor i p??rkushtuar p??r t?? ofruar kujdes cil??sor 
                            ,v??mendje te pakursyer ndaj p??rsosm??rin?? klinike dhe sigurise se pacientit, me nj?? pasion t?? pashembullt nga gjithe stafi ,p??r t?? siguruar kujdesin sh??ndet??sor m?? t?? mir?? p??r ata q?? ne sh??rbejm??. 
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
                        <p class = "text text-sm">Kujdesi i personalizuar i pacientit ??sht?? ai q?? e ve??on  laboratorin tone.</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-2.png">
                        </div>
                        <h3>Laboratori</h3>
                        <p class = "text text-sm">Aparaturat qe jane ne perdorim prane laboratorit tone jane teknologjia me e fundit ne fushen  laboratorike te kompanive me te mira si?? eshte BECKMAN ??? Coulter, TOSHIBA etj</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-3.png">
                        </div>
                        <h3>Kardiologjia</h3>
                        <p class = "text text-sm">Ne Alb Diagnostic kryhen te gjitha llojet e kontrollve kardiake per te rritur, kjo do te thote se te gjitha semundjet e zemres te fituara apo te lindura te pacientet mund te trajtohen si dhe te ndiqen ne spitalin tone. Departamenti i Kardiologjise ??sht?? nj??ri prej departamenteve m?? modern?? mjek??sor??, kjo, fal?? pajisjes se ve??ant?? t?? teknologjis?? s?? lart??</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-4.png">
                        </div>
                        <h3>Ndihma e shpejte</h3>
                        <p class = "text text-sm">Specialist??t ekspert?? dhe personeli i kujdessh??m klinik ju ofrojn?? nj?? p??rvoj?? t?? jasht??zakonshme t?? dhenies se ndihmes se shpejt.</p>
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
                            <h4>Cfar?? ??sht?? Hepatiti Viral dhe llojet e tij</h4>
                            <p class = "text text-sm">Hepatiti Viral ??sht?? nj?? inflamacion i m??l??is??, shkaktuar nga infeksionet virale. Viruset tipike t?? hepatiteve jan?? A,B,C,D,E K??to pes?? lloje virusesh jan?? me interes t?? madh p??r shkak t?? potencialit t?? tyre p??r shp??rthime dhe p??rhapje epidemike, barr??s s?? s??mundjes dhe vdekjes q?? ata shkaktojn??. </p>
                            <p class = "text text-sm">Hepatiti C: HCV Shkaktohet nga Virusi i Hepatitit C, i njohur si HCV (Hepatitis C Virus). Infeksioni p??rhapet nj??lloj si infeksioni nga Hepatiti B.</p>
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
                            <h4>G??njeshtrat dhe t?? V??rtetat e Coronavirus. Fakte t?? v??rtetuara</h4>
                            <p class = "text text-sm">Njer??zit e t?? gjitha moshave MUND t?? infektohen nga koronavirusi. Njer??zit e moshuar dhe njer??zit me kushte mjek??sore para-ekzistuese (t?? tilla si astma, diabeti, s??mundjet e zemr??s) duket se jan?? m?? t?? preksh??m nga s??mundja e r??nd?? me virusin.
                                Moti i ftoht?? dhe d??bora MUND t?? vras?? koronavirusin.</p>
                            <p class = "text text-sm">Koronavirusi MUND t?? transmetohet n?? zona me klim?? t?? nxeht?? dhe t?? lag??sht</p>
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
                            <h4>Cilat jan?? opsionet e trajtimit p??r COVID-19 (p??rfshir?? ila??e, vaksina, terapi)?</h4>
                            <p class = "text text-sm">A jan?? antibiotik?? t?? efektsh??m n?? parandalimin ose trajtimin e COVID-19?

                                Jo. Antibiotik??t nuk funksionojn?? kund??r viruseve, ato funksionojne vet??m n?? infeksione bakteriale. COVID-19 shkaktohet nga nj?? virus, k??shtu q?? antibiotik??t nuk funksionojn??. Antibiotik??t nuk duhet t?? p??rdoren si nj?? mjet p??r parandalimin ose trajtimin e COVID-19. Ato duhet t?? p??rdoren vet??m si?? udh??zohet nga nj?? mjek p??r t?? trajtuar nj?? infeksion bakterial.</p>
                            <p class = "text text-sm">Nd??rsa disa mjekime tradicionale ose sht??piake mund t?? ofrojn?? rehati dhe leht??sim t?? simptomave t?? COVID-19, nuk ka asnj?? prov?? q?? mjek??sia aktuale mund t?? parandaloj?? ose sh??roj?? s??mundjen.</p>
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