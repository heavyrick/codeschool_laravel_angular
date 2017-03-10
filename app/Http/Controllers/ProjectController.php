<?php

namespace CsProjeto\Http\Controllers;

use CsProjeto\Repositories\ProjectRepository;
use CsProjeto\Services\ProjectService;
use Illuminate\Http\Request;

/**
 * Class ProjectController
 * @package CsProjeto\Http\Controllers
 */
class ProjectController extends Controller
{

    /**
     * @var ProjectRepository
     */
    private $repository;

    /**
     * @var ProjectService
     */
    private $service;

    /**
     * ProjectController constructor.
     * @param ProjectRepository $repository
     * @param ProjectService $service
     */
    public function __construct(ProjectRepository $repository, ProjectService $service)
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
        return $this->repository->with('client')->with('user')->find($id);
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
