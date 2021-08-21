<?php

namespace Tests\Unit;

use App\Http\Controllers\SecaoController;
use App\Models\Secao;
use Tests\TestCase;

class SecaoControllerTest extends TestCase
{
    /**
     * Teste unitário para a função show
     *
     * @return void
     */
    public function test_show()
    {
        $secao = new Secao();
        $secao->fill([
            'id'=>1,
            'nome'=>'teste',
            'status'=>'ativo'
            ]);

        $secaoController = new SecaoController();
        $response = $secaoController->show($secao);

        $this->assertEquals($response->getStatusCode(), 200);
        $this->assertJson($response->content());
        $this->assertJsonStringEqualsJsonString($response->content(), json_encode($secao));
    }
}
