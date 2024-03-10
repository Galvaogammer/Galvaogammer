- 👋 Hi, I’m @Galvaogammer

  <?php
session_start();

// Verifica se o usuário já está autenticado
if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    echo "Bem-vindo, usuário $user_id!";
} else {
    echo "Bem-vindo, visitante!";

    // Gera um ID de usuário aleatório (substitua isso por um método seguro em um ambiente de produção)
    $user_id = uniqid();

    // Salva o ID do usuário na sessão e em um cookie
    $_SESSION['user_id'] = $user_id;
    setcookie('user_id', $user_id, time() + (86400 * 30), "/"); // Cookie válido por 30 dias
  
}

    $pegar_ip = $_SERVER["REMOTE_ADDR"];
    $ip_permitido = "ip_permitido";

    if ($pegar_ip == $ip_permitido) 
    {
       echo 'Ip Permitido!';
    } 
    else 
    { 
        header("Location: url");
    }

?>
