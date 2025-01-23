<div class="hero-scene text-center text-white">
  <div class="hero-scene-content">
    <h1>Mon compte</h1>
  </div>
</div>
<div class="container container-account">
  <div class="account-box">
    <h3><?= $titre_compte ?></h3>
    <?= $message ?>

    <!-- Photo de profil -->
    <form action="mon_compte.php" method="POST" enctype="multipart/form-data">
      <div class="profile-picture-container">
        <label for="photoUpload" class="profile-picture-label">
          <img id="profileImage" src="<?= htmlspecialchars($photo); ?>" alt="Photo de profil" class="profile-picture">
          <div class="edit-overlay">Modifier</div>
        </label>
        <input type="file" id="photoUpload" name="photo" accept="image/*" style="display: none;">
        <button type="submit" name="upload_photo" class="btn btn-primary mt-3">Changer la photo</button>
      </div>
    </form>

    <!-- Crédits -->
    <div class="form-group">
      <label for="credits">Crédits disponibles :</label>
      <p class="form-control" id="credits"><?= $credits ?> crédits</p>
    </div>

    <!-- Informations personnelles -->
    <h4>Informations personnelles</h4>
    <hr>
    <form action="mon_compte.php" method="POST">
      <div class="form-group">
        <label for="pseudo">Pseudo :</label>
        <input type="text" id="pseudo" name="pseudo" class="form-control" value="<?= $pseudo ?>" required>
      </div>

      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" class="form-control" value="<?= $email ?>" required>
      </div>

      <div class="form-group">
        <label for="telephone">Téléphone :</label>
        <input type="text" id="telephone" name="telephone" class="form-control" value="<?= $telephone ?>">
      </div>
<!--
      <div class="form-group">
        <label for="adresse">Adresse complète :</label>
        <input type="text" id="adresse" name="adresse" class="form-control" value="<?= $adresse ?>">
      </div>
    -->
      <div class="form-group">
        <label for="genre">Genre :</label>
        <select id="genre" name="genre" class="form-control">
          <option value="Homme" <?= $genre == "Homme" ? "selected" : "" ?>>Homme</option>
          <option value="Femme" <?= $genre == "Femme" ? "selected" : "" ?>>Femme</option>
          <option value="Non défini" <?= $genre == "Non défini" ? "selected" : "" ?>>Non défini</option>
        </select>
      </div>

      <!-- Sélection du rôle -->
      <div class="form-group">
        <label for="role">Rôle :</label>
        <select id="role" name="role" class="form-control" onchange="toggleDriverFields(this.value)">
          <option value="passager" <?= $role == "passager" ? "selected" : "" ?>>Passager</option>
          <option value="chauffeur" <?= $role == "chauffeur" ? "selected" : "" ?>>Chauffeur</option>
          <option value="passager_chauffeur" <?= $role == "passager_chauffeur" ? "selected" : "" ?>>Passager Chauffeur</option>
        </select>
      </div>

      <!-- Informations chauffeur -->
      <div id="driver-fields" style="display: <?= $role == "chauffeur" || $role == "passager_chauffeur" ? "block" : "none" ?>;">
        <h4>Informations véhicule</h4>
        <div class="form-group">
          <label for="vehicle_plate">Plaque d'immatriculation :</label>
          <input type="text" id="vehicle_plate" name="vehicle_plate" class="form-control" value="<?= $vehicle_plate ?>">
        </div>
        <div class="form-group">
          <label for="registration_date">Date de première immatriculation :</label>
          <input type="date" id="registration_date" name="registration_date" class="form-control" value="<?= $registration_date ?>">
        </div>
        <div class="form-group">
          <label for="vehicle_details">Modèle, couleur, marque :</label>
          <input type="text" id="vehicle_details" name="vehicle_details" class="form-control" value="<?= $vehicle_details ?>">
        </div>
        <div class="form-group">
          <label for="seats_available">Nombre de places disponibles :</label>
          <input type="number" id="seats_available" name="seats_available" class="form-control" value="<?= $seats_available ?>">
        </div>
        <div class="form-group">
          <label for="preferences">Préférences :</label>
          <div>
            <input type="checkbox" id="smoker" name="preferences[]" value="fumeur" <?= in_array("fumeur", $preferences) ? "checked" : "" ?>>
            <label for="smoker">Fumeur</label>
          </div>
          <div>
            <input type="checkbox" id="non_smoker" name="preferences[]" value="non_fumeur" <?= in_array("non_fumeur", $preferences) ? "checked" : "" ?>>
            <label for="non_smoker">Non-Fumeur</label>
          </div>
          <div>
            <input type="checkbox" id="animal" name="preferences[]" value="animal" <?= in_array("animal", $preferences) ? "checked" : "" ?>>
            <label for="animal">Animal</label>
          </div>
          <div>
            <input type="checkbox" id="no_animal" name="preferences[]" value="pas_animal" <?= in_array("pas_animal", $preferences) ? "checked" : "" ?>>
            <label for="no_animal">Pas d'animal</label>
          </div>
          <div>
            <label for="custom_preferences">Autres préférences :</label>
            <input type="text" id="custom_preferences" name="custom_preferences" class="form-control" value="<?= $custom_preferences ?>">
          </div>
        </div>
      </div>

      <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary">Modifier vos informations</button>
        <button type="button" class="btn btn-danger">Supprimer mon compte</button>
      </div>
      <div class="text-center pt-3">
        <a href="/editpassword">Modifier mon mot de passe</a>
      </div>

    </form>
  </div>
</div>
<script>
  function toggleDriverFields(role) {
    const driverFields = document.getElementById('driver-fields');
    driverFields.style.display = (role === 'chauffeur' || role === 'passager_chauffeur') ? 'block' : 'none';
  }
</script>