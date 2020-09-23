<div class="landing jaune">
      <div class="landingHeader">
        DISCUTER AVEC <br />
        UN CONSEILLER
      </div>
    </div>
    <div class="contentLameJaune">
      <h3>
        VOUS SOUHAITEZ EN SAVOIR PLUS SUR Le CPF de transition professionnelle
        OU Préparer votre projet de formation ? LAISSEZ-NOUS VOUS CONTACTER.
      </h3>
      <form action="" method="POST">
        <div>
          <p>
            1. Avez-vous déjà contacté le Fongecif Île-de-France et/ou avez-vous
            déjà créé  votre espace personnel sur www.fongecif-idf.fr ?
          </p>
          <input type="radio" id="oui" name="contact" value="oui" />
          <label for="oui">Oui</label><br />

          <input type="radio" id="non" name="contact" value="non" />
          <label for="non">Non</label>
        </div>

        <div>
          <p>
            2. Vous êtes en :
          </p>
          <input type="radio" id="CDI" name="contrat" value="CDI" />
          <label for="CDI">CDI</label><br />

          <input type="radio" id="CDD" name="contrat" value="CDD" />
          <label for="CDD">CDD</label><br />

          <input type="radio" id="autre" name="contrat" value="autre" />
          <label for="Autre">Autre</label>
        </div>

        <div>
          <p>
            3. Vous avez un projet de reconversion professionnelle :
          </p>
          <input type="radio" id="court" name="terme" value="court" />
          <label for="court">À court terme</label><br />

          <input type="radio" id="moyen" name="terme" value="moyen" />
          <label for="moyen">À moyen terme</label><br />

          <input type="radio" id="long" name="terme" value="long" />
          <label for="long">À long terme</label>
        </div>

        <div>
          <p>
            4. À quel moment de la journée souhaitez-vous être appelé ?
          </p>
          <input type="radio" id="9h" name="heure" value="9h" />
          <label for="9h">Entre 9h et 12h</label><br />

          <input type="radio" id="12h" name="heure" value="12h" />
          <label for="12h">Entre 12h et 14h</label><br />

          <input type="radio" id="14h" name="heure" value="14h" />
          <label for="14h">Entre 14h et 16h</label><br />

          <input type="radio" id="16h" name="heure" value="16h" />
          <label for="16h">Entre 16h et 18h</label>
        </div>

        <div class="flexCol">
          <p>
            5. Vos informations
          </p>
          <label for="nom">Nom</label>
          <input type="text" name="nom" /><br />

          <label for="prenom">Prénom</label>
          <input type="text" name="prenom" /><br />

          <label for="14h">Numéro de téléphone</label>
          <input
            type="tel"
            name="tel"
            pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"
          /><br />

          <label for="email">Adresse email</label>
          <input type="email" name="email" />
        </div>

        <p>Que faites-vous de mes données ?</p>
        <input type="checkbox" name="donnees" />
        <label for="donnees">
          En soumettant ce formulaire, j’accepte que les informationssaisies
          soient exploitées dans le cadre de la demande.</label
        >
        <div>
          <input class="ctaForm" type="submit" value="Envoyer" />
        </div>
      </form>
      <?php
      if(mail('etienne.secondini@hotmail.fr', 'test', 'ca marche enfin')){
        echo "mail envoyé";
      }
      else{ 
        echo "fail";

        }
      ?>
    </div>


    