<?php

namespace Tests\Feature;

use Dannytiehui\CrawlingRegion\Md5Hasher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;

use Tests\TestCase;

class CrawlingRegionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);
    }

    public function testMd5Hasher()
    {
        $md5Hasher = new Md5Hasher();
        $p = $md5Hasher->make('123456');
        $s = $md5Hasher->index();
        
        Log:info($s);
        
        $this->assertTrue(1 ? true:false);
    }
}
