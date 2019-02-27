<div class="modal">
    <div class="modal-overlay modal-toggle"></div>
        <div class="modal-wrapper modal-transition">
            <div class="modal-body">
                <center>
                <div class="modal-content">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col mdl-cell--2-col-phone">
                            <span>
                                <a class="nohref" href="../pages/riskmanagement.php">
                                    <img width="60%" src="../_assets/img/risk.png"/>
                                        <p class="text other">Risk Management</p>
                            </span>
                                </a>    
                        </div>
                        <div class="mdl-cell mdl-cell--6-col mdl-cell--2-col-phone">
                            <span>
                                <a class="nohref" href="../pages/gooduse.php">
                                    <img width="60%" src="../_assets/img/good.png"/>
                                        <p class="text other">Good use Programme ensuring correct use</p>
                            </span>
                                </a>    
                        </div>                        
                    </div> 

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col  mdl-cell--2-col-phone">
                            <span>
                                <a class="nohref" href="../pages/theadvantage.php">
                                    <img width="60%" src="../_assets/img/advantage.png"/>
                                        <p class="text other">The Advantages</p>
                            </span>
                                </a>    
                        </div>
                        <div class="mdl-cell mdl-cell--6-col mdl-cell--2-col-phone">
                            <span>
                                <a class="nohref" href="../pages/clinicaltrials.php">
                                    <img width="60%" src="../_assets/img/clinical.png"/>
                                        <p class="text other">Clinical Trial</p>
                            </span>
                                </a>    
                        </div>                        
                    </div>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col mdl-cell--2-col-phone">
                            <span>
                                <a class="nohref" href="../pages/whyadherence.php">
                                    <img width="60%" src="../_assets/img/why.png"/>
                                        <p class="text other">Why Adherence ?</p>
                            </span>
                                </a>    
                        </div>
                        <div class="mdl-cell mdl-cell--6-col mdl-cell--2-col-phone">
                            <span>
                                <a class="nohref" href="../pages/pharmaco.php">
                                    <img width="60%" src="../_assets/img/pharmaco.png"/>
                                        <p class="text other">Pharmaco-Epidemiology</p>
                            </span>
                                </a>    
                        </div>                        
                    </div>

                </div>
                </center>
            </div>     
        </div>
    </div>
</div>

<div class="modal2">
    <div class="modal2-overlay modal2-toggle2"></div>
        <div class="modal2-wrapper modal2-transition">
              <div class="modal2-header">
                <h2 class="modal2-heading">Contact & Access</h2>
              </div>
            <div class="modal2-body">
                <center>
                <div class="modal3-content">

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col"> 
                          <img width="50%" src="../_assets/img/advantage.png"/> 
                        </div>
                        <div class="mdl-cell mdl-cell--6-col"> 
                          <p class="adresse">
                            DoseMetriX<br><br>
                            Incubateur Descartes<br>
                            23, rue Alfred Nobel<br>
                            77420 Champs-sur-Marne<br>
                            France<br>
                            contact@DOSEMETRIX.com
                          </p>                           
                        </div>                        
                    </div>
                        <?php
                            include_once "../includes/formulaire.php"
                        ?> 
                </div>              
                </center>
            </div>     
        </div>
    </div>
</div>

<div class="modal3">
    <div class="modal3-overlay modal3-toggle3"></div>
        <div class="modal3-wrapper modal3-transition">
              <div class="modal3-header">
                <h2 class="modal3-heading">Download our brochures</h2>
              </div>
            <div class="modal3-body">
                  <center>
                <div class="modal3-content">
                <form id="contact" method="post" action="traitement_formulaire.php">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col"> 
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="nom" name="nom">
                            <label class="mdl-textfield__label" for="nom">First name<sup>*</sup></label>
                          </div>   
                        </div>
                        <div class="mdl-cell mdl-cell--6-col"> 
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="prenom" name="prenom">
                            <label class="mdl-textfield__label" for="prenom">Name<sup>*</sup></label>
                          </div>                            
                        </div>                        
                    </div> 

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col"> 
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="titre" name="titre">
                            <label class="mdl-textfield__label" for="titre">Title</label>
                          </div>                            
                        </div>
                        <div class="mdl-cell mdl-cell--6-col">    
                           <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="entreprise" name="entreprise">
                            <label class="mdl-textfield__label" for="entreprise">Company<sup>*</sup></label>
                          </div>                        
                        </div>                        
                    </div>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col">  
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="email" name="email">
                            <label class="mdl-textfield__label" for="email">Email<sup>*</sup></label>
                          </div>                           
                        </div>
                        <div class="mdl-cell mdl-cell--6-col">  
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="telephone" name="telephone">
                                <label class="mdl-textfield__label" for="telephone">Phone<sup>*</sup></label>
                                <span class="mdl-textfield__error">Input is not a number!</span>
                            </div>                          
                        </div>                        
                    </div>

                     <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col">  
                          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="brochure" name="brochure">
                            <label class="mdl-textfield__label" for="brochure">Download brochure</label>
                          </div>                           
                        </div>   
                    </div>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col">  
                            <div class="mdl-textfield mdl-js-textfield message mdl-js-textfield--floating-label">
                                <textarea class="mdl-textfield__input" type="text" rows= "3" id="message" name="message"></textarea>
                                <label class="mdl-textfield__label" for="message">Message<sup>*</sup></label>
                            </div>                          
                        </div>   
                    </div>

                      <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col">  
                            <button type="submit" name="envoi" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Send Email</button>                      
                        </div>   
                    </div>                                                            
                    </form>
                </div>
                </center>
            </div>     
        </div>
    </div>
</div>

<div class="demo-layout-transparent mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--transparent">
        <div class="mdl-layout__header-row">
        <!-- Title -->
        <a href="../pages/index.php">
          <div id="logo" class="mdl-layout-title__header logowhite"></div>
        </a>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation -->
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link modal3-toggle3"><span class="whitebold">Download our brochures<i class="material-icons">keyboard_arrow_down</i></span></a>
            <a class="mdl-navigation__link modal2-toggle2"><span class="whitebold">Contact & access<i class="material-icons">keyboard_arrow_down</i></span></a>
            <a class="mdl-navigation__link" href="../pages/ourvision.php"><span class="whitebold">Our vision</span></a>
            <!-- FAQ -->
            <?php
            include_once "../includes/faqwhite.php"
            ?> 
            <!-- FAQ -->
            <button class="mdl-button btncustom mdl-js-button modal-toggle">Other<i class="material-icons">keyboard_arrow_down</i></button>
        </nav>
        </div>
    </header>

  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title"><a href="../pages/index.php"><div style="margin-top:25px;" class="mdl-layout-title logo"></div></a></span>
    <nav class="mdl-navigation">
            <a class="mdl-navigation__link modal3-toggle3">Download our brochures<i class="material-icons">keyboard_arrow_down</i></a>
            <a class="mdl-navigation__link modal2-toggle2">Contact & access<i class="material-icons">keyboard_arrow_down</i></a>
            <a class="mdl-navigation__link" href="../pages/ourvision.php">Our vision</a>
            <!-- FAQ -->
            <?php
            include_once "../includes/faq.php"
            ?> 
            <!-- FAQ -->
            <a class="mdl-navigation__link modal-toggle">Other<i class="material-icons">keyboard_arrow_down</i></a>
    </nav>
  </div>
  <main class="mdl-layout__content">
  </main>
  </div>