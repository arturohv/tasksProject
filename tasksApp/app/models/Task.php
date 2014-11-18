<?php

class Task extends Eloquent
{
	protected $table = 'tasks';
	protected $fillable = array('userid', 'statusid', 'description');
	protected $guarded  = array('id');
	public    $timestamps = false;

	public static function GetUserTasks($id)
	{
			$sql = 'select id, statusid, description from tasks
			where userid ='. $id;
			return DB::select($sql);
	}

}