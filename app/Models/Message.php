<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    
    public const NAOLIDO = 0;
    public const LIDO = 1;
    public const RESPONDIDO = 2;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message'
    ];

    public function status () {
        switch ($this->status) {
            case self::NAOLIDO:
                return "Não lido";
                break;                
            case self::LIDO:
                return "Lido";
                break;
            case self::RESPONDIDO:
                return "Respondido";
                break;
            default:
                return "";
                break;
        }
    }

    public function date () {
        return $this->created_at
            ->locale('pt-BR')
            ->translatedFormat('d \de F Y');
    }
}
