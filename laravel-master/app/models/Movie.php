<?php
use Eloquent;

class Movie extends Eloquent{
    protected $table	= 'movies';
    protected $fillable = array('name');
}
?>
