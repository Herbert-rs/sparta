<?php

return [
    'customer' => [
        [
            'description' => 'Resumo',
            'icon' => 'mdi mdi-home-outline',
            'route' => '/customer',
            'precedence' => 1,
            'corp' => false,
            'channel' => false,
            'roles' => [1,2,3]
        ],
        [
            'description' => 'Dados Cadastrais',
            'icon' => 'mdi mdi-newspaper',
            'route' => '/customer/data',
            'precedence' => 2,
            'corp' => false,
            'channel' => false,
            'roles' => [1,2]
        ],
        [
            'description' => 'Contatos e Usuários',
            'icon' => 'mdi mdi-account-multiple',
            'route' => '/contact/list',
            'precedence' => 3,
            'corp' => false,
            'channel' => false,
            'roles' => [1]
        ],
        [
            'description' => 'Gestores do Painel',
            'icon' => 'mdi mdi-account-multiple',
            'route' => '/manager/list',
            'precedence' => 3,
            'corp' => false,
            'channel' => false,
            'roles' => [2,3]
        ],
        [
            'description' => 'Serviços',
            'icon' => 'mdi mdi-format-list-bulleted',
            'route' => '/service/list',
            'precedence' => 4,
            'corp' => false,
            'channel' => false,
            'roles' => [1,3]
        ],
        [
            'description' => 'Propostas',
            'icon' => 'mdi mdi-file-document',
            'route' => '/proposal/list',
            'precedence' => 5,
            'corp' => true,
            'channel' => false,
            'roles' => [1]
        ],
        [
            'description' => 'Cobranças',
            'icon' => 'mdi mdi-credit-card',
            'route' => '/collection/list',
            'precedence' => 6,
            'corp' => false,
            'channel' => false,
            'roles' => [1,2]
        ],
        [
            'description' => 'Eventos/Chamados',
            'icon' => 'mdi mdi-note-outline',
            'route' => '/event/list',
            'precedence' => 7,
            'corp' => false,
            'channel' => false,
            'roles' => [1,2,3]
        ],
        [
            'description' => 'Mensagens',
            'icon' => 'mdi mdi-bell',
            'route' => '/message/list',
            'precedence' => 8,
            'corp' => false,
            'channel' => false,
            'roles' => [1,2,3]
        ],
        [
            'description' => 'Histórico de acesso',
            'icon' => 'mdi mdi-history',
            'route' => '/log/list',
            'precedence' => 9,
            'corp' => false,
            'channel' => false,
            'roles' => [1,2,3]
        ],
        /*[
            'description' => 'Viabilidades',
            'icon' => 'fa  fa-wifi',
            'route' => '/order',
            'precedence' => 10,
            'corp' => true,
            'channel' => false,
            'roles' => [1,2,3]
        ],*/
    ]
];
