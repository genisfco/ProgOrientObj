<?php
require_once 'post.php';
require_once 'user.php';
require_once 'session.php';

$post = new Post();
$user = new User();
$session = new Session();

$email = $post->get('email');
$password= $post->get('password');

if(($email =='')||($password ==''))
{
    echo "Os Campos precisam ser Preenchidos!";    
}
else if($email != $user->getEmail() ||$password != $user->getPassword())
{
    echo "Email e/ou Senha incorreta!";
}
else{
    $session->set('user', $user->getName());
    $session->set('email', $user->getEmail());
    $session->set('cpf', $user->getCPF());
    $session->set('link',$user->getLink());

    include 'form.php';
}

?>