<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SiswaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_upload_bukti_bayar(): void
    {

        Storage::fake('avatars');
        $file = UploadedFile::fake()->image('bukti-bayar.jpg');
        $response = $this->post('/upload-bayar', [
            'bukti_bayar' => $file,
        ]);
        Storage::disk('public')->assertExists($file);
        // $response->assertStatus(200);
        // Storage::disk('public')->assertExists($file->hashName());

        // $response = $this->get('/');
        // $response->assertStatus(200);
    }
}
