<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   /**
    * Table for contact form
    * 
    * @var string
    */
   protected $table = 'contacts';
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstName', 'lastName', 'email', 'companyName'];
}
 /**
     * Return the user's full name.
     */
    public function name()
    {
        $pieces = array_filter(
            array(
                $this->firstName,
                $this->lastName,
            )
        );

        return implode(' ', $pieces);
    }