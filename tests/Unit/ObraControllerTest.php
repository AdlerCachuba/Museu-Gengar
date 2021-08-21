<?php

namespace Tests\Unit;

use App\Http\Controllers\ObraController;
use App\Models\Obra;
use Tests\TestCase;

class ObraControllerTest extends TestCase
{
    /**
     * Teste unitário para a função show
     *
     * @return void
     */
    public function test_show()
    {
        $obra = new Obra();
        $obra->fill([
            'id'=>1,
            'nome'=>'teste',
            'status'=>'ativo'
            ]);

        $obraController = new ObraController();
        $response = $obraController->show($obra);

        $this->assertEquals($response->getStatusCode(), 200);
        $this->assertJson($response->content());
        $this->assertJsonStringEqualsJsonString($response->content(), json_encode($obra));
    }
}
