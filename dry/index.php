<?php
$name = 'Ilnaz';
$email = 'ilnazamirhanov@mail.ru';
$user = [$name, $email];
print_r($user);
// В случае второго применения данного алгоритма нам придется скопипастить все. То есть:
$name1 = 'Ilnaz';
$email1 = 'ilnazamirhanov@mail.ru';
$user1 = [$name, $email];
print_r($user1);

// вот так должно быть:
function getUser($name, $email)
{
    return [$name, $email];
}
print_r(getUser('Ilnaz', 'ilnazamirhanov@mail.ru'));
print_r(getUser('Ilnaz', 'ilnazamirhanov@mail.ru'));
print_r(getUser('Ilnaz', 'ilnazamirhanov@mail.ru'));
print_r(getUser('Ilnaz', 'ilnazamirhanov@mail.ru'));