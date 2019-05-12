<?php
declare(strict_types=1);

namespace App\Controller;

class IndexController
{
    protected $SampleService;

    public function __construct(SampleInterface $SampleService)
    {
        $this->SampleService = $SampleService;
    }

    public function index()
    {
        var_dump($this->SampleService->index());exit;
    }
}