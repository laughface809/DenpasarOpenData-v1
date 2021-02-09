<?php

namespace Tests\Feature;

use Tests\TestCase;

class DotaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHome()
    {
        $response = $this->get('/formulir');

        $response->assertStatus(200);
    }

    public function testAnalisis()
    {
        $response = $this->get('/analisis');

        $response->assertStatus(200);
        $response->assertSee('analisis');
    }
    public function testInfografis()
    {
        $response = $this->get('/infografis');

        $response->assertStatus(200);
        $response->assertSee('infografis');
    }
    public function testToolkit()
    {
        $response = $this->get('/toolkit');

        $response->assertStatus(200);
    }
    public function testAbout()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
    public function testKebijakan()
    {
        $response = $this->get('/toolkit/kebijakan');

        $response->assertStatus(200);
    }
    public function testPrinsip()
    {
        $response = $this->get('/toolkit/prinsip');

        $response->assertStatus(200);
    }
    public function testImplementasi()
    {
        $response = $this->get('/toolkit/implementasi');

        $response->assertStatus(200);
    }
    public function testUnduh()
    {
        $response = $this->get('/toolkit/unduh');

        $response->assertStatus(200);
    }
    public function testStorage()
    {
        $response = $this->get('/storage');

        $response->assertStatus(404);
    }
    public function testCSS()
    {
        $response = $this->get('/css');

        $response->assertStatus(404);
    }
    public function testJS()
    {
        $response = $this->get('/js');

        $response->assertStatus(404);
    }
}
