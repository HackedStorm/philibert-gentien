<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Philibert Gentien</title>
</head>
<body>
   <header>
      <nav>
         <ul>
            <li class="link" ><a href="#presentation">Présentation</a></li>
            <li class="link" ><a href="#competences">Compétences</a></li>
            <li class="link" ><a href="#diplome">Diplômes / Experiences</a></li>
            <li class="link" ><a href="#mon_travail">Mon travail</a></li>
            <li class="link" ><a href="#services">Mes services</a></li>
            <li class="nav_btn"><a href="#contact_form">Me contacter</a></li>
         </ul>
      </nav>
      <section class="first_info_main_container">
         <section class="text">
            <h6>Bonjour, je suis</h6>
            <h1>Philibert Gentien</h1>
            <p class="objectif">Objectif : Front-end Développeur Web</p>
         </section>
         <img src="assets/img/moi.svg" alt="Philibert Gentien photo">
      </section>
   </header>
   <section class="presentation" id="presentation">
      <section class="about_me_text">
         <div class="texte">
            <div class="title_white">
               <p>Présentation</p>
            </div>
            <p>Je m'appelle Philibert Gentien, j'ai 17 ans et je souhaite devenir Développeur Web plus spécifiquement backend développeur mais pour l'instant je me concentre sur le front-end. Je suis en Terminale STI2D option SIN à Jules Ferry à Versailles</p>
         </div>
         <a href="assets/pdf/Philibert_Gentien_CV.pdf" class="download effect-4" download><span>Télécharger mon CV</span></a>
      </section>
      <img src="assets/img/code_3D.svg" alt="Symbole de code ">
   </section>
   <section class="about">
      <div class="section_container">
         <section class="competences" id="competences">
            <div class="title_black">
               <p>Compétences</p>
            </div>
            <div class="main_competences_container">
               <div class="competences_card">
                  <img src="assets/img/HTML.svg" alt="HTML logo">
                  <p>HTML</p>
               </div>
               <div class="competences_card">
                  <img src="assets/img/CSS.svg" alt="Css logo">
                  <p>CSS</p>
               </div>
               <div class="competences_card">
                  <img src="assets/img/MySQL.svg" alt="MySQL logo">
                  <p>MySQL</p>
               </div>
               <div class="competences_card">
                  <img src="assets/img/php.svg" alt="PHP logo">
                  <p>PHP</p>
               </div>
               <div class="competences_card">
                  <img src="assets/img/figma.svg" alt="Figma logo">
                  <p>Figma</p>
               </div>
            </div>
         </section>
         <section class="diplome" id="diplome">
            <div class="title_black">
               <p>Diplômes/Experiences</p>
            </div>
            <div class="main_card_dipl_container">
               <div class="card">
                  <div class="tag">
                     <p>Depuis septembre 2022</p>
                  </div>
                  <div class="content">
                     <h2 class="title_card">Serveur</h2>
                     <span class="lieu">Crêperie de Gally</span>
                     <p class="desc_card">Prise de commande, service des plats et des boisson, renfort de l'équipe à la plonge et rangement de fin de service. Etablisement sous licence 3</p>
                  </div>
               </div>
               <div class="card">
                  <div class="tag">
                     <p>Juin 2022</p>
                  </div>
                  <div class="content">
                     <h2 class="title_card">Stage d'observation</h2>
                     <span class="lieu">Doctolib Paris</span>
                     <p class="desc_card">Stage d'observation de 2nde dans le service Software Engineer</p>
                  </div>
               </div>
               <div class="card">
                  <div class="tag">
                     <p>Juin 2021</p>
                  </div>
                  <div class="content">
                     <h2 class="title_card">Stage d'observation</h2>
                     <span class="lieu">Garage Renault Le Chesnay</span>
                     <p class="desc_card">Stage d'observation de 3ème sur le fonctionnement d'un garage.</p>
                  </div>
               </div>
            </div>
            <div id="more">
               <div class="card_see_more">
                  <div class="tag">
                     <p>Juin 2021</p>
                  </div>
                  <div class="content">
                     <h2 class="title_card">Stage d'observation</h2>
                     <span class="lieu">Garage Renault Le Chesnay</span>
                     <p class="desc_card">Stage d'observation de 3ème sur le fonctionnement d'un garage.</p>
                  </div>
               </div>
               <div class="card_see_more">
                  <div class="tag">
                     <p>Juin 2021</p>
                  </div>
                  <div class="content">
                     <h2 class="title_card">Stage d'observation</h2>
                     <span class="lieu">Garage Renault Le Chesnay</span>
                     <p class="desc_card">Stage d'observation de 3ème sur le fonctionnement d'un garage.</p>
                  </div>
               </div>
               <div class="card_see_more">
                  <div class="tag">
                     <p>Juin 2021</p>
                  </div>
                  <div class="content">
                     <h2 class="title_card">Stage d'observation</h2>
                     <span class="lieu">Garage Renault Le Chesnay</span>
                     <p class="desc_card">Stage d'observation de 3ème sur le fonctionnement d'un garage.</p>
                  </div>
               </div>
            </div>
            <script src="assets/js/see_more_btn.js"></script>
            <a class="see_more" onclick="see_more_btn_js()" id="myBtn"><span>Voir plus</span></a>
         </section>
      </div>
      <section class="montravail" id="mon_travail">
         <div class="title_white">
            <p>Mon travail</p>
         </div>
         <div class="work_card_container">
            <div class="card">
               <img src="assets/img/projet_street_search.svg" alt="Street Search home page">
               <div class="div_content_project_card">
                  <div class="texte_container">
                     <span class="project_title_card">Street Search</span>
                     <p class="project_desc">
                        J'ai rejoins le projet Street Search, le but étant de faire une web app permetant aux fans de street workout de faire des rassemblement, de recencer les parks, et pourvoir facilité la comunication.
                     </p>
                  </div>
                  <a href="" class="effect-4"><span>Voir plus</span></a>
               </div>
            </div>
            <div class="card">
               <img src="assets/img/MDL.svg" alt="MDL dashboard">
               <div class="div_content_project_card">
                  <div class="texte_container">
                     <span class="project_title_card">Dashboard Maison des lycéen</span>
                     <p class="project_desc">
                        J'ai effectué un dashboard pour maintenir plus facilement le contenu du site qui doit être rapidement mis à jour presque quotidiennement
                     </p>
                  </div>
                  <a href="" class="effect-4"><span>Voir plus</span></a>
               </div>
            </div>
         </div>
      </section>
      <div class="section_container2">
         <section class="services" id="services">
            <div class="title_black">
               <p>Mes services</p>
            </div>
            <div class="service_card_container">
               <div class="service_content">
                  <div class="top">
                     <img src="assets/img/service1.svg" alt="Stylo et règle">
                     <p class="serv_title">Développer vos sites en HTML CSS</p>
                  </div>
                  <div class="desc_services">
                     <p>
                        Envoyer moi par mail des maquettes ou images de ce que vous voulez, les textes rédigés, et les images que vous voulez utiliser. (Je ne m'occupe pas de l'hébergement sauf si vous me demander à l'avance.)</p>
                  </div>
               </div>
               <div class="service_content">
                  <div class="top">
                     <img src="assets/img/service2.svg" alt="Outils de répartaion mécanique">
                     <p class="serv_title">Accompagnement</p>
                  </div>
                  <div class="desc_services">
                     <p>Parcequ'un site entretenu c'est mieux, Je vous donne une “formation” sur comment entretenir votre site. 
                        Si toutes fois vous ne voulez pas apprendre à maintenir votre site je peux vous faire un dashboard mais attention que le front-end pour l’instant, et cela ralongera la date pour rendre votre site <p>
                  </div>
               </div>
               <div class="service_content">
                  <div class="top">
                     <img src="assets/img/service3.svg" alt="Un ordinateur avec des engrenage">
                     <p class="serv_title">Garentie</p>
                  </div>
                  <div class="desc_services">
                     <p>Et oui, je vous donne une assurance allant de 2 mois à 1 an en fonction du site que vous m'avez demandé, elle fonctionne pour tout type de destruction éventuelle du site que vous avez mis en ligne. Attention je ferais un devis au préalable pour voir les dégâts.</p>
                  </div>
               </div>
            </div>
         </section>
         <section class="contact_form" id="contact">
            <div class="title_black">
               <p>Me contacter</p>
            </div>
            <form action="assets/php/email.php" method="post">
               <div class="name_plus_gender">
                  <div class="name_input label_and_input">
                     <label for="name">Quelle est votre nom ?</label>
                     <input type="text" name="name" id="name" placeholder="Type here...">
                  </div>
                  <div class="gender_checkbox">
                     <label for="">Quel est votre genre ?</label>
                     <div class="options">
                        <div class="input_radio">
                           <input type="radio" name="genre" id="monsieur" value="monsieur">
                           <label for="monsieur">M.</label>
                        </div>
                        <div class="input_radio">
                           <input type="radio" name="genre" id="madame" value="madame">
                           <label for="madame">Mme.</label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="email_plus_subject">
                  <div class="email label_and_input">
                     <label for="mail">Votre adresse mail :</label>
                     <input type="email" name="mail" id="mail" placeholder="Type here...">
                  </div>
                  <div class="subject label_and_input">
                     <label for="sujet">Sujet de votre message : </label>
                     <input type="text" name="subject" id="subject" placeholder="Type here...">
                  </div>
               </div>
               <div class="message_content">
                  <label for="message">Votre message :</label>
                  <textarea name="message" id="message" cols="30" rows="10" placeholder="Type here..."></textarea>
               </div>
               <button type="submit" class="submit_btn" name="send_mail">Envoyer le message</button>
            </form>
         </section>
      </div>
      <br><br>
   </section>
   <footer>
      <p>Copyright ©2022. All right reserved</p>
   </footer>
   <!-- <div class="buttons">
      <button class="main-button">
      <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M15.75 5.125a3.125 3.125 0 1 1 .754 2.035l-8.397 3.9a3.124 3.124 0 0 1 0 1.88l8.397 3.9a3.125 3.125 0 1 1-.61 1.095l-8.397-3.9a3.125 3.125 0 1 1 0-4.07l8.397-3.9a3.125 3.125 0 0 1-.144-.94Z"></path>
      </svg>
    </button>
    <button class="discord-button button" style="transition-delay: 0s, 0s, 0s; transition-property: translate, background, box-shadow;">
      
    </button>
    <button class="twitter-button button" style="transition-delay: 0.1s, 0s, 0.1s; transition-property: translate, background, box-shadow;">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="30" width="30">
         <path d="M8.432 19.8c7.245 0 11.209-6.005 11.209-11.202 0-.168 0-.338-.007-.506A8.023 8.023 0 0 0 21.6 6.049a7.99 7.99 0 0 1-2.266.622 3.961 3.961 0 0 0 1.736-2.18 7.84 7.84 0 0 1-2.505.951 3.943 3.943 0 0 0-6.715 3.593A11.19 11.19 0 0 1 3.73 4.92a3.947 3.947 0 0 0 1.222 5.259 3.989 3.989 0 0 1-1.784-.49v.054a3.946 3.946 0 0 0 3.159 3.862 3.964 3.964 0 0 1-1.775.069 3.939 3.939 0 0 0 3.68 2.733 7.907 7.907 0 0 1-4.896 1.688 7.585 7.585 0 0 1-.936-.054A11.213 11.213 0 0 0 8.432 19.8Z"></path>
      </svg>
    </button>
    <button class="reddit-button button" style="transition-delay: 0.2s, 0s, 0.2s; transition-property: translate, background, box-shadow;">
      <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M9.708 12a1.039 1.039 0 0 0-1.037 1.037c0 .574.465 1.05 1.037 1.04a1.04 1.04 0 0 0 0-2.077Zm2.304 4.559c.394 0 1.754-.048 2.47-.764a.29.29 0 0 0 0-.383.266.266 0 0 0-.382 0c-.442.454-1.408.61-2.088.61-.681 0-1.635-.156-2.089-.61a.266.266 0 0 0-.382 0 .266.266 0 0 0 0 .383c.705.704 2.065.763 2.471.763Zm1.24-3.509a1.04 1.04 0 0 0 1.039 1.037c.572 0 1.037-.476 1.037-1.037a1.039 1.039 0 0 0-2.075 0Z"></path>
         <path d="M22 12a10 10 0 1 1-20 0 10 10 0 0 1 20 0Zm-4.785-1.456c-.394 0-.753.155-1.015.406-1.001-.716-2.375-1.181-3.901-1.241l.667-3.127 2.173.466a1.038 1.038 0 1 0 1.037-1.087 1.037 1.037 0 0 0-.93.585l-2.422-.512a.254.254 0 0 0-.264.106.232.232 0 0 0-.035.096l-.74 3.485c-1.55.048-2.947.513-3.963 1.24a1.466 1.466 0 0 0-1.927-.082 1.454 1.454 0 0 0 .318 2.457 2.542 2.542 0 0 0-.037.441c0 2.244 2.614 4.07 5.836 4.07 3.222 0 5.835-1.813 5.835-4.07a2.73 2.73 0 0 0-.036-.44c.502-.227.86-.74.86-1.337 0-.813-.656-1.456-1.456-1.456Z"></path>
    </svg>
    </button>
    <button class="messenger-button button" style="transition-delay: 0.3s, 0s, 0.3s; transition-property: translate, background, box-shadow;">
      <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
         <path d="M2 11.7C2 6.126 6.366 2 12 2s10 4.126 10 9.7c0 5.574-4.366 9.7-10 9.7-1.012 0-1.982-.134-2.895-.384a.799.799 0 0 0-.534.038l-1.985.877a.8.8 0 0 1-1.122-.707l-.055-1.779a.799.799 0 0 0-.269-.57C3.195 17.135 2 14.615 2 11.7Zm6.932-1.824-2.937 4.66c-.281.448.268.952.689.633l3.156-2.395a.6.6 0 0 1 .723-.003l2.336 1.753a1.501 1.501 0 0 0 2.169-.4l2.937-4.66c.283-.448-.267-.952-.689-.633l-3.156 2.395a.6.6 0 0 1-.723.003l-2.336-1.754a1.5 1.5 0 0 0-2.169.4v.001Z"></path>
      </svg>
    </button>
    <button class="pinterest-button button" style="transition-delay: 0.4s, 0s, 0.4s; transition-property: translate, background, box-shadow;">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="30" width="30">
         <path d="M12.48 2.4a9.6 9.6 0 0 0-3.498 18.543c-.084-.76-.16-1.927.033-2.757.175-.75 1.125-4.772 1.125-4.772s-.287-.575-.287-1.424c0-1.336.774-2.332 1.738-2.332.818 0 1.214.614 1.214 1.352 0 .824-.524 2.055-.795 3.196-.226.955.48 1.735 1.422 1.735 1.706 0 3.018-1.8 3.018-4.397 0-2.298-1.653-3.904-4.01-3.904-2.732 0-4.335 2.048-4.335 4.165 0 .825.318 1.71.714 2.191a.288.288 0 0 1 .067.276c-.073.302-.235.955-.266 1.088-.042.176-.14.213-.322.129-1.2-.558-1.949-2.311-1.949-3.72 0-3.028 2.201-5.808 6.344-5.808 3.33 0 5.918 2.372 5.918 5.544 0 3.308-2.087 5.971-4.981 5.971-.974 0-1.888-.505-2.201-1.103l-.598 2.283c-.217.834-.803 1.879-1.194 2.516A9.6 9.6 0 1 0 12.48 2.4Z"></path>
      </svg>
    </button>
    <button class="instagram-button button" style="transition-delay: 0.5s, 0s, 0.5s; transition-property: translate, background, box-shadow;">
      
    </button>
    <button class="snapchat-button button" style="transition-delay: 0.6s, 0s, 0.6s; transition-property: translate, background, box-shadow;">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="30" width="30">
         <path d="M21.929 16.407c-.139-.378-.404-.58-.705-.748a1.765 1.765 0 0 0-.154-.08l-.273-.139c-.94-.499-1.674-1.127-2.183-1.872a4.234 4.234 0 0 1-.375-.664c-.043-.125-.04-.195-.01-.259a.424.424 0 0 1 .121-.125l.44-.289a14.1 14.1 0 0 0 .464-.306c.386-.27.656-.558.825-.878a1.745 1.745 0 0 0 .086-1.45c-.256-.672-.891-1.09-1.661-1.09-.206 0-.41.027-.609.082.008-.46-.002-.947-.043-1.424-.146-1.68-.734-2.56-1.347-3.263a5.367 5.367 0 0 0-1.368-1.1C14.204 2.27 13.15 2 11.998 2c-1.15 0-2.2.27-3.131.801-.515.29-.978.663-1.371 1.104-.613.703-1.2 1.584-1.347 3.263-.041.477-.05.965-.045 1.422a2.288 2.288 0 0 0-.608-.081c-.77 0-1.405.418-1.66 1.091a1.747 1.747 0 0 0 .083 1.451c.17.32.44.608.825.877.103.072.263.174.464.307l.424.276c.054.036.1.083.136.138.033.066.034.137-.015.271a4.204 4.204 0 0 1-.369.65c-.497.729-1.21 1.346-2.12 1.84-.481.255-.982.425-1.193 1-.16.435-.055.929.35 1.344.148.156.32.287.51.387a5.54 5.54 0 0 0 1.25.5c.09.023.176.061.253.113.148.13.128.325.324.61.099.147.225.275.37.375.413.286.876.303 1.369.322.444.018.947.038 1.521.225.238.08.486.233.773.41.687.423 1.63 1.003 3.207 1.003s2.525-.583 3.22-1.008c.284-.175.53-.325.761-.401.575-.19 1.079-.21 1.523-.226.491-.019.955-.038 1.369-.323.172-.12.315-.277.42-.46.142-.24.137-.409.27-.525a.783.783 0 0 1 .238-.108 5.552 5.552 0 0 0 1.268-.506c.2-.108.382-.25.536-.42l.005-.006c.38-.406.475-.886.32-1.309Zm-1.401.753c-.855.473-1.424.421-1.866.706-.375.242-.153.763-.425.95-.337.233-1.327-.015-2.607.408-1.056.349-1.73 1.352-3.629 1.352-1.898 0-2.556-1.001-3.63-1.355-1.277-.422-2.27-.175-2.604-.406-.273-.188-.052-.71-.427-.951-.442-.285-1.011-.234-1.865-.704-.545-.3-.236-.488-.055-.575 3.098-1.499 3.592-3.813 3.613-3.985.027-.207.056-.371-.173-.582-.221-.206-1.202-.813-1.475-1.003-.45-.315-.65-.629-.502-1.015.102-.268.351-.369.612-.369.083 0 .166.01.247.028.495.107.975.356 1.252.422a.477.477 0 0 0 .103.014c.147 0 .2-.075.19-.244-.033-.541-.11-1.596-.024-2.582.117-1.355.555-2.028 1.074-2.622.25-.286 1.42-1.525 3.662-1.525 2.24 0 3.415 1.234 3.664 1.52.52.593.957 1.265 1.073 2.622.085.985.012 2.04-.023 2.581-.013.178.042.244.19.244a.442.442 0 0 0 .102-.013c.278-.067.759-.316 1.253-.422a1.14 1.14 0 0 1 .246-.029c.262 0 .511.102.612.369.147.386-.05.7-.5 1.015-.273.19-1.255.797-1.476 1.002-.23.212-.2.375-.174.583.023.175.517 2.489 3.613 3.986.184.091.492.278-.051.58Z"></path>
      </svg>
    </button>
    <button class="whatsapp-button button" style="transition-delay: 0.7s, 0s, 0.7s; transition-property: translate, background, box-shadow;">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" height="30" width="30">
         <path d="M19.001 4.908A9.817 9.817 0 0 0 11.992 2C6.534 2 2.085 6.448 2.08 11.908c0 1.748.458 3.45 1.321 4.956L2 22l5.255-1.377a9.916 9.916 0 0 0 4.737 1.206h.005c5.46 0 9.908-4.448 9.913-9.913A9.872 9.872 0 0 0 19 4.908h.001ZM11.992 20.15A8.216 8.216 0 0 1 7.797 19l-.3-.18-3.117.818.833-3.041-.196-.314a8.2 8.2 0 0 1-1.258-4.381c0-4.533 3.696-8.23 8.239-8.23a8.2 8.2 0 0 1 5.825 2.413 8.196 8.196 0 0 1 2.41 5.825c-.006 4.55-3.702 8.24-8.24 8.24Zm4.52-6.167c-.247-.124-1.463-.723-1.692-.808-.228-.08-.394-.123-.556.124-.166.246-.641.808-.784.969-.143.166-.29.185-.537.062-.247-.125-1.045-.385-1.99-1.23-.738-.657-1.232-1.47-1.38-1.716-.142-.247-.013-.38.11-.504.11-.11.247-.29.37-.432.126-.143.167-.248.248-.413.082-.167.043-.31-.018-.433-.063-.124-.557-1.345-.765-1.838-.2-.486-.404-.419-.557-.425-.142-.009-.309-.009-.475-.009a.911.911 0 0 0-.661.31c-.228.247-.864.845-.864 2.067 0 1.22.888 2.395 1.013 2.56.122.167 1.742 2.666 4.229 3.74.587.257 1.05.408 1.41.523.595.19 1.13.162 1.558.1.475-.072 1.464-.6 1.673-1.178.205-.58.205-1.075.142-1.18-.061-.104-.227-.165-.475-.29Z"></path>
      </svg>
    </button>
    </div> -->
</body>
</html>