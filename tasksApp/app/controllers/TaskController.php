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
    		$tareas = Task::GetUserTasks(Auth::id());
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
		$tarea->userid = Auth::id();
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
		$this->layout->title = 'Editar Tarea';
		$tarea = Task::find($id);
		$this->layout->nest(
			'content',
			'dashboard.edit',
			array(
				'tarea' => $tarea
			)
		);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$descripcion = Input::get('tarea');				
		$tarea = Task::find($id);
		if ($tarea->userid == Auth::id()) {
			$tarea->description = $descripcion;		
			$tarea->save();
			return Redirect::to('gettasks');
		}
		dd('Tarea de usuario incorrecta');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updateStatus()
	{
		$id = Input::get('key');
		$status = Input::get('newstatus');		
		$tarea = Task::find($id);
		$tarea->statusid = $status;		
		$tarea->save();
		//return Redirect::to('aviones');
		return Response::Json($id);

	}

	public function confirmDelete($id)
	{
		$this->layout->title = 'Eliminar Tarea';
		$tarea = Task::find($id);
		$this->layout->nest(
			'content',
			'dashboard.delete',
			array(
				'tarea' => $tarea
			)
		);		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tarea = Task::find($id);
		if ($tarea->userid == Auth::id()) {
			$tarea->delete();
			return Redirect::to('gettasks');
		}
		dd('Tarea de usuario incorrecta');
		
	}


}
