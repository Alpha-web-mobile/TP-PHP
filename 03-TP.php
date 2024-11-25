3. **Gestion des fichiers** :

- Créer un script pour enregistrer des informations utilisateur (nom, âge, email) dans un fichier texte.
- Lire le fichier pour afficher les données sous forme de tableau HTML dynamique.


<form action="/index.php" method="POST">
    <div class="row g-3 align-items-center">
        <!-- SECTION NAME -->
        <div class="col-auto">
            <label for="firstName" class="col-form-label">Name</label>
            <input type="text" id="firstName" name="name" class="form-control">
        </div>
        <!-- SECTION EMAIL -->
        <div class="col-auto">
            <label for="email" class="col-form-label">Email</label>
            <input type="text" id="email" name="email" class="form-control">
        </div>
        <!-- SECTION AGE -->
        <div class="col-auto">
            <label for="age" class="col-form-label">Age</label>
            <input type="text" id="age" name="age" class="form-control">
        </div>
    </div>
    <button type="submit" onclick="well_come">Submit</button>
</form>


<?php
$name = "";
$email = "";
$age = "";
$userInfos = "";
if (isset($_POST["name"]) &&   (isset($_POST["email"])) &&  (isset($_POST["age"]))) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $userInfos = "$name, $email, $age";
    $resource = fopen("infos.txt", "w");
    fwrite($resource, $userInfos);
    fclose($resource);
}
if (!empty($resource)) {
    $readContent = fopen("infos.text", "r");
    var_dump($readContent);
};

?>