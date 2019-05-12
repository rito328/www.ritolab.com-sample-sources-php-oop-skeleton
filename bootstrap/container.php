<?php
declare(strict_types=1);

use Psr\Container\ContainerInterface;
use function DI\factory;

return [
    'SampleService' => factory(function (ContainerInterface $c) {
        // return new App\Service\SampleA();
        // ↓ 変更
        return new App\Service\SampleB();
    }),
    'IndexController' => factory(function (ContainerInterface $c) {
        return new App\Controller\IndexController($c->get('SampleService'));
    }),
];
