<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription Administrateur</title>
</head>
<body>
<form action="{{ route('register_admin') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="text" name="nom_postnom" placeholder="Nom & Post-nom" required>
    <select name="sexe" required>
        <option value="F">F</option>
        <option value="M">M</option>
    </select>
    <input type="text" name="naissance" placeholder="Né(e) à" required>
    <input type="text" name="province_origine" placeholder="Province d’Origine" required>
    <input type="text" name="territoire_origine" placeholder="Territoire d’Origine" required>
    <textarea name="etudes" placeholder="Études faites" required></textarea>
    <input type="text" name="adresse" placeholder="Adresse" required>
    <input type="text" name="telephone" placeholder="Téléphone" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
    <input type="password" name="mot_de_passe_confirmation" placeholder="Confirmer le mot de passe" required>
    <input type="file" name="photo_profil" required>
    <button type="submit">Inscription</button>
</form>
</body>
</html>
