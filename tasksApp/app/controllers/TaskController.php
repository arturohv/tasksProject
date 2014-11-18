<?php

class TaskController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Request::ajax())		
		{			
    		$tareas = Task::GetUserTasks(1);
    		return Response::Json($tareas);
		}
		$this->layout->title = 'Dashboard';
		$this->layout->nest(
			'content',
			'dashboard.index'
		);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$valor = Input::get('key');			
		$tarea = new Task();
		$tarea->userid = 1;
		$tarea->statusid = 1;
		$tarea->description = $valor;
		$tarea->save();
		return Response::Json($valor);	
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$id = Input::get('key');
		$status = Input::get('newstatus');
		
		$tarea = Task::find($id);
		$tarea->statusid = $status;		
		$tarea->save();
		//return Redirect::to('aviones');
		return Response::Json($id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
