<?php

class Token
{
    public function generateUniqueToken($length = 13)
    {
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($length / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($length / 2));
        } else {
            throw new Exception("No hay una función de generación segura de números aleatorios disponible.");
        }

        return substr(bin2hex($bytes), 0, $length);
    }
}

    // Crear una instancia de la clase Token
    $tokenGenerator = new Token();

    // Generar un token único
    $token = $tokenGenerator->generateUniqueToken();


    // Calcular la fecha de expiración (por ejemplo, 1 hora desde ahora)
    $expiracion = time() + 3600; // 3600 segundos = 1 hora

    // Crear el enlace con el token y la fecha de expiración
    $enlace = "https://inolab.com/Registro?token=$token&expiracion=$expiracion";

    // Enviar el enlace por correo o donde sea necesario
    echo "Enlace generado: $enlace";

?>