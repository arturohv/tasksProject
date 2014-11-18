<?php

class Task extends Eloquent
{
	protected $table = 'tasks';
	protected $fillable = array('userid', 'statusid', 'description');
	protected $guarded  = array('id');
	public    $timestamps = false;
}