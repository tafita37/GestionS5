<div id="blog" class="templateux-section">
      <div class="container">

        <div class="row">

          <div class="col-md-8">
            <h2 class="mb-3">World Cup 2018</h2>

            <!-- <p><img src="images/hero_1.jpg" alt="" class="img-fluid"></p> -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
            <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
            <h2 class="mb-3 mt-5">Molestiae cupiditate inventore animi, maxime sapiente optio</h2>
            <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
            <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
            <p>
              <img src="<?php echo base_url("assets/images/slider-1.jpg"); ?>" alt="" class="img-fluid">
            </p>
            <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
            <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p>
            <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>
            <p><a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#productModal">Remplir votre CV</a></p>
            <div class="modal" id="productModal">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content"  style="width : 100%;">
                  <div class="modal-header">
                    <h5 class="modal-title">Votre CV :</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>



                  <!-- remplir cv">
                  < -->
                  

                
                    <div class="containerCv">
                        <form method="POST" id="signup-form" class="signup-form" action="ajouterCv">
                            <div>
                                <h3>Personal info</h3>
                                <fieldset>
                                    <h2>Personal information</h2>
                                    <p class="desc">Please enter your infomation and proceed to next step so we can build your account</p>
                                    <div class="2">
                                                
                                        <div class="form-group">
                                            <label class="form-label">Nom</label>
                                            <input type="text" name="last_name" id="last_name"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="first_name" class="form-label">Prenom</label>
                                            <input type="text" name="first_name" id="first_name" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" id="email" />
                                            <span class="text-input">Example  :<span>  Jeff@gmail.com</span></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="number" name="phone" id="phone" />
                                        </div>
            
                                        <div class="form-date">
                                            <label for="birth_date" class="form-label">Date de naissance</label>
                                            <div class="form-date-group">
                                                <div class="form-date-item">
                                                    <input type="date" name="naissance" id="naissance" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-date">
                                            <label for="birth_date" class="form-label">genre</label>
                                            <div class="form-date-group">
                                                <div class="form-date-item">
                                                    <select id="" name="idGenre">
                                                      <?php foreach ($genres as $genre) { ?> 
                                                        <option value="<?php echo $genre['id_genre']; ?>"><?php echo $genre['nom_genre']; ?></option>
                                                      <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
            
            
                                        <div class="form-group">
                                            <label for="ssn" class="form-label">Address</label>
                                            <select id="" name="idAddress">
                                              <?php foreach ($allAddress as $address) { ?> 
                                                <option value="<?php echo $address['id_adresse']; ?>"><?php echo $address['nom_adresse']; ?></option>
                                              <?php } ?>
                                            </select>
                                        </div>
            
                                        
                                        <div class="form-group">
                                            <label for="ssn" class="form-label">Nationalite</label>
                                            <select id="" name="idNationnalite">
                                              <?php foreach ($nationalites as $nationalite) { ?> 
                                                <option value="<?php echo $nationalite['id_nationalite']; ?>"><?php echo $nationalite['nom']; ?></option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
            
                                <h3>Connect Bank Account</h3>
                                <fieldset>
                                    <h2>Suite information</h2>
                                    <p class="desc">Please enter your infomation and proceed to next step so we can build your account</p>
                                    <div class="fieldset-content">
                                        
                                        <div class="form-group">
                                            <label for="ssn" class="form-label">Diplome</label>
                                            <select id="" name="idDiplome">
                                              <?php foreach ($diplomes as $diplome) { ?> 
                                                <option value="<?php echo $diplome['id_diplome']; ?>"><?php echo $diplome['nom_diplome']; ?></option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="ssn" class="form-label">Filiere</label>
                                            <select id="" name="idFiliere">
                                              <?php foreach ($filieres as $filiere) { ?> 
                                                <option value="<?php echo $filiere['id_filiere']; ?>"><?php echo $filiere['nom_filiere']; ?></option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                          
                                        <div class="form-group">
                                            <label for="ssn" class="form-label">statut matrimoniale</label>
                                            <select id="" name="idStatuMatrimoniale">
                                              <?php foreach ($statutMats as $statutMat) { ?> 
                                                <option value="<?php echo $statutMat['id_statut_matrimonial']; ?>"><?php echo $statutMat['nom_statut_matrimonial']; ?></option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="age" class="form-label">Nombre enfant</label>
                                            <input type="number" name="nbrEnfant" id="nbrEnfant" />
                                        </div>
                                        <div class="form-group">
                                            <label for="competence" class="form-label">Competence technique</label>
                                            <input type="competence" name="competence" id="competence" />
                                        </div>
            
            
                                        <div class="form-row p-t-20">
                                            <label class="label label--block">Avez vous des antecedants judiciaires?</label>
                                            <div class="form-group">
                                            <div class="p-t-15">
                                                <label class="radio-container m-r-55">Oui
                                                    <input type="radio" value="1" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-container">Non
                                                    <input type="radio" checked="checked" value="2" name="exist">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
					                            <button type="submit" class="form-control btn btn-primary submit px-3">Valider</button>
				                            </div>
                                </fieldset>
                            </div>
                        </form>
                    </div>
            
               



                  <!-- fin remplir cv">
                  < -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Relax</a>
                <a href="#" class="tag-cloud-link">Hotel</a>
                <a href="#" class="tag-cloud-link">Luxury</a>
                <a href="#" class="tag-cloud-link">Unwind</a>
              </div>
            </div>


            <div class="pt-5 mt-5">
              <h3 class="mb-5">6 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="<?php echo base_url("assets/images/person_1.jpg"); ?>" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="<?php echo base_url("assets/images/person_1.jpg"); ?>" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="<?php echo base_url("assets/images/person_1.jpg"); ?>" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>


                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="<?php echo base_url("assets/images/person_1.jpg"); ?>" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>Jean Doe</h3>
                            <div class="meta">January 9, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply">Reply</a></p>
                          </div>

                          <ul class="children">
                            <li class="comment">
                              <div class="vcard bio">
                                <img src="<?php echo base_url("assets/images/person_1.jpg"); ?>" alt="Image placeholder">
                              </div>
                              <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply">Reply</a></p>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="<?php echo base_url("assets/images/person_1.jpg"); ?>" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>
              </ul>
              <!-- END comment-list -->

              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <div class="categories">
                <h3>Profil requis</h3>
                <li><a href="#">Diplome <span>Master</span></a></li>
                <li><a href="#">Experience <span>+3 ans</span></a></li>
                <li><a href="#">Position <span> < 20km </span></a></li>
                <li><a href="#">Genre <span> Ouvert </span></a></li>
                <li><a href="#">Filiere <span> Informatique </span></a></li>
                <li><a href="#">Age <span> >22ans </span></a></li>
                <li><a href="#">Casier Judiciaire <span> Aucun </span></a></li>
              </div>
            </div>
            <div class="sidebar-box">
              <img src="<?php echo base_url("assets/images/person_1.jpg"); ?>" alt="Image placeholder" class="img-fluid mb-4 rounded">
              <h3>A propos du service</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              <p><a href="#" class="btn btn-primary btn-lg">En savoir plus</a></p>
            </div>

            <div class="sidebar-box">
              <h3>Competences techniques</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Node JS</a>
                <a href="#" class="tag-cloud-link">Framework Ionic</a>
                <a href="#" class="tag-cloud-link">Spring boot WEB MVC</a>
                <a href="#" class="tag-cloud-link">Laravel</a>
                <a href="#" class="tag-cloud-link">Syfony</a>
                <a href="#" class="tag-cloud-link">React</a>
                <a href="#" class="tag-cloud-link">Angular</a>
                <a href="#" class="tag-cloud-link">Vue js</a>
              </div>
            </div>

            <div class="sidebar-box">
              <h3>Competences linguistiques</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Malagasy</a>
              </div>
            </div>

            <div class="sidebar-box">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        </div>


      </div>
    </div>
