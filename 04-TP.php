4. **Système de commentaires** :

- Implémenter une page avec un formulaire pour saisir des commentaires.
- Stocker les commentaires dans un fichier JSON et les lire pour les afficher en liste sur la
même page.

<form action="" method="POST">
    <div class="row g-3 align-items-center">
        SECTION NAME
        <!-- <div class="col-auto"> -->
        <!-- <label for="firstName" class="col-form-label">Name</label> -->
        <!-- <input type="text" id="firstName" name="name" class="form-control"> -->
        <!-- </div> -->
        <!-- SECTION EMAIL -->
        <!-- <div class="col-auto"> -->
        <!-- <label for="email" class="col-form-label">Email</label> -->
        <!-- <input type="text" id="email" name="email" class="form-control"> -->
        <!-- </div> -->
        <!-- SECTION AGE -->
        <div class="col-auto">
            <label for="comment1" class="col-form-label">Comment</label>
            <textarea type="text" id="age" name="comment[]" class="form-control">
            </textarea>
        </div>

        <div class="col-auto">
            <label for="comment2" class="col-form-label">Comment</label>
            <textarea type="text" id="age" name="comment[]" class="form-control">
     </textarea>
        </div>
    </div>
    <button type="submit" onclick="well_come">Submit</button>
</form>



<?php
// var_dump($_POST);
$comment1 = "";
$comment2 = "";
$data = [];
if (isset($_POST["comment"]) && (isset($_POST["comment"]))) {
    $comment1 = $_POST["comment"];
    $comment2 = $_POST["comment"];
    $data[""] = $comment1;
    $data[""] = $comment2;
    if (file_exists("./comment.json")) {
        $myComment = file_get_contents(__DIR__ ."");
     
        $myComment = array_push($data);
    }
}
?>