<?php 
namespace App\Services;

use App\Atendimentos;
use App\Repositories\PetsRepository;
use App\Validators\PetsValidator;
use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\Exceptions\ValidatorException;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Services\AtendimentosService;

class PetsService 
{
    private $respository;
    private $validator;
    private $atendimentosService;

    public function __construct(PetsRepository $respository, PetsValidator $validator, AtendimentosService $atendimentosService)
    {
        $this->respository = $respository;
        $this->validator = $validator;
        $this->atendimentosService = $atendimentosService;
    }

    public function getAll()
    {
        return $this->respository->all();
    }

    public function get($id)
    {
        return $this->respository->find($id);
    }

    public function store(Request $request) 
    { 
        try {
           $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

           $request['created_at'] = \Carbon\Carbon::now();
           $request['updated_at'] = \Carbon\Carbon::now();

           $this->respository->create($request->all());

           return ['data' => ['messages' => 'Salvo com sucesso!', 201]];
        } catch (Exception $e) {
            switch (get_class($e))
            {
                case QueryException::class : return ['data' => ['messages' => $e->getMessage(), 1010]];
                case ValidatorException::class : return ['data' => ['messages' => $e->getMessage(), 1010]];
                case Exception::class : return ['data' => ['messages' => $e->getMessage(), 1010]];
                default : return ['data' => ['messages' => get_class($e), 1010]];
            }
        }
    }

    public function update(Request $request, $id) 
    {
        try {
           $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);
           
           $request['updated_at'] = \Carbon\Carbon::now();
           
           $this->respository->update($request->all(), $id);

           return ['data' => ['messages' => 'Atualizado com sucesso!', 201]];
        } catch (Exception $e) {
            switch (get_class($e))
            {
                case QueryException::class : return ['data' => ['messages' => $e->getMessage(), 1010]];
                case ValidatorException::class : return ['data' => ['messages' => $e->getMessage(), 1010]];
                case Exception::class : return ['data' => ['messages' => $e->getMessage(), 1010]];
                default : return ['data' => ['messages' => get_class($e), 1010]];
            }
        }
    }

    public function delete($id) 
    {
        try {
            $this->atendimentosService->deleteByPet($id);
            $this->respository->delete($id);

           return ['data' => ['messages' => 'Removido com sucesso!', 200]];
        } catch (Exception $e) {

            switch (get_class($e))
            {
                case QueryException::class : return ['data' => ['messages' => $e->getMessage(), 1010]];
                case Exception::class : return ['data' => ['messages' => $e->getMessage(), 1010]];
                default : return ['data' => ['messages' => get_class($e), 1010]];
            }
        }
    }
}

