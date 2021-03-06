<?php

namespace CsProjeto\Http\Controllers;

use CsProjeto\Repositories\ClientRepository;
use CsProjeto\Services\ClientService;
use Illuminate\Http\Request;

/**
 * Class ClientController
 * @package CsProjeto\Http\Controllers
 */
class ClientController extends Controller
{

    /**
     * @var ClientRepository
     */
    private $repository;

    /**
     * @var ClientService
     */
    private $service;

    /**
     * ClientController constructor.
     * @param ClientRepository $repository
     * @param ClientService $service
     */
    public function __construct(ClientRepository $repository, ClientService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    /**
     * Select All
     * @return mixed
     */
    public function index()
    {
        return $this->repository->all();
    }

    /**
     * Select one
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->repository->find($id);
    }

    /**
     * Insert
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    /**
     * Update
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function edit(Request $request, $id){
        $this->repository->find($id)->update($request->all());
    }

    /**
     * Delete
     * @param $id
     */
    public function destroy($id)
    {
        $this->repository->find($id)->delete();
    }

}
