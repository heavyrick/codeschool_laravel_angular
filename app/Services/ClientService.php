<?php

namespace CsProjeto\Services;

use CsProjeto\Repositories\ClientRepository;
use CsProjeto\Validators\ClientValidator;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class ClientService
 * @package CsProjeto\Services
 */
class ClientService
{
    /**
     * @var ClientRepository
     */
    protected $repository;

    /**
     * @var
     */
    protected $validator;

    /**
     * ClientService constructor.
     * @param ClientRepository $repository
     * @param ClientValidator $validator
     */
    public function __construct(ClientRepository $repository, ClientValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        try {

            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);

        } catch (ValidatorException $e){

            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

    /**
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function update(array $data, $id)
    {
        try {

            $this->validator->with($data)->passesOrFail();
            return $this->repository->update($data, $id);

        } catch (ValidatorException $e){

            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }

    }

}