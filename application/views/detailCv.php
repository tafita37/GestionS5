<div class="cv-container">
            <div class="left-column">
              <img class="portait" src="https://www.codeur.com/tuto/wp-content/uploads/2022/01/MG_0110-4-293x300.jpg" />
              <div class="section">
                <p>
                  <i class="icon fab fa-linkedin text-darkblue"></i> pierre-gomba
                </p>
              </div>
              <div class="section">
                <h2>À PROPOS</h2>
                <p>Nationalite 
                <?php// foreach ($list_Objet as $row ) {?>
                  <?php echo$nationalite['nationalite'];echo" ."; ?></p>
                  <?php//s }?>

                <p>
                  Le <strong>Front-end</strong> est une de mes passions : j’aime intégrer ou imaginer des interfaces modernes, les rendre responsive et les dynamiser avec des animations élégantes. Mes deux technos de coeur sont <strong>Angular</strong> et <strong>Bootstrap</strong>, que j’utilise depuis plus de 6 ans. Je suis aussi Fullstack : PHP, MySQL, Doctrine… 
                </p>
                <p>
                  De nature débrouillard et indépendant dans mon travail, j’aime apprendre de nouvelles technologies, passer du temps à résoudre des problèmes et réaliser du code de qualité. Mes valeurs de travail : clean code, flexibilité, performance et sérieux.
                </p>
              </div>
              <div class="section">
                <h2>COMPÉTENCES</h2>
                <ul class="skills">
                  <li><i class="icon fas fa-check-circle text-darkblue"></i> <strong>Angular &#124; Typescript</strong></li>
                  <li><i class="icon fas fa-check-circle text-darkblue"></i> <strong>Bootstrap</strong></li>
                  <li><i class="icon fas fa-check-circle text-darkblue"></i> <strong>HTML5 &#124; CSS3 &#124; SASS</strong></li>
                  <li><i class="icon fas fa-check-circle text-darkblue"></i> <strong>Javascript</strong></li>
                  <li><i class="icon fas fa-check-circle text-darkblue"></i> <strong>jQuery</strong></li>
                  <li><i class="icon fas fa-check-circle text-darkblue"></i> <strong>npm &#124; Webpack</strong></li>
                  <li><i class="icon fas fa-check-circle text-darkblue"></i> PHP</li>
                  <li><i class="icon fas fa-check-circle text-darkblue"></i> Zend Framework</li>
                  <li><i class="icon fas fa-check-circle text-darkblue"></i> MySQL</li>
                  <li><i class="icon fas fa-check-circle text-darkblue"></i> Git &#124; Github</li>
                </ul>
              </div>
              <div class="section">
                <h2>Langues</h2>
                <p>
                  Français, langue maternelle
                  <br>
                  Anglais, compétence professionnelle
                </p>
              </div>
              <div class="section">
                <h2>Centres d'intérêt</h2>
                <p>
                  Jeux vidéo, jouer et développer
                  <br>
                  Musique, écoute et composition
                  <br>
                  Art en général
                  <br>
                  Sport
                  <br>
                  Informatique en général
                </p>
              </div>
            </div>
            <div class="right-column">
              <div class="header">
                <h1><?php echo $cv['prenom']; ?> <span class="text-blue text-uppercase"><?php echo $cv['nom']; ?></span></h1>
                <p>Freelance Front-end Developer</p>
                <ul class="infos">
                  <li><i class="icon fas fa-at text-blue"></i> <a href="mailto:contact@pgomba.com"><?php echo $cv['email']; ?></a></li>
                  <li><i class="icon fas fa-phone text-blue"></i> <?php echo $cv['telephone']; ?></li>
                  <li><i class="icon fas fa-map-marker-alt text-blue"></i> Boulevard de la Constitution 31, 4020 Liège</li>
                </ul>
              </div>
              <div class="content">
                <div class="section">
                  <h2>Expériences <br><span class="text-blue">professionelles</span></h2>
                  <p>
                    <strong>2015 <i class="fas fa-long-arrow-alt-right"></i> 2021</strong>
                    <br>
                    Fullstack Developer à temps plein chez <em>Webadev SPRL</em>
                  </p>
                  <ul class="experience-list">
                    <li>Réalisations de sites web, d’e-shops, d’interfaces et d’applications web sous Angular et Bootstrap</li>
                    <li>Intégration de templates Photoshop, Illustrator, Sketch, Figma</li>
                    <li>Animations CSS / JS</li>
                    <li>Responsive design</li>
                    <li>UI / UX Design</li>
                    <li>Projets sous npm et Webpack</li>
                    <li>Collaboration avec d’autres studios graphique (Studio Debie, SOL,…)</li>
                    <li>Optimisation des performances</li>
                    <li>Développement de templates et de modules réutilisables</li>
                    <li>Projets en équipe, utilisation quotidienne de SVN, Git et Github</li>
                  </ul>
                </div>
                <div class="section">
                  <p>
                    <strong>2021</strong>
                    <br>
                    Freelance en activité
                  </p>
                  <ul class="experience-list">
                    <li>Freelance Front-end Developer</li>
                    <li>Unity Developer / Sound Designer</li>
                  </ul>
                </div>
                <div class="section">
                  <h2>Études <br><span class="text-blue">& formations</span></h2>
                  <p>
                    <strong>2015 <i class="fas fa-long-arrow-alt-right"></i> 2019</strong>
                    <br>
                    <em><?php echo$diplomeFiliere['diplome']; ?></em>, Diplômé, Institut Saint Laurent
                  </p>
                  <p>
                    <strong>2015</strong>
                    <br>
                    <em>STE-Formations Informatiques</em>, Formation qualifiante de Web Developer
                  </p>
                  <p>
                    <strong>2013 <i class="fas fa-long-arrow-alt-right"></i> 2014</strong>
                    <br>
                    <em>Bachelier en Sciences humaines</em>, Haute École de Liège
                  </p>
                  <p>
                    <strong>2009 <i class="fas fa-long-arrow-alt-right"></i> 2013</strong>
                    <br>
                    <em>Bachelier en Psychologie</em>, Université de Liège
                  </p>
                  <p>
                    <strong>2002 <i class="fas fa-long-arrow-alt-right"></i> 2009</strong>
                    <br>
                    <em>CESS</em>, Institut Notre-Dame de Jupille
                  </p>
                </div>
                <div class="section">
                  <h2>Autres <br><span class="text-blue">expériences</span></h2>
                  <p>
                    Permis B, possession d’une voiture
                    <br>
                    Animateur Scout pendant 6 ans
                    <br>
                    Brevet d’animateur de Centre de Vacances
                  </p>
                </div>
              </div>
            </div>
          </div>