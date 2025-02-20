<!DOCTYPE html>
<html>
<head>
    <title>Alerte : Erreur Google Reviews</title>
</head>
<body>
<h1>🚨 Une erreur est survenue</h1>
<p><strong>Message :</strong> {{ $errorMessage }}</p>

@if(!empty($exceptionDetails))
    <p><strong>Détails de l'erreur :</strong> {{ $exceptionDetails }}</p>
@endif

<p>Veuillez vérifier les logs et intervenir rapidement.</p>
</body>
</html>
