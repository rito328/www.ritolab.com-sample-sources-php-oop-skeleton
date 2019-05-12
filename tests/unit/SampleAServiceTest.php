<?php
declare(strict_types=1);

namespace tests\unit;

use App\Service\SampleA;
use PHPUnit\Framework\TestCase;

class SampleAServiceTest extends TestCase
{
    protected $SampleService;

    public function setUp()
    {
        parent::setUp();
        $this->SampleService = new SampleA();
    }

    public function tearDown()
    {
        parent::tearDown();
        unset($this->SampleService);
    }

    /**
     * @test
     */
    public function index_返却値の文字列が正しい事を検証()
    {
        $this->assertEquals('This is Sample A', $this->SampleService->index());
    }
}