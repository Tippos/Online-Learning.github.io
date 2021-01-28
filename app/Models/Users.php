<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    private $fullName;
    /**
     * @var mixed
     */
    private $birthday;
    /**
     * @var mixed
     */
    private $email;
    /**
     * @var mixed
     */
    private $phoneNumber;
    /**
     * @var mixed
     */
    private $job;
    /**
     * @var mixed
     */
    private $avatar;
    /**
     * @var mixed
     */
    private $facebook;
    /**
     * @var mixed
     */
    private $gender;
    /**
     * @var mixed
     */
    private $country;
    /**
     * @var mixed
     */
    private $role;
    /**
     * @var mixed
     */
    private $status;
}
