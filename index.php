<?php
include('./langage.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expert for real estate financing | Financing advisor Bavaria</title>
    <link rel="icon" href="https://github.com/Leab-JB/Website-Jocelyn/img/logo.png">
    <meta property="og:site_name" content="James website" />
    <meta property=“og:title” content="Personal Website" />
    <meta property="og:description" content="James website" />
    <meta property="og:url" content="https://www.Website-Jocelyn.cm"/>
    <meta property="og:type" content="Website" />
    <meta property="article:publisher" content="https://github.com/Leab-JB/"/>
    <meta property="og:image" content="https://github.com/Leab-JB/Website-Jocelyn/img/logo.png" />
    <meta property="og:image:secure_url" content="https://Leab-JB.github.io/Website-Jocelyn/" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <nav>

        <div class="logo">
            <a href="#home" class="nav-link"><img src="img/logo.png" alt="Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="#home" class="nav-link"><?php echo $currTranslations['Accueil'];?></a></li>
            <li><a href="#about"class="nav-link"><?php echo $currTranslations['Partenaire'];?></a></li>
            <li><a href="#history" class="nav-link">Jocelyn</a></li>
            <li><a href="#partners" class="nav-link">Partenaire</a></li>
            <li><a href="#testimonial" class="nav-link">Témoignages</a></li>
            <li><a href="#contact" class="nav-link">Contactez nous</a></li>
            <div id="google_translate_element"></div>
        </ul>
        <div>
            <a href="?lang=en" class="btn btn-primary">English</a>
            <a href="?lang=fr" class="btn btn-primary">Français</a>
            <a href="?lang=de" class="btn btn-primary">Deutsch</a>
</div>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Je financerai votre propriété</h1>
            <div class="typing-container">
                <p id="typing-text"></p>
            </div>
        </div>
    </section>
    <section class="info-section" id="about">
        <div class="info-content">
            <h2 class="info-heading">Un financement adapté à vos besoins</h2>
            <p class="info-paragraph">
                Nous sommes spécialisés dans le financement de tout biens Immobiliers 
                En coopération avec plus de 500 banques, nous vous proposons les meilleures 
                conditions pour votre financement. 
            </p> 
            <p class="info-paragraph"> <b>Notre objectif est de vous assister à chaque étape et de vous proposer une solution simple et transparente.</b></p>
            
        </div>
        <div class="services-container">
            <div class="service-item">
                <svg aria-hidden="true" class="e-font-icon-svg e-fas-percent" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M112 224c61.9 0 112-50.1 112-112S173.9 0 112 0 0 50.1 0 112s50.1 112 112 112zm0-160c26.5 0 48 21.5 48 48s-21.5 48-48 48-48-21.5-48-48 21.5-48 48-48zm224 224c-61.9 0-112 50.1-112 112s50.1 112 112 112 112-50.1 112-112-50.1-112-112-112zm0 160c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zM392.3.2l31.6-.1c19.4-.1 30.9 21.8 19.7 37.8L77.4 501.6a23.95 23.95 0 0 1-19.6 10.2l-33.4.1c-19.5 0-30.9-21.9-19.7-37.8l368-463.7C377.2 4 384.5.2 392.3.2z"></path></svg>
                <h3 class="service-title"><?php _('Consulting') ?></h3>
                <p class="service-description">
                    Get expert advice and strategies to help guide your business decisions and achieve your objectives efficiently.
                </p>
            </div>
            <div class="service-item">
                <svg aria-hidden="true" class="e-font-icon-svg e-fas-rocket" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M505.12019,19.09375c-1.18945-5.53125-6.65819-11-12.207-12.1875C460.716,0,435.507,0,410.40747,0,307.17523,0,245.26909,55.20312,199.05238,128H94.83772c-16.34763.01562-35.55658,11.875-42.88664,26.48438L2.51562,253.29688A28.4,28.4,0,0,0,0,264a24.00867,24.00867,0,0,0,24.00582,24H127.81618l-22.47457,22.46875c-11.36521,11.36133-12.99607,32.25781,0,45.25L156.24582,406.625c11.15623,11.1875,32.15619,13.15625,45.27726,0l22.47457-22.46875V488a24.00867,24.00867,0,0,0,24.00581,24,28.55934,28.55934,0,0,0,10.707-2.51562l98.72834-49.39063c14.62888-7.29687,26.50776-26.5,26.50776-42.85937V312.79688c72.59753-46.3125,128.03493-108.40626,128.03493-211.09376C512.07526,76.5,512.07526,51.29688,505.12019,19.09375ZM384.04033,168A40,40,0,1,1,424.05,128,40.02322,40.02322,0,0,1,384.04033,168Z"></path></svg>
                <h3 class="service-title">Development</h3>
                <p class="service-description">
                    We provide development services to create tailored solutions that meet your unique needs and drive innovation.
                </p>
            </div>
            <div class="service-item">
                <svg aria-hidden="true" class="e-font-icon-svg e-fas-chart-line" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z"></path></svg>
                <h3 class="service-title">Support</h3>
                <p class="service-description">
                    Our support team is available to assist you with any issues and ensure smooth operation of your services.
                </p>
            </div>
        </div>
        <!--<div class="cta-container">
            <a href="#contact" class="cta-button">Qu'elle banque est faite pour vous?</a>
        </div>-->
    </section>
   <!--  <section class="history-section" id="history">
        <div class="history-content">
            <div class="text-container">
                <h2 class="history-heading">Salut, je m'appelle Jocelyn.</h2>
                <p class="history-paragraph">
                    Depuis ma jeunesse je me suis toujours interessé a l´immobilier. Apres mes études universitaires et mes expériences professionelles gagnées dans différents domaines, j´ai décidé de me spécialiser dans le financement immobilier.
                </p>
                <p class="history-paragraph">Comme courtier Immobilier certifié IHK, ma passion est d´accompagner mes clients de facon indépendante a trouver la meilleure solution pour leur financement immobilier.</p>
                <p class="history-paragraph">Ma préoccupation premiere reste la satisfaction des clients.</p>
                <p class="history-paragraph">Pendant mes heures libres j´aime bien lire et jouer au football</p>
                <a href="#learn-more" class="history-button">Faissons connaissance</a>
            </div>
        </div>
    </section> -->
    <section class="history-section" id="history">
        <div class="history-content">
            <div class="text-container">
                <h2 class="history-heading">Salut, je m'appelle Jocelyn.</h2>
                <p class="history-paragraph">
                    Depuis ma jeunesse, je me suis toujours intéressé à l'immobilier. Après mes études universitaires et mes expériences professionnelles gagnées dans différents domaines, j'ai décidé de me spécialiser dans le financement immobilier.
                </p>
                <p class="history-paragraph">Comme courtier Immobilier certifié IHK, ma passion est d'accompagner mes clients de façon indépendante à trouver la meilleure solution pour leur financement immobilier.</p>
                <p class="history-paragraph">Ma préoccupation première reste la satisfaction des clients.</p>
                <p class="history-paragraph">Pendant mes heures libres, j'aime bien lire et jouer au football.</p>
                <a href="#!" class="history-button" id="schedule-button">Faisons connaissance</a>
            </div>
        </div>
        <div id="calendar-modal" class="modal">
            <div class="modal-content">
                <span class="close-button" id="close-button">&times;</span>
                <h3>Prendre un rendez-vous</h3>
                
                <div class="input-container">
                    <div class="input-group">
                        <label for="client-name">Nom:</label>
                        <input type="text" id="client-name" required>
                    </div>
                    <div class="input-group">
                        <label for="client-email">Email:</label>
                        <input type="email" id="client-email" required>
                    </div>
                    <div class="input-group">
                        <label for="client-phone">Téléphone:</label>
                        <input type="text" id="client-phone" required>
                    </div>
                    <div class="input-group">
                        <label for="appointment-date">Date:</label>
                        <input type="date" id="appointment-date" required>
                    </div>
                    <div class="input-group">
                        <label for="appointment-time">Heure:</label>
                        <input type="time" id="appointment-time" required>
                    </div>
                </div>
        
                <label for="client-message">Message:</label>
                <textarea id="client-message" placeholder="Votre message ici..." required style="width: 100%; height: 100px; border-radius: 5px; border: 1px solid #ccc;"></textarea>
                
                <div class="button-container">
                    <button class="btn-hist" id="confirm-button">Confirmer</button>
                </div>
            </div>
        </div>
    </section>
    <section class="partners-section" id="partners">
        <h2 class="info-heading">Le meilleur financement pour vous</h2>
        <div class="partners-container">
            <img src="img/part1.png" alt="Partner 1" class="partner-logo">
            <img src="img/part2.png" alt="Partner 2" class="partner-logo">
            <img src="img/part3.png" alt="Partner 3" class="partner-logo">
            <img src="img/part4.png" alt="Partner 4" class="partner-logo">
            <img src="img/part5.png" alt="Partner 5" class="partner-logo">
            <img src="img/part6.png" alt="Partner 6" class="partner-logo">
            <img src="img/part7.png" alt="Partner 6" class="partner-logo">
            <img src="img/part1.png" alt="Partner 1" class="partner-logo">
            <img src="img/part2.png" alt="Partner 2" class="partner-logo">
            <img src="img/part3.png" alt="Partner 3" class="partner-logo">
            <img src="img/part4.png" alt="Partner 4" class="partner-logo">
            <img src="img/part5.png" alt="Partner 5" class="partner-logo">
            <img src="img/part6.png" alt="Partner 6" class="partner-logo">
            <img src="img/part7.png" alt="Partner 6" class="partner-logo">
            <img src="img/part1.png" alt="Partner 1" class="partner-logo">
            <img src="img/part2.png" alt="Partner 2" class="partner-logo">
            <img src="img/part3.png" alt="Partner 3" class="partner-logo">
            <img src="img/part4.png" alt="Partner 4" class="partner-logo">
        </div>
    </section>
    <!--<section class="counter-section" >
        <div class="counter-content">
            <h2 class="counter-title">Faites confiance aux chiffres</h2>
            <p class="counter-description">
                Vous trouverez ici un aperçu détaillé de nos chiffres depuis 2022.
            </p>
            <div class="counters-container">
                <div class="counter-item">
                    <div class="counter-number" data-target="98">98</div>
                    <div class="counter-name">Financement​</div>
                </div>
                <div class="counter-item">
                    <div class="counter-number" data-target="500">500</div>
                    <div class="counter-name">Banques</div>
                </div>
                <div class="counter-item">
                    <div class="counter-number" data-target="21000">2100€</div>
                    <div class="counter-name">Volume de financement</div>
                </div>
            </div>
            <a href="#contact" class="counter-button">Obtenez des conseils</a>
        </div>
    </section> -->
    <section class="testimonial-section" id="testimonial">
        <div class="testimonial-content">
            <h2 class="testimonial-title">Ce que disent nos clients</h2>
            <!-- Testimonial 1 -->
            <div class="testimonial-slide">
                
                <p class="testimonial-name"><b>John Doe</b></p>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <hr class="testimonial-line">
                <p class="testimonial-description">
                    Our clients have seen tremendous growth and success by using our services.
                </p>
                <span class="testimonial-number">1/2</span>
                <!--<a href="#contact" class="testimonial-button">Devenez vous aussi un client satisfait</a>-->
            </div>
            <!-- Testimonial 2 -->
            <div class="testimonial-slide">
                <p class="testimonial-name"><b>Jane Smith</b></p>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <hr class="testimonial-line">
                <p class="testimonial-description">
                    An exceptional experience! Their professionalism and dedication were truly outstanding.
                </p>
                <span class="testimonial-number">2/2</span>
                <!--<a href="#contact" class="testimonial-button">Contactez-nous pour plus d'informations</a>-->
            </div>
            <!-- Slider controls -->
            <div class="slider-controls">
                <button class="slider-button prev-slide"><i class="fas fa-chevron-left"></i></button>
                <button class="slider-button next-slide"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>
    <section class="contact-section" id="contact">
        <h2>Contact Us</h2>
        <form id="contactForm" action="send_email.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button class="btn" type="submit">Submit</button>
        </form>
        <div id="formMessage"></div>
    </section>
    <footer class="footer-section">
        <div class="footer-content">
            <!-- Logo -->
            <div class="footer-logo">
                <img src="img/footer-logo.png" alt="Company Logo">
            </div>
    
            <!-- Description -->
            <p class="footer-description">
                Je suis votre conseiller financier à Augsbourg pour des conseils financiers de premier ordre,
                 des investissements, un financement immobilier, une création de richesse durable par le biais 
                 de fonds/ETF, un bien immobilier autofinancé, une optimisation de l'assurance, une liberté financière.
            </p>
    
            <!-- Contact Details -->
            <div class="footer-details">
                <div class="footer-item">
                    <i class="fas fa-phone-alt"></i>
                    <span class="footer-text">+1 (234) 567-890</span>
                </div>
                <div class="footer-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="footer-text">1234 Main Street, City, Country</span>
                </div>
                <div class="footer-item">
                    <i class="fas fa-envelope"></i>
                    <span class="footer-text">info@example.com</span>
                </div>
            </div>
    
            <!-- Social Media Icons -->
            <div class="social-media">
                <a href="https://www.tiktok.com" target="_blank" class="social-icon">
                    <i class="fab fa-tiktok"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.google.com" target="_blank" class="social-icon">
                    <i class="fab fa-google"></i>
                </a>
                <a href="https://www.youtube.com" target="_blank" class="social-icon">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        function googleTranslateElementInit() {
          console.log('Google Translate Element Initialization'); // Debugging line
          new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,fr,de',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
          }, 'google_translate_element');
        }
      </script>
      <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      <script src="script.js"></script>
</body>
</html>